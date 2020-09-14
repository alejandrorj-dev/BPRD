<?php
if (!defined('CONTROLADOR')) exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BPRD</title>
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
			<h3 class="text-info text-center">
				Agencia de Defensa y Bùsqueda Paranormal<BR>
				<BR>

					<BR>
			</h3><center><img alt="140x140" src="img/BPRD2.png" class="img-circle"></center>
			<BR>
				<BR>

					<h3 class="text-info text-center">
				Actualización del Usuario<BR>
				<BR>
					
					<BR>
			</h3>

					<BR>
			
			
			<div class="row clearfix">
				<div class="col-md-4 column">
					<ul class="nav nav-stacked nav-tabs">
						<li class="active">
							<a href="Inicio.php">Inicio</a>
						</li>
						<li>
							<a href="lista_usuarios.php">Usuarios</a>
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
						<form class="form-horizontal" role="form" action="actualizar_usuario.php" method="post"> 

						
							 
							 <input type="text" class="form-control" placeholder="Primer Nombre" name="nom1" id="nom1" required/>
							 <BR>
							 <input type="text" class="form-control" placeholder="Segundo Nombre" name="nom2" id="nom2" required/>
							 <BR>
							 <input type="text" class="form-control" placeholder="Primer Apellido" name="ape1" id="ape1" required/>
							 <BR>
							 <input type="text" class="form-control" placeholder="Segundo Apellido" name="ape2" id="ape2" required/>
							 <BR>
							 <input type="email" class="form-control" placeholder="Cuenta" name="cuenta" id="cuenta" required/>
							 <BR>
							 <input type="password" class="form-control" placeholder="Clave" name="clave" id="clave" required/>
							 <BR>

							<?php $usuario = new usuario(null, null, null, null, null, null, null); ?>
							
							 <?php if($usuario->getid()):?>
							 	<input type="hidden" id="id" value="<?php echo $usuario->getid(); ?>">
							 <?php endif;?>

							 <BR>

							<input type="submit" class="btn btn-primary" value="Ingresar"/>
							<a href="lista_usuarios.php" class="btn btn-primary">Cancelar</a>



						</form>




					
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
