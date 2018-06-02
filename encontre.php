<?php require_once('cabecalho.php')?>
	<div class="slider">
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="img/252.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
								<h2 class="test">Escolha uma região:</h2>
								<div>
									<div>
										</br>
										<form method="POST" action="lista.php" id="formregiao">
											</br>	<font color="#0BA9F9">Centro</font>
											<input type="radio" name="regiao" value="centro" required="required" />	<font color="#0BA9F9">Leste</font>
											<input type="radio" name="regiao" value="leste" required="required" />	<font color="#0BA9F9">Norte</font>
											<input type="radio" name="regiao" value="norte" required="required" />	<font color="#0BA9F9">Oeste</font>
											<input type="radio" name="regiao" value="oeste" required="required" />	<font color="#0BA9F9">Sul</font>
											<input type="radio" name="regiao" value="sul" required="required" />
											</br>
											</br>
											<button type="submit" name="buscar" class="btn btn-primary btn-lg" value="enviar" required="required">Buscar</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--/#carousel-slider-->
					</div>
					<!--/#about-slider-->
				</div>
				<!--/#slider-->
				<div id="feature">
					<div class="container">
						<div class="row">
							<div class="text-center">
								<h3>Cuide de quem voce ama</h3>
								<p class = "textinho3" >Com a SeniorsCare você sempre terá um profissional para cuidar de quem voce ama. Garantimos a qualidade do serviço com os melhores cuidadadores de idosos, a nossa intenção é fazer com que você ache um profissional de maneira simples e rápida.</p>
							</div>
							<div class="text-center" data-wow-offset="0" data-wow-delay="0.3s">
								<div class="text-center">
									<div class="hi-icon-wrap hi-icon-effect">	<i class="fa fa-heart-o"></i>
										<h2>Lealdade e comprometimento.</h2>
										<p class = "textinho3">Todos os idosos são tratados com o máximo respeito e carinho.</p>
									</div>
								</div>
							</div>
							<footer>
								<center>
									<p class="text-center"></p>
									<p>&copy; 2018 SeniorsCare, ADS 5º Semestre.</p>
							</footer>
							</center>
							</footer>
							<script src="js/jquery-2.1.1.min.js"></script>
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