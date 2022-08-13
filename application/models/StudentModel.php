<?php

class StudentModel extends CI_model{

    function studentAdded($data){
        $result=$this->db->insert('students', $data);
        return $result;
    }

    function showStudents(){

        $this->db->select('*');
        $result=$this->db->get('students');
        return $result->result();

    }





}


?>