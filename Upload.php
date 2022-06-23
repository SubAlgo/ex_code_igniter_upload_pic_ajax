<?php
class Upload extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
 
    function index(){
        $this->load->view('upload_view');
    }
 

    function do_upload(){
        $config['upload_path']="./tmp-upload/";
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file111")){
            $data = array('upload_data' => $this->upload->data());
            echo($data['upload_data']['file_name']);
        } else {
            echo('error');
        }
 
     }
     
}
