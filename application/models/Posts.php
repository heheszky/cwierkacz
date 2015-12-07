<?php
class Posts extends CI_Model {
	function add($author)
	{
		$data = array(
			"author"		=> $author,
			"content"		=> $this->input->post('content'),
			);
		$this->db->insert('posts', $data);
		return $this->db->query("SELECT * FROM posts WHERE id=".$this->db->insert_id())->row();
	}

	function get_post($id)
	{
		$this->db->select('posts.id as post_id, accounts.id as author_id, content, timestamp, first_name, last_name');
		$this->db->from(array('posts', 'accounts'));
		$this->db->where('posts.id', $id);
		$this->db->where('accounts.id=posts.author');
		return $this->db->get()->result();
	}

	function get_user_posts($id)
	{
		$this->db->select('posts.id as post_id, accounts.id as author_id, content, timestamp, first_name, last_name');
		$this->db->from(array('posts', 'accounts'));
		$this->db->where('author', $id);
		$this->db->where('accounts.id=posts.author');
		return $this->db->get()->result();
	}

	function get_page_posts($page, $userid)
	{
		//SELECT * FROM posts WHERE author IN (SELECT followed FROM follows WHERE follower=1)
		$this->db->select('posts.id as post_id, accounts.id as author_id, content, timestamp, first_name, last_name');
		$this->db->where('author=accounts.id');
		$this->db->where('(author IN (SELECT followed FROM follows WHERE follower='.$userid.') OR author = '.$userid.')');
		$this->db->order_by('timestamp', 'desc');
		return $this->db->get(array('posts', 'accounts'), 20, ($page-1)*20)->result();
	}

	function get_count()
	{
		return $this->db->count_all_results();
	}
}