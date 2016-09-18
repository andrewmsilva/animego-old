<?php

	$servidor = "localhost";
	$banco = "animego";
	$usuario = "root";
	$senhaa = "";

	$conexao = new mysqli($servidor, $usuario, $senhaa, $banco);

	if (mysqli_connect_errno())
		trigger_error(mysqli_connect_error());

 ?>
