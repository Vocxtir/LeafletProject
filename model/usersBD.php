<?php
//LeafletProject
/* 
 * Connection to users datas
 */

	function connectUserBD($username, $password, &$profile){
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
		$req -> execute(array($username, $password)) ;
		
		if ($res = $req -> fetch()){
			$profile = $res;
			return true ;
		}
			
		return false ;
	}
	
	//Registering the user
	function signUpBD($username, $password) {
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('INSERT INTO users(id, username, password) VALUES (:id, :username, :password)');
		$req-> execute(array('id' = > NULL, 'username' => $username, 'password' => $password));
		if (!isnull($req))
			return true ;
		return false ;
	}


?>