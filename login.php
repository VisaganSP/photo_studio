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
    <link rel="stylesheet" href="grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style the body */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style the container */
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        /* Style the form */
        #login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Style form inputs */
        .input-container {
            margin: 10px 0;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Style the login button */
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .un {
            background-image: url('user.png');
            /* Add your search icon image path here */
            background-repeat: no-repeat;
            /* Prevent icon repetition */
            background-position: 15px center;
            /* Adjust the icon's position */
            background-size: 19px 19px;
        }

        .pd {
            background-image: url('padlock.png');
            /* Add your search icon image path here */
            background-repeat: no-repeat;
            /* Prevent icon repetition */
            background-position: 15px center;
            /* Adjust the icon's position */
            background-size: 19px 19px;
        }
    </style>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a href="index.html"><img src="img/company_logo.png" class="logoo"></a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav  ml-auto m-2 justify-content-between">
                <span class="pr-4"><a class="nav-link option " href="index.html">HOME</a></span>
                <span class="pr-4"><a class="nav-link option" href="about.html">About</a></span>
                <span class="pr-4"><a class="nav-link option " href="gallery.html">Events</a></span>
                <span class="pr-4"><a class="nav-link option" href="pricing.html">Pricing</a></span>
                <span class="pr-4"><a class="nav-link option" href="contact.html">contact us</a></span>
                <span class="pr-4"><a class="nav-link option activee" href="login.html">Login</a></span>
            </div>
        </div>

    </nav>
    <br><br><br><br><br>
    <div class="container">
        <?php if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        } ?>
        <form id="login-form" action="" method="post">
            <h2>Login</h2>
            <div class="input-container">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Please enter username" required>
            </div>
            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Please enter password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const form = document.getElementById("login-form");

        //     form.addEventListener("submit", function(e) {
        //         e.preventDefault();

        //         // Basic validation
        //         const username = document.getElementById("username").value;
        //         const password = document.getElementById("password").value;

        //         if (username === "" || password === "") {
        //             alert("Please fill in all fields.");
        //         } else {
        //             // You can add AJAX request or other logic for authentication here
        //             alert("Login successful!");
        //         }
        //     });
        // });
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