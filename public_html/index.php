<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
$strPageTitle = "Velkommen";
require_once DOCROOT . "/assets/incl/header.php";

// Indhold

$user = new User();
$user->firstname = "Tim";
$user->lastname = "Sørensen";
$user->address = "Tølbøllevej 34";
$user->zipcode = 9867;
$user->city = "Tølbølle";
$user->country = "Danmark";

echo $user->getUserInfo();


require_once DOCROOT . "/assets/incl/footer.php";
