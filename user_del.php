<?php
    include 'db.php';

    $user_id = $_POST['userid'];
  

    $sql = "DELETE FROM users
            WHERE users.user_id = '{$user_id}'";

    if (mysqli_query($conn, $sql)) {
        echo "Delete Success!!";
    }
    else {
        echo "Error: {$sql} <br> mysqli_error($conn)";
    }

    header( "refresh:3; url=./user_management.php" ); 
    exit(1);

?>