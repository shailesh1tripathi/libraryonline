
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
                  <small>Login</small>
                </div>
               <form action = "<?php $_PHP_SELF ?>" role="form" method = "post">
                  
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" type="email"  name="loginmail"   value="<?php if(isset($_POST['loginmail'])){ echo $_POST['loginmail'];}?>" required>
                    </div>
                  </div>
				   
				 
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                      </div>
                       <input type="password" class="form-control" placeholder="Password" name="loginpass" required>
                    </div>
                  </div>
				  
				  
				  
				  
				  
                  <div class="text-muted font-italic"></div>
                  <div class="row my-4">
                    
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Login</button>
                  
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

			</script>
  </main>
  