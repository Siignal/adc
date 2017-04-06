    <header>
            <div id="content">
            <div class="hotel"></div>
            <h1 class="logo"></h1>
            <div class='user--menu'>
                <div id='user--wrapper'>
                    <div class='user--name'>Siignal</div>
                </div>
                <div class='user--habbo'>
                    <img class='user--avatar' src='https://www.habbo.fr/habbo-imaging/avatar/hr-889-34.hd-180-14.ch-3030-73.lg-3023-88.sh-300-64%2Cs-2.g-1.d-2.h-2.a-0%2C9c614eaf9d68b90697515526c73197ce.png'>
                </div>
            </div>
            <li class="toggleSubMenu" style="list-style: none;"><span><i id="user--style" class="fa fa-chevron-down" aria-hidden="true"></i></span>
                        <ul class="subMenu" style="display: none;">
                            <li style="margin-top: 4rem;margin-left: 1rem;margin-bottom:0.3rem;"><a href="<?= $url; ?>profile" title=""><i class="fa fa-user" aria-hidden="true"></i> Mon profil</a></li>
                            <li style="margin-left: 1rem;margin-bottom:0.3rem;"><a href="<?= $url; ?>parametres/privee" title=""><i class="fa fa-cog" aria-hidden="true"></i> Paramètres</a></li>
                            <li style="margin-left: 1rem;margin-bottom:0.3rem;"><a href="<?= $url; ?>administration/" title=""><i class="fa fa-tachometer" aria-hidden="true"></i> Administration</a></li>
                            <li style="margin-left: 1rem;margin-bottom:0.3rem;"><a href="#" title=""><i class="fa fa-question-circle-o" aria-hidden="true"></i> Aide</a></li>
                            <li style="margin-left: 1rem;margin-bottom:0.3rem;"><a href="" title=""><i class="fa fa-times" aria-hidden="true"></i> Se déconnecter</a></li>
                        </ul>
                    </li>
            <!--<a href="#connexion">
            <div class='user--login'>
                <div class='login--wrapper'>
                    <div class='login'><i class="fa fa-key" aria-hidden="true"></i> Se connecter</div>
                </div>
            </div>
            </a>-->
            <div id="connexion">
                <div class="popup_block">
                    <a class="close" href="#"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
                    <h2 style="text-align: center;">Se connecter</h2>
                </div>
            </div>
        </div>
        </header>
        <nav id="menu" class="navigation">
        <div id="content">
            <ul>
                <li <?php if($pageid == '1' or $pageid == '2' or $pageid == '3') echo'class="active"' ?> >
                    <a href="<?= $url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                </li>
                <li <?php if($pageid == '4' or $pageid == '5' or $pageid == '6' or $pageid == '7' or $pageid == '8') echo'class="active"' ?>>
                    <a href="<?= $url; ?>communaute/photos"><i class="fa fa-users" aria-hidden="true"></i> Communauté</a>
                </li>
                <li <?php if($pageid == '9' or $pageid == '10' or $pageid == '11' or $pageid == '12' or $pageid == '13') echo'class="active"' ?>>
                    <a href="<?= $url; ?>boutique"><i class="fa fa-shopping-basket" aria-hidden="true"></i>  <?= $site; ?> Shopping</a>
                </li>
                <li <?php if($pageid == '14' or $pageid == '15' or $pageid == '16' or $pageid == '17' or $pageid == '18') echo'class="active"' ?>>
                    <a href="<?= $url; ?>habboo"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Les clés du jeu</a>
                </li>
                <li>
                    <a href="<?= $url; ?>hotel" class="hotel-button" target="_blank">
                        <span class="hotel-buton__text" style="font-size: 16px;">
                            Jouer à <?= $site; ?>                 
                        </span>
                    </a>
                </ul>
            </ul>
        </div>
    </nav>  
    <div id="content_sub">
        <div id="subnav" class="navigation">
            <?php if($pageid == '1' or $pageid == '2' or $pageid == '3'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '1') echo'class="active"' ?> href="<?= $url; ?>">Quoi de neuf?</a>
                    </li>
                    <li>
                        <a <?php if($pageid == '2') echo'class="active"' ?> href="<?= $url; ?>messagerie">Messages privés</a> 
                    </li>
                    <li>
                        <a <?php if($pageid == '3') echo'class="active"' ?> href="<?= $url; ?>historique">Historique d'achats</a> 
                    </li>
                </ul>
            <?php } ?>
            <?php if($pageid == '4' or $pageid == '5' or $pageid == '6' or $pageid == '7' or $pageid == '8'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '4') echo'class="active"' ?> href="<?= $url; ?>communaute/photos">Photos</a>
                    </li>
                     <li>
                        <a <?php if($pageid == '5') echo'class="active"' ?> href="<?= $url; ?>communaute/staffs">Équipe</a>
                    </li>                   
                    <li>
                        <a <?php if($pageid == '6') echo'class="active"' ?> href="<?= $url; ?>communaute/apparts">Appartements</a> 
                    </li>
                    <li>
                        <a <?php if($pageid == '7') echo'class="active"' ?> href="<?= $url; ?>communaute/fansites">Sites officiels</a> 
                    </li>   
                    <li>
                        <a <?php if($pageid == '8') echo'class="active"' ?> href="<?= $url; ?>communaute/categories/1">Articles</a> 
                    </li>                                       
                </ul>
            <?php } ?>
            <?php if($pageid == '9' or $pageid == '10' or $pageid == '11' or $pageid == '12' or $pageid == '13'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '9') echo'class="active"' ?> href="<?= $url; ?>boutique">Diamants</a>
                    </li>
                    <li>
                        <a <?php if($pageid == '10') echo'class="active"' ?> href="<?= $url; ?>boutique/badges">Badges</a> 
                    </li>
                    <li>
                        <a <?php if($pageid == '11') echo'class="active"' ?> href="<?= $url; ?>boutique/packs">Packs <?= $site; ?></a> 
                    </li>   
                    <li>
                        <a <?php if($pageid == '12') echo'class="active"' ?> href="<?= $url; ?>boutique/abonnements">Abonnements</a> 
                    </li> 
                    <li>
                        <a <?php if($pageid == '13') echo'class="active"' ?> href="<?= $url; ?>boutique/extra">Extra rares</a> 
                    </li>                                                          
                </ul>
            <?php } ?>      
            <?php if($pageid == '14' or $pageid == '15' or $pageid == '16' or $pageid == '17' or $pageid == '18'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '14') echo'class="active"' ?> href="<?= $url; ?>habboo">Qu'est-ce qu'<?= $site; ?>?</a>
                    </li>
                    <li>
                        <a <?php if($pageid == '15') echo'class="active"' ?> href="<?= $url; ?>habboo/comment-jouer">Comment jouer</a> 
                    </li>
                    <li>
                        <a <?php if($pageid == '16') echo'class="active"' ?> href="<?= $url; ?>habboo/habboo-attitude">Habboo Attitude</a> 
                    </li>   
                    <li>
                        <a <?php if($pageid == '17') echo'class="active"' ?> href="<?= $url; ?>habboo/securite">Sécurité</a> 
                    </li> 
                    <li>
                        <a <?php if($pageid == '18') echo'class="active"' ?> href="<?= $url; ?>habboo/aide">Aide</a> 
                    </li>                                                          
                </ul>
            <?php } ?>
            <?php if($pageid == '22' or $pageid == '23' or $pageid == '24' or $pageid == '25' or $pageid == '26'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '22') echo'class="active"' ?> href="<?= $url; ?>parametres/privee">Confidentialité</a>
                    </li>
                    <li>
                        <a <?php if($pageid == '23') echo'class="active"' ?> href="<?= $url; ?>prametres/securite">Protection du compte</a> 
                    </li>
                    <li>
                        <a <?php if($pageid == '24') echo'class="active"' ?> href="<?= $url; ?>parametres/password">Mot de passe</a> 
                    </li>   
                    <li>
                        <a <?php if($pageid == '25') echo'class="active"' ?> href="<?= $url; ?>boutique/abonnements">Email</a> 
                    </li> 
                    <li>
                        <a <?php if($pageid == '26') echo'class="active"' ?> href="<?= $url; ?>boutique/extra">Avatars</a> 
                    </li>                                                          
                </ul>
            <?php } ?>              
        </div>
     </div>
