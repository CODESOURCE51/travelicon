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
	public function Books($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data1'] = $this->db->query('select * from td_category order by cat_id asc')->result_array();
			$service['data'] = $this->db->query('select * from td_books where book_id = '.$id)->result_array();
			$this->load->view('edit_books',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function Blog($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_service where service_id = '.$id)->result_array();
			$this->load->view('edit_service',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}

	public function Quotes($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_quotes where service_id = '.$id)->result_array();
			$this->load->view('edit_quotes',$service);
		}
		else {
			redirect(base_url().'admin.php');
		}
	}

	public function whyBooks($id)
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] =$this->db->query('select * from td_whyBooks where why_id = '.$id)->result_array();
			$this->load->view('edit_why',$service);
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
