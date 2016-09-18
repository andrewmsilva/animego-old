<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container ">
        <!-- Display mobile -->

        <div class="navbar-header page-scroll col-sm-1 col-md-3 col-lg-3">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll hidden-sm"  href="#page-top">Anime Go!</a>
			<a class="navbar-brand page-scroll visible-sm-block"  href="#page-top">AG!</a>
        </div>

        <!-- Barra de navegação -->
        <div class="collapse navbar-collapse col-sm-8 col-md-9 col-lg-9" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="">
                    <a class="page-scroll btn" href="#sobre">Sobre o evento</a>
                </li>
                <li class="">
                    <a class="page-scroll btn" href="#atracoes">Atrações</a>
                </li>
				<li class="">
                    <a class="page-scroll btn" href="#local">Localização</a>
                </li>
                <li class="">
                    <a class="page-scroll btn" href="#team">Equipe</a>
                </li>
                <li class="">
                    <a class="page-scroll btn" href="#contact">Contato</a>
                </li>
                <?php 
                    if(!isset($_SESSION["id"]))
                    {
                ?>
				<!--Login mobile-->
				<li class="visible-xs-block portfolio-item">
                    <a class="portfolio-link btn" data-toggle="modal" href="#login_modal">Login</a>
                </li>
				<!--Login dropdown-->
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle btn hidden-xs" data-toggle="dropdown">Login<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>                               
							<div class="container-fluid text-center">
								<h4>Login</h4>
                                <form method="POST" action="#">
									<div class="esp1" align="center">
										<input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
										<input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>	
									</div>
									<div class="col-xs-12 col-sm-12">
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-primary" id="login" name="login">Login</button>
                                            <a class="btn btn-default" data-target="#cadastro_modal" data-toggle="modal" data-dismiss="modal">Cadastrar</a>
                                        </div>
                                        <a href="#esenha" class="col-xs-12 col-sm-12 esp1 portfolio-link" type="submit" data-toggle="modal">Esqueci minha senha</a>
                                    </div>  
                                </form>
							</div>
                        </li>
                    </ul>
                </li>
                <?php 
                    }
                    else
                    {
                ?>
                <li class="">
                    <a class="btn" href="logout.php">Logout</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>