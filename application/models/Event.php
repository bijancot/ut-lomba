<?php

class Event extends CI_Model{
    public function getAll(){
        return $this->db->order_by('created_at', 'desc')->get('event')->result();
    }
    public function getById($id){
        return $this->db->get_where('event', ['ID_EVENT' => $id])->row();
    }
    public function get($param){
        return $this->db->get('event', $param)->result();
    }
    public function insert($param){
        $this->db->insert('event', $param);
    }
    public function update($param){
        $this->db->where('ID_EVENT', $param['ID_EVENT'])->update('event', $param);
    }
    public function delete($param){
        $this->db->delete('event', $param);
    }
}