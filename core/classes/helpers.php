<?php
class Helpers {

	static public function Header($title) {
		$strPageTitle = $title;
		require_once DOCROOT . "/assets/incl/header.php";
	}


	static public function showMe($array) {
		echo "<pre>\n";
		var_dump($array);
		echo "</pre>\n";
	}
}