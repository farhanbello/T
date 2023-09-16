<?php
    
    $tache = $_POST["Taches"];
    $importance = $_POST["Importance"];
    $echeance = $_POST["Echeance"];
    include 'database.php';

    
    $requete = "INSERT INTO tache (Taches,Importance,Echeance) VALUES ('$tache','$importance','$echeance')";
    
    $result=mysqli_query($connexion,$requete);
    if($result){
        header("location: ./tache.php");
    }
?>
 