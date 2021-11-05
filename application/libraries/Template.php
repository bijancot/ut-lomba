<?php

class Template {
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }
    public function admin($content, $data){
        $this->_ci->load->view('adm/template/header', $data); // Header
        $this->_ci->load->view('adm/template/sidebar', $data); // Sidebar
        $this->_ci->load->view('adm/template/topbar', $data); // Topbar
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('adm/template/footer', $data); // Footer
    }
}