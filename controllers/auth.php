<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['base']=$this->config->item('base_url');
		$data['lat']=$this->session->userdata('lat');
		$data['lng']=$this->session->userdata('lng');
		$data['signin']=$this->session->userdata('signin');
		$data['reset']=$this->session->userdata('reset');
		$data['user']=$this->session->userdata('user');
		$data['userforgot']=$this->session->userdata('userforgot');
		$data['quest']=$this->session->userdata('quest');
		$data['answer']=$this->session->userdata('answer');
		$data['cek']=$this->session->userdata('cek');
		$data['cekuser']=$this->session->userdata('cekuser');
		$data['usersama']=$this->session->userdata('usersama');
		$data['judul']="Sign In";
		$data['isi']="auth_v";
		$this->load->view('home_new_v',$data);
	}
	public function forgotpass(){
		$username=$this->input->post('tuser');
		$jumlah=$this->db->query("select * from user where username='$username'");
		if ($jumlah->num_rows()==0){
			$ganteng=array(
				'cekuser'=>'false',
				'reset' => 'false',
				'userforgot' =>''
			);
		}else{
			foreach($jumlah->result() as $ambil){
				$username=$ambil->username;
				$quest=$ambil->quest;
				$ganteng=array(
					'cekuser'=>'true',
					'userforgot'=>$username,
					'reset' => 'false',
					'quest'=>$quest
				);
			}

		}
		$this->session->set_userdata($ganteng);
		redirect($this->input->get('last_url'));
	}
	public function forgotpass_cekjawab($userforgot,$quest){
		$answer=$this->input->post('tanswer');
		$jumlah=$this->db->query("select * from user where username='$userforgot' and answer='$answer'");
		if ($jumlah->num_rows()==0){
			$ganteng=array(
				'cekuser'=>'true',
				'reset' => 'false',
				'userforgot' =>$userforgot,
				'quest'=>$quest,
				'answer' => 'false'
			);
		}else{
			foreach($jumlah->result() as $ambil){
				$username=$ambil->username;
				$quest=$ambil->quest;
				$answer=$ambil->answer;
				$ganteng=array(
					'cekuser'=>'true',
					'userforgot'=>$username,
					'reset' => 'false',
					'quest'=>$quest,
					'answer'=>$answer
				);
			}

		}
		$this->session->set_userdata($ganteng);
		redirect($this->input->get('last_url'));
	}
	public function forgotpass_renew($userforgot){
		$password=md5($this->input->post('tpass'));
		$repassword=md5($this->input->post('trepass'));
		$cek=strcmp($password,$repassword);
		if($cek==0){
			$this->db->query("update user set password='$password' where username='$userforgot'");
			$ganteng=array(
				'signin'=>'true',
				'reset' => 'false',
				'cek' => 'true',
				'user' => $userforgot
			);
		}else{
			$ganteng=array(
				'signin'=>'',
				'reset' => 'false',
				'cek' => 'false'
			);
		}
		$this->session->set_userdata($ganteng);
		redirect($this->input->get('last_url'));

	}
	public function signin(){
		$username=$this->input->post('user');
		$password=$this->input->post('password');
		$jumlah=$this->db->query("select * from user where username='$nim' and password='$password'");
		if ($jumlah->num_rows()==0){
			$ganteng=array(
				'signin'=>'false',
				'reset' => 'false'
			);

			$this->session->set_userdata($ganteng);
			redirect($this->input->get('indexHome'));
		}else{
			foreach($jumlah->result() as $ambil){
				$username=$ambil->username;
				$ganteng=array(
					'signin'=>'true',
					'user'=>$username,
					'reset' => 'false'
				);
			}
			$this->session->set_userdata($ganteng);
			redirect('indexHome');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('home_new');
	}
	public function reset(){
		$ganteng=array(
			'cek' => '',
			'usersama' => '',
			'cekuser' => '',
			'reset' => 'true',
			'quest' => '',
			'userforgot' => '',
			'answer' => ''
		);
		$this->session->set_userdata($ganteng);
		redirect($this->input->get('last_url'));
	}
}
