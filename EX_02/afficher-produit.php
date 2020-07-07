<?php 

function connect_to_database(){
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "BaseTest01";

try {
    $pdo = new PDO ("mysql:host=$servername;dbname=$databasename", $username);
    

    echo "Connected successfully";
    return $pdo;
} catch (PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}
}

connect_to_database();


$pdo =connect_to_database();

$users = $pdo->query("SELECT * FROM produit")->fetchAll();

echo "<ul>";
foreach ($users as $user) {
    echo "<li>";
    echo $user['nom']."<br/>";
    echo "</li>";
}

echo "</ul>";











?>