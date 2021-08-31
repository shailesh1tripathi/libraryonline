<?php
   class Admin_Model extends CI_Model {

	        public function __construct()
        {
                parent::__construct();
               // @ob_start();
              // echo 'i am Universal_Model constructor';
                // Your own constructor code
        }


	
public function databaseViewAllBooksBody(){

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
	


public function databaseViewAllIssuedBooksBody(){

	 $query = "SELECT * FROM issuedbookrecordtable WHERE isReturned=? ORDER BY dateIssued DESC;";  //main is our table name....
$isRet=0;
	 $dataprepared = array( $isRet);
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
   



public function stuViewAllstudentsBody(){

	 $query = "SELECT * FROM studenttable  WHERE isAdmin=? ;";  //main is our table name....
$isAdmin=0;
	 $dataprepared = array( $isAdmin);
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




public function admViewAlladminsBody(){

	 $query = "SELECT * FROM studenttable  WHERE isAdmin=? ; ;";  //main is our table name....
$isAdmin=1;
	 $dataprepared = array( $isAdmin);
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
                   
     