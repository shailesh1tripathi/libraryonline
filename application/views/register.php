
<main style="overflow: visible	">
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Sign Up</small>
                </div>
                 <form action = "<?php $_PHP_SELF ?>" role="form" method = "post">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-circle-o"></i></span>
                      </div>
                      <input class="form-control" placeholder="Name" type="text" name="uname"   value="<?php if(isset($_POST['uname'])){ echo $_POST['uname'];}?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" type="email"  name="mailid"   value="<?php if(isset($_POST['mailid'])){ echo $_POST['mailid'];}?>" required>
                    </div>
                  </div>
				   <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                      </div>
                      <input class="form-control" placeholder="Contact" type="number"  name="contactnum"   value="<?php if(isset($_POST['contactnum'])){ echo $_POST['contactnum'];}?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                      </div>
                      <input class="form-control" placeholder="Course" type="text"  name="coursename"   value="<?php if(isset($_POST['coursename'])){ echo $_POST['coursename'];}?>" required>
                    </div>
                  </div>
				
					<div class="form-group">
								  <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar-o "></i></span>
                      </div>
                    <select class="form-control" name="yearSel">
					  <option value="1">Year 1</option>
					  <option value="2">Year 2</option>
					  <option value="3">Year 3</option>
					  <option value="4">Year 4</option>
					 </select>
                    </div>	
				  </div>
				 
								  <div class="form-group">
								  <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-id-card-o "></i></span>
                      </div>
                 
					<select class="form-control" name="semesterSel">
					  <option value="1">Winter</option>
					  <option value="2">Summer</option>
					 </select>
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
				  
				  
				  
				  
                  <div class="text-muted font-italic"></div>
                  <div class="row my-4">
                    
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
					  
                 <a href="<?php echo base_url('PublicCtrl');?>" >   <button type="button" class="btn btn-danger mt-4" >Cancel</button></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

  </main>
  