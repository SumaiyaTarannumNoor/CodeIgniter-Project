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

    public function studentDetails($id){        
        $result = $this->db->get_where('regform', ['id'=>$id]);
        return $result->row();
    }

    function editStudent($id)
    {
        $result = $this->db->get_where('regform', ['id' => $id]);
        return $result->row();
    }

    function updateStudent($id, $data){
        $this->db->where("id", $id);
        return $this->db->update('regform', $data);
    }

    function deleteStudent($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('regform');

    }
}