<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
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
	public function index()
	{
		$this->load->view('login');
	}
	public function fileUpload()
	{
		$this->load->view('multifiles');
	}
	
	public function login()
	{
		$uname = $this->input->post('txt_username');
		$pass = $this->input->post('txt_password');
		$show = $this->base_model->show_data('td_admin','*','')->result_array();
		
		//$exp = (',',$show['result']);
		$db_uname = $show[0]['user'];
		$db_pass = $show[0]['pass'];
			if ( $db_uname == $uname && $db_pass == $pass) {
				$_SESSION['user'] = $uname;
				$_SESSION['passw'] = $pass;
				$_SESSION['name'] = $show[0]['name'];
				$_SESSION['photo'] = $show[0]['photo'];
				redirect(base_url().'admin.php/Index/dashboard');
			}
			else {
				$this->load->view('login');
			}	
	}
	public function dashboard()
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->db->query('SELECT * FROM td_category ORDER BY cat_id DESC')->result_array();		
			$this->load->view('dashboard',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	// public function dashboard()
	// {
	// 	if ( isset($_SESSION['user'])) {
	// $service['data'] = $this->db->query('SELECT * FROM td_category ORDER BY cat_id DESC')->result_array();		
	// $this->load->view('view_client',$service);
	// }
	// else {
	// redirect(base_url().'admin.php');
	// }
	// }
      
	public function WeekendLeisures()
	{
		if ( isset($_SESSION['user'])) {	
			$this->load->view('client_add');
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Destination()
	{
		if ( isset($_SESSION['user'])) {
			$this->load->view('service_add');
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Package()
	{
		if ( isset($_SESSION['user'])) {
			$this->load->view('package');
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function GallerySlider()
	{
		if ( isset($_SESSION['user'])) {
			$this->load->view('gallery_slider');
		}
		else {
			redirect(base_url().'admin.php');
		}
	}

	public function HotelDetails()
	{
		if ( isset($_SESSION['user'])) {
			$service['weekend'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id DESC')->result_array();
			$service['destination'] = $this->db->query('SELECT * FROM td_service ORDER BY service_id DESC')->result_array();	
			$this->load->view('quotes_add',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}

	public function Principal()
	{
		if ( isset($_SESSION['user'])) {
			$this->load->view('why_books');
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function CourseIntake()
	{
		if ( isset($_SESSION['user'])) {
			$this->load->view('course_intake');
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function FeesStructure()
	{
		if ( isset($_SESSION['user'])) {
			$this->load->view('fees');
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	
	public function logout()
    {
     session_destroy();
     redirect(base_url().'admin.php');
     }
	
}
