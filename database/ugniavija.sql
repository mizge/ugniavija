-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugniavija`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Barbė Auksaplaukė', 'Barbė Auksaplaukė gyvena senoje, miškų apsuptoje pilyje kartu su piktąja ragana Gotele. Ilgakasė mėgsta piešti ir svajoti apie savo šeimą, kurios niekada nematė, ir kuri, pasak raganos, ją seniai apleido. Nors turi draugus drakoną ir triušiuką, Auksaplaukės gyvenimas pilyje tikrai neprimena pasakos, su ja elgiamasi kaip su verge. Tačiau vieną dieną viskas pasikeis, kai ji ras slaptus laiptus, vedančius į mažą kambarėlį. O jame – nuostabų šepetį su graviruotais jos tėčio ir mamos žodžiais. Dar toliau Auksaplaukė pastebės slaptą tunelį, vedantį į mažą karalystę, kurioje ji sutiks princą Stefaną ir įsimylės jį. Bet ar jai pavyks sužinoti daugiau apie savo tėvus? Ar ragana neparsives jos atgal į vergovę?', '2021-12-01 12:19:35', '2021-12-01 12:19:35'),
(2, 'Barbė princesė ir elgeta', 'Istorijoje vaikams „Barbė princesė ir elgeta“ vienu metu gimsta dvi visiškai vienodos mergaitės, skiriasi tik jų plaukų spalva. Tačiau viena jų, Analiza, gimsta karališkoje šeimoje, o kitai, Erikai, tenka vargšės dalia. Netikėtai merginos susitinka ir nusprendžia apsikeisti vietomis. Viena bėga nuo priverstinių vedybų, kita – nuo piktos ir godžios viršininkės. Susikeitusios merginos patirs daug nuotykių ir pavojų – viena merginų pagrobiama piktojo Premingerio, svajojančio vesti gražuolę. Filmuke „Barbė princesė ir elgeta“ vaikai pamatys, ar pavyks abiem merginom nugalėti visas kliūtis ir pasiekti išsvajotą laimę.', '2021-12-01 12:23:17', '2021-12-01 12:23:17'),
(3, 'Barbė salos princesė', 'Šiame muzikiniame filme, gražioji Barbė yra Rosela. Kai sudužo laivas, Rosela liko įkalinta ir užaugo saloje, kur ja rūpinasi budrios, jos mėgstamų draugų, gyvūnų akys. Princo Antonio atvykimas priverčia Roselą ir jos žvėrelius, atvykti į civilizaciją, bei išgelbėti karalystę, atskleidžiant piktą sąmokslą.', '2021-12-01 12:24:36', '2021-12-01 12:24:36'),
(5, 'Barbė madų šalyje', 'Barbės šiuolaikiniai nuotykiai nusikelia į Paryžių, kur ji susiranda naujų draugų ir atranda stebuklingus veikėjus. Kurie atranda savo tikruosius dizainerių talentus ir panaudoja savo vidinį linksmumą išgelbėti dienai.', '2021-12-01 12:26:42', '2021-12-01 12:26:42');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_23_154141_create_films_table', 1),
(5, '2021_10_25_181610_create_tickets_table', 1),
(6, '2021_10_25_181804_create_seanses_table', 1);

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
-- Table structure for table `seanses`
--

CREATE TABLE `seanses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `price` double NOT NULL,
  `free_amount` int(11) NOT NULL,
  `bought_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seanses`
--

INSERT INTO `seanses` (`id`, `film_id`, `date`, `price`, `free_amount`, `bought_amount`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-12-02 16:20:00', 2.99, 95, 5, '2021-12-01 12:28:15', '2021-12-01 13:35:51'),
(2, 2, '2021-12-24 17:30:00', 7.49, 50, 0, '2021-12-01 12:28:56', '2021-12-01 12:39:29'),
(3, 3, '2021-12-13 10:35:00', 5.1, 69, 0, '2021-12-01 12:29:30', '2021-12-01 12:29:30'),
(4, 5, '2021-11-01 12:30:00', 4, 89, 0, '2021-12-01 12:30:07', '2021-12-01 12:30:07'),
(5, 5, '2021-12-15 13:45:00', 5.5, 79, 0, '2021-12-01 12:30:42', '2021-12-01 12:30:42'),
(6, 2, '2021-12-13 16:32:00', 4.04, 0, 150, '2021-12-01 12:32:40', '2021-12-01 12:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `seanse_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `seanse_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 2, '2021-12-01 12:35:00', '2021-12-01 12:35:00'),
(3, 3, 6, 150, '2021-12-01 12:35:58', '2021-12-01 12:35:58'),
(4, 4, 1, 3, '2021-12-01 13:35:51', '2021-12-01 13:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isDirector` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `isAdmin`, `isDirector`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'direktore', 'ugne@ugniavija.com', '$2y$10$L2EIg50SCFdCD8YT8sq/l.2IbdHl.wYf9jgWRbCqET3cahTrmt/j.', 0, 1, NULL, '2021-12-01 12:08:49', '2021-12-01 12:08:49'),
(2, 'admin', 'admin@admin.com', '$2y$10$sQ/lglRa1sGBfsduHHN6RuvOx6ESPzN8XKyoR.YwUunaXsFkZuik6', 1, 0, NULL, '2021-12-01 12:10:05', '2021-12-01 12:10:05'),
(3, 'mango', 'davidlife52@demo.com', '$2y$10$DXn2MGYRy8EYtVLkpUASIOHNWa8Lw/vmWzoEgOm6c2LmBRAQn8/DS', 0, 0, NULL, '2021-12-01 12:34:34', '2021-12-01 12:34:34'),
(4, 'evilGuy', 'mad@lab.com', '$2y$10$FDwsXIDAwSHQPkFsKu2XMettv4y3rn8c3vUOuzE2S76f.PRp/ZSBi', 0, 0, NULL, '2021-12-01 13:35:22', '2021-12-01 13:35:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `seanses`
--
ALTER TABLE `seanses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seanses`
--
ALTER TABLE `seanses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
