

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="acceuil.css">
    <title>Document</title>
</head>
<body>
<h1>TO_DO list</h1>
<button class="trie_echeance"><a href="tache.php?tri=echeance">Trier par échéance</a></button>
<button class="trie_importance"><a  href="tache.php?tri=importance">Trier par importance</a></button>

    <form action="data.php" method="POST">
    <section>
        <h2>Tache a faire</h2>
        <label>Votre tache:</label>
        <input type="text" name="Taches" required><br>
        <label for="Importance">Importance :</label>
        <select name="Importance">
            <option value="élevée">Élevée</option>
            <option value="moyenne">Moyenne</option>
            <option value="faible">Faible</option>
            <label for="echeance"> Pour le  :</label>
        <input type="date" name="Echeance" required>

        </select><br>

        <input type="submit" name="Envoyer">
    </section>
    </form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Taches</th>
      <th scope="col">Importance</th>
      <th scope="col">Action</th>
      <th scope="col">Date</th>
      <th scope="col">Echeance</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
   include 'database.php';
   $tri = "Echeance";
   if (isset($_GET['tri'])) {
       if ($_GET['tri'] == "importance") {
           $tri = "Importance";
       }
   }
   $sql = "SELECT * FROM tache ORDER BY $tri";
   $result=mysqli_query($connexion,$sql);
   if($result){
     while($row=mysqli_fetch_assoc($result)){
       $id=$row["id"];
       $tache=$row["Taches"];
       $importance=$row["Importance"];
       $date=$row["Date"];
       $echeance=$row["Echeance"]; 
       
     
  ?>
  
    <tr>
      <td><?php echo $id ?></td>
      <td><?php echo $tache ?></td>
      <td><?php echo $importance ?></td>
      <td>
        <a href="modifier.php?id=<?php echo $id;?>">Modifier</a>
        <a href="supprimer.php?id=<?php echo $id;?>">Supprimer</a>
      </td>
      <td><?php echo $date ?></td>
      <td><?php echo $echeance ?></td>

    </tr>
    <?php

     }

    
   }
    
    ?>
    
    

    
     
 
      
     
    
 
  </tbody> 
</table>
    
</body>
</html>

