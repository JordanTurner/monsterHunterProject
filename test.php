<?php
/*$host = '127.0.0.1';
$db   = 'monster_hunter';
$user = 'safe_user';
$pass = 'BUFIPtC6eCKOCwgv';
$charset = 'utf8';*/
include ('inc/config.php');

/*define("HOST", "localhost");     // The host you want to connect to.
define("USER", "safe_user");    // The database username. 
define("PASSWORD", "BUFIPtC6eCKOCwgv");    // The database password. 
define("DATABASE", "monster_hunter");
define("CHARSET", "utf8");*/

$dsn = 'mysql:host='.HOST.';dbname='.DATABASE.';charset='.CHARSET.'';
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, USER, PASSWORD, $opt);



$stmt = $pdo->query('SELECT name, code FROM weapons_types');
while ($row = $stmt->fetch())
{
    echo $row['name'] .' '.$row['code']."<br/>";
}
?>