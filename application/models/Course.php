<?php

class Course extends CI_Model{
    public function getAll(){
        return $this->db->order_by('created_at', 'desc')->get('course')->result();
    }
    public function getById($id){
        return $this->db->get_where('course', ['ID_COURSE' => $id])->row();
    }
    public function get($param){
        return $this->db->get('course', $param)->result();
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