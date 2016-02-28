<?php

/* 
 * Connection to users datas
 */
	
	//Retrieving the character
	function RetrieveCharacterBD($name, $password){
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('SELECT * FROM characters c, users u 
								WHERE name = ? AND password = ?');
		if ($req-> execute(array($name, $password)))
			return true ;
		return false ;
	}
	
	//Registering the character
	function createCharacterBD($name, $password) {
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('INSERT INTO characters(id, name) VALUES (:id, :charaname)');
		$req-> execute(array('id' = > NULL, 'charaname' => $name));
		if (!isnull($req))
			return true ;
		return false ;
	}


?>