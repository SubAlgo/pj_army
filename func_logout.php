<?php
    //unset($_SESSION['userid']);
    echo $_COOKIE['userid'];
   
    $userid = null;
    $exp = time() - (60*15);
    setcookie('userid','qq',$exp);
    
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
<?php
       echo $_COOKIE['userid'];
    header( "refresh:1; url=http://localhost/pj_army/index.php" ); 
    exit(1);
?>
    
</body>
</html>