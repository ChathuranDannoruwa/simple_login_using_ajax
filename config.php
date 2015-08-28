<?PHP

//Establish the Database Connection
$db = new PDO("mysql:host=localhost;dbname=samplelogin", 'root', '');

if (!$db) {
	echo "Unable to connect to DB";
	exit;
}

?>