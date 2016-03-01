<?php
//LeafletProject

	//Retrieving the character
	function RetrieveCharacter(){
		$userID = $_SESSION['profil']['id'];	//UserID retrieved from the SESSION 
		$character = array() ;
		
		if (isSet($_POST['username']) && isSet($_POST['password']) && isSet($userID)) {
			require_once("./model/charactersBD.php");
			if (RetrieveCharacterBD($userID, $character)){
				$_SESSION['character'] = $character ;
			}
		}
		
		/*if ($realPassword == $password && $realUsername == $username){
			$_SESSION['login_user'] = $username;
			echo "1";
		}*/
	}
	
	//Registering the character
	function createCharacter(){
		$userID 	= $_SESSION['profil']['id'];
		$charaname 	= $_POST['charaname'] ;
		
		if (isSet($_POST['username']) && isSet($_POST['password']) && isSet($userID)) {
			require_once("./model/usersBD.php");
			if ( createCharacterBD($charaname, $userID) ){
				return true ;
			}
		}
	}


	//Managing experience and level
	function experienceManager() {
		$userID = $_SESSION['profil']['id'];
	}
	
?>