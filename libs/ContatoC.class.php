<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/
	

	class ContatoC {
		
		public $id;
		public $tipo;
		public $objetivo;
		public $nome;
		public $email;
		public $telefone;
		public $mensagem;

		function getById($id){
			$res = $GLOBALS['conn_class']->select("*", "contatoC", "WHERE id = '".$id."' LIMIT 1");
			if (isset($res[0])) {
				$this->construct($res[0]);
				return true;
			}else{
				return false;
			}
		}

		function getAll(){
			$res = $GLOBALS['conn_class']->select("*", "contatoC");
			if (isset($res[0])) {
				return $res;
			}else{
				return false;
			}
		}

		function insert($col, $val){
			$res = $GLOBALS['conn_class']->insert("contatoC", $col, $val);	
			return $res;
		}

		function construct($array){
			foreach ($array as $key => $value) {
				$this->$key = $value;
			}
		}

	}