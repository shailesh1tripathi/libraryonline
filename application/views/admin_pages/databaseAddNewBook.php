 <!-- Start of body-->
<div class="content">
         



<div class="row">
  <div class="col-md-6">

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Add Book to Database </h4>
        
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
                      <input class="form-control" placeholder="Book Title" type="text" name="btitle"   value="<?php if(isset($_POST['btitle'])){ echo $_POST['btitle'];}?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input class="form-control" placeholder="Author Name" type="text"  name="bauthor"   value="<?php if(isset($_POST['bauthor'])){ echo $_POST['bauthor'];}?>" required>
                    </div>
                  </div>
				   <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                      </div>
                      <input class="form-control" placeholder="Accession Number" type="text"  name="accnum"   value="<?php if(isset($_POST['accnum'])){ echo $_POST['accnum'];}?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                      </div>
                      <input class="form-control" placeholder="Class Number" type="text"  name="classnum"   value="<?php if(isset($_POST['classnum'])){ echo $_POST['classnum'];}?>" required>
                    </div>
                  </div>
				
				
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                      </div>
                       <input type="text" class="form-control" placeholder="Department Number" name="deptnum" value="<?php if(isset($_POST['deptnum'])){ echo $_POST['deptnum'];}?>" required>
                    </div><!-- id is used to run a jquery script to match both passwords -->
                  </div>
		
                
                
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4"> Add Book </button>
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

 