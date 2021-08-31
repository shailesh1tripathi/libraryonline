  <!-- Start of body-->
<div class="content">
         



<div class="row">
  <div class="col-md-4" >

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Search </h4>
        
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
                      <input class="form-control" placeholder="Student's Email" type="text" name="stuMail"   value="<?php if(isset($_POST['stuMail'])){ echo $_POST['stuMail'];}?>" required>
                    </div>
                  </div>
				  <input type="hidden"  name="submitvalu" value="getDetls" />
				   <div class="text-center">
                    <button type="submit" class="btn btn-info mt-4"> Get Details </button>
                  </div>
                </form>
             
			 
			  </div> 
	     </div>
        </div>
       </div>
   
				  
				  
		<!-- Second form submit to display and delete book -->		  

  <div class="col-md-8">

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Change Password </h4>
        
    </div>
    <div class="card-body">
     <div> 
<!-- put all code here -->

                 <form action = "<?php $_PHP_SELF ?>" role="form" method = "post">
				    
					<input type="hidden" name="studentDetail"   value="" required><!-- to post accession number for deleting book -->
					
                      <div class="form-group">
                        <label> Student Name </label>
                        <input type="text" class="form-control" placeholder="" name="stuname" value="" disabled>
                      </div>
                     
				
                       <div class="form-group">
                        <label> Course </label>
                        <input type="text" class="form-control" placeholder="" name="stucourse" value="" disabled>
                      </div>
                  
				    <div class="form-group">
                        <label> Contact </label>
                        <input type="text" class="form-control" placeholder="" name="contac" value="" disabled>
                      </div>
				  
				   
				   
				     <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Year </label>
                        <input type="text" class="form-control" placeholder="" name="clgyear" value="" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                        <label> Semester </label>
                        <input type="text" class="form-control" placeholder="" name="semepart" value="" disabled>
                      </div>
                    </div>
                  </div>
				  
				   <div class="form-group">
                        <label> New Password </label>
                        <input type="text" class="form-control" placeholder="" name="stunewPass" value="" required>
                      </div>
				  
				    <input type="hidden"  name="submitvalu" value="changepass" />
              
                  <div class="text-center">
                    <button type="submit" class="btn btn-danger mt-4"> Change Password </button>
                  </div>
                </form>
             

<!-- end put all code here -->

	      </div> 
	     </div>
        </div>
       </div>
    
   </div>

     </div>
<!-- End of body-->

 