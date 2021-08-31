<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCtrl extends CI_Controller {



	        public function __construct()
        {
                parent::__construct();
                
                $this->load->model('Universal_Model');
                $this->Universal_Model->Scheck_session();
                 $this->Universal_Model->Scheck_user_security();


		   //echo  $_SESSION['login_id'] ." is session";
         
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
		//$this->load->view('myHeaderPublic');
		//$this->load->view('homeUser');
		//$this->load->view('myFooterPublic');
		
		//	redirect('UserCtrl/databaseSearchBooks');
			
			echo "<script> location.href='".base_url('UserCtrl/databaseViewmyIssuedBooks')."'; </script>"; 
        exit(); 
	}
	
	
	
	
		
 public function myProfileUser()
	{
		
		$this->load->view('myHeaderUser');
		$this->load->view('user_pages/myProfileUser');		
		$this->load->view('myFooterUser');
		$this->SmyProfileUserSubmit();
	}
	
	
	
	
	public function databaseSearchBooks()
	{
		
		$this->load->view('myHeaderUser');
		
		$this->load->model('User_Model');
		$datareturned =$this->User_Model->databaseSearchBooksBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('user_pages/databaseSearchBooks',$custmdata);		
		$this->load->view('myFooterUser');
	
	}

	public function databaseViewmyIssuedBooks()
	{
		
		$this->load->view('myHeaderUser');
		
		$this->load->model('User_Model');
		$datareturned =$this->User_Model->databaseViewmyIssuedBooksBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('user_pages/databaseViewmyIssuedBooks',$custmdata);		
		$this->load->view('myFooterUser');
	
	}

	
	
	
	public function databaseViewmyBooksHistory()
	{
		
		$this->load->view('myHeaderUser');
		
		$this->load->model('User_Model');
		$datareturned =$this->User_Model->databaseViewmyBooksHistoryBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('user_pages/databaseViewmyBooksHistory',$custmdata);		
		$this->load->view('myFooterUser');
	
	}








 private function SmyProfileUserSubmit(){

      // username and password sent from form 
     $usermailid=  $_SESSION['login_id'];
			
			$query2 = "SELECT * FROM studenttable WHERE email = ?";  //main is our table name....
            $dataprepared2 = array(  $usermailid);

$result2= $this->db->query($query2, $dataprepared2);
$count2 = $result2->num_rows();
  if($count2>0){
     	//echo $count;
     	$row2 =$result2->row();
     	    $name2 = $row2-> sName;
			$course2 = $row2-> course;
			$year2 = $row2-> cllgYear;
			$sem2 = $row2-> semPart;
			$cont2= $row2-> contact;
			$emal2= $row2-> email;
			
			
			echo '<script>
        var authorTextField =  document.getElementsByName("stuname");
		authorTextField[0].value ="'.$name2.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stucourse");
		authorTextField[0].value ="'.$course2.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stuyear");
		authorTextField[0].value ="'.$year2.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stusemester");
		authorTextField[0].value ="'.$sem2.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stuemail");
		authorTextField[0].value ="'.$emal2.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stucontactnum");
		authorTextField[0].value ="'.$cont2.'";  
         </script> ';
		 
		 
$result2 ->free_result();

  }
		 else {
			 $result2 ->free_result();
        echo '<script type="text/javascript">
   window.alert("Student not found, Problem Occured..");
</script>';
		 die();
      }		
				
		  }
		  
		
 
}


