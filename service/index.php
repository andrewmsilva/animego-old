<?php 
  require_once ('lib/nusoap.php');

  $server = new soap_server; 
  $namespace = 'urn:animego';
  $server->configureWSDL('animego', 'urn:animego');

  class competidor
  {
    function insert($nome,$cpf,$email,$personagem,$anime) 
    {
      $nome = ereg_replace("[#'/*\|`]", '',$nome);
      $cpf = ereg_replace("[^0-9]", '',$cpf);
      $email = ereg_replace("[#'/*\|`]", '',$email);
      $personagem = ereg_replace("[#'/*\|`]", '',$personagem);
      $anime = ereg_replace("[#'/*\|`]", '',$anime);
      require_once("mysql.php");
      $query = $conexao->query("INSERT INTO competidor VALUES (NULL,'$nome','$cpf','$email','$personagem','$anime')");
      $id = 0;
        if ($query == true)
          $id = $conexao->insert_id;
      $conexao->close();
      return $id;
    }

    function count() 
    {
      require_once("mysql.php");
      $query = $conexao->query("SELECT * FROM competidor");
      $conexao->close();
      return $query->num_rows;
    }

    function select($condicoes) 
    {
      require_once("mysql.php");
      $query = $conexao->query("SELECT * FROM competidor $condicoes");
      $dados = array();
      while($row = mysqli_fetch_assoc($query))
          $dados[] = $row;
      $conexao->close();
      return json_encode($dados);
    }

  }

   $server->register(
      'competidor.insert',
      array('nome' => 'xsd:string','cpf' => 'xsd:string','email' => 'xsd:string','personagem' => 'xsd:string','anime' => 'xsd:string'),
      array('return' => 'xsd:int'),
      $namespace,
      $namespace.'#competidor.insert',
      'rpc',
      'encoded',
      'Insere um registro na tabela competidor. (if (return == 0): error; else: id;)'
   );

   $server->register(
      'competidor.count',
      array(NULL),
      array('return' => 'xsd:int'),
      $namespace,
      $namespace.'#competidor.count',
      'rpc',
      'encoded',
      'Conta os registros da tabela competidor. (retorna int)'
   );

   $server->register(
      'competidor.select',
      array('condicoes' => 'xsd:string'),
      array('return' => 'xsd:string'),
      $namespace,
      $namespace.'#competidor.select',
      'rpc',
      'encoded',
      'Pesquisa registros na tabela competidor. (retorna json)'
   );

  if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents('php://input' ); $server->service($HTTP_RAW_POST_DATA); 

?>
