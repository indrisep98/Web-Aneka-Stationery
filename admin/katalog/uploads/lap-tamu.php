<?php
session_start();
include 'koneksi.php';
if (empty($_SESSION['username']) && empty($_SESSION['password'])) { //untuk kembali kehalaman form login 
  header("location: pro-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Lintasarta</title>
    

        <!-- Favicon -->
        <link rel="shortcut icon" />

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Font Awesome CSS -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        


        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" type="text/css" href="assets/css/datatable.min.css"/>
        <!-- END CSS for this page -->
       
        <!-- BEGIN CSS for this page -->
        <link href="assets/plugins/datetimepicker/css/daterangepicker.css" rel="stylesheet" /> 
        <!-- END CSS for this page -->
        
</head>
<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="#" class="logo"><img alt="Logo" src="assets/images/lintas92.png" /> <span>LINTASARTA</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        

                          <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-user-circle" alt="Profile image" class="avatar-rounded"> </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>
                                <?php
                                $level = $_SESSION['level'];
                                if($level == 'Admin'){
                                ?>
                                <a href="pro-profile.php" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>
                                 <?php
                                }else{
                                ?>
                                <a href="pro-profile2.php" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>
                                 <?php
                                 }
                                ?>
                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                                
                                
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

    </div>
    <!-- End Navigation -->
    
 
    <!-- Left Sidebar -->
    <div class="left main-sidebar">
    
        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">
        
            <ul>
                    <?php
                        $level = $_SESSION['level'];
                        if($level == 'Admin'){
                        ?>
                    <li class="submenu">
                        <a class="active"  href="index.php"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

                    
                    <li class="submenu">
                        <a href="pro-profile.php"><i class="fa fa-fw fa-table"></i> <span> Personalia </span></a>
                        
                    </li>
                    <li class="submenu">
                        <a href="pro-users.php"><i class="fa fa-fw fa-table"></i> <span> Daftar Tamu </span></a>
                        
                    </li>               
                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Dokumen </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="dok-masuk.php">Dokumen Masuk</a></li>
                                <li><a href="dok-keluar.php">Dokumen Keluar</a></li>
                             
                            </ul>
                    </li>
                    <li class="submenu">
                       <a href="opr.php"><i class="fa fa-fw fa-file-text-o"></i> <span> Mobil Operasional </span></a>
                            
                    </li>
                  
                    <?php
                    }else{
                        ?>
                    
                    <li class="submenu">
                        <a class="active"  href="index.php"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

                    
                    <li class="submenu">
                        <a href="pro-profile2.php"><i class="fa fa-fw fa-table"></i> <span> Personalia </span></a>
                        
                    </li>
                                
                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Laporan </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="lap-tamu.php">Data Tamu</a></li>
                                <li><a href="lap-masuk.php">Dokumen Masuk</a></li>
                                <li><a href="lap-keluar.php">Dokumen Keluar</a></li>
                                <li><a href="lap-opr.php">Mobil Operasional</a></li>
                            </ul>
                    </li>

                     <?php
                 }
                    ?>
             
                    
            </ul>

            <div class="clearfix"></div>

            </div>
        
            <div class="clearfix"></div>

        </div>

    </div>


    <div class="content-page">
    
        <!-- Start content -->
        <div class="content">
            
            <div class="container-fluid">

                
                
                <!-- end row -->


						<div class="row">		
							<div class="col-xs-12 col-sm-12 col-md-12  col-xl-12"> 
								<div class="card mb-3" >

									<div class="card-header" id="printableArea" !important> 
                                    <span class="table-project-n" ></span>
                                     <button onclick="generate('l', 'mm', 'a4', 'DataTamu_<?= date("YmdHis") ?>', 'Laporan Data Tamu Lintasarta Palembang')" class="btn btn-primary">Cetak Data&nbsp;<i class="fa fa-print"></i></button> 
                                  
                                    <form action="" method="GET">

                                    <div class="row">
                                            <div class="col col-md-2"><br>
                                                <select name="tahun" class="form-control">
                                                    <option value="">Filter Tahun</option>

                                                <?php for ($i = date('Y'); $i >= date('Y') - 10; $i--) { ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php } ?>

                                                </select>
                                            </div>
                                            <div class="col col-md-4"></br>
                                                <button type="submit" class="btn btn-primary">Filter</button> 
                                               
                                                 <a href="lap-tamu.php" class="btn btn-primary">Reset</a>
                                                
                                           </div>
                                    </div>
                                    </form>
                                    <?php
                                        $filter = "";

                                        if ( ! empty($_GET)) {
                                            $tahun = $_GET['tahun'];
                                           
                                            $filter = "WHERE YEAR(`tanggal`) = '$tahun'"; 
                                            $query = mysqli_query($koneksi, "SELECT COUNT(`id_tamu`) AS `jumlah` FROM tb_tamu $filter");

                                           foreach ($query as $f) {
                                                echo "<br>";
                                                echo "<h3>Total: " . $f["jumlah"] . "</h3>";
                                            }
                                        }
                                    ?>
                                    <br>

								</div>
							</div>
						</div> 
														
					
									<!-- end card-header -->	
												
									<div class="card-body">
											  
                                     <div style="margin:0 auto" class="col-xs-12 col-sm-12 col-md-12  col-xl-12"> 
          								
										 <div class="table">
                                            <table id="table" class="table table-bordered table-striped table-paginate " cellspacing="0" width="100%">
											<thead>
											  <tr>
                                                <center><h5>LAPORAN DATA TAMU LINTASARTA PALEMBANG </h5></center><br><br>
												<th style="width:50px">No</th>
												<th style="width:120px">Tanggal</th>
												<th style="width:150px">Nama</th>
												<th style="width:130px">Instansi</th>
												<th style="width:150px">Keperluan</th>
                                                <th style="width:120px">Jam Datang</th>
                                                <th style="width:120px">Jam Pulang</th>
                                                 <th style="width:120px" hidden="">Jam Pulang</th>
											  </tr>
											</thead>
											<tbody>
												<?php $i=1; ?>     
                                            <?php
                                                include 'koneksi.php';
                                                $query = mysqli_query($koneksi, "SELECT * FROM tb_tamu $filter");
                                                foreach ($query as $f)
                                                {
                                            ?>

                                            <tr>
                                                
                                                <td><?= $i; ?></td>
                                        
                                                <td><?= $f["tanggal"] ?></td>
                                                <td><?= $f["nama"] ?></td>
                                                <td><?= $f["instansi"] ?></td>
                                                <td><?= $f["keperluan"] ?></td>
                                                <td><?= $f["jam_datang"] ?></td>
                                                <td><?= $f["jam_pulang"] ?></td>
                                                <td hidden=""><?= $f["jam_pulang"] ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php } ?>			
											</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div> 
</div>																			
<footer class="footer">
        
        <span class="float-right">
        © 2019 <b>Lintasarta</b>, Solutions for Your Vision <a target="_blank" href="https://www.pikeadmin.com"></a>
        </span>
    </footer>

</div>									


<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>
<script src="assets/js/jquery.PrintArea.js"></script>
<script src="jspdf/jspdf.config.js"></script>
 <script src="jspdf/jspdf.min.js"></script>
<script src="jspdf/jspdf.plugin.autotable.js"></script>
<script src="assets/js/datatables.min.js"></script>
<script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
    </script>

        <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
     $('.table-paginate').dataTable();
     } );
</script>
</body>
</html>