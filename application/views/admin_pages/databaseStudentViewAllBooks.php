  <!-- Start of body-->
<div class="content">
 <div class="row">
 <!---------------- Form to input data ------------------>
  <div class="col-md-3">

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Enter Email of Student </h4>
        
    </div>
    <div class="card-body">
     <div> 
<!-- put all code here -->

   <form action = "<?php $_PHP_SELF ?>" role="form" method = "post">
				 
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input class="form-control" placeholder="Students Email id" type="text" name="studentmail"   value="<?php if(isset($_POST['studentmail'])){ echo $_POST['studentmail'];}?>" required>
                    </div>
                  </div>
			
			
					 <div class="text-center">
						<input type="submit"  value="Check Details" class="btn btn-info mt-4" style="background-color: #2CA8FF; color: white; opacity: 1;">
			
					  </div>
				  
				 
                </form>
             
			 

<!-- end put all code here -->

	      </div> 
	     </div>
        </div>
       </div>
   
 
 <!---------- Table to display data ------------->
 
  <div class="col-md-9">

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Database View All Books of a Student </h4>
        
    </div>
    <div class="card-body">
     <div> 
<!-- put all code here -->
 <link href="<?php echo base_url('assets/table_admin_view_assets/css/fresh-bootstrap-table.css');?>" rel="stylesheet" />
   <script src="<?php echo base_url('assets/table_admin_view_assets/bootstrap-table.min.js');?>"></script>
   
  <div class="fresh-table full-color-orange">
        <!--
          Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
          Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
        -->
          <div class="toolbar">
            <button id="alertBtn" class="btn btn-default">Alert</button>
          </div>

          <table id="fresh-table" class="table">
  <thead>
              <th data-field="sn">SN</th>
              <th data-field="author" data-sortable="true">Author</th>
              <th data-field="title" data-sortable="true">Title</th>
              <th data-field="accessionnum" data-sortable="true">Accession</th>
			  <th data-field="issuedate" data-sortable="true">Issued</th>
			  <th data-field="returneddate" data-sortable="true">Returned</th>
			   <th data-field="isreturned" data-sortable="true">isReturned</th>
			  
   <!-- dont delete it, it will delete all search options and pagination --><th data-field="actions" data-visible="false"></th>
            </thead>
            <tbody>
              <!-- 	
            <tr>
                <td>1</td>
                <td>Dakota Rice</td>
                <td>$36,738</td>
                <td>Niger</td>
                <td>Oud-Turnhout</td>           
              </tr>
			  -->
       <?php   
	 $SN=0;
	 if(null !== $resultmega){
	   foreach ($resultmega ->result() as $row)
	{
		/*if(($row->isReturned)==1){
			continue;
		}*/
		
		echo "<tr> ";
		    $SN++;
		    echo "<td>".$SN."</td>";
			echo  "<td>".$row->bookAuthor."</td>";
			echo  "<td>".$row->bookTitle."</td>";
			echo  "<td>".$row->bookAccessionNumber."</td>";
			echo  "<td>".$row->dateIssued."</td>";
			echo  "<td>".$row->dateReturned."</td>";
			echo  "<td>".$row->isReturned."</td>";
		echo "</tr>";
			
	}
			
	}
	?>
            </tbody>
			
			
			
			
			
			
			
          </table>
        </div>

 
<script type="text/javascript">
    var $table = $('#fresh-table')
    var $alertBtn = $('#alertBtn')

    

 

    $(function () {
      $table.bootstrapTable({
        classes: 'table table-hover table-striped',
        toolbar: '.toolbar',

        search: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        striped: true,
        sortable: true,
        pageSize: 8,
        pageList: [8, 10, 25, 50, 100],

        formatShowingRows: function (pageFrom, pageTo, totalRows) {
          return ''
        },
        formatRecordsPerPage: function (pageNumber) {
          return pageNumber + ' rows visible'
        }
      })

      $alertBtn.click(function () {
        alert('You pressed on Alert')
      })
    })

  </script>
  
 
<!-- end put all code here -->

	      </div> 
	     </div>
        </div>
       </div>
      </div>

     </div>
<!-- End of body-->
