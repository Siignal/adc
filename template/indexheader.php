    <header>
            <div id='connexion--space'>
                <div id='content'>
                    <div id='right' style="width:650px;">
                        <form class='form__style'>
                            <fieldset class='form__fieldset'>
                                <div class='form__field'>
                                    <input id='input--co' type='email' name='email' required autofocus placeholder="Email">
                                </div>
                            </fieldset>
                            <fieldset class='form__fieldset'>
                                <div class='form__field'>
                                    <input id='input--co' type='password' name='password' required autofocus placeholder="Mot de passe">
                                </div>
                            </fieldset>
                            <buttton type="submit" class="login-form__button">C'est parti!</buttton>
                        </form>
                    </div>
                </div>
            </div>
            <div id="content">
            <div class="hotel"></div>
            <h1 class="logo"></h1>
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
                </ul>
            </ul>
        </div>
    </nav>  
