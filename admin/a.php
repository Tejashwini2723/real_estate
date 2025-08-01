<?php
// Database configuration
include("php_include/connect.php");

// SQL query to fetch data
$query = "SELECT * FROM `income` WHERE `auto_upgrade` > 199";
$res = mysqli_query($con, $query);



// Check if query succeeded
if (!$res) {
    die("Query failed: " . mysqli_error($con));
}

// Prepare HTML for Excel output
$html = "<table border='1'>
  <tr>
  
    <th>NAME</th>
    <th>MOBILE</th>
  </tr>";

// Fetch and append data to the HTML table
while ($row = mysqli_fetch_assoc($res)) {
$my_userid=$row['email'];
$query_user=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$my_userid'");
$row_user=mysqli_fetch_array($query_user);

    $html .= "<tr>
    <td>" . htmlspecialchars($row['email']) . "</td>
    <td>" . htmlspecialchars($row['auto_upgrade']) . "</td>
  </tr>";
}

// Close the table tag
$html .= "</table>";

// Set headers to download the file as Excel
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="data_export.xls"');
header('Pragma: no-cache');
header('Expires: 0');

// Output the HTML
echo $html;

// Close the database connection
mysqli_close($con);
?>
