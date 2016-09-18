<?php
    //------COMPONENTES------//
    $cosplay_btn = '<button class="btn btn-primary" data-target="#cosplay_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $animeke_btn = '<button class="btn btn-primary" data-target="#animeke_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $culinaria_btn = '<button class="btn btn-primary" data-target="#culinaria_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $japones_btn = '<button class="btn btn-primary" data-target="#japones_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    $ingles_btn = '<button class="btn btn-primary" data-target="#ingles_modal" data-toggle="modal" data-dismiss="modal">Inscrever-se</button>';
    //---------AÇÕES---------//
    $json = $service->call('select',array('inscricao WHERE usuario_id = '.$_SESSION["id"]));
    $inscricao = json_decode($json);
    if(count($inscricao) != 0)
    {
        for($i=0;$i<count($inscricao);$i++)
        {
            if($inscricao[$i]->atracao_id = 1)
                $cosplay_btn = '<button class="btn btn-default" data-target="#cosplay_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
            elseif($inscricao[$i]->atracao_id = 2)
                $animeke_btn = '<button class="btn btn-default" data-target="#animeke_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
            elseif($inscricao[$i]->atracao_id = 3)
                $culinaria_btn = '<button class="btn btn-default" data-target="#culinaria_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
            elseif($inscricao[$i]->atracao_id = 4)
                $japones_btn = '<button class="btn btn-default" data-target="#japones_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
            elseif($inscricao[$i]->atracao_id = 5)
                $ingles_btn = '<button class="btn btn-default" data-target="#ingles_modal" data-toggle="modal" data-dismiss="modal">Alterar inscrição</button>';
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