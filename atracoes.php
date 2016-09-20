<?php
    //----------COMPONENTES----------//
    $login_cad = '';
    $inscricoes_btn = '';
    $admin = '';

    //------CONDIÇÕES DE ACESSO------//
    if(!isset($_SESSION["id"])) // sem login //
    {
        $login_cad =  '<center>
                            <h1 class="text-muted" style="color:#ff0080;">Gostou? Cadastre-se ou faça login para se inscrever para as atrações!</h1>
                            <div class="btn-group">
                                <button class="btn btn-primary" data-target="#cadastro_modal" data-toggle="modal">Cadastrar</button>
                                <button class="btn btn-default" data-target="#login_modal" data-toggle="modal">Login</button>
                            </div>
                        </center>';
    }
    elseif($_SESSION["permissao"] == 0) // usuario //
    {
        $inscricoes_btn = '<button class="btn btn-primary" data-target="#inscricoes" data-toggle="modal" style="margin-top:10px;">Suas inscrições</button>';
    }
    elseif($_SESSION["permissao"] == 1) // root //
    {
        $admin = '<div class="btn-group">
                    <a class="btn btn-primary" href="#cosplay_modal" data-toggle="modal">Cosplays</a>
                    <a class="btn btn-primary" href="#animeke_modal" data-toggle="modal">Animekê</a>
                    <a class="btn btn-primary" href="#culinaria_modal" data-toggle="modal">Culinária</a>
                    <a class="btn btn-primary" href="#japones_modal" data-toggle="modal">Japonês</a>
                    <a class="btn btn-primary" href="#ingles_modal" data-toggle="modal">Inglês</a>
                </div>';
    }

?>

<section id="atracoes" class="bg-light-gray">
    <div class="container">
        <div class="col-xs-12 col-lg-12 text-center" style="margin-top:0px;">
            <h2 class="section-heading" style="margin-bottom:30px;">Atrações<br><?php echo $inscricoes_btn.$admin; ?></h2>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Competição de Cosplays</h4>
                <p>Participe da Competição de Cosplays e, se for capaz, ganhe muitos prêmios! A avaliação é realizada nos dias e no local do evento, a qual é baseada na aparência e no comportamento do personagem escolhido. A inscrição é gratuita e deve ser feita aqui no site.</p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Workshops</h4>
                <p>Aproveite também para adquirir muito conhecimento ao partipar do AnimeGo! Para participar, basta inscrever-se pelo site e pagar um pequeno valor no dia do evento. Atualmente contamos com os seguintes temas:</p>
                <li>Culinária Oriental - R$ 20,00</li>
                <li>Língua Japonesa - R$ 5,00</li>
                <li>Língua Inglesa - R$ 5,00</li>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Animekê</h4>
                <p>Já pensou em cantar as melhores músicas e ainda ganhar prêmios? Aqui é possível! O vencedor também poderá se apresentar no palco para todos os presentes. Para participar, é só inscrever-se aqui pelo site!</p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Batalha campal</h4>
                <p>Equipe sua arma, defina um estilo de luta e torne-se o melhor dos guerreiros! Apenas os melhores ganharão prêmios, então , para participar, basta ir no evento e inscrever-se na hora. </p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Sala de Exibição de Animes</h4>
                <p>Assista os melhores animes em tela grande e conheça (ou reconheça) os maiores sucessos de graça!</p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Palestras</h4>
                <p>Participe gratuitamente das diversas palestras que teremos, abordando temas impotantes (ou não) nos dias de hoje.</p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Espaço Jogos</h4>
                <p>Jogue seus jogos favoritos e conheça novas pessoas no nosso Espaço Jogos! Contando com tabuleiros e consoles, você pode jogar diferentes tipos de jogos.</p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Espaço HQ/Livros</h4>
                <p>Dê uma pausa, desfrute de um pouco de silêncio e leia os nossos (ou os seus) Livros e HQs!</p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Papo com Staff</h4>
                <p>Converse e discuta com nossa equipe sobre os animes, HQs, mangás e jogos que você mais gostou, apresente teorias sobre eles e muitos mais!</p>
            </div>
            <div class="col-xs-6 col-lg-6 text-center">
                <h4 class="section-subheading text-muted">Bandas</h4>
                <p>Quer ouvir uma boa música ao vivo ou até tocar umas músicas pra galera? Aqui você pode!</p>
            </div>
            <?php echo $login_cad; ?>
        </div>
        
    </div>
</section>