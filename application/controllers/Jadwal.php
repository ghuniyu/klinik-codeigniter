<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		$data['jadwal'] = $this->MyModel->select_jadwal()->result_array();
		$this->load->view('admin/index',array(
		'jadwal' => $data['jadwal']
		));
	}
	
	public function input(){
		$this->load->view('admin/index');
	}
	
	public function do_input(){
		$date = strtotime($_POST['date']);
		$month =  date('m',$date);
		$year = date('Y',$date);
		$id = $this->session->userdata('iduser');
		$data['check_extra'] = $this->MyModel->select_where('schedule',array(
		'date_time' => $_POST['date']
		))->result_array();
		
		$data['check_extra'] = $this->db->query("Select * from schedule JOIN registration on schedule.idregistration = registration.idregistration where iduser = '$id' AND YEAR(date_time) = $year AND MONTH(date_time) = $month")->result_array();

		
		echo count($data['check_extra']);
		if(count($data['check_extra']) > 4){
			$extra = 1;
		}else{
			$extra = 0;
		}
		echo $extra;
		
		$this->MyModel->insert('schedule',array(
		'idregistration' => $_POST['id_registrasi'],
		'date_time' => $_POST['date'],
		'extra' => $extra
		));
		
		$this->session->set_flashdata('message', 'Insert Success');//flashdata
		redirect(base_url().'index.php/jadwal/');
		
		
	}
}
?>