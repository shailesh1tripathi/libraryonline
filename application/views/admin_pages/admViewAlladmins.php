  <!-- Start of body-->
<div class="content">
 <div class="row">
  <div class="col-md-12">

<div class="card">
    <div class="card-header">
        <h4 class="card-title"> View all Admins </h4>
        
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
              <th data-field="name" data-sortable="true">Name</th>
			  <th data-field="contact" data-sortable="true">Contact</th>
              <th data-field="email" data-sortable="true">Email</th>
			  
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
		/*if(($row->isAdmin)!=1){
			continue;
		}*/
		
		echo "<tr> ";
		    $SN++;
		    echo "<td>".$SN."</td>";
			echo  "<td>".$row->sName."</td>";
			echo  "<td>".$row->contact."</td>";
			echo  "<td>".$row->email."</td>";
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
