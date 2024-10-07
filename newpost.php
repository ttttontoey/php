<?php
session_start();
if (!isset($_SESSION['id'])) {
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
        <h1 style="font-family: Comic Sans MS;">Webboard By Tontoey</h1>
        <?php include "nav.php" ?>
    </center>
    <div class="card text-dark bg-white border-info">
        <div class="card-header bg-info text-white">ตั้งกระทู้ใหม่</div>
        <div class="card-body">
            <form action="newpost_save.php" method="post">
                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">หมวดหมู่ :</label>
                    <div class="col-lg-9">
                        <select name="category" class="form-select">
                            <?php
                                $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                $sql="SELECT * FROM category";
                                foreach($conn->query($sql)as $row){
                                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                                }
                            $conn=null;
                            ?>
                            <!-- <option value="general">เรื่องทั่วไป</option>
                            <option value="study">เรื่องเรียน</option> -->
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">หัวข้อ :</label>
                    <div class="col-lg-9">
                        <input type="text" name="topic" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-lg-3 col-form-label">เนื้อหา :</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" name="comment" rows="8" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1g-12">
                        <center>
                            <button type="submit" class="btn btn-info btn-sm text-white">
                                <i class="bi bi-caret-right-square me-1"></i>บันทึกข้อความ
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>

<!-- <?php
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

        ?> -->