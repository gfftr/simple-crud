<?php 

include 'db_connect.php';



if(isset($_POST['btnsave'])){
 $pname = $_POST['txtname'];
 $price = $_POST['txtprice'];

 echo "name ".$pname."</br>"."price ".$price;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Simple Crud</title>


</head>
<body>
  <form action="" method="post">
    <p><input type="text" name="txtname" placeholder="Product name"></p>
    <p><input type="text" name="txtprice" placeholder="Product price"></p>
    <p><input type="submit" value="Save" name="btnsave"></p>
  </form>
</body>
</html>