<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/src/Instamojo.php';

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model("user_model","umodel");
        $this->load->helper('url');
        $this->load->helper('cias_helper');
    }
	public function index()
	{
		//$this->load->view('register');
		$this->load->view("header");
		$this->load->view("home");
		$this->load->view("footer");

	}
	public function registerView(){
		$this->load->view("header");
		$this->load->view("register");
		$this->load->view("footer");
	}
	public function register(){
		/*
		**  Check if value is empty 
		*/
		if($_POST == ' ' && $_POST['fullName'] == ' ' && $_POST['userEmail'] == ' ' && $_POST['password'] == ' '){

			$this->register();

		}else{
            $name = ucwords(strtolower($_POST['fullName']));
            $email = $_POST['userEmail'];
            $password = $_POST['password'];

            $pass = getHashedPassword($password);

            $result = $this->umodel->getWhere('users', 'EmailId', $email);
            if($result){
            	
                echo "Email Already Exist";

            }else{
	            	$data = array(
	            	"FullName" => $name,
	            	"EmailId" => $email,
	            	"Password" => $pass,
	            	"Created_at" => date("Y-m-d"),
	            	"roleId" => 4
	            );

	            $recordId = $this->umodel->registerUser("users",$data);

	            if($recordId > 0){
	            	echo "User registration successfull";
	            	
	            }else{

	            	echo "Somthing Wrong! Please try again";
	            }
        	}
		}
	}
	public function instamojo(){
		$this->load->view("header");
		$this->load->view("instamojo");
		$this->load->view("footer");
	}
	public function payment(){
		
		$purpose = $_POST['purpose'];
		$amount = $_POST['amount'];
		$fullname = $_POST['full_name'];
		$phone = $_POST['contact_no'];
		$email = $_POST['email'];
  		//echo base_url().'Thankyou';
  		
		$api = new Instamojo\Instamojo('APIKEY','APIPATH','https://test.instamojo.com/api/1.1/');
		try {
		    $response = $api->paymentRequestCreate(array(
		        "purpose" => $purpose,
		        "amount" => $amount,
		        "buyer_name" => $fullname,
		        "send_sms" => true,
		        "send_email" => true,
		        "phone" => $phone,
		        "email" => $email,
		        "allow_repeated_payments" => false,
		        //"redirect_url" => "http://localhost/SelfStudy/Instamojo/thankyou.php",
		        "redirect_url" => base_url().'Thankyou',
		        ));
		    $pay_url = $response['longurl'];
		    header("Location:$pay_url");
		    exit;
		    print_r($response);
		}
		catch (Exception $e) {
		    print('Error: ' . $e->getMessage());
		}

	}
	public function thankyou(){
		$this->load->view("header");
		$this->load->view("thankyou");
		$this->load->view("footer");
	}
}
