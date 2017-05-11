<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


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
	public function login_validation()
	{
		$this -> load -> library('form_validation');
		$this -> form_validation ->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
		$this -> form_validation ->set_rules('password', 'Password', 'required|trim');
		if ($this -> form_validation -> run()) {
			$data = array('email' => $this -> input -> post('email'), 'is_logged_in' => 1);
			$this -> session -> set_userdata($data);
			redirect('Main/uploader');
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
	public function logout() {
		$this -> session -> sess_destroy();
		redirect('main/login');
	}
} 
?>