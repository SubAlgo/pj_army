<?php
    include 'db.php';

    $user_id = $_POST['userid'];
    $user_name = $_POST['username'];
    $user_surname = $_POST['usersurname'];
    $user_permission = $_POST['permis'];

    
    //echo "$user_id <br>";
    //echo "$user_name <br>";
    //echo "$user_surname <br>";
    //echo "$user_permission <br>";

    $sql = "UPDATE users
            SET user_name = '{$user_name}',
                user_surname = '{$user_surname}',
                permission_id = '{$user_permission}'
            WHERE user_id = '{$user_id}'";

    if (mysqli_query($conn, $sql)) {
        echo "Updata Success!!";
    }
    else {
        echo "Error: {$sql} <br> mysqli_error($conn)";
    }

    header( "refresh:3; url=./user_management.php" ); 
    exit(1);

?>