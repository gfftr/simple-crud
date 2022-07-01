<?php 

/*
try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud_db','root','');
    echo "<h2>DB connected ok</h2>";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
*/


$db_host = 'localhost';
$db_name = 'company';
$db_username = 'admin_gt';
$db_password = 'lemonbalm';

$dsn = "mysql:host=$db_host;dbname=$db_name";


try{
$db_connection = new PDO($dsn, $db_username, $db_password);
echo "was ok";
}catch(Exception $e){
    echo "There was an error" . $e->getMessage();
}


//echo 'Connection successful';
?>