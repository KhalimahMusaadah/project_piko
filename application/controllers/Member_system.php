<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_system extends PX_Controller {
	public function __construct() {
			parent::__construct();
		}

	public function index(){

	}

	function profile(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['data'] = $this->model_basic->select_where('tbl_peminjam','id_peminjam',$this->session_peminjam['id_peminjam'])->row();
		$data['content'] = $this->load->view('frontend/member_system/profile',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function barang(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['data'] = $this->model_basic->select_where('tbl_komik','status','tampilkan')->result();
		$data['content'] = $this->load->view('frontend/member_system/barang',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function barang_pinjam(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$id = $this->input->post('id');
		$data['data'] = $this->model_basic->select_where('tbl_komik','id_komik',$id)->row();
		$data['content'] = $this->load->view('frontend/member_system/barang_pinjam',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function barang_pinjam_act(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$table_field = $this->db->list_fields('tbl_pinjam');
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$limit = array(
			'id_peminjam' => $this->session_peminjam['id_peminjam'],
			'id_komik' => $insert['id_komik']
		);

		$check = $this->model_basic->select_where('tbl_komik','id_komik',$insert['id_komik'])->row();
		$limits = $this->model_basic->select_where_array('tbl_pinjam',$limit)->result();
		$check_limit = 0;
		foreach ($limits as $limit){
			$check_limit += $limit->jml;
		}
		if($check_limit + $insert['jml'] > '5'){
			$this->returnJson(array('status' => 'error','msg' => 'Jumlah Pinjam Maksimal Adalah 5!'));
		}else{
			if($check->stock < $insert['jml']){
				$this->returnJson(array('status' => 'error','msg' => 'Stock Kurang!'));
			}elseif($insert['jml'] <= '0'){
				$this->returnJson(array('status' => 'error','msg' => 'Jumlah Pinjam Tidak Boleh Nol!'));
			}else{
				if($insert){
						$update['stock'] = $check->stock - $insert['jml'];
						$do_update = $this->model_basic->update('tbl_komik',$update,'id_komik',$insert['id_komik']);
						$do_insert = $this->model_basic->insert_all('tbl_pinjam',$insert);
						$this->returnJson(array('status' => 'ok','msg' => 'Pinjam Barang Berhasil', 'redirect' => 'barang'));
				}else{
					$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
				}
			}
		}
  }

	function pinjam(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['data'] = $this->model_basic->select_where_join('tbl_pinjam','tbl_pinjam.*,tbl_komik.name','id_peminjam',$this->session_peminjam['id_peminjam'],'tbl_komik','tbl_pinjam.id_komik','tbl_komik.id_komik')->result();
		$data['content'] = $this->load->view('frontend/member_system/pinjam',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function pinjam_kembali(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$id = $this->input->post('id');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$update['status'] = '2';
		$update['tgl_kembali'] = $tgl_kembali;

		if($update){
			$do_update = $this->model_basic->update('tbl_pinjam',$update,'id_pinjam',$id);
			if($do_update){
				redirect('member_system/pinjam');
			}
		}
	}

	function riwayat(){
		$this->check_login_peminjam();
		$data['userdata'] = $this->session_peminjam;
		$data['data'] = $this->model_basic->select_where_join_2('tbl_riwayat','tbl_riwayat.*,tbl_komik.name as name_barang,tbl_peminjam.name as name_peminjam','tbl_riwayat.id_peminjam',$this->session_peminjam['id_peminjam'],'tbl_komik','tbl_riwayat.id_komik','tbl_komik.id_komik','tbl_peminjam','tbl_riwayat.id_peminjam','tbl_peminjam.id_peminjam')->result();
		$data['content'] = $this->load->view('frontend/member_system/riwayat',$data,true);
		$this->load->view('frontend/index',$data);
	}


}
