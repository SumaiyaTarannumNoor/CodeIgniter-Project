<?php

class Student extends CI_Controller{

    function __construct()
    {
         parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('StudentModel');
        $this->load->helper('form');
    }

    public function index(){
        $data=array();
        $data['showStudents']=$this->StudentModel->showStudents();
        $this->load->view('students', $data);
    }
    
    function addStudent(){
        $this->load->view('addStudent');

    }

    function studentAdded(){
      
        $data=array();
        $data['NAME']=$_POST['NAME'];
        $data['Roll']=$_POST['Roll'];
        $data['ClassNam']=$_POST['ClassNam'];
        $result=$this->StudentModel->studentAdded($data);
        
        if($result){            
            $this->session->set_userdata('success','successfully created');
            $this->session->set_userdata('fail','');
           redirect('Student/addStudent');
        }else{
            $this->session->set_userdata('fail','fail');
            redirect('Student/addStudent'); 
    }


}

}

?>