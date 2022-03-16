<?php
$pdo = new PDO("sqlite:films.db");
$insere = "INSERT INTO table_films (Titre, Auteur ) VALUES('La vie est belle! ','Verne')";
$pdo->prepare($insere);
$pdo->exec($insere);
$visu = "SELECT * FROM table_films";
$statement = $pdo->prepare($visu);
$statement->execute();
$verif = $statement->fetchAll();
print_r($verif);

?>