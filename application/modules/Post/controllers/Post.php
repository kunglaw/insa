<?php

	class Post extends MX_Controller{
		
		function __construct()
		{
			parent::__construct();	
		}
		
		function index()
		{
			
			
		}
		
		function detail()
		{
			$data["title"] = " Post Detail";
			$data["content"] = "post/post_detail";
			$data["template"] = "post/template";
			
			$this->load->view("index",$data);
				
		}
		
		
		
	}