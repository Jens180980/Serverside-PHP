<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
Helpers::Header("Velkommen");

$params = array(
	"id" => array(4, PDO::PARAM_INT)
);

$sql = "SELECT s.title, a.name 
		FROM song s 
		JOIN artist a 
		ON s.artist_id = a.id 
		WHERE s.id = :id";

$result = $db->query($sql, $params, Db::RESULT_SINGLE);
var_dump($result);

Helpers::Footer();