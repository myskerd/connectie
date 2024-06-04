<?php

$host = "localhost";
$db = "winkel";
$user = "root";
$pass = "";
$charset = "utf8mb4";

try {
$dsn = new PDO("mysql:host=$host;dbname=$db;charset=$charset;", $user, $pass);
echo "connected to database(db_winkel)";
} catch (PDOexpedition $error) {
    die($error->getMessage());
}
?>