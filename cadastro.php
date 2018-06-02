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
						<img src="img/252.jpg" class="img-responsive test" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp testa" data-wow-offset="0" data-wow-delay="0.5s">
								<div class="titulo-text">
									<h2>Cadastro de cuidadores SeniorsCare.</h2>
								</div>
								<form action="cadprof.php" enctype="multipart/form-data" method="POST">
									<div class="formulario">
										<div class="formulario-input">	<span>Nome:</span>
										</div>
										<input type="text" maxlength="50" title="Apenas Letras" placeholder="ex: João Sousa" class="form-control input-color" name="vnome" id="nome" required="required">
									</div>
									<div class="formulario">
										<div class="formulario-input">	<span>Região:</span>
										</div>
										<input type="text" maxlength="6" title="Apenas Centro, Leste, Norte, Oeste e Sul" placeholder="ex: Sul" class="form-control input-color" name="vregiao"id="regiao" required="required">
									</div>
									<div class="formulario">
										<div class="formulario-input">	<span>Bairro:</span>
										</div>
										<input type="text" maxlength="50" placeholder="ex: Campo Limpo" title="Apenas Bairros Válidos" class="form-control input-color" name="vbairro" id="bairro" required="required">
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
										<div class="formulario-input">	<span>Senha:</span>
										</div>
										<input type="text" maxlength="8" title="Máximo de 8 caracteres" placeholder="ex: Senha" class="form-control input-color" name="vsenha" id="senha" required="required">
									</div>
									<div class="formulario">
										<div class="anexo">	<span>Anexo:</span>
										
										<input class = "upload" type="file" name="arquivo" title="Tamanho máximo de 2MB" id="arquivo" name="MAX_FILE_SIZE" value="2048" required="required"><br>
										<h6 class = "sim">Em caso de fraude, este cadastro será deletado, deseja confirmar?</h6>
										<input type="radio" name="gender" value="male" required="required"> Confirmar
  										<input type="radio" name="gender" value="female"> Recusar
										</div>
									<button type="submit" name="Submeter" class="btn1 btn-primary1 btn-lg " required="required">Pronto</button>
									
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
								</script>
</body>

</html>