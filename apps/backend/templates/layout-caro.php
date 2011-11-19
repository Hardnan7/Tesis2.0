<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Recycontrol</title>
	<?php include_javascripts() ?>
	<?php include_stylesheets() ?>
</head>
<body>

	<section id="intro">
		<div id="header">
			</div>
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