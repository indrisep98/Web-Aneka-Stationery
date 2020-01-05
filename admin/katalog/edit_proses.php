<?php
require "../header.php";

$id_produk=$_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$kategori_produk = $_POST['kategori_produk'];
$harga_awal = $_POST['harga_awal'];
$harga_diskon = $_POST['harga_diskon'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];
$brand = $_POST['brand'];

if(isset($_POST['ubah_foto'])){

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $sql="SELECT * FROM produk WHERE id_produk='$id_produk';";
        $proses=mysqli_query($koneksi,$sql);
        $result=mysqli_fetch_array($proses);
        unlink($result['gambar']);

        $sql="UPDATE produk SET nama_produk = '$nama_produk', kategori_produk = '$kategori_produk', gambar = '$target_file', harga_awal = '$harga_awal', harga_diskon = '$harga_diskon', deskripsi='$deskripsi', status='$status', brand='$brand' WHERE id_produk='$id_produk'";
        $proses = mysqli_query($koneksi, $sql);

        if ($proses){
        echo "<script>
                alert('Data Produk Berhasil di Ubah');
                document.location.href ='data_produk.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Produk Gagal di Ubah');
                document.location.href ='data_produk.php';
            </script>";
        }
         }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='data_produk.php'>Kembali Ke Form</a>";
  }
    } else {
        $sql="UPDATE produk SET nama_produk = '$nama_produk', kategori_produk = '$kategori_produk', harga_awal = '$harga_awal', harga_diskon = '$harga_diskon', deskripsi='$deskripsi', status='$status', brand='$brand' WHERE id_produk='$id_produk'";
        $proses = mysqli_query($koneksi, $sql);

        if ($proses){
        echo "<script>
                alert('Data Produk Berhasil di Ubah');
                document.location.href ='data_produk.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Produk Gagal di Ubah');
                document.location.href ='data_produk.php';
            </script>";
        }
    }

?>