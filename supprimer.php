<?php
include 'database.php';
$id = $_GET['id'];
$sql="DELETE FROM tache WHERE id=$id";
$result=mysqli_query($connexion,$sql);

if($result){
    header("location: ./tache.php");
 }
 

?>
 