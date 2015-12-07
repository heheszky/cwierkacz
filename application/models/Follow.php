<?php
class Follow extends CI_Model {
	function add($follower, $followed)
	{
		$data = array(
			"follower"		=> $follower,
			"followed"		=> $followed,
			);
		$this->db->insert('follows', $data);
		return 1;
	}
	function remove($follower, $followed)
	{
		$this->db->query("
			DELETE FROM follows
			WHERE follower=\"".$follower."\"
			AND followed=\"".$followed."\"
		");
		return 1;
	}
}