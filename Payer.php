<?php
session_start();
include 'connection.php';
if ($_SESSION['username'] == '') {
    header("location: login.php");
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/search-dropdown-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- New Version cdn link -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <!-- Old Version on folder - js -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <style>
        .nav-item .active {
            background-color: green !important;
        }

        .main-div {
            padding: 30px;
        }

        input[type="search"] {
            width: 400px !important;
            padding-left: 45px !important;
            padding-top: 10px !important;
            padding-bottom: 10px !important;
            background-image: url('search.png');
            /* Add your search icon image path here */
            background-repeat: no-repeat;
            /* Prevent icon repetition */
            background-position: 15px center;
            /* Adjust the icon's position */
            background-size: 19px 19px;
        }

        input:focus {
            outline: solid 3px lightgreen;
            border: none;
        }

        @media only screen and (max-width:700px) {
            input[type="search"] {
                width: 250px !important;
                padding-left: 45px !important;
                padding-top: 10px !important;
                padding-bottom: 10px !important;
                background-image: url('search.png');
                /* Add your search icon image path here */
                background-repeat: no-repeat;
                /* Prevent icon repetition */
                background-position: 15px center;
                /* Adjust the icon's position */
                background-size: 19px 19px;
            }

        }
        .admin-nav{
        margin-left:.5em ;
        }
    </style>


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <!-- Header Section Begin -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
      <a href="function.php"><img src="img/admin.png" style="height:50px;"></a>
      <h5 class="admin-nav"> ADMIN PAGE</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  ml-auto m-2 justify-content-between">
                    <span class="pr-4"><a class="nav-link option "   href="function.php">FUNCTION TABLE</a></span>
                    <span class="pr-4"><a class="nav-link option activee"    href="payer.php">PAYER TABLE</a></span>
                    <span class="pr-4"><a class="nav-link btn btn-danger"  style="color:white;"  href="logout.php">LOGOUT</a></span>
                </div>
            </div>
        
    </nav>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->

    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <br>
    <br>
<br><br>
    <div class="text-center">
        <div class="autocomplete">
            <form action="" method="POST" autocomplete="off" id="functionSearch" name="functionSearch">
                <input type="text" id="search-box" name="search-box" placeholder="Search function..." required>
                <input class="btn btn-success get-payer mb-1" type="submit" name="functionClick" value="Get Payers">
            </form>

            <ul id="suggestions-list"></ul>
        </div>

        <?php
        if (isset($_POST["functionClick"]) && isset($_POST["search-box"])) {
            $url = 'http://localhost/MoiSoftwareDbOnline/payer_actions.php';

            echo "<h5 style='text-align:center;margin-top:3%;'>" . $_POST['search-box'] . "</h5>";
            $data1 = ['action' => 'GET_ALL_FUNC_PAYER', 'table_name' => $_POST["search-box"]];

            dataArangeFunc($url, $data1);
        }
        ?>
        <?php
        require_once('connection.php');
        $url = 'http://localhost/MoiSoftwareDbOnline/payer_actions.php';
        // Change your desired function name in the functions table from moidatabase in 'table_name' -> 'value'
        $data = ['action' => 'GET_ALL_FUNC_PAYER', 'table_name' => 'காதுகுத்து விழா-ராம்ஜி-22-07-2023'];

        // dataArangeFunc($url, $data);

        function dataArangeFunc($url, $data)
        {
            // use key 'http' even if you send the request to https://...
            $selections = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data),
                ],
            ];

            $context = stream_context_create($selections);
            $result = file_get_contents($url, false, $context);

            if ($result === false) {
                /* Handle error */
            }

            // var_dump($result);
            $data =  json_decode($result);

            if ($data != null && count($data) > 0) {
                // Open the table
                // echo "<table class='display nowrap cell-border' style='width:100%' id='myTable'>";
        ?>
                <div class="main-div" style="">
                    <table class=" display nowrap cell-border " style="width:100%;" id="myTable">
                        <thead style="background-color:green;color:white;">
                            <tr>
                                <th>Id</th>
                                <th>செலுத்துபவர் பெயர்</th>
                                <th>செலுத்துபவர் இன்ஷியல்</th>
                                <th>செலுத்துபவர் கைபேசி என்</th>
                                <th>செலுத்துபவர் தொழில்</th>
                                <th>செலுத்தும் பொருள்</th>
                                <th>முறை</th>
                                <th>தொகை</th>
                                <th>பரிசு பொருள்</th>
                                <th>உறவு முறை</th>
                                <th>ஊர் இன்ஷியல்</th>
                                <th>செலுத்துபவர் ஊர்</th>
                                <th>செலுத்துபவர் முகவரி</th>
                                <th>தேதி</th>
                                <th>நேரம்</th>
                            </tr>
                        </thead>
                <?php
                echo "<tbody id='body-tb'>";

                // Cycle through the array
                foreach ($data as $idx => $payer_data) {

                    // Output a row
                    echo "<tr>";
                    echo "<td>$payer_data->id</td>";
                    echo "<td>$payer_data->payer_name</td>";
                    echo "<td>$payer_data->payer_initial</td>";
                    echo "<td>$payer_data->payer_phno</td>";
                    echo "<td>$payer_data->payer_work</td>";
                    echo "<td>$payer_data->payer_given_object</td>";
                    echo "<td>$payer_data->payer_cash_method</td>";
                    echo "<td>$payer_data->payer_amount</td>";
                    echo "<td>$payer_data->payer_gift_name</td>";
                    echo "<td>$payer_data->payer_relation</td>";
                    echo "<td>$payer_data->payer_city_initial</td>";
                    echo "<td>$payer_data->payer_city</td>";
                    echo "<td>$payer_data->payer_address</td>";
                    echo "<td>$payer_data->current_date1</td>";
                    echo "<td>$payer_data->current_time1</td>";
                    echo "</tr>";
                }

                echo "<tbody>";
                // Close the table
                // echo "</table>";
            } else {
                echo "<h1>No Payers found...</h1>";
            }
        }

                ?>

                <!-- </tbody> -->
                    </table>
                </div>


    </div>


    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <!-- <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div> -->
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script>
        console.log("Executed...");

        $(document).ready(function() {
            console.log("Executed...1");

            $('#myTable').DataTable({
                language: {
                    search: "",
                    searchPlaceholder: "Search records..",

                },
                scrollX: true,
            });

            $('#myTable1').DataTable({
                language: {
                    search: "",
                    searchPlaceholder: "Search records..",

                },
                scrollX: true,
            });
        });

        // $(function() {

        //     var visited = localStorage['visited'];
        //     visited = false;
        //     console.log(`visited: ${visited}`);
        //     // if (!visited) {
        //     //     init();
        //     //     localStorage['visited'] = true;
        //     // }

        //     function init() {
        //         const searchBox = document.getElementById("search-box");

        //         console.log("loading,,,,,");

        //         const options = {
        //             method: 'POST',
        //             url: 'http://localhost/MoiSoftwareDb/function_actions.php',
        //             body: '{"action":"GET_ALL_FUNC"}',
        //         };
        //         fetch(`search_config.php?query=ரா`)
        //             .then((response) =>
        //                 // console.log(response.json());
        //                 response.json()
        //             )
        //             .then((data) => {
        //                 console.log("loading,,,,,32323232");
        //                 console.log(data);

        //                 data.forEach((data1, index) => {
        //                     console.log(data1);

        //                 });
        //                 searchBox.value = data[data.length - 1];
        //                 document.forms["functionSearch"].submit();
        //             });
        //     }

        // });
    </script>

    <!-- <h1 align="center"><?php echo $_SESSION['success']; ?></h1> -->
    <!-- <h2 align="center">Welcome to the home page <?php echo $_SESSION['username']; ?></h2> -->

    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/search-dropdown.js"></script>

    <script src="js/main.js"></script>
</body>

</html>