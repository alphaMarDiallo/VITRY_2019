<?php
echo '<pre style="background-color:black;color:white;">';
var_dump($_POST);
echo '</pre>';

if ($_POST) {
    if (empty($_POST['pseudo']) || iconv_strlen($_POST['pseudo']) < 3 || iconv_strlen($_POST['pseudo']) > 10) {
        echo '<div class=" col-md-4 offset-md-4 alert alert-warning text-danger">*Le pseudo doit contenir entre 3 et 10 caractère.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>exercice 1</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center"> EXERCICE 1 </h1>
        <form method="POST" class="col-md-6 offset-md-3 mt-5">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <input type="text" name="pseudo" class="form-control" placeholder="pseudo">
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="adresse" class="form-control mb-2" placeholder="Adresse">
                </div>
                <div class="col-md-4">
                    <input type="text" name="ville" class="form-control mb-2" placeholder="Ville">
                </div>
                <div class="col-md-4">
                    <input type="text" name="cp" class="form-control mb-2" placeholder="code postal">
                </div>
            </div>
            <div class="row">
                <div class="col offset-md-1 mb-2">
                    <input class="form-check-input" type="checkbox" name="sexe" value="h">
                    Homme
                </div>
                <div class="col offset-md-1 mb-2">
                    <input class="form-check-input" type="checkbox" name="sexe" value="f">
                    Femme
                </div>
            </div>
            <div class="row">
                <div class="col mb-2">

                    <textarea name=" description" cols="50" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Validez</button>
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