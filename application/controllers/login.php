<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') != null){
			redirect(base_url().'index.php/dashboard');
		}
	}
	
	public function index(){
		$this->load->view('login');
	}
	
	public function register(){
		$data['degree'] = $this->MyModel->select_all_limit('salary_type',2,0)->result_array();
		$data['PTKP'] = $this->MyModel->select_all('ptkp')->result_array();
		$this->load->view('register',array(
		'degree' => $data['degree'],
		'PTKP' => $data['PTKP']
		));
	}
	
	public function do_register(){
		//config photo
		$config['upload_path']          = './assets/images/user_profile/';
		$config['allowed_types']        = 'gif|jpg|png|gif';
		$config['file_name'] 			= $_POST['username'];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('photo');
		$file_name = $this->upload->data();
		
			
			//insert to tb_user
		$this->MyModel->insert('user',array(
		'username' => $_POST['username'],
		'password' => md5($_POST['password']),
		'usertype' => 4,//$_POST['status']
		));
		
		$id = $this->MyModel->select_where('user',array('username' => $_POST['username']))->row();
			
			//insert to tb_user_detail
		$this->MyModel->insert('user_detail',array(
		'iduser' => $id->iduser,
		'name' => $_POST['name'],
		'gender' => $_POST['gender'],
		'phone' => $_POST['phone'],
		'address' => $_POST['address'],
		'photo' => $file_name['file_name'],
		'npwp' => $_POST['npwp'],
		'idptkp' => $_POST['ptkp'],
		'idsalary_type' => $_POST['degree']
		));
		$this->session->set_flashdata('status', 'Register Success');//flashdata
		redirect(base_url().'index.php/login');
	}
	
	public function do_login(){
		$user_data = $this->MyModel->select_where('user',array('username' => $_POST['username']))->row();
		if($user_data->password == md5($_POST['password'])){
			$user_detail = $this->MyModel->select_where('user_detail',array('iduser' => $user_data->iduser))->row();
			$session_data = array(
			'iduser' => $user_data->iduser,
			'username' => $user_data->username,
			'status' => $user_data->usertype,
			'name' => $user_detail->name,
			'photo' => $user_detail->photo
			);
			$this->session->set_userdata($session_data);
			redirect(base_url().'index.php/dashboard');
		}else{
			$this->session->set_flashdata('status', 'Login Fail');//flashdata
			redirect(base_url());
		}
	}
	
	
}
?>