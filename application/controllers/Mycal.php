<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycal extends CI_Controller {
public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            //Set error
            $this->session->set_flashdata('need_login', 'Sorry, you need to be logged in to view that area');
            redirect('home/index');
        }
    }
	public function index($year = NULL , $month = NULL)
	{
		$this->load->model('Mycal_model');
		$data['calender'] = $this->Mycal_model->getcalender($year , $month);
		$this->load->view('calview', $data);
	}
}
  
