<?php
//LeafletProject
/* 
 * Connection to characters datas
 */
	
	//Retrieving the character
	function RetrieveCharacterBD($name, $password, $userID){
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('SELECT * FROM characters c, users u 
								WHERE name = ? AND password = ?
								AND u.id == c.idUser');
		if ($req-> execute(array($name, $password)))
			return true ;
		return false ;
	}
	
	//Registering the character
	function createCharacterBD($name, $password, $userID) {
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('INSERT INTO characters(id, name,x,x, idUser) VALUES (:id, :charaname, :x, :x, :idUser)');
		$req-> execute(array(	
		'id' = > NULL, 
		'charaname' => $name,
		 = > NULL,
		 = > NULL,
		'idUser' => $userID));
		
		if (!isnull($req))
			return true ;
		return false ;
	}



?>