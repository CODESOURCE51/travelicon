<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
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
	public function listings($cat)
	{
		$category['Data'] = $this->db->query('SELECT * FROM td_category ORDER BY cat_id ASC')->result_array();
		$category['Books'] = $this->db->query('SELECT * FROM td_books WHERE cat ="'.$cat.'"')->result_array();
		$category['count'] = $this->db->query('SELECT * FROM td_books WHERE cat ="'.$cat.'"')->num_rows();
		$this->load->view('category-list',$category);
	}

	public function Details($id,$name)
	{
		$nme = base64_decode($name);
		$category['Data'] = $this->db->query('SELECT * FROM td_category ORDER BY cat_id ASC')->result_array();
		$category['Books'] = $this->db->query('SELECT * FROM td_books WHERE book_id ='.$id.' AND book_name ="'.$nme.'"')->result_array();
		$this->load->view('product-details',$category);
	}
	
	
}
