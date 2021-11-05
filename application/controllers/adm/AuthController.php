<?php

class AuthController extends CI_Controller{
    public function vLogin(){
        $data['title'] = "Course";
        $this->template->admin('adm/auth/login', $data);     
    }
}