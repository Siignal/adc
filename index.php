<?php require('./configuration/core.php'); 
$pagename = "Se faire des amis, s'amuser, se faire connaître"; 
$pageid = '19'; ?>
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
        <link rel="stylesheet" href="<?= $assets; ?>css/index.css">
    </head>
    <body>
    <?php require('./template/indexheader.php'); ?>
    <div id='content'>
        <div id='left'>
            <h1 style="margin-top: 0rem;">Dernières News</h1>
        <div id='article' style="background-image:url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_easter17_gen2.png)">
        </div>
        <div id='sub--article__l'>
            <div id='mini--article' style="background-image:url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_easter17_gen2.png)">
                <div id='mini--infos'>
                    <a href='' class='news__lien'><h3 style="margin-bottom: 0rem;">Test</h3></a>
                    <time class='news__date'>5 Avr. 2017</time><p class='news__tags'>Updates</p>
                    <p class='news__summary'>Description</p>
                </div>
            </div>
            <div id='mini--article' style="background-image:url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_easter17_gen2.png)">
                <div id='mini--infos'>
                    <a href='' class='news__lien'><h3 style="margin-bottom: 0rem;">Test</h3></a>
                    <time class='news__date'>5 Avr. 2017</time><p class='news__tags'>Updates</p>
                    <p class='news__summary'>Description</p>
                </div>
            </div>
            <div id='mini--article' style="background-image:url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_easter17_gen2.png)">
                <div id='mini--infos'>
                    <a href='' class='news__lien'><h3 style="margin-bottom: 0rem;">Test</h3></a>
                    <time class='news__date'>5 Avr. 2017</time><p class='news__tags'>Updates</p>
                    <p class='news__summary'>Description</p>
                </div>
            </div>
        </div>
        <div id='sub--article__r'>
            <div id='mini--article' style="background-image:url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_easter17_gen2.png)">
                <div id='mini--infos'>
                    <a href='' class='news__lien'><h3 style="margin-bottom: 0rem;">Test</h3></a>
                    <time class='news__date'>5 Avr. 2017</time><p class='news__tags'>Updates</p>
                    <p class='news__summary'>Description</p>
                </div>
            </div>
            <div id='mini--article' style="background-image:url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_easter17_gen2.png)">
                <div id='mini--infos'>
                    <a href='' class='news__lien'><h3 style="margin-bottom: 0rem;">Test</h3></a>
                    <time class='news__date'>5 Avr. 2017</time><p class='news__tags'>Updates</p>
                    <p class='news__summary'>Description</p>
                </div>
            </div>
            <div id='mini--article' style="background-image:url(https://images.habbo.com/web_images/habbo-web-articles/lpromo_easter17_gen2.png)">
                <div id='mini--infos'>
                    <a href='' class='news__lien'><h3 style="margin-bottom: 0rem;">Test</h3></a>
                    <time class='news__date'>5 Avr. 2017</time><p class='news__tags'>Updates</p>
                    <p class='news__summary'>Description</p>
                </div>
            </div>
        </div>
        </div>
            <div id='right'>aaaaaaaa</div>
    </div>
    <?php require('template/footer.php'); ?>