<?php 
if (!defined('CONTROLADOR')) exit;
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class id="micontenedor"="container">
	<div class="row clearfix">

		<div class="col-md-12 column">
			<a href="index.php">cerrar sesion</a>
			<h3 class="text-info text-center">
				Agencia de Defensa y Bùsqueda Paranormal<BR>
				<BR>
					<BR>
			</h3><center><img alt="140x140" src="img/BPRD2.png" class="img-circle"></center>
			<BR>
				<BR>
					<h3 class="text-info text-center">Lista de usuarios</h3>
					<BR>
			
			
			<div class="row clearfix">
				<div class="col-md-4 column">
					<ul class="nav nav-stacked nav-tabs">
						<li class="active">
							<a href="Inicio.php">Inicio</a>
						</li>
						<li>
							<a href="#">Usuarios</a>
						</li>
						<li class>
							<a href="#">Delincuentes</a>
						</li>
						<li class>
							<a href="#">Agencia</a>
						</li>

						<li class>
							<a href="#">Asesinatos</a>
						</li>
						


					</ul>
						

				</div>

				<div class="col-md-4 column">

					
					<p><a href="guardar_usuario.php" type="button" class="btn btn-primary">Ingresar usuario</a></p>

					

					<?php if (count($usuario)>0): ?>
					<table class="table table-stripped">

							<thead>

								<tr>

									<th>Id del usuario</th>
									<th>Primer Nombre</th>
									<th>Segundo Nombre</th>
									<th>Primer Apellido</th>
									<th>Segundo Apellido</th>
									<th>Cuenta</th>




								</tr>
									</thead>
									<tbody>

										<?php  foreach ($usuario as $item):?>

										<tr>
											<td><?php echo $item['id_usuario']?></td>
											<td><?php  echo $item['nombre1_usuario']?></td>
											<td><?php echo $item['nombre2_usuario']?></td>
											<td><?php echo $item['apellido1_usuario']?></td>
											<td><?php echo $item['apellido2_usuario']?></td>
											<td><?php echo $item['cuenta_usuario']?></td>
											
											<td><a href="eliminar_usuario.php?id=<?php echo $item['id_usuario'] ?>">Eliminar</a></td>
											<td><a href="actualizar_usuario.php?id=<?php echo $item['id_usuario'] ?>">Actualizar</a></td>
											


										</tr>

										<?php endforeach?>




							
					</table>

						<?php else: ?>

						<p class="alert alert-danger">No hay usuarios</p>

						<?php endif;?>

						
								



					
					</div>
			</div>
			<BR>
				<BR>
					<BR>
						<BR>
							<BR>
								<BR>
									<br>
									<BR>
										<BR>
										<BR>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix">

						<div class="col-md-6 column">
							<p>
								<center>W.D.A Sentro de tecnologia agro industrial CTA cartago 
									-_
								.</center>
							</p>
						</div>

                         
						<div class="col-md-6 column"><p>
							 <address> <strong>Twitter, Inc.</strong>@ El danuvio  San Francisco, CA 9486 <abbr title="Phone">P:</abbr> 3143063843</address>
							  <address> <strong>Twitter, Inc.</strong>@ El williman El baticano, CA 94107 <abbr title="Phone">P:</abbr> 3185503840</address>
							 <strong>Twitter, Inc.</strong>@ El palejo  Holliood, CA 36547      <abbr title="Phone">P:</abbr> 3104609815
						</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>