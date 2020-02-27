<?php

require_once "dbconfig.php";

// new PDO($dsn, $dbuser, $dbpassword);
// $dsn = 'mysql:host=...;dbname=...';

$pdo = new PDO("mysql:host={$dbconfig['dbhost']};dbname={$dbconfig['dbname']}", $dbconfig['dbuser'], $dbconfig['dbpassword']);


$jvs = $pdo->query("SELECT * FROM jv")->fetchAll();
