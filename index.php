<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>HystéDocs - APACHE SERVEUR </title>

    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>

    <style>
        iframe {
            height: 93vh;
            margin-top: -20px;
        }

        .sousDossier {
            text-transform: uppercase;
            font-variant: small-caps;

        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #333333;
            color: #fff;
        }
    </style>

</head>


<body>

<?php
if (isset($_GET['dos']) && !empty($_GET['dos'])) {
    $lienIframe = $_GET['dos'];
} else {
    $lienIframe = "home.php";
}

?>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../"><span class="glyphicon glyphicon-home"></span> HystéDocs</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <?php
                $dir = "./";
                if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            if ($file != '.' && $file != '..' && $file != '.idea' && $file != '.git') {
                                if (filetype($dir . $file) === 'dir') {
                                    ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false"><span
                                                    class="sousDossier"><?php echo $file; ?><span
                                                        class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="?dos=<?php echo $dir . $file; ?>"><strong>
                                                        <span class="glyphicon glyphicon-home"></span>
                                                        <?php echo $file; ?></span>
                                                    </strong></a></li>
                                            <?php
                                            $dirTwo = $dir . $file . "/";
                                            //  si le dossier pointe existe
                                            if (is_dir($dirTwo)) {

                                                // si il contient quelque chose
                                                if ($dhTwo = opendir($dirTwo)) {

                                                    // boucler tant que quelque chose est trouve
                                                    while (($fileTwo = readdir($dhTwo)) !== false) {

                                                        // affiche le nom et le type si ce n'est pas un element du systeme
                                                        if ($fileTwo != '.' && $fileTwo != '..' && $fileTwo != '.idea' && $fileTwo != '.git') {

                                                            if (filetype($dirTwo . $fileTwo) === 'dir') {

                                                                ?>
                                                                <li><a href="?dos=<?php echo $dirTwo . $fileTwo; ?>">
                                                                        <span class="glyphicon glyphicon-folder-open sousDossier"></span>&nbsp;<?php echo $fileTwo; ?>
                                                                    </a></li>


                                                                <?php
                                                            }
                                                        }
                                                    }
                                                    closedir($dhTwo);
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </li>

                                    <?php
                                }
                            }
                        }
                        closedir($dh);
                    }
                }
                ?>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $lienIframe; ?>"><span class="glyphicon glyphicon-resize-full"></span></a></li>

            </ul>
        </div>
    </div>
</nav>


<iframe id="mainFrame" name="mainFrame" src="<?php echo $lienIframe; ?>" width="100%" marginheight="0"
        frameborder="0"></iframe>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>


</body>
</html>

