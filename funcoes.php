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
			$json = $service->call('select',array('SELECT * FROM usuario WHERE id = '.$id));
			$usuario = json_decode($json);
			$_SESSION["id"] = $id;
			$_SESSION["permissao"] = $usuario[0]->permissao;
		}
	}
	elseif(isset($_POST['insert_cosplay']))
	{
		$inscricao_id = $service->call('inscricao.insert',array($_SESSION['id'],1,''));
		if($inscricao_id != 0)
		{
			$id = $service->call('cosplay.insert',array($inscricao_id,$_POST['personagem'],$_POST['anime']));
			if($id != 0)
				echo "<script>alert('Inscrito com sucesso!');</script>";
			else
				echo "<script>alert('Erro ao inscrever!');</script>";
		}
		else
			echo "<script>alert('Erro ao inscrever!');</script>";
	}
	elseif(isset($_POST['update_cosplay']))
	{
		if($service->call('cosplay.update',array($_POST['id'],$_POST['personagem'],$_POST['anime'])))
			echo "<script>alert('Atualizado com sucesso!');</script>";
		else
			echo "<script>alert('Erro ao atualizar!');</script>";
	}
	elseif(isset($_POST['insert_animeke']) || isset($_POST['insert_culinaria']) || isset($_POST['insert_japones']) || isset($_POST['insert_ingles']))
	{
		$id = 2;
		if(isset($_POST['insert_culinaria']))
			$id = 3;
		elseif(isset($_POST['insert_japones']))
			$id = 4;
		elseif(isset($_POST['insert_ingles']))
			$id = 5;
		$inscricao_id = $service->call('inscricao.insert',array($_SESSION['id'],$id,$_POST['sugestao']));
		if($inscricao_id != 0)
			echo "<script>alert('Inscrito com sucesso!');</script>";
		else
			echo "<script>alert('Erro ao inscrever!');</script>";
	}
	elseif(isset($_POST['update_animeke']) || isset($_POST['update_culinaria']) || isset($_POST['update_japones']) || isset($_POST['update_ingles']) )
	{
		$id = 2;
		if(isset($_POST['update_culinaria']))
			$id = 3;
		elseif(isset($_POST['update_japones']))
			$id = 4;
		elseif(isset($_POST['update_ingles']))
			$id = 5;
		if($service->call('inscricao.update',array($id,$_POST['sugestao'])))
			echo "<script>alert('Atualizado com sucesso!');</script>";
		else
			echo "<script>alert('Erro ao atualizar!');</script>";
	}
	elseif(isset($_POST["contact_me"]))
	{
		$name = $_POST['name'];
		$email_address = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
			
		// Create the email and send the message
		$to = 'andrewsaxx@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Website Contact Form:  $name";
		$email_body = "Uma pessoa mandou uma mensagem pelo site do AnimeGo!\n\n"."Detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
		$headers = "From: root@animego.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		//$headers .= "Reply-To: $email_address";	
		mail($to,$email_subject,$email_body,$headers);
	}


?>