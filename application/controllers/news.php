<?php 

Class News extends CI_Controller
{
	function News()
	{
		parent::__construct();		
		$this->config->load('news');
		$this->load->model('News_model', 'news_model');
	}

	function index()
	{
		$this->load->view('news');
	}

	function get_news($source)
	{
		//$api_key = $this->config->item('news_api_key');
		$url = 'https://newsapi.org/v2/top-headlines?sources='.$source.'&apiKey=95d3033d3df34919af052666ccecb85e'; //$this->config->item('news_api_url');

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, false); //GET request
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Length: 0'));
		$result = curl_exec($ch);
		
		if (curl_errno($ch)) 
		{
    		echo 'Error: ' . curl_error($ch);
		}
		curl_close($ch);
		
		$result = json_decode($result);
		$result = $this->insert_news($result);
	}



	function get_all_news_sources()
	{
		return $this->news_model->get_all_news_sources();

	}

	function fetch_news_from_source()
	{
		$result = $this->get_all_news_sources();

		foreach($result->result() as $row)
		{
			log_message('debug', "Fetching news from source[$row->sources]");
			$this->get_news($row->sources);
		}
	}


	function insert_news($news)
	{
		echo "<pre>"; print_r($news);
		$articles = $news->articles;
		foreach($articles as $row)
		{
			$news = array();
			$news['author'] = $row->author;
			$news['title'] = $row->title;
			$news['description'] = $row->description;
			$news['full_news_url'] = $row->url;
			$news['image_url'] = $row->urlToImage;
			$news['published_on'] = date('Y-m-d H:i:s', strtotime($row->publishedAt));
			$news['inserted_on'] = date('Y-m-d H:i:s');
			$news['inserted_by'] = 1;

			$result = $this->check_if_exists($news['title']);
			if($result == true)
			{
				log_message('debug', 'News with title[ '.$news['title'].' ] and author[ '. $news['author'] .'] is already exists.  continuing with other news.');
				continue;
			}
			$insert_result = $this->news_model->insert_news($news);
			if($insert_result === false)
			{
				echo 'Error'; exit;
			}

		}
	}

	function check_if_exists($news)
	{
		return $this->news_model->check_if_exists($news['title'], $news['author']);
	}
}