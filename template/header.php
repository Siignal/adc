<?php require('./configuration/core.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="<?= $developpeurs; ?>" />
        <title><?= $pagename; ?> - <?= $site; ?></title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= $assets; ?>img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $assets; ?>img/favicon.ico" type="image/x-icon">
        <!-- StyleSheets -->
        <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?= $assets; ?><?= version('css/global.css') ?>">
        <script src='./assets/js/turbolinks.js' data-turbolinks-eval='false'></script>
        <script type="text/javascript" src="./assets/js/jquery.js"></script>
    <script type="text/javascript">
    <!--
    document.addEventListener('turbolinks:load', function() {
    $(document).ready( function () {
        // On cache les sous-menus
        // sauf celui qui porte la classe "open_at_load" :
        $("ul.subMenu:not('.open_at_load')").hide();
        // On selectionne tous les items de liste portant la classe "toggleSubMenu"
    
        // On modifie l'evenement "click" sur les liens dans les items de liste
        // qui portent la classe "toggleSubMenu" :
        $("li.toggleSubMenu > span").click( function () {
            // Si le sous-menu etait deja ouvert, on le referme :
            if ($(this).next("ul.subMenu:visible").length != 0) {
                $(this).next("ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") } );
            }
            // Si le sous-menu est cache, on ferme les autres et on l'affiche :
            else {
                $("ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") } );
                $(this).next("ul.subMenu").slideDown("normal", function () { $(this).parent().addClass("open") } );
            }
            // On empêche le navigateur de suivre le lien :
            return false;
        });
    
    })}) ;
    // -->
    </script>
    </head>
    <body>
    <?php require('subheader.php'); ?>
