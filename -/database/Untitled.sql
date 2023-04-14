CREATE TABLE `tblogin` (
  `id` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Telp` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
);

CREATE TABLE `tbpesan` (
  `id` varchar(50) NOT NULL,
  `tbproduk_id` varchar(50) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rtrw` varchar(255) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `kodepesanan` int(3) PRIMARY KEY NOT NULL
);

CREATE TABLE `tbproduk` (
  `id` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `tipe_produk` varchar(50) NOT NULL,
  `foto_produk` varchar(50) NOT NULL
);

CREATE INDEX `tbpesan_user_id_foreign` ON `tbpesan` (`user_id`);

CREATE INDEX `tbpesan_tbproduk_id_foreign` ON `tbpesan` (`tbproduk_id`);

ALTER TABLE `tbpesan` ADD CONSTRAINT `tbpesan_tbproduk_id_foreign` FOREIGN KEY (`tbproduk_id`) REFERENCES `tbproduk` (`id`);

ALTER TABLE `tbpesan` ADD CONSTRAINT `tbpesan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tblogin` (`id`);
