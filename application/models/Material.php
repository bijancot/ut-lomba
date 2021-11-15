<?php

class Material extends CI_Model{
    public function getAll(){
        return $this->db->get('material')->result();
    }
    public function getById($id){
        return $this->db->get_where('material', ['ID_MATERIAL' => $id])->row();
    }
    public function insert($param){
        $this->db->insert('material', $param);
    }
    public function update($param){
        $this->db->where('ID_MATERIAL', $param['ID_MATERIAL'])->update('material', $param);
    }
    public function delete($param){
        $this->db->delete('material', $param);
    }
}