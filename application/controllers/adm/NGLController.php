<?php

class NGLController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
        $this->load->model('CourseUser');
        $this->load->model('PretestUser');
    }
    public function index(){
        $data['title']      = "Next Gen Leader";
        $data['sidebar']    = 'ngl';
        $data['users']      = $this->User->getAll();

        $this->template->admin('adm/ngl/ngl', $data);
    }
    public function vCourse($email){
        $email = str_replace('__', '@', $email);
        $data['title']      = "NGL Course";
        $data['sidebar']    = 'ngl';
        $data['courses']    = $this->CourseUser->get(['EMAIL_USER' => $email, 'STAT_CU != ' => "0"]);
        $data['user']       = $this->User->getById($email);

        $this->template->admin('adm/ngl/ngl_course', $data);
    }
    public function vPretest($email){
        $email = str_replace('__', '@', $email);
        $data['title']      = "NGL Course";
        $data['sidebar']    = 'ngl';
        $data['pretests']   = $this->PretestUser->get(['EMAIL_USER' => $email]);
        $data['user']       = $this->User->getById($email);

        $this->template->admin('adm/ngl/ngl_pretest', $data);
    }
    public function vDetail($email){
        $email = str_replace('__', '@', $email);
        $data['title']      = "NGL Course";
        $data['sidebar']    = 'ngl';
        $data['user']       = $this->User->getById($email);

        $this->template->admin('adm/ngl/ngl_detail', $data);
    }
    public function review(){
        $this->PretestUser->update(['ID_PU' => $_POST['id'], 'KOMENTAR_PU' => $_POST['komen'], 'ISCHECKED_PU' => "1"]);
        redirect('admin/ngl/pretest/'.$_POST['email']);
    }
}