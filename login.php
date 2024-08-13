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
    <title>login</title>
</head>
<body>
    <center>
        <h1 style="font-family: Comic Sans MS;">Webboard By Tontoey</h1><hr>
        <form action="verify.php" method="post">
        <table style="border: 2px solid black;width:40%;">
            <tr><td colspan="2" style="background-color: #6cd2fe;">เข้าสู่ระบบ</td></tr>
            <tr style="font-family: Comic Sans MS;"><td>Login</td><td><input type="text" name="Login"></td></tr>
            <tr style="font-family: Comic Sans MS;"><td>Password</td><td><input type="password" name="Password"></td></tr>
            <tr><td colspan="2"style="text-align: center;"><input type="submit" value="Login"></td></tr>
        </table></form><br>
        ไม่มีบัญชีใช่หรือไม่ <a href="register.html">สมัครสมาชิก</a>
    </center>
</body>
</html>