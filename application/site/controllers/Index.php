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
	$Advert['package'] = $this->db->query("SELECT * FROM td_service WHERE publish=1")->result_array();
	$Advert['bottom'] = $this->db->query("SELECT * FROM td_service ORDER BY service_id ASC LIMIT 9")->result_array();
		$this->load->view('index',$Advert);
	}
	
	
	
}
