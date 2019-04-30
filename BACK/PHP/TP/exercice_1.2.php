<?php
echo '<pre style="background-color:black;color:white;">';
var_dump($_POST);
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>execcice 1.2</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center"> EXERCICE 1.2 </h1>
        <form method="POST" class="col-md-6 offset-md-3 mt-5">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" name="titre">
            </div>
            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input type="text" class="form-control" name="couleur">
            </div>
            <div class="form-group">
                <label for="couleur">Taille</label>
                <select name="taille">
                    <option value=""> -- sélectionnez --</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xs">XS</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="couleur">Poids</label>
                <input type="text" class="form-control" name="poids">
            </div>
            <div class="form-group">
                <label for="couleur">Prix</label>
                <input type="text" class="form-control" name="prix">
            </div>
            <div class="form-group">
                <label for="couleur">Description</label>
                <textarea name="description" cols="40" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="couleur">Stock</label>
                <input type="text" class="form-control" name="stock">
            </div>
            <div class="form-group">
                <label for="couleur">Fournisseur</label>
                <input type="text" class="form-control" name="fournisseur">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
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