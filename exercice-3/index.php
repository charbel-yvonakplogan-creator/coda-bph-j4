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


$sql = "INSERT INTO users (username, email, job)
        VALUES (:username, :email, :job)";

$stmt = $db->prepare($sql);

// Exécution de la requête
$stmt->execute([
    ':username' => 'Batman',
    ':email'    => 'bruce@wayne.com',
    ':job'      => 'Riche'
]);

echo "✔ Batman a été ajouté dans la base.";
?>


?>