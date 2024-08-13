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
    <title>Document</title>
</head>
<body>
    <center>
        <h1>สมัครสมาชิก</h1><hr>
        <table style="border: 2px solid black;width:40%;">
            <tr><td colspan="2" style="background-color: #6cd2fe;">กรอกข้อมูล</td></tr>
            <tr><td>ชื่อบัญชี:</td><td><input type="text" name="name"></td></tr>
            <tr><td>รหัสผ่าน:</td><td><input type="text" name="Pass"></td></tr>
            <tr><td>ชื่อ-นามสกุล:</td><td><input type="text" name="Pass"></td></tr>
            <tr><td>เพศ:</td>
                <td style="font-family: Comic Sans MS;">
                    <input type="radio" name="gender" value="M">Male<br>
                    <input type="radio" name="gender" value="f">Female<br>
                    <input type="radio" name="gender" value="l">LGBTQA+<br>
                </td>
            </tr>
            <tr><td style="font-family: Comic Sans MS;">Email:</td><td><input type="text" name="mail"></td></tr>
            <tr><td colspan="2" style="text-align: center;"><input type="submit" value="สมัครสมาชิก"></td></tr>
        </table><br>
        <a href="index.html">กลับไปหน้าหลัก</a>
    </center>
</body>
</html>