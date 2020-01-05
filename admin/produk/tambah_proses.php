<?php
require "../header.php";

$nama_produk = $_POST['nama_produk'];
$kategori_produk = $_POST['kategori_produk'];
$harga_awal = $_POST['harga_awal'];
$harga_diskon = $_POST['harga_diskon'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];
$brand = $_POST['brand'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// pengecekan apakah berupa gambar
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check === false) {
        echo "<script>
                alert('File bukan sebuah gambar');
                document.location.href ='data_produk.php';
            </script>";
        $uploadOk = 0;
    }
}

// pengecekan apakah file sudah ada
if (file_exists($target_file)) {
    echo "<script>
                alert('Maaf, file sudah ada');
                document.location.href ='data_produk.php';
            </script>";
    $uploadOk = 0;
}


//pengecekan ekstensi gambar 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>
                alert('Maaf, hanya JPG, JPEG, PNG & GIF file yang diperbolehkan');
                document.location.href ='data_produk.php';
            </script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>
                alert('Maaf, file tidak berhasil diupload');
                document.location.href ='data_produk.php';
            </script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $sql="INSERT INTO produk VALUES (NULL, '$nama_produk', '$kategori_produk', '$target_file', '$harga_awal', '$harga_diskon','$deskripsi', '$status', '$brand');";
        $proses = mysqli_query($koneksi, $sql);

        if ($proses){
        echo " <script>
                alert('Data Produk Berhasil di Tambahkan');
                document.location.href ='data_produk.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Produk Gagal di Tambahkan');
                document.location.href ='data_produk.php';
            </script>";
        }
    } else {
        echo "<script>
                alert('Gambar Gagal di Upload');
                document.location.href ='data_produk.php';
            </script>";
    }
}
?>