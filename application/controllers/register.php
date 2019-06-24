<?php 
/**
 * 
 */
class register extends CI_Controller
{
	
	public function register_user()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('con_pwd', 'Confirm Password', 'required|matches[pwd]');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                     //this->load->view('formsuccess');
                	echo "Success";
                	die();
                }

	}
}
