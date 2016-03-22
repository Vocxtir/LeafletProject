
<?php

/* 
 * Connection to the database
 */

	function connectBD(){
		try{
                        $dbh = new PDO('mysql:host=localhost;dbname=webjava', "root", "");
			return $dbh ;
		} catch (Exception $e){
				die('Erreur : ' . $e->getMessage());
		}
	}

?>