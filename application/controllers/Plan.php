<?php
class Plan extends CI_Controller{
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
        $data=array();
        $data['viewPlanData']=$this->PlanModel->viewPlanData();
        $this->load->view('plan_view',$data);
    }

    function addpost(){
        $this->load->view('addpost');
    }
    function addposted(){
        if($_POST['title']!=''&&$_POST['planDate']!=''&&$_POST['description']){

        $data=array();
        $data['title']= $_POST['title'];
        $data['planDate']= $_POST['planDate'];
        $data['description']= $_POST['description'];
        
        $result=$this->PlanModel->addposted($data);
        session_start();
        if($result){    
                                                           //!='' added
            $this->session->userdata('success','successfully created');
            $this->session->userdata('fail','');
            
            redirect('Plan/addpost');
        }else{
            $this->session->userdata('fail','fail');
            redirect('Plan/addpost');  
        }
        session_write_close();
        }else{
        $this->session->set_userdata('fail','Please fill up all the fields!');
        $this->session->set_userdata('success','');
            redirect('Plan/addpost');  
        }
        

}
}

?>