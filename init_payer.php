<?php
require_once('connection.php');
$url = 'http://localhost/MoiSoftwareDb/payer_actions.php';
// Change your desired function name in the functions table from moidatabase in 'table_name' -> 'value'
$data = ['action' => 'GET_ALL_FUNC_PAYER', 'table_name' => 'காதுகுத்து விழா-ராம்ஜி-22-07-2023'];

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

        ?>

        <!-- </tbody> -->
        </table>
    </div>