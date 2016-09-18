<?php 
  require_once ('lib/nusoap.php');

  $server = new soap_server; 
  $namespace = 'urn:animego';
  $server->configureWSDL('animego', 'urn:animego');

  class usuario
  {
    function insert($nome,$email,$telefone,$senha) 
    {
      $nome = ereg_replace("[#'/*\|`]", '',$nome);
      $email = ereg_replace("[#'/*\|`]", '',$email);
      $telefone = ereg_replace("[^0-9]", '',$telefone);
      $senha = md5(sha1($senha));
      require_once("mysql.php");
      $query = $conexao->query("INSERT INTO usuario VALUES (NULL,'$nome','$email','$telefone','$senha',0)");
      $id = 0;
      if ($query == 1)
        $id = $conexao->insert_id;
      $conexao->close();
      return $id;
    }

    function login($email,$senha) 
    {
      $email = ereg_replace("[#'/*\|`]", '',$email);
      $senha = md5(sha1($senha));
      require_once("mysql.php");
      $query = $conexao->query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");
      $retorno = 0;
      if (mysqli_num_rows($query) == 1)
      {
        $row = mysqli_fetch_assoc($query);
        $retorno = $row["id"];
      }
      $conexao->close();
      return $retorno;
    }

    function delete($id)
    {
      $id = ereg_replace("[^0-9]", '',$id);
      require_once("mysql.php");
      $query = $conexao->query("DELETE FROM usuario WHERE id = $id");
      $conexao->close();
      return $query;
    }

  }

  $server->register
  (
    'usuario.insert',
    array('nome' => 'xsd:string','email' => 'xsd:string','telefone' => 'xsd:string','senha' => 'xsd:string'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#usuario.insert',
    'rpc',
    'encoded',
    'Insere um registro na tabela usuario. Retorna o id.'
  );
  $server->register
  (
    'usuario.login',
    array('email' => 'xsd:string','senha' => 'xsd:string'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#usuario.login',
    'rpc',
    'encoded',
    'Realiza o login do usuario. Retorna o id.'
  );
  $server->register
  (
    'usuario.delete',
    array('id' => 'xsd:int'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#usuario.delete',
    'rpc',
    'encoded',
    'Deleta um registro na tabela usuario. Retorna boolean.'
  );


  class cosplay
  {
    function insert($inscricao_id,$personagem,$anime) 
    {
      $inscricao_id = ereg_replace("[^0-9]", '',$inscricao_id);
      $personagem = ereg_replace("[#'/*\|`]", '',$personagem);
      $anime = ereg_replace("[#'/*\|`]", '',$anime);
      require_once("mysql.php");
      $query = $conexao->query("INSERT INTO cosplay VALUES (NULL,$inscricao_id,'$personagem','$anime')");
      $id = 0;
      if ($query == 1)
        $id = $conexao->insert_id;
      $conexao->close();
      return $id;
    }

    function update($id,$personagem,$anime)
    {
      $id = ereg_replace("[^0-9]", '',$id);
      $personagem = ereg_replace("[#'/*\|`]", '',$personagem);
      $anime = ereg_replace("[#'/*\|`]", '',$anime);
      require_once("mysql.php");
      $query = $conexao->query("UPDATE cosplay SET personagem = '$personagem',anime = '$anime' WHERE id = $id");
      $conexao->close();
      return $query;
    }

    function delete($id)
    {
      $id = ereg_replace("[^0-9]", '',$id);
      require_once("mysql.php");
      $query = $conexao->query("DELETE FROM cosplay WHERE id = $id");
      $conexao->close();
      return $query;
    }

  }

  $server->register
  (
    'cosplay.insert',
    array('inscricao_id' => 'xsd:int','personagem' => 'xsd:string','anime' => 'xsd:string'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#cosplay.insert',
    'rpc',
    'encoded',
    'Insere um registro na tabela cosplay. Retorna o id.'
  );
  $server->register
  (
    'cosplay.update',
    array('id' => 'xsd:int','personagem' => 'xsd:string','anime' => 'xsd:string'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#cosplay.update',
    'rpc',
    'encoded',
    'Atualiza um registro da tabela cosplay. Retorna o id.'
  );
  $server->register
  (
    'cosplay.delete',
    array('id' => 'xsd:int'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#cosplay.delete',
    'rpc',
    'encoded',
    'Deleta um registro na tabela cosplay. Retorna boolean.'
  );

  class inscricao
  {
    function insert($usuario_id,$atracao_id,$sugestao) 
    {
      $usuario_id = ereg_replace("[^0-9]", '',$usuario_id);
      $atracao_id = ereg_replace("[^0-9]", '',$atracao_id);
      $sugestao = ereg_replace("[#'/*\|`]", '',$sugestao);
      require_once("mysql.php");
      $query = $conexao->query("INSERT INTO inscricao VALUES (NULL,$usuario_id,$atracao_id,'$sugestao')");
      $id = 0;
      if ($query == 1)
        $id = $conexao->insert_id;
      $conexao->close();
      return $id;
    }

    function update($id,$sugestao)
    {
      $id = ereg_replace("[^0-9]", '',$id);
      $sugestao = ereg_replace("[#'/*\|`]", '',$sugestao);
      require_once("mysql.php");
      $query = $conexao->query("UPDATE inscricao SET sugestao = '$sugestao' WHERE id = $id");
      $conexao->close();
      return $query;
    }

    function delete($id)
    {
      $id = ereg_replace("[^0-9]", '',$id);
      require_once("mysql.php");
      $query = $conexao->query("SELECT FROM inscricao WHERE id = $id");
      $row = mysqli_fetch_assoc($query);
      if($row["atracao_id"] == 0)
        $query = $conexao->query("DELETE FROM cosplay WHERE inscricao_id = $id");
      $query = $conexao->query("DELETE FROM inscricao WHERE id = $id");
      $conexao->close();
      return $query;
    }

  }

  $server->register
  (
    'inscricao.insert',
    array('usuario_id' => 'xsd:int','atracao_id' => 'xsd:int','sugestao' => 'xsd:string'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#inscricao.insert',
    'rpc',
    'encoded',
    'Insere um registro na tabela inscricao. Retorna o id.'
  );
  $server->register
  (
    'inscricao.update',
    array('id' => 'xsd:int','sugestao' => 'xsd:string'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#inscricao.update',
    'rpc',
    'encoded',
    'Atualiza um registro da tabela inscricao. Retorna o id.'
  );
  $server->register
  (
    'inscricao.delete',
    array('id' => 'xsd:int'),
    array('return' => 'xsd:int'),
    $namespace,
    $namespace.'#inscricao.delete',
    'rpc',
    'encoded',
    'Deleta um registro na tabela inscricao. Retorna boolean.'
  );

  function select($text) 
  {
    $dados = array();
    if(($text != "") && ($text != NULL))
    {
      require_once("mysql.php");
      $query = $conexao->query("SELECT * FROM $text");
      
      while($row = mysqli_fetch_assoc($query))
        $dados[] = $row;
      $conexao->close();
    }
    return json_encode($dados);
  }

  $server->register
  (
    'select',
    array('text' => 'xsd:string'),
    array('return' => 'xsd:string'),
    $namespace,
    $namespace.'#select',
    'rpc',
    'encoded',
    'Seleciona tudo de qualquer coisa. Retorna json.'
  );

  if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents('php://input' ); $server->service($HTTP_RAW_POST_DATA); 

?>
