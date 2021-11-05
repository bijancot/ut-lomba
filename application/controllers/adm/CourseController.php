<?php 

class CourseController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['title']      = 'Course';
        $data['sidebar']    = 'course';

        $this->template->admin('adm/course/index', $data);
    }
}