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
                      <input class="form-control" placeholder="Admin's Email" type="text" name="admmail"   value="<?php if(isset($_POST['admmail'])){ echo $_POST['admmail'];}?>" required>
                    </div>
                  </div>
				  <input type="hidden"  name="subm" value="admDtls" />
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
        <h4 class="card-title"> Delete a Student </h4>
        
    </div>
    <div class="card-body">
     <div> 
<!-- put all code here -->

                 <form action = "<?php $_PHP_SELF ?>" role="form" method = "post">
				    
					<input type="hidden" name="admmaildelete"   value=""><!-- to post accession number for deleting book -->
					
                      <div class="form-group">
                        <label> Admin's Name </label>
                        <input type="text" class="form-control" placeholder="" name="admname" value="" disabled>
                      </div>
                     
				
                       <div class="form-group">
                        <label> Contact </label>
                        <input type="text" class="form-control" placeholder="" name="admcontact" value="" disabled>
                      </div>
                  
				  
				    <input type="hidden"  name="subm" value="admdelete" />
              
                  <div class="text-center">
                    <button type="submit" class="btn btn-danger mt-4"> Delete Admin's Record </button>
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

 