<? php
session_start ()
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Bem vido ao SeniorsCare</title>

	
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
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">SeniorsCare</a>
				</div>				
				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li type="button" class="default" action="index.php" ><a href="index.php">Inicio</a></li>
						<li><a href="#feature">Sobre Nós</a></li>
						<li type="button" class="default" action="duvida.php" ><a href="duvida.php">Dúvidas?</a></li>

					</ul>
				</div>
			</div><!--/.container-->
		</nav><!--/nav-->		
	</header><!--/header-->	
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
						<img src="img/6.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">								
								<h2 class ="test">Por favor,Preencha os campos abaixo.</h2>
								<div>
									<div>
									<div>
										
										<select class="form-control" name="regiao" id="regiao">
                                           
                                            <option>Selecione</option>
                                            <option>LESTE</option>
                                            <option>NORTE</option>
                                            <option>OESTE</option>
                                            <option>SUL</option>
                                        
										</select>
									</br>
								</br>
										<select class="form-control" name="bairro">
										<? php	
										$vregiao = $_POST ['regiao']
										$bairro = $_POST ['bairro']	
$serverName = "databaseseniorscare.database.windows.net";
$connectionOptions = array(
    "Database" => "DB_SENIORS_CARE",
    "Uid" => "admcare",
    "PWD" => "00@2018care"
    $conn = $serverName,$connectionOptions
);
//Establishes the connection
$bairro = $result
$result = sqlsrv_query($conn, 
             "CALL psnbuscaregiao('$vregiao');") or die("Erro na query da procedure: " . sqlsrv_error()); 
while ($row = sqlsrv_fetch_array($result)) {   
              echo  $row[1] . <option value='".$result."'</option>
                      
          }

				?>
										</select>
									</br>
									<form action="lista.php" method="post" class="form-inline">
									<button type="livedemo" name="encontrar" class="btn btn-primary btn-lg" required="required">Submeter
										</button>


									</div>
								</div>
							</div>



						</div> <!--/#carousel-slider-->
					</div><!--/#about-slider-->
				</div><!--/#slider-->

				<div id="feature">
					<div class="container">
						<div class="row">
							<div class="text-center">
								<h3>Cuide de quem voce ama</h3>
								<p>Com a SeniorsCare você sempre terá um profissional para cuidar de quem voce ama. Garantimos a qualidade do serviço com os melhores cuidadadores de idosos, a nossa intenção é fazer com que você ache um profissional de maneira simples e rápida.</p>

							</div>
							<div class="text-center" data-wow-offset="0" data-wow-delay="0.3s">
								<div class="text-center">
									<div class="hi-icon-wrap hi-icon-effect">
										<i class="fa fa-heart-o"></i>
										<h2>Lealdade e comprometimento.</h2>
										<p>Todos os idosos são tratados com o máximo respeito e carinho.</p>
									</div>
								</div>
							</div>








							<footer>
								<center>
									<p class="text-center"></p>
									<p>&copy; 2018 SeniorsCare, ADS 5º Semestre. </p>
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