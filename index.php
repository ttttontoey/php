<?php
session_start();
if (!isset($_COOKIE['catagory'])){
    $_COOKIE['catagory'] = "ทั้งหมด";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #F2F5ED;">
    <?php
            include "nav.php"
    ?>
    <div class="container-fluid mt-4 ms-auto me-auto">
        <span class="dropdown">
            หมวดหมู่ :
            <button id="catSelect" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                    echo $_COOKIE['catagory'];
                ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="Button2">
                <li><a onclick="selectCatagory('ทั้งหมด')" class="dropdown-item">--ทั้งหมด--</a></li>
                <?php
                    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root", "");
                    $sql="SELECT name From category";
                    foreach($conn->query($sql) as $row){
                        echo "<li><a onclick='selectCatagory(\"$row[0]\")' class='dropdown-item'>$row[0]</a></li>";
                    }
                    $conn=null;
                ?>
            </ul>
        </span>
        <?php
            if (isset($_SESSION['id']) && $_SESSION['role'] !='b') {
                echo "<a class='btn btn-success btn-sm' style ='float: right' role='button' href='newpost.php'>สร้างกระทู้ใหม่</a>";
            }
        ?>
        <br>
        <br>
        <table class="table table-striped">
            <?php
                $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root", "");
                $sql="SELECT t3.name,t1.title,t1.id,t2.login,t1.post_date,t2.role From post as t1 
                    Inner Join user as t2 ON (t1.user_id=t2.id) 
                    Inner Join category as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                $result=$conn->query($sql);
                while($row = $result->fetch()){
                    if ($_COOKIE['catagory'] != "ทั้งหมด" && $row[0] != $_COOKIE['catagory'] || $row[5] == 'b'){
                        continue;
                    }
                    echo "<tr><td>[ $row[0] ] <a href='post.php?id=$row[2]' style='text-decoration:none'>$row[1]</a><div style ='float: right'>";
                    if(isset($_SESSION['id']) && $_SESSION['username'] == $row[3]){
                        echo "<a onclick='goeditpost($row[2])' class='btn btn-warning' role='button'><i class='bi bi-pencil-fill'></i></a> ";
                    }
                    if(isset($_SESSION['id']) && $_SESSION['role']=='m' && $_SESSION['username'] == $row[3]){
                        echo "<a onclick='confirmdelete($row[2])' class='btn btn-danger' role='button'><i class='bi bi-trash'></i></a>";
                    }
                    else if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
                        echo "<a onclick='confirmdelete($row[2])' class='btn btn-danger' role='button'><i class='bi bi-trash'></i></a>";
                    }
                    echo "</div><br>$row[3] - $row[4]</td></tr>";
                }
                $conn=null;
            ?>
        </table>
        <script>
            function confirmdelete(a) {
                if (confirm("ต้องการจะลบจริงหรือไม่") == true) {
                    location.href = `delete.php?id=${a}`;
                } else {
                    text = "You canceled!";
                }
            };

            function goeditpost(a) {
                location.href = `editpost.php?id=${a}`;
            };

            function selectCatagory(a){
                let catsel = document.getElementById("catSelect");
                document.cookie = "catagory=" + a + ";path=/"
                catsel.textContent = a;
                location.reload();
            };
        </script>
    </div>
</body>

</html>