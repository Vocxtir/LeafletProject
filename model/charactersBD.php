<?php
//LeafletProject
/* 
 * Connection to characters datas
 */
	
	//Retrieving the character
	function RetrieveCharacterBD($userID, &$character){
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('SELECT * FROM characters WHERE idUser = ?');

/*SELECT * FROM characters c, users u 
								WHERE name = ? AND password = ?
								AND u.id == c.idUser
								
								INNER JOIN users ON characters.idUser = users.id*/
								
		$req-> execute(array($userID));
		if ($res = $req -> fetch()){
			$character = $res ;		
			return true ;
		}
		return false ;
	}
	
	//Registering the character
	function createCharacterBD($charaname, $userID) {
		require_once('./control/connectBD.php');
		$bdd = connectBD();
		$req = $bdd->prepare('INSERT INTO characters(id, name,level, xp, idUser) VALUES 			(:id, :charaname, :level, :exp, :idUser)');
		$req-> execute(array(	
		'id' => NULL, 
		'charaname' => $charaname,
		'level'=> 1,
		'exp' => 0,
		'idUser' => $userID));
		
		if (!isnull($req))
			return true ;
		return false ;
	}
	
	//Will help managing the exp and level rewards
	function getExpMax(){	
		
	}



?>