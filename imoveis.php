<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Passeio em Miami</title>
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/foundation.min.css">
        <link rel="stylesheet" href="assets/css/foundation-icons/foundation-icons.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <script src="assets/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <!-- Inicio do body -->
        <img src="assets/img/bg.gif" class="fundoFakeBody" />
        <div class="fakeBody">
            <nav class="top-bar">
                <div class="row medium-10 columns medium-offset-1">
                    <ul class="title-area">
                        <li class="name"><h1><a href="./"><img src="assets/img/logo-passeio-em-miami.png" /></a></h1></li>
                        <!-- Mobile Menu Toggle -->
                        <li class="toggle-topbar menu-icon"><a href="#"><i class="fi-list-bullet large"></i></a></li>
                    </ul>
                    <!-- menu top-bar  -->
                    <dl class="sub-nav right subnav-lineheght">
                        <dd><a href="./sobre.php">Sobre</a></dd>
                        <dd class="active"><a href="./imoveis.php">Imóveis</a></dd>
                        <dd><a href="./compras.php">Compras</a></dd>
                        <dd><a href="./enxoval.php">Enxoval</a></dd>
                        <dd><a href="./contato.php">Contato</a></dd>
                    </dl>
                </div>
            </nav>
            <div class="row shadow bg-white" style="padding:20px 0;">              
                <div class="area-total">
                    <div class="medium-4 columns">
						<img class="img-content" alt="Sobre-passeio-em-miami" src="assets/img/imoveis-passeio-em-miami.png" />
					</div>
					<div class="medium-8 columns bg-imoveis bordas-radius">
						<h2>Sobre a Passeio em Miami.</h2>
						
						<h3>Vindo a Miami para passear?</h3>
						<p>Temos interessantes roteiros de passeio para que voce possa conhecer os pontos turisticos mais destacados da cidade.</p>
						<p>Você será recebido no aeroporto levado para o hotel e acompanhado durante toda a sua estadia nos Estados Unidos por Guia Brasileiros que falam Inglês, Português e Espanhol, residentes legais desse pais desde 1999.</p>
						<p>Usaremos a Nossa experiencia e conhecimento para melhor lhe servir.</p>
						
						<ul class="clearing-thumbs medium-block-grid-3" style="margin:10px 0;" data-clearing>
						<?php $cont = 1; while($cont <= 5){ ?>
							<li>
								<a href="assets/uploads/sobre/0<?php echo $cont; ?>.jpg">
									<img class="th radius" data-caption="caption here..." src="assets/uploads/sobre/0<?php echo $cont; ?>.jpg">
								</a>
							</li>
						<?php $cont++;} ?>
						</ul>
						<a href="#" class="button expand alert radius">Entre em contato conosco.</a>
					</div>
					
                </div>
            </div>
            <footer class="top-bar">
                <div class="large-6 columns">
                    <p>&copy; Copyright no one at all. Go to town.</p>
                </div>
                <div class="large-6 columns">
                    <ul class="inline-list right">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                    </ul>
                </div>
            </footer>
        </div>
        <!-- Fim do body -->
        <script src="assets/js/vendor/jquery.js"></script>
        <script src="assets/js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>