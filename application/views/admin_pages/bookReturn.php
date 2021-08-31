    <!-- Start of body-->
<div class="content">
         



<div class="row">
  <div class="col-md-4" >

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Search for Return </h4>
        
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
                      <input class="form-control" placeholder="Book's Accession Number" type="text" name="bookacc"   value="<?php if(isset($_POST['bookacc'])){ echo $_POST['bookacc'];}?>" required>
                    </div>
                  </div>
			
			
					 <div class="text-center">
						<input type="submit"  name="checkbook" value="Check Details" class="btn btn-info mt-4">
			
						<input type="submit"  name="returnbook" value="Return it" class="btn btn-secondary mt-4">
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
        <h4 class="card-title"> Details </h4>
        
    </div>
    <div class="card-body">
     <div> 
<!-- put all code here -->

                 <form >
				  
                      <div class="form-group">
                        <label> Book Author </label>
                        <input type="textarea" class="form-control" placeholder="" name="bkauthor" value="" disabled>
                      </div>
                     
				
                       <div class="form-group">
                        <label> Book Title </label>
                        <input type="textarea" class="form-control" placeholder="" name="bktitle" value="" disabled>
                      </div>
                  
				  
				   
				     <div class="row">
                   
					 <div class="col-md-6">
                       <div class="form-group">
                        <label> Student Name </label>
                        <input type="text" class="form-control" placeholder="" name="stuname" value="" disabled>
                      </div>
					 </div>
                  
				   <div class="col-md-6">
                      <div class="form-group">
                        <label> Student Course </label>
                        <input type="text" class="form-control" placeholder="" name="stucourse" value="" disabled>
                      </div>
                    </div>
					 
					 </div>
					
					
                       <div class="form-group">
                        <label> Student Email </label>
                        <input type="text" class="form-control" placeholder="" name="stumailid" value="" disabled>
                      </div>
                  
				   
				     <div class="row">
					 
                   
				    <div class="col-md-6">
                       <div class="form-group">
                        <label> Student Year </label>
                        <input type="text" class="form-control" placeholder="" name="stuyear" value="" disabled>
                      </div>
                    </div>
				   
					 <div class="col-md-6">
                       <div class="form-group">
                        <label> Student Semester </label>
                        <input type="text" class="form-control" placeholder="" name="stusemester" value="" disabled>
                      </div>
                    </div>
				
                  </div>
				  
				  
				   <div class="form-group">
                        <label> Date of Issue for Book </label>
                        <input type="textarea" class="form-control" placeholder="" name="datebookissued" value="" disabled>
                      </div>
				   
                  <div class="text-center">
                 
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

 