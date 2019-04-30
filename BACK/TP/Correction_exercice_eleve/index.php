<?php
//  BDD

//
echo '<pre style="background:black;color:#fff;">';
echo var_dump($_POST);
echo '</pre>';
//var de msg
$nomError = "";
$preError = "";
$prtError = "";
$clsError = "";
$telError = "";
$msgSuccess ="";
//verif FORM
extract($_POST);
if ($_POST) {
    //1 - JE VERIFIE MES CHAMPS
    if (empty($prenom) || iconv_strlen($prenom) < 2 || iconv_strlen($prenom) > 50) {
        $preError .= '<small class="text-danger">**Saisissez un prenom entre 3 et 50 caractères</small>';
    }
    if (empty($nom) || iconv_strlen($nom) < 2 || iconv_strlen($nom) > 50) {
        $nomError .= '<small class="text-danger">**Saisissez un nom entre 3 et 50 caractères</small>';
    }
    if (empty($classe) || iconv_strlen($classe) < 4 || iconv_strlen($classe) > 80) {
        $nomError .= '<small class="text-danger">**Saisissez entre 3 et 50 caractères</small>';
    }
    if (empty($parents) || iconv_strlen($parents) < 10 || iconv_strlen($parents) > 100) {
        $nomError .= '<small class="text-danger">**Il faut 10 min et 100 max/small>';
    }

    if (!preg_match('#^[ 0-9]{10}+$#', $telephone)) {
        $telError .= '<small class="text-danger">**Saisissez un numéro de telephone valide</small>';
    }

    //2 - J'INSERT EN BDD SI JE N'AI PAS DE MSG D'ERREUR
    if (empty($nomError) && empty($preError) && empty($prtError) && empty($clsError) && empty($telError)) {

        //2-1 JE ME CONNECT a MA BDD
        $bdd = new pdo(
            "mysql:host=localhost;dbname=eleve",
            'root',
            '',
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );
        //2-1 J'INSERT EN BDD
        $newEleve = $bdd->prepare("INSERT INTO eleves (nom, prenom, classe, parents,telephone) VALUES (:nom, :prenom, :classe, :parents, :telephone)");
        
        foreach ($_POST as $key => $value) {

            $newEleve->bindValue(":$key", $value, PDO::PARAM_STR);
        }

        $newEleve->execute();
        
        //3 J'AFFICHE LE MSG DE SUCCESS
        $msgSuccess .= '<div class="alert alert-success">L\'élève à bien été enregistré. </div>';
    }
} //fin if($_POST)



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Révision insertion</title>
</head>

<body>
    <div class="container mt-5">
        <form method="POST">
            <?php echo $msgSuccess; ?>
            <div class="row">
                <div class="col mb-3">
                    <?php echo $nomError; ?>
                    <input type="text" class="form-control" placeholder="Nom de l'élève" name="nom">
                </div>
                <div class="col mb-3">
                    <?php echo $preError; ?>
                    <input type="text" class="form-control" placeholder="Prénom de l'élève" name="prenom">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <?php echo $clsError; ?>
                    <input type="text" class="form-control" placeholder="classe" name="classe">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $prtError; ?>
                    <input type="text" class="form-control" placeholder="Personne à joindre" name="parents">
                </div>
                <div class="col mb-5">
                    <?php echo $telError; ?>
                    <input type="text" class="form-control" placeholder="téléphone" name="telephone">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Enregistrer">
        </form>


    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>