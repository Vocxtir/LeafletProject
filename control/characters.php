<?php
//LeafletProject

	//Retrieving the character
	function RetrieveCharacter(){
		$userID = $_SESSION['profil']['id'];	//UserID retrieved from the SESSION 
		if (isSet($_POST['username']) && isSet($_POST['password']) && isSet($userID)) {
			require_once("./model/charactersBD.php");
			if ( RetrieveCharacterBD( $username, $password, $userID) ){
				fastConnect($username, $password);
			}
		
		/*if ($realPassword == $password && $realUsername == $username){
			$_SESSION['login_user'] = $username;
			echo "1";
		}*/
	}
	
	//Registering the character
	function createCharacter(){
		$userID = $_SESSION['profil']['id'];
		if (isSet($_POST['username']) && isSet($_POST['password']) && isSet($userID)) {
			require_once("./model/usersBD.php");
			if ( createCharacterBD( $username, $password, $userID) ){
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


	//Managing experience and level
	function experienceManager() {
		$userID = $_SESSION['profil']['id'];
	}
	
?>