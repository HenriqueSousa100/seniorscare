<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Bem vindo ao SeniorsCare</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	
</head>

<body>
	<header id="header">
		<nav class="navbar navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="index.php">SeniorsCare</a>
				</div>
				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li type="button" class="default" action="index.php"><a href="index.php">Inicio</a>
						</li>
						<li type="button" class="default" action="encontre.php"><a href="cadastro.php">Cadastrar cuidador</a>
						</li>
						<li><a href="#feature">Sobre Nós</a>
						</li>
						<li type="button" class="default" action="duvida.php"><a href="duvida.php">Dúvidas ?</a>
						</li>
					</ul>
				</div>
			</div>
			<!--/.container-->
		</nav>
		<!--/nav-->
	</header>