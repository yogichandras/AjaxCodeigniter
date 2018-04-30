<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "admin"){
			redirect(base_url()."index.php/Login/index");
        }
        $this->load->library('datatables'); //load library ignited-dataTable

    }
    
    public function surat_masuk(){
        $username = $this->session->userdata('username');
        $data = $this->Mymodel->GetUser("where username = '$username'");
        $data2 = array(
            "username" => $data[0]['username'],
            "status" => $data[0]['status']
        );
    
        $this->load->view('surat_masuk',$data2);
    }

    public function surat_keluar(){
        $this->load->view('surat_keluar');
    }

    public function admin(){
        $username = $this->session->userdata('username');
        $data = $this->Mymodel->GetUser("where username = '$username'");
        $data2 = array(
            "username" => $data[0]['username'],
            "status" => $data[0]['status']
        );
    
      $this->load->view("admin",$data2);
}

public function user(){
    
    $username = $this->session->userdata('username');
    $data = $this->Mymodel->GetUser("where username = '$username'");
    $data2 = array(
        "username" => $data[0]['username'],
        "status" => $data[0]['status']
    );

    $this->load->view('user_management',$data2);
}


public function ajax_user(){
    header('Content-Type: application/json');
    echo $this->Mymodel->get_all_user();
}

public function ajax_surat_masuk(){
    header('Content-Type: application/json');
    echo $this->Mymodel->get_surat_masuk();
}

function simpan(){ //function simpan data
    $password = $this->input->post('password');
    $data= array(
      'username'     => $this->input->post('username'),
      'password'    => md5($password),
      'status' => $this->input->post('status')
    );
    $this->db->insert('user', $data);
    redirect('Dashboard/user');
  }

  function simpan_surat_masuk(){ //function simpan data
    $password = $this->input->post('password');
    $data= array(
      'tanggal_masuk'     => $this->input->post('username'),
      'password'    => md5($password),
      'status' => $this->input->post('status')
    );
    $this->db->insert('user', $data);
    redirect('Dashboard/user');
  }
 
  function update(){ //function update data
    $id=$this->input->post('id');
    $data=array(
        'username'     => $this->input->post('username'),
        'password'    => md5($this->input->post('password')),
        'status' => $this->input->post('status')
    );
    $this->db->where('id',$id);
    $this->db->update('user', $data);
    redirect('Dashboard/user');
  }
 
  function delete(){ //function hapus data
    $id=$this->input->post('id');
    $this->db->where('id',$id);
    $this->db->delete('user');
    redirect('Dashboard/user');
  }


function logout(){
    $this->session->sess_destroy();
    redirect(base_url()."index.php/Login/index");
}
}