
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="acceuil.css">
    <title>Modifier une tâche</title>
</head>
<body>
    <h1>Modifier une tâche</h1>
    <?php
    include 'database.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tache WHERE id = $id";
        $result = mysqli_query($connexion, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $tache = $row["Taches"];
            $importance = $row["Importance"];
            $date = $row["Date"];
            $echeance = $row["Echeance"];
            ?>
            <form action="modifier_action.php" method="POST">
                <section>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label>Tâche:</label>
                <input type="text" name="Taches" value="<?php echo $tache; ?>" required><br>
                <label for="Importance">Importance :</label>
                <select name="Importance">
                    <option value="élevée" <?php if ($importance == 'élevée') echo 'selected'; ?>>Élevée</option>
                    <option value="moyenne" <?php if ($importance == 'moyenne') echo 'selected'; ?>>Moyenne</option>
                    <option value="faible" <?php if ($importance == 'faible') echo 'selected'; ?>>Faible</option>
                </select><br>
                <label for="echeance"> Pour le :</label>
                <input type="date" name="Echeance" value="<?php echo $echeance; ?>" required>
                <input type="submit" name="Modifier" value="Modifier">
                    
                </section>
                
            </form>
            <?php
        } else {
            echo "Erreur : " . mysqli_error($connexion);
        }
    } else {
        echo "Aucun identifiant de tâche fourni.";
    }
    ?>
</body>
</html>




    
 



 
 
 
 
 
 