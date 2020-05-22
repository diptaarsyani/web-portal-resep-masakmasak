-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 02:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masakmasak`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_10_000000_create_users_table', 1),
(2, '2020_05_10_100000_create_password_resets_table', 1),
(3, '2020_05_12_102827_create_recipe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tips` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `subject`, `recipe`, `tips`, `category`, `image`, `author_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Ayam Panggang Urap', 'Ayam Kampung, Gula Jawa, Santan, Bawang Putih, Bawang Merah, Merica, Kemiri, Ketumbar, Cabai, ', 'Ayam di potong2, cuci hingga bersih\r\n\r\nHaluskan bumbu ayam : bawang merah, bawang putih, cabe rawit, cabe merah, kemiri, kencur, daun jeruk, gula, garam.\r\n\r\nTumis bumbu halus, masukkan ayam ke dalam tumisan bumbu tambahkan air 2 gelas, biarkan sampai matang, dan bumbu meresap\r\n\r\nPanggang ayam\r\n\r\nPotong sayuran dan cuci bersih, dan direbus.\r\n\r\nHaluskan bumbu urap : bawang putih, cabe rawit, cabe merah, kencur, daun jeruk, laos, terasi, gula, garam.\r\n\r\nTumis bumbu halus, masukkan parutan kelapa ke dalam bumbu, dan di sangrai.\r\n\r\nCampurkan parutan kelapa dengan sayur matang\r\n', NULL, 'Breakfast', 'photo.jpg', 1, '2020-05-19 22:48:52', '2020-05-20 22:02:26', NULL),
(3, 'Rawon Setan', 'Daging, Kluwak, Serai, Daun Jeruk, Daun Bawang, Laos', 'Buka biji keluwak, keluarkan isinya dan rendam dengan air panas, sisihkah. Rebus daging sapi bersama dengan daun sereh, daun jeruk dan laos sampai empuk. Haluskan semua bumbu halus beserta keluwak yang telah direndam air panas. Tumis bumbu halus sampai harum dan bumbu berwarna hitam pekat. Kalau masih berwarna coklat berarti masih belum matang. Rebus 1 liter air dan tambahkan sisa kaldu rebusan daging hingga mendidih, masukkan tumisan daging. Rebus sampai mendidih.Rawon siap dihidangkan', NULL, 'Breakfast', 'resep-rawon-daging-780x440.jpg', 1, '2020-05-20 00:04:45', '2020-05-20 00:04:45', NULL),
(4, 'Nasi goreng spesial', 'nasi, telur, kecap, merica, garam, bawang goreng, daun bawang', 'Goreng 2 butir telur ayam kemudian tiriskan.\r\n\r\nGoreng 1 butir telur (orak arik) untuk campuran nasi goreng. Tiriskan.\r\n\r\nTumis bumbu halus sampai harum. Masukkan daun bawang. Aduk. Lalu tambahkan garam, kecap, penyedap rasa, merica secukupnya.\r\n\r\nMasukkan nasi putih. Aduk rata. Campur dg telur orak arik. Masak sampai tercampur rata semuanya. Koreksi rasa.\r\n\r\nTaburi bawang goreng agar lebih nikmat. Siap untuk dihidangkan.', NULL, 'Breakfast', 'nasi-goreng-spesial-780x440.jpg', 1, '2020-05-20 00:08:05', '2020-05-20 00:08:05', NULL),
(5, 'Gado gado surabaya', 'Lontong,\r\nSelada,\r\nTimun,\r\nKentang rebus,\r\nTelur rebus,\r\nWortel rebus,\r\nCambah rebus,\r\nSawi putih rebus,\r\nTahu goreng,\r\nTempe goreng', 'Sangrai bumbu halus kemudian blender. Jgn lupa kentang juga di blender sekalian dgn kacang tanah sangrainya. Untuk dimasak campur air dan bumbu lainnya.sampai mengental. cicipi rasa dulu, Isian gado2 iris sesuai selera. Kemudian taburi dgn kuah saus gado2 yg telah di buat. Jgn lupa tambahan taburan finishing', NULL, 'Breakfast', 'Resep-Gado-Gado-Padang.jpg', 1, '2020-05-20 00:08:41', '2020-05-20 21:11:08', NULL),
(6, 'Bakso Mercon', 'Tepung, Daging, Cabai, Gula, Garam, Bawang Merah, Bawang Putih', 'Haluskan 2 bawang putih 3 bawang merah cabai merah cabai rawit\r\n\r\nIris 1 siung bawang putih dan 3 siung bawang merah serta daun bawang\r\n\r\nTumis bawang merah dan bawang putih yang sudah diiris sampai agak kecoklatan kemudian masukan bumbu yang sudah dihaluskan\r\n\r\nTambahkan air, masukkan bakso hingga setengah mendidih, masukkan garam, gula, kaldu dan daun bawang\r\n\r\nTunggu hingga matang kemudian sajikan', NULL, 'Breakfast', '1f34a0f56bf6e5d666909b8731995f36.jpg', 1, '2020-05-20 00:09:26', '2020-05-20 21:54:54', NULL),
(7, 'Mie ayam', 'Mie, Ayam, Sawi Hijau, Bawang Merah, Bawang Putih, Kemiri, Daun Salam, Jahe, Lada, Garam, Gula', 'Cuci semua bahan yang mau digunakan\r\n\r\nHaluskan bawang merah,bawang putih,jahe,kemiri,ketumbar\r\n\r\nPotong kecil daging ayam yg sudah dicuci bersih\r\n\r\nTumis bumbu halus sampai harum,masukan daun salam,sereh,lengkuas,garam,lada bubuk dan kaldu buhuk,beri gula sedikit dan masukkan potongan ayam tambah kan air putih,rebus sampai matang dan empuk\r\n\r\nSambil menunggu ayam nya matang,siapkan panci untuk merebus mie,setelah mie masak tiriskan\r\n\r\nMasukan mie yg sudah dtiriskan ke dalam mangkuk dan beri kecap wijen supaya mie nya tdak lengket\r\n\r\nGanti air rebusan mie untuk merebus sawi hijau dan kuah mie ayam\r\n\r\nRebus air sampai mendidih beri kaldu bubuk,dan pisahkan dalam mangkok kecil dan beri potongan daun bawang\r\n\r\nSisanya untuk merebus sawi hijau\r\n\r\nSetelah semuanya matang tata di atas mie yang sudah disiapkan\r\n\r\nSelesai dan hidangkan jgan lupa beri bawang goreng dan daun bawang\r\n\r\nSelamat mencoba', NULL, 'Breakfast', 'images_mie_Mie_ayam_14-mie-ayam-kampung-1200x720.jpg', 1, '2020-05-20 00:09:57', '2020-05-20 21:12:05', NULL),
(8, 'Gudeg jogjakarta', 'Nangka Muda, Telur, Santan, Gula Jawa, Daun Salam, Serai', 'Cuci bersih nangka dan rebus hingga empuk dan keluar getahnya\r\n\r\nHaluskan bumbu lalu tumis lalu masukkan nangka telur rebus lalu tuang santan sedikit sedikit sampe ga berkuah\r\n\r\nCara buat krecek tinggl haluskan sambalnya lalu tumis masukkan krecek kasih santan aduk hingga matang dan tak berkuah siap disajikan dengan gudeg', NULL, 'Breakfast', 'be714561-6b24-4383-9a0e-5961a914d913.jpeg', 1, '2020-05-20 00:10:31', '2020-05-20 21:11:26', NULL),
(9, 'Ketoprak Jakarta', 'Tahu, Bihun, Tauge, Bawang Merah, Bawang Putih, Kerupuk', 'Siapkan touge dan bihun d wadah terpisah,kucuri air panas,jk bihun sdah lembut tiriskan. Jika tdk sk toge yg berasa msih mentah,buang air kmudian ulangi prosesnya.\r\n\r\nBuat lontong ny saya hanya mnggunakan magic com, masak 1 cup beras tambhkn 3glas air,cook sprt biasa.setelah matang ambil d wadah kedap udara sambil d pncet pncet biar padet,tggu agak dgin kmudian ttup rapat dn masukkan kulkas.\r\n\r\nSiapkan piring,tata tahu yg sdh d goreng, toge, bihun, jg lontong.kucuri bumbu kacang,tmbhkn kecap, bawang goreng dan krupuk.', NULL, 'Lunch', 'ketoprak-MAHI-2.jpg', 1, '2020-05-20 04:08:48', '2020-05-20 04:08:48', NULL),
(10, 'Rujak Cingur', 'Tahu, Tempe, Kacang Tanah, Bawang Putih, Cabai, Garam', 'ris tipis bawang putih lalu goreng. Siapkan bumbu yg akan di haluskan. Lalu ulek bumbu sampai halus. Tambahkan sedikit air asam dan air matang. Agar bumbu tidak sulit di ulek.Aduk rata bumbu lalu masukkan sayuran sesuai selera Masukkan tahu tempe kikil lalu aduk rata. Kemudian sajikan di piring tambahkan kerupuk.', NULL, 'Breakfast', 'resep-rujak-cingur-e1578047011101.jpg', 1, '2020-05-20 06:29:32', '2020-05-20 21:12:20', NULL),
(11, 'Nugget Ayam', 'Tepung, Ayam, Bawang, Merica', '1. Potong daging ayam\r\n2. Blender daging ayam\r\n3. Masukkan tepung\r\n4. Masukkan ke cetakan\r\n5. Diamkan dan dinginkan\r\n6. Guling ke tepung panir dan goreng', NULL, 'Breakfast', 'nugget-ayam-homemade-step-by-step-foto-resep-utama.jpg', 3, '2020-05-20 19:56:01', '2020-05-20 21:13:15', NULL),
(12, 'Ayam Geprek', 'Ayam, Telur, Tepung, Bawang Putih, Merica, Garam', 'Masukkan ayam. Tambahkan bawang putih halus, merica, dan garam. (Bisa menambahkan bumbu penyedap jika Anda sukai) Oh iya maaf, mericanya terlihat seperti ketumbar yaa. karena stok merica bubuk habis alhasil pakai merica asli dan males diulek sampai halus\r\nRemas-remas ayam, sampai bumbu tercampur rata dan teresap. Tinggalkan selama kurang lebih 2 jam (semakin lama semakin baik, agar bumbu meresap pada ayam)\r\nSetelah Anda merasa bumbu telah meresap, masukkan 1 butir telur. Kocok hingga semua permukaan ayam terlumuri telur masukkan ayam yang telah dilumuri telur kedalam tepung. Pastikan semua permukaan ayam tertutupi tepung yaa.Setelah minyak goreng panas, masukkan ayam. Sambel: masukkan bawang putih yang telah di goreng, cabe, garam. Ulek sampai halus. Tambahkan 2 sendok minyak goreng panas bekas menggoreng ayam. Geprek ayam pada sambel. Berikan daun kemangi jika Anda suka. Ayam geprek pedas siap disantap!', NULL, 'Masakan', 'ayam-geprek-pedas-ala-bensu-foto-resep-utama.jpg', 1, '2020-05-21 21:45:13', '2020-05-21 21:45:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `country`, `city`, `email`, `admin`, `password`, `avatar`, `info`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bayhaqi, Fachrul', 'Indonesia', 'Surabaya', 'fachrulbayhaqi@gmail.com', 1, '$2y$10$oEzDcwBA2vOJdusBilHWR.umFZtFt4cQGednVtj4oXdiiciEj1b22', 'Screenshot (104).png', 'cooking expert', 'YifSfSondeca3zgvIjUd36DbrTaRVK7ACYVIgAthotKIhnUJQ9z1O0NvVZZK', '2020-05-19 21:48:04', '2020-05-21 03:05:20'),
(3, 'Catarina', NULL, NULL, 'Catarina@gmail.com', 0, '$2y$10$V6OGWTFYhg1I5e.257N64.BOrOKLHDC0Aj7NAISpgzMcu6UHh8utC', NULL, NULL, 'Jq6Gt1gxvAwQfmNHoFQaGGvzNsnQ4rSeLUOAOdWUxUJnoM2tinDdJ3Vff03S', '2020-05-20 19:52:48', '2020-05-20 19:52:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
