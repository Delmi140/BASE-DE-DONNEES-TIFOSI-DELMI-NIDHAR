<?php

$dsn = 'mysql:dbname=tifosi; host =localhost';
$bbd = new PDO($dsn, 'root', '2024');

$resultat = $bbd->query("SELECT * FROM boisson");

while ($row = $resultat->fetch()) {
    echo $row['id']." ".$row['nom']."<br />\n";
}