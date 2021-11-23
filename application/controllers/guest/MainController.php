<?php

class MainController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title']  = 'home'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/home', $data);
    }

    public function course_list()
    {
        $data['title']  = 'course'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/courseList', $data);
    }
    
    public function course()
    {
        $data['title']  = 'course'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/course', $data);
    }
    public function event()
    {
        $data['title']  = 'event'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/event', $data);
    }
    public function eventList()
    {
        $data['title']  = 'eventList'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/eventList', $data);
    }
    public function about()
    {
        $data['title']  = 'about'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/about', $data);
    }
    public function pretest()
    {
        $data['title']  = 'pretest'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/pretest', $data);
    }
    public function pretestCourse()
    {
        $data['title']  = 'pretestCourse'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/pretestCourse', $data);
    }
    public function pretestSubmit()
    {
        $data['title']  = 'pretestSubmit'; // PLACEHOLDER VARIABLE DATA

        $this->template->index('general/pretestSubmit', $data);
    }
}
