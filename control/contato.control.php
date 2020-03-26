<?php

	/**
	 * @author Vinícius Bacelar
	 * @version 1.0
	*/
	
	include('../libs/config.php');
	$contato = new Contato();

	foreach ($contato as $key => $value) {
		if (!isset($_POST[$key]) and $key != 'id') {
			$data['state'] = "false"; 
			$data['msg'] = "Preencha todos os campos";
			die(json_encode($data));
		}
	}

	$tratamento = new Treatment();

	if (!$tratamento->testPost()) {
		$data['state'] = "false"; 
		$data['msg'] = "Preencha todos os campos";
		die(json_encode($data));	
	}

	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$data['state'] = "false"; 
		$data['msg'] = "Email incorreto!";
		die(json_encode($data));
	}
	if (!is_numeric($_POST['telefone'])) {
		$data['state'] = "false"; 
		$data['msg'] = "Número incorreto!";
		die(json_encode($data));
	}
	if (strlen($_POST['telefone']) < 11) {
		$data['state'] = "false"; 
		$data['msg'] = "Número incorreto!";
		die(json_encode($data));
	}

	$datac = $tratamento->clearPost();

	$i = 0;

	foreach ($datac as $key => $value) {	
		$col[$i] = $key;
		$val[$i] = $value;
		$i++;
	}

	$return = $contato->insert($col, $val);

	if ($return) {
		$data['state'] = "true"; 
		$data['msg'] = "Inserção realizada com sucesso!";

		$qr = "SELECT MAX(id) FROM contatos";
		$run = mysqli_query( $GLOBALS['conn'], $qr);
		$row = mysqli_fetch_assoc($run);

		$log = new Log();
		$log->tabela = "contatos";
		$log->id_tabela = $row['MAX(id)'];
		$log->user = $datac['nome'];
		$fuso = new DateTimeZone('America/Sao_Paulo');
		$dt = new DateTime();  
		$dt->setTimezone($fuso);
		$log->data = $dt->format('d-m-Y H:i:s');
		$log->info = "Adicionado novo Contato!";
		$log->insert();

		
		die(json_encode($data));;
	} else {
		$data['state'] = "false"; 
		$data['msg'] = "Falha na inserção!";
		die(json_encode($data));
	}

