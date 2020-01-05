<?php

require "../header.php";

$id_katalog=$_GET['id_katalog'];
$sql = "SELECT * FROM katalog WHERE id_katalog='$id_katalog';";
$proses = mysqli_query($koneksi,$sql);
$data=mysqli_fetch_array($proses);

?>


	<?php
    include '../sidebar1.php';

    ?>
    <!--MAIN-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="forms">
          <h2 class="title1">Edit Data Katalog</h2>
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Form Data Katalog :</h4>
            </div>

            <div class="form-body">
                <form action="edit_proses.php" method="post" class="form-horizontal" enctype="multipart/form-data"> 
                   <div class="form-group"> 
                      <input type="hidden" name="id_katalog" class="form-control" id="txtarea1" value="<?php echo $data['id_katalog'];?>">
                    </div> 


                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Nama Katalog</label> 
                    <div class="col-sm-8"> 
                      <input type="text" name="nama_katalog" class="form-control" id="txtarea1" placeholder="Nama Katalog" value="<?php echo $data['nama_katalog'];?>" required>
                    </div> 
                  </div> 

                    <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">File Katalog </label> 
                      
                    <div class="col-sm-8">
                      <input type="file" name="file_katalog" class="form-control" id="file_katalog" >
                    </div> 
                  </div> 


                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Gambar Katalog </label> 
                      
                    <div class="col-sm-8"> 
                         <img src="uploads/<?php echo $data['gambar_katalog'] ?>" style="width: 80px; height: 120px"><br>
                      <input type="file" name="gambar_katalog" class="form-control" id="file_katalog" >
                    </div> 
                  </div> 
                  <div class="col-sm-offset-2"> 
                    <button type="submit" class="btn btn-default">Edit</button> 
                  </div> 

                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
              

    <!--END MAIN-->
     <!--footer-->
  <div class="footer">
     <p>&copy; 2019 Web Admin Aneka Stationery. All Rights Reserved</p>    
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



