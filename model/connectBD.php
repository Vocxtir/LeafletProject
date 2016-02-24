
<?php

/* 
 * Connection to the database
 */

	function connectBD(){
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=dut2_rahman;charset=utf8', 'rahman', 'rahman');
			return $bdd ;
		} catch (Exception $e){
				die('Erreur : ' . $e->getMessage());
		}
	}

?>