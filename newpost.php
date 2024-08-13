<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
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
    <?php
    echo  "<table>
            <tr ><td>ผู้ใช้:</td><td>$_SESSION[username]</td></tr>
            <tr ><td>หมวดหมู่:</td><td><select name=category >
            <option value=all>--ทั้งหมด--</option>
            <option value=general>เรื่องทั่วไป</option>
            <option value=study>เรื่องเรียน</option> </select><br></td></tr>
            <tr ><td>หัวข้อ:</td><td><input type='text'></td></tr>
            <tr ><td>เนื้อหา:</td><td><textarea></textarea></td></tr>
            <tr ><td></td><td><input type='submit' value='บันทึกข้อความ'></td></tr></table>
            <a href='index.php'>กลับไปหน้าหลัก</a>"

    ?>

</body>
</html>
