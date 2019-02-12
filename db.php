<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crm";

try{

    $conn = new PDO("mysql:host=$servername;dbname=$database",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
}
catch(PDOException $e)
{
    echo "Connection failed: " .$e->getMessage();
}
?>