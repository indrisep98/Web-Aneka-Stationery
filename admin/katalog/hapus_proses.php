<?php
require "../header.php";

$id_katalog=$_GET['id_katalog'];
$sql="DELETE FROM katalog WHERE id_katalog='$id_katalog';";
$proses=mysqli_query($koneksi,$sql);

if ($proses){
        echo "<script>
        alert('Proses Berhasil');
        window.location='data_katalog.php';
    </script>";
    } else {
        echo "Proses Gagal";
}
?>