<?php $pagename = 'Photos'; 
$pageid = '4';
?>
<?php include('template/header.php'); ?>

<div id='content'>
    <div class='photos__header__image'></div>
    <h1 class='photos__header__title'>PHOTOS DE <?= $site; ?></h1>
    <p style="margin-left: 17rem;">Jette un coup d'œil sur quelques grands moments immortalisés par les <?= $site; ?>s.</p>
	<div id='left'>

	</div>
	<div id='right'></div>
</div>

<?php include('template/footer.php'); ?>