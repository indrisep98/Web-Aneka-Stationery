<?php
require "../header.php";
$sql="SELECT * FROM user;";
$proses=mysqli_query($koneksi, $sql);

?>


		<!--left-fixed -navigation-->
		<?php
    include '../sidebar1.php';

    ?>
    <!--Main-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="tables">
          <h2 class="title1">Data User</h2>
          <div class="table-responsive bs-example widget-shadow">
            <h4>Tabel User</h4>
            <table class="table table-bordered"> 
              <thead> 
                <tr> 
                  <th>No</th> 
                  <th>Nama Lengkap</th> 
                  <th>Email</th>
                  <th></th> 
                </tr> 
              </thead> 
              <tbody>
<?php
$no=0;
while($data=mysqli_fetch_array($proses)){
?>
               <tr> 
                <th><?php echo ++$no;;?></th> 
                <td><?php echo $data['username'];?></td>  
                <td><?php echo $data['email'];?></td> 
                <td>
                        <ul class="bt-list">
                          <a href="edit_admin.php?id_user=<?php echo $data['id_user']; ?>" class="hvr-icon-grow-edit">Edit</a>|
                          <a href="hapus_proses.php?id_user=<?php echo $data['id_user']; ?>" class="hvr-icon-grow-hapus">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td> 
              </tr> 

<?php
 }
?>

            </tbody> 
          </table> 
          </div>
        </div>
      </div>
    </div>
    <!--Ending of Main-->

    <!--footer-->
  <div class="footer">
     <p>&copy; 2019 Web Admin Aneka Stationery. All Rights Reserved</a></p>    
  </div>
    <!--//footer-->
  </div>

  <!-- new added graphs chart js-->
  
    <script src="../js/Chart.bundle.js"></script>
    <script src=".../js/utils.js"></script>
  
 
  
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