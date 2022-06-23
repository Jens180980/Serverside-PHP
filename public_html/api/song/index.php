<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

// Route til liste 
Route::add('/api/song/', function() {
	$object = new Song;
	$response = $object->list();
	echo Helpers::jsonParser($response);
});

// Route til detaljer
Route::add('/api/song/([0-9]*)', function($id) {
	$object = new Song;
	$response = $object->details($id);
	echo Helpers::jsonParser($response);
});

// Route til opret/opdatere - dækker over put requests
Route::add('/api/song/', function() {
	$object = new Song;
	$object->id = isset($_POST['id']) && !empty($_POST["id"]) ? $_POST["id"]: null;
	$object->title = (string)$_POST['title'];
	$object->content = (string)$_POST['content'];
	$object->artist_id = (int)$_POST['artist_id'];
	echo $object->edit();
}, 'post');

// Route til at slette
Route::add('/api/song/([0-9]*)', function($id) {
	$object = new Song;
	$response = $object->delete($id);
	echo Helpers::jsonParser($response);
}, 'delete');

Route::run('/');