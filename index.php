<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
</head>
<body>
    <center>
        <h1 style="font-family: Comic Sans MS;">Webboard By Tontoey</h1><hr>
    </center>
    หมวดหมู่: 
    <select name="category" >
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <?php
    if(!isset($_SESSION['id'])){
    echo"<a href='login.php' style='float: right;''>เข้าสู่ระบบ</a>";
    }else{
    echo "<span style='float: right;'> 
        ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;
        <a href='logout.php' style='float: right;''>ออกจากระบบ</a>
        </span> ";
    echo"<div><a href='newpost.php'>สร้างกระทู้ใหม่ <br></a></div>";
    }

    ?>
    <ul>
        <?php
        for($i=1;$i<=10;$i=$i+1)
        {
            echo"<li><a href=post.php?id=$i> กระทู้ที่ $i</a>";
            if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
                echo "&nbsp;<a href='delete.php?id=$i'>ลบ</a>";
            }
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>