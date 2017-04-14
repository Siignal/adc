<?php $pagename = "Changer l'email"; 
$pageid = '25'; ?>
<?php include('template/header.php'); ?>

<div id='content'>
	<div id="left">
		<div id="email" style="margin-top: 2rem;">
			<div id="email--verification">
			    <div class="email__img">
			    	<div class="alerte__img"></div>
			    </div>
			    <div class="email__not">TU N'AS PAS VÉRIFIÉ TON ADRESSE EMAIL!</div>
				<div class="email--verification__text">Si tu vérifie ton adresse email trollnord@outlook.fr, nous pourront t'aider en cas de problème avec ton compte.</div>
				<div class="email-verification__button__wrapper">
					<button class="email-verification__button">Envoyer un email de vérification</button>
				</div>
			</div>
		</div>
		<h2 style='text-transform:uppercase;'>Changer d'email</h2>
		<form>
			<p class='label--email'>Mot de passe actuel</p>
		    <input type='password' class='input--email'>
		    <div class='new--email'>
		    	<p style="color:white;">Nouvel Email</p>
		    	<p class='label--email'>Tu devras utiliser cet email pour te connecter à Habboo. Utilise une adresse valide.</p>
		    	<input type='email' class='input--email'>
		    </div>
		    <button class='save--change'>Sauvegarder</button>
		</form>
	</div>
	<div id='right'>aaaaaaaa</div>
</div>

<?php include('template/footer.php'); ?>