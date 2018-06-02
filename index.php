<?php require_once('cabecalho.php')?>

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
						<img src="img/2222.jpg" class="img-responsive test" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
								<h2>Bem vindo ao SeniorsCare.</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
								<p>Profissionais especializados em cuidados com idosos.</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.7s">
								<form action="encontre.php" method="post" class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="encontrar" class="btn btn-primary btn-lg" required="required">Encontre um cuidador</button>
									</div>
									</form>
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
								<h3>Cuide de quem você ama</h3>
								<p class = "textinho3">Com a SeniorsCare você sempre terá um profissional para cuidar de quem voce ama. Garantimos a qualidade do serviço com os melhores cuidadores de idosos, a nossa intenção é fazer com que você encontre um profissional de maneira simples e rápida.</p>
							</div>
							<div class="text-center" data-wow-offset="0" data-wow-delay="0.3s">
								<div class="text-center">
									<div class="hi-icon-wrap hi-icon-effect">	<i class="fa fa-heart-o"></i>
										<h2>Lealdade,empatia e comprometimento.</h2>
										<p class = "textinho3">Todos os idosos são tratados com o máximo respeito e carinho.</p>
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