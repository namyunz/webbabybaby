<?php
	/**
	 *	회원가입(정보) 관련 Controller
	 */
	class Register extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			if ( ! file_exists('application/views/register/register.php'))
			{
				show_404();
			}
			
			$this->load->view('templates/header');
			$this->load->view('register/register');
			$this->load->view('templates/footer');
		}
