<?php

require "../header.php";

$id_user=$_GET['id_user'];
$sql = "SELECT * FROM user WHERE id_user='$id_user';";
$proses = mysqli_query($koneksi,$sql);
$data=mysqli_fetch_array($proses);

?>


		<!--left-fixed -navigation-->
	<?php
    include '../sidebar1.php';

    ?>
    <!--MAIN-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <h2 class="title1">Edit Data Admin</h2>
        
           <div class=" form-grids row form-grids-right">
            <div class="widget-shadow " data-example-id="basic-forms"> 
              <div class="form-title">
                <h4>Form Data Admin :</h4>
              </div>
              <div class="form-body">
                <form action="edit_proses.php" method="post"  class="form-horizontal"> 
                  <div class="form-group"> 
                      <input type="hidden" name="id_user" class="form-control" id="txtarea1" value="<?php echo $data['id_user'];?>">
                    </div> 
                 

                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Nama Lengkap</label> 
                    <div class="col-sm-9"> 
                      <input type="text" name="username" class="form-control" id="txtarea1" placeholder="Nama Lengkap" value="<?php echo $data['username'];?>" required>
                    </div> 
                  </div> 

                  <div class="form-group"> 
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-9"> 
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $data['password'];?>" required>
                    </div> 
                  </div>

                   <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label> 
                    <div class="col-sm-9"> 
                      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" value="<?php echo $data['email'];?>" required>
                    </div> 
                  </div> 


                  <div class="col-sm-offset-2"> 
                    <button type="submit" class="btn btn-default">Ubah</button> 
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
     <p>&copy; 2019 Web Admin Aneka Stationery. All Rights Reserved</a></p>    
  </div>
    <!--//footer-->
  </div>

  <!-- new added graphs chart js-->
  
    <script src="../js/Chart.bundle.js"></script>
    <script src="../js/utils.js"></script>
  
  
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



