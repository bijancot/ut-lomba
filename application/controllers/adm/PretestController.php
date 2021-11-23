<?php

class PretestController extends CI_Controller{
    public function __consturct(){
        parent::__construct();
    }
    public function index(){
        $data['title']   = "Pretest";
        $data['sidebar'] = "pretest";

        $this->template->admin('adm/pretest/pretest', $data);
    }
    public function vAdd(){
        $data['title']   = "Tambah Pretest";
        $data['sidebar'] = "pretest";

        $this->template->admin('adm/pretest/pretest_add', $data);
    }
    public function store(){
        print_r($_POST);
        // $upload = $this->upload_image();
        // if($upload['status'] == true){ // cek if upload success
        //     $formData['NAMA_EVENT']             = $_POST['judul'];
        //     $formData['DESKRIPSI_EVENT']        = $_POST['deskripsi'];
        //     $formData['LOKASI_EVENT']           = $_POST['lokasi'];
        //     $formData['TGL_EVENT']              = $_POST['tgl'];
        //     $formData['LINK_EVENT']             = $_POST['link'];
        //     $formData['PENYELENGGARA_EVENT']    = $_POST['penyelenggara'];
        //     $formData['NARAHUBUNG_EVENT']       = $_POST['narahubung'];
        //     $formData['IMG_EVENT']              = $upload['link'];
        //     $this->Event->insert($formData);
            
        //     $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan event baru!');
        //     redirect('admin/event');
        // }else{
        //     $data['title']      = 'Tambah Event';
        //     $data['sidebar']    = 'event';
        //     $data['dataTemp']   = $_POST;

        //     $this->session->set_flashdata('err_msg', $upload['msg']);
        //     $this->template->admin('adm/event/event_add', $data);
        // }
    }
}