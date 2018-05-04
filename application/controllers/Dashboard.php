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
    $username = $this->session->userdata('username');
    $data = $this->Mymodel->GetUser("where username = '$username'");
    $data2 = array(
        "username" => $data[0]['username'],
        "status" => $data[0]['status']
    );

    if($data2['status'] == "super_admin"){
        header('Content-Type: application/json');
        echo $this->Mymodel->get_all_user();
    }
    else{
        header('Content-Type: application/json');
        echo $this->Mymodel->get_all_admin_user();
    }
   
  

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

    $where = array(
        'no_surat' => "SRT-2018-0001"
     );

     $query = $this->Mymodel->cek_login("surat_masuk",$where)->num_rows();
                        //cek dulu apakah ada sudah ada kode di tabel.    
     if($query <> 0){      
      //jika kode ternyata sudah ada.      
      $data = $query;      
      $kode = $data + 1;    
     }
     else {      
      //jika kode belum ada      
     $kode = 1;    
     }
     
     $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
     $kodejadi = "SRT-2018-".$kodemax;    // hasilnya ODJ-9921-0001 dst.

    $tgl_masuk = date('Y-m-d H:i:s');
    $tgl_keluar = $this->input->post('tanggal_keluar');
    $perihal = $this->input->post('perihal');
    $lampiran = $this->input->post('lampiran');
    $tujuan = $this->input->post('tujuan');
    $dari = $this->input->post('dari');
    $content = $this->input->post('content');
    
    $data= array(
    'no_surat' => $kodejadi,
    'tanggal_masuk' => $tgl_masuk,
    'tanggal_keluar' => $tgl_keluar,
    'perihal' => $perihal,
    'lampiran' => $lampiran,
    'tujuan' => $tujuan,
    'dari' => $dari,
    'content' => $content
    );
    $this->db->insert('surat_masuk', $data);
    redirect('Dashboard/surat_masuk');
  }

  function update_surat_masuk(){
    $no_surat = $this->input->post('no_surat');
    $tgl_masuk = $this->input->post('tanggal_masuk');
    $tgl_keluar = $this->input->post('tanggal_keluar');
    $perihal = $this->input->post('perihal');
    $lampiran = $this->input->post('lampiran');
    $tujuan = $this->input->post('tujuan');
    $dari = $this->input->post('dari');
    $content = $this->input->post('content');
    
    $data= array(
    'no_surat' => $no_surat,
    'tanggal_masuk' => $tgl_masuk,
    'tanggal_keluar' => $tgl_keluar,
    'perihal' => $perihal,
    'lampiran' => $lampiran,
    'tujuan' => $tujuan,
    'dari' => $dari,
    'content' => $content
    );
    $this->db->where('no_surat',$no_surat);
    $this->db->update('surat_masuk', $data);
    redirect('Dashboard/surat_masuk');
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