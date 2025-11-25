<?php
$host = "localhost";
$port = "3306";
$dbname = "sqlintro";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

$query = $db->prepare('SELECT * FROM users');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($users);

?>

