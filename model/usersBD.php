<?php

/* 
 * Connection to users datas
 */

	function connectUserBD($name, $password){
		require_once(./control/connectBD.php);
		$bdd = connectBD();
		$req = $bdd->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
		if ($req-> execute(array($name, $password)))
			return true ;
		return false ;
	}
	
	function signUpBD($name, $password) {
		require_once(./control/connectBD.php);
		$bdd = connectBD();
		$req = $bdd->prepare('INSERT INTO users VALUES (:username, :password)');
		$req-> execute(array('username' => $name, 'password' => $password));
		if (!isnull($req))
			return true ;
		return false ;
	}


?>