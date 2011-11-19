<!doctype html>
<html lang="es">
<head>
	<title>Recycontrol</title>
	<?php include_javascripts() ?>
	<?php include_stylesheets() ?>
</head>
<body>

	<section id="intro">
		<header>
			<h2>Sistema de Administraci&oacute;n de Reciclaje</h2>
		</header>
		<p>Sistema de Administraci&oacute;n de Reciclaje, para empresa RecyTics</p>
		<img src="../images/logo.png" alt="recytics" />
	</section>
	<!--<header>
		<h1>Recytics...reciclaje de e-waste </h1>
	</header>-->
	<nav>
		<?php
			echo include_partial('global/menu');
		?>
	</nav>
	
	<div id="content">
		<div id="content">
				<?php echo $sf_content ?>
		</div>
		</div>
	<footer>
		<div>
			<section id="blogroll">
				<header>
					<h3>Recytics</h3> copyright | Recytics | Empresa de Reciclaje
				</header>
			</section>
		</div>
	</footer>	
</body>
</html>