<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		$data['karyawan'] = $this->MyModel->select_all_karyawan()->result_array();
		$this->load->view('admin/index',array(
		'karyawan' => $data['karyawan']
		));
	}
}
?>