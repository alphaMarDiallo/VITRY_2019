<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- lien bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- lien JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- lien de notre fichier JS -->
    <script src="ajax3.js"></script>

    <title>03 AJAX DELETE</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">Supprimer un employé</h1><hr>

        <div id="message_supp"></div><!-- cette div receptionne le message de validation aprés la suppression -->

        <form method="post" action="" class="col-md-4 offset-md-4">
            <div id="employes"><!-- cette div sert à remplacer un selecteur initial par un selecteur mis à jour, c'est à dire sans l'employé supprimé et tout ça en instantané -->
            <?php 
            // Réaliser un selecteur en php avec tout les noms des employés
            require_once('init.php');
            $result = $bdd->query("SELECT * FROM employes");
            //echo '<pre>'; var_dump($result);echo '</pre>';
            echo '<div class="form-group">';
               
                echo '<select class="form-control" id="personne" name="personne">';
                while($employes = $result->fetch(PDO::FETCH_ASSOC))
                {
                    //echo '<pre>'; print_r($employes);echo '</pre>';
                    echo "<option value='$employes[id_employes]'>$employes[nom]</option>";
                }
                echo '</select>';

            echo '</div>';
            ?>
            </div>
            <input type="submit" value="supprimer" id="submit" class="col-md-12 btn btn-dark">
        </form>
    </div>
</body>
</html>