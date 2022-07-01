<?php 

require_once('db_connect.php');

/*
$query = "SELECT * FROM mytable";
$results = $db_connection->query($query);
$db_connection = NULL;

foreach($results as $result){
 echo $result['email'];
 echo "</br>";
}
*/

// insert a record
/*
$query = "INSERT INTO mytable (id,firstName,surname, dob, email)
          VALUES (NULL, 'James', 'Jones', '1988-11-11', 'james@myschool.com')";
          if($db_connection->exec($query)){
             echo "Success";
          }else{
            echo "Failed";
          }
*/

$db_connection = NULL;
?>