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
        if(!isset($_SESSION["permissao"])) // não logado //
        {
            require_once("modals/login.html");
            require_once("modals/cadastro.html");
        }
        else
        {
            if($_SESSION["permissao"] == 0) // usuario //
                require_once("modals/inscricoes.php");
            else // root //
                require_once("modals/admin.php");
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
                    <h3 class="section-subheading text-muted">No dia <b style="color: #ff00ff">22 de Outubro de 2016</b> será realizado o primeiro evento do oeste de SC cujo o tema é cultura geek, oriental e otaku, o <b style="color: #ff00ff">AnimeGo! 1º Edição!</b> A primeira edição do evento será em Chapecó, contando com workshops, competições, músicas e muitas outras atrações.</h3>
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
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h2 class="section-heading">Nosso time fantástico!</h2>
                    <h3 class="section-subheading text-muted">Gostaria de conhecer melhor o trabalho de algum membro da equipe? Clique em um dos ícones das redes sociais!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/naomi.jpg" class="img-responsive img-circle" alt="">
                        <h4>Naomi Fernanda</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/naomi.f.mello"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/luan.jpg" class="img-responsive img-circle" alt="">
                        <h4>Luan Félix</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/luanfelixpimentel"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/mark.jpg" class="img-responsive img-circle" alt="">
                        <h4>Marco Antônio</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/srkimihiro"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/william.jpg" class="img-responsive img-circle" alt="">
                        <h4>William Versa</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/william.versa"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/fran.jpg" class="img-responsive img-circle" alt="">
                        <h4>Franciene Bernardi</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/fran.bernardi"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/raphael.jpg" class="img-responsive img-circle" alt="">
                        <h4>Raphael Borges</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/oRaphaBorges"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/andrew.jpg" class="img-responsive img-circle" alt="">
                        <h4>Andrew Malta</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/AndrewMaltaa"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/gabriel.jpg" class="img-responsive img-circle" alt="">
                        <h4>Gabriel Vassoler</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/gabriel.vas.1"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/jessica.jpg" class="img-responsive img-circle" alt="">
                        <h4>Jéssica Souza</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/jessie.medeleyne"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/rute.jpg" class="img-responsive img-circle" alt="">
                        <h4>Rute Cintra</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/ruteoliveiracintra"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="team-member">
                        <img src="img/time/guilherme.jpg" class="img-responsive img-circle" alt="">
                        <h4>Guilherme Konopatzki</h4>
                        <p class="text-muted"></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/guilherme.konopatzki"><i class="fa fa-facebook"></i></a>
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

    <section id="pat">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h2 class="section-heading">Nossos patrocinadores</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <img src="img/patrocinadores.png" style="width: 100%">
                </div>
            </div>
        </div>
    </section>
    
    <!--Contato-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fale conosco</h2>
                    <h3 class="section-subheading text-muted">Algum problema, crítica ou ideia? Fale com a gente!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" align="center">
                    <form method="POST" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu nome *" id="name" name="name" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu email *" id="email" name="email" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu número de telefone" id="phone" name="phone">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua mensagem *" id="message" name="message" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="contact_me" name="contact_me" class="btn btn-xl">Enviar mensagem</button>
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
