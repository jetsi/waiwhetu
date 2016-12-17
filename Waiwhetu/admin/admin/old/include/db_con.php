<?php

$db_con =mysqli_connect("127.0.0.1", "root", "", "waiwhetu");


/*This is for web server*/
//$db_con =mysqli_connect("127.0.0.1", "jetsingw_jet", "Cyber777", "jetsingw_waiwhetu");


if (!$db_con){
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>