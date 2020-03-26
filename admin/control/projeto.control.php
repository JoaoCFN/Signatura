<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/
	
	include('../../libs/config.php');
	if (!isset($_SESSION['admin'])) {
		header('location: ../login.php');
	}
	$Projeto = new Projeto();
	$tratamento = new Treatment();
	$log = new Log();

	foreach ($contato as $key => $value) {
		if (!isset($_POST[$key]) and $key != 'id') {
			$_SESSION['state'] = "false"; 
			$_SESSION['msg'] = "Preencha todos os campos";
			header('location: ../adc_proj.php');
			die("");
		}
	}


	if (!$tratamento->testPost()) {
		$_SESSION['state'] = "false"; 
		$_SESSION['msg'] = "Preencha todos os campos";
		header('location: ../adc_proj.php');
		die("");	
	}

	$post = $tratamento->clearPost();
	$i = 0;
	foreach ($post as $key => $value) {
		$col[$i] = $key;
		$val[$i] = $value;

		$i++;
	}
	$Projeto->insert($col, $val);
	$qr = "SELECT MAX(id) FROM projetos";
	$run = mysqli_query( $GLOBALS['conn'], $qr);

	$row = mysqli_fetch_assoc($run);

	 

	/*Tratamento das Imagens*/
	$dir = "../../midia/projetos/".$row['MAX(id)']."/"; 
	mkdir ($dir, 0755);

	function tudo($key, $nome, $dir){
		$ext = strtolower(substr($_FILES[$key]['name'],-4)); 
	    if ($ext != '.png') {
	    	$_SESSION['state'] = "false"; 
			$_SESSION['msg'] = "Imagens permitidas apenas em .png";
			header('location: ../adc_proj.php');
			die("");
	    }
	    
	    move_uploaded_file($_FILES[$key]['tmp_name'], $dir.$nome); 
    	
	}




	if(isset($_FILES['tumb']) && isset($_FILES['img_top']) && isset($_FILES['img_telas']) && isset($_FILES['img_mobile']) && isset($_FILES['img_mid']) && isset($_FILES['img_bot'])){
	    tudo('tumb', 'thumb-mulher.png', $dir);
	    tudo('img_top', 'Portfolio-Bottom.png', $dir);
	    tudo('img_telas', 'TELAS.png', $dir);
	    tudo('img_mobile', 'MOBILE.png', $dir);
	    tudo('img_mid', 'projetos_detalhe_img_deitada.png', $dir);
	    tudo('img_bot', 'Telas-Site.png', $dir);
	}else{
	 	$_SESSION['state'] = "false"; 
		$_SESSION['msg'] = "Preencha todos os campos";
		header('location: ../adc_proj.php');
		die("");
	}


	$_SESSION['state'] = "true"; 
	$_SESSION['msg'] = "Projeto adicionado com sucesso!";
		$log->tabela = "projetos";
		$log->id_tabela = $row['MAX(id)'];
		$log->user = $_SESSION['admin']->nome;
		$fuso = new DateTimeZone('America/Sao_Paulo');
		$dt = new DateTime();  
		$dt->setTimezone($fuso);  
		$log->data = $dt->format('d-m-Y H:i:s');
		$log->info = "Adicionado novo projeto!";
		$log->insert();
	header('location: ../adc_proj.php');