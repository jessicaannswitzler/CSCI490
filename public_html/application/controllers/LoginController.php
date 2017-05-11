<?php

class loginController extends CI_Controller{
	public function index(){
		$this->load->view('login');

		

	}

	

	public function checkLogin(){



		$this->form_validation->set_rules('username', 'Username', 'required|valid_email');

		$this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

		if($this->form_validation->run() == false){
			$this->load->view('login');

		}else{

			redirect('homeController/index');

		}
	}

	public function verifyUser(){
		$name = $this->input->post('username');
		$pass = $this->input->post('password');

		$this->load->model('loginModel');

		if($this->loginModel->login($name, $pass)){
			return true;
		}else{
			$this->form_validation->set_message('verifyUser', 'Incorrect Email or Password, Try again');
		}
	}
}