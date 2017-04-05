    <header>
            <div id="content">
            <div class="hotel"></div>
            <h1 class="logo"></h1>
            <div class='user--menu'>
                <div class='user--wrapper'>
                    <div class='user--name'>Siignal</div>
                </div>
                <div class='user--habbo'>
                    <img class='user--avatar' src='https://www.habbo.fr/habbo-imaging/avatar/hr-889-34.hd-180-14.ch-3030-73.lg-3023-88.sh-300-64%2Cs-2.g-1.d-2.h-2.a-0%2C9c614eaf9d68b90697515526c73197ce.png'>
                </div>
            </div>
        </div>
        </header>
        <nav id="menu" class="navigation">
        <div id="content">
            <ul>
                <li <?php if($pageid == '1' or $pageid == '2') echo'class="active"' ?> >
                    <a href="<?= $url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                </li>
                <li <?php if($pageid == '3' or $pageid == '4' or $pageid == '5' or $pageid == '6') echo'class="active"' ?>>
                    <a href="<?= $url; ?>communaute/photos"><i class="fa fa-users" aria-hidden="true"></i> Communauté</a>
                </li>
                <li>
                    <a href="<?= $url; ?>boutique"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Habboo Shopping</a>
                </li>
                <li <?php if($pageid == '7' or $pageid == '8' or $pageid == '9' or $pageid == '10' or $pageid == '11') echo'class="active"' ?>>
                    <a href="<?= $url; ?>habboo"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Les clés du jeu</a>
                </li>
                <li>
                    <a href="<?= $url; ?>administration/"  target="_blank"><i class="fa fa-cog" aria-hidden="true"></i> Administration</a>
                </li>
            </ul>
        </div>
    </nav>  
    <div id="content_sub">
        <div id="subnav" class="navigation">
            <?php if($pageid == '1' or $pageid == '2'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '1') echo'class="active"' ?> href="<?= $url; ?>">Quoi de neuf?</a>
                    </li>
                    <li>
                        <a <?php if($pageid == '2') echo'class="active"' ?> href="<?= $url; ?>messagerie">Messages privés</a> 
                    </li>
                </ul>
            <?php } ?>
            <?php if($pageid == '3' or $pageid == '4' or $pageid == '5' or $pageid == '6'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '3') echo'class="active"' ?> href="<?= $url; ?>communaute/photos">Photos</a>
                    </li>
                    <li>
                        <a <?php if($pageid == '4') echo'class="active"' ?> href="<?= $url; ?>communaute/apparts">Apparts</a> 
                    </li>
                    <li>
                        <a <?php if($pageid == '5') echo'class="active"' ?> href="<?= $url; ?>communaute/fansites">Sites officiels</a> 
                    </li>   
                    <li>
                        <a <?php if($pageid == '6') echo'class="active"' ?> href="<?= $url; ?>communaute/categories/1">News</a> 
                    </li>                                       
                </ul>
            <?php } ?>
            <?php if($pageid == '7' or $pageid == '8' or $pageid == '9' or $pageid == '10' or $pageid == '11'){ ?>
                <ul>
                    <li>
                        <a <?php if($pageid == '7') echo'class="active"' ?> href="<?= $url; ?>habboo">Qu'est-ce qu'Habboo?</a>
                    </li>
                    <li>
                        <a <?php if($pageid == '8') echo'class="active"' ?> href="<?= $url; ?>habboo/how-to-play">Comment jouer</a> 
                    </li>
                    <li>
                        <a <?php if($pageid == '9') echo'class="active"' ?> href="<?= $url; ?>habboo/habboo-way">Habboo Attitude</a> 
                    </li>   
                    <li>
                        <a <?php if($pageid == '10') echo'class="active"' ?> href="<?= $url; ?>habboo/safety">Sécurité</a> 
                    </li> 
                    <li>
                        <a <?php if($pageid == '11') echo'class="active"' ?> href="<?= $url; ?>habboo/help">Aide</a> 
                    </li>                                                          
                </ul>
            <?php } ?>            
        </div>
     </div>
