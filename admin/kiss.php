<?php
include("php_include/connect.php");

// Set headers to prompt download as a CSV file
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Today_Payout_list.csv"');

// Open PHP output stream
$output = fopen('php://output', 'w');

// Write the header row for the CSV
fputcsv($output, array('Name', 'Email', 'Amount', 'Account No', 'Bank Name', 'IFSC'));

// Fetch data from the database
$sql = mysqli_query($con, "SELECT * FROM `income_received` WHERE `date`='2024-12-24'");
while ($row = mysqli_fetch_array($sql)){
    $email = $row['email'];
    $amount = $row['amount'];

    // Get user details
    $query_user = mysqli_query($con, "SELECT * FROM `user` WHERE `email`='$email'");
    $row_user = mysqli_fetch_array($query_user);
    $name = $row_user['name'];

    // Get income details
    $query_income = mysqli_query($con, "SELECT * FROM `income` WHERE `email`='$email'");
    $row_income = mysqli_fetch_array($query_income);
    $account_no = $row_income['ac'];
    $bank_name = $row_income['bank'];
    $ifsc = $row_income['ifsc'];

    // Write the row to the CSV
    fputcsv($output, array($name, $email, $amount, $account_no, $bank_name, $ifsc));
}

// Close the output stream
fclose($output);

// Close the database connection
mysqli_close($con);
?>
