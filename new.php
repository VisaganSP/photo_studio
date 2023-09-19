<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/search-dropdown-styles.css">
    <style>
        .nav-item .active {
            background-color: green !important;
        }

        .main-div {
            padding: 30px;
        }
        input[type="search"]{
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
        @media only screen and (max-width:700px){
            input[type="search"]{
            width: 300px !important;
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
    </style>
</head>
<body>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<ul class="nav nav-tabs">
   <li><a href="#a" data-toggle="tab">Payers</a></li>
   <li><a href="#b" data-toggle="tab">Function</a></li>
</ul>

<div class="tab-content">
   <div class="tab-pane active" id="a">
   <div class="autocomplete">
                    <form action="" method="POST" autocomplete="off" id="functionSearch" name="functionSearch" >
                        <input type="text" id="search-box" name="search-box" placeholder="Search..." required>
                        <input class="btn btn-success get-payer mb-1" type="submit" name="functionClick" value="Get Payers">
                    </form>

                    <ul id="suggestions-list"></ul>
                </div>

                <?php
                if (isset($_POST["functionClick"]) && isset($_POST["search-box"])) {
                    $url = 'http://localhost/MoiSoftwareDb/payer_actions.php';

                    echo "<h5 style='text-align:center; margin-top:5%;'>" . $_POST['search-box'] . "</h5>";
                    $data1 = ['action' => 'GET_ALL_FUNC_PAYER', 'table_name' => $_POST["search-box"]];

                    dataArangeFunc($url, $data1);
                }
                ?>
                <?php
                require_once('connection.php');
                $url = 'http://localhost/MoiSoftwareDb/payer_actions.php';
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
                    } else {
                        echo "<h1>No Payers found...</h1>";
                    }
                }

                        ?>

                        <!-- </tbody> -->
                            </table>
                        </div>
            </div>
   </div>
   <div class="tab-pane" id="b">
   <?php
                require_once('connection.php');
                $url = 'http://localhost/MoiSoftwareDb/function_actions.php';
                // Change your desired function name in the functions table from moidatabase in 'table_name' -> 'value'
                $data = ['action' => 'GET_ALL_FUNC'];

                // dataArangeFunc($url, $data);
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
                    <div class="main-div">
                        <table class=" display nowrap cell-border " style="width:100%;" id="myTable1">
                            <thead style="background-color:green;color:white;">
                                <tr>
                                    <th>Id</th>
                                    <th>விழா பெயர்</th>
                                    <th>விழா ஊர்</th>
                                    <th>விழா இடம்</th>
                                    <th>விழா தொடங்கும் தேதி</th>
                                    <th>விழா ஆரம்ப நேரம் </th>
                                    <th>விழா முடியும் தேதி</th>
                                    <th>விழா முடியும் நேரம்</th>
                                    <th>நாட்கள் </th>
                                    <th>நடத்துபவர் </th>
                                    <th>நடத்துபவர் கைபேசி எண் </th>
                                    <th>விழா நாயகன் </th>
                                    <th>விழா நாயகி </th>
                                    <th>மொத்த செலவு</th>
                                    <th>நடத்துபவர் ஊர் </th>
                                    <th>நடத்துபவர் முகவரி</th>
                                </tr>
                            </thead>
                        <?php
                        echo "<tbody id='body-tb'>";

                        // Cycle through the array
                        foreach ($data as $idx => $function_data) {

                            // Output a row
                            echo "<tr>";
                            echo "<td>$function_data->id</td>";
                            echo "<td>$function_data->function_name</td>";
                            echo "<td>$function_data->function_held_city</td>";
                            echo "<td>$function_data->function_held_place</td>";
                            echo "<td>$function_data->function_start_date</td>";
                            echo "<td>$function_data->function_start_time</td>";
                            echo "<td>$function_data->function_end_date</td>";
                            echo "<td>$function_data->function_end_time</td>";
                            echo "<td>$function_data->function_total_days</td>";
                            echo "<td>$function_data->function_owner_name</td>";
                            echo "<td>$function_data->function_owner_phno</td>";
                            echo "<td>$function_data->function_hero_name</td>";
                            echo "<td>$function_data->function_heroine_name</td>";
                            echo "<td>$function_data->function_amt_spent</td>";
                            echo "<td>$function_data->function_owner_city</td>";
                            echo "<td>$function_data->function_owner_address</td>";
                            echo "</tr>";
                        }

                        echo "<tbody>";
                        // Close the table
                        // echo "</table>";
                    } else {
                        echo "<h1>No Functions found...</h1>";
                    }

                        ?>

                        <!-- </tbody> -->
                        </table>
                    </div>
            </div>
        </div>
   </div>
  
</div>
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
</body>
</html>