<?php
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
	<link href="css/stylelogin.css" rel="stylesheet">

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

<div id="micontenedor"class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Agencia de Defensa y Bùsqueda Paranormal
			</h3>
		</div>
	<div class="row clearfix">
		<div class="col-md-4 column">

		</div>
		<div id="formulario" class="col-md-4 column">
			
			<BR>
				
			<img alt="140x140" id="logo" src="img/BPRD2.png" />
			<h3 id="titulologin">
				Ingresar al sistema
			</h3>
			<BR>

                        <form class="form-horizontal" method="post" role="form" action="index.php">
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <input type="email" class="form-control"  placeholder="Usuario" name="cuenta" id="cuenta" required/>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="clave" id="clave" required/>
                                    <BR>
                                    <BR>
                                    <center>
                                        <a href="">¿Olvidò su contraseña?</a>
                                    </center>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="btningresar" class="btn btn-default">Ingresar</button>
                                </div>

                            </div>
                        </form>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>





</body>
</html>