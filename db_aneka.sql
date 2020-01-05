-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 11:50 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aneka`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(10) NOT NULL,
  `nama_katalog` varchar(35) NOT NULL,
  `file_katalog` varchar(255) NOT NULL,
  `gambar_katalog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `nama_katalog`, `file_katalog`, `gambar_katalog`) VALUES
(1, 'Katalog Zebra', '', ''),
(2, 'Katalog Zebra', 'ecatalogue-zebra.jpg', 'ecatalogue-staedler.jpg'),
(3, 'Katalog Zebra', '', 'Avengers-Wallpaper-003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(35) NOT NULL,
  `kategori_produk` varchar(35) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga_awal` varchar(20) NOT NULL,
  `harga_diskon` varchar(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `status` varchar(25) NOT NULL,
  `brand` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori_produk`, `gambar`, `harga_awal`, `harga_diskon`, `deskripsi`, `status`, `brand`) VALUES
(10, 'Buku Tulis', 'Book', 'uploads/contoh3.png', '20.000', '13.000', ' jhsdhjhsjkdas', 'Diskon', 'Mirage'),
(11, 'Pensil Warna', 'Pencil', 'uploads/contoh.png', '20.000', '18.000', '- Pensil warna terbaik\r\n- tidak mudah rusak', 'Terlaris', 'Kenko'),
(14, 'Pensil Warna', 'Marker', 'uploads/contoh7.png', '15.000', '10.000', ' sws', 'Terlaris', 'Copy Paper'),
(15, 'Buku Tulis', 'Book', 'uploads/contoh2.png', '2.000', '1.500', ' nbjbj', 'Terbaru', 'Kiky'),
(17, 'Ruler', 'Ruler', 'uploads/contoh6.png', '3.000', '', ' dsdfdsfsf', 'Terlaris', 'Kenko'),
(18, 'Staples', 'Stapler, Staples', 'uploads/contoh4.png', '15.000', '10.000', ' zZZzaz', 'Diskon', 'Kiky');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(19) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'admin', '123', 'anekastationery.plm@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
