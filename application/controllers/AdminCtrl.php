<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtrl extends CI_Controller {



	        public function __construct()
        {
                parent::__construct();
                
                $this->load->model('Universal_Model');
                $this->Universal_Model->Scheck_session();
                $this->Universal_Model->Scheck_admin_security();

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
		//$this->load->view('homeAdmin');
		//$this->load->view('myFooterPublic');
		//$this->load->view('myHeaderAdmin');
		//$this->load->view('adminDash');
		//$this->load->view('myFooterAdmin');
		
		
		//redirect('AdminCtrl/bookIssue');
		 echo "<script> location.href='".base_url('AdminCtrl/bookIssue')."'; </script>"; 
        exit(); 
	
	}

public function databaseViewAllBooks()
	{
		
		$this->load->view('myHeaderAdmin');
		
		$this->load->model('Admin_Model');
		$datareturned =$this->Admin_Model->databaseViewAllBooksBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('admin_pages/databaseViewAllBooks',$custmdata);		
		$this->load->view('myFooterAdmin');
	
	}

	
	public function databaseSearchBooks()
	{
		
		$this->load->view('myHeaderAdmin');
		
		$this->load->model('Admin_Model');
		$datareturned =$this->Admin_Model->databaseViewAllBooksBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('admin_pages/databaseViewAllBooks',$custmdata);		
		$this->load->view('myFooterAdmin');
	
	}

public function databaseViewAllIssuedBooks()
	{
		
		$this->load->view('myHeaderAdmin');
		
		$this->load->model('Admin_Model');
		$datareturned =$this->Admin_Model->databaseViewAllIssuedBooksBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('admin_pages/databaseViewAllIssuedBooks',$custmdata);		
		$this->load->view('myFooterAdmin');
	
	}
	
	public function databaseStudentViewAllBooks()
	{
		
		$this->load->view('myHeaderAdmin');
	    $this->SdatabaseStudentViewAllBooksSubmit();
		$this->load->view('myFooterAdmin');
	   
	
	}
	
	
	

public function stuViewAllstudents()
	{
		
		$this->load->view('myHeaderAdmin');
		
		$this->load->model('Admin_Model');
		$datareturned =$this->Admin_Model->stuViewAllstudentsBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('admin_pages/stuViewAllstudents',$custmdata);		
		$this->load->view('myFooterAdmin');
	
	}

	
public function stuDeleteStudent()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/stuDeleteStudent');		
		$this->load->view('myFooterAdmin');
		$this->SstuDeleteStudentSubmit();
	}
	
	
public function stuChangePw()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/stuChangePw');		
		$this->load->view('myFooterAdmin');
		$this->SstuchangepassSubmit();
	}

	
public function admAddNew()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/admAddNew');		
		$this->load->view('myFooterAdmin');
		$this->SadminAddNewSubmit();
	}
	
	public function admDeleteAdmin()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/admDeleteAdmin');		
		$this->load->view('myFooterAdmin');
		$this->SadmDeleteAdminSubmit();
	}
	

	
public function admViewAlladmins()
	{
		
		$this->load->view('myHeaderAdmin');
		
		$this->load->model('Admin_Model');
		$datareturned =$this->Admin_Model->admViewAlladminsBody();
		$custmdata['resultmega'] = $datareturned ; 
		
		
		$this->load->view('admin_pages/admViewAlladmins',$custmdata);		
		$this->load->view('myFooterAdmin');
	
	}
	
public function databaseAddNewBook()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/databaseAddNewBook');		
		$this->load->view('myFooterAdmin');
		$this->SaddNewBookSubmit();
	}
	
	
	public function databaseDeleteBook()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/databaseDeleteBook');		
		$this->load->view('myFooterAdmin');
		$this->SdeleteBookSubmit();
	}
	
 public function bookIssue()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/bookIssue');		
		$this->load->view('myFooterAdmin');
		$this->SbookIssueSubmit();
	}
	
		
 public function bookReturn()
	{
		
		$this->load->view('myHeaderAdmin');
		$this->load->view('admin_pages/bookReturn');		
		$this->load->view('myFooterAdmin');
		$this->SbookReturnSubmit();
	}
	
	
	private function SaddNewBookSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
          
$booktitle = $this->input->post('btitle', TRUE);
$bookauthor = $this->input->post('bauthor', TRUE);
$bookaccnum = $this->input->post('accnum', TRUE);
$bookclassnum = $this->input->post('classnum', TRUE);
$bookdeptnum = $this->input->post('deptnum', TRUE);
try{
$this->load->database(); //Coz Database is closed manually..
$myinpdata = array(
        'author' => $bookauthor,
        'title' => $booktitle,
        'accessionNumber' => $bookaccnum,
        'classNumber' => $bookclassnum,
        'departmentNumber' => $bookdeptnum
	
		
);

$result2= $this->db->insert('booklisttable', $myinpdata);

$counta = $this->db->affected_rows();

//echo "ddddd".$couna;

       $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }
		  if($counta<1){
echo '<script type="text/javascript">
   window.alert("Duplicate Accession Number!");
</script>';
die();

}
		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }

//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Book Added!");
</script>';
	}

}

    private function SdeleteBookSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       if($_POST['submitval']=="getDetails"){
			$accsnSearch = $this->input->post('accsnDelete', TRUE);
			
			$query = "SELECT * FROM booklisttable WHERE accessionNumber = ?";  //main is our table name....
            $dataprepared = array(  $accsnSearch);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
  if($count>0){
     	//echo $count;
     	$row=$result->row();
     	    $aut = $row-> author;
			$titl = $row-> title;
			$cn = $row-> classNumber;
			$dn = $row-> departmentNumber;
			$acc= $row-> accessionNumber;
			
			echo '<script>
        var authorTextField =  document.getElementsByName("booktitlename");
		authorTextField[0].value ="'.$titl.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("bookauthorname");
		authorTextField[0].value ="'.$aut.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("classnum");
		authorTextField[0].value ="'.$cn.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("departnum");
		authorTextField[0].value ="'.$dn.'";  
         </script> ';

		  echo '<script>
        var authorTextField =  document.getElementsByName("accessiondel");
		authorTextField[0].value ="'.$acc.'";  
         </script> ';



  }
		 else {
        echo '<script type="text/javascript">
   window.alert("Book not found..");
</script>';
		 die();
      }	
			
			
		//------------------------------------------------------	
		  }
		  else if($_POST['submitval']=="delete"){
			
			$delaccsn = $this->input->post('accessiondel', TRUE);
			if(!isset($delaccsn)){ echo '<script type="text/javascript">
          window.alert("Enter Accession Number..");
           </script>';
				die();
			}
		try{
	$this->load->database(); //Coz Database is closed manually..
$this->db->delete('booklisttable', array('accessionNumber' => $delaccsn));
$countaff = $this->db->affected_rows();

   $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }

if($countaff<1){
echo '<script type="text/javascript">
   window.alert("Wrong Accession Number!");
</script>';
die();
}

		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }
//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Book Deleted !");
</script>';

		  }
	
 }
 
 
 
 /* 
 		  
		  
$booktitle = $this->input->post('btitle', TRUE);
$bookauthor = $this->input->post('bauthor', TRUE);
$bookaccnum = $this->input->post('accnum', TRUE);
$bookclassnum = $this->input->post('classnum', TRUE);
$bookdeptnum = $this->input->post('deptnum', TRUE);

$this->load->database(); //Coz Database is closed manually..
$query2 = "INSERT INTO booklisttable (author, title, accessionNumber, classNumber, departmentNumber) VALUES (?, ?, ?, ?, ?)";

$dataprepared2 = array(  $bookauthor, $booktitle, $bookaccnum, $bookclassnum, $bookdeptnum);

$result2= $this->db->query($query2, $dataprepared2);

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
   window.alert("Book Added!");
</script>';

 */
 
}

 private function SdatabaseStudentViewAllBooksSubmit(){
	 
	 if($_SERVER["REQUEST_METHOD"] != "POST") {
		 // Without submit button click, display blank table on the page..
		 $datareturned=NULL;
		$custmdata['resultmega'] = $datareturned ; 
		$this->load->view('admin_pages/databaseStudentViewAllBooks',$custmdata);
		 
	 }
	 
	 
	 else if($_SERVER["REQUEST_METHOD"] == "POST") {
		 
		 
 $query = "SELECT * FROM issuedbookrecordtable WHERE email=? GROUP BY isReturned ORDER BY dateIssued DESC;";  //main is our table name....
$stumail=  $this->input->post('studentmail', TRUE);
	 $dataprepared = array( $stumail);
$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
	 $SN=0;

	           // If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
	  $datareturned = $result;
	  $custmdata['resultmega'] = $datareturned ; 
			
		$this->load->view('admin_pages/databaseStudentViewAllBooks',$custmdata);	
		   	$result->free_result();
 }
 
	  else {
        echo '<script type="text/javascript">
   window.alert("No data found..");
</script>';	
 $datareturned=NULL;
		$custmdata['resultmega'] = $datareturned ; 
		$this->load->view('admin_pages/databaseStudentViewAllBooks',$custmdata);
		$result->free_result();
      }
	
	
		 
		 
		
	 }
		
		
 }



     private function SstuchangepassSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       if($_POST['submitvalu']=="getDetls"){
			$stuSearch = $this->input->post('stuMail', TRUE);
			
			$query = "SELECT * FROM studenttable WHERE email = ?";  //main is our table name....
            $dataprepared = array(  $stuSearch);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
  if($count>0){
     	//echo $count;
     	$row=$result->row();
     	    $sname = $row-> sName;
			$cours = $row-> course;
			$cont = $row-> contact;
			$cy = $row-> cllgYear;
			$sp = $row-> semPart;
			$mid= $row-> email;
			
			
			if(($row->isAdmin)==1){
			
        echo '<script type="text/javascript">
   window.alert("Entered email is not of an Student..");
</script>';
		 die();
		}
			echo '<script>
        var authorTextField =  document.getElementsByName("stuname");
		authorTextField[0].value ="'.$sname.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stucourse");
		authorTextField[0].value ="'.$cours.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("contac");
		authorTextField[0].value ="'.$cont.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("clgyear");
		authorTextField[0].value ="'.$cy.'";  
         </script> ';
 
         echo '<script>
        var authorTextField =  document.getElementsByName("semepart");
		authorTextField[0].value ="'.$sp.'";  
         </script> ';


		    echo '<script>
        var authorTextField =  document.getElementsByName("studentDetail");
		authorTextField[0].value ="'.$mid.'";  
         </script> ';


  }
		 else {
        echo '<script type="text/javascript">
   window.alert("Student record not found..");
</script>';
		 die();
      }	
			
			
		//------------------------------------------------------	
		  }
		  else if($_POST['submitvalu']=="changepass"){
			
			$stuemlupdat = $this->input->post('studentDetail', TRUE);
			$newpassStu = $this->input->post('stunewPass', TRUE);
						
						if(!isset($newpassStu)){
			echo '<script type="text/javascript">
			   window.alert("Enter new Passoword!");
			</script>';
               die();

			}
			
			 $hashnewpass=password_hash($newpassStu,PASSWORD_BCRYPT);

			
			if(!isset($stuemlupdat)){ echo '<script type="text/javascript">
          window.alert("Enter Email id..");
           </script>';
				die();
			}
		try{
	$this->load->database(); //Coz Database is closed manually..
	
         $data2 = array(
        'sPassword' => $hashnewpass
         );
$this->db->where('email', $stuemlupdat);
$this->db->update('studenttable',  $data2);
$countaff = $this->db->affected_rows();


   $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }
	if($countaff<1){
echo '<script type="text/javascript">
   window.alert("Enter correct Email Id!");
</script>';
die();
}
		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }
//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Student Password Changed !");
</script>';

		  }
	
 }
 
 
}


  private function SstuDeleteStudentSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       if($_POST['submt']=="stuDtls"){
			$stuSearch = $this->input->post('stumail', TRUE);
			
			$query = "SELECT * FROM studenttable WHERE email = ?";  //main is our table name....
            $dataprepared = array(  $stuSearch);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
  if($count>0){
     	//echo $count;
     	$row=$result->row();
     	    $nam = $row-> sName;
			$conta = $row-> contact;
			$cors = $row-> course;
			$yr = $row-> cllgYear;
			$sm = $row-> semPart;
			$mailid= $row-> email;
			
			if(($row->isAdmin)==1){
			
        echo '<script type="text/javascript">
   window.alert("Entered email is not of an Student..");
</script>';
		 die();
		}
			
			echo '<script>
        var authorTextField =  document.getElementsByName("studname");
		authorTextField[0].value ="'.$nam.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("studcontact");
		authorTextField[0].value ="'.$conta.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("studcourse");
		authorTextField[0].value ="'.$cors.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("studyear");
		authorTextField[0].value ="'.$yr.'";  
         </script> ';

        
			 echo '<script>
        var authorTextField =  document.getElementsByName("studsemester");
		authorTextField[0].value ="'.$sm.'";  
         </script> ';

		  echo '<script>
        var authorTextField =  document.getElementsByName("stumaildelete");
		authorTextField[0].value ="'.$mailid.'";  
         </script> ';


  }
		 else {
        echo '<script type="text/javascript">
   window.alert("Student not found..");
</script>';
		 die();
      }	
			
			
		//------------------------------------------------------	
		  }
		  else if($_POST['submt']=="studelete"){
			
			$delmail = $this->input->post('stumaildelete', TRUE);
			if(!isset($delmail)){ echo '<script type="text/javascript">
          window.alert("Enter Email id ..");
           </script>';
				die();
			}
		try{
	$this->load->database(); //Coz Database is closed manually..
$this->db->delete('studenttable', array('email' => $delmail));
$countaff = $this->db->affected_rows();


   $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }
 if($countaff<1){
echo '<script type="text/javascript">
   window.alert("Wrong Email id!");
</script>';
die();

}
		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }
//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Student Record Deleted !");
</script>';

		  }
	
 }
 

}


 private function SadminAddNewSubmit(){
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
          
$aname = $this->input->post('adname', TRUE);
$amail = $this->input->post('admmail', TRUE);
$acont = $this->input->post('admcont', TRUE);
$apw = $this->input->post('pw', TRUE);

if(!isset($apw)){
			echo '<script type="text/javascript">
			   window.alert("Enter value for Passoword field !");
			</script>';
               die();

			}
			
	$ahashpw = password_hash($apw, PASSWORD_BCRYPT);
try{
$this->load->database(); //Coz Database is closed manually..
$myinpdata2 = array(
        'sName' => $aname,
        'sPassword' => $ahashpw,
        'contact' => $acont,
        'email' => $amail,
		'isAdmin' => 1
		
);

$result2= $this->db->insert('studenttable', $myinpdata2);
$counta = $this->db->affected_rows();

//echo "ddddd".$couna;

       $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }
		if($counta<1){
echo '<script type="text/javascript">
   window.alert("Duplicate Email Id!");
</script>';
die();
}
		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }

//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Admin Created!");
</script>';
	}

}

 
  private function SadmDeleteAdminSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       if($_POST['subm']=="admDtls"){
			$admSearch = $this->input->post('admmail', TRUE);
			
			$query = "SELECT * FROM studenttable WHERE email = ?";  //main is our table name....
            $dataprepared = array(  $admSearch);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
  if($count>0){
     	//echo $count;
     	$row=$result->row();
     	    $nam = $row-> sName;
			$conta = $row-> contact;
			$mailid= $row-> email;
			
			if(($row->isAdmin)!=1){
			
        echo '<script type="text/javascript">
   window.alert("Entered email is not of an Admin..");
</script>';
		 die();
		}
		
		
			echo '<script>
        var authorTextField =  document.getElementsByName("admname");
		authorTextField[0].value ="'.$nam.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("admcontact");
		authorTextField[0].value ="'.$conta.'";  
         </script> ';

		  echo '<script>
        var authorTextField =  document.getElementsByName("admmaildelete");
		authorTextField[0].value ="'.$mailid.'";  
         </script> ';


  }
		 else {
        echo '<script type="text/javascript">
   window.alert("Admin not found..");
</script>';
		 die();
      }	
			
			
		//------------------------------------------------------	
		  }
		  else if($_POST['subm']=="admdelete"){
			
			$delmail = $this->input->post('admmaildelete', TRUE);
			if(!isset($delmail)){ echo '<script type="text/javascript">
          window.alert("Enter Email id ..");
           </script>';
				die();
			}
			
			if(isset($_SESSION['login_id'])){
     
     $tempcheck= $_SESSION['login_id']; 
     if( $delmail== $tempcheck){
			
        echo '<script type="text/javascript">
   window.alert("Admin can not delete himself..");
</script>';
		 die();
		}		
	}
		try{
	$this->load->database(); //Coz Database is closed manually..
$this->db->delete('studenttable', array('email' => $delmail));
$countaff = $this->db->affected_rows();


   $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }
 if($countaff<1){
echo '<script type="text/javascript">
   window.alert("Wrong Email id!");
</script>';
die();

}
		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }
//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Admin Record Deleted !");
</script>';

		  }
	
 }
 

}

  private function SbookIssueSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       if(isset($_POST['checkit'])){
			$bookaccession = $this->input->post('bookacc', TRUE);
			$studentemail = $this->input->post('studentmail', TRUE);
			//----------------------1-----------
			
			$query1 = "SELECT * FROM booklisttable WHERE accessionNumber = ?";  //main is our table name....
            $dataprepared1 = array(  $bookaccession);

$result1= $this->db->query($query1, $dataprepared1);
$count1 = $result1->num_rows();
  if($count1>0){
     	//echo $count;
     	$row1=$result1->row();
     	    $aut1 = $row1-> author;
			$titl1 = $row1-> title;
			
			echo '<script>
        var authorTextField =  document.getElementsByName("bktitle");
		authorTextField[0].value ="'.$titl1.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("bkauthor");
		authorTextField[0].value ="'.$aut1.'";  
         </script> ';

$result1->free_result();

  }
		 else {
			 
		$result1->free_result();
        echo '<script type="text/javascript">
   window.alert("Book not found..");
</script>';

      }	
		//----------------------2-----------
			
			$query2 = "SELECT * FROM studenttable WHERE email = ? AND isAdmin =?";  //main is our table name....
            $dataprepared2 = array(  $studentemail, 0);

$result2= $this->db->query($query2, $dataprepared2);
$count2 = $result2->num_rows();
  if($count2>0){
     	//echo $count;
     	$row2 =$result2->row();
     	    $name2 = $row2-> sName;
			$course2 = $row2-> course;
			$year2 = $row2-> cllgYear;
			$sem2 = $row2-> semPart;
			
			
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
$result2 ->free_result();

  }
		 else {
			 $result2 ->free_result();
        echo '<script type="text/javascript">
   window.alert("Student not found..");
</script>';
		 die();
      }		
				
		  }
		  
		  
		//----------------------  making issue  --------------------------------
		
		  else  if(isset($_POST['issueit'])){
			  
			  
			$bookacs = $this->input->post('bookacc', TRUE);
			$studentems = $this->input->post('studentmail', TRUE);
		// var_dump($bookacs);var_dump($studentems);
			
			if(!isset($bookacs)){ echo '<script type="text/javascript">
          window.alert("Enter Accession Number..");
           </script>';
				die();
			}
			else if(!isset($studentems)){ echo '<script type="text/javascript">
          window.alert("Enter Students Email ..");
           </script>';
				die();
			}
			
		//----------------- Get data from table 1 -------------
		
		
			$query3 = "SELECT * FROM booklisttable WHERE accessionNumber = ?";  //main is our table name....
            $dataprepared3 = array(  $bookacs);

$result3= $this->db->query($query3, $dataprepared3);
//var_dump($result3);
//echo 'hola';
$count3 = $result3->num_rows();
  if($count3>0){
     	//echo $count;
     	$row3=$result3->row();
     	    $aut = $row3-> author;
			$titl = $row3-> title;
			
			$dept = $row3-> departmentNumber;
			$cls = $row3-> classNumber;
			
			//var_dump($row3);
			
			echo '<script>
        var authorTextField =  document.getElementsByName("bktitle");
		authorTextField[0].value ="'.$titl.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("bkauthor");
		authorTextField[0].value ="'.$aut.'";  
         </script> ';



		$result3->free_result();
  }
		 else {
			 
		$result3->free_result();
        echo '<script type="text/javascript">
   window.alert("Book not found..");
</script>';
die();

      }	
		
		//------------------- Get data from table 2 --------------
		
		$query4 = "SELECT * FROM studenttable WHERE email = ? AND isAdmin =?";  //main is our table name....
            $dataprepared4 = array(  $studentems, 0);

$result4 = $this->db->query($query4, $dataprepared4);
$count4 = $result4->num_rows();
  if($count4>0){
     	//echo $count;
     	$row4 =$result4->row();
     	    $name = $row4-> sName;
			$course = $row4-> course;
			$year = $row4-> cllgYear;
			$sem = $row4-> semPart;
			
			$stid = $row4-> stId;

			//var_dump($row4);
			
			
			echo '<script>
        var authorTextField =  document.getElementsByName("stuname");
		authorTextField[0].value ="'.$name.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stucourse");
		authorTextField[0].value ="'.$course.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stuyear");
		authorTextField[0].value ="'.$year.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stusemester");
		authorTextField[0].value ="'.$sem.'";  
         </script> ';

			 $result4 ->free_result();

  }
		 else {
			 $result4 ->free_result();
        echo '<script type="text/javascript">
   window.alert("Student not found..");
</script>';
		 die();
      }		
				
		
		//--------------- Check if book is already issued to someone else.. -----------
		//---------
	$query9 = "SELECT * FROM issuedbookrecordtable WHERE bookAccessionNumber = ?";  //it is our table
    $dataprepared9 = array(  $bookacs);
    $result9 = $this->db->query($query9, $dataprepared9);

//var_dump($result9);
$count9 = $result9 ->num_rows();
/* check if book already issued to someone, is it retuned and available... */
  if($count9>0){
     	//echo $count;
     	//$row9 =$result9->row();
		foreach ($result9->result() as $row9)
	{
			//echo $row->title;
		//	echo $row->name;
			//echo $row->body;
	
     	    $isret = $row9-> isReturned;
		if($isret == 0)	{
			echo '<script type="text/javascript">
	   window.alert("Book is not avaible, already issued to someone ..");
	</script>';
	die();
		}
     }

		$result9->free_result();
  }
	/*	 else {
			 
		$result9->free_result();
        echo '<script type="text/javascript">
   window.alert("Problem occured, Book not found,..");
</script>';
die();

      }	*/  
		
		
//---------
		
		//------------------ insert data into database --------------
		
//$booktitle = $this->input->post('btitle', TRUE);
//$bookauthor = $this->input->post('bauthor', TRUE);

try{
$this->load->database(); //Coz Database is closed manually..
$myinpdata = array(
        //'dateIssued' => $dateissue,
		 //'dateReturned' => $bookdeptnum,
        'bookAuthor' => $aut,
        'bookTitle' => $titl,
        'bookAccessionNumber' => $bookacs,
        'bookClassNumber' => $cls,
		'bookDepartmentNumber' => $dept,
		
        'isReturned' => 0,
		
        'studentId' => $stid,
        'studentName' => $name,
		'email' => $studentems,
        'studentCourse' => $course,
        'studentCllgYear' => $year,
        'studentSemPart' => $sem
       
	
		
);
//var_dump($myinpdata);

$result5= $this->db->insert('issuedbookrecordtable', $myinpdata);
$counta5 = $this->db->affected_rows();

//echo "ddddd".$couna;

       $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }
		  if($counta5<1){
echo '<script type="text/javascript">
   window.alert("Book is not available to issue Or Already issed to someone else !");
</script>';
die();

}
		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }

//In DML except SELECT, we cant call free_result()

		
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Book Issued!");
</script>';
		
		
		//------------------------------------------
		  }	  
	
 }
 
}


private function SbookReturnSubmit(){

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       if(isset($_POST['checkbook'])){
			$bookaccession = $this->input->post('bookacc', TRUE);
			//----------------------1-----------
			
			$query1 = "SELECT * FROM issuedbookrecordtable WHERE bookAccessionNumber = ? AND isReturned= ?";  //main is our table name....
            $dataprepared1 = array(  $bookaccession, 0);

$result1= $this->db->query($query1, $dataprepared1);
$count1 = $result1->num_rows();
  if($count1>0){
     	//echo $count;
     	$row1=$result1->row();
     	    $aut1 = $row1-> bookAuthor;
			$titl1 = $row1-> bookTitle;
     	    $name1 = $row1-> studentName;
			$course1 = $row1-> studentCourse;
			$year1 = $row1-> studentCllgYear;
			$sem1 = $row1-> studentSemPart;
			$dateiss1 = $row1-> dateIssued;
			$email1 =  $row1-> email;
		
			
			echo '<script>
        var authorTextField =  document.getElementsByName("bktitle");
		authorTextField[0].value ="'.$titl1.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("bkauthor");
		authorTextField[0].value ="'.$aut1.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("stuname");
		authorTextField[0].value ="'.$name1.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stucourse");
		authorTextField[0].value ="'.$course1.'";  
         </script> ';
		 
		  echo '<script>
        var authorTextField =  document.getElementsByName("stumailid");
		authorTextField[0].value ="'.$email1.'";  
         </script> ';
		 
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stuyear");
		authorTextField[0].value ="'.$year1.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stusemester");
		authorTextField[0].value ="'.$sem1.'";  
         </script> ';
		 
		 	 echo '<script>
        var authorTextField =  document.getElementsByName("datebookissued");
		authorTextField[0].value ="'.$dateiss1.'";  
         </script> ';
		 
$result1->free_result();

  }
		 else {
			 
		$result1->free_result();
        echo '<script type="text/javascript">
   window.alert("Such Book is not issued to anybody ..");
</script>';

		 }	
	  }
		  
		  
		//----------------------  making issue  --------------------------------
		
		  else  if(isset($_POST['returnbook'])){
			  
			  $bookacc = $this->input->post('bookacc', TRUE);
			// var_dump($bookacs);var_dump($studentems);
			
			if(!isset($bookacc)){ echo '<script type="text/javascript">
          window.alert("Enter Accession Number..");
           </script>';
				die();
			}
			
			
		
		//--------------- Check if book is already issued to someone else.. -----------
		//---------

   
			$query8 = "SELECT * FROM issuedbookrecordtable WHERE bookAccessionNumber = ? AND isReturned= ?";  //main is our table name....
            $dataprepared8 = array(  $bookacc, 0);

$result8= $this->db->query($query8, $dataprepared8);
$count8 = $result8->num_rows();
  if($count8>0){
     	//echo $count;
     	$row8=$result8->row();
     	    $aut8 = $row8-> bookAuthor;
			$titl8 = $row8-> bookTitle;
     	    $name8 = $row8-> studentName;
			$course8 = $row8-> studentCourse;
			$year8 = $row8-> studentCllgYear;
			$sem8 = $row8-> studentSemPart;
			$dateiss8 = $row8-> dateIssued;
			$email8 =  $row8-> email;
				
				
			echo '<script>
        var authorTextField =  document.getElementsByName("bktitle");
		authorTextField[0].value ="'.$titl8.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("bkauthor");
		authorTextField[0].value ="'.$aut8.'";  
         </script> ';

		 echo '<script>
        var authorTextField =  document.getElementsByName("stuname");
		authorTextField[0].value ="'.$name8.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stucourse");
		authorTextField[0].value ="'.$course8.'";  
         </script> ';
		 
		   echo '<script>
        var authorTextField =  document.getElementsByName("stumailid");
		authorTextField[0].value ="'.$email8.'";  
         </script> ';
		 
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stuyear");
		authorTextField[0].value ="'.$year8.'";  
         </script> ';
		 
		 echo '<script>
        var authorTextField =  document.getElementsByName("stusemester");
		authorTextField[0].value ="'.$sem8.'";  
         </script> ';
		 
		 	 echo '<script>
        var authorTextField =  document.getElementsByName("datebookissued");
		authorTextField[0].value ="'.$dateiss8.'";  
         </script> ';
		  
$result8->free_result();

  }
		 else {
			 
		$result8->free_result();
        echo '<script type="text/javascript">
   window.alert("Such Book is not issued to anybody ..");
</script>';

		 }	
	  
		  
		  
	/*	 else {
			 
		$result9->free_result();
        echo '<script type="text/javascript">
   window.alert("Problem occured, Book not found,..");
</script>';
die();

      }	*/  
		
		
//---------
		
		//------------------ update data into database --------------
		
//$booktitle = $this->input->post('btitle', TRUE);
//$bookauthor = $this->input->post('bauthor', TRUE);

try{
$this->load->database(); //Coz Database is closed manually..
$myupddata = array(
        //'dateIssued' => $dateissue,
	
        'isReturned' => 1 ,
		'dateReturned' =>  date("Y-m-d H:i:s")
		
);
//var_dump($myinpdata);
   $isr=0;
$wherestring = "(bookAccessionNumber = ".$bookacc." AND isReturned = ".$isr." )"; 
$this->db->where($wherestring);
$this->db->update('issuedbookrecordtable',  $myupddata);
$countaff = $this->db->affected_rows();


   $db_error = $this->db->error();
        if (!((empty($db_error))||  $db_error['code']==0)) { // if  $db_error['code']==0 means no error..
          $errmsg= 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
         echo '<script type="text/javascript">
   window.alert("'.$errmsg.'");
</script>'; 
die();
// unreachable retrun statement !!!
          }
	if($countaff<1){
echo '<script type="text/javascript">
   window.alert("Enter correct Accession Number!");
</script>';
die();
}
		} catch (Exception $e) {
        // this will not catch DB related errors. But it will include them, because this is more general. 
         echo '<script type="text/javascript">
   window.alert("'. $e->getMessage().'");
</script>';
       
    }
//In DML except SELECT, we cant call free_result()
//$result2->free_result();
$this->db->close();

echo '<script type="text/javascript">
   window.alert("Student Book Returned !");
</script>';

		  }
	 
	
		//------------------------------------------
	  }	  
	
 }
 

}
