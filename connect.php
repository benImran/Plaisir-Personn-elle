<?php

$host = "localhost";
$db = "testuser";
$user = "root";
$password = "root";

try
{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $password);
}
catch(PDOException $exception)
{
    die('Erreur : '.$exception->getMessage());
}

$pdo->exec("SET NAMES UTF8");