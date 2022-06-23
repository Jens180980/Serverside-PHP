<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

Route::add('/api/song/', function() {
	echo 1234;
});

Route::run('/');