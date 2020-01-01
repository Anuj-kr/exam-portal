<?php 
Class News_model extends CI_Model
{
	function News_model()
	{
		parent::__construct();		
		$table = 'news_sources';
	}

	function get_all_news_sources()
	{
		$this->db->select('*');
		$this->db->from('news_sources');
		$result = $this->db->get();
		if($result === false)
		{

		}
		return $result;
	}

	function insert_news($data)
	{
		return $this->db->insert('news', $data);
	}

	function check_if_exists($news_title, $news_source)
	{
		$this->db->where('title', $news_title);
		$this->db->where('author', $news_source);
		$result = $this->db->get();
		if($result->num_rows() > 0)
		{
			return true;
		}
		return false;
	}

}