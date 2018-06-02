<?php require_once('cabecalho.php');

function ProfissionalEstaLogado(){
    return isset($_SESSION['profissional_logado']);
}
if(ProfissionalEstaLogado()){
	header('Location: areaprofissional.php');
}
else
 {?>
	


	
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
						<img src="img/252.jpg" class="img-responsive test" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp testa" data-wow-offset="0" data-wow-delay="0.5s">
								<div class="titulo-text">
									<br>
									<br>
									<br>
									<br>
									<br>
									<h2>Digite seu email:</h2>
								</div>
								<form action="recuperasenha.php" enctype="multipart/form-data" method="POST">
									<div class="formulario">
										<div class="formulario-login">	<span>Email:</span>
										</div>
										<input type="email" maxlength="50" title="Seu email de cadastro" placeholder="ex: Seniorscare@gmail.com" class="form-control input-color" name="enviaemail" id="enviaemail" required="required">
									</div>
									<button type="submit" name="pedir" id="pedir" class="btnlog btn-primarylog btn-ped " required="required">Enviar</button>
						
								</form>
								
							</div>
						</div>
						</div>
					</div>
					
					<div id="feature">
						<div class="container">
							<div class="row">
								<div class="text-center">
									<h3>Comprometimento e veracidade das informações prestadas.</h3>
									<p class = "textinho3">Todo profissional cadastrado na SeniorsCare deverá se reponsabilizar pela veracidade das informações inseridas, em suspeita de fraude ou dados falsos o cadastro será analisado, e se for comprovado a irregularidade dos dados prestados o cadastro será deletado.Para aqueles que desejam remover seu cadastro por motivos pessoais, entrem em contato com nosso suporte via e-mail.</p>
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
								</script> <?php } ?>
</body>

</html>