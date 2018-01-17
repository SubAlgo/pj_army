<?php
    include 'db.php';

    
    $username = (string)$_POST['username'];
    $password = (string)$_POST['password'];

    $sql = "SELECT * FROM users WHERE user_id = '{$username}' and user_password = '{$password}'";

    $result = $conn->query($sql);

    echo "{$sql} <br>";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {
            echo "id: {$row['user_id']} - password: {$row['user_password']} - permission: {$row['permission_id']}";
        }
    } else {
        echo "0 results";
    }

    //echo "{$username} <br>";
    //echo "{$password} <br>";

    $conn->close();

?>