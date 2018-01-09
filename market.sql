/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.19-MariaDB : Database - market
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`market` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `market`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` varchar(30) NOT NULL,
  `pass_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`pass_admin`,`nama_admin`) values 
('admin','admin','admin'),
('admin2','admin2','admin2'),
('admin3','admin3','admin3');

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(200) NOT NULL,
  `harga_barang` int(200) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`nama_barang`,`jumlah_barang`,`harga_barang`) values 
('A025','Sikat Gigi Formula',270,5000),
('A089','Shampoo Zinc',150,8900),
('B001','Royco Bumbu Nasi Goreng',300,1500),
('B002','Kecap ABC',140,7800),
('B004','Sambal Pedas ABC',210,7600),
('D026','Yakult',330,16000),
('D076','Al-Masoem',550,2000),
('D362','Aqua botol',230,3000),
('D579','Coca-Cola',200,5000),
('F051','Silver Queen',350,13000),
('F521','Nano-nano',150,5000),
('F802','Sari Roti',160,3500),
('M001','Mie Sedap Goreng',400,2200),
('M002','Indomie Goreng',300,2300),
('M003','Ramen',180,5600),
('O098','Pulpen',350,3500),
('O099','Kapur Ajaib',79,13500),
('O249','Tisu Wajah Paseo',120,7000),
('P001','Casablanca',100,13500),
('P002','Nivea Men',125,15000),
('P003','Stella',80,25000),
('S001','Lifebuoy',400,3000),
('S002','Sabun Ekonomi',170,4500),
('S005','Rinso',595,5500),
('S892','Nuvo',145,3000);

/*Table structure for table `barangkeluar` */

DROP TABLE IF EXISTS `barangkeluar`;

CREATE TABLE `barangkeluar` (
  `no_barang_keluar` int(30) NOT NULL AUTO_INCREMENT,
  `tanggal_keluar` date NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(200) NOT NULL,
  `harga_barang` int(200) NOT NULL,
  `total_harga` int(255) NOT NULL,
  PRIMARY KEY (`no_barang_keluar`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `barangkeluar` */

insert  into `barangkeluar`(`no_barang_keluar`,`tanggal_keluar`,`id_barang`,`nama_barang`,`jumlah_barang`,`harga_barang`,`total_harga`) values 
(1,'2017-11-19','M001','Mie Sedap Goreng',400,2200,880000),
(2,'2017-11-15','M002','Indomie Goreng',300,2300,690000),
(3,'2017-11-14','M003','Ramen',180,5600,1008000),
(4,'2017-11-09','S001','Lifebuoy',400,4500,1200000),
(5,'2017-11-04','P002','Nivea Men',125,15000,1875000),
(6,'2017-12-15','S002','Sabun Ekonomi',165,4500,240000),
(7,'2017-12-20','O002','Tisu Bayi',120,2300,800000),
(8,'2017-12-20','O249','Tisu Wajah Paseo',7000,2200,840000),
(9,'2017-12-20','B001','Royco Bumbu Nasi Goreng',300,1500,450000),
(10,'2017-12-15','B002','Kecap ABC',140,7800,1092000),
(11,'2017-12-21','B004','Sambal Pedas ABC',210,7600,1596000),
(12,'2017-12-04','F051','Silver Queen',100,13000,1300000),
(13,'2017-12-20','D026','Yakult',140,9600,2240000),
(14,'2017-10-28','A025','Sikat Gigi Formula',140,5500,700000),
(15,'2017-10-06','A021','Shampoo Head & Shoulders',110,9800,1980000),
(16,'2017-10-10','A089','Shampoo Zinc',150,6500,1335000),
(17,'2017-10-09','O099','Kapur Ajaib',75,5550,1012500),
(18,'2017-10-15','S002','Sabun Ekonomi',35,5300,50000),
(19,'2017-10-15','D982','Al-Masoem',100,2000,200000),
(20,'2017-10-14','R098','Rinso',65,15000,150000),
(21,'2017-10-09','S005','Rinso',400,15000,2200000),
(22,'2017-10-01','D076','Al-Masoem',450,2000,1100000),
(23,'2018-01-09','A025','Sikat Gigi Formula',60,5000,300000);

/*Table structure for table `barangmasuk` */

DROP TABLE IF EXISTS `barangmasuk`;

CREATE TABLE `barangmasuk` (
  `no_barang_masuk` int(30) NOT NULL AUTO_INCREMENT,
  `tanggal_masuk` date NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(200) NOT NULL,
  `harga_barang` int(200) NOT NULL,
  `total_harga` int(255) NOT NULL,
  PRIMARY KEY (`no_barang_masuk`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `barangmasuk` */

insert  into `barangmasuk`(`no_barang_masuk`,`tanggal_masuk`,`id_barang`,`nama_barang`,`jumlah_barang`,`harga_barang`,`total_harga`) values 
(1,'2017-11-19','M001','Mie Sedap Goreng',400,2200,880000),
(2,'2017-11-15','M002','Indomie Goreng',300,2300,690000),
(3,'2017-11-14','M003','Ramen',180,5600,1008000),
(4,'2017-11-09','S001','Lifebuoy',400,4500,1200000),
(5,'2017-11-04','P002','Nivea Men',125,15000,1875000),
(6,'2017-12-15','S002','Sabun Ekonomi',165,4500,240000),
(7,'2017-12-20','O002','Tisu Bayi',120,2300,800000),
(8,'2017-12-20','O249','Tisu Wajah Paseo',7000,2200,840000),
(9,'2017-12-20','B001','Royco Bumbu Nasi Goreng',300,1500,450000),
(10,'2017-12-15','B002','Kecap ABC',140,7800,1092000),
(11,'2017-12-21','B004','Sambal Pedas ABC',210,7600,1596000),
(12,'2017-12-04','F051','Silver Queen',100,13000,1300000),
(13,'2017-12-20','D026','Yakult',140,9600,2240000),
(14,'2017-10-28','A025','Sikat Gigi Formula',140,5500,700000),
(15,'2017-10-06','A021','Shampoo Head & Shoulders',110,9800,1980000),
(16,'2017-10-10','A089','Shampoo Zinc',150,6500,1335000),
(17,'2017-10-09','O099','Kapur Ajaib',75,5550,1012500),
(18,'2017-10-15','S002','Sabun Ekonomi',35,5300,50000),
(19,'2017-10-15','D982','Al-Masoem',100,2000,200000),
(20,'2017-10-14','R098','Rinso',65,15000,150000),
(21,'2017-10-09','S005','Rinso',400,15000,2200000),
(22,'2017-10-01','D076','Al-Masoem',450,2000,1100000),
(24,'2018-01-09','A025','Sikat Gigi Formula',60,5000,300000);

/*Table structure for table `kasir` */

DROP TABLE IF EXISTS `kasir`;

CREATE TABLE `kasir` (
  `id_kasir` varchar(30) NOT NULL,
  `pass_kasir` varchar(50) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kasir` */

insert  into `kasir`(`id_kasir`,`pass_kasir`,`nama_kasir`) values 
('k1','kasir','kasir'),
('k2','kasir2','kasir2'),
('k3','kasir3','kasir3');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `no_log` int(30) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `Id_user` varchar(30) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  PRIMARY KEY (`no_log`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`no_log`,`tanggal`,`Id_user`,`nama_user`) values 
(1,'2017-11-14 09:31:18','admin','admin'),
(2,'2017-12-16 12:55:31','admin','admin'),
(3,'2017-12-16 13:55:56','admin','admin'),
(4,'2017-12-16 14:09:03','admin','admin'),
(5,'2017-12-16 15:36:23','admin','admin'),
(6,'2017-12-16 15:37:31','admin','admin'),
(7,'2017-12-16 16:29:51','admin','admin'),
(8,'2017-12-16 17:59:01','k1','kasir'),
(9,'2017-12-16 17:59:16','admin','admin'),
(10,'2017-12-16 18:19:22','admin','admin'),
(11,'2017-12-17 08:00:29','k1','kasir'),
(12,'2017-12-17 08:01:04','k1','kasir'),
(13,'2017-12-17 08:05:20','k1','kasir'),
(14,'2017-12-17 08:05:39','k1','kasir'),
(15,'2017-12-17 08:07:06','admin','admin'),
(16,'2017-12-17 08:07:16','k1','kasir'),
(17,'2017-12-17 08:07:56','k1','kasir'),
(18,'2017-12-17 08:08:08','k1','kasir'),
(19,'2017-12-17 08:09:25','k1','kasir'),
(20,'2017-12-17 08:13:57','k1','kasir'),
(21,'2017-12-17 08:50:13','admin','admin'),
(22,'2017-12-17 09:13:57','admin','admin'),
(23,'2017-12-17 09:17:19','admin','admin'),
(24,'2017-12-17 09:19:47','admin','admin'),
(25,'2017-12-17 09:27:01','admin','admin'),
(26,'2017-12-17 09:28:49','admin','admin'),
(27,'2017-12-17 09:40:59','admin2','admin2'),
(28,'2017-12-17 20:14:11','admin','admin'),
(29,'2017-12-17 20:46:10','admin','admin'),
(30,'2017-12-22 14:56:31','admin','admin'),
(31,'2017-12-28 08:44:31','admin','admin'),
(32,'2017-12-28 08:46:36','admin','admin'),
(34,'2018-01-04 01:38:30','admin','admin'),
(35,'2018-01-04 07:38:46','admin','admin'),
(36,'2018-01-04 08:38:57','admin','admin'),
(37,'2018-01-08 23:41:31','admin','admin'),
(38,'2018-01-08 23:48:31','admin','admin'),
(40,'2018-01-09 06:49:41','k1','kasir'),
(41,'2018-01-09 06:52:46','k1','kasir'),
(42,'2018-01-09 07:58:17','k1','kasir');

/*Table structure for table `logjual` */

DROP TABLE IF EXISTS `logjual`;

CREATE TABLE `logjual` (
  `no_logjual` int(30) NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(200) NOT NULL,
  `jumlah_barang` int(30) NOT NULL,
  `total_harga` int(30) NOT NULL,
  `id_kasir` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`no_logjual`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `logjual` */

insert  into `logjual`(`no_logjual`,`id_barang`,`nama_barang`,`harga_barang`,`jumlah_barang`,`total_harga`,`id_kasir`,`tanggal`) values 
(1,'T100','Tisu Wajah Paseo',2500,10,25000,'k1','2017-12-15 20:43:47'),
(2,'M101','Mie Sedap Goreng',2000,10,20000,'k1','2017-12-16 20:45:42'),
(3,'D026','Yakult',16000,1,16000,'k1','2018-01-01 15:18:00'),
(5,'F051','Silver Queen',13000,5,65000,'k1','2018-01-09 06:50:56'),
(49,'O099','Kapur Ajaib',13500,1,13500,'k1','2018-01-09 07:59:23');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(50) NOT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_tlp` text,
  `alamat` text,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id_pegawai`,`nama_pegawai`,`tempat_lahir`,`tanggal_lahir`,`no_tlp`,`alamat`) values 
('admin','admin','Garut','1997-02-13','082315810923','Jl. Otista Kp. Tanjung RT/04 RW/02 Tarogong Kaler Garut'),
('admin2','admin2','Sukabumi','1997-11-13','098781234786','Jl. Fiala Kp. Muama RT/12 RW/14 kelopa Bandung'),
('admin3','admin3','Semarang','1982-10-20','012378920974','Jl. Fofo Kelurahan Binta RT/08 RW/02 Bandung'),
('k1','kasir','Bandung','1997-05-15','085219870938','Jl. Derada Kelurahan Annata RT/09 RW08 Derara Bandung'),
('k2','kasir2','Cianjur','1989-06-08','098723456785','Jl. Duu Kelurahan Bi RT/08 RW/02 Bandung'),
('k3','kasir3','Bantul','1996-09-17','067213784356','Jl. Duu Kelurahan Bi RT/08 RW/02 Bandung');

/*Table structure for table `temp` */

DROP TABLE IF EXISTS `temp`;

CREATE TABLE `temp` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(100) NOT NULL,
  `jumlah_barang` int(30) NOT NULL,
  `sub_total` int(100) NOT NULL,
  `kasir` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `temp` */

insert  into `temp`(`no`,`id_barang`,`nama_barang`,`harga_barang`,`jumlah_barang`,`sub_total`,`kasir`) values 
(4,'O099','Kapur Ajaib',13500,1,13500,'');

/*Table structure for table `view_laporan_penjualan_kasir` */

DROP TABLE IF EXISTS `view_laporan_penjualan_kasir`;

/*!50001 DROP VIEW IF EXISTS `view_laporan_penjualan_kasir` */;
/*!50001 DROP TABLE IF EXISTS `view_laporan_penjualan_kasir` */;

/*!50001 CREATE TABLE  `view_laporan_penjualan_kasir`(
 `tanggal` datetime ,
 `id_pegawai` varchar(50) ,
 `nama_pegawai` varchar(100) ,
 `nama_barang` varchar(100) ,
 `harga_barang` int(200) ,
 `jumlah_barang` int(30) ,
 `total_harga` int(30) ,
 `no_tlp` text ,
 `alamat` text 
)*/;

/*View structure for view view_laporan_penjualan_kasir */

/*!50001 DROP TABLE IF EXISTS `view_laporan_penjualan_kasir` */;
/*!50001 DROP VIEW IF EXISTS `view_laporan_penjualan_kasir` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_laporan_penjualan_kasir` AS select `logjual`.`tanggal` AS `tanggal`,`pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nama_pegawai` AS `nama_pegawai`,`logjual`.`nama_barang` AS `nama_barang`,`logjual`.`harga_barang` AS `harga_barang`,`logjual`.`jumlah_barang` AS `jumlah_barang`,`logjual`.`total_harga` AS `total_harga`,`pegawai`.`no_tlp` AS `no_tlp`,`pegawai`.`alamat` AS `alamat` from (`logjual` join `pegawai` on((`logjual`.`id_kasir` = `pegawai`.`id_pegawai`))) order by `logjual`.`id_kasir` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
