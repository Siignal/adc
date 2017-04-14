<?php $pagename = 'Avatars'; 
$pageid = '26'; ?>
<?php include('template/header.php'); ?>

<div id='content'>
	<div id="left">
	    <h2 style="text-transform: uppercase;">SÉLECTION D'AVATAR</h2>
		<div id="new-avatar" class="disabled">
			<div id="create--avatar">
			    <div class="avatar--create__img"></div>
			    <div class="avatar--create__plus"></div>
				<div class="avatar--create__text">Tu dois vérifier ton email avant de créer un nouvel avatar.</div>
				<div class="avatar-create__button__wrapper">
					<button class="avatar-create__button" disabled="disabled">Créer avatar</button>
				</div>
			</div>
		</div>
		<div id="my-avatars" style="background-color: rgba(0, 0, 0, .3);height: auto;padding: 1rem;border-radius: 4px;margin-top: 3rem;">
			<div class="affichage--avatars" style="display: inline-flex;height: 7rem;width: 100%;">
				<img class="avatars--img" src="https://www.habbo.com/habbo-imaging/avatar/hr-892-46.hd-209-8.ch-260-79.lg-280-77.sh-906-68.ha-1003-80%2Cs-0.g-1.d-3.h-3.a-0%2C3e2e8da9a8e1904a305bade17a591661.png" alt="Habboo Player">
				<div class="avatar--name" style="margin-top: 3rem;color: white;">Gregoire</div>
				<div class="avatar--last__login" style="margin-top: 5rem;margin-left: -4.3rem;color: white;font-size: 16px;">Connecté il y'a 20 minutes</div>
				<div class="avatar--validation" style="position: absolute;background-image: url(https://images.habbo.com/habbo-web/america/en/assets/images/sprite.fd8a8fba.png);background-position: -112px -131px;width: 44px;height: 50px;content: '';display: block;right: 12px;margin-top: 1.5rem;"></div>
			</div>
			<div class="affichage--avatars" style="display: inline-flex;height: 7rem;width: 100%;">
				<img class="avatars--img" src="https://www.habbo.com/habbo-imaging/avatar/hr-892-46.hd-209-8.ch-260-79.lg-280-77.sh-906-68.ha-1003-80%2Cs-0.g-1.d-3.h-3.a-0%2C3e2e8da9a8e1904a305bade17a591661.png" alt="Habboo Player">
				<div class="avatar--name" style="margin-top: 3rem;color: white;">Gregoire2</div>
				<div class="avatar--last__login" style="margin-top: 5rem;margin-left: -4.3rem;color: white;font-size: 16px;">Connecté il y'a 2 jours</div>
				<div class="avatar--validation" style="position: absolute;background-image: url(https://images.habbo.com/habbo-web/america/en/assets/images/sprite.fd8a8fba.png);background-position: -112px -131px;width: 44px;height: 50px;content: '';display: block;right: 12px;margin-top: 1.5rem;"></div>
			</div>
		</div>
	</div>
	<div id='right'>aaaaaaaa</div>
</div>

<?php include('template/footer.php'); ?>