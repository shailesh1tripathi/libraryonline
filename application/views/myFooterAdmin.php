
<!-- Startof footer -->

  <footer class="footer" >
    
    <div class=" container-fluid ">
        <nav>
            <ul style="text-align: center;">
                <li>
                    <a href="#">
                        Boss Alive
                    </a>
                </li>
                <li>
                    <a href="#">
                       About Us
                    </a>
                </li>
              </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script><a href="#"> Boss Alive</a>.
        </div>
    </div>
    


</footer>

               
             </div>
          
        </div>
        
   
        
    

<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/core/jquery.min.js');?>" ></script>
<script src="<?php echo base_url('assets/admin_assets_pro/js/core/popper.min.js');?>" ></script>


<script src="<?php echo base_url('assets/admin_assets_pro/js/core/bootstrap.min.js');?>" ></script>


<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/perfect-scrollbar.jquery.min.js');?>" ></script>

<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/moment.min.js');?>"></script>



<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/bootstrap-switch.js');?>"></script>

<!--  Plugin for Sweet Alert -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/sweetalert2.min.js');?>"></script>

<!-- Forms Validations Plugin -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/jquery.validate.min.js');?>"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/jquery.bootstrap-wizard.js');?>"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/bootstrap-selectpicker.js');?>" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/bootstrap-datetimepicker.js');?>"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/jquery.dataTables.min.js');?>"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/bootstrap-tagsinput.js');?>"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/jasny-bootstrap.min.js');?>"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/fullcalendar.min.js');?>"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/jquery-jvectormap.js');?>"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/nouislider.min.js');?>" ></script>


<!--  Google Maps Plugin    -->

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Chart JS -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/chartjs.min.js');?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/admin_assets_pro/js/plugins/bootstrap-notify.js');?>"></script>





<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --><script src="<?php echo base_url('assets/admin_assets_pro/js/now-ui-dashboard.min.js?v=1.4.1');?>" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/admin_assets_pro/demo/demo.js');?>"></script>


  <!-- Sharrre libray -->
<script src="<?php echo base_url('assets/admin_assets_pro/demo/jquery.sharrre.js');?>"></script>
<!-- facebook and social --> 
<!-- 
<script>
  $(document).ready(function(){
    
    
    $('#facebook').sharrre({
  share: {
    facebook: true
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  click: function(api, options){
    api.simulateClick();
    api.openPopup('facebook');
  },
  template: '<i class="fab fa-facebook-f"></i> Facebook',
  url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
});

    $('#google').sharrre({
  share: {
    googlePlus: true
  },
  enableCounter: false,
  enableHover: false,
  enableTracking: true,
  click: function(api, options){
    api.simulateClick();
    api.openPopup('googlePlus');
  },
  template: '<i class="fab fa-google-plus"></i> Google',
  url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
});

    $('#twitter').sharrre({
  share: {
    twitter: true
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  buttons: { twitter: {via: 'CreativeTim'}},
  click: function(api, options){
    api.simulateClick();
    api.openPopup('twitter');
  },
  template: '<i class="fab fa-twitter"></i> Twitter',
  url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
});

    
    
    // Facebook Pixel Code Don't Delete
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

try{
  fbq('init', '111649226022273');
  fbq('track', "PageView");

}catch(err) {
  console.log('Facebook Track Error:', err);
}

  });
</script>
<noscript>
  <img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
/>

</noscript>
-->
  <script>
  $(document).ready(function(){
    $().ready(function(){
        $sidebar = $('.sidebar');
        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
        //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
        //         $('.fixed-plugin .dropdown').addClass('show');
        //     }
        //
        // }

        $('.fixed-plugin a').click(function(event){
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if($(this).hasClass('switch-trigger')){
                if(event.stopPropagation){
                    event.stopPropagation();
                }
                else if(window.event){
                   window.event.cancelBubble = true;
                }
            }
        });

        $('.fixed-plugin .background-color span').click(function(){
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if($sidebar.length != 0){
                $sidebar.attr('data-color',new_color);
            }

            if($full_page.length != 0){
                $full_page.attr('filter-color',new_color);
            }

            if($sidebar_responsive.length != 0){
                $sidebar_responsive.attr('data-color',new_color);
            }
        });

        $('.fixed-plugin .img-holder').click(function(){
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if( $sidebar_img_container.length !=0 && $('.switch-sidebar-image input:checked').length != 0 ){
                $sidebar_img_container.fadeOut('fast', function(){
                   $sidebar_img_container.css('background-image','url("' + new_image + '")');
                   $sidebar_img_container.fadeIn('fast');
                });
            }

            if($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0 ) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $full_page_background.fadeOut('fast', function(){
                   $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                   $full_page_background.fadeIn('fast');
                });
            }

            if( $('.switch-sidebar-image input:checked').length == 0 ){
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $sidebar_img_container.css('background-image','url("' + new_image + '")');
                $full_page_background.css('background-image','url("' + new_image_full_page + '")');
            }

            if($sidebar_responsive.length != 0){
                $sidebar_responsive.css('background-image','url("' + new_image + '")');
            }
        });

        $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function(){
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if($input.is(':checked')){
                if($sidebar_img_container.length != 0){
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image','#');
                }

                if($full_page_background.length != 0){
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image','#');
                }

                background_image = true;
            } else {
                if($sidebar_img_container.length != 0){
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                }

                if($full_page_background.length != 0){
                    $full_page.removeAttr('data-image','#');
                    $full_page_background.fadeOut('fast');
                }

                background_image = false;
            }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function(){
          var $btn = $(this);

          if(sidebar_mini_active == true){
              $('body').removeClass('sidebar-mini');
              sidebar_mini_active = false;
              nowuiDashboard.showSidebarMessage('Sidebar mini deactivated...');
          }else{
              $('body').addClass('sidebar-mini');
              sidebar_mini_active = true;
              nowuiDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function(){
              window.dispatchEvent(new Event('resize'));
          },180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function(){
              clearInterval(simulateWindowResize);
          },1000);
        });
    });
  });
</script>


<!-- Mimp Change color of side bar item which is selected and make sidebar mini off, coz its irritating..-->
<script>

$(document).ready(function() {

  $('.nav li a').click(function(e) {

  $('.nav li').removeClass('active');
	 $(this).parent('li').addClass('active');
      $('.nav li a').each(function(){
				if ($(this).prop('href') == window.location.href) {
				$(this).parent('li').addClass('active');
				}
			});
	});
	
	$('.nav li a').each(function(){
				if ($(this).prop('href') == window.location.href) {
				$(this).parent('li').addClass('active');
				
				
				$(this).parent().parent().parent().removeClass('collapse');
				$(this).parent().parent().parent().addClass('collapse in show');
				$(this).parent().parent().parent().attr("area-expanded", "true");
		
				}
			});
  
});
</script>


 <!--

  <script>
    $(document).ready(function(){
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
      
      demo.initVectorMap();
      
    });
	
	
</script>
     <script>

    @media only screen and (min-device-width: 480px) {
        div#ok.content {
            margin-left: 150px; 
			background: yellow;
        }
		
		</script> -->
















    </body>

</html>
