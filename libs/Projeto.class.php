<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/
	

	class Projeto {
		
		public $id;
		public $desc_tumb;
		public $nome;
		public $classf;
		public $destaque;
		public $tipo;
		public $ano;
		public $tags;
		public $titulo_top;
		public $descricao;
		public $descricao_mid;
		public $titulo_bot;
		public $descricao_bot;


		function getById($id){
			$res = $GLOBALS['conn_class']->select("*", "projetos", "WHERE id = '".$id."' LIMIT 1");
			if (isset($res[0])) {
				$this->construct($res[0]);
				return true;
			}else{
				return false;
			}
		}
		function getByClass($classf){
			$res = $GLOBALS['conn_class']->select("*", "projetos", "WHERE classf = '".$classf."'");
			if (isset($res[0])) {
				
				return $res;
			}else{
				return false;
			}
		}
		function getByDestaque(){
			$res = $GLOBALS['conn_class']->select("*", "projetos", "ORDER BY destaque DESC LIMIT 6");
			if (isset($res[0])) {
				
				return $res;
			}else{
				return false;
			}
		}

		function getAll(){
			$res = $GLOBALS['conn_class']->select("*", "projetos");
			if (isset($res[0])) {
				return $res;
			}else{
				return false;
			}
			return $res;
		}
		

		function insert($col, $val){
			$res = $GLOBALS['conn_class']->insert("projetos", $col, $val);	
			return $res;
		}

		function update($id, $col, $val){
			$res = $GLOBALS['conn_class']->update("projetos", $col, $val, "WHERE id ='".$id."'");	
			return $res;
		}

		function construct($array){
			foreach ($array as $key => $value) {
				$this->$key = $value;
			}
		}

	}