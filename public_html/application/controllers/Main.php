<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this-> landingPage();
                if($this -> session -> userdata('is_logged_in') == 1){
        $this -> session -> sess_destroy();
        }
	}
	public function landingPage()
	{
		$this -> load -> view('landingPage');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function contactEx()
	{
		$this -> load -> view('contactEx');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function sendEmailExample()
	{
		$this -> load -> view('sendEmailExample');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function tattoocare()
	{
		$this -> load -> view('tattoocare');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function painModel()
	{
		$this -> load -> view('painModel');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function tiny() {
		$this -> load -> view('tiny');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function ron() {
		$this -> load -> view('ron');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function kent() {
		$this -> load -> view('kent');
                if($this -> session -> userdata('is_logged_in') == 1){
                       $this -> session -> sess_destroy();
                   }
	}
	public function restricted() {
		$this -> load -> view('restricted');
	}
	public function login()
	{
		$this-> load ->view('login');
	}	

	public function uploader()
	{
		if ($this -> session -> userdata('is_logged_in')){
			$this -> load -> view('uploadView');
		} else {
			redirect('main/restricted');
		}
	}
	public function loginLandingPage()
	{
		if ($this -> session -> userdata('is_logged_in')){
			$this -> load -> view('loginLandingPage');
		} else {
			redirect('main/restricted');
		}	
	}
	public function passwordChange()
	{
		if ($this -> session -> userdata('is_logged_in')){
			$this -> load -> view('passwordChange');
		} else {
			redirect('main/restricted');
		}
	}
	public function login_validation()
	{
		$this -> form_validation ->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
		$this -> form_validation ->set_rules('password', 'Password', 'required|trim');
		if ($this -> form_validation -> run()) {
			$data = array('email' => $this -> input -> post('email'), 'is_logged_in' => 1);
			$this -> session -> set_userdata($data);
			redirect('Main/loginLandingPage');
		} else {
			$this -> load -> view('login');
		}

	}
	public function validate_credentials(){
		$this -> load -> model('model_users');
		if ($this->model_users -> can_log_in()){
			return true;
		} else {
			$this -> form_validation -> set_message('validate_credentials', 'Incorrect username/password.');
			return false;
		}
	}
		public function passwordChange_validation()
	{
		$this->load->library('user_agent');
		$this -> form_validation -> set_rules('old_password_check', 'Password', 'required|trim|min_length[4]|max_length[32]');
		$this -> form_validation -> set_rules('new_password', 'Password', 'required|trim|min_length[4]|max_length[32]');
		$this -> form_validation -> set_rules('new_password2', 'Reenter Password', 'required|trim|min_length[4]|max_length[32]|matches[new_password])');
		if ($this -> form_validation -> run() == FALSE) {
			redirect('Main/loginLandingPage');
		} else {
			$this->load->model('model_users');
            $query=$this->model_users->change_password();
			redirect($this->agent->referrer());
		}
	}
	public function old_password_correct()
	{


	}
	public function new_password_correct()
	{

	}
	public function logout() {
		$this -> session -> sess_destroy();
		redirect('main/login');
	}
} 
?>