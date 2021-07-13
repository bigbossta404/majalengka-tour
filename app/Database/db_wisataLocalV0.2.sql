-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 04:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `admin_name` varchar(144) NOT NULL,
  `gambar` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `email`, `admin_name`, `gambar`) VALUES
(3, 'mdhifta', '123456', 'modiramail@gmail.com', 'M Dhifta Ramadhan', '20160521_081554.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jual`
--

CREATE TABLE `tb_jual` (
  `id_jual` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jual`
--

INSERT INTO `tb_jual` (`id_jual`, `id_produk`, `tanggal_jual`, `stock`) VALUES
(2, 1, '2021-04-23', 150),
(3, 4, '2021-04-23', 55),
(4, 1, '2021-04-24', 15),
(5, 1, '2021-04-25', 15),
(6, 4, '2021-04-24', 76),
(7, 4, '2021-04-25', 8),
(8, 7, '2021-04-23', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `jenis_kategori`) VALUES
(1, 'Tiket Wisata'),
(3, 'Kendaraan'),
(4, 'Penginapan'),
(17, 'Tempat Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bukti_bayar` varchar(144) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_transaksi`, `tgl_bayar`, `bukti_bayar`, `status`) VALUES
(11, 983501800, '2021-04-22', '87748788373', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(144) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(144) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori`, `nama_produk`, `stok`, `deskripsi`, `gambar`, `harga`) VALUES
(1, 1, 'Paket Pulau Sambori', 0, 'Sombori sebenarnya adalah pulau di Desa Mbokitta di Kecamatan Menui Kepulauan, Morowali, Provinsi Sulawesi Tengah. Akses termudah menuju kesana lewat Kendari, Sulawesi Tenggara. Kawasan konservasi ini memiliki luas 147.700 hektare yang terdiri dari gugusan pulau-pulau karang indah. Memasuki Kawasan Sombori, anda akan melihat pemandangan fantastis. Tebing karang tinggi berada di sisi kiri dan kanan. Gelombang laut di kawasan ini sungguh amat tenang dipadu dengan warna hijau tosca yang mempesona.', 'unnamed.jpg', 3000000),
(4, 1, 'Paket Pulau Lalandai', 0, 'Desa Wisata Lalandai Kab Banggai Kepulauan terletak di provinsi Sulawesi Tengah, Indonesia. Tepatnya di Lalanday, Bulagi, Kabupaten Banggai Kepulauan, Sulawesi Tengah. Terdapat 37 tempat wisata di Kab Banggai Kepulauan. Jika anda ingin mendapatkan petunjuk arah ke tempat wisata tersebut, silakan klik tombol petunjuk arah di bawah untuk membuka peta navigasi. Di peta navigasi tersebut, terdapat pilihan apakah memakai kendaraan umum, jalan kaki, atau pakai mobil.', 'Pemandian-Lalandai.jpg', 5000000),
(7, 3, 'Mobil Avanza', 0, 'Nikmati Berkendaraan dan jelajahi tempat wisata hanya dengan Rp. 1.000.000 dalam sehari!', '0000452693.jpg', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_titik`
--

CREATE TABLE `tb_titik` (
  `id_titik` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `longtitude` varchar(144) NOT NULL,
  `latitude` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_titik`
--

INSERT INTO `tb_titik` (`id_titik`, `id_wisata`, `longtitude`, `latitude`) VALUES
(3, 5, '106.82675911494914', '-6.15941649107023'),
(4, 4, '122.42668925898161', '-3.2820257496827723');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_jual` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `totBayar` int(14) NOT NULL,
  `status` varchar(156) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_produk`, `id_user`, `tgl_transaksi`, `id_jual`, `banyak`, `totBayar`, `status`) VALUES
(983501800, 4, 2, '2021-04-22', 6, 1, 5000000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `fname` varchar(144) NOT NULL,
  `lname` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `telephone` varchar(144) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `gambar` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `fname`, `lname`, `email`, `telephone`, `username`, `password`, `gambar`) VALUES
(1, 'Arsalam', 'Launu', 'arsalam@gmail.com', '08389675788', 'arsalam', '12345', 'arsalam.jpg'),
(2, 'M', 'Dhifta', 'dhifta48@gmail.com', '085791419625', 'mdhifta', '12344', '1 274 - Copy - Copy.JPG'),
(6, 'ssss', 'wwww', 'modira@gmail.com', '', '', '1233333', ''),
(7, 'Arya', 'Sura', 'jmodira@gmail.com', '', '', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_tempat` varchar(144) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `id_kategori`, `nama_tempat`, `deskripsi`, `gambar`) VALUES
(4, 1, 'Pulau Sambori', 'Angin lembut yang bertiup, air laut yang jernih, serta pemandangan karang yang dipayungi dengan berbagai tumbuhan ini, mampu menjadi tempat relaksasi yang sangat baik. Seolah-olah seluruh rasa lelah setelah menempuh perjalanan menuju Pulau Sombori, akan hilang seketika dengan panorama alam yang dari Pulau Sombori.', '346495_pulau-sombori_663_382.jpg'),
(5, 4, 'Pulau Lalandai', 'Pemandangan di sekitar Lalandai pun tak kalah cantik, dengan kondisi pantau dan bebatuan pegunungan di sekeliling tepi pantai. Pepohonan sekitar pun sangat rimbun, sehingga melindungi para wisatawan dari teriknya matahari. Selain terdapat dua jenis air dalam satu tempat, keunikan lainnya dari Pemandian Lalandai adalah adanya ikan yang menghuni mata air ini.', 'Pemandian-Lalandai.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_titik`
--
ALTER TABLE `tb_titik`
  ADD PRIMARY KEY (`id_titik`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_jual` (`id_jual`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jual`
--
ALTER TABLE `tb_jual`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_titik`
--
ALTER TABLE `tb_titik`
  MODIFY `id_titik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2137929914;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD CONSTRAINT `tb_jual_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_titik`
--
ALTER TABLE `tb_titik`
  ADD CONSTRAINT `tb_titik_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tb_wisata` (`id_wisata`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_jual`) REFERENCES `tb_jual` (`id_jual`);

--
-- Constraints for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD CONSTRAINT `tb_wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
