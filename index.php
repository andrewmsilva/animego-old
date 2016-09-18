<?php
    // Iniciando sessão
    if(!isset($_SESSION))
        session_start();
    require_once("conectar_service.php");
    require_once("funcoes.php");
?>

<!DOCTYPE html>
<html lang="Pt-Br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cosplay, Manga, Anime, Weeaboo, Waifu">
    <meta name="author" content="Marco Antonio Rosa da Silva, ">

    <title>Anime Go!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <style type="text/css">
        input.form-control
        {
            height:auto;
            margin-top:5px;
            margin-bottom:5px;
        }
        .col-xs-6,.col-lg-6,.text-center
        {
            margin-bottom: 20px;
        }
    </style>

</head>

<body id="page-top" class="index">

    <?php
        require_once("nav.php");
        require_once("carousel.html");
        if(!isset($_SESSION["id"])) // não logado //
        {
            require_once("modals/login.html");
            require_once("modals/cadastro.html");
        }
        elseif($_SESSION["permissao"] == 0) // usuario //
        {
            require_once("modals/inscricoes.php");
        }
        else // root //
        {

        }

    ?>
	
	<!-- Header -->
	<header>
        <div id="sobre" class="container">
            <div class="intro-text" style="margin-top:-15%">
                <div class="intro-lead-in">いらっしゃいませ!</div>
                <div class="intro-heading">Irasshaimase!</div>
            </div>
            <div class="row" style="margin-top:-20%;padding-bottom:60px;">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h3 class="section-subheading text-muted">O AnimeGo! 1º Edição é o primeiro evento do oeste de SC cujo o tema é cultura geek, oriental e otaku! A primeira edição do evento será em Chapecó, contando com workshops, competições, músicas e muitas outras atrações.</h3>
                    <p><button href="#onde" class="btn btn-default" data-toggle="modal" style="margin-top:20px;">Clique aqui para saber como adquirir um ingresso</button></p>
                </div>
            </div>
        </div>
    </header>

    <?php require_once("atracoes.php"); ?>

	<!--Localização-->	
    <section id="local">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 text-center">
                    <h2 class="section-heading">Localização</h2>
                    <h3 class="section-subheading text-muted">Escolha seu caminho!</h3>
                </div>
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-md-offset-1  col-lg-offset-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1775.349384085046!2d-52.60004767323575!3d-27.134296375216685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b6a18142c0a3%3A0x8b11ef4e1a2c80bd!2sUniversidade+do+Oeste+de+Santa+Catarina%2C+Campus+Chapec%C3%B3!5e0!3m2!1spt-BR!2sbr!4v1468640771820" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
    </section>

	<!--Time-->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h2 class="section-heading">Nosso time fantástico!</h2>
                    <h3 class="section-subheading text-muted">Gostaria de conhecer melhor o trabalho de algum membro da equipe? Clique em um dos ícones das redes sociais!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/1.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 1</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/2.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 2</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/3.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 3</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/4.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 4</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/5.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 5</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/6.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 6</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/7.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 7</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/8.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 8</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/9.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 9</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-6 col-sm-4">
                    <div class="team-member">
                        <img src="img/time/10.png" class="img-responsive img-circle" alt="">
                        <h4>Pessoa 10</h4>
                        <p class="text-muted">Descrição</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
							<li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Gostaria de entrar em contato com algum membro da equipe? Clique em um dos ícones das redes sociais!</p>
                </div>
            </div>
        </div>
    </section>



    

    <!--Patrocinadores -->
    <aside class="clients" class="bg-light-gray">
        <div class="container">
			<br>
			<h2 class="section-heading text-center">Patrocinadores</h2>
			<br>
            <div class="row">
                <div class="col-xs-3 col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-xs-3 col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-xs-3 col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-xs-3 col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
    <!--Contato-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fale conosco</h2>
                    <h3 class="section-subheading text-muted">Algum problema, crítica, ideia? Fale com a gente!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" align="center">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu nome *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu celular *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua mensagem *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; MainCosplay 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-instagram"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Politica de privacidade</a>
                        </li>
                        <li><a href="#">Termos de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-dismiss="modal" > 
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="close-modal" data-dismiss="modal" aria-hidden="true">
						<div class="lr">
							<div class="rl">
							</div>
						</div>
					</div>
				</div>
				<!--Conteudo aqui-->
				<div class="modal-body">
					<h2 id="myModalLabel">Nome do Cosplayer</h2>
					<p class="item-intro text-muted">Frase motivacional</p>
					<img class="img-responsive img-centered" src="img\cosplayers\1.png" alt="">
					<p><strong>Um pouco sobre o cosplayer</strong></p>
					<button type="button" class="btn btn-primary"><i class="fa fa-play"></i> Ver perfil</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>
	
    <!-- Cosplay Modal -->
    <div class="portfolio-modal modal fade " id="cad-cosplay" role="dialog" aria-hidden="true" data-dismiss="modal"> 
        <div class="modal-dialog" class="modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="margin-top:-12%;margin-right:20%;">Competição de Cosplays</h3>
                    <div class="close-modal" data-dismiss="modal" aria-hidden="true">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Conteudo aqui-->
                <div class="modal-body">
                    <form method="POST" action="#">
                        <div class="esp1" align="center">
                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome completo" required autofocus>
                            <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Cpf" required> 
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>  
                            <input type="text" id="personagem" name="personagem" class="form-control" placeholder="Personagem" required>    
                            <input type="text" id="anime" name="anime" class="form-control" placeholder="Anime" required> 
                        </div>
                        <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 esp1">
                            <button class="btn btn-sm col-xs-12 col-sm-12" id="inscricao" name="inscricao" type="submit">Inscrever</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
	
	<!--Recuperar-->
	<div class="portfolio-modal modal fade" id="esenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-dismiss="modal" > 
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal" aria-hidden="true">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<!--Conteudo aqui-->
				<h4>Recuperação de senha</h4>
				<h5>Enviar um email com a senha cadastrada</h5>
				<div class=" esp1" align="center">
					<label for="inputEmail" class="sr-only">Email</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
					<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 esp1">
						<button class="btn btn-sm col-xs-12 col-sm-12" type="submit">Recuperar</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>
	
	<!--Lista de vendedores-->	
	<div class="portfolio-modal modal fade" id="onde" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-dismiss="modal" > 
		<div class="modal-dialog" role="document">
			<div class="modal-content">
					<div class="close-modal" data-dismiss="modal" aria-hidden="true">
						<div class="lr">
							<div class="rl">
							</div>
						</div>
					</div>
				<!--Conteudo aqui-->
				<table class="table">
					<caption class="text-center">Lista de vendedores</caption> 
					<thead> 
						<tr> 
							<th>#</th> 
							<th>Nome</th> 
							<th>Endereço</th> 
						</tr> 
					</thead> 
					<tbody> 
						<tr> 
							<th scope="row">1</th> 
							<td>Lugar</td> 
							<td>End. do lugar 876-D</td> 
						</tr> 
						<tr>
							<th scope="row">2</th> 
							<td>Lugar 2</td> 
							<td>End. do lugar 876-D</td> 
						</tr>
						<tr> 
							<th scope="row">3</th> 
							<td>Lugar 3</td> 
							<td>End. do lugar 876-D</td>  
						</tr> 
					</tbody> 
				</table>
				<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 esp1">
					<button class="btn btn-sm col-xs-12 col-sm-12" type="submit">Recuperar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>


	
	

	
	
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
