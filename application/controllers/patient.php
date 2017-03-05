<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class patient extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		$data['patient'] = $this->MyModel->select_all('patient')->result_array();
		$this->load->view('admin/index',array('patient' => $data['patient']));
	}
	
	public function patient_list(){
		$data['patient'] = $this->MyModel->select_all('patient')->result_array();
		$this->load->view('admin/patient_list',array('patient' => $data['patient']));
	}

	public function input(){
		$this->load->view('admin/index');
	}
	
	public function do_input(){
		var_dump($_POST);
		$this->MyModel->insert('patient',array(
		'patientname' => $_POST['name'],
		'gender' => $_POST['gender'],
		'bod' => $_POST['birthday'],
		'address' => $_POST['address'],
		'phone' => $_POST['phone']
		));
		redirect(base_url().'index.php/patient');
	}
}

?>