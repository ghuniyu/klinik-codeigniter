<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model {
	
	public function select_all($tableName){
		return $this->db->get($tableName);
	}
	
	public function select_all_limit($tableName, $limit1, $limit2 ){
		return $this->db->get($tableName,$limit1,$limit2);
	}
	
	public function select_where($tableName, $where){
		return $this->db->get_where($tableName,$where);
	}
	
	public function select_attendante($username){
		date_default_timezone_set("Asia/Bangkok");
		$date2 = DATE('Y-m-d');
		return $this->db->query("Select date from attendance where iduser = '$username'  and DATE(date) = '$date2'");	
	}
	
	public function select_attendante_employee($username){
		date_default_timezone_set("Asia/Bangkok");
		$date = DATE('Y-m-d');
		return $this->db->query("Select DATE(reg_date) from registration where iduser = '$username' and reg_date = '$date'");	
	}
	
	public function select_not_attendante(){
		//$this->db->query("Select * from attendance where approve = 0");
		$this->db->select('*');
		$this->db->from('attendance');
		$this->db->join('user_detail', 'user_detail.iduser = attendance.iduser');
		$this->db->where('approve',0);
		return $this->db->get();
	}
	
	public function select_attendante_report(){
		$this->db->select('*');
		$this->db->from('attendance');
		$this->db->join('user_detail', 'user_detail.iduser = attendance.iduser');
		return $this->db->get();
	}
	
	public function select_registration_list(){
		$this->db->select('*');
		$this->db->from('registration');
		$this->db->join('patient', 'patient.idpatient = registration.idpatient');
		$this->db->join('service', 'service.idservice = registration.idservice');
		$this->db->join('user_detail', 'user_detail.iduser = registration.iduser');
		$this->db->where('registration.iduser',$this->session->userdata('iduser'));
		return $this->db->get();
	}
	
	public function select_jadwal(){
		$this->db->select('*');
		$this->db->from('schedule');
		$this->db->join('registration', 'registration.idregistration = schedule.idregistration');
		$this->db->join('patient', 'patient.idpatient = registration.idpatient');
		$this->db->join('service', 'service.idservice = registration.idservice');
		$this->db->join('user_detail', 'user_detail.iduser = registration.iduser');
		return $this->db->get();
	}
	
	public function select_gaji(){
		/*$this->db->select('*');
		$this->db->from('schedule');
		$this->db->join('registration', 'schedule.idregistration = registration.idregistration');
		$this->db->join('attendance', 'registration.iduser = attendance.iduser');
		$this->db->join('user_detail', 'user_detail.iduser = registration.iduser');
		$this->db->join('salary_type', 'user_detail.idsalary_type = salary_type.idsalary_type');
		return $this->db->get();*/
		return $this->db->query("SELECT COUNT(schedule.idschdule) as total_hadir, user_detail.name, YEAR(schedule.date_time) as tahun, MONTH(schedule.date_time) as bulan, salary_type.nominal, schedule.extra FROM schedule JOIN registration ON schedule.idregistration = registration.idregistration JOIN attendance on registration.iduser = attendance.iduser JOIN user_detail ON registration.iduser = user_detail.iduser JOIN salary_type ON user_detail.idsalary_type = salary_type.idsalary_type WHERE attendance.approve = 1 GROUP BY registration.iduser, YEAR(schedule.date_time), MONTH(schedule.date_time), schedule.extra");
	}
	public function select_honor($id){
		$this->db->select('*');
		$this->db->from('schedule');
		$this->db->join('registration', 'schedule.idregistration = registration.idregistration');
		$this->db->join('attendance', 'registration.iduser = attendance.iduser');
		$this->db->join('user_detail', 'user_detail.iduser = registration.iduser');
		$this->db->join('salary_type', 'user_detail.idsalary_type = salary_type.idsalary_type');
		$this->db->where('registration.iduser',$id);
		return $this->db->get();
	}
	
	public function select_all_karyawan(){
		$this->db->select('*');
		$this->db->from('user_detail');
		$this->db->join('ptkp', 'user_detail.idptkp = ptkp.idptkp');
		$this->db->join('salary_type', 'user_detail.idsalary_type = salary_type.idsalary_type');
		return $this->db->get();
	}
	
	public function show_profile(){
		$this->db->select('*');
		$this->db->from('user_detail');
		$this->db->join('user', 'user_detail.iduser = user.iduser');
		$this->db->join('user_type', 'user.usertype = user_type.id_usertype');
		$this->db->where('user_detail.iduser',$this->session->userdata('iduser'));
		return $this->db->get();
	}
	
	public function insert($tableName, $data){
		return $this->db->insert($tableName,$data);
	}
	
	public function update($tableName, $data, $where){
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update($tableName);
	}
	
	public function delete_data($tableName, $where){
		$this->db->where($where);
		$this->db->delete($tableName);
	}
}
?>