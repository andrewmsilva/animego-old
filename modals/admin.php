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
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Personagem</th>
                            <th>Anime</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $json = $service->call('select',array('SELECT usuario.nome,usuario.email,usuario.telefone,cosplay.personagem,cosplay.anime FROM inscricao INNER JOIN usuario ON (usuario.id = inscricao.usuario_id) INNER JOIN cosplay ON (inscricao.id = cosplay.inscricao_id)'));
                        $resultado = json_decode($json);
                        for($i=0;$i<count($resultado);$i++)
                        {
                            echo '<tr>
                                    <td>'.$resultado[$i]->nome.'</td>
                                    <td>'.$resultado[$i]->email.'</td>
                                    <td>'.$resultado[$i]->telefone.'</td>
                                    <td>'.$resultado[$i]->personagem.'</td>
                                    <td>'.$resultado[$i]->anime.'</td>
                                </tr>';
                        }
                    ?>
                    </tbody>
                </table>
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
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Sugestão</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $json = $service->call('select',array('SELECT usuario.nome,usuario.email,usuario.telefone,inscricao.sugestao FROM inscricao INNER JOIN usuario ON (usuario.id = inscricao.usuario_id) WHERE inscricao.atracao_id = 2'));
                        $resultado = json_decode($json);
                        for($i=0;$i<count($resultado);$i++)
                        {
                            echo '<tr>
                                    <td>'.$resultado[$i]->nome.'</td>
                                    <td>'.$resultado[$i]->email.'</td>
                                    <td>'.$resultado[$i]->telefone.'</td>
                                    <td>'.$resultado[$i]->sugestao.'</td>
                                </tr>';
                        }
                    ?>
                    </tbody>
                </table>
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
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Sugestão</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $json = $service->call('select',array('SELECT usuario.nome,usuario.email,usuario.telefone,inscricao.sugestao FROM inscricao INNER JOIN usuario ON (usuario.id = inscricao.usuario_id) WHERE inscricao.atracao_id = 3'));
                        $resultado = json_decode($json);
                        for($i=0;$i<count($resultado);$i++)
                        {
                            echo '<tr>
                                    <td>'.$resultado[$i]->nome.'</td>
                                    <td>'.$resultado[$i]->email.'</td>
                                    <td>'.$resultado[$i]->telefone.'</td>
                                    <td>'.$resultado[$i]->sugestao.'</td>
                                </tr>';
                        }
                    ?>
                    </tbody>
                </table>
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
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Sugestão</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $json = $service->call('select',array('SELECT usuario.nome,usuario.email,usuario.telefone,inscricao.sugestao FROM inscricao INNER JOIN usuario ON (usuario.id = inscricao.usuario_id) WHERE inscricao.atracao_id = 4'));
                        $resultado = json_decode($json);
                        for($i=0;$i<count($resultado);$i++)
                        {
                            echo '<tr>
                                    <td>'.$resultado[$i]->nome.'</td>
                                    <td>'.$resultado[$i]->email.'</td>
                                    <td>'.$resultado[$i]->telefone.'</td>
                                    <td>'.$resultado[$i]->sugestao.'</td>
                                </tr>';
                        }
                    ?>
                    </tbody>
                </table>
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
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Sugestão</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $json = $service->call('select',array('SELECT usuario.nome,usuario.email,usuario.telefone,inscricao.sugestao FROM inscricao INNER JOIN usuario ON (usuario.id = inscricao.usuario_id) WHERE inscricao.atracao_id = 5'));
                        $resultado = json_decode($json);
                        for($i=0;$i<count($resultado);$i++)
                        {
                            echo '<tr>
                                    <td>'.$resultado[$i]->nome.'</td>
                                    <td>'.$resultado[$i]->email.'</td>
                                    <td>'.$resultado[$i]->telefone.'</td>
                                    <td>'.$resultado[$i]->sugestao.'</td>
                                </tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>