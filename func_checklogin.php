<?php
     /*function check Login
    
    if(!isset($_SESSION['userid'])) {
        echo "<h2 align='center'>ท่านยังไม่ได้เข้าสู่ระบบ</h2>";
        echo "session: {$_SESSION['userid']} <br>";
        echo "cookie: {$_COOKIE['userid']}";
        //header( "refresh:3; url=./index.php" ); 
        //exit(1);
    } else if(($_SESSION['userid'] == $_COOKIE['userid'])) {
        echo "เข้าสู่ระบบเรียบร้อยแล้ว!!";
        echo "session: {$_SESSION['userid']} <br>";
        echo "cookie: {$_COOKIE['userid']}";
    }
    --------------------*/

    if(!isset($_COOKIE['userid'])){
        echo "<h2 align='center'>ท่านยังไม่ได้เข้าสู่ระบบ</h2>";
        header( "refresh:3; url=./index.php" ); 
        exit(1);
    } else {
        echo "<h2 align='center'>เข้าสู่ระบบเรียบร้อยแล้ว!!</h2> <br>";
        echo $_COOKIE['userid'];
    }
?>

  