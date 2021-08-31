<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicCtrl extends CI_Controller {



	        public function __construct()
        {
                parent::__construct();
             //  echo 'i am PublicCtrl constructor';
               $this->load->model('Universal_Model');
               //echo current_url();
               // $this->Universal_Model ->check_session();
                // Your own constructor code
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('index');
		
		
	}

public function welcome()
	{
		$this->load->view('myHeaderPublic');
		$this->load->view('welcome');
		$this->load->view('myFooterPublic');

		
	}

	public function register()
	{
		$this->load->view('myHeaderPublic');
		$this->load->view('register');
		$this->load->view('myFooterPublic');
		$this->SregisterSubmit();
		
	}

	public function login()
	{
		$this->load->view('myHeaderPublic');
		$this->load->view('login');
		$this->load->view('myFooterPublic');
		$this->SloginSubmit();
		
	}


public function logout()
	{
		$this->load->view('logout');
	
		
	}




	private function SregisterSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
          
$userNm = $this->input->post('uname', TRUE);
$userEmail = $this->input->post('mailid', TRUE);
$userContact = $this->input->post('contactnum', TRUE);
$userCourse = $this->input->post('coursename', TRUE);
$userYear = $this->input->post('yearSel', TRUE);
$userSem = $this->input->post('semesterSel', TRUE);
$userpw = $this->input->post('pw', TRUE);
//echo 'ok';

$query = "SELECT email FROM studenttable WHERE email=? ";
$dataprepared = array(  $userEmail);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 if($count>0){

$error = "Your Email ID or Phone Number is Already registered...";

echo '<script type="text/javascript">
   window.alert("'.$error.'");
</script>';
		 die( "<p style=\"color:RED;font-size:15px;\"> Ooops.. ".$error."</p>");
 }
 $hashpass=password_hash($userpw,PASSWORD_BCRYPT);

$result->free_result();
$this->db->close();




$this->load->database(); //Coz Database is closed manually..
$myindata = array(
        'sName' => $userNm,
        'sPassword' => $hashpass,
        'course' => $userCourse,
		'cllgYear' => $userYear,
        'semPart' => $userSem,
        'contact' => $userContact,
		'email' => $userEmail
		
);

$result2= $this->db->insert('studenttable', $myindata);

if(! $result2){
echo '<script type="text/javascript">
   window.alert("Something went wrong!");
</script>';

 die( "<p style=\"color:RED;font-size:15px;\"> Ooops.. Something went Wrong..". $this->db->error()."</p>");

}
//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Registered Successfully!");
</script>';

 }
}





private function SloginSubmit(){

	 if(isset($_SESSION['login_id'])){
 $quer = "SELECT  isAdmin FROM studenttable WHERE Email = ?";  
 $dataprepar = array( $_SESSION['login_id']);

$resl= $this->db->query($quer, $dataprepar);
$counti = $resl->num_rows();
  if($counti>0){
     $row=$resl->row();
		  if( ($row-> isAdmin)==1){
			  
    // redirect(base_url('AdminCtrl')); 
	  echo "<script> location.href='".base_url('AdminCtrl')."'; </script>"; 
        exit(); 
		
     }else {
	 //redirect(base_url('UserCtrl')); 
	 
 echo "<script> location.href='".base_url('UserCtrl')."'; </script>"; 
        exit(); 
		
        }
      } 

$resl->free_result();
  
   }
   else {
	   //echo 'login first';
	   }


if($_SERVER["REQUEST_METHOD"] == "POST") {

    

$loginMailid = $this->input->post('loginmail', TRUE);
$loginPW = $this->input->post('loginpass', TRUE);


  if(!($loginMailid  && $loginPW))
	  {
		echo '<script type="text/javascript">
   window.alert("Please Enter Email ID and Password..");
</script>';
		 die();
	  }

 $query = "SELECT email , sPassword, isAdmin FROM studenttable WHERE Email = ?";  //main is our table name....
 $dataprepared = array(  $loginMailid);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
	 

	           // If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
     	//echo $count;
     	$row=$result->row();
     	  $hashed_db_pw = $row-> sPassword;

		

     	if(password_verify($loginPW, $hashed_db_pw)) {
		 // echo  $_SESSION['login_id'] ." is session";
		 unset($loginPW);
		 		if (session_status() == PHP_SESSION_NONE) {
            session_start(); //MIMPP
        }
		 
		  $_SESSION['login_id']=  $loginMailid; //MIMP
 
		//$this->session->set_userdata('login_id', $loginMailid); //MIMP
        



     //   echo '<script type="text/javascript">
     //window.alert("Welcome welcome..");
     //</script>';

		  if( ($row-> isAdmin)==1){
			  
     //redirect(base_url('AdminCtrl')); 
	 
	  echo "<script> location.href='".base_url('AdminCtrl')."'; </script>"; 
        exit(); 
	 
     }else {
     	// redirect(base_url('UserCtrl')); 
		 
		 echo "<script> location.href='".base_url('UserCtrl')."'; </script>"; 
        exit(); 
     }
      }
 
  else {
        echo '<script type="text/javascript">
   window.alert("Email id or Password is incorrect..");
</script>';
		 die();
      }

  }
	  
	  else {
        echo '<script type="text/javascript">
   window.alert("This account is not registered..");
</script>';
		 die();
      }
	}
 }
}




