<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
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
	

	public function Category($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->db->query('select * from td_category where cat_id = '.$id)->result_array();
			$this->load->view('edit_client',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function WeekendLeisures($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->db->query('select * from td_books where book_id = '.$id)->result_array();
			
			$this->load->view('edit_departments',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function Destination($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_service where service_id = '.$id)->result_array();
			$this->load->view('edit_service',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Faculty($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_faculty where f_id = '.$id)->result_array();
			$this->load->view('edit_faculty',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function GallerySlider($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_gallery_slider where img_id = '.$id)->result_array();
			$this->load->view('edit_gallery_slider',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}

	public function HotelDetails($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_quotes where service_id = '.$id)->result_array();
			$service['data1'] =$this->db->query('select * from td_multiimage where serv_id = '.$id)->result_array();
			$service['weekend'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id DESC')->result_array();
			$service['destination'] = $this->db->query('SELECT * FROM td_service ORDER BY service_id DESC')->result_array();
			$this->load->view('edit_quotes',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}

	public function Principal($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_whybooks where why_id = '.$id)->result_array();
			$this->load->view('edit_why',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function CourseIntake($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_course_intake where why_id = '.$id)->result_array();
			$this->load->view('edit_course_intake',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function FeesStructure($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_fees where fee_id = '.$id)->result_array();
			$this->load->view('edit_fees',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	
	 public function Editprofile()
     {
	     if ( isset($_SESSION['user'])) {
	     	$service['data'] = $this->db->query('select * from td_admin')->result_array();
	     	$this->load->view('edit_profile',$service);
	     }
	    else {
	    	redirect(base_url().'admin.php');
	      }	
     }
}
