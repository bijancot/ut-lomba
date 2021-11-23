<?php

class PretestController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('PretestUser');
    }
    public function vPretest($id){
        $email = $this->session->userdata('email');
        $data['title']   = 'Pretest';
        $data['pretest'] = $this->Pretest->getById($id);

        if($this->session->userdata('is_logged')){
            $data['is_logged']      = true;
            $data['pretestUser']    = $this->PretestUser->get(['EMAIL_USER' => $email, 'ID_PRETEST' => $id]);
        }else{
            $data['is_logged']      = false;
        }
        
        $this->template->index('general/pretest', $data);
    }
    public function vDo($idPU){
        $data['title']  = 'pretestCourse'; // PLACEHOLDER VARIABLE DATA
        $data['pu']     = $this->PretestUser->getById($idPU);

        $this->template->index('general/pretestCourse', $data);
    }
    public function start($id){
        $email = $this->session->userdata('email');
        $deadline = explode(';', $this->Pretest->getById($id)->DEADLINE_PRETEST);
        $add = '+'.$deadline[0].' days +'.$deadline[1].' hours +'.$deadline[2].' minutes';

        $deadlinePU = date('Y-m-d H:i:s', strtotime($add));
        $newIdPU = $this->PretestUser->insert(['EMAIL_USER' => $email, 'ID_PRETEST' => $id, 'DEADLINE_PU' => $deadlinePU]);

        redirect('pretest/do/'.$newIdPU);
    }
}