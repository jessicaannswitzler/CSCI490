<?php
class contactform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
        function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
        function index()
    {
        $this->load->library('user_agent');
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            redirect($this->agent->referrer());
        }
        else
        {
			 //get the form data
            $to = $this->input->post('to');
            $name = $this->input->post('name');
            $contact_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $from_email = '50shadescontactform@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp.gmail.com';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '587';
            $config['smtp_user'] = '50shadescontactform@gmail.com';
            $config['smtp_pass'] = 'contactFormEmail';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message("Contact sender at: " .$contact_email. "<br/>". $message);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                //redirect('ContactForm/index');
                redirect($this->agent->referrer());
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                //redirect('ContactForm/index');
                redirect($this->agent->referrer());
            }
        }
    }
}
?>
}
?>