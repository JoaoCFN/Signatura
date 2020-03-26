<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/
	

	class Log {
		
		public $id;
		public $tabela;
		public $id_tabela;
		public $user;
		public $data;
		public $info;

		function getById($id){
			$res = $GLOBALS['conn_class']->select("*", "logs", "WHERE id = '".$id."' LIMIT 1");
			if (isset($res[0])) {
				$this->construct($res[0]);
				return true;
			}else{
				return false;
			}
		}
		function getByTable($table){
			$res = $GLOBALS['conn_class']->select("*", "logs", "WHERE tabela = '".$table."'");
			if (isset($res[0])) {
				
				return $res;
			}else{
				return false;
			}
		}

		function getAll(){
			$res = $GLOBALS['conn_class']->select("*", "logs");
			if (isset($res[0])) {
				return $res;
			}else{
				return false;
			}
		}

		function getLasts(){
			$res = $GLOBALS['conn_class']->select("*", "logs", "ORDER BY id DESC LIMIT 30");
			if (isset($res[0])) {
				return $res;
			}else{
				return false;
			}
		}

		function insert(){
					$col[0] = "tabela";
					$col[1] = "id_tabela";
					$col[2] = "user";
					$col[3] = "data";
					$col[4] = "info";
					$val[0] = $this->tabela;
					$val[1] = $this->id_tabela;
					$val[2] = $this->user;
					$val[3] = $this->data;
					$val[4] = $this->info;
			
			$res = $GLOBALS['conn_class']->insert("logs", $col, $val);	
			
			return $res;
		}

		function construct($array){
			foreach ($array as $key => $value) {
				$this->$key = $value;
			}
		}

	}