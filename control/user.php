<?php

function connectUser(){
	if (isSet($_POST['username']) && isSet($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		require_once(./model/usersBD.php);
		if ( connectUserBD($username, $password))){
			session_start();
			$_SESSION['username'] = $username ;
			$_SESSION['password'] = $password ;
		
		}
	}
	if ($realPassword == $password && $realUsername == $username){
		$_SESSION['login_user'] = $username;
		echo "1";
	}
}
//Cette fonction était là dans les exemples
function whatWasOriginalyThere(){
	include("db.php");
	session_start();
	if (isSet($_POST['username']) && isSet($_POST['password'])) {
	// username and password sent from Form
	//    $username = mysqli_real_escape_string($db, $_POST['username']);
	//    $password = md5(mysqli_real_escape_string($db, $_POST['password']));
	//
	//    $result = mysqli_query($db, "SELECT uid FROM users WHERE username='$username' and password='$password'");
	//    $count = mysqli_num_rows($result);
	//
	//    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	//// If result matched $myusername and $mypassword, table row must be 1 row
	//    if ($count == 1) {
	//        $_SESSION['login_user'] = $row['uid'];
	//        echo $row['uid'];
	//    }
		
		
		 $username = $_POST['username'];
		 $password = $_POST['password'];
		
		if ($realPassword == $password && $realUsername == $username){
		   $_SESSION['login_user'] = $username;
		   echo "1";
		}
		
	}
}
?>