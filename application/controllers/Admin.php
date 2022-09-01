<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('AdminModel');
        $this->load->helper('form');
    }
    public function index()
    {
        $this->load->view('common/header');
        $this->load->view('common/sidebar');
        $this->load->view('crud/crudDashboard');
        $this->load->view('common/copyright');
        $this->load->view('common/footer'); 
    }
    public function StudentRegi(){
   
        $this->load->view('common/header');
        $this->load->view('common/sidebar');
        //$this->load->view('common/test');
        $this->load->view('crud/StudentRegi');
        $this->load->view('common/copyright');
        $this->load->view('common/footer');


    }

    function studentRegistration()
    {
        if ($this->input->post()) {

            $data = array();
            
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            
            $result = $this->AdminModel->studentRegistration($data);

            if ($result) {
                $this->session->set_userdata('success', 'successfully created');
                redirect('registration');
            } else {
                $this->session->set_userdata('fail', 'Failed to add');
                redirect('registration');
            }
        } else {

            redirect('registration');
        }
    }

    public function showStudents(){
        
        $data=array();
        $data['showStudents']=$this->AdminModel->showStudents();

        $this->load->view('common/header');
        $this->load->view('common/sidebar');
        $this->load->view('crud/showStudents', $data);
        $this->load->view('common/copyright');
        $this->load->view('common/footer');


    }

    public function studentDetails($id){                
        //$data=array();
        $data['student']= $this->AdminModel->studentDetails($id);       
        $this->load->view('common/header');
        $this->load->view('common/sidebar');
        $this->load->view('crud/studentDetails', $data);
        $this->load->view('common/copyright');
        $this->load->view('common/footer');
        
    }

    public function editStudent($id){                
        
        $data['student']= $this->AdminModel->editStudent($id);       
        $this->load->view('common/header');
        $this->load->view('common/sidebar');
        $this->load->view('crud/editStudent', $data);
        $this->load->view('common/copyright');
        $this->load->view('common/footer');
        
    }
    
    function updateStudent($id)
    {

        $data = array();
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');


        $updated = $this->AdminModel->updateStudent($id, $data);

        if ($updated) {
            $this->session->set_userdata("success", "Updated Successfully");
           redirect("allstudents");
        }

        else {
            
           $this->session->set_userdata("fail", "Update Error");
           redirect("allstudents");
        }

        redirect("allstudents");
    }

    public function deleteStudent($id){
        
        $deleted= $this->AdminModel->deleteStudent($id);
        if ($deleted) {
            $this->session->set_userdata("delete_message", "Deleted Successfully");
           redirect("allstudents");
        }

        else {
            
           $this->session->set_userdata("delete_message", "Deleted Error");
           redirect("allstudents");
        }
    }


}