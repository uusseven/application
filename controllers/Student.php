<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
		$this->load->view('student/log');
	}
	
	public function indexHome()
	{
		$this->load->view('student/index');
	}
	
	public function Survey()
	{
		$this->load->view('student/survey');
	}
	
	public function panduan()
	{
		$this->load->view('student/panduab');
	}
	
	public function eror()
	{
		$this->load->view('student/404');
	}
	
	public function Profil()
	{
		$this->load->view('student/profil');
	}
	public function pass()
	{
		$this->load->view('student/gantipassword');
	}
}
