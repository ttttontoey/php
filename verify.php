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
        if($login == "admin" and $pwd == "ad1234")
            echo "ยินดีต้องรับคุณ ADMIN";
        elseif($login == "member" and $pwd == "mem1234")
            echo "ยินดีต้องรับคุณ MEMBER";
        else
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง"
        ?>
        <br><a href="index.php">กลับไปหน้าหลัก</a>
    </div></center>
</body>
</html>