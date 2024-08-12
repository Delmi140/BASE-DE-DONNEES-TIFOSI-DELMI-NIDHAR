<?php

$bdd = mysqli_connect('localhost', 'root','2024', 'tifosi' );

$resultat = mysqli_query($bdd, 'SELECT * FROM ingredient');

while ( $donnees = mysqli_fetch_assoc($resultat)) {
    echo $donnees['id'];
    echo " ";
    echo $donnees['nom'];
    echo "<br/>";
    
}
