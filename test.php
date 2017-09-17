<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>

    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="Ressource/css/style.css">

</head>


<body>
<?php
function ScanDirectory($Directory)
{

    $MyDirectory = opendir($Directory) or die('Erreur');
    while ($Entry = @readdir($MyDirectory)) {
        if (is_dir($Directory . '/' . $Entry) && $Entry != '.' && $Entry != '..' && $Entry != 'Ressource' && $Entry != '.git' && $Entry != '.idea') {

            if ($Directory !== "./myDossier") {
                echo "<a href=\"$Directory\" class=\"list-group-item active\">" . $Directory . "</a>";
            }


            echo "<div class=\"list-group\">" . PHP_EOL ;
            ScanDirectory($Directory . '/' . $Entry);
            echo "</div>" . PHP_EOL ;
        } else {
            if ($Entry != '.' && $Entry != '..' && $Entry != 'index.php' && $Entry != '.git' && $Entry != 'Ressource' && $Entry != '.idea') {
                echo "<a href=\"$Directory\" class=\"list-group - item active\">"  . $Entry . "</a>" . PHP_EOL;
            }
        }
    }
    closedir($MyDirectory);
}

ScanDirectory('./myDossier');

?>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>


</body>
</html>

