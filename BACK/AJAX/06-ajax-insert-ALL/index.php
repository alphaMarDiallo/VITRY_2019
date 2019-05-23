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
    <script src="ajax6.js"></script>

    <title>06 AJAX INSERT ALL</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">06 AJAX INSERT ALL</h1><hr>

        <div id="resultat">
        <!-- Traitement PHP pour afficher l'ensemble de la table employé -->
        <?php 
        require_once('init.php');
        $result = $bdd->query("SELECT * FROM employes");
        echo '<table class="table table-bordered text-center"><tr>';
        for($i = 0; $i < $result->columnCount(); $i++)
        {
            $colonne = $result->getColumnMeta($i);
            echo "<th>$colonne[name]</th>";
        }
        echo '</tr>';
        while($employes = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo '<tr>';
            foreach($employes as $value)
            {
                echo "<td>$value</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
        </div>

        <div id="message"></div>

        <form method="post" class="col-md-6 offset-md-3" id="form1">
            <div class="form-row">
                <div class="col">
                <input type="text" class="form-control" id="prenom" name="prenom "placeholder="Enter prénom">
                </div>
                <div class="col">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter nom">
                </div>
            </div>
             <div class="form-row mt-2">
                <div class="col">
                 <select class="form-control" id="sexe" name="sexe">
                    <option value="m">Homme</option>
                    <option value="f">Femme</option>
                </select>
                </div>
                <div class="col">
                <input type="text" class="form-control" id="service" name="service" placeholder="Enter service">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col">
                <input type="date" class="form-control" id="date_embauche" name="date_embauche">
                </div>
                <div class="col">
                <input type="text" class="form-control" id="salaire" name="salaire" placeholder="Enter salaire">
                </div>
            </div>
            <input type="submit" value="Enregistrer" id="submit" class="col-md-12 btn btn-dark mt-2 mb-4">
        </form>
    </div>
</body>
</html>