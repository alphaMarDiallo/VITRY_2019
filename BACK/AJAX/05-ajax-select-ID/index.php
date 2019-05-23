<!DOCTYPE html>
<html lang="en">
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
    <script src="ajax5.js"></script>

    <title>05 AJAX SELECT ID</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">05 AJAX SELECT ID</h1><hr>

        <!-- 1. Réaliser un selecteur dans un formualire en php qui regroupe tout les prénoms des employés, avec un bouton submit -->
        <form method="post" action="" class="col-md-4 offset-md-4 text-center">
        <div class="form-group">
            <select class="form-control" id="personne" name="personne">
            <?php 
            require_once('init.php');
            $result = $bdd->query("SELECT * FROM employes");
            ?>
                <?php while($employes = $result->fetch(PDO::FETCH_ASSOC)): ?>
                    <option value="<?= $employes['id_employes'] ?>"><?= $employes['nom'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <input type="submit" value="filtrer par nom" id="submit" class="col-md-12 btn btn-dark">
        </form><hr>

        <div id="resultat">
        <!-- 2. Réaliser le script PHP permettant d'afficher l'ensemble de la table employes  -->
            <?php $result = $bdd->query("SELECT * FROM employes"); ?>
            <table class="table table-bordered text-center"><tr>
            <?php for($i = 0; $i < $result->columnCount(); $i++): 
                $colonne = $result->getColumnMeta($i); ?>      
            
                <th><?= $colonne['name'] ?></th>

            <?php endfor; ?>
            </tr>
            <?php while($employes = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <?php foreach($employes as $value): ?>
                    <td><?= $value ?></td>
                <?php endforeach ?>
            </tr>    
            <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>
</html>