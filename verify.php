<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <center>
    <?php
        $login = $_POST["Login"];
        $pwd = $_POST["Password"];
    ?>
    <h1 style="font-family: Comic Sans MS;">Webboard By Tontoey</h1><hr>
    <div style="text-align: center;">
        <?php
        if($login=="admin" && $pwd=="ad1234"){
            $_SESSION['username']="admin";
            $_SESSION['role']="a";
            $_SESSION['id']=session_id();
            echo "ยินดีต้องรับคุณ ADMIN <br>";
            echo "<a href="."index.php".">กลับไปหน้าหลัก</a>";
        }
        else if($login=="member" && $pwd=="mem1234"){
            $_SESSION['username']="member";
            $_SESSION['role']="m";
            $_SESSION['id']=session_id();
            echo "ยินดีต้องรับคุณ MEMBER <br>";
            echo "<a href="."index.php".">กลับไปหน้าหลัก</a>";
        }else{echo "ชื่อผู้ใช้บัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
            echo "<a href="."login.php".">ย้อนกลับ</a>";}
        ?>
    </div></center>
</body>
</html>

<!-- if($login == "admin" and $pwd == "ad1234")
            echo "ยินดีต้องรับคุณ ADMIN";
        elseif($login == "member" and $pwd == "mem1234")
            echo "ยินดีต้องรับคุณ MEMBER";
        else
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง" -->