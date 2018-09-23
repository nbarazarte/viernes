-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-09-2018 a las 15:21:50
-- Versión del servidor: 10.1.26-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guauser`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_24_035604_create_subscriptions_table', 1),
(4, '2018_08_26_214419_update_user_table', 1),
(5, '2018_09_13_060354_create_tbl_mascotas_perdidas_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mascotasPerdidas`
--

CREATE TABLE `tbl_mascotasPerdidas` (
  `id` int(10) UNSIGNED NOT NULL,
  `lng_idusuario` int(11) NOT NULL,
  `str_dueno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_mascota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_especie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_ruta_foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `str_ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_sector` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_fecha_perdida` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_estatus_mascota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'perdida',
  `str_estatus_publicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'revision',
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `provider`, `provider_id`, `avatar`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`, `remember_token`, `created_at`, `updated_at`, `customer_id`) VALUES
(1, 'ezequiel barazarte', 'ezebarazarte@gmail.com', '$2y$10$tXmOB5rLDCUK6Z1QKWcOAOXbBHnLkPY48VMHKrYe/ynkzmEhCvluG', NULL, 'google', '110534125577808178269', 'https://lh4.googleusercontent.com/-r-jRuY64hys/AAAAAAAAAAI/AAAAAAAAAP0/Of2TF8nKmts/photo.jpg?sz=50', NULL, 'Visa', '4242', NULL, 'fx7zoUjg6BBOuVa0oitzmOWy7AM915prxBI43aIreDWLEPOJV9sm92JqQtuz', '2018-09-15 10:27:19', '2018-09-15 10:27:19', 'cus_DbwO4fxwuDEqqb'),
(2, 'Neil Ezequiel Barazarte Aché', 'atrellus@gmail.com', '$2y$10$hnKPewyVtrJu/zDzKRGOw.PrIfxrVya4OLgSFa4c53NkfJQcPP5sy', NULL, 'facebook', '10217415051026898', 'https://graph.facebook.com/v3.0/10217415051026898/picture?type=normal', NULL, 'Visa', '4242', NULL, 'ky3ddZA54E5FsFiKPlvRo7qibUaweSEZJVYqutSeV2IHibvVFH5XoAWJ5P2b', '2018-09-15 10:28:35', '2018-09-15 10:28:35', 'cus_DbwQztGpU778IR'),
(3, 'hotel hippocampus', 'hippocampusclubhotel@gmail.com', '$2y$10$dvgjcNvG9lH0d7bS/9VNJ.tsNfVEOw.YD385dEMLQic3X4Wzn2sfy', NULL, 'google', '106869505826834467478', 'https://lh3.googleusercontent.com/-cXu30rvP2KE/AAAAAAAAAAI/AAAAAAAAAAc/G618fi3_bN4/photo.jpg?sz=50', NULL, NULL, NULL, NULL, 'WX3C2oeEAdMvtvc8un4euzmYTBjj2BXxIrz88MNHParq6f0eCXl3KgoOcmWF', '2018-09-17 20:57:43', '2018-09-17 20:57:43', NULL),
(4, 'maritza aché', 'maritzaache@gmail.com', '$2y$10$iq6RWrfTFneqU4.hhOSV2.ng/VrCkivEAyaJQ.1X3VA.qi54ae8ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HphAlmjo2RPKopOSTKlN8eN0vDW42byo5vSdh66WPiBKj0CsNZrR5Leu3ivl', '2018-09-17 20:58:33', '2018-09-17 20:58:33', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_mascotasPerdidas`
--
ALTER TABLE `tbl_mascotasPerdidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_mascotasPerdidas`
--
ALTER TABLE `tbl_mascotasPerdidas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
