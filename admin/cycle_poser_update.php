<?php
include("php_include/connect.php");

// Fetch data from the `income` table
$sql = "SELECT * FROM `user`";
$res = mysqli_query($con, $sql);

// Initialize an array for the CSV data
$csv_data = [];
$csv_data[] = ['ID','NAME','MOBILE', 'LEFT BV','RIGHT BV', 'REFERRAL', 'EMAIL','CYCLE POWER','TOTAL INCOME','TDS']; // Header row
$date=date('Y-m-d');
if ($res && mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $email = $row['email'];

        

        // Append data to the CSV array
        $csv_data[] = [
            $row['userid'],                
            $row['name'],   
            $row['mobile'],   
            $row['award_left_count'],             
            $row['award_right_count'],            
            $row['referral_userid'],          
            $row['email1'],           
            $row['matching'],              
            $row['referral'],   
            $row['total']
        ];
    }
} else {
    // If no results, add a "No data" message
    $csv_data[] = ['No data available'];
}

// Set headers to prompt download as a CSV file
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Today_Payout_list.csv"');

// Open PHP output stream
$output = fopen('php://output', 'w');

// Write each row of data to the CSV file
foreach ($csv_data as $csv_row) {
    fputcsv($output, $csv_row);
}

// Close the output stream
fclose($output);

// Close the database connection
mysqli_close($con);
?>
