<?php

/**
 * Récupérer les messages dans la base de données
 */
function findAll(): array 
{
    $db = getDBConnection();

    // Coder ici

?>

<?php

$user = "root";
$pass = "root";
$dbname = "wordpress";
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
	
}catch (PDOException $e) {
	print "Erreur connexion !: " . $e->getMessage() . "<br/";
	die();
}

try {
	$query = 'SELECT wp_posts.ID, wp_pseudo, post_content, post_date, display_name
				FROM wp_posts, wp_users
			  WHERE post_author = wp_users.ID
			  	AND post_type = "post"
			  	AND post_status ="publish"
			  ORDER BY post_date DESC'; 
 //die($query);
$req = $dbh->query($query);
	$req->setFetchMode(PDO::FETCH_ASSOC);
	$tab = $req->fetchAll();
	$req->closeCursor();
	//var_dump($tab);
	//die;
	// Code HTML

    
}

/**
 * Ajouter un message dans la base de données
 */
function create(array $post): void
{
    $db = getDBConnection();

    // Coder ici
}

/**
 * Connection à la base de donnéess
 */
function getDBConnection(): PDO
{
    // Coder ici
}