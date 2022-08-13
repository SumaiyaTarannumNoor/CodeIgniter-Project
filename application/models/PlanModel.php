<?php
class PlanModel extends CI_model{
function addposted($data){
$result = $this->db->insert('plans', $data);
 return $result;   
}
function viewPlanData(){
    $this->db->select('*');
    $result=$this->db->get('plans');
    return $result->result(); 
}

}


?>