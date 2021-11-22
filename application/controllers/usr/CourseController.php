<?php

class CourseController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Course');
        $this->load->model('CourseUser');
        $this->load->model('KategoriCourse');

        if($this->session->userdata('is_logged')){  // cek if new course
            $email = $this->session->userdata('email');

            $idCourses = $this->Course->getListIdPublished()->ID_COURSES;
            $idCourses = explode(',', $idCourses);
            
            $idCUs = $this->CourseUser->getListId($email)->ID_COURSES;
            $idCUs = explode(',', $idCUs);

            $newCourseUser = array_diff($idCourses, $idCUs);
            foreach ($newCourseUser as $item) {
                $this->CourseUser->insert(['EMAIL_USER' => $email, 'ID_COURSE' => $item]);
            }
        }
    }

    public function vCourseList($idKat){
        $email = $this->session->userdata('email');

        $data['title']      = 'Course List';
        $data['kategori']   = $this->KategoriCourse->getById($idKat);
        $data['courses']    = $this->CourseUser->get(['EMAIL_USER' => $email, 'ID_KATCOU' => $idKat]);

        $this->template->index('general/courseList', $data);
    }
}