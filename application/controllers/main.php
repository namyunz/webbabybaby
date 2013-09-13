<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * Site의 Main화면을 출력하는 Controller
	 */
	class Main extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			if (!file_exists('application/views/main/main.php'))
			{
				show_404();
			}
		
			$data['title']="아기자기";
			
			$this->load->view('templates/header',$data);
			$this->load->view('main/main');
			$this->load->view('templates/footer');
		}
	}
	
	/* End of Main class */