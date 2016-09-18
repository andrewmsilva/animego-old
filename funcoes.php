<?php
	
	if(isset($_POST['cadastro']))
	{
		if($_POST['senha1'] == $_POST['senha2'])
		{
			$id = $service->call('usuario.insert',array($_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['senha1'],0));
			if($id == 0)
				echo '<script>alert("Erro ao realizar cadastro, verifique o email e a senha!")</script>';
			else
			{
				$_SESSION["id"] = $id;
				$_SESSION["permissao"] = 0;
				echo '<script>alert("Cadastro realizado com sucesso!")</script>';
			}
		}
	}
	elseif(isset($_POST['login']))
	{
		$id = $service->call('usuario.login',array($_POST['email'],$_POST['senha']));
		if($id == 0)
			echo '<script>alert("Erro ao realizar login!")</script>';
		else
		{
			$json = $service->call('select',array('usuario WHERE id = '.$id));
			$usuario = json_decode($json);
			$_SESSION["id"] = $id;
			$_SESSION["permissao"] = $usuario[0]->permissao;
			echo '<script>alert("Login realizado com sucesso!")</script>';
		}
	}

?>