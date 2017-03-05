<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function logout(){
		$session_data_logout = array(
			'username','status','name','photo'
			);
		$this->session->unset_userdata($session_data_logout);
		redirect(base_url().'index.php/login');
	}
	
	public function index(){
		$this->load->view('admin/index');
	}
	
	public function update_profile(){
		$res = $this->MyModel->show_profile()->row();
		$data['degree'] = $this->MyModel->select_all_limit('salary_type',2,0)->result_array();
		$data['PTKP'] = $this->MyModel->select_all('ptkp')->result_array();
		$this->load->view('update',array(
		'data' => $res,
		'degree' => $data['degree'],
		'PTKP' => $data['PTKP']
		));
	}
	
	public function do_update_profile(){
		if(isset($_FILES['photo']) && $_FILES['photo']['size'] > 0){
			unlink("./assets/images/user_profile/".$this->session->userdata('photo'));
			$config['upload_path']          = './assets/images/user_profile/';
			$config['allowed_types']        = 'gif|jpg|png|gif';
			$config['file_name'] 			= $_POST['username'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			$file_name = $this->upload->data();
			
			$this->MyModel->update('user_detail',array(
			'name' => $_POST['name'],
			'gender' => $_POST['gender'],
			'phone' => $_POST['phone'],
			'address' => $_POST['address'],
			'photo' => $file_name['file_name'],
			'npwp' => $_POST['npwp'],
			'idptkp' => $_POST['ptkp'],
			'idsalary_type' => $_POST['idsalary_type'],
			),array('iduser',$this->session->userdata('iduser')));
			
			$session_data = array(
			'iduser' => $this->session->userdata('iduser'),
			'username' => $_POST['username'],
			'status' => $this->session->userdata('status'),
			'name' => $_POST['name'],
			'photo' => $file_name['file_name']
			);
			
		}else{
			$this->MyModel->update('user_detail',array(
			'name' => $_POST['name'],
			'gender' => $_POST['gender'],
			'phone' => $_POST['phone'],
			'address' => $_POST['address'],
			'npwp' => $_POST['npwp'],
			'idptkp' => $_POST['ptkp'],
			'idsalary_type' => $_POST['idsalary_type'],
			),array('iduser',$this->session->userdata('iduser')));
			
			$session_data = array(
			'iduser' => $this->session->userdata('iduser'),
			'username' => $_POST['username'],
			'status' => $this->session->userdata('status'),
			'name' => $_POST['name'],
			'photo' => $this->session->userdata('photo')
			);
			
		}
		$this->MyModel->update('user',array(
		'username' => $_POST['username'],
		'password' => $_POST['password']
		),array('iduser',$this->session->userdata('iduser')));
		
			
			$this->session->set_userdata($session_data);
		
		redirect(base_url().'index.php/dashboard');
	}
	
}
?>