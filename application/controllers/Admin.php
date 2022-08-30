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
                redirect('Registration');
            } else {
                $this->session->set_userdata('fail', 'Failed to add');
                redirect('Registration');
            }
        } else {

            redirect('Registration');
        }
    }


}