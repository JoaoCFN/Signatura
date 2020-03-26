<?php

	/**
	 * @author Jonas Lima
	 * @version 1.0
	*/

	class Treatment{

		function clearGET(){
			foreach ($_GET as $key => $value) {
				$data[$key] = mysqli_real_escape_string($GLOBALS['conn'], $value);
			}
			return $data;
		}

		function clearPOST(){
			foreach ($_POST as $key => $value) {
				$data[$key] = mysqli_real_escape_string($GLOBALS['conn'], $value);
				
			}
			return $data;
		}

		function clear($var){
			if (is_array($var)) {
				foreach ($var as $key => $value) {
					
					$data[$key] = mysqli_real_escape_string($GLOBALS['conn'], $value);
				}
			}else{
				
				$data = mysqli_real_escape_string($GLOBALS['conn'], $var);
			}
			
			return $data;
		}
		
		//check if the array has content
		function testPost(){
			$i = 0;
			if (count($_POST) > 0) {			
				foreach ($_POST as $key => $value) {

					if (empty($_POST[$key])) {
						$i++;
					}
				}
				if ($i > 0) 
					return false;
				else
					return true;
			}else{
				return false;
			}
			
		}

		//check if the array has content
		function testCont($data){
			$i = 0;
			if (count($data) > 0) {			
				foreach ($data as $key => $value) {
					if (empty($data[$key])) {
						$i++;
					}
				}
				if ($i > 0) 
					return false;
				else
					return true;
			}else{
				return false;
			}
			
		}
			
	}