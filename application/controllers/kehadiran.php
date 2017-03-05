<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kehadiran extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		$data['kehadiran'] = $this->MyModel->select_attendante($this->session->userdata('iduser'))->result_array();
		$data['kehadiran_admin'] = $this->MyModel->select_not_attendante()->result_array();
		
		$data['kehadiran_karyawan'] = $this->MyModel->select_attendante_employee($this->session->userdata('iduser'))->result_array();
		$this->load->view('admin/index',array(
		'kehadiran' => $data['kehadiran'],
		'kehadiran_admin' => $data['kehadiran_admin'],
		'kehadiran_karyawan' => $data['kehadiran_karyawan']
		));
	}
	
	public function absen(){
		if($this->session->userdata('status') == 4){
			$this->MyModel->insert('attendance',array(
			'iduser' => $this->session->userdata('iduser'),
			'approve' => 0
			));
		}else if($this->session->userdata('status') == 3){
			$this->MyModel->insert('attendance',array(
			'iduser' => $this->session->userdata('iduser'),
			'approve' => 1
			));
		}
		
		
		$this->session->set_flashdata('status_1', 'Absent Complete');//flashdata
		redirect(base_url().'index.php/kehadiran');
	}
	
	public function acc($id,$action){
		if($action == 0){
			$this->MyModel->delete_data('attendance',array('idattendance' => $id));
			$this->session->set_flashdata('status_1', 'Remove Complete');//flashdata
		}else{
			$this->MyModel->update('attendance',array('approve' => 1),array('idattendance' => $id));
			$this->session->set_flashdata('status_1', 'Accept Complete');//flashdata
		}
		redirect(base_url().'index.php/kehadiran');
	}
	
	public function rekap_kehadiran(){
		$data['kehadiran'] = $this->MyModel->select_attendante_report()->result_array();
		$this->load->view('admin/index',array('kehadiran' => $data['kehadiran']));
	}
}
?>