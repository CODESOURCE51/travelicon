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
	public function Principal()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$note = $this->input->post('txt_notes');
			$fields = array(
				'note' => $note
			);
			$service = $this->base_model->why_update('td_whybooks',$fields,$cid);
				if($service)
				{
					redirect(base_url().'admin.php/view/Principal');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function CourseIntake()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$note = $this->input->post('txt_notes');
			$fields = array(
				'note' => $note
			);
			$service = $this->base_model->why_update('td_course_intake',$fields,$cid);
				if($service)
				{
					redirect(base_url().'admin.php/view/CourseIntake');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function FeesStructure()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$name = $this->input->post('txt_cours');
				$fees = $this->input->post('txt_fee');
				$fields = array(
					'name' => $name,
					'fees' => $fees,
				);
			$service = $this->base_model->fee_update('td_fees',$fields,$cid);
				if($service)
				{
					redirect(base_url().'admin.php/view/FeesStructure');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Hide($id)
	{
		if ( isset($_SESSION['user'])) {
			
				$fields = array(
					'publish' => 0,
				);
			$service = $this->base_model->img_update('td_gallery_slider',$fields,$id);
				if($service)
				{
					redirect(base_url().'admin.php/view/GallerySlider');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Publish($id)
	{
		if ( isset($_SESSION['user'])) {
			
				$fields = array(
					'publish' => 1,
				);
			$service = $this->base_model->img_update('td_gallery_slider',$fields,$id);
				if($service)
				{
					redirect(base_url().'admin.php/view/GallerySlider');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function GallerySlider()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$type = $this->input->post('txt_btype');
			$imges = $_FILES["txt_file"]["name"];
							$exp = explode('.',$imges);
							$image = $exp[0].time().'.'.$exp[1];
							$temp = $_FILES["txt_file"]["tmp_name"];
			$fields = array(
			'type' => $type,
				'uplds' => $image,
				'publish' => '1',
			);
			
			$service = $this->base_model->img_update('td_gallery_slider',$fields,$cid);
				if($service)
				{
					$this->base_model->image_file_upload($image,$temp);
					redirect(base_url().'admin.php/view/GallerySlider');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Faculty()
	{
		if ( isset($_SESSION['user'])) {
			$cid = $this->input->post('cid');
			$fdt = $this->db->query("SELECT * FROM td_faculty WHERE f_id=".$cid)->result_array();
			$name = $this->input->post('txt_service');
			$desig = $this->input->post('txt_notes');
			$imgesV = $_FILES["txt_file"]["name"];
			$imgesP = $_FILES["txt_fimage"]["name"];
			if(!empty($imgesV)) {
				$imges = $_FILES["txt_file"]["name"];
				$exp = explode('.',$imges);
				$image = $exp[0].time().'.'.$exp[1];
				$temp = $_FILES["txt_file"]["tmp_name"];
			} else {
				$image = $fdt[0]['uplds'];
				}
			if(!empty($imgesP)) {	
				$imges1 = $_FILES["txt_fimage"]["name"];
				$exp = explode('.',$imges1);
				$image1 = $exp[0].time().'.'.$exp[1];
				$temp1 = $_FILES["txt_fimage"]["tmp_name"];
			} else {
				$image1 = $fdt[0]['img'];
				}				
			$fields = array(
			'name' => $name,
				'uplds' => $image,
				'img' => $image1,
				'desig' => $desig,
			);
			
			$service = $this->base_model->faculty_update('td_faculty',$fields,$cid);
				if($service)
				{
					if(!empty($imgesP)) {
						$this->base_model->faculty_file_upload($image1,$temp1);
					}
					if(!empty($imgesV)) {
						$this->base_model->faculty_file_upload($image,$temp);
					}
					redirect(base_url().'admin.php/view/Faculty');
				}
		}
		else {
			redirect(base_url().'admin.php');
		}
	}
	public function Destination()
	{
		if ( isset($_SESSION['user'])) {
				$cid = $this->input->post('cid');
				$fdt = $this->db->query("SELECT * FROM td_service WHERE service_id=".$cid)->result_array();
				$service = $this->input->post('txt_service');
			$Lnote = $this->input->post('txt_long_notes');
			$note = $this->input->post('txt_notes');
			$sale = $this->input->post('txt_sale');
			
			$imgesV = $_FILES["txt_file"]["name"];
			if(!empty($imgesV)) {
				$imges = $_FILES["txt_file"]["name"];
				$exp = explode('.',$imges);
				$image = $exp[0].time().'.'.$exp[1];
				$temp = $_FILES["txt_file"]["tmp_name"];
			} else {
				$image = $fdt[0]['uplds'];
				}				
			$fields = array(
				'service_name' => $service,
				'note' => $note,
				'lnote' => $Lnote,
				'sale' => $sale,
				'uplds' => $image,
			);
				$service = $this->base_model->service_update('td_service',$fields,$cid);
					if($service)
					{
						if(!empty($imgesV)) {
						$this->base_model->news_file_upload($image,$temp);
						}
						redirect(base_url().'admin.php/view/Destination');
					}
		}
		else {
				redirect(base_url().'admin.php');
				}
	}
	
	public function PublishP($cid)
	{
		if ( isset($_SESSION['user'])) {	
			$fields = array(
				'publish' => 1,	
			);
				$service = $this->base_model->service_update('td_service',$fields,$cid);
				if($service)
					{
						redirect(base_url().'admin.php/view/Destination');
					}			
		}
		else {
				redirect(base_url().'admin.php');
				}
	}
	
		public function PublishU($cid)
	{
		if ( isset($_SESSION['user'])) {	
			$fields = array(
				'publish' => 0,	
			);
				$service = $this->base_model->service_update('td_service',$fields,$cid);
				if($service)
					{
						redirect(base_url().'admin.php/view/Destination');
					}			
		}
		else {
				redirect(base_url().'admin.php');
				}
	}
	
	public function HotelDetails()
	{
		if ( isset($_SESSION['user'])) {
				if ( isset($_SESSION['user'])) {
				if(isset($_REQUEST['submit'])){
					$cid = $this->input->post('cid');
				$service = $this->input->post('txt_service');
				$note = $this->input->post('txt_notes');
				
				$fields = array(
					'service_name' => $service,
					'note' => $note,
				);
			
			$service = $this->base_model->service_update('td_quotes',$fields,$cid);
				if($service)
				{
					redirect(base_url().'admin.php/view/HotelDetails');
				}
			} else {
				$cid = $this->input->post('cid');
					
					$lastID = $cid;
					$allowed = array('png', 'jpg', 'gif','zip');
			if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
			$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
			if(!in_array(strtolower($extension), $allowed)){
			echo '{"status":"error"}';
			exit;
			}
    		if($this->base_model->image_file_upload($_FILES['upl']['name'],$_FILES['upl']['tmp_name'])){
				$fields1 = array(
					'serv_id' => $lastID,
					'img' => $_FILES['upl']['name'],
				);
				$service = $this->base_model->form_post('td_multiimage',$fields1);
			//if(move_uploaded_file($_FILES['upl']['tmp_name'], base_url().'uploads/'.$_FILES['upl']['name'])){
			echo '{"status":"success"}';
			exit;
			}
			}
			echo '{"status":"error"}';
			exit;
			}
			}
			else {
				redirect(base_url().'admin.php');
			}
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

	public function WeekendLeisures()
	{
		if ( isset($_SESSION['user'])) {
			$book_id = $this->input->post('cid');
			$fdt = $this->db->query("SELECT * FROM td_books WHERE book_id=".$book_id)->result_array();
			$name = $this->input->post('txt_client');
			$place = $this->input->post('txt_plc_name');
			$sdescr = $this->input->post('txt_sdesc');
			$samount = $this->input->post('txt_samount');
			
			$imgesV = $_FILES["txt_file"]["name"];
			if(!empty($imgesV)) {
			$imges = $_FILES["txt_file"]["name"];
			$exp = explode('.',$imges);
			$image = $exp[0].time().'.'.$exp[1];
			$temp = $_FILES["txt_file"]["tmp_name"];
			} else {
				$image = $fdt[0]['simage'];
				}	
			$fields = array(
				'name' => $name,
				'place' => $place,
				'shdesc' => $sdescr,
				'samount' => $samount,
				'simage' => $image
			);
			$service = $this->base_model->form_update('td_books',$fields,$book_id);
				if($service)
				{
					if(!empty($imgesV)) {
					$this->base_model->books_upload($image,$temp);
					}
					redirect(base_url().'admin.php/View/WeekendLeisures/');
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