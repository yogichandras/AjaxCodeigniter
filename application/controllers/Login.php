<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $this->load->view("login");
    }

    public function aksi_login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'password' => md5($password)
                );
                
            $cek_admin = $this->Mymodel->cek_login("user",$where)->num_rows();
            // $data = $this->Mymodel->GetUser("where username = '$username'");
    
            
       
            // $cek_super_admin = $this->mymodel->cek_login("super_admin",$where)->num_rows();
            // $cek_member_free = $this->mymodel->cek_login("member_free",$where)->num_rows();
            // $cek_member_premium = $this->mymodel->cek_login("member_premium",$where)->num_rows();
            if($cek_admin > 0){
     
                 $data_session = array(
                     'username' => $username,
                     'status' => "admin"
                    );
     
                 $this->session->set_userdata($data_session);
                 redirect(base_url()."index.php/Dashboard/admin");
                }
             else{
                $this->session->set_flashdata('pesan','Maaf Username / Password Salah');
                redirect('Login/index');
             }
        
    }
}