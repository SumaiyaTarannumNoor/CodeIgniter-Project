<?php
class Plan extends CI_Controller
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
        $data = array();
        $data['viewPlanData'] = $this->PlanModel->viewPlanData();
        $this->load->view('plan_view', $data);
    }

    function addpost()
    {
        $this->load->view('addpost');
    }

    function addposted()
    {
        if ($this->input->post()) {

            $data = array();
            
            $data['title'] = $this->input->post('title');
            $data['planDate'] = $this->input->post('planDate');
            $data['description'] = $this->input->post('description');

            $result = $this->PlanModel->addposted($data);

            if ($result) {
                $this->session->set_userdata('success', 'successfully created');
                redirect('Plan/addpost');
            } else {
                $this->session->set_userdata('fail', 'Failed to add');
                redirect('Plan/addpost');
            }
        } else {

            redirect('Plan/addpost');
        }
    }

    function editPost($id)
    {
        $this->load->model("PlanModel");
        $data['post'] = $this->PlanModel->postEdit($id);
        $this->load->view('editPost', $data);
    }

    function updatePost($id)
    {

        $data = array();
        $data['title'] = $_POST['title'];
        $data['planDate'] = $_POST['planDate'];
        $data['description'] = $_POST['description'];

        $this->load->model("PlanModel");

        $updated = $this->PlanModel->updatePost($id, $data);

        redirect("plan");
    }

    function details($id)
    {

        $this->load->model("PlanModel");
        $data['post'] = $this->PlanModel->postDetailsView($id);
        $this->load->view('postDetails', $data);
    }

    function detailedPost($id)
    {
        $this->load->model("PlanModel");
        $this->PlanModel->postDetailsView($id);
    }

    function deletePost($id) {
        $this->load->model("PlanModel");
        $deleted=  $this->PlanModel->deletePost($id);
        if ($deleted) {
            $this->session->set_userdata("delete_message", "Deleted Successfully");
           redirect("plan");
        }

        else {
            
           $this->session->set_userdata("delete_message", "Deleted Error");
           redirect("plan");
        }
    }
}
