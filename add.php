<?php 
include 'db_connect.php';

if(isset($_POST['send'])){

 $name = $_POST['task'];

 $sql = "INSERT INTO tasks (name) values ('$name')"; 

 $val = $db->query($sql);

 if($val){
   //echo "<h1>Successfully inserted</h1>";
   header('location: index.php');
 }

}

?>