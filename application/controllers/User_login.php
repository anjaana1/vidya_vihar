<?php
class User_login extends CI_controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('user')){
            redirect('home/index');
        }
    }
    public function index(){
        $this->form_validation->set_error_delimiters("<small class='col-lg-12 text-danger'>","</small");
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()){
            $data=[
                'email' =>$_POST['email'],
                'password' =>$_POST['password']
            ];
            if($this->datawork->check_data('user_accounts',$data) == TRUE){
                $this->session->set_userdata('user',$_POST['email']);
                redirect('home/index');
            }
            else{
                $this->session->set_flashdata("msg","<div class='alert bg-danger text-white'>Login Failed!!!</div>");
                redirect('user_login/index');
            }
        }
        else{
        $this->load->view('accounts/userlogin');
        }
    }
    public function signup(){
        $this->form_validation->set_error_delimiters("<small class='col-lg-12 text-danger'>","</small");
        $this->form_validation->set_rules('fname','first name','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('password','password','required');
        
        if($this->form_validation->run()){
            $data=[
                'first_name' =>$_POST['fname'],
                'last_name' =>$_POST['lname'],
                'email' =>$_POST['email'],
                'phone' =>$_POST['phone'],
                'password' =>$_POST['password']
            ];
            $this->datawork->insert_data("user_accounts",$data);
            $this->session->set_flashdata("msg","<div class='alert bg-success text-white'>Account created successfully</div>");
            redirect('user_login/index');
        }
        else{
            $this->load->view('accounts/signup');
        }
    }
}
?>