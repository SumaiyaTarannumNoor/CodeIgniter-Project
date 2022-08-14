<?php

class ProfileModel extends CI_Model{

    function createdProfile($data){
    $result=$this->db->insert('profile', $data);

    }

    function viewProfile(){
        $this->db->select('*');
        $result=$this->db->get('profile');
        return $result->result();
    }

}
?>