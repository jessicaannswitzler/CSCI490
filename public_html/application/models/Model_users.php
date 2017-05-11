<?php

class Model_users extends CI_Model {

	public function can_log_in(){
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password',hash('sha512',$this->input->post('password')));
		$query = $this->db->get('users');
		if($query->num_rows() == 1){
			return true;
		}else{
		return false;
		}
	}
	public function Change_password(){   
        $this->db->where('email',$this->session->userdata('email'));
        $this->db->where('password',hash('sha512',$this->input->post('old_password_check')));
        $query=$this->db->get('users');   

        if ($query->num_rows() > 0 )
         {
         	if ($this -> input -> post('old_password_check') !== $this -> input -> post('new_password'))
			{
                $row = $query->row();
                if($row-> email === $this->session->userdata('email'))
                {
                    $data = array(
                      'password' => hash('sha512', $this->input->post('new_password'))
                     );
                  $this->db->where('email',$this->session->userdata('email'));
                  $this->db->where('password',hash('sha512',$this->input->post('old_password')));
                  $this -> db -> update('users', $data);
                       if($this->db->update('users', $data)) 
                       {
                       $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Password was changed </div>');
                       }else{
                        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong please try again </div>');
                       }
                }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong please try again</div>');
                }
            }
            else{
            	$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">New password can not match old password</div>');
            }

         }else{
           $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Incorrect original password was entered</div>');
         }

        }
}