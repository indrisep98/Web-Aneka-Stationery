<?php

require "../header.php";

$id_produk=$_GET['id_produk'];
$sql = "SELECT * FROM produk WHERE id_produk='$id_produk';";
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
          <h2 class="title1">Edit Data Produk</h2>
          <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Form Data Produk :</h4>
            </div>

            <div class="form-body">
                <form action="edit_proses.php" method="post" class="form-horizontal" enctype="multipart/form-data"> 
                   <div class="form-group"> 
                      <input type="hidden" name="id_produk" class="form-control" id="txtarea1" value="<?php echo $data['id_produk'];?>">
                    </div> 


                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Nama Produk</label> 
                    <div class="col-sm-8"> 
                      <input type="text" name="nama_produk" class="form-control" id="txtarea1" placeholder="Nama Produk" value="<?php echo $data['nama_produk'];?>" required>
                    </div> 
                  </div> 

                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Kategori Produk</label> 
                    <div class="col-sm-8"> 
                       <select name="kategori_produk" class="form-control" required>
                           <option value="">-- Pilih --</option>
                          <option <?php if($data['kategori_produk'] == 'Binder Clip, Clip'){ echo 'selected'; } ?>>Binder Clip, Clip</option>
                          <option  <?php if($data['kategori_produk'] == 'Book'){ echo 'selected'; } ?>>Book</option>
                          <option  <?php if($data['kategori_produk'] == 'Calculator'){ echo 'selected'; } ?>>Calculator</option>
                           <option  <?php if($data['kategori_produk'] == 'Clipboard'){ echo 'selected'; } ?>>Clipboard</option>
                            <option  <?php if($data['kategori_produk'] == 'Colour Marker'){ echo 'selected'; } ?>>Colour Marker</option>
                             <option  <?php if($data['kategori_produk'] == 'Colour Pencil'){ echo 'selected'; } ?>>Colour Pencil</option>
                            <option  <?php if($data['kategori_produk'] == 'Correction Fluid'){ echo 'selected'; } ?>>Correction Fluid</option>
                             <option  <?php if($data['kategori_produk'] == 'Correction Tape'){ echo 'selected'; } ?>>Correction Tape</option>
                              <option  <?php if($data['kategori_produk'] == 'Cutter, Cutter Blade'){ echo 'selected'; } ?>>Cutter, Cutter Blade</option>
                               <option  <?php if($data['kategori_produk'] == 'Data Bag, Document Bag, Document Case, Zipper Bag'){ echo 'selected'; } ?>>Data Bag, Document Bag, Document Case, Zipper Bag</option>
                                <option  <?php if($data['kategori_produk'] == 'Desk Set'){ echo 'selected'; } ?>>Desk Set</option>
                                <option  <?php if($data['kategori_produk'] == 'Diary'){ echo 'selected'; } ?>>Diary</option>
                                <option  <?php if($data['kategori_produk'] == 'Business File, Clear Holder, Clear Sleeves'){ echo 'selected'; } ?>>Business File, Clear Holder, Clear Sleeves</option>
                                <option  <?php if($data['kategori_produk'] == 'Envelope'){ echo 'selected'; } ?>>Envelope</option>
                                <option  <?php if($data['kategori_produk'] == 'Eraser'){ echo 'selected'; } ?>>Eraser</option>
                                <option  <?php if($data['kategori_produk'] == 'Glue, Glue Stick, Liquid Glue'){ echo 'selected'; } ?>>Glue, Glue Stick, Liquid Glue</option>
                                <option  <?php if($data['kategori_produk'] == 'Highlighter'){ echo 'selected'; } ?>>Highlighter</option>
                                <option  <?php if($data['kategori_produk'] == 'Laminating Machine, Laminating Film/Plastik'){ echo 'selected'; } ?>>Laminating Machine, Laminating Film/Plastik</option>
                                <option  <?php if($data['kategori_produk'] == 'Loose Leaf'){ echo 'selected'; } ?>>Loose Leaf</option>
                                <option  <?php if($data['kategori_produk'] == 'Magnifier'){ echo 'selected'; } ?>>Magnifier</option>
                                <option  <?php if($data['kategori_produk'] == 'Marker'){ echo 'selected'; } ?>>Marker</option>
                                 <option  <?php if($data['kategori_produk'] == 'Name Card Case, Name Card Holder'){ echo 'selected'; } ?>>Name Card Case, Name Card Holder</option>
                                  <option  <?php if($data['kategori_produk'] == 'Oil Pastel'){ echo 'selected'; } ?>>Oil Pastel</option>
                                    <option  <?php if($data['kategori_produk'] == 'Paper Shredder, Paper Trimmer'){ echo 'selected'; } ?>>Paper Shredder, Paper Trimmer</option>
                                     <option  <?php if($data['kategori_produk'] == 'Pen'){ echo 'selected'; } ?>>Pen</option>
                                    <option  <?php if($data['kategori_produk'] == 'Pencil'){ echo 'selected'; } ?>>Pencil</option>
                                    <option  <?php if($data['kategori_produk'] == 'Paper'){ echo 'selected'; } ?>>Paper</option>
                                    <option  <?php if($data['kategori_produk'] == 'PP Pencil Case'){ echo 'selected'; } ?>>PP Pencil Case</option>
                                    <option  <?php if($data['kategori_produk'] == 'Punch'){ echo 'selected'; } ?>>Punch</option>
                                    <option  <?php if($data['kategori_produk'] == 'Ruler'){ echo 'selected'; } ?>>Ruler</option>
                                    <option  <?php if($data['kategori_produk'] == 'Scissor'){ echo 'selected'; } ?>>Scissor</option>
                                    <option  <?php if($data['kategori_produk'] == 'Sharpener'){ echo 'selected'; } ?>>Sharpener</option>
                                    <option  <?php if($data['kategori_produk'] == 'Stamp, Stamp Pad'){ echo 'selected'; } ?>>Stamp, Stamp Pad</option>
                                     <option  <?php if($data['kategori_produk'] == 'Stapler, Staples'){ echo 'selected'; } ?>>Stapler, Staples</option>
                                    <option  <?php if($data['kategori_produk'] == 'Sticky Note, Index Memo'){ echo 'selected'; } ?>>Sticky Note, Index Memo</option>
                                    <option  <?php if($data['kategori_produk'] == 'Tape'){ echo 'selected'; } ?>>Tape</option>
                                    <option  <?php if($data['kategori_produk'] == 'Tape Dispenser'){ echo 'selected'; } ?>>Tape Dispenser</option>
                                      <option  <?php if($data['kategori_produk'] == 'Tinta dan Catridge'){ echo 'selected'; } ?>>Tinta dan Catridge</option>
                        </select> 
                    </div> 
                  </div> 

                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Gambar Produk </label> 
                      
                    <div class="col-sm-8"> 
                         <img src="<?php echo $data['gambar'] ?>" style="width: 80px; height: 120px"><br>
                      <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" >
                      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto
                    </div> 
                  </div> 

                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Harga Produk</label> 
                    <div class="col-sm-8"> 
                      <input type="text" name="harga_awal" class="form-control" id="txtarea1" placeholder="Harga Produk" value="<?php echo $data['harga_awal'];?>" required>
                    </div> 
                  </div> 

                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Harga Diskon</label> 
                    <div class="col-sm-8"> 
                      <textarea type="text" name="harga_diskon" class="form-control" id="txtarea1" placeholder="Harga Diskon"><?php echo $data['harga_diskon'];?></textarea>
                    </div> 
                  </div> 

                  <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Deskripsi</label> 
                    <div class="col-sm-8"> 
                      <textarea type="text" name="deskripsi" class="form-control" id="txtarea1" placeholder="Deskripsi" required><?php echo $data['deskripsi'];?></textarea>
                    </div> 
                  </div>   

                     <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Status</label> 
                    <div class="col-sm-8"> 
                       <select name="status" class="form-control">
                           <option value="">-- Pilih --</option>
                          <option <?php if($data['status'] == 'Terlaris'){ echo 'selected'; } ?>>Terlaris</option>
                          <option  <?php if($data['status'] == 'Terbaru'){ echo 'selected'; } ?>>Terbaru</option>
                           <option  <?php if($data['status'] == 'Diskon'){ echo 'selected'; } ?>>Diskon</option>
                        </select> 
                    </div> 
                  </div> 
                  
                   <div class="form-group"> 
                    <label for="txtarea1" class="col-sm-2 control-label">Brand</label> 
                    <div class="col-sm-8"> 
                       <select name="brand" class="form-control" required>
                           <option value="">-- Pilih --</option>
                          <option <?php if($data['brand'] == 'Deli'){ echo 'selected'; } ?>>Deli</option>
                          <option  <?php if($data['brand'] == 'Max'){ echo 'selected'; } ?>>Max</option>
                           <option  <?php if($data['brand'] == 'Fox'){ echo 'selected'; } ?>>Fox</option>
                           <option  <?php if($data['brand'] == 'Zebra'){ echo 'selected'; } ?>>Zebra</option>
                           <option  <?php if($data['brand'] == 'Staedler'){ echo 'selected'; } ?>>Staedler</option>
                           <option  <?php if($data['brand'] == 'Greebel'){ echo 'selected'; } ?>>Greebel</option>
                           <option  <?php if($data['brand'] == 'Joyko'){ echo 'selected'; } ?>>Joyko</option>
                           <option  <?php if($data['brand'] == 'Faber Castell'){ echo 'selected'; } ?>>Faber Castell</option>
                           <option  <?php if($data['brand'] == 'Kenko'){ echo 'selected'; } ?>>Kenko</option>
                           <option  <?php if($data['brand'] == 'Bantex'){ echo 'selected'; } ?>>Bantex</option>
                           <option  <?php if($data['brand'] == 'Nachi'){ echo 'selected'; } ?>>Nachi</option>
                           <option  <?php if($data['brand'] == 'Daimaru'){ echo 'selected'; } ?>>Daimaru</option>
                           <option  <?php if($data['brand'] == 'Sinar Dunia'){ echo 'selected'; } ?>>Sinar Dunia</option>
                           <option  <?php if($data['brand'] == 'Bola Dunia'){ echo 'selected'; } ?>>Bola Dunia</option>
                           <option  <?php if($data['brand'] == 'E-Paper'){ echo 'selected'; } ?>>E-Paper</option>
                           <option  <?php if($data['brand'] == 'Copy Paper'){ echo 'selected'; } ?>>Copy Paper</option>
                           <option  <?php if($data['brand'] == 'Kiky'){ echo 'selected'; } ?>>Kiky</option>
                           <option  <?php if($data['brand'] == 'Mirage'){ echo 'selected'; } ?>>Mirage</option>
                           <option  <?php if($data['brand'] == 'Paper One'){ echo 'selected'; } ?>>Paper One</option>
                           <option  <?php if($data['brand'] == 'Copy Laser'){ echo 'selected'; } ?>>Copy Laser</option>
                           <option  <?php if($data['brand'] == 'Paperline'){ echo 'selected'; } ?>>Paperline</option>
                        </select> 
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



