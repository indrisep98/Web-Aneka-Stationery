<?php
require "../header.php";
$id_user=$_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE user SET username ='$username', password='$password',email='$email' WHERE id_user='$id_user'";
$proses = mysqli_query($koneksi, $sql);

if ($proses){
		echo "<script>
    	alert('Data Berhasil DiUbah');
        window.location='data_admin.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='data_admin.php';
    </script>";
}

?>