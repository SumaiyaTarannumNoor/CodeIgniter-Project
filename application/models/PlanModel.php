<?php
class PlanModel extends CI_model
{
    function addposted($data)
    {
        $result = $this->db->insert('plans', $data);
        return $result;
    }
    function viewPlanData()
    {
        $this->db->select('*');
        $result = $this->db->order_by('id', 'desc')->get('plans');
        return $result->result();
    }

    function postDetailsView($id)
    {
        $result = $this->db->get_where('plans', ['id' => $id]);
        return $result->row();
    }

    function postEdit($id)
    {
        $result = $this->db->get_where('plans', ['id' => $id]);
        return $result->row();
    }

    function updatePost($id, $data)
    {
        $this->db->where("id", $id);
        return $this->db->update('plans', $data);
    }


    function deletePost($id)
    {


        $this->db->where('id', $id);
        return $this->db->delete('plans');

    }
}
