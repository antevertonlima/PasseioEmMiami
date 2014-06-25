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
            <nav class="top-bar" data-topbar>
                <div class="row medium-10 columns medium-offset-1">
                    <ul class="title-area">
                        <li class="name"><h1><a href="./"><img src="assets/img/logo-passeio-em-miami.png" /></a></h1></li>
                        <!-- Mobile Menu Toggle -->
                        <li class="toggle-topbar menu-icon"><a href="#"><i class="fi-list-bullet large"></i></a></li>
                    </ul>
                    <!-- menu top-bar  -->
                    <dl class="sub-nav right subnav-lineheght">
                        <dd><a href="./sobre.php">Sobre</a></dd>
                        <dd><a href="./imoveis.php">Imóveis</a></dd>
                        <dd><a href="./compras.php">Compras</a></dd>
                        <dd class="active"><a href="./enxoval.php">Enxoval</a></dd>
                        <dd><a href="./contato.php">Contato</a></dd>
                    </dl>
                </div>
            </nav>
            <div class="row shadow painel">              
                <div class="area-total">
                    <div class="small-12 medium-12 columns text-center">
                        <h2>Sobre a Passeio em Miami.</h2>
                        <p class="p-home">Vindo a <span class="orange">Miami</span> para <span class="orange">passear</span>? Temos interessantes roteiros de passeio para que voce possa conhecer os pontos turisticos mais destacados da cidade.</p>
                        <p class="p-home">Voce sera recebido no aeroporto levado para o hotel e acompanhado durante toda a sua estadia nos <span class="orange">Estados Unidos</span> por <span class="orange">guia brasileiros</span> que falam 
                            <span class="orange">inglês</span>, <span class="orange">português</span> e <span class="orange">espanhol</span>, residentes legais desse paid desde 1999.</p>
                        <p class="p-home">Usaremos a Nossa experiencia e conhecimento para melhor lhe servir.</p>
                    </div>

                    <div class="small-12 medium-12 columns bg-enxoval bordas-radius">

                        <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-3" style="margin:10px 0;" data-clearing>
                            <?php
                            $cont = 1;
                            while ($cont <= 6) {
                                ?>
                                <li>
                                    <a href="assets/uploads/enxoval/0<?php echo $cont; ?>.jpg">
                                        <img class="th radius" data-caption="Enxoval <?php echo $cont; ?>" src="assets/uploads/enxoval/0<?php echo $cont; ?>.jpg">
                                    </a>
                                </li>
                                <?php $cont++;
                            }
                            ?>
                        </ul>
                        <a href="#" class="button expand alert radius">Entre em contato conosco.</a>
                    </div>

                </div>
                <span class="clearfix"></span>
                <hr class="shadow" />
                <div class="small-12 medium-12">
                    <div class="small-12 medium-6 columns">
                        <div class="panel small-12 columns bordas-radius">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.60398683863!2d-80.23108009999999!3d25.782323950000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+Florida!5e0!3m2!1spt-BR!2sbr!4v1403466622754" width="100%" height="303" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <div class="panel small-12 columns bordas-radius">
                            <h4>Deixe o seu depoimento.</h4>
                            <form method="post" action="">
                                <input type="text" name="nome" placeholder="Seu nome" />
                                <textarea rows="6" name="depoimento" placeholder="Exemplo: Gostei muito do seviço, devido a atenção empregada a minha familia."></textarea>
                                <input type="submit" name="enviar" value="Enviar" class="button expand success radius"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="small-12 columns sub-footer-bar text-center shadow">
                <p>&copy; Copyright no one at all. Go to town.</p>
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