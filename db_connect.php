<?php 


try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud_db','root','');
    echo "<h2>DB connected ok</h2>";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}


//echo 'Connection successful';
?>