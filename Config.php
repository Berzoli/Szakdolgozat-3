<?php 
/* root jelszo nelkul*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'kresz');

/* csatlakozas a MySql adatbazishoz*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// csatlakozas ellenorzese
if ($link === false) {
	die("ERROR: Nem tudsz csatlakozni." . mysqli_connect_error());
}
 ?>