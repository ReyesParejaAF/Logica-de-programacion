-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2024 a las 23:23:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db-pruebas-citaspet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `nombre_propietario` varchar(100) NOT NULL,
  `numero_contacto` varchar(20) NOT NULL,
  `numero_contacto_adicional` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `nombre_mascota` varchar(100) DEFAULT NULL,
  `raza_mascota` varchar(50) NOT NULL,
  `fecha_cita` date NOT NULL,
  `certificados_medicos` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre_propietario`, `numero_contacto`, `numero_contacto_adicional`, `correo`, `nombre_mascota`, `raza_mascota`, `fecha_cita`, `certificados_medicos`, `created_at`) VALUES
(1, 'Camelo Rios', '3434534354', '3453453453', 'camelo@gamil.com', 'ruso', 'chandoso', '2024-06-21', 'Screenshot_1.png', '2024-06-13 17:48:42'),
(2, 'fdfdgfd', '252434', '3453453453', 'dfefewf@gmail.com', 'rfef', 'fseess', '2024-06-27', 'e6be15fc-a5f8-4206-ad99-6e1d3699a447.jfif', '2024-06-13 19:08:24'),
(3, 'hfbffgfgb', '344343453453', '344535434', 'fsfdfsdds@gmail.ocm', 'frree', 'htyhtyt', '2024-07-06', NULL, '2024-06-13 19:12:50'),
(4, 'hfbffgfgb', '344343453453', '3453453453', 'dfefewf@gmail.com', 'rfef', 'htyhtyt', '2024-07-03', NULL, '2024-06-13 19:16:59'),
(12, 'Camelo Rios', '3434534354', '55555555', 'camelo@gamil.com', 'chandas', 'canchoso', '2024-06-28', NULL, '2024-06-13 21:21:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
