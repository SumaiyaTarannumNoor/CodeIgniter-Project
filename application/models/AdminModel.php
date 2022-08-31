<?php
class AdminModel extends CI_model
{
    public function studentRegistration($data){
        $result = $this->db->insert('regform', $data);
        return $result;
    }

    function showStudents(){

        $this->db->select('*');
        $result=$this->db->order_by('id', 'desc')->get('regform');
        return $result->result();

    }
}