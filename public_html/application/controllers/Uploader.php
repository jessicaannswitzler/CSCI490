<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader extends CI_Controller {

	


	public function viewFile(){
		$this->load->view('uploadView', array('error'=> ' '));
	}

	public function do_upload(){
                if ($this -> session -> userdata('email') == "kentjimisionink@gmail.com"){
		$config = array(
			'upload_path' => "img/KentsGallery/", 
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "4200000",
			'max_height' => "768",
			'max_width' => "1024"
		);
                }
                else if($this -> session -> userdata('email') == "test@test.com"){
                	$config = array(
			'upload_path' => "img/TinysGallery/", 
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "4200000",
			'max_height' => "6000",
			'max_width' => "6000"
		);
               }
              else if($this -> session -> userdata('email') == "ronink@gmail.com"){
		        $config = array(
			'upload_path' => "img/RonsGallery/", 
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "768",
			'max_width' => "1024"
		);
             } else { echo "error";}
	

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload())
		{
			$data = array('upload_data' => $this->upload->data());
                       $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your photo uploaded succesfully!</div>');
			redirect('Main/uploader', $data);
		}
		else
		{
			echo "ERROR";
			$error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There was an error uploading your photo! Please try again later</div>');
			redirect('Main/uploader', $error);
		}

	}
}

?>