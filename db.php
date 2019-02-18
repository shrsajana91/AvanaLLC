<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crm";

try{

    $connection = new PDO("mysql:host=$servername;dbname=$database",
        $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $connection->prepare('SELECT name, url FROM menu');
    $sql->execute();

    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    $menu = $sql->fetchAll();
}
catch(PDOException $e)
{
    echo "Connection failed: " .$e->getMessage();
}
?>