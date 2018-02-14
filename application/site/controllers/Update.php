<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {
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
	public function whyBooks()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$note = $this->input->post('txt_notes');
			$fields = array(
				'note' => $note
			);
			$service = $this->base_model->why_update('td_whyBooks',$fields,$cid);
				if($service)
				{
					redirect(base_url().'admin.php/view/whyBooks');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Service()
	{
		if ( isset($_SESSION['user'])) {
				$cid = $this->input->post('cid');
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
				$service = $this->base_model->service_update('td_service',$fields,$cid);
					if($service)
					{
						redirect(base_url().'admin.php/view/Blog');
					}
		}
		else {
				redirect(base_url().'admin.php');
				}
	}
	public function Quotes()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$service = $this->input->post('txt_service');
			$note = $this->input->post('txt_notes');
			$type = $this->input->post('txt_btype');
			$fields = array(
				'service_name' => $service,
				'note' => $note,
				'type' => $type,
			);
			$service = $this->base_model->service_update('td_quotes',$fields,$cid);
				if($service)
				{
					redirect(base_url().'admin.php/view/Quotes');
				}
			}
		else {
			redirect(base_url().'admin.php');
		}
	}

	public function Category()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$name = $this->input->post('txt_client');
			$fields = array(
				'category_name' => $name,	
			);
			$service = $this->base_model->category_update('td_category',$fields,$cid);
				if($service)
				{
					redirect(base_url().'admin.php/view/Category');
				}
			}
		else {
			redirect(base_url().'admin.php');
			}
	}

	public function Books()
	{
		if ( isset($_SESSION['user'])) {
			$book_id = $this->input->post('cid');
			$cat = $this->input->post('txt_category');
			$name = $this->input->post('txt_client');
			$author = $this->input->post('txt_phn');
			$price = $this->input->post('txt_email');
			$disc = $this->input->post('txt_company');
			$decr = $this->input->post('txt_address');
			$cprice = $this->input->post('txt_curr_price');
			
			$fields = array(
				'cat' => $cat,
				'book_name' => $name,
				'auth_name' => $author,
				'price' => $price,
				'discount' => $disc,
				'cprice' => $cprice,
				'description' => $decr
			);
			$service = $this->base_model->form_update('td_books',$fields,$book_id);
				if($service)
				{
					redirect(base_url().'admin.php/Edit/Books/'.$book_id);
				}
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function BooksImage()
	{
		if ( isset($_SESSION['user'])) {
			$book_id = $this->input->post('cid');
			$imges = $_FILES["txt_file"]["name"];
			$exp = explode('.',$imges);
			$image = $exp[0].time().'.'.$exp[1];
			$temp = $_FILES["txt_file"]["tmp_name"];
			$fields = array(
				'bimage' => $image
			);
			$service = $this->base_model->form_update('td_books',$fields,$book_id);
				if($service)
				{
					$this->base_model->books_upload($image,$temp);
					redirect(base_url().'admin.php/view/Books');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}

	
	public function Profile()
{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('prof_id');
		$name = $this->input->post('txt_aname');
		$username = $this->input->post('txt_username');
		$pass = $this->input->post('txt_pass');

		$fields = array(
		'name' => $name,
		'user' => $username,
		'pass' => $pass
		);
		$service = $this->base_model->profile_update('td_admin',$fields,$cid);
			if($service)
				{
				redirect(base_url().'admin.php/Index/logout');
				}
		}
	else {
		redirect(base_url().'admin.php');
		}
}


public function ProfileImage()
{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('prof_id');
		$imges = $_FILES["txt_file"]["name"];
		$exp = explode('.',$imges);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["txt_file"]["tmp_name"];
		$fields = array(
		'photo' => $image
		);
		$service = $this->base_model->profile_update('td_admin',$fields,$cid);
			if($service)
			{
				$this->base_model->file_upload($image,$temp);
				$_SESSION['photo'] = '';
				$show = $this->base_model->show_data('td_admin','*','')->result_array();
				$_SESSION['photo'] = $show[0]['photo'];
				redirect(base_url().'admin.php/Index/dashboard');
			}
		}
	else {
		redirect(base_url().'admin.php');
		}
}

	
}