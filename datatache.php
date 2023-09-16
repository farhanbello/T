<?php

if (isset($_POST["Envoyer"])) {
    // Récupérez la valeur du champ "Tache" du formulaire
    $tache = $_POST["Taches"];
    $importance = $_POST["Importance"];
    $echeance = $_POST["Echeance"];

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

    // Requête SQL pour insérer la tâche dans la base de données
    $requete = "INSERT INTO tache (Taches,Importance,Echeance) VALUES ('$tache','$importance','$echeance')";
    

    if ($connexion->query($requete) === TRUE) {
        echo "Tâche enregistrée avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement de la tâche : " . $connexion->error;
    }

    // Fermez la connexion à la base de données
    $connexion->close();
}
?>
 