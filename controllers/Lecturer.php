<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->load->helper('url');

	}
	public function index()
	{
		$this->load->view('lecturer/log');
	}
	public function indexHome()
	{
		$this->load->view('lecturer/index');
	}
	public function hasilSurvey()
	{
		$this->load->view('lecturer/hasilsurvey');
	}
	public function panduan()
	{
		$this->load->view('lecturer/panduan');
	}
	public function Profil()
	{
		$this->load->view('lecturer/profil');
	}
	public function eror()
	{
		$this->load->view('lecturer/404');
	}
	public function modalLockme()
	{
		$this->load->view('lecturer/modal.lockme');
	}
	public function login(){
		$username=$this->input->POST('tusername');
		$password=md5($this->input->POST('tpassword'));
		$tampung=$this->user->login($username,$password)->num_rows();
		if($tampung==0){
			echo "<script>alert('salah')</script>";
		}
		else{
			echo "<script>alert('benar')</script>";

		}
			echo "<script>document.location.href='http://facebook.com'</script>";

	}
}
