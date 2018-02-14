<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
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

public function Category()
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->base_model->show_data('td_category','*','')->result_array();
			$this->load->view('view_client',$service);
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function Books()
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->base_model->show_data('td_books','*','')->result_array();
			$this->load->view('view_books',$service);
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function Blog()
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->base_model->show_data('td_service','*','')->result_array();
			$this->load->view('view_service',$service);
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function Quotes()
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->base_model->show_data('td_quotes','*','')->result_array();
			$this->load->view('view_quotes',$service);
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function whyBooks()
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->base_model->show_data('td_whyBooks','*','')->result_array();
			$this->load->view('view_why',$service);
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	
	
	
}
