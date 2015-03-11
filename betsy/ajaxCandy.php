<?php
session_start();
/**
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
 */

	//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	//header("Cache-Control: post-check=0, pre-check=0", false);
	//header("Pragma: no-cache");
	// The JSON standard MIME header.
	
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
	
	header('Content-type: application/json');
	require_once("./config.php");
	require_once("./var.init.php");
	
		if(isset($_POST['candy']) && isset($_POST['user']))
		{
			$bruteCandy = trim($_POST['candy']);
			
			$candy = preg_replace('/\s+/', ' ', $bruteCandy);
			
			$bruteUsername = trim($_POST['user']);
			
			$username = preg_replace('/\s+/', ' ', $bruteUsername);
			
			$oCandy = new Candy();
			
			$checkCandy = $oCandy->checkCandy($username, $candy);
				
			if($checkCandy)
			{
				$res = "valid";
			}
			else {
				$res = "false";
			}
			echo $res;
		}
		elseif(isset($_POST['username']) && isset($_POST['password']))
		{
			$bruteUsername = trim($_POST['username']);
			
			$username = preg_replace('/\s+/', ' ', $bruteUsername);
			
			$brutePassword = trim($_POST['password']);
			
			$password = preg_replace('/\s+/', ' ', $brutePassword);
			
			$oCandy = new Candy();
			
			$login = $oCandy->login($username, $password);
				
			if($login)
			{
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $candy = "";
				$length = 16;
			    for ($i = 0; $i < $length; $i++) {
			        $candy .= $characters[rand(0, $charactersLength - 1)];
			    }
				$oCandy->setCandy($candy, $username);
				$res = $candy;
				$_SESSION["candy"] = $candy;
				$_SESSION["username"] = $username;
			}
			else {
				$res = "false";
			}
			
			echo $res;
		}
		elseif(isset($_POST['register']) && isset($_POST['regpass']))
		{
			$bruteUsername = trim($_POST['register']);
			
			$username = preg_replace('/\s+/', ' ', $bruteUsername);
			
			$brutePassword = trim($_POST['regpass']);
			
			$password = preg_replace('/\s+/', ' ', $brutePassword);
			
			$oCandy = new Candy();
			
			$register = $oCandy->register($username, $password);
				
			if($register)
			{
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $candy = "";
				$length = 16;
			    for ($i = 0; $i < $length; $i++) {
			        $candy .= $characters[rand(0, $charactersLength - 1)];
			    }
				$oCandy->setCandy($candy, $username);
				$res = $candy;
				$_SESSION["candy"] = $candy;
				$_SESSION["username"] = $username;
			}
			else {
				$res = "false";
			}
			
			echo $res;
		}
		elseif(isset($_POST['logout']))
		{
			$bruteUsername = trim($_POST['logout']);
			
			$username = preg_replace('/\s+/', ' ', $bruteUsername);
			
			$oCandy = new Candy();
			
			$logout = $oCandy->deleteCandy($username);
				
			if($logout)
			{
				$res = "true";
				$_SESSION["candy"] = "";
				$_SESSION["username"] = "";
			}
			else {
				$res = "false";
			}
			
			echo $res;
		}
		elseif(isset($_POST['usr']))
		{
			$bruteUsername = trim($_POST['usr']);
			
			$username = preg_replace('/\s+/', ' ', $bruteUsername);
			
			$oCandy = new Candy();
			
			$availability = $oCandy->checkUsername($username);
				
			if($availability)
			{
				$res = "true";
			}
			else {
				$res = "false";
			}
			
			echo $res;
		}
		elseif(isset($_POST['checkusrsession']))
		{
			
			if($_SESSION["username"] != "")
			{
				$res = $_SESSION["username"];
			}
			else {
				$res = "false";
			}
			
			echo $res;
		}
		elseif(isset($_POST['checkcandysession']))
		{
			
			if($_SESSION["candy"] != "")
			{
				$res = $_SESSION["candy"];
			}
			else {
				$res = "false";
			}
			
			echo $res;
		}
		elseif(isset($_POST['checkrole']))
		{
			$username=$_SESSION["username"];
			$tempcandy=$_SESSION["candy"];
			$candy=md5($tempcandy);
			
			$oCandy = new Candy();
			$validateRole = $oCandy->checkRole($username, $candy);
			if($validateRole == 1){
				$res = "true";
			}
			else{
				$res = "false";
			}
			echo $res;
		}

?>