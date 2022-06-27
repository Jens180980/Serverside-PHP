<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";


Route::add('/admin/song/', function() {

	$fields = array(
		"options" => "Handling",
		"title" => "Titel",
		"name" => "Artist"
	);

	$object = new Song;
	$data = $object->list();
	foreach($data as $key => $value) {
		$data[$key]['options'] = "
			<a href=\"/admin/song/".$value["id"]."\" title=\"Rediger\" class=\"edit\">&check;</a>\n
			<a href=\"#\">&cross;</a>";
	}
	$presenter = new ListPresenter($fields, $data);
	echo $presenter->create();
});

Route::add('/admin/song/([0-9]*)', function($id) {
	echo $id;
});

Route::run('/');

