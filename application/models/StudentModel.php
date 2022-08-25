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

    function studentDetailsView($id){
        $result = $this->db->get_where('students', ['id'=> $id]);
        return $result->row();
    }


    function deleteStudent($id)
    {


        $this->db->where('id', $id);
        return $this->db->delete('students');

    }


}


?>