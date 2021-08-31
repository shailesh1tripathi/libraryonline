<?php
   class Universal_Model extends CI_Model {

	        public function __construct()
        {
                parent::__construct();
                ob_start(); //using it is best but hooks and compress not working with it, if not using it then several php functions not working like die(), exit()
        }


public function Sget_loginid(){
  if(isset($_SESSION['login_id'])){
     
     return $_SESSION['login_id']; 
   }
else return " Value is Null or empty..";
}

public function Sget_loginname(){
  if(isset($_SESSION['login_id'])){
     
     
  $dca = $_SESSION['login_id'];
$query = "SELECT  sName FROM studenttable WHERE Email = ?";  //main is our table name....
 $dataprepared = array( $dca);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
// If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
      //echo $count;
      $row=$result->row();
     // $isAdmn = $row-> isAdmin;
     //$this->session->set_userdata('login_id', $loginMailid); //MIMP
     //   echo '<script type="text/javascript">
     //window.alert("Welcome welcome..");
     //</script>';

   return ($row-> sName);
  }

   }
else return " Value is Null or empty..";

}



public function Scheck_session(){
  
//   echo $this->session->userdata('login_id');
  
     if(!isset($_SESSION['login_id'])){
      //  Means used is not logged in..
     //redirect(base_url('PublicCtrl/logout'));
       echo "<script> location.href='".base_url('PublicCtrl/logout')."'; </script>"; 
        exit(); 
         }
    }
 // $this-> login_id = $_SESSION['login_id'];	
//}	
// public function make_session($loginId){
// 	echo 'make_session';
//}
public function Scheck_admin_security(){

  $dc = $_SESSION['login_id'];
$query = "SELECT  isAdmin FROM studenttable WHERE Email = ?";  //main is our table name....
 $dataprepared = array( $dc);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
// If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
      //echo $count;
      $row=$result->row();
     // $isAdmn = $row-> isAdmin;
     //$this->session->set_userdata('login_id', $loginMailid); //MIMP
     //   echo '<script type="text/javascript">
     //window.alert("Welcome welcome..");
     //</script>';

      if(! ($row-> isAdmin)==1){
		   echo "<script> location.href='".base_url('PublicCtrl/logout')."'; </script>"; 
        exit(); 
    // redirect(base_url('PublicCtrl/logout')); 
     }
}

}

public function Scheck_user_security(){

  $dc = $_SESSION['login_id'];
$query = "SELECT  isAdmin FROM studenttable WHERE Email = ?";  //main is our table name....
 $dataprepared = array( $dc);

$result= $this->db->query($query, $dataprepared);
$count = $result->num_rows();
 //$hashpass=password_hash($userpw,PASSWORD_BCRYPT);
// If result matched $myemailid and $mypassword, table row must be 1 row
  if($count>0){
      //echo $count;
      $row=$result->row();
     // $isAdmn = $row-> isAdmin;
     //$this->session->set_userdata('login_id', $loginMailid); //MIMP
     //   echo '<script type="text/javascript">
     //window.alert("Welcome welcome..");
     //</script>';

      if(($row-> isAdmin)==1){
     
	  echo "<script> location.href='".base_url('PublicCtrl/logout')."'; </script>"; 
        exit(); 
	// redirect(base_url('PublicCtrl/logout')); 
     }
}

}



}


 ?>