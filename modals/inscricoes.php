<?php
    //------COMPONENTES------//
    $cosplay_btn = '<button class="btn btn-primary" data-target="#cosplay_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $animeke_btn = '<button class="btn btn-primary" data-target="#animeke_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $culinaria_btn = '<button class="btn btn-primary" data-target="#culinaria_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $japones_btn = '<button class="btn btn-primary" data-target="#japones_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $ingles_btn = '<button class="btn btn-primary" data-target="#ingles_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $cosplay_html = '<form method="POST" action="#">
                        <div class="esp1" align="center">
                            <input type="text" id="personagem" name="personagem" class="form-control" placeholder="Personagem" required autofocus>
                            <input type="text" id="anime" name="anime" class="form-control" placeholder="Anime" required>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="insert_cosplay" name="insert_cosplay">Increver-se</button>
                            <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                        </div>
                    </form>';
    $animeke_html = '<form method="POST" action="#">
                        <div class="esp1" align="center">
                            <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: músicas, cantores, etc." autofocus></textarea>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="insert_animeke" name="insert_animeke">Increver-se</button>
                            <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                        </div>
                    </form>';
    $culinaria_html = '<form method="POST" action="#">
                        <div class="esp1" align="center">
                            <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: pratos, receitas, etc." autofocus></textarea>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="insert_culinaria" name="insert_culinaria">Increver-se</button>
                            <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                        </div>
                    </form>';
    $japones_html = '<form method="POST" action="#">
                        <div class="esp1" align="center">
                            <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: livros, métodos, etc." autofocus></textarea>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="insert_japones" name="insert_japones">Increver-se</button>
                            <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                        </div>
                    </form>';
    $ingles_html = '<form method="POST" action="#">
                        <div class="esp1" align="center">
                            <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: livros, métodos, etc." autofocus></textarea>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" id="insert_ingles" name="insert_ingles">Increver-se</button>
                            <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                        </div>
                    </form>';
    //---------AÇÕES---------//
    $json = $service->call('select',array('inscricao WHERE usuario_id = '.$_SESSION["id"]));
    $inscricao = json_decode($json);
    if(count($inscricao) != 0)
    {
        for($i=0;$i<count($inscricao);$i++)
        {
            if($inscricao[$i]->atracao_id == 1)
            {
                $json = $service->call('select',array('cosplay WHERE inscricao_id = '.$inscricao[$i]->id));
                echo '<script>alert("'.$json.$inscricao[$i]->id.'");</script>';
                $cosplay = json_decode($json);
                $cosplay_btn = '<button class="btn btn-default" data-target="#cosplay_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
                $cosplay_html = '<form method="POST" action="#">
                                    <div class="esp1" align="center">
                                        <input type="text" id="personagem" name="personagem" class="form-control" placeholder="Personagem" value="'.$cosplay[0]->personagem.'" required autofocus>
                                        <input type="text" id="anime" name="anime" class="form-control" placeholder="Anime" value="'.$cosplay[0]->anime.'" required>
                                        <input type="hidden" id="id" name="id" value="'.$cosplay[0]->id.'">
                                    </div>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary" id="update_cosplay" name="update_cosplay">Alterar inscrição</button>
                                        <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                                    </div>
                                </form>';
            }
            elseif($inscricao[$i]->atracao_id == 2)
            {
                $animeke_btn = '<button class="btn btn-default" data-target="#animeke_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
                $animeke_html = '<form method="POST" action="#">
                                    <div class="esp1" align="center">
                                        <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: músicas, cantores, etc." autofocus>'.$inscricao[$i]->sugestao.'</textarea>
                                        <input type="hidden" id="id" name="id" value="'.$inscricao[$i]->id.'">
                                    </div>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary" id="update_animeke" name="update_animeke">Alterar inscrição</button>
                                        <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                                    </div>
                                </form>';
            }
            elseif($inscricao[$i]->atracao_id == 3)
            {
                $culinaria_btn = '<button class="btn btn-default" data-target="#culinaria_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
                $culinaria_html = '<form method="POST" action="#">
                                    <div class="esp1" align="center">
                                        <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: pratos, receitas, etc." autofocus>'.$inscricao[$i]->sugestao.'</textarea>
                                        <input type="hidden" id="id" name="id" value="'.$inscricao[$i]->id.'">
                                    </div>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary" id="update_culinaria" name="update_culinaria">Alterar inscrição</button>
                                        <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                                    </div>
                                </form>';
            }
            elseif($inscricao[$i]->atracao_id == 4)
            {
                $japones_btn = '<button class="btn btn-default" data-target="#japones_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
                $japones_html = '<form method="POST" action="#">
                                    <div class="esp1" align="center">
                                        <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: livros, métodos, etc." autofocus>'.$inscricao[$i]->sugestao.'</textarea>
                                        <input type="hidden" id="id" name="id" value="'.$inscricao[$i]->id.'">
                                    </div>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary" id="update_japones" name="update_japones">Alterar inscrição</button>
                                        <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                                    </div>
                                </form>';
            }
            elseif($inscricao[$i]->atracao_id == 5)
            {
                $ingles_btn = '<button class="btn btn-default" data-target="#ingles_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
                $ingles_html = '<form method="POST" action="#">
                                    <div class="esp1" align="center">
                                        <textarea type="text" id="sugestao" maxlength=200 name="sugestao" class="form-control" placeholder="Sugestões. Ex: livros, métodos, etc." autofocus>'.$inscricao[$i]->sugestao.'</textarea>
                                        <input type="hidden" id="id" name="id" value="'.$inscricao[$i]->id.'">
                                    </div>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary" id="update_ingles" name="update_ingles">Alterar inscrição</button>
                                        <a class="btn btn-default" data-target="#inscricoes" data-toggle="modal" data-dismiss="modal">Voltar</a>
                                    </div>
                                </form>';
            }
        }
    }
?>

<div class="portfolio-modal modal fade " id="inscricoes" role="dialog" aria-hidden="true" data-dismiss="modal"> 
    <div class="modal-dialog" class="modal-lg" role="document">
        <div class="modal-content" style="height:380px;">
            <h3 style="margin-top:-12%;margin-right:20%;">Suas inscrições</h3>
            <div class="close-modal" data-dismiss="modal" aria-hidden="true">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <!--Conteudo aqui-->
            <div class="modal-body">
                <div class="col-xs-6 col-lg-6 text-center">
                    <h4 class="section-subheading text-muted" style="color:#ff0080;">Competições</h4>
                    <h5 class="section-subheading text-muted">Cosplays</h5>
                    <?php echo $cosplay_btn; ?>
                    <h5 class="section-subheading text-muted">Animekê</h5>
                    <?php echo $animeke_btn; ?>
                </div>
                <div class="col-xs-6 col-lg-6 text-center" >
                    <h4 class="section-subheading text-muted" style="color:#ff0080;">Workshops</h4>
                    <h5 class="section-subheading text-muted">Culinária Oriental</h5>
                    <?php echo $culinaria_btn; ?>
                    <h5 class="section-subheading text-muted">Língua Japonesa</h5>
                    <?php echo $japones_btn; ?>
                    <h5 class="section-subheading text-muted">Língua Inglesa</h5>
                    <?php echo $ingles_btn; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade " id="cosplay_modal" role="dialog" aria-hidden="true" data-dismiss="modal"> 
    <div class="modal-dialog" class="modal-lg" role="document">
        <div class="modal-content" style="height:380px;">
            <h3 style="margin-top:-12%;margin-right:20%;">Competição de Cosplays</h3>
            <div class="close-modal" data-dismiss="modal" aria-hidden="true">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <!--Conteudo aqui-->
            <div class="modal-body">
            <?php echo $cosplay_html; ?>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade " id="animeke_modal" role="dialog" aria-hidden="true" data-dismiss="modal"> 
    <div class="modal-dialog" class="modal-lg" role="document">
        <div class="modal-content" style="height:380px;">
            <h3 style="margin-top:-12%;margin-right:20%;">Animekê</h3>
            <div class="close-modal" data-dismiss="modal" aria-hidden="true">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <!--Conteudo aqui-->
            <div class="modal-body">
            <?php echo $animeke_html; ?>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade " id="culinaria_modal" role="dialog" aria-hidden="true" data-dismiss="modal"> 
    <div class="modal-dialog" class="modal-lg" role="document">
        <div class="modal-content" style="height:380px;">
            <h3 style="margin-top:-12%;margin-right:20%;">Workshop de Culinária Oriental</h3>
            <div class="close-modal" data-dismiss="modal" aria-hidden="true">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <!--Conteudo aqui-->
            <div class="modal-body">
            <p>Valor: R$ 20,00 (pagar no local)</p>
            <?php echo $culinaria_html; ?>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade " id="japones_modal" role="dialog" aria-hidden="true" data-dismiss="modal"> 
    <div class="modal-dialog" class="modal-lg" role="document">
        <div class="modal-content" style="height:380px;">
            <h3 style="margin-top:-12%;margin-right:20%;">Workshop de Japonês</h3>
            <div class="close-modal" data-dismiss="modal" aria-hidden="true">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <!--Conteudo aqui-->
            <div class="modal-body">
            <p>Valor: R$ 5,00 (pagar no local)</p>
            <?php echo $japones_html; ?>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade " id="ingles_modal" role="dialog" aria-hidden="true" data-dismiss="modal"> 
    <div class="modal-dialog" class="modal-lg" role="document">
        <div class="modal-content" style="height:380px;">
            <h3 style="margin-top:-12%;margin-right:20%;">Workshop de Inglês</h3>
            <div class="close-modal" data-dismiss="modal" aria-hidden="true">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <!--Conteudo aqui-->
            <div class="modal-body">
            <p>Valor: R$ 5,00 (pagar no local)</p>
            <?php echo $ingles_html; ?>
            </div>
        </div>
    </div>
</div>