<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>

<div class="container">

    <form action="data.php" method="post" role="form">
        <legend>Création de Compte</legend>

        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Julien">

        </div>
        <div class="form-group">
            <label for="homme">Homme</label>
            <input type="radio" name="gender" id="homme" value="homme">

            <label for="femme">Femme</label>
            <input type="radio" name="gender" id="femme" value="femme">
        </div>
        <div class="form-group">
            <h3>Sport</h3>
            <label for="rugby">Rugby</label>
            <input type="checkbox" name="sport[]" id="rugby" value="rugby">
            <label for="escalade">Escalade</label>
            <input type="checkbox" name="sport[]" id="escalade" value="escalade">
            <label for="handball">HandBall</label>
            <input type="checkbox" name="sport[]" id="handball" value="handball">

        </div>
        <div class="form-group">
            <label for="departement">Département</label>
            <select name="departement" id="departement" class="form-control">
                <option value="isere">Isère</option>
                <option value="rhone">Rhône</option>
                <option value="ain">Ain</option>
            </select>

        </div>

        <div class="form-group">
            <label for="interets">Centre d'interet</label>
            <select name="interets[]" id="interets" class="form-control" multiple="multiple">
                <option value="cinema">Cinema</option>
                <option value="musique">Musique</option>
                <option value="lecture">Lecture</option>
                <option value="informatique">Informatique</option>
            </select>

        </div>



        <button type="submit" class="btn btn-success">Créer un compte</button>
    </form>

</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>