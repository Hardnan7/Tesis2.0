<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>:: RecyControl v0.1 ::</title>
    <link rel="shortcut icon" href="/favicon.ico" />
   
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
	<?php if ($sf_user->isAuthenticated()): ?>
      <div id="header">
        <h1>
          <a href="<?php echo url_for('homepage') ?>">
            <img src="/images/logo.jpg" alt="Jobeet Job Board" />
          </a>
        </h1>
      </div>
	<?php endif ?>
<?php if ($sf_user->isAuthenticated()): ?>
  <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Clientes', '@cliente') ?>
          </li>
          <li>
            <?php echo link_to('Empleados', '@empleado') ?>
          </li>
		  <li>
            <?php echo link_to('Usuarios', '@usuario') ?>
          </li>
		  <li>
            <?php echo link_to('Equipos', '@equipo') ?>
          </li>
		  <li>
            <?php echo link_to('Piezas', '@pieza') ?>
          </li>
		  <li>
            <?php echo link_to('Ventaequipo', '@ventaequipo') ?>
          </li>
		  <li>
            <?php echo link_to('VentaPieza', '@ventapieza') ?>
          </li>
		  <li>
             <?php echo link_to('Venta Chatarra', '@ventachatarra') ?>
          </li>
		  <li>
           <?php echo link_to('Categorias', '@categoria') ?>
	      </li>
		  
		  <li>
		  <?php echo link_to('Logout', 'sf_guard_signout') ?>
		  </li>
        </ul>
      </div>
<?php endif ?>
     
      <div id="content">
        <?php echo $sf_content ?>
      </div>
 
      <div id="footer">
	  <?php if ($sf_user->isAuthenticated()): ?>
        <img src="/images/jobeet-mini.png" />
        powered by <a href="http://www.symfony-project.org/">
        <img src="/images/symfony.gif" alt="symfony framework" /></a>
		<?php endif ?>
      </div>
    </div>
  </body>
</html>