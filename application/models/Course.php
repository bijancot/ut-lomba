<?php

class Course extends CI_Model{
    public function getAll(){
        return $this->db->get('course')->result();
    }
    public function insert($param){
        $this->db->insert('course', $param);
    }
}