<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

Route::add('/api/song/', function() {
	$object = new Song;
	$response = $object->list();
	echo Helpers::jsonParser($response);
});

Route::add('/api/song/([0-9]*)', function($id) {
	$object = new Song;
	$response = $object->details($id);
	echo Helpers::jsonParser($response);
});

Route::run('/');