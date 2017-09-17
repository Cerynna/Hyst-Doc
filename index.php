<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <title>Dashboard LocalHost</title>


    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>

<!-- Entete du menu de gauche avec $userName et logo -->
<ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
        <div class="grey darken-2 white-text" style="height: 180px;">
            <div class="row">
                <img style="margin-top: 5%;" width="100" height="100" src="http://via.placeholder.com/200x200"
                     class="circle responsive-img"/>

                <p style="margin-top: -13%;">
                    User Name
                </p>
            </div>
        </div>
    </li>
    <!-- Item dashboard -->
    <li id="dash_dashboard"><a class="waves-effect" href="index.php"><b>Dashboard</b></a></li>

    <!-- On déclare les listes déroulantes  -->
    <ul class="collapsible" data-collapsible="accordion">

        <!-- Item dossier -->
        <li id="dash_dossiers">
            <div id="dash_dossiers_header" class="collapsible-header waves-effect"><b>Vos dossiers</b></div>
            <div id="dash_dossiers_body" class="collapsible-body">
                <ul>
                    <li id="dossiers_dossier">
                        <a class="waves-effect" style="text-decoration: none;" href="#!"><i class="fa fa-folder-open"
                                                                                            aria-hidden="true"></i> Nom
                            du dossier</a>
                    </li>
                    <li id="dossiers_dossier">
                        <a class="waves-effect" style="text-decoration: none;" href="#!"><i class="fa fa-folder-open"
                                                                                            aria-hidden="true"></i> Nom
                            du dossier</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Item Navigations -->
        <li id="dash_users">
            <div id="dash_users_header" class="collapsible-header waves-effect"><b>Navigation</b></div>
            <div id="dash_users_body" class="collapsible-body">
                <ul>
                    <li id="users_seller">
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Arborescence</a>
                    </li>

                    <li id="users_customer">
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Historique</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Item liens utiles  -->
        <li id="dash_products">
            <div id="dash_products_header" class="collapsible-header waves-effect"><b>Liens utiles</b></div>
            <div id="dash_products_body" class="collapsible-body">
                <ul>
                    <li id="products_product">
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Documentations</a>
                        <a class="waves-effect" style="text-decoration: none;" href="#!">CDN</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Item de personnalisation -->
        <li id="dash_profils">
            <div id="dash_profils_header" class="collapsible-header waves-effect"><b>Personnalisation</b></div>
            <div id="dash_profils_body" class="collapsible-body">
                <ul>
                    <li id="profils_profil">
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Thémes</a>
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Profil</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</ul>

<!-- Contenu de l'icone Profil en haut a droite -->
<header>
    <ul class="dropdown-content" id="user_dropdown">
        <li>
            <a class="grey-text" href="#!">Thèmes</a>
        </li>
        <li>
            <a class="grey-text" href="#!">Profil</a>
        </li>
    </ul>
    <!-- Menu top
    <nav class="grey" role="navigation">
        <div class="nav-wrapper">
            <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img
                        style="margin-top: 17px; margin-left: 5px;"
                        src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif"/></a>

            <ul class="right hide-on-med-and-down">

                <li>
                    <a class='right button' href=""><i class="fa fa-google"></i></i></a>
                </li>
                <li>
                    <a class='right button' href=""><i class="fa fa-facebook"></i></i></a>
                </li>
                <li>
                    <a class='right button' href=""><i class="fa fa-github"></i></i></a>
                </li>
                <li>
                    <a class='right button' href=""><i class="fa fa-twitter"></i></i></a>
                </li>
                <li>
                    <a class='right button' href=""><i class="fa fa-linkedin"></i></i></a>
                </li>
                <li>
                    <a class='right button' href=""><i class="fa fa-youtube"></i></i></a>
                </li>
                <li>
                    <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
                </li>
            </ul>

            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>-->


    <!-- Fil d'ariane -->
    <nav>
        <div class="nav-wrapper grey darken-2">
            <a style="margin-left: 20px;" class="breadcrumb" href="index.php">Dashboard</a>
            <?php if (isset($_GET['page']) && !empty($_GET['page'])){


                switch ($_GET['page']) {
                    case "arbo":
                        echo '<a class="breadcrumb" href="?page=arbo">Arborescence</a>';
                        break;
                    case "codepen":
                        echo '<a class="breadcrumb" href="?page=codepen">CodePen</a>';
                        break;
                    case "goo":
                        echo '<a class="breadcrumb" href="?page=goo">goo.gl</a>';
                        break;
                    case "color":
                        echo '<a class="breadcrumb" href="?page=goo">ColorPicker</a>';
                        break;

                }




            }?>

            <div style="margin-right: 20px;" id="timestamp" class="right"></div>
        </div>
    </nav>
</header>

<!-- Conteneur géneral de la page  -->
<main>

    <?php if (isset($_GET['page']) && !empty($_GET['page'])):

        switch ($_GET['page']) {
            case "arbo":
                ?><iframe id="mainFrame" name="mainFrame" src="<?php echo $_GET['page']; ?>.php" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
            case "codepen":
                ?><iframe id="mainFrame" name="mainFrame" src="https://codepen.io/" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
            case "goo":
                ?><iframe id="mainFrame" name="mainFrame" src="https://goo.gl/" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
            case "color":
                ?><iframe id="mainFrame" name="mainFrame" src="Ressource/Color Picker/" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;

        }



        ?>



    <?php else: ?>
       <?php include "dashboard.php"; ?>
    <?php endif; ?>







    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large indigo waves-effect waves-light">
            <i class="large material-icons">add</i>
        </a>

        <ul>
            <li>
                <a class="btn-floating red"><i class="material-icons">note_add</i></a>
                <a href="" class="btn-floating fab-tip">Créer un fichier</a>
            </li>

            <li>
                <a class="btn-floating yellow darken-1"><i class="material-icons">add_a_directory</i></a>
                <a href="" class="btn-floating fab-tip">Créer un dossier</a>
            </li>
        </ul>
    </div>


</main>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>
