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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        

  <style>
   .nav-item .active{
        background-color: green !important;
    }
    .main-div {
            padding: 30px;
        }
        input{
            width:400px !important;
            border-radius: 25px !important;
            background-image: url('search.png'); /* Add your search icon image path here */
            background-repeat: no-repeat; /* Prevent icon repetition */
            background-position: 15px center; /* Adjust the icon's position */
            background-size: 19px 19px; /* Adjust the icon's size */
            border-width:2px;
            margin-bottom:5%;
        }
        input[type="search"]{
            padding-left: 45px !important;
            padding-top: 10px !important;
            padding-bottom: 10px !important ;
        }
        input:focus{
            outline:solid 3px lightgreen;
            border:none;
        }
        .select{
    width: 60px;
    border-width: 3px;
    text-align: center;
    font-size:17px;
}
.select:focus{
    /* outline:solid 2px lightgreen; */
    border: 3px solid green;
}
@media only screen and (max-width:700px){
 
 input{
     width:250px !important;
     border-radius: 25px !important;
     background-image: url('search.png'); /* Add your search icon image path here */
     background-repeat: no-repeat; /* Prevent icon repetition */
     background-position: 15px center; /* Adjust the icon's position */
     background-size: 19px 19px; /* Adjust the icon's size */
 }
 }
  </style>

</head>

<body>
     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
      </div>

    <!-- Header Section Begin -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
        <a href="index.html"><img src="img/company_logo.png" class="logoo"></a>
        
            
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa-solid fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav  ml-auto m-2 justify-content-between">
                      <span class="pr-4"><a class="nav-link option "   href="index.html">HOME</a></span>
                      <span class="pr-4"><a class="nav-link option"    href="about.html">About</a></span>
                      <span class="pr-4"><a class="nav-link option"   href="gallery.html">Events</a></span>
                      <span class="pr-4"><a class="nav-link option activee"   href="services.html">services</a></span>
                      <span class="pr-4"><a class="nav-link option"  href="pricing.html">Pricing</a></span>
                      <span class="pr-4"><a class="nav-link option"  href="contact.html">contact us</a></span>
                  </div>
              </div>
          
      </nav>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->

    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div >
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link  border-0 active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Payers table</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link border-0 " id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Function table</button>
            </li>
          </ul>
          <div class="tab-content text-center" id="pills-tabContent">
            <div class="tab-pane fade show active"  id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form name="myform" action="" method="POST">
                    <div>
                        <input type="text" name="function" id="function-name" placeholder="Enter function name">
                        <input type="submit" name="functionClick" value="Get Payers">
                    </div>
                </form>
            
                <!-- <table class="display nowrap cell-border" style="width:100%" id="myTable">
                        <thead>
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
                        </thead> -->
                <!-- <tbody id='body-tb'> -->
                <?php
                require_once('connection.php');
                $url = 'http://localhost/MoiSoftwareDb/payer_actions.php';
                // Change your desired function name in the functions table from moidatabase in 'table_name' -> 'value'
                $data = ['action' => 'GET_ALL_FUNC_PAYER', 'table_name' => 'காதுகுத்து விழா-ராம்ஜி-22-07-2023'];
            
                dataArangeFunc($url, $data);
            
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
            
                    if (count($data) > 0) {
                        // Open the table
                        // echo "<table class='display nowrap cell-border' style='width:100%' id='myTable'>";
                ?>
                        <div class="main-div">
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
                    }
                }
            
                        ?>
                        <!-- </tbody> -->
                            </table>
                        </div>
            
                    
            
                        <script>
                            $(document).ready(function() {
                                $('#myTable').DataTable({
                                    // "pagingType": "full_numbers",
                                    // "lengthMenu": [
                                    //     [10, 25, 50, -1],
                                    //     [10, 25, 50, "All"],
                                    // ],
                                    // responsive: true,
                                    language: {
                                        search: "",
                                        searchPlaceholder: "Search records..",
                                        
                                    },
                                    // scrollX: true,
                                    // scrollY: 500,
                                    // scrollCollapse: true,
                                    // scrollY: '100vh',
                                    scrollX: true,
                                });
                            });
                        </script>
            
                        <?php
                        if (isset($_POST["functionClick"]) && isset($_POST["function"])) {
                            echo $_POST["function"];
                            $data1 = ['action' => 'GET_ALL_FUNC_PAYER', 'table_name' => $_POST["function"]];
            
                            dataArangeFunc($url, $data1);
                        }
                        ?>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Function</div>
          </div>
    </div>
   


    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="index.html">
                                <!-- <h2 style="color: white">logo</h2> -->
                                  <img src="img/company_logo.png" style="height: 100px; width: 300px;"></img>
                              </a>
                        </div>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Instagram</h5>
                        <div class="fw-instagram">
                            <img src="img/instagram/insta-1.jpg" alt="">
                            <img src="img/instagram/insta-2.jpg" alt="">
                            <img src="img/instagram/insta-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Subscribe</h5>
                        <p>Imolor amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="fw-subscribe">
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by Visai innovations
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
</body>

</html>