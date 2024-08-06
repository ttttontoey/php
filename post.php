<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <center>
    <?php
        $i = $_GET["id"];
    ?>
        <h1 style="font-family: Comic Sans MS;">Webboard By Tontoey</h1><hr>
        ต้องการดูกระทู้หมายเลข 
        <?php echo $i."<BR>";
        if(($i%2)==0)
        echo "เป็นกระทู้หมายเลขคู่"; 
        else
        echo "เป็นกระทู้หมายเลขคี่";
        ?>
        
        <table style="border: 2px solid black;width:40%;" >
            <tr><td colspan="2" style="background-color: #6cd2fe;">แสดงความคิดเห็น</td></tr>
            <tr><td style="text-align: center;"><textarea></textarea></td></tr>
            <tr><td colspan="2"style="text-align: center;"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table></form><br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </center>
</body>
</html>