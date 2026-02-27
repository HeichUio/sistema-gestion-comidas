-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2026 a las 06:20:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fonda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2026_02_24_183534_create_tipo_comidas_table', 1),
(2, '2026_02_24_183708_create_comidas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comidas`
--

CREATE TABLE `tb_comidas` (
  `id_comida` bigint(20) UNSIGNED NOT NULL,
  `nombre_comida` varchar(100) NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `detalle_comida` text NOT NULL,
  `id_tipo_comida` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_comidas`
--

INSERT INTO `tb_comidas` (`id_comida`, `nombre_comida`, `costo`, `detalle_comida`, `id_tipo_comida`, `created_at`, `updated_at`) VALUES
(1, 'Manantial', 35.00, 'limonada con mora azul', 1, '2026-02-27 10:00:08', '2026-02-27 10:00:08'),
(2, 'Enchiladas Suizas', 45.00, 'Enchiladas con salsa verde y queso oaxaca', 3, '2026-02-27 10:09:27', '2026-02-27 10:09:27'),
(4, 'Pastel de chocolate', 90.00, 'Rebanada de pastel sabor chocolate', 2, '2026-02-27 10:13:15', '2026-02-27 10:13:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_comidas`
--

CREATE TABLE `tb_tipo_comidas` (
  `id_tipo_comida` bigint(20) UNSIGNED NOT NULL,
  `nombre_categoria` enum('Bebidas','Postres','Platillos Fuertes','Entradas','Sopas') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_tipo_comidas`
--

INSERT INTO `tb_tipo_comidas` (`id_tipo_comida`, `nombre_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Bebidas', NULL, NULL),
(2, 'Postres', NULL, NULL),
(3, 'Platillos Fuertes', NULL, NULL),
(4, 'Entradas', NULL, NULL),
(5, 'Sopas', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_comidas`
--
ALTER TABLE `tb_comidas`
  ADD PRIMARY KEY (`id_comida`),
  ADD KEY `tb_comidas_id_tipo_comida_foreign` (`id_tipo_comida`);

--
-- Indices de la tabla `tb_tipo_comidas`
--
ALTER TABLE `tb_tipo_comidas`
  ADD PRIMARY KEY (`id_tipo_comida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_comidas`
--
ALTER TABLE `tb_comidas`
  MODIFY `id_comida` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_tipo_comidas`
--
ALTER TABLE `tb_tipo_comidas`
  MODIFY `id_tipo_comida` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_comidas`
--
ALTER TABLE `tb_comidas`
  ADD CONSTRAINT `tb_comidas_id_tipo_comida_foreign` FOREIGN KEY (`id_tipo_comida`) REFERENCES `tb_tipo_comidas` (`id_tipo_comida`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
