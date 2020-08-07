<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-dark" style="background-color:#142266;">
        <a class="navbar-brand" href="#">
            <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            WEB PENJUALAN BLK BANDA ACEH
        </a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="budi">Email address</label>
                        <input type="email" class="form-control" id="budi" aria-describedby="emailHelp" name="email">
                    </div>

                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>



                    <button type="submit" class="btn btn-primary" name="login">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if ($email == 'budi@budi' && $pass == 'joko') {
            echo "<script>alert('selamat datang ki joko bodo!!')
                window.location.href='admin';
            </script>";
        } else {
            echo "<script>alert('kamu siapa??')</script>";
        }
    }
    // $username = "ani";
    // $password = "admin";

    // if ($username == "ani" && $password == "admin") {
    //     echo "Selamat datang $username";
    // } else {
    //     echo "Username atau Password Salah";
    // }
    ?>
    <script src="js/bootstrap.js"></script>
    <!-- <script>
        var refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function() {
            document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
        }
    </script> -->
</body>

</html>