<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Juego 3 en raya</title>
		 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>
		<div align="center">
			<h1>Bienvenido al juego 3 en raya; ingrese los nombres de usuarios para empezar a jugar</h1>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="<?php echo $helper->url("usuario","guardar_usuario"); ?>" method="post">
				Usuario X: <input type="text" name="usuario1" class="form-control" required="true">
				Usuario O: <input type="text" name="usuario2" class="form-control" required="true">
				<br>
				<div align="center">
					<input type="submit" class="btn btn-success" value="Empezar">
				</div>
				</form>
		</div>
		</div> 
		</div>
		<hr>
		<div class="row">
		</div>
	</body>
	</html>	