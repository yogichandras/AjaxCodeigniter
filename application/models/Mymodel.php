<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	// public function GetMemberFree($where=""){
	// 	$data = $this->db->query('select * from member_free ' .$where);
	// 	return $data->result_array();
	// }

	// public function GetMemberPremium($where=""){
	// 	$data = $this->db->query('select * from member_premium ' .$where);
	// 	return $data->result_array();
	// }

	// public function GetType($where=""){
	// 	$type = $this->db->query('select * from paket ' .$where);
	// 	return $type->result_array();
	// }

	// public function GetModul($where=""){
	// 	$modul = $this->db->query('select * from modul ' .$where);
	// 	return $modul->result_array();
	// }


	// public function GetHistory($where=""){
	// 	$type = $this->db->query('select * from withdraw ' .$where);
	// 	return $type->result_array();
	// }


	// public function GetBroadcast(){
	// 	$broadcast = $this->db->query('select * from broadcast ');
	// 	$total = $broadcast->num_rows();
	// 	return $total;
	// }

	// public function GetBroadcast2($where=""){
	// 	$br = $this->db->query('select * from broadcast ' .$where);
	// 	return $br->result_array();
	// }

	// public function Admin($where=""){
	// 	$admin = $this->db->query('select * from admin ' .$where);
	// 	return $admin->result_array();
	// }

	// public function InsertData($tableName,$data){
	// 	$res = $this->db->insert($tableName,$data);
	// 	return $res;
	// }

	// public function InsertDataPremium($tableName,$data){
	// 	$res = $this->db->insert($tableName,$data);
	// 	return $res;
	// }

	// public function UpdateData($tableName,$data,$where){
	// 	$res = $this->db->update($tableName,$data,$where);
	// 	return $res;
	// }
	// public function DeleteData($tableName,$where){
	// 	$res = $this->db->delete($tableName,$where);
	// 	return $res;
	// }

	function user_list(){
		$hsl=$this->db->get('user');
		return $hsl;
	}
	function get_all_user() { //ambil data barang dari table barang yang akan di generate ke datatable
        $this->datatables->select('id,username,password,status');
        $this->datatables->from('user');
        $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id="$1" data-username="$2" data-password="$3" data-status="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1">Hapus</a>','id,username,password,status');
        return $this->datatables->generate();
  }

  function get_all_admin_user(){
	$this->datatables->select('id,username,password,status');
	$this->datatables->from('user');
	$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id="$1" data-username="$2" data-password="$3" data-status="$4" style="display:none;">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1" style="display:none;">Hapus</a>','id,username,password,status');
	return $this->datatables->generate();
  }  

  function get_surat_masuk() { //ambil data barang dari table barang yang akan di generate ke datatable
	$this->datatables->select('no_surat,tanggal_masuk,tanggal_keluar,perihal,lampiran,tujuan,dari,content');
	$this->datatables->from('surat_masuk');
	$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-no_surat="$1" data-tanggal_masuk="$2" data-tanggal_keluar="$3" data-perihal="$4" data-lampiran="$5" data-tujuan="$6 data-dari="$7" data-content="$8">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-no_surat="$1">Hapus</a>','no_surat,tanggal_masuk,tanggal_keluar,perihal,lampiran,tujuan,dari,content');
	return $this->datatables->generate();
}
	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function GetUser($where=""){
	$data = $this->db->query('select * from user ' .$where);
	return $data->result_array();
	}
}
