-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2021 at 10:27 AM
-- Server version: 5.7.34
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morowali_wisata`
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
(3, 'arsalam', '12345', 'suakomoana@gmail.com', 'Arsalam', 'ririrka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jual`
--

CREATE TABLE `tb_jual` (
  `id_jual` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'Tempat Wisata');

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
(1, 1, 'Pulau Sambori', 10, '	Angin lembut yang bertiup, air laut yang jernih.', 'Pulau Sambori.jpg', 250000),
(4, 1, 'Pantai Puluti', 7, 'Pemandangan pantai pasir putih cantik.', 'pantai puluti.PNG', 80000),
(7, 1, 'Permandian Mata Air Tompaika', 20, 'Nikmatnya air terjun dengan air yang segar dan jernih', 'Tompaika.jpg', 10000),
(9, 1, 'Bukit Kembar', 25, 'Pemandangan Bukit Kembar', 'Bukit Kembar.jpg', 15000),
(10, 1, 'Gua Allo', 10, 'Laut  yang tenang', 'Gua Allo.jpg', 200000),
(11, 1, 'Kebun Binatang Wosu', 25, 'Melihat rusa di padang savana', 'kebun binatang.jpg', 20000),
(12, 1, 'Matansala Mangrove', 10, 'Berwisata melihat hamparan mangrove disertai belajar tentang mangrove itu sendiri', 'wisata mangrove.jpg', 15000),
(13, 1, 'Permandian Veranomata', 20, 'Dinginnya air yang langsung dari mata air', 'permandian veranomata.jpg', 15000),
(14, 1, 'Air Terjun Sampala', 15, 'Derasnya air yang jatuh dari ketinggian', 'air terjun sampala.jpg', 15000),
(15, 1, 'Pasir Panjang Tangofa', 20, 'Bersantai dipinggir pantai dengan pasir putih yang terbentang luas memanjang', 'pasir panjang tangofa.jpg', 20000),
(16, 4, 'Hotel Metro', 20, 'Menginap dengan nyaman bersama kami', 'hotel metro.jpg', 350000),
(17, 4, 'Penginapan Latanete', 10, 'Istrahat dengan aman dan nyaman', 'Latanete 1.jpg', 165000),
(18, 4, 'Hotel Galang', 16, 'Tidur dengan aman dan nyaman', 'hotel galang.PNG', 200000),
(19, 4, 'Penginapan Kafqa', 8, 'Suasana asri yang membuat badan jadi rileks', 'penginapan kafqa.PNG', 120000),
(20, 4, 'Penginapan Lima Satu', 7, 'Penginapan pinggir pantai yang membuat anda rileks', 'penginapan lima satu.PNG', 75000),
(21, 4, 'Penginapan Bintang', 10, 'Menginap dengan nyaman', 'penginapan bintang.PNG', 80000),
(22, 4, 'Penginapan Mawar Indah', 6, 'Penginapan yang cocok untuk anda', 'penginapan mawar indah.PNG', 75000),
(23, 4, 'Penginapan Anunta Baru', 12, 'Penginapan yang memiliki fasilitas pertemuan', 'penginapan anunta baru.PNG', 100000),
(24, 3, 'Avanza', 3, 'Berkendara keliling Morowali dengan nyaman dan aman', 'Avanza.jpg', 250000);

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
(20, 4, '122.39814510000575', '-3.2713291832241223'),
(21, 5, '121.99882032766403', '-2.616251089559522'),
(22, 9, '121.950873', '-2.559917'),
(23, 12, '121.36336118001918', '-1.9459698472766591'),
(24, 13, '122.4226660451288', '-3.276257627616319'),
(25, 14, '121.82665817130241', '-2.3528926005945006'),
(26, 15, '121.96044630199054', '-2.5249564166927887'),
(27, 16, '121.91017994569171', '-2.528390069761679'),
(28, 17, '121.91017994569171', '-2.5655549284756223'),
(29, 18, '122.305147', '-2.960416');

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
(2, 'M', 'Dhifta', 'dhifta48@gmail.com', '085791419622', 'mdhifta', '123456', 'IMG_20200617_132751 (1).jpg'),
(6, 'ssss', 'wwww', 'modira@gmail.com', '', '', '1233333', ''),
(7, 'Ismail', 'Alex', 'launualam@gmail.com', '08123456789', 'ismailalex', '12345', 'nozomohana.jpg'),
(8, 'M', 'Dhifta', 'selvyerhita@gmail.com', '', '', '12345', ''),
(9, 'yusriandi', 'alfian ', 'yusriandi20@gmail.com', '', '', 'singkalu', '');

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
(4, 7, 'Pulau Sambori', 'Angin lembut yang bertiup, air laut yang jernih.', 'Pulau Sambori.jpg'),
(5, 7, 'Pantai Puluti', 'Pemandangan pantai pasir putih cantik.', 'pantai puluti.PNG'),
(9, 7, 'Permandian Mata Air Tompaika', 'Nikmatnya air terjun dengan air yang segar dan jernih', 'Tompaika.jpg'),
(12, 7, 'Bukit Kembar', 'Pemandangan Bukit Kembar', 'Bukit Kembar.jpg'),
(13, 7, 'Gua Allo', 'Laut yang Tenang ', 'Gua Allo.jpg'),
(14, 7, 'Kebun Binatang Wosu', 'Melihat rusa di padang savana', 'kebun binatang.jpg'),
(15, 7, 'Matansala Mangrove', 'Berwisata melihat hamparan mangrove disertai belajar tentang mangrove itu sendiri', 'wisata mangrove.jpg'),
(16, 7, 'Permandian Veranomata', 'Dinginnya air yang langsung dari mata air', 'permandian veranomata.jpg'),
(17, 7, 'Air Terjun Sampala', 'Derasnya air yang jatuh dari ketinggian', 'air terjun sampala.jpg'),
(18, 7, 'Pasir Panjang Tangofa', 'Bersantai dipinggir pantai dengan pasir putih yang terbentang luas memanjang', 'pasir panjang tangofa.jpg');

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
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_titik`
--
ALTER TABLE `tb_titik`
  MODIFY `id_titik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2145584445;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
