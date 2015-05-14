<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
                echo $this->Html->css('estilos');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
                echo $this->Html->script('jquery-2.1.4'); // Include jQuery library
	?>
</head>
<body>
	<div id="container">
		<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Atmosphere</a></h1>
                        
		</div>
		<div id="menu">
			<ul>
				<li><a href="/ProyFichaDentista/Pacientes">Pacientes</a></li>
				<li><a href="/ProyFichaDentista/Prestacions">Prestaciones</a></li>
				<li><a href="/ProyFichaDentista/Turnos">Turnos</a></li>
                                <li><a href="/ProyFichaDentista/ObraSocials">Obras Sociales</a></li>
			</ul>
		</div>
                </div>
	<!-- end #header -->
                <div id="content">
                   
			<?php echo $this->Session->flash(); ?>
                        
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
