<?php
class Song {
	private $db;

    public function __construct() {
		global $db;
		$this->db = $db;
	}

	public function list() {
		$sql = "SELECT id, title FROM song";
		return $this->db->query($sql);
	}

	public function details($id) {
		$params = array(
			"id" => array($id, PDO::PARAM_INT)
		);

		$sql = "SELECT s.id, s.title, s.content, a.name 
				FROM song s 
				JOIN artist a 
				ON s.artist_id = a.id 
				WHERE s.id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}
}