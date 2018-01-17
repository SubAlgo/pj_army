<?php
/*
    foreach($x = )

    while($x = $_SERVER->fetch_array()){
        pr $x;
    }
    */
    //$x = $_SERVER;
    //'http://localhost/pj_army/user_management.php'
    //print_r($_SERVER);
    //echo "<br>";
   
  
    $host =  $_SERVER['HTTP_HOST'];
    $project_name = "pj_army";

    echo "http://{$host}/{$project_name}/";

    //while($row = $result->fetch_assoc())
    //echo $_SERVER;
?>