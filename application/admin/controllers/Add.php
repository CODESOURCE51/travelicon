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
	
	public function Destination()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_service');
			$note = $this->input->post('txt_notes');
			$sale = $this->input->post('txt_sale');
			$Lnote = $this->input->post('txt_long_notes');
			$imges = $_FILES["txt_file"]["name"];
							$exp = explode('.',$imges);
							$image = $exp[0].time().'.'.$exp[1];
							$temp = $_FILES["txt_file"]["tmp_name"];
			$fields = array(
				'service_name' => $service,
				'note' => $note,
				'lnote' => $Lnote,
				'sale' => $sale,
				'uplds' => $image,
			);
			$service = $this->base_model->form_post('td_service',$fields);
				if($service)
				{
					$this->base_model->news_file_upload($image,$temp);
					redirect(base_url().'admin.php/Index/Destination');
				}
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function GallerySlider()
	{
		if ( isset($_SESSION['user'])) {
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
			$service = $this->base_model->form_post('td_gallery_slider',$fields);
				if($service)
				{
					$this->base_model->image_file_upload($image,$temp);
					redirect(base_url().'admin.php/Index/GallerySlider');
				}
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function Package()
	{
		if ( isset($_SESSION['user'])) {
			$name = $this->input->post('txt_service');
			$desig = $this->input->post('txt_notes');
			$samount = $this->input->post('txt_amount');
			$subPackage = $this->input->post('txt_sub_pack');
			$pcount = count($subPackage)-1;
			$subPackage1 = $this->input->post('txt_ofrs');
			$imges = $_FILES["txt_file"]["name"];
							$exp = explode('.',$imges);
							$image = $exp[0].time().'.'.$exp[1];
							$temp = $_FILES["txt_file"]["tmp_name"];
			
			$fields = array(
			'name' => $name,
				'uplds' => $image,
				'sdescr' => $desig,
				'samount' => $samount,
			);
			$service = $this->base_model->form_post('td_package',$fields);
			$lastid = $this->db->insert_id();
				if($service)
				{
					$this->base_model->image_file_upload($image,$temp);
				}
				for($i=0;$i<=$pcount;$i++) {
				$fields1 = array(
				'package_id' => $lastid,
			'package' => $subPackage[$i],
				'offer' => $subPackage1[$i]
			);
			$service1 = $this->base_model->form_post('td_package_offer',$fields1);
					}
			if($service1)
				{
					redirect(base_url().'admin.php/Index/Package');
				}		
			}
		else {
			redirect(base_url().'admin.php');
			}
	}
	public function HotelDetails()
	{
			if ( isset($_SESSION['user'])) {
				if(isset($_REQUEST['submit'])){
				$service = $this->input->post('txt_service');
				$note = $this->input->post('txt_notes');
				$dest = $this->input->post('txt_destiny');
				$wkl = $this->input->post('txt_leisures');
				$fields = array(
					'service_name' => $service,
					'note' => $note,
					'dest' => $dest,
					'wkl' => $wkl,
				);
				$service = $this->base_model->form_post('td_quotes',$fields);
					if($service)
					{
						redirect(base_url().'admin.php/Index/HotelDetails');
					}
				} else {
					$rect = $this->db->query("SELECT MAX(service_id) AS mid FROM td_quotes")->result_array();
					$lastID = $rect[0]['mid']+1;
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

	public function WeekendLeisures()
	{
			if ( isset($_SESSION['user'])) {
				$cat = $this->input->post('txt_category');
				
							$name = $this->input->post('txt_client');
							$place = $this->input->post('txt_plc_name');
							$sdescr = $this->input->post('txt_sdesc');
							$samount = $this->input->post('txt_samount');
							
							$imges = $_FILES["txt_file"]["name"];
							$exp = explode('.',$imges);
							$image = $exp[0].time().'.'.$exp[1];
							$temp = $_FILES["txt_file"]["tmp_name"];
							$fields = array(
								'name' => $name,
								'place' => $place,
								'shdesc' => $sdescr,
								'samount' => $samount,
								'simage' => $image
							);
							$service = $this->base_model->form_post('td_books',$fields);
								if($service)
								{
									$this->base_model->books_upload($image,$temp);
								redirect(base_url().'admin.php/Index/WeekendLeisures');
								}
						
				}
				else {
						redirect(base_url().'admin.php');
				}
	
	}
	public function Principal()
	{
			if ( isset($_SESSION['user'])) {
				$note = $this->input->post('txt_notes');
				$fields = array(
					'note' => $note,
				);
				$service = $this->base_model->form_post('td_whybooks',$fields);
					if($service)
					{
						redirect(base_url().'admin.php/Index/Principal');
					}
			}
			else {
				redirect(base_url().'admin.php');
			}
	}
	public function CourseIntake()
	{
			if ( isset($_SESSION['user'])) {
				$note = $this->input->post('txt_notes');
				$type = $this->input->post('txt_btype');
				$fields = array(
					'note' => $note,
					'type' => $type,
				);
				$service = $this->base_model->form_post('td_course_intake',$fields);
					if($service)
					{
						redirect(base_url().'admin.php/Index/CourseIntake');
					}
			}
			else {
				redirect(base_url().'admin.php');
			}
	}
	public function FeesStructure()
	{
			if ( isset($_SESSION['user'])) {
				$name = $this->input->post('txt_cours');
				$fees = $this->input->post('txt_fee');
				$fields = array(
					'name' => $name,
					'fees' => $fees,
				);
				$service = $this->base_model->form_post('td_fees',$fields);
					if($service)
					{
						redirect(base_url().'admin.php/Index/FeesStructure');
					}
			}
			else {
				redirect(base_url().'admin.php');
			}
	}
	
}
