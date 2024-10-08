<?php
session_start();
if (isset($_SESSION['id'])) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #F2F5ED;">
    <?php include "nav.php" ?>
    <?php
        if (isset($_SESSION['add_login'])){
            if($_SESSION['add_login'] == 'error'){
                echo "<div class= 'alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีมีปัญหา</div>";
            }else{
            echo "<div class='alert alert-success'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";     
            }
            unset($_SESSION['add_login' ]);
        }
    ?>
    <div class="container-lg">
        <div class="row mt-3">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
                <div class="card">
                    <h5 class="card-header text-white" style="background-color:#B7CEDE;">สมัครสมาชิก</h5>
                    <div class="card-body">
                        <form action="register_save.php" method="post">
                            <div class="mb-2 row">
                                <label for="login" class="col-lg-3 col-form-label">username :</label>
                                <div class="col-lg-8">
                                <input id="login" type="text" class="form-control" name="login" required>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="pwd" class="col-lg-3 col-form-label">Password :</label>
                                <div class="col-lg-8">
                                <input id="pwd" type="password" class="form-control" name="pwd" required>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="name" class="col-lg-3 col-form-label">Name-Lastname :</label>
                                <div class="col-lg-8">
                                <input id="name" type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="gender" class="col-lg-3 col-form-label">Gender :</label>
                                <div class="col-lg-8">
                                    <div class="from-check">
                                    <input class="form-check-input" type="radio" name="gender" value="M" required>
                                    <label class="form-check-label" for="m"> Male</label>
                                    </div>
                                    <div class="from-check">
                                    <input class="form-check-input" type="radio" name="gender" value="M" required>
                                    <label class="form-check-label" for="f"> Female</label>
                                    </div>
                                    <div class="from-check">
                                    <input class="form-check-input" type="radio" name="gender" value="M" required>
                                    <label class="form-check-label" for="o"> LGBTQIA+</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="email" class="col-lg-3 col-form-label">Email :</label>
                                <div class="col-lg-8">
                                <input id="email" type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-sm btn-primary" required><i class="bi bi-basket"></i> สมัครสมาชิก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<!-- 
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
        <a href="index.php">กลับไปหน้าหลัก</a>
    </center> -->