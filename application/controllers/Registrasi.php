<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		//$data['registrasi'] = $this->MyModel->select_all('registration')->result_array();
		$data['registrasi'] = $this->MyModel->select_registration_list()->result_array();
		$this->load->view('admin/index',array('registrasi' => $data['registrasi']));
	}

	public function input(){
		$data['service'] = $this->MyModel->select_all('service')->result_array();
		$this->load->view('admin/index',array(
		'service' => $data['service']
		));
	}
	
	public function do_input(){
		$this->MyModel->insert('registration',array(
		'idpatient' => $_POST['id_patient'],
		'iduser' => $this->session->userdata('iduser'),
		'idservice' => $_POST['service'],
		'reg_date' => date("Y-m-d")
		));
		$this->session->set_flashdata('status', 'Insert Success');//flashdata
		redirect(base_url().'index.php/registrasi');
	}
	
	public function registrasi_list(){
		$data['registrasi'] = $this->MyModel->select_registration_list()->result_array();
		$this->load->view('admin/registrasi_list',array('registrasi' => $data['registrasi']));
	}
}
?>