<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "restaurant";

$conn = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

?>
