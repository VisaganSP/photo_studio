<?php
include 'connection.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //check login details
    if ($username == 'Admin') {
        $sql = "SELECT * FROM moi_software_users WHERE username = '$username' AND upassword = '$password'";
        $result = $conn->query($sql);
        // $stmt->execute();
        //echo $stmt->rowCount();
        //exit();
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            header("location: function.php");
            $_SESSION['success'] = "You are logged in";
        } else {
            header("location: login.php");
            $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>Oh snap! Invalid login details.</div>";
        }
    } else {
        header("location: login.php");
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>Oh snap! Invalid login details.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Photo Studio">
    <meta name="keywords" content="Photo Studio, Visai innovations, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Studio | Visai Innovations</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a href="index.html"><img src="img/boomika/logo.png" class="logoo"></a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav  ml-auto m-2 justify-content-between">
                <span class="pr-4"><a class="nav-link option " href="index.html">HOME</a></span>
                <span class="pr-4"><a class="nav-link option" href="about.html">About</a></span>
                <span class="pr-4"><a class="nav-link option"    href="services.html">Moi services</a></span>
                <span class="pr-4"><a class="nav-link option " href="gallery.html">Gallery</a></span>
                <span class="pr-4"><a class="nav-link option" href="pricing.html">Pricing</a></span>
                <span class="pr-4"><a class="nav-link option" href="contact.html">contact us</a></span>
                <span class="pr-4"><a class="nav-link option activee" href="login.html">Login</a></span>
            </div>
        </div>

    </nav>
    <br><br><br><br><br>
    <div class="row justify-content-center mt-3">
        <div class="col-lg-4 d-sm-none d-md-block left" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">

        </div>
        <div class="col-lg-4 col-sm-4 col-md-6 p-5 " style="background-color:#F3FDE8;">
        <?php if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        } ?>
       <form id="login-form" action="" method="post">
    <h4 style="text-transform: capitalize;">Admin login</h4>
    <div class="input-container">
        <label for="username">Username</label>
        <input type="text" class="un" id="username" name="username" placeholder="Enter your User name" required>
    </div>
    <div class="input-container">
        <label for="password">Password</label>
        <div class="password-container">
            <input type="password" class="pd" id="password" name="password" placeholder="Enter your Password" required>
            <span class="toggle-password" onclick="togglePasswordVisibility()">&#128065;</span>
        </div>
    </div>
    <div class="input-container">
        <button type="submit" name="login" class="btn btn-success pl-4 pr-4">Login</button>
    </div>
</form>
    </d iv>
    </div>

    <script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var toggleButton = document.querySelector(".toggle-password");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleButton.innerHTML = "&#128064;"; // Change to hide icon
        } else {
            passwordField.type = "password";
            toggleButton.innerHTML = "&#128065;"; // Change to show icon
        }
    }
</script>   

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>