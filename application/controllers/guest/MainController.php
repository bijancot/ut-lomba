<?php

class MainController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['home']  = 'home'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/home', $data);
    }

    public function course_list()
    {
        $data['course']  = 'course'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/courseList', $data);
    }
    
    public function course()
    {
        $data['course']  = 'course'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/course', $data);
    }
}
