
<?php
require "../header.php";

?>


		<!--left-fixed -navigation-->
		<?php
    include '../sidebar1.php';

    ?>
    <!--MAIN-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <h2 class="title1">Tambah Data User</h2>
        
           <div class=" form-grids row form-grids-right">
            <div class="widget-shadow " data-example-id="basic-forms"> 
              <div class="form-title">
                <h4>Form Data User :</h4>
              </div>
              <div class="form-body">
                <form action="tambah_proses.php" method="post" enctype="multipart/form-data" class="form-horizontal"> 
                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Nama Lengkap</label> 
                    <div class="col-sm-9"> 
                      <input type="text" class="form-control" id="txtarea1" name="username" placeholder="Nama Lengkap" required>
                    </div> 
                  </div> 

                  <div class="form-group"> 
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-9"> 
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div> 
                  </div> 


                     <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label> 
                    <div class="col-sm-9"> 
                      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
                    </div> 
                  </div> 


                  <div class="col-sm-offset-2"> 
                    <button type="submit" class="btn btn-default">Tambahkan</button> 
                  </div> 

                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--End Main-->

      <!--footer-->
  <div class="footer">
     <p>&copy; 2019 Web Admin Aneka Stationery. All Rights Reserved</p>    
  </div>
    <!--//footer-->
  </div>
  
  <!-- Classie --><!-- for toggle left push menu script -->
    <script src="../js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!-- //Classie --><!-- //for toggle left push menu script -->
    
  <!--scrolling js-->
  <script src="../js/jquery.nicescroll.js"></script>
  <script src="../js/scripts.js"></script>
  <!--//scrolling js-->
  
  <!-- side nav js -->
  <script src='../js/SidebarNav.min.js' type='text/javascript'></script>
  <script>
      $('.sidebar-menu').SidebarNav()
    </script>
  <!-- //side nav js -->
  
  <!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.js"> </script>
  <!-- //Bootstrap Core JavaScript -->
  
</body>
</html>



