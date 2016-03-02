
<?php

/* 
 * Connection to the database
 */

	function connectBD(){
		try{
			$bdd = new PDO('mysql:host=localhost:8080; port=8080; dbname=leafletproject;
				charset=utf8', 
				'root', 
				'');
			
			return $bdd ;
		} catch (Exception $e){
				die('Erreur : ' . $e->getMessage());
		}
	}

?>