<?php
	require_once('lib/nusoap.php');

	ini_set("soap.wsdl_cache_enabled", "1");
	$service = new nusoap_client('http://www.animego.esy.es/service/index.php?wsdl', true);
?>