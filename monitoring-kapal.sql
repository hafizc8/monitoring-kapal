/*
 Navicat Premium Data Transfer

 Source Server         : mysql_mamp
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:8889
 Source Schema         : monitoring-kapal

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 04/07/2022 19:01:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_kapal
-- ----------------------------
DROP TABLE IF EXISTS `data_kapal`;
CREATE TABLE `data_kapal` (
  `id_kapal` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kapal` varchar(255) DEFAULT NULL,
  `tgl_tiba` date DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `tgl_diserahkan` date DEFAULT NULL,
  `spb` text,
  `manifest` text,
  `crewlist` text,
  `buku_kesehatan` text,
  `buku_pelaut` text,
  `ijazah_perwira` text,
  `bst` text,
  `pasport` text,
  `surat_laut` text,
  `surat_ukur` text,
  `serti_konstruksi` text,
  `serti_perlengkapan_barang` text,
  `serti_radio` text,
  `serti_lambung` text,
  `serti_mesin` text,
  `serti_garis_muat` text,
  `serti_pencemaran` text,
  `minimum_safe_manning` text,
  `serti_anti_teritip` text,
  `serti_liferaft` text,
  `serti_damkar` text,
  `hru` text,
  `doc` text,
  `serti_keselamatan_sementara` text,
  `rpt` text,
  `buku_sijil` text,
  `pkl` text,
  `sscec` text,
  `wreak` text,
  `clc` text,
  `orb` text,
  `izin_stasiun_radio` text,
  `serti_asuransi_kapal` text,
  `siupal` text,
  `sk_susunan_perwira` text,
  `stempel_kapal` text,
  `tgl_input` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kapal`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_kapal
-- ----------------------------
BEGIN;
INSERT INTO `data_kapal` VALUES (5, 'TK SUMBER KENCANA I', '2022-06-26', '2022-06-26', '2022-06-26', '2022-06-26', '5_spb_1656241359_Screen_Shot_2022-06-18_at_21.07.27-removebg-preview.png', '5_manifest_1656241376_MacBook Pro 14_ - 4.png', '5_crewlist_1656242665_Screen_Shot_2022-06-22_at_12.49.14.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-19 11:56:56');
INSERT INTO `data_kapal` VALUES (6, 'TK SUMBER KENCANA II', NULL, NULL, NULL, NULL, '6_spb_1655644425_skl-sd.jpeg', '6_manifest_1655644653_Rapor-sd-sem-7.pdf', '6_crewlist_1655644662_Rapor-sd-sem-8.pdf', '6_buku_kesehatan_1655644672_Rapor-sd-sem-9.pdf', '6_buku_pelaut_1655644676_Rapor-sd-sem-10.pdf', '6_ijazah_perwira_1655644679_Rapor-sd-sem-11.pdf', '6_bst_1655644729_skl-sd.jpeg', '6_pasport_1655644735_pas-foto-sd.jpg', '6_surat_laut_1655644739_kip.jpg', '6_surat_ukur_1655644743_pas-photo-2.jpg', '6_serti_konstruksi_1655644746_surat-penugasan-ortu.jpg', '6_serti_perlengkapan_barang_1655644751_Rapor-sd-sem-9.pdf', '6_serti_radio_1655644754_Rapor-sd-sem-7.pdf', '6_serti_lambung_1655644758_Rapor-sd-sem-8.pdf', '6_serti_mesin_1655644762_Rapor-sd-sem-9.pdf', '6_serti_garis_muat_1655644766_Rapor-sd-sem-10.pdf', '6_serti_pencemaran_1655644769_Rapor-sd-sem-11.pdf', '6_minimum_safe_manning_1655644776_sertifikat-osn.png', '6_serti_anti_teritip_1655644781_surat-miskin.jpg', '6_serti_liferaft_1655644785_akta-kelahiran.jpg', '6_serti_damkar_1655644790_foto-kk.jpg', '6_hru_1655644804_Rapor-sd-sem-7.pdf', '6_doc_1655644807_Rapor-sd-sem-8.pdf', '6_serti_keselamatan_sementara_1655644810_Rapor-sd-sem-9.pdf', '6_rpt_1655644814_Rapor-sd-sem-10.pdf', '6_buku_sijil_1655644817_Rapor-sd-sem-11.pdf', '6_pkl_1655644822_sertifikat-osn.png', '6_sscec_1655644825_pas-foto-sd.jpg', '6_wreak_1655644828_surat-penugasan-ortu.jpg', '6_clc_1655644832_kip.jpg', '6_orb_1655644835_surat-miskin.jpg', '6_izin_stasiun_radio_1655644839_akta-kelahiran.jpg', '6_serti_asuransi_kapal_1655644843_kip.jpg', '6_siupal_1655644848_foto-kk.jpg', '6_sk_susunan_perwira_1655644851_Rapor-sd-sem-8.pdf', '6_stempel_kapal_1655644854_sertifikat-osn.png', '2022-06-19 11:57:02');
INSERT INTO `data_kapal` VALUES (7, 'TK SUMBER KENCANA IV', NULL, NULL, NULL, NULL, '7_spb_1656249517_Screen_Shot_2022-06-22_at_12.49.14.png', '7_manifest_1656249526_Screen_Shot_2022-06-18_at_21.07.27-removebg-preview.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-26 13:18:17');
COMMIT;

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `id_kapal` int(11) DEFAULT NULL,
  `id_kapal2` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_invoice`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of invoice
-- ----------------------------
BEGIN;
INSERT INTO `invoice` VALUES (6, 'INV-00005', 6, NULL, '2022-06-17');
INSERT INTO `invoice` VALUES (7, 'INV-00006', 5, NULL, '2022-06-16');
INSERT INTO `invoice` VALUES (8, 'INV-00007', 5, 6, '2022-06-21');
COMMIT;

-- ----------------------------
-- Table structure for invoice_detail
-- ----------------------------
DROP TABLE IF EXISTS `invoice_detail`;
CREATE TABLE `invoice_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` int(11) DEFAULT NULL,
  `keterangan` text,
  `total` float(50,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of invoice_detail
-- ----------------------------
BEGIN;
INSERT INTO `invoice_detail` VALUES (1, 6, 'Cleaning Badan Kapal', 8000000);
INSERT INTO `invoice_detail` VALUES (5, 6, 'Perbaikan Lampu Kapal', 7500000);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'admin', 'Daniel Sima', 'admin123', '1');
INSERT INTO `users` VALUES (2, 'operator', 'Supardi Pratama', '123456', '2');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
