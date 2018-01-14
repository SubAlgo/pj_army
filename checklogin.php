<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "{$username}  <br>";
    echo $password;

    if($username == "qwe1") {
        echo "Ok";
    } 
    else {
        echo "sorry";
        //header( "location: ./index.php" );
        header( "refresh:3; url=./index.php" ); 
        exit(1);
    }
?>