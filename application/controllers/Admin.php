<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('PlanModel');
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

}