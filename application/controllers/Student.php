<?php

class Student extends CI_Controller{

    function __construct()
    {
         parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('pagination');
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
      if($this->input->post()){
        $data=array();
        $data['NAME']=$_POST['NAME'];
        $data['Roll']=$_POST['Roll'];
        $data['ClassNam']=$_POST['ClassNam'];
        
        $result=$this->StudentModel->studentAdded($data);
        
        if($result){            
            $this->session->set_userdata('success','successfully created');
           redirect('Student/addStudent');
        }else{
            $this->session->set_userdata('fail','Failed to add');
            redirect('Student/addStudent'); 
    }
    }else{
        redirect('student/addstudent');
    }

}

    function details($id){
        $this->load->model("StudentModel");
        $data['student']= $this-> StudentModel-> studentDetailsView($id);
        $this -> load ->view('studentDetails', $data);
    }
    
    function editStudent($id)
    {
        $this -> load -> model ("StudentModel");
        $data['student']=$this->StudentModel->studentEdit($id);
        $this -> load -> view('editStudent', $data);
    }

    function updateStudent($id){
        $data = array();

        $data['NAME'] = $_POST['NAME'];
        $data['Roll'] = $_POST['Roll'];
        $data[' ClassNam'] = $_POST['ClassNam'];

        $this->load->model("StudentModel");

        $updated = $this->StudentModel->updateStudent($id, $data);

        redirect("Student");
    }

    function deleteStudent($id) {
        $this->load->model("StudentModel");
        $deleted=  $this->StudentModel->deleteStudent($id);
        if ($deleted) {
            $this->session->set_userdata("delete_message", "Deleted Successfully");
           redirect("student");
        }

        else {
            
           $this->session->set_userdata("delete_message", "Deleted Error");
           redirect("student");
        }
    }
}

?>