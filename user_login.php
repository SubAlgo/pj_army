<?php
    include 'db.php';

    
    $userid = (string)$_POST['id'];
    $password = (string)$_POST['password'];

    $sql = "SELECT * FROM users WHERE user_id = '{$userid}' and user_password = '{$password}'";

    $result = $conn->query($sql);

    //echo "{$sql} <br>";

    /*ถ้า userid กับ password มีอยู่ในฐานข้อมูล ให้ทำการ setcoolie กับ session
    ------------------------------------------------------------------*/
    if ($result->num_rows > 0) {

        $exp = time() + (60*15); // set time 15 minutes

        setcookie('userid', $userid, $exp);
        setcookie('password', $password, $exp);
       
        $_SESSION['userid'] = $userid;

        header( "refresh:1; url=./user_management.php" ); 
        exit(1);
    
    } else {
        echo "<h2 align='center'>UserID หรือ Password ไม่ถูกต้อง!!!</h2>";
        header( "refresh:3; url=./index.php" ); 
        exit(1);;
    }

    //echo "{$userid} <br>";
    //echo "{$password} <br>";

    $conn->close();

?>