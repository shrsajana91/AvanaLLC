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

    $sql =$connection->prepare('SELECT name,picture, quantity, price FROM product');
    $sql->execute();

    $result =$sql->setFetchMode(PDO::FETCH_ASSOC);
    $product =$sql->fetchAll();

    $sql =$connection->prepare('SELECT picture, wording, title FROM content');
    $sql->execute();

    $result =$sql->setFetchMode(PDO::FETCH_ASSOC);
    $content =$sql->fetchAll();

}
catch(PDOException $e)
{
    echo "Connection failed: " .$e->getMessage();
}
?>