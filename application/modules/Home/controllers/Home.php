<?php

	class Home extends MX_Controller 
	{
		
		function __construct()
		{
			parent::__construct();	
		}
		
		function index()
		{
			$data["title"] = "Home";
			$data["content"] = "template/content";
			$data["template"] = "template/template";
			
			$this->load->view("index",$data);
		}
		
	}