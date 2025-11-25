<?php
require 'exercice-1/index.php';

$sql = "UPDATE users
        SET job = :job
        WHERE username = :username";

$stmt = $db->prepare($sql);

$stmt->execute([
    ':job' => 'Journaliste',  
    ':username' => 'Spiderman'
]);

echo "Spider-Man a maintenant le job Journaliste.";
?>
