<?php
//LeafletProject
/* 
 * Connection to users datas
 */

	function connectUserBD($username, $password, &$profile){
		require_once('connectBD.php');
                $bdd = connectBD();
		$req = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
		$req -> execute(array($username, $password)) ;
		$res = $req -> fetch();
		if ($username == $res["username"] && $password == $res["password"]){
			$profile = $res;
			return true;
		}	
		return false ;

		
    }

    function signUpBD($username, $password) {
		require_once('connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('INSERT INTO users(id, username, password) VALUES (:id, :username, :password)');
		$req-> execute(array('id' => NULL, 'username' => $username, 'password' => $password));
		return true;
	}
