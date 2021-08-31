<?php
   class User_Model extends CI_Model {

	        public function __construct()
        {
                parent::__construct();
               // @ob_start();
              // echo 'i am Universal_Model constructor';
                // Your own constructor code
        }


	
public function databaseSearchBooksBody(){

	 $query = "SELECT * FROM booklisttable ;";  //main is our table name....
//$dataprepared = array(  $loginMailid);
$result= $this->db->query($query);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
	 $SN=0;

	           // If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
      return $result;   	
 }
 
	  else {
        echo '<script type="text/javascript">
   window.alert("No data found..");
</script>';
return NULL; 	
      }
	}
	


public function databaseViewmyIssuedBooksBody(){

	 $query = "SELECT * FROM issuedbookrecordtable WHERE isReturned=? AND email= ? ORDER BY dateIssued DESC;";  //main is our table name....
$isRet= 0;
$usermail=  $_SESSION['login_id'];
	 $dataprepared = array( $isRet, $usermail);
$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
	 $SN=0;

	           // If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
      return $result;   	
 }
 
	  else {
        echo '<script type="text/javascript">
   window.alert("No data found..");
</script>';
return NULL; 	
      }
	
	
	}
   

 
public function databaseViewmyBooksHistoryBody(){

	 $query = "SELECT * FROM issuedbookrecordtable WHERE email= ? ORDER BY dateIssued DESC;";  //main is our table name....

$usermail=  $_SESSION['login_id'];
	 $dataprepared = array( $usermail);
$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
	 $SN=0;

	           // If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
      return $result;   	
 }
 
	  else {
        echo '<script type="text/javascript">
   window.alert("No data found..");
</script>';
return NULL; 	
      }
	
	
	}
   
  
   
   
   
   }
   
	  ?>
                   
     