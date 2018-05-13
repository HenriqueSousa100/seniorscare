<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Cadastro de cuidadores</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
						<li><a href="#feature">Sobre Nós</a>
						</li>
						<li type="button" class="default" action="index.php"><a href="duvida.php">Dúvidas?</a>
						</li>
					</ul>
				</div>
			</div>
			<!--/.container-->
		</nav>
		<!--/nav-->
	</header>
	<!--/header-->
	<div class="slider">
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="img/6.jpg" class="img-responsive test" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp testa" data-wow-offset="0" data-wow-delay="0.5s">
								<h2>Cadastro de cuidadores SeniorsCare.</h2>
								<form action="cadprof.php"" method="POST">
									<div class="formulario">
										<div class="formulario-input">	<span>Nome:</span>
										</div>
										<input type="text" maxlength="50" pattern="[a-z\s]+$" title="Apenas Letras" placeholder="ex: João Sousa" class="form-control input-color" name="vnome" id="nome" required="required">
									</div>
									<div class="formulario">
										<div class="formulario-input">	<span>Região:</span>
										</div>
										<input type="text" maxlength="6" pattern="[a-z\s]+$" title=" Apenas Centro, Leste, Norte, Oeste e Sul" placeholder="ex: Sul" class="form-control input-color" name="vregiao"id="regiao" required="required">
									</div>
									<div class="formulario">
										<div class="formulario-input">	<span>Bairro:</span>
										</div>
										<input type="text" maxlength="50" placeholder="ex: Campo Limpo" title="Apenas Letras" pattern="[a-z\s]+$" class="form-control input-color" name="vbairro" id="bairro" required="required">
									</div>
									<div class="formulario">
										<div class="formulario-input">	<span>Telefone:</span>
										</div>
										<input type="text" maxlength="9" OnKeyPress="formatar('####-####', this)" pattern="[0-9]+$" title=" Sem DDD e apenas números" placeholder="ex: 963654785" class="form-control input-color" name="vtelefone" id="telefone" required="required">
									</div>
									<div class="formulario">
										<div class="formulario-input">	<span>Email:</span>
										</div>
										<input type="email" maxlength="30" title="Email válido, limitado à 30 caracteres" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="ex: seniorscare@gmail.com" class="form-control input-color" name="vemail" id="email" required="required">
									</div>
									<div class="formulario">
										<div class="formulario-input">	<span>Resumo:</span>
										</div>
										<textarea rows="3" cols="30" type="text"  maxlength="254" title="Limitado à 254 caracteres" placeholder="Faça um breve resumo de sua experiência" class="form-control input-color" name="vresumo" id="resumo" required="required"></textarea>
									</div>
									<button type="submit" name="Submeter" class="btn btn-primary btn-lg " required="required">Pronto</button>
								</form>
							</div>
						</div>
						<!--/#about-slider-->
					</div>
					<!--/#slider-->
					<div id="feature">
						<div class="container">
							<div class="row">
								<div class="text-center">
									<h3>Cuide de quem você ama</h3>
									<p>Com a SeniorsCare você sempre terá um profissional para cuidar de quem você ama. Garantimos a qualidade do serviço com os melhores cuidadores de idosos, nossa intenção é fazer com que enontre ache um profissional de maneira simples e rápida.</p>
								</div>
								<div class="text-center" data-wow-offset="0" data-wow-delay="0.3s">
									<div class="text-center">
										<div class="hi-icon-wrap hi-icon-effect">	<i class="fa fa-heart-o"></i>
											<h2>Lealdade,empatia e comprometimento.</h2>
											<p>Todos os idosos são tratados com o máximo respeito e carinho.</p>
										</div>
									</div>
								</div>
								<footer>
									<center>
										<p class="text-center"></p>
										<p>&copy; 2018 Grupo SeniorsCare, ADS 5º Semestre.</p>
								</footer>
								</center>
								</footer>
								<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
								<script src="js/jquery-2.1.1.min.js"></script>
								<!-- Include all compiled plugins (below), or include individual files as needed -->
								<script src="js/bootstrap.min.js"></script>
								<script src="js/parallax.min.js"></script>
								<script src="js/wow.min.js"></script>
								<script src="js/jquery.easing.min.js"></script>
								<script type="text/javascript" src="js/fliplightbox.min.js"></script>
								<script src="js/functions.js"></script>
								<script>
									wow = new WOW(
									 {
									
										}	) 
										.init();
								</script>
</body>

</html>