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
	if (isset($_POST['type']) && $_POST['type']== 'remove') {
		$id = $_POST['id'];
		$GLOBALS['conn_class']->delete('projetos', "WHERE id = '".$id."'");
		$data['msg'] = "Deletado com sucesso!";

		$log->tabela = "projetos";
		$log->id_tabela = $_POST["id"];
		$log->user = $_SESSION['admin']->nome;
		$fuso = new DateTimeZone('America/Sao_Paulo');
		$dt = new DateTime();  
		$dt->setTimezone($fuso);
		$log->data = $dt->format('d-m-Y H:i:s');
		$log->info = "Deletou o projeto!";
		$log->insert();
		die(json_encode($data));
	}
	foreach ($Projeto as $key => $value) {
		if (!isset($_POST[$key]) and $key != 'id') {
			$_SESSION['state'] = "false"; 
			$_SESSION['msg'] = "Preencha todos os campos";
			header('location: ../projetos.php?id='.$_POST["id"].'');
			die("");
		}
	}


	if (!$tratamento->testPost()) {
		$_SESSION['state'] = "false"; 
		$_SESSION['msg'] = "Preencha todos os campos";
		header('location: ../projetos.php?id='.$_POST["id"].'');
		die("");	
	}

	$post = $tratamento->clearPost();
	$i = 0;
	foreach ($post as $key => $value) {
		$col[$i] = $key;
		$val[$i] = $value;

		$i++;
	}
	
	
	

	/*Tratamento das Imagens*/

	$dir = "../../midia/projetos/".$_POST['id']."/"; 
	



	
	function tudo($key, $nome, $dir){
		if ($_FILES[$key]["tmp_name"] != "") {
			# code...
		
		$ext = strtolower(substr($_FILES[$key]['name'],-4)); 
	    if ($ext != '.png') {
	    	$_SESSION['state'] = "false"; 
			$_SESSION['msg'] = "Imagens permitidas apenas em .png";
			header('location: ../projetos.php?id='.$_POST["id"].'');
			die("");
	    }
	    
	    move_uploaded_file($_FILES[$key]['tmp_name'], $dir.$nome); 
	    }
    	
	}





    tudo('tumb', 'thumb-mulher.png', $dir);
    tudo('img_top', 'Portfolio-Bottom.png', $dir);
    tudo('img_telas', 'TELAS.png', $dir);
    tudo('img_mobile', 'MOBILE.png', $dir);
    tudo('img_mid', 'projetos_detalhe_img_deitada.png', $dir);
    tudo('img_bot', 'Telas-Site.png', $dir);

	

	$res = $Projeto->update($_POST["id"], $col, $val);

	if ($res) {
		$_SESSION['state'] = "true"; 
		$_SESSION['msg'] = "Projeto atualizado com sucesso!";
		$log->tabela = "projetos";
		$log->id_tabela = $_POST["id"];
		$log->user = $_SESSION['admin']->nome;
		$fuso = new DateTimeZone('America/Sao_Paulo');
		$dt = new DateTime();  
		$dt->setTimezone($fuso);
		$log->data = $dt->format('d-m-Y H:i:s');
		$log->info = "Atualização no projeto!";
		$log->insert();

		header('location: ../projetos.php?id='.$_POST["id"].'');

	}else{
		$_SESSION['state'] = "false"; 
		$_SESSION['msg'] = "Erro desconhecido ou nenhuma alteração feita!, (imagens atualizadas com sucesso)";
			header('location: ../projetos.php?id='.$_POST["id"].'');
		die("");
	}
	