<?php
$prenom = $_POST['prenom'];
echo "<p>Votre Prénom est : " . $prenom . "</p>";



$gender = $_POST['gender'];
echo "<p>Votre sexe est : " . $gender . " </p>";



$sports = $_POST['sport'];
echo "<p>Vous avez selectionnez comme sport : </p>";
echo "<ul>";
foreach ($sports as $sport) {
    echo "<li>" . $sport . "</li>";
}
echo "</ul>";


$departement = $_POST['departement'];
echo "<p>Département : " . $departement . " </p>";



$interets = $_POST['interets'];
echo "<p>Vos centre d'interets : </p>";
echo "<ul>";
foreach ($interets as $interet) {
    echo "<li>" . $interet . "</li>";
}
echo "</ul>";
