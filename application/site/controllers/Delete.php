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
	
	public function Service($id)
	{
		if ( isset($_SESSION['user'])) {
			$service=  $this->db->query('delete from td_service where service_id = '.$id);
			redirect(base_url().'admin.php/view/Service');
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

	public function Books($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_books where book_id = '.$id);
			redirect(base_url().'admin.php/view/Books');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function Blog($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_service where service_id = '.$id);
			redirect(base_url().'admin.php/view/Blog');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}
	public function Quotes($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_quotes where service_id = '.$id);
			redirect(base_url().'admin.php/view/Quotes');
		}
		else {
			redirect(base_url().'admin.php');
		}	
	}

	public function whyBooks($id)
	{
		if ( isset($_SESSION['user'])) {
			$service= $this->db->query('delete from td_whyBooks where why_id = '.$id);
			redirect(base_url().'admin.php/view/whyBooks');
		}
		else {
			redirect(base_url().'admin.php');
			}	
	}
	
}
