<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gaji extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		$data['gaji'] = $this->MyModel->select_gaji()->result_array();
		//$data['honor'] = $this->MyModel->select_honor()->result_array();
		
		$this->load->view('admin/index',array(
		'gaji' => $data['gaji']
		));
	}
	
	public function detail($id){
		$data['honor'] = $this->MyModel->select_honor($id)->result_array();
		
		$this->load->view('admin/index',array(
		'honor' => $data['honor']
		));
	}
	
}
?>