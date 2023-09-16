
<?php
 // Connexion à la base de données (utilisez vos propres informations de connexion)
 $bdd = "TO_DOlist";
 $serveur = "localhost";
 $utilisateur = "root";
 $motDePasse = "";
 $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $bdd);

 // Vérifiez la connexion
 if ($connexion->connect_error) {
     die("Erreur de connexion à la base de données : " . $connexion->connect_error);
 }
?>
