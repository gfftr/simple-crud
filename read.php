<?php

require_once('db_connect.php');

// select all from mytable
$query = "SELECT * FROM mytable";

// run query string
if($results = $db_connection->query($query)){
   foreach($results as $result){
    echo $result['firstName'] . " " . $result['email'];
    echo "<br>";
   }
}else{
    echo "no results";
   }


$db_connection = NULL;

?>

