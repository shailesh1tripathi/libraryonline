 <!-- Start of body-->
<div class="content">
         



<div class="row">
  <div class="col-md-6">

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Add New Admin </h4>
        
    </div>
    <div class="card-body">
     <div> 
<!-- put all code here -->

                 <form action = "<?php $_PHP_SELF ?>" role="form" method = "post">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                      </div>
                      <input class="form-control" placeholder="Name" type="text" name="adname"   value="<?php if(isset($_POST['adname'])){ echo $_POST['adname'];}?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email id" type="email"  name="admmail"   value="<?php if(isset($_POST['admmail'])){ echo $_POST['admmail'];}?>" required>
                    </div>
                  </div>
				   <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                      </div>
                      <input class="form-control" placeholder="Contact Number" type="text"  name="admcont"   value="<?php if(isset($_POST['admcont'])){ echo $_POST['admcont'];}?>" required>
                    </div>
                  </div>
				
                 <div id="matchpass" >
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                      </div>
                       <input type="password" class="form-control" placeholder="Password" name="pw" id="password" required>
                    </div><!-- id is used to run a jquery script to match both passwords -->
                  </div>
				  
				  <div class="form-group">
                    <div class="input-group input-group-alternative" >
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-check-circle"></i></span>
                      </div>
                           <input type="password" class="form-control" placeholder="Confirm Password" name="pw2" id="confirm_password" required>
                    </div>
                  </div>
				  </div>
				  
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4"> Add Admin User </button>
                  </div>
                </form>
				
             	<script>
		var password = document.getElementById("password")
		  , confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
			confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;

			</script>

<!-- end put all code here -->

	      </div> 
	     </div>
        </div>
       </div>
      </div>

     </div>
<!-- End of body-->

 