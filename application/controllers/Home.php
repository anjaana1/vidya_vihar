<?php
class Home extends CI_controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('user')){
            redirect('user_login/index');
        }
    }
    public function logs(){
        $log = $this->session->userdata("user");
        $data['user_profile'] = $this->datawork->calling_data('user_accounts',['email'=>$log]);
        return $id = $data['user_profile'][0]->id;
    }
    public function index($id=NULL){
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules("create_post","textarea","required");
        
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);
        
        if($this->form_validation->run()){
            if($this->upload->do_upload('post_file')){
                $data=[
                    'descr'=>$_POST['create_post'],
                    'user_id'=>$this->logs(),
                    'file'=>$_FILES['post_file']['name']
                ];
                $this->datawork->insert_data("user_posts",$data);
                redirect("home/index");
            }
            else{
                print_r($this->upload->display_errors());
            }
        }
        else{
            $log = $this->session->userdata("user");
            $data['user_accounts'] = $this->datawork->calling_data('user_accounts',['email'=>$log]);
            $data['user_profile'] = $this->datawork->join_data('user_accounts','user_profile','user_accounts.id = user_profile.uid',['email'=>$log]);
            $data['profile'] = $this->datawork->join_data('user_accounts','user_profile','user_accounts.id = user_profile.uid');
            $data['user_posts']=$this->datawork->join_data('user_accounts','user_posts','user_accounts.id =  user_posts.user_id');
            $this->load->view('include/header');
            $this->load->view('secure/home',$data);
            $this->load->view('include/footer');
        }
    }
    public function profile($id=NULL){
        $log = $this->session->userdata("user");
        $data['user_accounts'] = $this->datawork->calling_data('user_accounts',['email'=>$log]);
        $data['user_profile']=$this->datawork->join_data('user_accounts','user_profile','user_accounts.id = user_profile.uid',['email'=>$log]);
        $data['user_posts']=$this->datawork->join_data('user_accounts','user_posts','user_accounts.id =  user_posts.user_id',['email'=>$log]);
        $this->load->view('include/header');
        $this->load->view('secure/profile',$data);
        $this->load->view('include/footer');
    }
    public function edit_profile(){
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules("course","course","required");
        $this->form_validation->set_rules("semester","semester","required");
        
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);
        
        if($this->form_validation->run()){
            if($this->upload->do_upload('profile_pic') and $this->upload->do_upload('cover_pic')){
                $data=[
                    'course'=>$_POST['course'],
                    'semester'=>$_POST['semester'],
                    'display_pic'=>$_FILES['profile_pic']['name'],
                    'cover_pic'=>$_FILES['cover_pic']['name'],
                    'intro'=>$_POST['intro'],
                    'uid'=>$this->logs()
                ];
                $this->datawork->insert_data('user_profile',$data);
                redirect('home/profile');
            }
            else{
                print_r($this->upload->display_errors());
            }
        }
        else{
            $this->load->view('include/header');
            $this->load->view('secure/profile');
            $this->load->view('include/footer');
        }
    }
    public function logout(){
        $this->session->unset_userdata("user");
        redirect("user_login/index");
    }
}
?>