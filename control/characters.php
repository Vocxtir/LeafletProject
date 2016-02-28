<?php

	//Retrieving the character
	function RetrieveCharacter(){
		if (isSet($_POST['username']) && isSet($_POST['password'])) {
			require_once("./model/charactersBD.php");
			if ( RetrieveCharacterBD( $username, $password) ){
				fastConnect($username, $password);
			}
		
		/*if ($realPassword == $password && $realUsername == $username){
			$_SESSION['login_user'] = $username;
			echo "1";
		}*/
	}
	
	//Registering the character
	function createCharacter(){
		if (isSet($_POST['username']) && isSet($_POST['password'])) {
			require_once("./model/usersBD.php");
			if ( createCharacterBD( $username, $password) ){
				fastConnect($username, $password);
			}
	}

	function fastConnect($username, $password){
		require_once("./model/usersBD.php");
			if ( connectUserBD($username, $password)){
				session_start();
				$_SESSION['username'] = $username ;
				$_SESSION['password'] = $password ;
			}
	}


?>