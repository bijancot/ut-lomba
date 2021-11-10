<?php 

class CourseController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('Course');
    }

    public function index(){
        $data['title']      = 'Course';
        $data['sidebar']    = 'course';
        $data['courses']    = $this->Course->getAll();

        $this->template->admin('adm/course/course', $data);
    }

    public function vAdd(){
        $data['title']      = 'Tambah Course';
        $data['sidebar']    = 'course';

        $this->template->admin('adm/course/course_add', $data);
    }

    public function vEdit($id){
        $data['title']      = "Ubah Course";
        $data['sidebar']    = 'course';
        $data['course']     = $this->Course->getById($id);

        $this->template->admin('adm/course/course_edit', $data);
    }

    public function store(){
        $upload = $this->upload_image();
        if($upload['status'] == true){ // cek if upload success
            $formData['NAMA_COURSE']        = $_POST['nama'];
            $formData['DESKRIPSI_COURSE']   = $_POST['deskripsi'];
            $formData['IMG_COURSE']         = $upload['link'];
            $this->Course->insert($formData);
            
            $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan course baru!');
            redirect('admin/course');
        }else{
            $data['title']      = 'Tambah Course';
            $data['sidebar']    = 'course';
            $data['dataTemp']   = $_POST;

            $this->session->set_flashdata('err_msg', $upload['msg']);
            $this->template->admin('adm/course/course_add', $data);
        }
    }

    public function update(){
        $formData['ID_COURSE']          = $_POST['idCourse'];
        $formData['NAMA_COURSE']        = $_POST['nama'];
        $formData['DESKRIPSI_COURSE']   = $_POST['deskripsi'];

        if(!empty($_FILES['poster']['name'])){ // cek if edit img / poster
            $upload = $this->upload_image();
            if($upload['status'] == true){ // cek if upload success
                $formData['IMG_COURSE'] = $upload['link'];
                $this->Course->update($formData);
                
                $this->session->set_flashdata('succ_msg', 'Berhasil mengubah course!');
                redirect('admin/course');
            }else{
                $data['title']                  = 'Ubah Course';
                $data['sidebar']                = 'course';
                $data['dataTemp']               = $_POST;

                $this->session->set_flashdata('err_msg', $upload['msg']);
                $this->template->admin('adm/course/course_edit', $data);
            }
        }else{
            $this->Course->update($formData);
            $this->session->set_flashdata('succ_msg', 'Berhasil mengubah course!');
            redirect('admin/course');
        }
    }

    public function upload_image(){
        $conf['upload_path']    = "./uploads/course/";
        $conf['allowed_types']  = "jpg|png|jpeg|bmp";
        $conf['max_size']       = 2048;
        $conf['file_name']      = time();
        $conf['encrypt_name']   = TRUE;

        $this->upload->initialize($conf);
        if($this->upload->do_upload('poster')){
            $img = $this->upload->data();

            // Compress Image
            // $conf['image_library']    ='gd2';
            // $conf['source_image']     ='./uploads/course/'.$img['file_name'];
            // $conf['create_thumb']     = FALSE;
            // $conf['maintain_ratio']   = true;
            // $conf['width']            = 600;
            // $conf['new_image']        = './uploads/course/'.$img['file_name'];
            // $this->load->library('image_lib', $conf);
            // $this->image_lib->resize();
            
            return [
                    'status'=> true,
                    'msg'   => 'Data berhasil terupload',
                    'link'  => base_url('uploads/course/'.$img['file_name'])
                ];
        }else{
            return [
                'status'=> false,
                'msg'   => $this->upload->display_errors(),
            ];
        }
    }



}