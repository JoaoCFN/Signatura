<?php

	/**
	 * 
	 * @author Jonas Lima
	 * @version 1.0
	*/

//config file
//start session to login
session_start();
//load all modules
	function __autoload($class_name){
		require_once $class_name . '.class.php';
	}

	//load linguage config file
	require_once (__DIR__."/../lgg/load.php");

	//ERROR REPORTING
	error_reporting(E_ALL ^ E_NOTICE);

	//show errors
	ini_set("log_errors", 0);
	ini_set("display_errors", 1);



	//database config
	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BASE", "signatura");
	
	//conexão
	$con = new Conn(HOST, USER, PASS, BASE);
	mysqli_set_charset($GLOBALS['conn'],"utf8");
	if ($con->haveError() != false) 
		die($con->haveError());
	$GLOBALS['conn_class'] = $con;











