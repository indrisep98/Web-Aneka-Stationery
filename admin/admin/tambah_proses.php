<?php
require "../header.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="INSERT INTO user VALUES (NULL, '$username','$password', '$email');";
$proses = mysqli_query($koneksi, $sql);

if ($proses){

		echo "<script>
    	alert('Proses Berhasil');
        window.location='data_admin.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='tambah_admin.php';
    </script>";
}

?>