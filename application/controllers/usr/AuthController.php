<?php

class AuthController extends CI_Controller{
    public function vHome(){
        $data['home']  = 'Home'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/home', $data);
    }
    public function vRegister(){
        $data['register']  = 'register'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('auth/register', $data);
    }
}