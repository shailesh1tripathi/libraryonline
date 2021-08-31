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
                      <input class="form-control" placeholder="Book Accession Number" type="text" name="accsnDelete"   value="<?php if(isset($_POST['accsnDelete'])){ echo $_POST['accsnDelete'];}?>" required>
                    </div>
                  </div>
				  <input type="hidden"  name="submitval" value="getDetails" />
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
        <h4 class="card-title"> Delete a book from Database </h4>
        
    </div>
    <div class="card-body">
     <div> 
<!-- put all code here -->

                 <form action = "<?php $_PHP_SELF ?>" role="form" method = "post">
				    
					<input type="hidden" name="accessiondel"   value=""><!-- to post accession number for deleting book -->
					
                      <div class="form-group">
                        <label> Title </label>
                        <input type="textarea" class="form-control" placeholder="" name="booktitlename" value="" disabled>
                      </div>
                     
				
                       <div class="form-group">
                        <label> Author </label>
                        <input type="textarea" class="form-control" placeholder="" name="bookauthorname" value="" disabled>
                      </div>
                  
				  
				   
				   
				     <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Class Number </label>
                        <input type="text" class="form-control" placeholder="" name="classnum" value="" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                        <label> Department Number </label>
                        <input type="text" class="form-control" placeholder="" name="departnum" value="" disabled>
                      </div>
                    </div>
                  </div>
				  
				    <input type="hidden"  name="submitval" value="delete" />
              
                  <div class="text-center">
                    <button type="submit" class="btn btn-danger mt-4"> Delete Book </button>
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

 