<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ptkp extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function index(){
		$data['ptkp'] = $this->MyModel->select_all('ptkp')->result_array();
		$this->load->view('admin/index',array(
		'ptkp' => $data['ptkp']
		));
	}
}
?>