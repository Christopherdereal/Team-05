<?php 
	class User extends CI_Controller{

			public function __construct(){
				parent::__construct();
				if(!$this->session->userdata('logged_in')){
                //Set error
                $this->session->set_flashdata('need_login', 'Sorry, you need to be logged in to view that area');
                redirect('home/index');
            }
				$this->load->helper('url');
				$this->load->library('form_validation');
				$this->load->model('Account_model');
				$this->load->database('newtodo');
				$this->load->library('session');
			}

			public function home(){
				
				$this->load->view('home/index');
			}

			public function logout(){
				
			
				$this->session->unset_userdata('id');
				redirect('users/logout');
			}

			public function change_password(){
				if($this->session->has_userdata('id')){
					$this->load->view('change_password_form');
				}else{
					redirect('users/logout');
				}
			}

			public function update_password(){
				$this->form_validation->set_rules('old_password','Old Password','required');
				$this->form_validation->set_rules('new_password','New Password','required');
				$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[new_password]');

				if($this->form_validation->run()==FALSE){
					$this->load->view('change_password_form');
				}else{
					$old_password = $this->input->post('old_password');
					$new_password = $this->input->post('new_password');
				

					if(strcmp($old_password,$new_password)==0){
						$message = "New password should be a different password";
					}else{

						$id = $this->session->userdata('id');
						if($this->Account_model->oldPasswordMatches($id,$old_password)){
							$this->Account_model->changeUserPassword($id,$new_password);
							$message = "Password changed successfully";
						}else{
							$message = "Your old Password is wrong!";
						}
						
					}

					
				}
			}
			
	}


?>
