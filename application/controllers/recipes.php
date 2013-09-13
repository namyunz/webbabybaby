<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 *	레시피 관련 Controller
	 */
	class Recipes extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			if ( ! file_exists('application/views/recipes/index.php'))
			{
				show_404();
			}
			
			$data['title']="식단만들기";
			
			$this->load->view('templates/header',$data);
			$this->load->view('recipes/index');
			$this->load->view('templates/footer');
		}
		
		public function make()
		{
			if(!file_exists('application/views/recipes/make.php'))
			{
				show_404();
			}
			
			$data['title']="식단만들기";
			
			$this->load->view('templates/header',$data);
			$this->load->view('recipes/make');
			$this->load->view('templates/footer');
		}
	}
	
	/** End of Recipes Class */