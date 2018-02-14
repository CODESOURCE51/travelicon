<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
$this->load->helper('date');
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
	
	public function Blog()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_service');
			$note = $this->input->post('txt_notes');
			$date = $this->input->post('txt_date');
			$type = $this->input->post('txt_btype');
			$fields = array(
				'service_name' => $service,
				'note' => $note,
				'date' => $date,
				'type' => $type,
			);
			$service = $this->base_model->form_post('td_service',$fields);
				if($service)
				{
					redirect(base_url().'admin.php/Index/Blog');
				}
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function Quotes()
	{
			if ( isset($_SESSION['user'])) {
				$service = $this->input->post('txt_service');
				$note = $this->input->post('txt_notes');
				$type = $this->input->post('txt_btype');
				$fields = array(
					'service_name' => $service,
					'note' => $note,
					'type' => $type,
				);
				$service = $this->base_model->form_post('td_quotes',$fields);
					if($service)
					{
						redirect(base_url().'admin.php/Index/Quotes');
					}
			}
			else {
				redirect(base_url().'admin.php');
			}
	}

	public function Books()
	{
			if ( isset($_SESSION['user'])) {
				$cat = $this->input->post('txt_category');
				$cbook = $this->db->query('SELECT * FROM td_books WHERE cat="'.$cat.'"')->num_rows();
					if($cbook > 10) {
						print '<script>';
						print 'alert("You Have Exceeded Maximum Entry")';
						print '</script>';
						echo "<script type='text/javascript'> window.location= 'http://localhost/modhuMickel/admin.php/Index/AddBooks'; </script>";
					} 
					else {
							$name = $this->input->post('txt_client');
							$author = $this->input->post('txt_phn');
							$price = $this->input->post('txt_email');
							$disc = $this->input->post('txt_company');
							$decr = $this->input->post('txt_address');
							$cprice = $this->input->post('txt_curr_price');
							$imges = $_FILES["txt_file"]["name"];
							$exp = explode('.',$imges);
							$image = $exp[0].time().'.'.$exp[1];
							$temp = $_FILES["txt_file"]["tmp_name"];
							$fields = array(
								'cat' => $cat,
								'book_name' => $name,
								'auth_name' => $author,
								'price' => $price,
								'discount' => $disc,
								'cprice' => $cprice,
								'description' => $decr,
								'bimage' => $image
							);
							$service = $this->base_model->form_post('td_books',$fields);
								if($service)
								{
									$this->base_model->books_upload($image,$temp);
								redirect(base_url().'admin.php/Index/AddBooks');
								}
						}
				}
				else {
						redirect(base_url().'admin.php');
				}
	
	}
	public function whyBooks()
	{
			if ( isset($_SESSION['user'])) {
				$note = $this->input->post('txt_notes');
				$fields = array(
					'note' => $note,
				);
				$service = $this->base_model->form_post('td_whyBooks',$fields);
					if($service)
					{
						redirect(base_url().'admin.php/Index/whyBooks');
					}
			}
			else {
				redirect(base_url().'admin.php');
			}
	}
	
}
