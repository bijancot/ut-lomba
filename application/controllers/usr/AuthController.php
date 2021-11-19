<?php

class AuthController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }
    public function vHome(){
        $data['home']  = 'Home'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/home', $data);
    }
    public function vSignUp(){
        $data['register']  = 'register'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('auth/register', $data);
    }
    public function register(){
        $formData['EMAIL_USER']             = $_POST['email'];
        $formData['TELP_USER']              = $_POST['telp'];
        $formData['PASSWORD_USER']          = $_POST['pass'];
        $formData['NAMA_USER']              = $_POST['nama'];
        $formData['JK_USER']                = $_POST['jk'];
        $formData['ALAMAT_USER']            = $_POST['alamat'];
        $formData['TEMPATLAHIR_USER']       = $_POST['tmpt_lahir'];
        $formData['TGLLAHIR_USER']          = $_POST['tgl_lahir'];
        $formData['BULANLAHIR_USER']        = $_POST['bln_lahir'];
        $formData['TAHUNLAHIR_USER']        = $_POST['thn_lahir'];
        $formData['AGAMA_USER']             = $_POST['agama'];
        $formData['NIK_USER']               = $_POST['nik'];
        $formData['PERGURUANTINGGI_USER']   = $_POST['pt'];
        $formData['NIM_USER']               = $_POST['nim'];
        $formData['PROGRAMSTUDI_USER']      = $_POST['ps'];
        $formData['JENJANG_USER']           = $_POST['jenjang'];
        $formData['SEMESTER_USER']          = $_POST['semester'];
        $this->User->insert($formData);
    }
}