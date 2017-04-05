<?php $pagename = 'Apparts'; 
$pageid = '4'; ?>
<?php include('template/header.php'); ?>

<div id='content'>
    <div class='photos__header__image'></div>
    <h1 class='photos__header__title'>GALERIE D'APPARTS</h1>
    <p style="margin-left: 17rem;">Viens voir maintenant les apparts les plus stylés sur <?= $site; ?>!</p>
	<div id='left'>
		<div id='mini--room' style="background-image:url(https://habbo-stories-content.s3.amazonaws.com/navigator-thumbnail/hhfr/43574958.png)">
			<div id='mini--infos--total'>
				<a href='' class='news__lien'><h2 style="margin-bottom: 0rem;">Recepetion</h2></a>
				<p class='news__summary'>Viens t'amuser dans la récéption de Habboo</p>
				<div class='room--proprio'>
					<img src="https://www.habbo.fr/habbo-imaging/avatar/hr-889-34.hd-180-14.ch-3030-73.lg-3023-88.sh-300-64%2Cs-2.g-1.d-2.h-2.a-0%2C9c614eaf9d68b90697515526c73197ce.png" alt="avatar" style="margin-top: -0.4rem;margin-left: -0.1rem;">
				</div>
				<p class='proprio--name'>Gregoire</p>
			</div>
		</div>
	</div>
	<div id='right'></div>
</div>

<?php include('template/footer.php'); ?>