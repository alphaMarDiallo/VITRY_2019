<!-- EXERCICE 1 : 

a- Créer un formulaire d'inscription (methode "POST") avec les champs :
=> Prenom
=> Nom
=> email
=> Adresse
=> cade postal
=> Genre (f/h)

b- Afficher dans un tableau PHP les valeurs saisies dans le formulaire.

c- Effectuer tous les contrôles des champs
-->
<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<pre style=background:black;color:white;>';
var_dump($_POST);
echo '</pre>';

// if ($_POST) {


// } 
if ($_POST) { // IF ($_POST) => On dit au php que si le formulaire exist "isset($_POST)" et aussi si le formulaire est vide "empty($_POST)"

    if (!isset($_POST['prenom']) || iconv_strlen($_POST['prenom']) < 5 || iconv_strlen($_POST['prenom']) > 10) {
        //Ici on contrôle le champ prenom en disant que si le champ prenom n'existe pas !isset($_POST['prenom']) OU si les valeurs saisie dans le champs prenom ne sont pas compris entre 5 et 10caractères alors on retourne le message d'erreur ci-dessous.
        echo '<div class="alert alert-warning text-danger text-center col-md-4 offset-md-4"> *Saisissez un prénom valide (5 à 10 caractères) </div>';
    } // FIN  if (!isset($_POST['prenom'])

    if (!isset($_POST['nom']) || iconv_strlen($_POST['nom']) < 5 || iconv_strlen($_POST['nom']) > 10) {
        //Contrôle le champ nom en disant que si le champ nom n'existe pas !isset($_POST['nom']) OU si les valeurs saisie dans le champs nom ne sont pas compris entre 5 et 10caractères alors on retourne le message d'erreur ci-dessous.
        echo '<div class="alert alert-warning text-danger text-center col-md-4 offset-md-4"> *Saisissez un nom valide (5 à 10 caractères) </div>';
    } // FIN if (!isset($_POST['nom'])

    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //Contrôle le champ email en disant que si le champ nom n'existe pas !isset($_POST['email']) OU si la  valeur saisie dans le champs email ne correspond pas à une adresse email "!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)" alors on retourne le message d'erreur ci-dessous.
        echo '<div class="alert alert-warning text-danger text-center col-md-4 offset-md-4"> *Saisissez un email valide </div>';
    } //FIN (!isset($_POST['email'])

    if (!preg_match('#^[0-9]{5}+$#', $_POST['cp'])) {
        //Contrôle le champ code postal en disant que si ce champs ne comporte pas 5 chiffres entre 0 et 9 "!preg_match('#^[0-9]{5}+$#', $_POST['cp'])" alors on retourne le message d'erreur ci-dessous.
        echo '<div class="col-md-4 offset-md-4 alert alert-warning text-center text-danger"> *Code postale non valide !! </div>';
    } // FIN (!preg_match('#^[0-9]{5}+$#', $_POST['cp']))

    if (empty($_POST['adresse'])) {
        //Contrôle le champ adresse en disant que si ce champs est vide "empty($_POST['adresse']" alors on retourne le message d'erreur ci-dessous.
        echo '<div class="col-md-4 offset-md-4 alert alert-warning text-center text-danger"> *Merci de remplire le champs adresse !! </div>';
    } // FIN if (empty($_POST['adresse']))

    if (!isset($_POST['genre']) || $_POST['genre'] != 'h' && $_POST['genre'] != 'f') {
        //Contrôle le champ select genre, ici si le select n'existe pas "!isset($_POST['genre'])" OU si le champ select ne correspond ni à l'option 'h' ET ni à l'option 'f'. Alors on retourne le message d'erreur ci-dessous.
        echo '<div class="col-md-4 offset-md-4 alert alert-warning text-center text-danger"> *Merci de choisir un genre!! </div>';
    } // FIN if(!isset($_POST['genre'])


} //FIN if($_POST)

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercice 2</title>
</head>

<body>
    <h1 class="text-center text-primary mt-5 mb-5">Formulaire d'inscription</h1>
    <div class="container">

        <form method="post" class="offset-3">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="votre prénom" name="prenom">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="votre nom" name="nom">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group col-md-6 mt-4">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="votre @email" name="email">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="adresse">
                </div>
                <div class="col-md-2 mt-4">
                    <input type="text" class="form-control" id="inputZip" placeholder="92350" name="cp">
                </div>
                <div class="col-md-2 mt-4">
                    <select id="inputState" class="form-control" name="genre">
                        <option value=""> - genre -</option>
                        <option value="h">Homme</option>
                        <option value="f">Femme</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-1">Submit</button>
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