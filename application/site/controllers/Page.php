<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
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
	public function WeekendLeisures()
	{		
	$category['himalaya'] = $this->db->query('SELECT * FROM td_books WHERE book_id=14')->result_array();
	$category['see'] = $this->db->query('SELECT * FROM td_books WHERE book_id=17')->result_array();
	$category['jungle'] = $this->db->query('SELECT * FROM td_books WHERE book_id=15')->result_array();
	$category['landscape'] = $this->db->query('SELECT * FROM td_books WHERE book_id=16')->result_array();
	$category['himalayaSub'] = $this->db->query("SELECT * FROM td_quotes HAVING wkl=14")->result_array();
	$category['seeSub'] = $this->db->query('SELECT * FROM td_quotes WHERE wkl=17')->result_array();
	$category['jungleSub'] = $this->db->query('SELECT * FROM td_quotes WHERE wkl=15')->result_array();
	$category['landscapeSub'] = $this->db->query('SELECT * FROM td_quotes WHERE wkl=16')->result_array();
		$this->load->view('weekend',$category);
	}
	public function Gallery()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['Gallery'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=1 AND publish=1 ORDER BY img_id ASC')->result_array();
		
		$this->load->view('gallery',$category);
	}
	public function Destination()
	{
		$category['destination'] = $this->db->query('SELECT * FROM td_service ORDER BY service_id ASC')->result_array();
		$this->load->view('destination',$category);
	}
	public function Hotels($id)
	{
		$category['destination'] = $this->db->query('SELECT * FROM td_service WHERE service_id='.$id)->result_array();
		$category['hotels'] = $this->db->query('SELECT * FROM td_quotes WHERE dest='.$id)->result_array();
		$this->load->view('hotels',$category);
	}
	public function HotelDetails($id)
	{
		
		$category['hotels'] = $this->db->query('SELECT * FROM td_quotes WHERE service_id='.$id)->result_array();
		$category['multiimage'] = $this->db->query('SELECT * FROM td_multiimage WHERE serv_id='.$id.' ORDER BY mid ASC LIMIT 1,100')->result_array();
		$this->load->view('hotel_details',$category);
	}
	public function Package()
	{
		$category['package'] = $this->db->query('SELECT * FROM td_package ORDER BY pack_id ASC')->result_array();
		
		$this->load->view('package',$category);
	}
	public function PackageDetails($id)
	{
		$category['package'] = $this->db->query('SELECT * FROM td_package WHERE pack_id='.$id)->result_array();
		$category['packageDtl'] = $this->db->query('SELECT * FROM td_package_offer WHERE package_id='.$id)->result_array();
		
		$this->load->view('package_details',$category);
	}
	public function Principal()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['Principal'] = $this->db->query('SELECT * FROM td_whybooks')->result_array();
		
		$this->load->view('principal',$category);
	}
	public function Administrator()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['Gover'] = $this->db->query('SELECT * FROM td_quotes WHERE type = 4 ORDER BY service_id ASC')->result_array();
		
		$this->load->view('governing',$category);
	}
	public function Staff()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['Staff'] = $this->db->query('SELECT * FROM td_service WHERE type = 2 ORDER BY service_id ASC')->result_array();
		
		$this->load->view('staff',$category);
	}
	public function Courses()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['course'] = $this->db->query('SELECT * FROM td_course_intake WHERE type = 1')->result_array();
		
		$this->load->view('course',$category);
	}
	public function IntakeCapacity()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['course'] = $this->db->query('SELECT * FROM td_course_intake WHERE type = 1')->result_array();
		
		$this->load->view('course',$category);
	}
	
	public function FeesStructure()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['fees'] = $this->db->query('SELECT * FROM td_fees ORDER BY fee_id ASC')->result_array();
		
		$this->load->view('fee_structure',$category);
	}
	public function Departments($id)
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['Data'] = $this->db->query('SELECT * FROM td_books WHERE book_id='.$id)->result_array();
		$bData = $this->db->query('SELECT * FROM td_books WHERE book_id='.$id)->result_array();
		$category['Faculty'] = $this->db->query('SELECT * FROM td_faculty WHERE f_id IN('.$bData[0]['faculty'].')')->result_array();
		
		$this->load->view('faculty',$category);
	}
	public function RulesRegulation()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['rules'] = $this->db->query('SELECT * FROM td_course_intake WHERE type = 3')->result_array();
		
		$this->load->view('rules_regulation',$category);
	}
	public function SubjectCombination()
	{
		$category['slider'] = $this->db->query('SELECT * FROM td_gallery_slider WHERE type=2 AND publish=1 ORDER BY img_id ASC')->result_array();
		$category['department'] = $this->db->query('SELECT * FROM td_books ORDER BY book_id ASC')->result_array();
		$category['notice'] = $this->db->query('SELECT * FROM td_service WHERE type=1 ORDER BY service_id ASC')->result_array();
		$category['rules'] = $this->db->query('SELECT * FROM td_course_intake WHERE type = 2')->result_array();
		
		$this->load->view('sub_combination',$category);
	}
	public function ContactUs()
	{
		
		$this->load->view('contact_us');
	}
	public function ContactSubmit()
	{

		
		$email = $this->input->post('email');
		$phn = $this->input->post('phone');
		$msg = $this->input->post('criteria');
		$this->load->library('email'); // load email library
	    $this->email->from($email, $email);
	    $this->email->to('travelicon@gmail.com');
	    $this->email->cc('travelicon@gmail.com'); 
	    $this->email->subject('New Enquiry Done on Travel Icon Kolkata');
	    $this->email->message(
		'<table align="center" width="700" style="border:outset #B1F05E;">
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;">Below are the Details of the enquery:</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Email : '. $email. 
		' </span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Phone : '. $phn. 
		' </span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Message : '.$msg.
		' </span></td>
  </tr>
 <br/> Thank you'
		);
	    //$this->email->attach('/path/to/file1.png'); // attach file
	    //$this->email->attach('/path/to/file2.pdf');
	    $this->email->send();
	   /* echo "<script type='text/javascript'> window.location= '".base_url()."'index.php/Page/ContactUs?MailSend'; </script>";*/
	    redirect(base_url());
	}
	public function ContactSubmit1()
	{

		
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$msg = $this->input->post('message');
		$this->load->library('email'); // load email library
	    $this->email->from($email, $email);
	    $this->email->to('travelicon@gmail.com');
	    $this->email->cc('travelicon@gmail.com'); 
	    $this->email->subject('New Enquiry Done on Travel Icon Kolkata');
	    $this->email->message(
		'<table align="center" width="700" style="border:outset #B1F05E;">
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;">Below are the Details of the enquery:</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Email : '. $email. 
		' </span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Name : '. $name. 
		' </span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Message : '.$msg.
		' </span></td>
  </tr>
 <br/> Thank you'
		);
	    //$this->email->attach('/path/to/file1.png'); // attach file
	    //$this->email->attach('/path/to/file2.pdf');
	    $this->email->send();
	  /*  echo "<script type='text/javascript'> window.location= '".base_url()."'index.php/Page/ContactUs?MailSend'; </script>";*/
	    //redirect(base_url());
		redirect(base_url().'index.php/Page/ContactUs');
	}

	public function Details($id,$name)
	{
		$nme = base64_decode($name);
		$category['Data'] = $this->db->query('SELECT * FROM td_category ORDER BY cat_id ASC')->result_array();
		$category['Books'] = $this->db->query('SELECT * FROM td_books WHERE book_id ='.$id.' AND book_name ="'.$nme.'"')->result_array();
		$this->load->view('product-details',$category);
	}
	
	
}
