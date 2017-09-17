<?php
    include ('statusManager.php');
    $users = include('data.php');
    $total = count($users);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Fichier de la PJ</title>
</head>
<body>
<h1>Fichier de la PJ <small style="font-size: 0.5em;">(<?php echo $total; ?> personne<?php echo ($total > 1 ? "s" : "");?>)</small></h1>
    <hr>
    <h3>le fichier contient <?php echo $total; ?> personne<?php echo ($total > 1 ? "s" : "");?></h3>

<table border="1" width="600px">
    <tr style="background-color: aqua">
        <th align="center">ID</th>
        <th align="center">Prenom</th>
        <th align="center">Nom</th>
        <th align="center">Age</th>
        <th align="center">Statut</th>
    </tr>

    <?php foreach($users as $key => $user) : ?>
        <tr class="<?php echo (getStatus($user['age']) === "mort" ? "dead" : "");?>">
            <td align="center"><?php echo $key +1 ; ?></td>
            <td align="center" class="tdPrenom" ><?php echo $user['firstName'] ?></td>
            <td align="center" class="tdNom"><?php echo $user['lastName'] ?></td>
            <td align="center"><?php echo $user['age'] ?></td>
            <td align="center"><?php echo getStatus($user['age']); ?></td>

        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>