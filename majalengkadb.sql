/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - morowali_wisata
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `admin_name` varchar(144) NOT NULL,
  `gambar` varchar(144) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id_admin`,`username`,`password`,`email`,`admin_name`,`gambar`) values 
(3,'arsalam','12345','suakomoana@gmail.com','Arsalam','82474155_p0 - Copy.jpg');

/*Table structure for table `tb_jual` */

DROP TABLE IF EXISTS `tb_jual`;

CREATE TABLE `tb_jual` (
  `id_jual` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `tanggal_jual` date NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id_jual`),
  KEY `id_produk` (`id_produk`),
  CONSTRAINT `tb_jual_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=653 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jual` */

insert  into `tb_jual`(`id_jual`,`id_produk`,`tanggal_jual`,`stock`) values 
(1,4,'2021-04-24',0),
(2,1,'2021-04-23',7),
(6,1,'2021-04-27',10),
(10,1,'2021-05-01',10),
(23,4,'2021-04-30',10),
(34,7,'2021-04-27',20),
(35,7,'2021-04-28',20),
(48,9,'2021-04-27',21),
(72,10,'2021-05-07',9),
(90,12,'2021-04-27',17),
(103,13,'2021-04-26',19),
(118,14,'2021-04-27',20),
(160,16,'2021-04-27',14),
(175,17,'2021-04-27',8),
(188,18,'2021-04-26',12),
(203,19,'2021-04-27',8),
(355,1,'2021-06-03',-1),
(356,1,'2021-06-04',8),
(357,1,'2021-06-05',10),
(358,1,'2021-06-06',10),
(359,1,'2021-06-07',10),
(360,1,'2021-06-08',10),
(361,1,'2021-06-09',10),
(362,1,'2021-06-10',10),
(363,1,'2021-06-11',10),
(364,1,'2021-06-12',10),
(365,1,'2021-06-13',10),
(366,1,'2021-06-14',10),
(367,1,'2021-06-15',10),
(368,1,'2021-06-16',10),
(369,1,'2021-06-17',10),
(370,4,'2021-06-04',8),
(371,4,'2021-06-05',10),
(372,4,'2021-06-06',10),
(373,4,'2021-06-07',10),
(374,4,'2021-06-08',10),
(375,4,'2021-06-09',10),
(376,4,'2021-06-10',10),
(377,4,'2021-06-11',10),
(378,4,'2021-06-12',10),
(379,4,'2021-06-13',10),
(380,4,'2021-07-31',9),
(381,4,'2021-06-15',10),
(382,4,'2021-06-16',10),
(383,4,'2021-06-17',10),
(384,7,'2021-06-04',15),
(385,7,'2021-06-05',15),
(386,7,'2021-06-06',15),
(387,7,'2021-06-07',15),
(388,7,'2021-06-08',15),
(389,7,'2021-06-09',15),
(390,7,'2021-06-10',15),
(391,7,'2021-06-11',15),
(392,7,'2021-06-12',15),
(393,7,'2021-06-13',15),
(394,7,'2021-06-14',15),
(395,7,'2021-06-15',15),
(396,7,'2021-06-16',15),
(397,7,'2021-06-17',15),
(398,9,'2021-06-04',10),
(399,9,'2021-06-05',10),
(400,9,'2021-06-06',10),
(401,9,'2021-06-07',10),
(402,9,'2021-06-08',10),
(403,9,'2021-06-09',10),
(404,9,'2021-06-10',10),
(405,9,'2021-06-11',10),
(406,9,'2021-06-12',10),
(407,9,'2021-06-13',10),
(408,9,'2021-06-14',10),
(409,9,'2021-06-15',10),
(410,9,'2021-06-16',10),
(411,9,'2021-06-17',10),
(412,10,'2021-06-04',10),
(413,10,'2021-06-05',10),
(414,10,'2021-06-06',10),
(415,10,'2021-06-07',10),
(416,10,'2021-06-08',10),
(417,10,'2021-06-09',10),
(418,10,'2021-06-10',10),
(419,10,'2021-06-11',10),
(420,10,'2021-06-12',10),
(421,10,'2021-06-13',10),
(422,10,'2021-06-14',10),
(423,10,'2021-06-15',10),
(424,10,'2021-06-16',10),
(425,10,'2021-06-17',10),
(426,NULL,'2021-06-04',15),
(427,NULL,'2021-06-05',15),
(428,NULL,'2021-06-06',15),
(429,NULL,'2021-06-07',15),
(430,NULL,'2021-06-08',15),
(431,NULL,'2021-06-09',15),
(432,NULL,'2021-06-10',15),
(433,NULL,'2021-06-11',15),
(434,NULL,'2021-06-12',15),
(435,NULL,'2021-06-13',15),
(436,NULL,'2021-06-14',15),
(437,NULL,'2021-06-15',15),
(438,NULL,'2021-06-16',15),
(439,NULL,'2021-06-17',15),
(440,12,'2021-06-04',14),
(441,12,'2021-06-05',15),
(442,12,'2021-06-06',15),
(443,12,'2021-06-07',15),
(444,12,'2021-06-08',15),
(445,12,'2021-06-09',15),
(446,12,'2021-06-10',15),
(447,12,'2021-06-11',15),
(448,12,'2021-06-12',15),
(449,12,'2021-06-13',15),
(450,12,'2021-06-14',15),
(451,12,'2021-06-15',15),
(452,12,'2021-06-16',15),
(453,12,'2021-06-17',15),
(454,13,'2021-06-04',15),
(455,13,'2021-06-05',15),
(456,13,'2021-06-06',15),
(457,13,'2021-06-07',15),
(458,13,'2021-06-08',15),
(459,13,'2021-06-09',15),
(460,13,'2021-06-10',15),
(461,13,'2021-06-11',15),
(462,13,'2021-06-12',15),
(463,13,'2021-06-13',15),
(464,13,'2021-06-14',15),
(465,13,'2021-06-15',15),
(466,13,'2021-06-16',15),
(467,13,'2021-06-17',15),
(468,14,'2021-06-04',15),
(469,14,'2021-06-05',15),
(470,14,'2021-06-06',15),
(471,14,'2021-06-07',15),
(472,14,'2021-06-08',15),
(473,14,'2021-06-09',15),
(474,14,'2021-06-10',15),
(475,14,'2021-06-11',15),
(476,14,'2021-06-12',15),
(477,14,'2021-06-13',15),
(478,14,'2021-06-14',15),
(479,14,'2021-06-15',15),
(480,14,'2021-06-16',15),
(481,14,'2021-06-17',15),
(510,16,'2021-06-04',15),
(511,16,'2021-06-05',15),
(512,16,'2021-06-06',15),
(513,16,'2021-06-07',15),
(514,16,'2021-06-08',15),
(515,16,'2021-06-09',15),
(516,16,'2021-06-10',15),
(517,16,'2021-06-11',15),
(518,16,'2021-06-12',15),
(519,16,'2021-06-13',15),
(520,16,'2021-06-14',15),
(521,16,'2021-06-15',15),
(522,16,'2021-06-16',15),
(523,16,'2021-06-17',15),
(524,17,'2021-06-04',7),
(525,17,'2021-06-05',7),
(526,17,'2021-06-06',7),
(527,17,'2021-06-07',7),
(528,17,'2021-06-08',7),
(529,17,'2021-06-09',7),
(530,17,'2021-06-10',7),
(531,17,'2021-06-11',7),
(532,17,'2021-06-12',7),
(533,17,'2021-06-13',7),
(534,17,'2021-06-14',7),
(535,17,'2021-06-15',7),
(536,17,'2021-06-16',7),
(537,17,'2021-06-17',7),
(538,18,'2021-06-04',12),
(539,18,'2021-06-05',12),
(540,18,'2021-06-06',12),
(541,18,'2021-06-07',12),
(542,18,'2021-06-08',12),
(543,18,'2021-06-09',12),
(544,18,'2021-06-10',12),
(545,18,'2021-06-11',12),
(546,18,'2021-06-12',12),
(547,18,'2021-06-13',12),
(548,18,'2021-06-14',12),
(549,18,'2021-06-15',12),
(550,18,'2021-06-16',12),
(551,18,'2021-06-17',12),
(552,19,'2021-06-04',9),
(553,19,'2021-06-05',9),
(554,19,'2021-06-06',9),
(555,19,'2021-06-07',9),
(556,19,'2021-06-08',9),
(557,19,'2021-06-09',9),
(558,19,'2021-06-10',9),
(559,19,'2021-06-11',9),
(560,19,'2021-06-12',9),
(561,19,'2021-06-13',9),
(562,19,'2021-06-14',9),
(563,19,'2021-06-15',9),
(564,19,'2021-06-16',9),
(565,19,'2021-06-17',9),
(566,20,'2021-06-04',7),
(567,20,'2021-06-05',7),
(568,20,'2021-06-06',7),
(569,20,'2021-06-07',7),
(570,20,'2021-06-08',7),
(571,20,'2021-06-09',7),
(572,20,'2021-06-10',7),
(573,20,'2021-06-11',7),
(574,20,'2021-06-12',7),
(575,20,'2021-06-13',7),
(576,20,'2021-06-14',7),
(577,20,'2021-06-15',7),
(578,20,'2021-06-16',7),
(579,20,'2021-06-17',7),
(580,21,'2021-06-04',8),
(581,21,'2021-06-05',8),
(582,21,'2021-06-06',8),
(583,21,'2021-06-07',8),
(584,21,'2021-06-08',8),
(585,21,'2021-06-09',8),
(587,21,'2021-06-10',8),
(588,21,'2021-06-11',8),
(589,21,'2021-06-12',8),
(590,21,'2021-06-13',8),
(591,21,'2021-06-14',8),
(592,21,'2021-06-15',8),
(593,21,'2021-06-16',8),
(594,21,'2021-06-17',8),
(595,22,'2021-06-04',6),
(596,22,'2021-06-05',6),
(597,22,'2021-06-06',6),
(598,22,'2021-06-07',6),
(599,22,'2021-06-08',6),
(600,22,'2021-06-09',6),
(601,22,'2021-06-10',6),
(602,22,'2021-06-11',6),
(603,22,'2021-06-12',6),
(604,22,'2021-06-13',6),
(605,22,'2021-06-14',6),
(606,22,'2021-06-15',6),
(607,22,'2021-06-16',6),
(608,22,'2021-06-17',6),
(609,23,'2021-06-04',7),
(610,23,'2021-06-05',7),
(611,23,'2021-06-06',7),
(612,23,'2021-06-07',7),
(613,23,'2021-06-08',7),
(614,23,'2021-06-09',7),
(615,23,'2021-06-10',7),
(616,23,'2021-06-11',7),
(617,23,'2021-06-12',7),
(618,23,'2021-06-13',7),
(619,23,'2021-06-14',7),
(620,23,'2021-06-15',7),
(621,23,'2021-06-16',7),
(622,23,'2021-06-17',7),
(623,26,'2021-06-04',6),
(624,26,'2021-06-05',7),
(625,26,'2021-06-06',7),
(626,26,'2021-06-07',7),
(627,26,'2021-06-08',7),
(628,23,'2021-06-09',7),
(629,26,'2021-06-09',7),
(630,26,'2021-06-10',7),
(631,26,'2021-06-11',7),
(632,26,'2021-06-12',7),
(633,26,'2021-06-13',7),
(634,26,'2021-06-14',7),
(635,26,'2021-06-15',7),
(636,26,'2021-06-16',7),
(637,27,'2021-06-04',22),
(638,27,'2021-06-05',22),
(639,27,'2021-06-06',22),
(640,27,'2021-06-07',22),
(641,27,'2021-06-08',22),
(642,27,'2021-06-09',22),
(643,27,'2021-06-10',22),
(644,27,'2021-06-11',22),
(645,27,'2021-06-12',22),
(646,27,'2021-06-13',22),
(647,27,'2021-06-14',22),
(648,27,'2021-06-15',22),
(649,27,'2021-06-16',22),
(650,27,'2021-06-17',22),
(651,26,'2021-06-17',7),
(652,NULL,'2021-07-17',3);

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kategori` varchar(144) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`id_kategori`,`jenis_kategori`) values 
(1,'Wisata'),
(4,'Penginapan');

/*Table structure for table `tb_pembayaran` */

DROP TABLE IF EXISTS `tb_pembayaran`;

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bukti_bayar` varchar(144) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_transaksi` (`id_transaksi`),
  CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pembayaran` */

insert  into `tb_pembayaran`(`id_pembayaran`,`id_transaksi`,`tgl_bayar`,`bukti_bayar`,`status`) values 
(34,735207483,'2021-04-22','87748242226','1'),
(35,1839446077,'2021-04-22','9888774828805703','1'),
(36,1156210428,'2021-04-23','9888774815424153','1'),
(37,193194326,'2021-04-23','87748892298','1'),
(38,1742150027,'2021-04-23','9888774892434769','1'),
(39,188582467,'2021-04-23','87748831408','0'),
(40,578615152,'2021-04-23','87748219609','1'),
(43,617309876,'2021-04-26','9888774869966218','1'),
(44,46075710,'2021-04-26','9888774831891581','1'),
(45,1195263976,'2021-04-26','9888774815883783','1'),
(46,1435980043,'2021-04-26','9888774846008153','0'),
(47,1568127345,'2021-04-26','9888774842278373','0'),
(48,1973459808,'2021-04-26','9888774814649879','0'),
(49,1557831602,'2021-04-26','9888774813437928','1'),
(50,1339502611,'2021-04-26','9888774850184432','1'),
(51,1188478473,'2021-04-26','87748766292','1'),
(52,845481565,'2021-04-26','9888774841949169','0'),
(54,1556746857,'2021-04-27','87748978833','0'),
(55,1246833167,'2021-04-27','9888774834505864','0'),
(56,581220120,'2021-04-27','87748274340','0'),
(59,1795089270,'2021-04-29','87748094946','0'),
(60,1285483608,'2021-06-02','87748090935','1'),
(61,548178411,'2021-06-03','9888774888751250','1'),
(62,710938704,'2021-06-03','9888774869312948','1'),
(63,196227752,'2021-06-04','9888774882477221','0'),
(64,1294400687,'2021-07-09','87748379377','0'),
(65,1722498234,'2021-07-09','04168449622','0'),
(66,2077715721,'2021-07-14','041689363236754551','0');

/*Table structure for table `tb_produk` */

DROP TABLE IF EXISTS `tb_produk`;

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(144) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(144) NOT NULL,
  `harga` int(11) NOT NULL,
  `available` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_produk` */

insert  into `tb_produk`(`id_produk`,`id_kategori`,`nama_produk`,`stok`,`deskripsi`,`gambar`,`harga`,`available`) values 
(1,1,'Pulau Sambori',0,'Perjalanan menuju pulau sambori dengan perjalanan darat selama 2 jam dari ibu kota Morowali menuju desa lafeu, kemudian dilanjutkan dengan menggunakan kapal laut selama 2 jam. Harga tiket sudah termasuk biaya pulang pergi menggunakan kapal laut.','Pulau Sambori.jpg',250000,1),
(4,1,'Pantai Puluti',0,'Pantai Puluti merupakan pantai yang terletak di desa lahuafu, Morowali, Sulawesi Tengah. Perjalanan menuju pantai puluti memakan waktu selama  40 menit dengan perjalanan darat dari ibukota Morowali. Harga tiket ini tidak termasuk biaya sewa fasilitas','pantai puluti.PNG',10000,1),
(7,1,'Permandian Mata Air Tompaika',0,'Permandian Mata Air Tompaika terletak di desa Sakita, Morowali. Perjalanan dapat ditempuh dengan berkendara dari ibukota Morowali selama 15 menit. Setelah itu dilanjutkan dengan berjalan kaki selama 10 menit untuk sampai ke tempat permandian Tompaika','Tompaika.jpg',10000,1),
(9,1,'Bukit Kembar',0,'Perjalanan menuju bukit kembar dapat ditempuh dengan perjalanan darat selama +-2 jam dari ibukota Morowali. Dilanjutkan dengan kapal laut selama kurang lebih 45 menit. Harga tiket belum termasuk biaya perjalanan kapal laut menuju lokasi Bukit Kembar.','Bukit Kembar.jpg',15000,1),
(10,1,'Gua Allo',0,'Perjalanan menuju Gua Allo dengan perjalanan darat selama 2 jam dari ibu kota Morowali menuju desa lafeu. Kemudian dilanjutkan dengan menggunakan kapal laut selama 1,5 jam. Harga tiket ini sudah termasuk biaya pulang pergi menggunakan kapal laut.','Gua Allo.jpg',200000,1),
(12,1,'Matansala Mangrove',0,'Perjalanan menuju Matansala Mangrove dari ibukota Morowali melalui perjalanan darat selama 15 menit. Harga tiket ini termasuk izin untuk dapat melakukan penanaman bibit bakau secara langsung. Tidak termasuk  biaya pembelian bibit bakau untuk ditanam.','wisata mangrove.jpg',15000,1),
(13,1,'Permandian Veranomata',0,'Perjalanan menuju permandian Veranomata dapat ditempuh dengan perjalanan darat selama 30 menit dari ibukota Morowali. Harga tiket sudah termasuk 3 tingkat permandian yang ada di veranomata. Tidak termasuk biaya sewa fasilitas wisata seperti pelampung','permandian veranomata.jpg',15000,0),
(14,1,'Air Terjun Sampala',0,'Perjalanan menuju Air Terjun Sampala dapat ditempuh selama 10 menit dari ibukota Morowali dengan perjalanan darat.  Kemudian dilanjutkan dengan berjalan kaki selama 10 menit. Harga tiket tidak termasuk biaya sewa fasilitas wisata yang ada dilokasi...','air terjun sampala.jpg',15000,0),
(16,4,'Hotel Metro',0,'Hotel Metro terletak di kompleks perkantoran Bumi Fonuasingko. 17 menit perjalanan darat dari ibukota Morowali. Memiliki parkiran yang luas dengan fasilitas lengkap. Harga tiket tertera untuk 1 malam. Gratis sarapan pagi yang disediakan oleh hotel.','hotel metro.jpg',180000,1),
(17,4,'Penginapan Latanete',0,'Penginapan ini berlokasi di Fonuasingko. Lokasi yang dekat dengan pantai membuat penginapan ini cocok untuk anda yang ingin bersantai menikmati hembusan angin pantai dan memiliki halaman penginapan yang luas. Harga tiket tertera untuk 1 malam.','Latanete 1.jpg',165000,1),
(18,4,'Hotel Galang',0,'Hotel galang berlokasi di kelurahan marsaoleh ibukota Morowali. Hotel ini memiliki halaman yang luas dan sangat dekat dengan pusat perbelanjaan yang dapat anda jangkau hanya dengan berjalan kaki saja. Harga tiket yang tertera hanya untuk 1 malam.','hotel galang.PNG',170000,1),
(19,4,'Penginapan Kafqa',0,'Penginapan ini beralamat di Fonuasingko, Morowali dapat ditempuh selama 18 menit dari ibukota Morowali. Penginapan ini memiliki tempat perbelanjaan tersendiri untuk melengkapi kebutuhan anda. Untuk harga tiket yang tertera hanya untuk 1 malam.','penginapan kafqa.PNG',120000,1),
(20,4,'Penginapan Lima Satu',0,'Penginapan Lima Satu terletak di kelurahan Matano di ibukota Morowali. Penginapan ini sangat cocok untuk anda yang mencari penginapan murah. Untuk harga tiket yang tertera berlaku untuk 1 malam. Penginapan mempunyai parkiran yang luas dan aman.','penginapan lima satu.PNG',75000,1),
(21,4,'Penginapan Bintang',0,'Penginapan Bintang terletak di kelurahan Marsaoleh di ibukota Morowali. Penginapan ini sangat cocok untuk anda yang mencari penginapan murah. Untuk harga tiket yang tertera berlaku untuk 1 malam. Penginapan mempunyai parkiran yang luas dan aman.','penginapan bintang.PNG',80000,1),
(22,4,'Penginapan Mawar Indah',0,'Penginapan Mawar Indah beralamat di Fonuasingko, Morowali dapat ditempuh selama 20 menit dari ibukota Morowali. Penginapan ini sangat cocok untuk anda yang mencari penginapan murah. Untuk harga tiket yang tertera berlaku untuk 1 malam.','penginapan mawar indah.PNG',75000,1),
(23,4,'Penginapan Anunta Baru',0,'Penginapan Anunta Baru terletak di kelurahan Bungki di ibukota Morowali. Penginapan Anunta Baru memiliki lingkungan yang sangat tenang, asri dan mempunyai halaman yang sangat luas. Untuk harga tiket yang tertera berlaku untuk 1 malam. ','penginapan anunta baru.PNG',100000,1),
(26,4,'Penginapan Tenang',0,'Penginapan Tenang beralamat di Fonuasingko, Morowali dapat ditempuh selama 20 menit dari ibukota Morowali. Penginapan ini cocok untuk anda yang mencari penginapan murah dan halaman yang luas. Untuk harga tiket yang tertera berlaku untuk 1 malam','penginapan tenang.PNG',75000,1),
(27,4,'Sambori Hotel',0,'Sambori Hotel terletak di pulau Sambori yang dapat ditempuh dengan  waktu 2 jam perjalanan darat menuju desa lafeu dan dilanjutkan dengan perjalanan laut selama 2 jam.  Harga tertera sudah termasuk biaya kapal untuk pulang dan pergi ke desa lafeu.','sambori hotel.jpg',200000,1),
(32,1,'Rajawali',0,'rajawali disana','anjingg.png',0,0);

/*Table structure for table `tb_titik` */

DROP TABLE IF EXISTS `tb_titik`;

CREATE TABLE `tb_titik` (
  `id_titik` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `longtitude` varchar(144) NOT NULL,
  `latitude` varchar(144) NOT NULL,
  PRIMARY KEY (`id_titik`),
  KEY `id_wisata` (`id_produk`),
  CONSTRAINT `tb_titik_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_titik` */

insert  into `tb_titik`(`id_titik`,`id_produk`,`longtitude`,`latitude`) values 
(20,1,'122.39814510000575','-3.2713291832241223'),
(21,4,'121.99882032766403','-2.616251089559522'),
(23,9,'121.36336118001918','-1.9459698472766591'),
(24,10,'122.4226660451288','-3.276257627616319'),
(26,12,'121.96044630199054','-2.5249564166927887'),
(27,13,'121.91017994569171','-2.528390069761679'),
(28,14,'121.91017994569171','-2.5655549284756223');

/*Table structure for table `tb_transaksi` */

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_jual` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `totBayar` int(14) NOT NULL,
  `status` varchar(156) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_user` (`id_user`),
  KEY `id_produk` (`id_produk`),
  KEY `id_jual` (`id_jual`),
  CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_jual`) REFERENCES `tb_jual` (`id_jual`) ON DELETE NO ACTION,
  CONSTRAINT `tb_transaksi_ibfk_4` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2145584447 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_transaksi` */

insert  into `tb_transaksi`(`id_transaksi`,`id_produk`,`id_user`,`tgl_transaksi`,`id_jual`,`banyak`,`totBayar`,`status`) values 
(46075710,10,7,'2021-04-26',72,1,200000,'0'),
(188582467,1,7,'2021-04-23',2,1,250000,'0'),
(193194326,1,7,'2021-04-23',2,1,250000,'0'),
(196227752,12,7,'2021-06-04',440,1,15000,'0'),
(548178411,1,7,'2021-06-03',356,1,250000,'0'),
(578615152,4,7,'2021-04-23',1,1,80000,'0'),
(581220120,7,7,'2021-04-27',35,1,10000,'0'),
(617309876,13,7,'2021-04-26',103,1,15000,'0'),
(710938704,4,7,'2021-06-03',370,1,10000,'0'),
(735207483,4,2,'2021-04-22',1,2,160000,'0'),
(845481565,9,7,'2021-04-26',48,1,15000,'0'),
(1156210428,1,7,'2021-04-23',2,1,250000,'0'),
(1188478473,18,7,'2021-04-26',188,2,340000,'0'),
(1195263976,12,7,'2021-04-26',90,3,45000,'0'),
(1246833167,7,7,'2021-04-27',34,1,10000,'0'),
(1285483608,1,7,'2021-06-02',355,1,250000,'0'),
(1294400687,NULL,1,'2021-07-09',652,1,20000,'0'),
(1339502611,19,7,'2021-04-26',203,1,120000,'0'),
(1435980043,4,7,'2021-04-26',23,2,20000,'0'),
(1556746857,1,2,'2021-04-27',6,2,500000,'0'),
(1557831602,16,7,'2021-04-26',160,1,350000,'0'),
(1568127345,14,7,'2021-04-26',118,1,15000,'0'),
(1722498234,NULL,1,'2021-07-09',652,1,20000,'0'),
(1742150027,1,7,'2021-04-23',2,1,250000,'0'),
(1795089270,1,2,'2021-04-29',10,2,500000,'0'),
(1839446077,4,7,'2021-04-22',1,9,720000,'0'),
(1973459808,17,7,'2021-04-26',175,1,165000,'0'),
(2077715721,NULL,1,'2021-07-14',380,1,10000,'0'),
(2145584445,1,2,'2021-04-23',2,8,2000000,'0'),
(2145584446,1,2,'2021-04-23',2,8,2000000,'0');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(144) NOT NULL,
  `lname` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `telephone` varchar(144) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `gambar` varchar(144) NOT NULL,
  `available` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`fname`,`lname`,`email`,`telephone`,`username`,`password`,`gambar`,`available`) values 
(1,'Arsalam','Launu','arsalam@gmail.com','8389671231235788','arsalam','12345','arsalam.jpg',1),
(2,'M','Dhifta','dhifta48@gmail.com','085791419622','mdhifta','123456','IMG-20210422-WA0010.jpg',1),
(6,'ssss','wwww','modira@gmail.com','','','1233333','',1),
(7,'Ismail','Alex','launualam@gmail.com','08123456789','ismailalex','12345','ririrka.jpg',1),
(8,'M','Dhifta','selvyerhita@gmail.com','085791419625','miaanggita','12345','IMG_20170314_132011.jpg',1),
(9,'yusriandi','alfian ','yusriandi20@gmail.com','','','singkalu','',1),
(10,'anak','setan','lalala@gmail.com','','','admin123','',1),
(11,'Nanang','Sunanang','nanang@gmail.com','','','12345','',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
