<?php
require "../header.php";

$id_user=$_GET['id_user'];
$sql="DELETE FROM user WHERE id_user='$id_user';";
$proses=mysqli_query($koneksi,$sql);


if ($proses){
	echo "<script>
    	alert('Data Berhasil DiHapus');
        window.location='data_admin.php';
    </script>";
} else {
	echo "proses gagal";
}



?>
