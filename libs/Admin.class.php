<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/
	
class Admin {
	
	public $id;
	public $nome;
	public $login;
	public $senha;
	public $email;

	function getById($id){
		$res = $GLOBALS['conn_class']->select("*", "admins", "WHERE id = '".$id."' LIMIT 1");
		if (isset($res[0])) {
			$this->construct($res[0]);
			return true;
		}else{
			return false;
		}
	}

	function getByEmail($email){
		$res = $GLOBALS['conn_class']->select("*", "admins", "WHERE email = '".$email."' LIMIT 1");
		if (isset($res[0])) {
			$this->construct($res[0]);
			return true;
		}else{
			return false;
		}
	}

	function getByEmailSen($email, $senha){
		$res = $GLOBALS['conn_class']->select("*", "admins", "WHERE email = '".$email."' AND senha = '".$senha."' OR login = '".$email."' AND senha = '".$senha."' LIMIT 1");
		if (isset($res[0])) {
			$this->construct($res[0]);
			return true;
		}else{
			return false;
		}
	}

	function construct($array){
		foreach ($array as $key => $value) {
			$this->$key = $value;
		}
	}

}