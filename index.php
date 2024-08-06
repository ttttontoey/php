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
    <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
    <ul>
        <?php
        for($i=1;$i<=10;$i=$i+1)
        {
            echo"<li><a href=post.php?id=$i> กระทู้ที่ $i</a></li>";
        }
        ?>
    </ul>
</body>
</html>