-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2021 pada 17.31
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fas_tes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `categories_id`, `title`, `slug`, `short_description`, `content`, `image`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'molestiae', 'molestiae', 'Repellat voluptatem recusandae dolorem quam odio officia asperiores architecto.', 'Aut soluta ducimus culpa ipsa. Blanditiis quaerat autem iure distinctio dolor voluptate quo. Odio consequatur libero fuga enim. Quaerat adipisci velit quibusdam optio.', '61c29274d176e135f9a9dfa5024d4d10.png', '4a6ef0c09d66e43d3ab7d09074ca01e6.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(2, 2, 'facilis', 'facilis', 'Dolor maxime dolor vel delectus molestias voluptatem.', 'Et iure consequatur minima voluptas ea vel. Aut perspiciatis eaque illum. Quibusdam sunt praesentium deleniti nulla.', '4f83a7b36cc227b0962ef99bb7907bb1.png', '668ded8dbc4444cf898f1407dfca5135.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(3, 3, 'dolorum', 'dolorum', 'Est nulla repellendus et eius adipisci facilis.', 'Rem molestias voluptas illo. Omnis aliquam non sunt deleniti ipsum quia tempora. Atque placeat et deleniti quia. Voluptatem molestiae cupiditate sed.', '686b6abd2b794486d027163e58524471.png', '07b08716b3d85777a017b629790eba19.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(4, 4, 'sunt', 'sunt', 'Quos fugit laborum quis alias est voluptatibus aut.', 'Velit totam vel dolor et. Quam qui at dolorum omnis sunt aperiam quasi. Eum itaque in corporis architecto debitis.', '172e58ef3cd66ac0cf0c5fc3c638de89.png', '75abc02c532e27f961bac61fbeec2428.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(5, 5, 'accusantium', 'accusantium', 'Dolor harum at soluta velit voluptates qui similique quas.', 'Eum voluptatum autem eos magnam laborum rem iusto inventore. Aut iste officia repellat minus quia illum est. Aut sed omnis qui id eveniet sint delectus. Odit officiis blanditiis ea esse nemo officiis. Expedita et dolores veritatis officiis.', 'db53b9f16578de718e244463d07173b1.png', '2af0089eb5949a708b54ae79c306069d.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(6, 6, 'ea', 'ea', 'Iure incidunt tempore voluptatem sunt minus.', 'Aut est velit in soluta hic voluptas. Assumenda aperiam reiciendis corrupti et. Et dolorem quas eius id nulla dolores. Dicta vero cumque alias sapiente blanditiis perspiciatis.', '14ab36d56995be145c59204f4337e7e9.png', 'c4ee494f69ff9aa417db654820903aa5.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(7, 7, 'recusandae', 'recusandae', 'Ut repellendus illum rerum dolore.', 'Aspernatur sunt necessitatibus libero a. Quam labore asperiores velit consequatur rem dicta et. Voluptate cumque voluptatum doloremque voluptatem.', '84551ae119d19d51286d9e181f884a4a.png', '019f1ba34523cb292dee74bffa070c6a.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(8, 8, 'voluptatem', 'voluptatem', 'Facere beatae et sapiente qui at ea.', 'Corrupti ratione dolor maiores exercitationem officia aut. Aut possimus est mollitia autem ex voluptatem. Distinctio voluptatum quia magnam optio et odio quibusdam.', 'f55a0b42ed4f8f102b888ffc2501aafb.png', '4b4b6cfb71836d84b296001adb20507b.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(9, 9, 'debitis', 'debitis', 'Et quasi temporibus dignissimos assumenda.', 'Sapiente quia magni ipsum qui expedita est incidunt. Voluptatem corporis nobis quo ab impedit aut maiores. Vel sed amet dolorem tenetur. Aut molestiae fugiat nulla sed eum minima.', '1e385501cb552a7cde5dd79f85c69de1.png', '7a869c961de0a1a94f7e680265aef8bf.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(10, 10, 'ut', 'ut', 'Est maiores recusandae veniam voluptatem quas.', 'Quia at suscipit nisi veritatis doloremque qui eveniet. Ut voluptas est odio doloremque sed. Quis distinctio quia voluptas sed voluptate hic quo. Ad officia libero molestiae mollitia eius fugiat.', '64f22c7a59970092c2322351147de03e.png', '0e20d27ac63a9bd9952350b4f7f3e785.png', '2021-02-12 07:41:36', '2021-02-12 07:41:36', NULL),
(11, 1, 'dsdq 1wdas jkbk', 'dsdq-1wdas-jkbk', 'sadqw jd uuhf bjhsbfqi h', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1613141297.jpg', '1613141297.jpg', '2021-02-12 07:48:17', '2021-02-12 07:48:17', NULL),
(14, 1, 'sdqwdqa sd', 'sdqwdqa-sd', 'sdqw sad qdqd fwf wfv dsv', '<p>af wfsdf qef wfjwopfjpoqe jweon wlkn wojfpowejfpow jfow ;kwjfp]owek gpowen flwen le ewf</p>', '1613141959.jpg', '1613141959.jpg', '2021-02-12 07:59:19', '2021-02-12 07:59:19', NULL),
(15, 1, 'qwdqwdqwsad asdds adsadd', 'qwdqwdqwsad-asdds-adsadd', 'dqwdqwd qwdy98as', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', '1613142029.jpg', '1613142029.jpg', '2021-02-12 08:00:29', '2021-02-12 08:00:29', NULL),
(16, 1, 'dqwd1 1dasdqw', 'dqwd1-1dasdqw', 'fsadqwd qdq qd', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', '1613142080.jpg', '1613142080.jpg', '2021-02-12 08:01:20', '2021-02-12 08:03:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asperiores', 'asperiores', '2021-02-12 07:41:12', '2021-02-12 07:41:12', NULL),
(2, 'reiciendis', 'reiciendis', '2021-02-12 07:41:14', '2021-02-12 07:41:14', NULL),
(3, 'ratione', 'ratione', '2021-02-12 07:41:17', '2021-02-12 07:41:17', NULL),
(4, 'culpa', 'culpa', '2021-02-12 07:41:19', '2021-02-12 07:41:19', NULL),
(5, 'debitis', 'debitis', '2021-02-12 07:41:21', '2021-02-12 07:41:21', NULL),
(6, 'error', 'error', '2021-02-12 07:41:23', '2021-02-12 07:41:23', NULL),
(7, 'molestiae', 'molestiae', '2021-02-12 07:41:25', '2021-02-12 07:41:25', NULL),
(8, 'iusto', 'iusto', '2021-02-12 07:41:28', '2021-02-12 07:41:28', NULL),
(9, 'deleniti', 'deleniti', '2021-02-12 07:41:30', '2021-02-12 07:41:30', NULL),
(10, 'placeat', 'placeat', '2021-02-12 07:41:32', '2021-02-12 07:41:32', NULL),
(11, 'test', 'test', '2021-02-12 07:59:32', '2021-02-12 07:59:41', '2021-02-12 07:59:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2021_02_07_114645_create_categories_table', 1),
(16, '2021_02_07_120237_create_article_table', 1),
(17, '2021_02_11_144907_google_id_column', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'zordawm stretwear', 'zordawm.stretwear@gmail.com', NULL, 'eyJpdiI6Im1NVlBzZzc3THlabDBTeWZTdG9td2c9PSIsInZhbHVlIjoiT1puN1hJT0k0ZTdjbFFobU4wc1pRSlJ5eGNQNzVkeEYzTC9TQWZINnpUaz0iLCJtYWMiOiJlOGRhODM5NDg0MDQ5Yzk0NjRkY2VkOWRkMGNkNTQxZjAwMWUwNjM5YTgwMDQ2ZmYyOTVlNzljZTAxNTk5ZWVmIn0=', NULL, '2021-02-12 07:38:31', '2021-02-12 07:38:31', '109311571514232730183'),
(2, 'Cahyo Bayu Sahid Pratomo', 'c.bayusahidp@gmail.com', NULL, '$2y$10$p1pSxzYxiNS5jKh7Z6EW5uMe1PAP2qF5Vkjw73C7hTPG4kEZsDB1y', NULL, '2021-02-12 08:27:11', '2021-02-12 08:27:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_title_unique` (`title`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
