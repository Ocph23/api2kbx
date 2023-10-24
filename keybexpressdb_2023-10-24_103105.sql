/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS failed_jobs;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS kanwils;
CREATE TABLE `kanwils` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regionalid` int DEFAULT NULL,
  `nama` text,
  `kota` text,
  `email` text,
  `telp` varchar(45) DEFAULT NULL,
  `kordinat` text,
  `alamat` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS migrations;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS password_reset_tokens;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS penjualans;
CREATE TABLE `penjualans` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stt` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengirim_nama` longtext COLLATE utf8mb4_unicode_ci,
  `pengirim_telepon` longtext COLLATE utf8mb4_unicode_ci,
  `pengirim_alamat` longtext COLLATE utf8mb4_unicode_ci,
  `penerima_nama` longtext COLLATE utf8mb4_unicode_ci,
  `penerima_telepon` longtext COLLATE utf8mb4_unicode_ci,
  `penerima_alamat` longtext COLLATE utf8mb4_unicode_ci,
  `asal` longtext COLLATE utf8mb4_unicode_ci,
  `tujuan` longtext COLLATE utf8mb4_unicode_ci,
  `jumlah` int DEFAULT NULL,
  `tarif` int DEFAULT NULL,
  `isvolume` tinyint DEFAULT NULL,
  `dimensi_panjang` double DEFAULT NULL,
  `dimensi_lebar` double DEFAULT NULL,
  `dimensi_tinggi` double DEFAULT NULL,
  `user` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_packing` double DEFAULT NULL,
  `biaya_lain` double DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `catatan` longtext COLLATE utf8mb4_unicode_ci,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama_barang` longtext COLLATE utf8mb4_unicode_ci,
  `via` int NOT NULL DEFAULT '0',
  `pembayaran` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `stt_UNIQUE` (`stt`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS personal_access_tokens;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS regionals;
CREATE TABLE `regionals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` longtext,
  `description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS trackings;
CREATE TABLE `trackings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `penjualanid` int DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `user` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO kanwils(id,regionalid,nama,kota,email,telp,kordinat,alamat) VALUES('1','3','X\'42616a61726d6173696e\'','X\'6173646173\'','X\'6173644064617364\'','\'asdasd\'','X\'2d332e333231313632313737353031363931372c203131342e3538343737303433343535333235\'','X\'617364617364\''),('14','1','X\'41636568\'','X\'42616e64612041636568\'','X\'6163656840676d61696c2e636f6d\'','\'0811481\'','X\'352e3536333536333732393633363930342c2039352e33323839383634343234393334\'','X\'6a6c6e2e\''),('18','10','X\'647777\'','X\'776164617364\'','X\'6173646173644066736466736466\'','\'asdasd\'','X\'616473617364\'','X\'6173646173646164\'');

INSERT INTO migrations(id,migration,batch) VALUES('1','\'2014_10_12_000000_create_users_table\'','1'),('2','\'2014_10_12_100000_create_password_reset_tokens_table\'','1'),('3','\'2019_08_19_000000_create_failed_jobs_table\'','1'),('4','\'2019_12_14_000001_create_personal_access_tokens_table\'','1');


INSERT INTO penjualans(id,stt,pengirim_nama,pengirim_telepon,pengirim_alamat,penerima_nama,penerima_telepon,penerima_alamat,asal,tujuan,jumlah,tarif,isvolume,dimensi_panjang,dimensi_lebar,dimensi_tinggi,user,biaya_packing,biaya_lain,harga,catatan,created,updated,berat,tanggal,nama_barang,via,pembayaran) VALUES('25','\'100001\'','X\'6164776173646164\'','NULL','X\'4a6c6e\'','X\'42556469\'','NULL','X\'617364\'','X\'4a616b6172617461\'','X\'647777\'','10','12','0','0','0','0','\'administrator\'','0','0','0','X\'617364617364\'','\'2023-09-02 10:06:06\'','NULL','12','\'2023-09-02 01:05:30\'','X\'617364617364\'','2','1'),('26','\'100002\'','X\'6173646173\'','NULL','X\'6164\'','X\'617364\'','NULL','X\'617364617364\'','X\'61736461\'','X\'617364\'','1','11111','0','0','0','0','\'administrator\'','0','0','0','X\'617364617364\'','\'2023-09-04 23:53:24\'','NULL','1111','\'2023-09-04 23:52:33\'','X\'617364\'','0','0'),('27','\'100003\'','X\'617364736164\'','NULL','X\'617364617364\'','X\'617364617364\'','NULL','X\'617364617364\'','X\'617364617364\'','X\'617364617364\'','1','1','0','0','0','0','\'asdasd\'','0','0','0','X\'6173646173\'','NULL','NULL','1','\'2023-09-21 19:19:41\'','X\'617364617364\'','2','1');


INSERT INTO regionals(id,name,description) VALUES('1','X\'53756d617461747261\'','X\'726567696f6e616c2070756c612073756d61747261\''),('2','X\'4a617761\'','X\'6a6177616c6168\''),('10','X\'4b616c696d616e74616e\'','X\'64617461206b616c696d616e6174616e20617364616477\'');

INSERT INTO trackings(id,penjualanid,tanggal,deskripsi,status,created,updated,user) VALUES('7','25','\'2023-09-02 10:30:00\'','X\'426172616e67204449746572696d61204449206b616e746f72\'','X\'494e\'','\'2023-09-02 10:06:59\'','NULL','NULL'),('8','25','\'2023-09-02 11:07:00\'','X\'44696b6972696d204b652062616e64617261\'','X\'4f7574\'','\'2023-09-02 10:07:29\'','NULL','NULL'),('9','25','\'2023-09-04 10:07:00\'','X\'4d6173756b20646920477564616e672042616e64617261\'','X\'494e\'','\'2023-09-02 10:08:16\'','NULL','NULL'),('10','25','\'2023-09-17 03:04:00\'','X\'54657262616e67204d656e756a75204a61796170757261\'','X\'4f7574\'','\'2023-09-02 10:08:56\'','NULL','NULL'),('11','26','\'2023-09-05 13:45:00\'','X\'617364776164\'','X\'6173646164\'','\'2023-09-05 11:45:28\'','\'2023-09-05 11:49:35\'','NULL'),('14','26','\'2023-09-26 03:41:00\'','NULL','X\'617364617364\'','NULL','NULL','NULL'),('15','26','\'2023-09-28 14:41:00\'','X\'73616477\'','X\'617364617364\'','NULL','NULL','NULL'),('16','27','\'2023-09-15 07:40:00\'','X\'617364\'','X\'77\'','NULL','NULL','NULL');
INSERT INTO users(id,name,email,email_verified_at,password,remember_token,created_at,updated_at) VALUES('1','\'ocph23@gmail.com\'','\'ocph23@gmail.com\'','NULL','\'$2y$10$uGLRWgLeDZGXuWpD9FYBsuvPPvCDybQSa5AeoYHOa4vTLAZxzPl.u\'','NULL','\'2023-09-24 09:33:30\'','\'2023-09-24 09:33:30\'');