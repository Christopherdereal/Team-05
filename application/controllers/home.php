<?php
class Home extends CI_Controller {
    public function index(){
        if($this->session->userdata('logged_in')){
            //Get the logged in users id
            $user_id = $this->session->userdata('user_id');
        }
       
        $data['main_content'] = 'home';
        $this->load->view('layouts/main',$data);
    }
  
}
