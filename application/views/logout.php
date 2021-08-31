<?php
    
   //set_last_active();
  // session_destroy();
   $this->db->close();
  // header("Location: login.php");
   session_destroy();
  
        echo "<script> location.href='".base_url('PublicCtrl/login')."'; </script>"; 
        exit(); 
    
     //redirect(base_url('PublicCtrl/login')); //B// Dont delete it, coz this function logout.php is used in several place to make redirection to login page... 
?>