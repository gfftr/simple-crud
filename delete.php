<?php 

include 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id = '$id'";

$val = $db->query($sql);

if($val){
  //echo $id . " has been deleted";
  header('location: index.php');
}

?>