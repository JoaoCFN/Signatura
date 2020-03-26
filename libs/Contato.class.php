<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/
	

	class Contato {
		
		public $id;
		public $nome;
		public $email;
		public $telefone;
		public $mensagem;

		function getById($id){
			$res = $GLOBALS['conn_class']->select("*", "contatos", "WHERE id = '".$id."' LIMIT 1");
			if (isset($res[0])) {
				$this->construct($res[0]);
				return true;
			}else{
				return false;
			}
		}

		function getAll(){
			$res = $GLOBALS['conn_class']->select("*", "contatos");
			if (isset($res[0])) {
				return $res;
			}else{
				return false;
			}
		}

		function insert($col, $val){
			$res = $GLOBALS['conn_class']->insert("contatos", $col, $val);	
			return $res;
		}

		function construct($array){
			foreach ($array as $key => $value) {
				$this->$key = $value;
			}
		}

	}