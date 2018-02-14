<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
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
	
	public function Destination($id)
	{
		if ( isset($_SESSION['user'])) {
			$service=  $this->db->query('delete from td_service where service_id = '.$id);
			redirect(base_url().'admin.php/view/Destination');
		}
		else {
			redirect(base_url().'index.php');
		}	
	}

	public function Category($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_category where cat_id = '.$id);
			redirect(base_url().'admin.php/Index/dashboard');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}

	public function WeekendLeisures($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_books where book_id = '.$id);
			redirect(base_url().'admin.php/view/WeekendLeisures');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function College($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_service where service_id = '.$id);
			redirect(base_url().'admin.php/view/College');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function Package($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_package where pack_id = '.$id);
			$service1= $this->db->query('delete from td_package_offer where package_id = '.$id);
			redirect(base_url().'admin.php/view/Package');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function GallerySlider($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_gallery_slider where img_id = '.$id);
			redirect(base_url().'admin.php/view/GallerySlider');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function HotelDetails($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_quotes where service_id = '.$id);
			redirect(base_url().'admin.php/view/HotelDetails');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function multi($id,$eid)
	{
		if ( isset($_SESSION['user'])) {
			echo 'delete from td_multiimage where mid = '.$id;die;exit;
			$service= $this->db->query('delete from td_multiimage where mid = '.$id);
			redirect(base_url().'admin.php/Edit/HotelDetails/'.$eid);
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function Principal($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_whybooks where why_id = '.$id);
			redirect(base_url().'admin.php/view/Principal');
		}
		else {
			redirect(base_url().'admin.php');
			}	
	}
	public function CourseIntake($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_course_intake where why_id = '.$id);
			redirect(base_url().'admin.php/view/CourseIntake');
		}
		else {
			redirect(base_url().'admin.php');
			}	
	}
	public function FeesStructure($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_fees where fee_id = '.$id);
			redirect(base_url().'admin.php/view/FeesStructure');
		}
		else {
			redirect(base_url().'admin.php');
			}	
	}
	
}
