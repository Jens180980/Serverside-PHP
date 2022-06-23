<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
Helpers::Header("Velkommen");

$params = array(
	"id" => array(4, PDO::PARAM_INT)
);

$sql = "SELECT id, title FROM song";

$result = $db->query($sql, $params);
var_dump($result);

Helpers::Footer();