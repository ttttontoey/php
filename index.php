<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #F2F5ED;">
    <div class="container-lg">
        <center>
            <?php include "nav.php" ?>
        </center>
        <div class="mt-3">
            <label>หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    -- ทั้งหมด --
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-archive"> ทั้งหมด</i></a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat"> เรื่องทั่วไป</i></a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-backpack"> เรื่องเรียน</i></a></li>
                </ul>
            </span>
            <?php
            if (isset($_SESSION['id'])) {
                echo "<a href='newpost.php' class='btn btn-success btn-sm' style='float: right;'><i class='bi bi-plus'> สร้างกระทู้ใหม่</i></a>";
            } ?>
        </div>
        <table class="table table-striped mt-4">
            <?php
            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
            $sql = "SELECT t3.name,t1.title,t1.id,t2.login,t1.post_date FROM post as t1
            INNER JOIN user as t2 ON (t1.user_id=t2.id)
            INNER JOIN category as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
            $result=$conn->query($sql);
            while($row = $result->fetch()){
                echo "<tr><td>[$row[0]] <a href=post.php?id=$row[2] style=text-decoration:none>$row[1]</a><br>$row[3]-$row[4]</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>

<!-- <?php
        if (!isset($_SESSION['id'])) {
            echo "<a href='login.php' style='float: right;'>เข้าสู่ระบบ</a>";
        } else {
            echo "<span style='float: right;'> 
        ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;
        <a href='logout.php' style='float: right;''>ออกจากระบบ</a>
        </span> ";
            echo "<div><a href='newpost.php'>สร้างกระทู้ใหม่ <br></a></div>";
        }

        ?> -->