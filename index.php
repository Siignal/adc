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
        <script src="http://code.jquery.com/jquery-1.9.0b1.js"></script>
        <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("spin").style.display = "none";
  document.getElementById("loader-habbo").style.display = "block";
}
</script>
    </head>
    <body onload="myFunction()" style="margin:0;">
    <div id='content'>
        <div id='spin' style='width:100%;height:100vh;'>
            <div id='logo' style='top:40%;left:48%;position:absolute;margin:-35px 0 0 -35px;height: 78px;
  float: left;
  width: 145px;
  margin-top:-4rem;
  background-image: url(./assets/img/logo.png);
  background-repeat:no-repeat;
  position:relative;
  z-index:1;'></div>
            <div id='loader'></div>
            </div>
        </div>
        <div style='display:none;' id='loader-habbo' class='animate-bottom'>
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
    </div>
    <?php require('template/footer.php'); ?>