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
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        function button() {
            var x = document.getElementById("password");
            var btn = document.getElementById("Btn");
            
            if (x.type == "password") {
                x.type = "text";
                btn.innerHTML = "<i class='bi bi-eye-slash'></i>";
            } else {
                x.type = "password";
                btn.innerHTML = "<i class='bi bi-eye'></i>";
            }
        }
    </script>
</head>

<body style="background-color: #F2F5ED;">
    <div class="container-lg">
        <center>
            <?php include "nav.php" ?>
        </center>
        <div class="row mt-3">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
                <!-- <div class="alert alert-danger"> -->
                    <?php
                    if(isset($_SESSION['error'])){
                        echo "<div class='alert alert-danger' >Username or Passwoed are incorrect</div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                <div class="card">
                    <h5 class="card-header">เข้าสู่ระบบ</h5>
                    <div class="card-body">
                        <form action="verify.php" method="post">
                            <div class="form-group">
                                <label for="login" class="form-label">Login:</label>
                                <input id=login type="text" class="form-control" name="Login">
                            </div>
                            <div class="form-group mt-3">
                                <label for="password" class="form-label">Password:</label>
                                <div class="input-group">
                                <input id=password type="password" class="form-control" name="Password">
                                <button class="btn btn-secondary" type="button" id="Btn" onclick="button()"><i class="bi bi-eye"></i></button>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <input type="submit" class="btn btn-sm btn-success me-3" value="Login">
                                <input type="reset" class="btn btn-sm btn-danger" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <p style="text-align: center;" class="mt-3">ไม่มีบัญชีใช่หรือไม่ <a href="register.php">สมัครสมาชิก</a></p>
        </div>
    </div>

</body>

</html>
<!-- <table style="border: 2px solid black;width:40%;">
                    <tr>
                        <td colspan="2" style="background-color: #6cd2fe;">เข้าสู่ระบบ</td>
                    </tr>
                    <tr style="font-family: Comic Sans MS;">
                        <td>Login</td>
                        <td><input type="text" name="Login"></td>
                    </tr>
                    <tr style="font-family: Comic Sans MS;">
                        <td>Password</td>
                        <td><input type="password" name="Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form><br> -->