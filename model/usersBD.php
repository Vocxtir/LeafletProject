<?php

/* 
 * Connection to users datas
 */

	function connectUserBD($name, $password){
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
		if ($req-> execute(array($name, $password)))
			return true ;
		return false ;
	}
	
	//Registering the user
	function signUpBD($name, $password) {
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('INSERT INTO users(id, username, password) VALUES (:id, :username, :password)');
		$req-> execute(array('id' = > NULL, 'username' => $name, 'password' => $password));
		if (!isnull($req))
			return true ;
		return false ;
	}


?>