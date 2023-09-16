<?php
    // Récupérez la valeur du champ "Tache" du formulaire
    $tache = $_POST["Taches"];
    $importance = $_POST["Importance"];
    $echeance = $_POST["Echeance"];
    include 'database.php';

    // Requête SQL pour insérer la tâche dans la base de données
    $requete = "INSERT INTO tache (Taches,Importance,Echeance) VALUES ('$tache','$importance','$echeance')";
    
    $result=mysqli_query($connexion,$requete);
    if($result){
        header("location: ./tache.php");
    }
?>
 