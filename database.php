
<?php
 
 $bdd = "TO_DOlist";
 $serveur = "localhost";
 $utilisateur = "root";
 $motDePasse = "";
 $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $bdd);

 
 if ($connexion->connect_error) {
     die("Erreur de connexion à la base de données : " . $connexion->connect_error);
 }
?>
