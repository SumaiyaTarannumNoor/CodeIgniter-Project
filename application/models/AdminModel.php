<?php
class AdminModel extends CI_model
{
    public function studentRegistration($data){
        $result = $this->db->insert('regform', $data);
        return $result;
    }
}