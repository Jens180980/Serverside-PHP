<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
Helpers::Header("Velkommen");

// Henter keyword fra GET parametre
$keyword = isset($_GET['keyword']) && !empty($_GET['keyword']) ? $_GET['keyword'] : null;

// Sætter array med keyword og wildcards
$params = array(
	"keyword" => array("%$keyword%", PDO::PARAM_STR)
);

// SQL Statement
$sql = "SELECT s.title, a.name 
		FROM song s 
		JOIN artist a 
		ON s.artist_id = a.id 
		WHERE s.title LIKE :keyword 
		OR a.name LIKE :keyword";

$result = $db->query($sql, $params);
var_dump($result);

Helpers::Footer();
