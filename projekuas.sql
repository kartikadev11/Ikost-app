-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2023 pada 06.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekuas`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `alternatif`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `alternatif` (
`id_kos` int(11)
,`nama_kos` varchar(45)
,`harga_sewa` double
,`luas_kamar` double
,`fasilitas` int(11)
,`lokasi` int(11)
,`keamanan` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kos`
--

CREATE TABLE `data_kos` (
  `id_kos` int(11) NOT NULL,
  `nama_kos` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `harga_sewa` double NOT NULL,
  `luas_kamar` double NOT NULL,
  `jenis_kos_id_jenis` int(11) NOT NULL,
  `fasilitas_id_fasilitas` int(11) NOT NULL,
  `lokasi_id_lokasi` int(11) NOT NULL,
  `keamanan_id_keamanan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kos`
--

INSERT INTO `data_kos` (`id_kos`, `nama_kos`, `alamat`, `harga_sewa`, `luas_kamar`, `jenis_kos_id_jenis`, `fasilitas_id_fasilitas`, `lokasi_id_lokasi`, `keamanan_id_keamanan`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Kost Ibu Tusyanthi Tegal Barat', 'Tegal Barat', 330000, 12, 3, 4, 4, 1, 'fasilitas : kasur, lemari, kipas angin, wifi', '6829950_38880.jpg', '2023-07-04 08:43:56', NULL),
(2, 'Kost Exclusive Cemara 3 Tipe A Tegal Barat', 'Tegal Barat', 1000000, 12, 3, 5, 4, 3, 'Fasilitas : kasur, lemari, ac, wifi, kamar mandi dalam', '6829950_38880.jpg', '2023-07-04 08:44:20', '2023-06-18 16:10:34'),
(3, 'Kost Al Ihsan Tegal Selatan Tegal', 'kota Tegal', 550000, 9, 3, 3, 2, 2, 'fasilitas : kasur, lemari, wifi', '7765111_3702255.jpg', '2023-07-04 09:55:29', '2023-06-18 16:59:50'),
(4, 'Kost Ramona Tipe A Tegal Timur', 'Tegal Timur', 400000, 12, 2, 3, 2, 2, 'fasilitas : kasur, lemari, wifi', '7765111_3702255.jpg', '2023-07-04 08:35:03', '2023-06-18 17:03:52'),
(5, 'Kost Dewa Dewi Kipas Tipe A', 'kota Tegal', 500000, 9, 3, 5, 4, 2, 'fasilitas : kasur, lemari, ac, wifi, kamar mandi dalam', '4979878_50819.jpg', '2023-07-04 08:35:21', '2023-06-18 17:08:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `fasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `fasilitas`) VALUES
(1, 'tidak lengkap'),
(2, 'kurang lengkap'),
(3, 'cukup lengkap'),
(4, 'lengkap'),
(5, 'sangat lengkap');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil` (
`id_kos` int(11)
,`nama_kos` varchar(45)
,`hasil` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil_akhir`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil_akhir` (
`nama_kos` varchar(45)
,`hasil` double
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kos`
--

CREATE TABLE `jenis_kos` (
  `id_jenis` int(11) NOT NULL,
  `jenis_kos` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_kos`
--

INSERT INTO `jenis_kos` (`id_jenis`, `jenis_kos`) VALUES
(1, 'putra'),
(2, 'putri'),
(3, 'campuran');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `kategori`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `kategori` (
`id` int(20) unsigned
,`nama_kriteria` varchar(100)
,`bobot` double
,`label` enum('benefit','cost')
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keamanan`
--

CREATE TABLE `keamanan` (
  `id_keamanan` int(11) NOT NULL,
  `keamanan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keamanan`
--

INSERT INTO `keamanan` (`id_keamanan`, `keamanan`) VALUES
(1, 'Kurang aman (Tidak ada CCTV maupun Security/penjaga kos)'),
(2, 'Aman (Ada security/penjaga kos atau pemantauan CCTV)'),
(3, 'Sangat aman (Ada Security/penjaga kos dan CCTV)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `bobot` double NOT NULL,
  `label` enum('benefit','cost') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `bobot`, `label`, `created_at`, `updated_at`) VALUES
(1, 'harga_sewa', 0.25, 'cost', '2023-06-17 22:08:16', '2023-07-04 13:21:04'),
(2, 'luas_kamar', 0.2, 'benefit', '2023-06-18 17:21:05', '2023-07-04 13:27:55'),
(3, 'fasilitas', 0.2, 'benefit', '2023-06-18 17:21:24', '2023-06-18 17:21:24'),
(4, 'lokasi', 0.2, 'benefit', '2023-06-18 17:21:43', '2023-06-18 17:21:43'),
(5, 'keamanan', 0.15, 'benefit', '2023-06-18 17:22:10', '2023-06-18 17:22:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `lokasi`) VALUES
(1, 'Dekat dengan minimarket'),
(2, 'Dekat dengan minimarket dan tempat makan'),
(3, 'Dekat minimarket, tempat makan, dan kampus'),
(4, 'Dekat minimarket, tempat makan, kampus, dan tempat hiburan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_03_183841_create_kriterias_table', 1);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `normalisasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `normalisasi` (
`id_kos` int(11)
,`nama_kos` varchar(45)
,`harga_sewa` double
,`luas_kamar` double
,`fasilitas` decimal(14,4)
,`lokasi` decimal(14,4)
,`keamanan` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `pengkali`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `pengkali` (
`id_kos` int(11)
,`nama_kos` varchar(45)
,`harga_sewa` double
,`luas_kamar` double
,`fasilitas` double
,`lokasi` double
,`keamanan` double
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kartika Deviani', 'kartikadevianii@gmail.com', NULL, '$2y$10$FniqtAtWb5T6.T32pMLYe.BsW12nAQ5YwJSxtkg.ZbubLV.U8BJvi', NULL, '2023-06-17 19:07:50', '2023-06-17 19:07:50');

-- --------------------------------------------------------

--
-- Struktur untuk view `alternatif`
--
DROP TABLE IF EXISTS `alternatif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `alternatif`  AS SELECT `alt`.`id_kos` AS `id_kos`, `alt`.`nama_kos` AS `nama_kos`, `alt`.`harga_sewa` AS `harga_sewa`, `alt`.`luas_kamar` AS `luas_kamar`, `alt`.`fasilitas_id_fasilitas` AS `fasilitas`, `alt`.`lokasi_id_lokasi` AS `lokasi`, `alt`.`keamanan_id_keamanan` AS `keamanan` FROM `data_kos` AS `alt` GROUP BY `alt`.`id_kos``id_kos`  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil`
--
DROP TABLE IF EXISTS `hasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `hasil`  AS SELECT `kl`.`id_kos` AS `id_kos`, `kl`.`nama_kos` AS `nama_kos`, `kl`.`harga_sewa`+ `kl`.`luas_kamar` + `kl`.`fasilitas` + `kl`.`lokasi` + `kl`.`keamanan` AS `hasil` FROM `pengkali` AS `kl``kl`  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil_akhir`
--
DROP TABLE IF EXISTS `hasil_akhir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `hasil_akhir`  AS SELECT `kl`.`nama_kos` AS `nama_kos`, `kl`.`harga_sewa`+ `kl`.`luas_kamar` + `kl`.`fasilitas` + `kl`.`lokasi` + `kl`.`keamanan` AS `hasil` FROM `pengkali` AS `kl` ORDER BY `kl`.`harga_sewa`+ `kl`.`luas_kamar` + `kl`.`fasilitas` + `kl`.`lokasi` + `kl`.`keamanan` AS `DESCdesc` ASC  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `kategori`
--
DROP TABLE IF EXISTS `kategori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `kategori`  AS SELECT `ctg`.`id` AS `id`, `ctg`.`nama_kriteria` AS `nama_kriteria`, `ctg`.`bobot` AS `bobot`, `ctg`.`label` AS `label` FROM `kriteria` AS `ctg` GROUP BY `ctg`.`id``id`  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `normalisasi`
--
DROP TABLE IF EXISTS `normalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `normalisasi`  AS SELECT `alt`.`id_kos` AS `id_kos`, `alt`.`nama_kos` AS `nama_kos`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 1) = 'benefit',`alt`.`harga_sewa` / (select max(`alt2`.`harga_sewa`) from `alternatif` `alt2`),(select min(`alt2`.`harga_sewa`) from `alternatif` `alt2`) / `alt`.`harga_sewa`) AS `harga_sewa`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 2) = 'benefit',`alt`.`luas_kamar` / (select max(`alt2`.`luas_kamar`) from `alternatif` `alt2`),(select min(`alt2`.`luas_kamar`) from `alternatif` `alt2`) / `alt`.`luas_kamar`) AS `luas_kamar`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 3) = 'benefit',`alt`.`fasilitas` / (select max(`alt2`.`fasilitas`) from `alternatif` `alt2`),(select min(`alt2`.`fasilitas`) from `alternatif` `alt2`) / `alt`.`fasilitas`) AS `fasilitas`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 4) = 'benefit',`alt`.`lokasi` / (select max(`alt2`.`lokasi`) from `alternatif` `alt2`),(select min(`alt2`.`lokasi`) from `alternatif` `alt2`) / `alt`.`lokasi`) AS `lokasi`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 5) = 'benefit',`alt`.`keamanan` / (select max(`alt2`.`keamanan`) from `alternatif` `alt2`),(select min(`alt2`.`keamanan`) from `alternatif` `alt2`) / `alt`.`keamanan`) AS `keamanan` FROM `alternatif` AS `alt` GROUP BY `alt`.`id_kos``id_kos`  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `pengkali`
--
DROP TABLE IF EXISTS `pengkali`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `pengkali`  AS SELECT `nor`.`id_kos` AS `id_kos`, `nor`.`nama_kos` AS `nama_kos`, `nor`.`harga_sewa`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 1) AS `harga_sewa`, `nor`.`luas_kamar`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 2) AS `luas_kamar`, `nor`.`fasilitas`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 3) AS `fasilitas`, `nor`.`lokasi`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 4) AS `lokasi`, `nor`.`keamanan`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 5) AS `keamanan` FROM `normalisasi` AS `nor``nor`  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kos`
--
ALTER TABLE `data_kos`
  ADD PRIMARY KEY (`id_kos`),
  ADD KEY `data_kos_fasilitas_fk` (`fasilitas_id_fasilitas`),
  ADD KEY `data_kos_jenis_kos_fk` (`jenis_kos_id_jenis`),
  ADD KEY `data_kos_keamanan_fk` (`keamanan_id_keamanan`),
  ADD KEY `data_kos_lokasi_fk` (`lokasi_id_lokasi`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `jenis_kos`
--
ALTER TABLE `jenis_kos`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `keamanan`
--
ALTER TABLE `keamanan`
  ADD PRIMARY KEY (`id_keamanan`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kos`
--
ALTER TABLE `data_kos`
  MODIFY `id_kos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_kos`
--
ALTER TABLE `data_kos`
  ADD CONSTRAINT `data_kos_fasilitas_fk` FOREIGN KEY (`fasilitas_id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`),
  ADD CONSTRAINT `data_kos_jenis_kos_fk` FOREIGN KEY (`jenis_kos_id_jenis`) REFERENCES `jenis_kos` (`id_jenis`),
  ADD CONSTRAINT `data_kos_keamanan_fk` FOREIGN KEY (`keamanan_id_keamanan`) REFERENCES `keamanan` (`id_keamanan`),
  ADD CONSTRAINT `data_kos_lokasi_fk` FOREIGN KEY (`lokasi_id_lokasi`) REFERENCES `lokasi` (`id_lokasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
