<?php

class Course extends CI_Model{
    public function getAll(){
        return $this->db->order_by('created_at', 'desc')->get('v_course')->result();
    }
    public function getById($id){
        return $this->db->get_where('v_course', ['ID_COURSE' => $id])->row();
    }
    public function get($param){
        return $this->db->get('v_course', $param)->result();
    }
    public function insert($param){
        $this->db->insert('course', $param);
    }
    public function update($param){
        $this->db->where('ID_COURSE', $param['ID_COURSE'])->update('course', $param);
    }
    public function delete($param){
        $this->db->delete('course', $param);
    }
}