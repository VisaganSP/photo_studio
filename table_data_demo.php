<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table1.css" type="text/css">
    <link rel="stylesheet" href="table2.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="table.js"></script>
    
    <style>
        /* div.dataTables_wrapper {
            width: 1000px;
            margin: 0 auto;
        } */
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

        if (count($data) > 0) {
            // Open the table
            // echo "<table class='display nowrap cell-border' style='width:100%' id='myTable'>";
    ?>
            <div class="main-div">
                <table class=" nowrap cell-border " style="width:100%;" id="myTable">
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
</body>

</html>