<?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = 'pj_army';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





    $sql = "select * from users";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
   echo 'show';
    }
 else {
    echo "0 results";
}
$conn->close();
?>