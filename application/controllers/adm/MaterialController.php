<?php

class MaterialController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Course');
        $this->load->model('Material');
        $this->load->library('upload');
    }

    public function vMaterial($id){
        $data['title']      = 'Materi';
        $data['sidebar']    = 'course';
        $data['course']     = $this->Course->getById($id);
        $data['materials']  = $this->Material->getAll();

        $this->template->admin('adm/material/material', $data);
    }
    
    public function vAdd($id){
        $data['title']      = 'Tambah Materi';
        $data['sidebar']    = 'course';
        $data['course']     = $this->Course->getById($id);
    
        $this->template->admin('adm/material/material_add', $data);
    }

    public function vEdit($id){
        $data['title']      = 'Edit Materi';
        $data['sidebar']    = 'course';
        $data['material']   = $this->Material->getById($id);
    
        $this->template->admin('adm/material/material_edit', $data);
    }

    public function store(){
        $formData['ID_COURSE']           = $_POST['idCourse'];
        $formData['NAMA_MATERIAL']       = $_POST['topik'];
        $formData['CONTENT_MATERIAL']    = $_POST['konten'];
        $formData['DESKRIPSI_MATERIAL']  = $_POST['deskripsi'];
        
        if(!empty($_FILES['file']['name'][0])){ // cek if process upload files exist
            $upload = $this->upload_files($_POST['idCourse'], $_FILES['file']);
            if($upload['status'] == true){
                $formData['RESOURCE_MATERIAL']  = $upload['link'];

                $this->session->set_flashdata('succ_msg', 'Berhasil menambah materi baru!');
                $this->Material->insert($formData);
                redirect('admin/material/'.$_POST['idCourse']);
            }else{
                $data['title']                  = 'Tambah Materi';
                $data['sidebar']                = 'course';
                $data['dataTemp']               = $_POST;

                $this->session->set_flashdata('err_msg', $upload['msg']);
                $this->template->admin('adm/material/material_add', $data);
            }
        }else{
            $this->session->set_flashdata('succ_msg', 'Berhasil menambah materi baru!');
            $this->Material->insert($formData);
            redirect('admin/material/'.$_POST['idCourse']);
        }
    }

    public function update(){
        $formData['ID_MATERIAL']         = $_POST['idMaterial'];
        $formData['NAMA_MATERIAL']       = $_POST['topik'];
        $formData['CONTENT_MATERIAL']    = $_POST['konten'];
        $formData['DESKRIPSI_MATERIAL']  = $_POST['deskripsi'];

        if(!empty($_FILES['poster']['name'])){ // cek if edit img / poster
            $upload = $this->upload_image();
            if($upload['status'] == true){ // cek if upload success
                $formData['IMG_COURSE'] = $upload['link'];
                $this->Course->update($formData);
                
                $this->session->set_flashdata('succ_msg', 'Berhasil mengubah materi!');
                redirect('admin/course');
            }else{
                $data['title']                  = 'Ubah Course';
                $data['sidebar']                = 'course';
                $data['dataTemp']               = $_POST;

                $this->session->set_flashdata('err_msg', $upload['msg']);
                $this->template->admin('adm/course/course_edit', $data);
            }
        }else{
            $this->Material->update($formData);
            $this->session->set_flashdata('succ_msg', 'Berhasil mengubah materi!');
            redirect('admin/material/'.$_POST['idCourse']);
        }
    }

    public function upload_files($idCourse, $files){
        $path = 'uploads/material/course_'.$idCourse;
        if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
        }

        $resources = array();
        $links     = array();
        foreach ($files['name'] as $item => $file) { // upload multiple files
            $_FILES['resources[]']['name']      = $files['name'][$item];
            $_FILES['resources[]']['type']      = $files['type'][$item];
            $_FILES['resources[]']['tmp_name']  = $files['tmp_name'][$item];
            $_FILES['resources[]']['error']     = $files['error'][$item];
            $_FILES['resources[]']['size']      = $files['size'][$item];

            $fileName = str_replace(" ", "", $file);

            $resources[] = $fileName;
            $links[]     = base_url($path."/".$fileName);

            $conf['upload_path']    = $path;
            $conf['allowed_types']  = "pdf|doc|docx|pptx|ppt";
            $conf['max_size']       = 2048;
            $conf['file_name']      = $fileName;
            $this->upload->initialize($conf);

            if ($this->upload->do_upload('resources[]')) {
                $this->upload->data();
            } else {
                return [
                    'status'=> false,
                    'msg'   => $this->upload->display_errors()
                ];
            }
        }
        return [
            'status'=> true,
            'msg'   => 'Data berhasil terupload',
            'link'  => implode(';', $links)
        ];
    }
}