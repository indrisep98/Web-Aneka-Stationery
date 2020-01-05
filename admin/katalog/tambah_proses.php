<?php

session_start();
include '../koneksi.php';


$nama_katalog = addslashes($_POST['nama_katalog']);
$file_katalog = addslashes($_FILES['file_katalog']['name']);
$gambar_katalog = addslashes($_FILES['gambar_katalog']['name']);

move_uploaded_file($_FILES['file_katalog']['tmp_name'], "uploads/".$_FILES['file_katalog']['name']);
move_uploaded_file($_FILES['gambar_katalog']['tmp_name'], "uploads/".$_FILES['gambar_katalog']['name']);

        $query=mysqli_query($koneksi,"INSERT INTO katalog VALUES (NULL, '$nama_katalog','$file_katalog','$gambar_katalog');");
       if ($query) 
        {
            $_SESSION['id_katalog'] = $query['id_katalog'];
            echo "
            <script>
                alert('Data Produk Berhasil di Simpan');
                document.location.href ='data_katalog.php';
            </script>
            ";
        }
            else 
            {
                echo "
                <script>
                    alert('Data Produk Gagal di Simpan !');
                    document.location.href ='data_katalog.php';
                </script>";
            }


?>