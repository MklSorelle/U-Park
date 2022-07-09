<?php
$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "db_upark";
$username = "root";
$password = "root";
$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
?>