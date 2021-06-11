<?php

/**
 * Récupérer les messages dans la base de données
 */
function findAll(): array 
{
    $db = getDBConnection();

    // Coder ici

	$query = 'SELECT * FROM message'; 
 	//die($query);
	$req = $db->query($query);
	$req->setFetchMode(PDO::FETCH_ASSOC);
	$tab = $req->fetchAll();
	$req->closeCursor();
	//var_dump($tab);
	//die;
	return $tab;
}?>

<?php
/**
 * Ajouter un message dans la base de données
 */
function create(array $post): void
{

	//var_dump($post);
	//die;
    $db = getDBConnection();

    // Coder ici
	$query = 'INSERT INTO message(pseudo, content, date) VALUES(:pseudo, :content, Now())';
    $req = $db->prepare($query);
    $req->execute( array( ':pseudo' => $post['pseudo'], ':content' => $post['content'] ) );

}

/**
 * Connection à la base de donnéess
 */
function getDBConnection(): PDO
{
	
    // Coder ici
	$user = "root";
	$pass = "root";
	$dbname = "chat";
	$host = "localhost";
	
	try {
		$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
		//echo $dsn;
	
		$option = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		
		$dbh = new PDO($dsn, $user, $pass, $option);
		// var_dump($dbh);
		// echo "Connection établie !";	
		return $dbh;

	}catch (PDOException $e) {
		print "Erreur connexion !: " . $e->getMessage() . "<br/";
		die();
	}
}	