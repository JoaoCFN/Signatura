<?php	
	
	/**
	 * @author Jonas Lima
	 * @version 1.0
	 */
	
	require_once "../libs/config.php"; 
	$trat = new Treatment();
	$admin = new Admin();

	function send($data){
		echo json_encode($data);
	}

	if (!isset($_POST['email']) OR !isset($_POST['senha']) ) {
		$data['state'] = "false";
		$data['msg'] = "Preencha todos os campos!";
		send($data);
		die;
	}
	

	if (!$trat->testPost()) {
		$data['state'] = "false";
		$data['msg'] = "Preencha todos os campos!";
		send($data);
		die;
	}

	$post = $trat->clearPost();

	$res = $admin->getByEmailSen($post['email'], $post['senha']);
	if ($res) {
		$_SESSION['admin'] = $admin;
		$data['state'] = "true";
		$data['msg'] = "Login efetuado com Sucesso!";
	}else{
		$data['state'] = "false";
		$data['msg'] = "Login ou Senha incorreto!";
	}

	send($data);

