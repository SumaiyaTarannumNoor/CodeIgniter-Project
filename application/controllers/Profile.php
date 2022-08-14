<?php

class profile extends CI_Controller{
    function __construct()
    {
         parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('ProfileModel');
        $this->load->helper('form');

    }

    public function index()
    {
        $data=array();
        $data['viewProfile']=$this->ProfileModel->viewProfile();
        $this->load->view('profile',$data);
    }
    function profileCreation(){
        $this->load->view('profileCreation');
    }
    function createdProfile(){
        if($_POST['name']!=''&&$_POST['email']){

        $data=array();
        $data['name']= $_POST['name'];
        $data['email']= $_POST['email'];
        
        $result=$this->ProfileModel->createdProfile($data);
        
        if($result){    
            session_start();                                                 //!='' added
            $this->session->set_userdata('success','successfully created');
            $this->session->set_userdata('fail','');
            
            redirect('Profile/profileCreation');
            session_destroy();
        }else{
            $this->session->set_userdata('fail','fail');
            redirect('Profile/profileCreation');  
        }
        }else{
        $this->session->set_userdata('fail','Please fill up all the fields!');
        $this->session->set_userdata('success','');
            redirect('Profile/profileCreation');  
        }
        

}



}


?>