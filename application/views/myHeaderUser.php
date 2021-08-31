<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta name="description" content="Library Online">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="author" content="Boss Alive">
     <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/welcome_assets/img/apple-icon.png');?>">
    
 <title>
     Library Online
</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


<!-- Extra details for Live View on GitHub Pages -->

<!--     Fonts and icons     -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>


 
<!-- CSS Files -->

<link href="<?php echo base_url('assets/admin_assets_pro/css/bootstrap.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/admin_assets_pro/css/now-ui-dashboard.min.css?v=1.4.1');?>" rel="stylesheet" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="<?php echo base_url('assets/admin_assets_pro/demo/demo.css');?>" rel="stylesheet" />

    
    </head>

   <!-- <body class=" sidebar-mini "> -->
 <body >
        <div class="wrapper ">
          
            <div class="sidebar" data-color="red">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->

    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <i class="fas fa-user-shield fa-2x"></i>
        </a>

        <a href="#" class="simple-text logo-normal">
         <?php echo $this->Universal_Model->Sget_loginname(); ?>
        </a>
        
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
              <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
              <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
  	    </div>
        
    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <!-- Image and name of user logged in -->
      <!--  <div class="user">
            <div class="photo">
                <img src="<?php echo base_url('assets/admin_assets_pro/img/james.jpg');?>" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        James Amos
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">S</span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        -->
        <ul class="nav">
               <li>
                    <a href="<?php echo base_url('UserCtrl/databaseViewmyIssuedBooks');?>">
                      <i class="fas fa-book-open"></i>
                      <p>My Books</p>
                    </a>
              </li>
			  
			  <li >
                    <a href="<?php echo base_url('UserCtrl/databaseViewmyBooksHistory');?>">
                       <i class="fas fa-book"></i>
                      <p>My Library History</p>
                    </a>
              </li>
			  
			  <li >
                    <a href="<?php echo base_url('UserCtrl/databaseSearchBooks');?>">
                        <i class="fab fa-searchengin"></i>
                      <p>Search Books</p>
                    </a>
              </li>
			  
			  <li >
                      <a href="<?php echo base_url('UserCtrl/myProfileUser');?>">
                       <i class="fas fa-user"></i>
                      <p>My Account</p>
                    </a>
              </li>
         
        </ul>
    </div>
</div>


<!--  Sidebar button to make mini on page scrollbar -->

         <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
						<span class="badge filter badge-yellow" data-color="yellow"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            
            <li class="header-title">
                Sidebar Mini
            </li>
            <li class="adjustments-line">

              <div class="togglebutton switch-sidebar-mini">
                <span class="label-switch">OFF</span>
                <input type="checkbox" name="checkbox" checked class="bootstrap-switch" id="bossoffit"
                  data-on-label=""
                  data-off-label=""
                  />
                <span class="label-switch label-right">ON</span>
              </div>
            </li>

          
            

        </ul>
    </div>
</div>

<!-- end of sidebar -->

            <div class="main-panel" id="main-panel">
              <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
	<div class="container-fluid">
    <div class="navbar-wrapper">
      
			 <div class="navbar-toggle">
				<button type="button" class="navbar-toggler">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</button>
			      </div>
                        
      
			 <div><h4 > Library Online </h4> </div>
		

                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                               </button>
                        
            </div>
                    

	    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      
      <!--  
          <form>
    <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search...">
        <div class="input-group-append">
         <div class="input-group-text">
           <i class="now-ui-icons ui-1_zoom-bold"></i>
         </div>
       </div>
    </div>
</form>
-->
<ul class="navbar-nav">



  <li class="nav-item">
    <a class="nav-link" href="#">
	
     <!-- <i class="now-ui-icons media-2_sound-wave"></i> -->
	  <i class="fas fa-user"></i>
      <p>
        <span class="d-lg-none d-md-block"> </span> 
		
      </p>
	 <p style="font-size: 16px;"> <?php echo $this->Universal_Model->Sget_loginid(); ?> </p>
    </a>
  </li>
  <!--
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="now-ui-icons location_world"></i>
      <p>
        <span class="d-lg-none d-md-block">Some Actions</span>
      </p>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
  -->

  
  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('PublicCtrl/logout');?>">
      <i class="now-ui-icons arrows-1_share-66"></i>
      <p>
        <span class="d-lg-none d-md-block">Log out</span>
      </p>
    </a>
  </li>
</ul>

        
      

      
	    </div>
	</div>
</nav>
<!-- End Navbar -->


              

   <div class="panel-header panel-header-lg" style="height:20px">
  

  
  
</div>
