<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/

	class Factory {
		function assocToStrWithQuots($array){
			$i = 0;
			$data = "";
			while (isset($array[$i])) {
				$data .= "'". $array[$i]."',";
				$i++;
			}
			$data = substr($data, 0, strlen($data)-1);
			return $data;
		}

		function assocToStrWithOutQuots($array){
			$i = 0;
			$data = "";
			while (isset($array[$i])) {
				$data .= $array[$i].",";
				$i++;
			}
			$data = substr($data, 0, strlen($data)-1);
			return $data;
		}
		
		function assocToStrWithAposts($array){
			$i = 0;
			$data = "";
			while (isset($array[$i])) {
				$data .= "`". $array[$i]."`,";
				$i++;
			}
			$data = substr($data, 0, strlen($data)-1);
			return $data;
		}
	}