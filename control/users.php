<?php

//LeafletProject
//
	

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'login' : connectUser();
            break;
        case 'signin' : signUp();
            break;
    }
}

function play() {
    require ('view/map.tpl'); //ou 
}

function connectUser() {
    $profile = array();
    if (isSet($_POST['username']) && isSet($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        require_once("../model/usersBD.php");

        if (connectUserBD($username, $password, $profile)) {
            $_SESSION['user'] = $profile;
            echo "1";  // valeur bone en JS
        } else {
            echo "0"; //valeur fausse en JS
        }
    }

    /* if ($realPassword == $password && $realUsername == $username){
      $_SESSION['login_user'] = $username;
      echo "1";
      } */
}

//Registering the user

function signUp() {
    if (isSet($_POST['username']) && isSet($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        require_once("../model/usersBD.php");
        if (signUpBD($username, $password)) {
            echo "1";
        } else {
            echo "0";
        }
    }

    function fastConnect($username, $password, &$profile) {

        if (connectUserBD($username, $password, $profile)) {
            session_start();
            $_SESSION['profile'] = $profile;

            //The followings are meant to debug
            //print_r($profile);
            //echo "<br/> SESSION <br/>";
            //print_r($_SESSION['profil']);
            /* foreach($_SESSION['profil'] as $cle => $element){
              echo '[' . $cle . '] vaut : ' . $element . '<br />';
              } */
            //echo $_SESSION['nom'];
        }
    }

    function testConnect() {
        echo "1";
    }

    //Cette fonction était là dans les exemples
    function whatWasOriginalyThere() {
        //include("db.php");
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

            if ($realPassword == $password && $realUsername == $username) {
                $_SESSION['username'] = $username;
                echo "1";
            }
        }
    }

}

?>