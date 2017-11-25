-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2017 a las 01:46:29
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `factumaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `nit`, `direccion`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Papeleria Master', '9008877', 'Carrera 15 N 78', '232323232', 'info@papeleriamaster.com', '2017-07-13 05:25:35', '2017-07-13 05:25:35'),
(2, 'Heladeria Master', '454545', 'Cra 15', '2323232', 'heladeria@master.com', '2017-07-13 05:27:08', '2017-07-13 05:27:08'),
(4, 'Servicios Master', '560506505', '7801 NW 37th Street Doral', '34343', 'ventas@servicios.com', '2017-07-13 05:34:02', '2017-07-13 05:34:02'),
(5, 'Papeleria Master', '4545454', 'Cra 15', '3055920839', 'info@masterweb.la', '2017-07-27 05:26:07', '2017-07-27 05:26:07'),
(6, 'Cliente X', '9008877222', 'calle 123', '343434', 'info2@masterweb.la', '2017-07-27 05:29:23', '2017-07-27 05:29:23'),
(7, 'Panaderia Master', '1233422', 'Cra 17 No 77 - 56', '4545445', 'info2@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(8, 'Zapateria XY', '8658475', 'Cra 18 No 77 - 57', '2325344', 'info3@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(9, 'Papeleria ZZ', '84678545', 'Cra 19 No 77 - 58', '9876678', 'info4@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(10, 'Supermercado 123', '6677445', 'Cra 17 No 77 - 57', '876467', 'info5@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(11, 'Supermercado 124', '323655', 'Cra 18 No 77 - 58', '4476546', 'info6@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(12, 'Supermercado 125', '324755', 'Cra 19 No 77 - 59', '5765787', 'info7@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(13, 'Supermercado 126', '27325855', 'Cra 17 No 77 - 58', '6655543', 'info8@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(14, 'Supermercado 127', '5326955', 'Cra 18 No 77 - 59', '7864890', 'info9@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(15, 'Zapateria XY', '15286099', 'Cra 19 No 77 - 60', '1974599', 'info10@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(16, 'Zapateria 123', '17716221', 'Cra 17 No 77 - 59', '21159018', 'info11@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(17, 'Zapateria 345', '20146343', 'Cra 18 No 77 - 60', '132051', 'info12@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(18, 'Zapateria 567', '22576465', 'Cra 19 No 77 - 61', '148134', 'info13@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(19, 'Zapateria 789', '25006587', 'Cra 17 No 77 - 60', '164369', 'info14@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(20, 'Zapateria 1011', '27436709', 'Cra 18 No 77 - 61', '182521', 'info15@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(21, 'Papeleria 123', '29866831', 'Cra 19 No 77 - 62', '196610', 'info16@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(22, 'Papeleria 234', '32296953', 'Cra 17 No 77 - 61', '2128368', 'info17@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(23, 'Papeleria 345', '34727075', 'Cra 18 No 77 - 62', '228992', 'info18@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18'),
(24, 'Papeleria 456', '37157197', 'Cra 19 No 77 - 63', '245148', 'info19@masterweb.la', '2017-09-07 05:39:18', '2017-09-07 05:39:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosfacturas`
--

CREATE TABLE `estadosfacturas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estadosfacturas`
--

INSERT INTO `estadosfacturas` (`id`, `nombre`) VALUES
(1, 'Pendiente'),
(2, 'Pagada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` int(11) NOT NULL,
  `detalles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `archivo` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idcliente` int(10) UNSIGNED NOT NULL,
  `idforma` int(10) UNSIGNED NOT NULL,
  `idestado` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `numero`, `detalles`, `valor`, `archivo`, `idcliente`, `idforma`, `idestado`, `created_at`, `updated_at`) VALUES
(1, 1016, '<ul>\r\n	<li>Factura de venta de Servicios</li>\r\n	<li>Servicios de <strong>Desarrollo</strong></li>\r\n	<li>Servicios de Marketing</li>\r\n</ul>', 127, 'factura-1016-20170720-002545.jpg', 4, 2, 2, '2017-07-20 05:25:45', '2017-07-27 04:48:57'),
(2, 1018, '<p>Descripcion</p>', 1018, 'factura-1018-20170810-004636.jpg', 1, 2, 1, '2017-08-10 05:46:36', '2017-08-10 05:46:36'),
(3, 1080, '<p>Descripcion</p>', 150, 'factura-1080-20170812-181843.png', 1, 2, 2, '2017-08-12 23:18:44', '2017-08-12 23:18:44'),
(4, 9991, '<p>Venta de frutas</p>', 127000, 'factura-9991-20170818-005225.jpg', 2, 1, 2, '2017-08-18 05:52:25', '2017-08-18 05:52:25'),
(5, 6661, '<p>Venta de cucharas</p>', 12345, 'factura-6661-20170818-010127.jpg', 6, 1, 2, '2017-08-18 06:01:27', '2017-08-18 06:01:27'),
(6, 6661, '<p>Venta de cucharas</p>', 12345, 'factura-6661-20170818-010207.jpg', 6, 1, 2, '2017-08-18 06:02:07', '2017-08-18 06:02:07'),
(7, 7778777, '<p>Venta de Servicios</p>', 127, 'factura-7778777-20170823-234547.jpg', 1, 1, 2, '2017-08-24 04:45:48', '2017-08-24 04:45:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaspago`
--

CREATE TABLE `formaspago` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formaspago`
--

INSERT INTO `formaspago` (`id`, `nombre`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta');

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
(1, '2013_06_28_234940_perfilesmigration', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_06_28_235101_clientesmigration', 1),
(5, '2017_06_28_235248_formaspagomigration', 1),
(6, '2017_06_28_235324_estadosfacturamigration', 1),
(7, '2017_07_28_235208_facturasmigration', 1),
(8, '2017_09_27_231627_productos_migration', 2),
(9, '2017_09_28_004759_pedidos_migration', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('info@masterweb.la', '$2y$10$n4J4/Y6pdAlxfQGIPXIlyegV14pwyuBS09HqGaSdgWj4rEsIQtJRm', '2017-09-21 05:02:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `numero`, `idproducto`, `cantidad`, `precio`, `created_at`, `updated_at`) VALUES
(1, '20170928-010338', 2, 1, 300, '2017-09-28 06:03:38', '2017-09-28 06:03:38'),
(2, '20170928-010338', 4, 2, 650, '2017-09-28 06:03:38', '2017-09-28 06:03:38'),
(3, '20170928-010605', 1, 12, 500, '2017-09-28 06:06:05', '2017-09-28 06:06:05'),
(4, '20170928-010605', 3, 6, 270, '2017-09-28 06:06:06', '2017-09-28 06:06:06'),
(5, '20170928-010605', 4, 4, 650, '2017-09-28 06:06:06', '2017-09-28 06:06:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Operador'),
(3, 'Asistente'),
(4, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 'Mandarina', 500, 40, NULL, NULL),
(2, 'Manzanas', 300, 30, NULL, NULL),
(3, 'Banano', 270, 45, NULL, NULL),
(4, 'Durazno', 650, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idperfil` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `idperfil`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mauricio Rodriguez', 'info@masterweb.la', '$2y$10$xSi73OefBrCTR7w52UHz5.r658s2QSMsc2Tjoo86YTzEwRv2eUmuy', 1, 'V8SwAemLNDqG1UhiXNIQyrlUKmbq5rODYYtOapBlWP0tAbXmWv3DRlZX9JzL', '2017-07-27 05:08:06', '2017-09-21 05:07:23'),
(2, 'Juliana', 'julianarojas1016@gmail.com', '$2y$10$dosEVnWpDz7E1wRqboZO6.9pZOar/xOso63BFxl5Q37KabZsCMaRG', 3, 'Hd99F0XTzeNSskNeuOe2s6NFEnE17XBkHh2j7LPzI3N9jMotHw81nelLqVAI', '2017-07-27 05:13:38', '2017-07-27 05:13:38'),
(4, 'Mauricio 3 Rodriguez', 'mauricio.rodriguez1016@gmail.com', '$2y$10$g4AJsIiLQuGNySv2byMkr.K1HYg.tH/Kyww6yB4cJR.9cKlR87c6O', 3, 'ZryUukQuCpoKK8uOsQzhpZdepqNNBU0fSPGy7itsVdx00Tt6z4ZnDRRQ6SVk', '2017-08-24 05:09:01', '2017-08-24 05:09:01'),
(5, 'Alicia', 'alicia@gmail.com', '$2y$10$NFJGBfpRKs./C2F4Qd9ABO6NCw.gWFk13qIPxYO2iN7ZTUiwTmqlS', 3, 'neDWS4ry42zmPAyjCeXB7dlUPAevyoG5RpFGHKNEizaDEmNIbDJLLsa2RcUE', '2017-10-05 05:21:12', '2017-10-05 05:21:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadosfacturas`
--
ALTER TABLE `estadosfacturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facturas_idcliente_foreign` (`idcliente`),
  ADD KEY `facturas_idforma_foreign` (`idforma`),
  ADD KEY `facturas_idestado_foreign` (`idestado`);

--
-- Indices de la tabla `formaspago`
--
ALTER TABLE `formaspago`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_idperfil_foreign` (`idperfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `estadosfacturas`
--
ALTER TABLE `estadosfacturas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `formaspago`
--
ALTER TABLE `formaspago`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_idcliente_foreign` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `facturas_idestado_foreign` FOREIGN KEY (`idestado`) REFERENCES `estadosfacturas` (`id`),
  ADD CONSTRAINT `facturas_idforma_foreign` FOREIGN KEY (`idforma`) REFERENCES `formaspago` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_idperfil_foreign` FOREIGN KEY (`idperfil`) REFERENCES `perfiles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
