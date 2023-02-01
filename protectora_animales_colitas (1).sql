-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2023 a las 17:33:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `protectora_animales_colitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptantes`
--

CREATE TABLE `adoptantes` (
  `id_adoptante` int(4) NOT NULL,
  `id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `adoptantes`
--

INSERT INTO `adoptantes` (`id_adoptante`, `id_usuario`) VALUES
(1, 2),
(2, 3),
(3, 4),
(9, 5),
(6, 6),
(4, 7),
(5, 8),
(7, 11),
(8, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id_mascota` int(4) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `foto_del` varchar(300) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `id_raza` int(4) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `tamaño` varchar(15) NOT NULL,
  `peso` decimal(5,3) NOT NULL,
  `esterilizado` varchar(2) NOT NULL,
  `caracter` varchar(150) DEFAULT NULL,
  `id_adoptante` int(4) DEFAULT NULL,
  `foto_tras` varchar(300) DEFAULT NULL,
  `id_protectora` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_mascota`, `nombre`, `foto_del`, `genero`, `id_raza`, `fechaNacimiento`, `tamaño`, `peso`, `esterilizado`, `caracter`, `id_adoptante`, `foto_tras`, `id_protectora`) VALUES
(1, 'Barrilete', 'img/adopcionPerros/ppp/1/foto1.jpg', 'Macho', 1, '2019-03-18', 'Mediano', '30.000', 'Si', 'Perrete con espíritu de cachorrete', NULL, 'img/adopcionPerros/ppp/1/foto1a.jpg', 1),
(2, 'Okin', 'img/adopcionPerros/ppp/2/foto2.jpg', 'Macho', 2, '2019-01-09', 'Mediano', '22.400', 'Si', 'Desborda amor por todos lados', 4, 'img/adopcionPerros/ppp/2/foto2a.jpg', 1),
(3, 'Pekas', 'img/adopcionPerros/ppp/3/foto3.jpg', 'Hembra', 3, '2018-02-10', 'Mediano', '29.000', 'Si', 'Es una perrita vital y energética', 9, 'img/adopcionPerros/ppp/3/foto3a.jpg', 1),
(4, 'Roko', 'img/adopcionPerros/ppp/4/foto4.jpg', 'Macho', 4, '2016-01-01', 'Mediano', '30.300', 'Si', 'Un perro potencialmente perfecto si es que no lo es ya', NULL, 'img/adopcionPerros/ppp/4/foto4a.jpg', 1),
(5, 'Arjun', 'img/adopcionPerros/ppp/5/foto5.jpg', 'Macho', 2, '2022-03-15', 'Mediano', '19.200', 'Si', 'Carácter de cachorro', NULL, 'img/adopcionPerros/ppp/5/foto5a.jpg', 1),
(6, 'Pankeke', 'img/adopcionPerros/ppp/6/foto6.jpg', 'Macho', 2, '2009-05-01', 'Grande', '23.400', 'Si', 'Un cachito de pan con sonrisa incluida', NULL, 'img/adopcionPerros/ppp/6/foto6a.jpg', 1),
(7, 'Nerón', 'img/adopcionPerros/ppp/7/foto7.jpg', 'Macho', 4, '2018-11-10', 'Grande', '22.500', 'Si', 'Alegre y juguetón, un amor de perro', 3, 'img/adopcionPerros/ppp/7/foto7a.jpg', 1),
(8, 'Angkor', 'img/adopcionPerros/ppp/8/foto8.jpg', 'Macho', 1, '2018-05-06', 'Mediano', '30.000', 'Si', '¡Es para comerselo!', NULL, 'img/adopcionPerros/ppp/8/foto8a.jpg', 1),
(9, 'Abis', 'img/adopcionPerros/perros/8/foto8.jpg', 'Macho', 5, '2021-03-18', 'Grande', '33.800', 'Si', 'Cachorrete alegre y sensible', 8, 'img/adopcionPerros/perros/8/foto8a.jpg', 1),
(10, 'Adelo', 'img/adopcionPerros/perros/9/foto9.jpg', 'Macho', 6, '2019-01-17', 'Mediano', '23.500', 'Si', 'Delicado y bueniísimo', 7, 'img/adopcionPerros/perros/9/foto9a.jpg', 1),
(11, 'Jara', 'img/adopcionPerros/perros/10/foto10.jpg', 'Hembra', 5, '2011-06-24', 'Grande', '36.500', 'Si', 'Abuelita dulce y tranquila', 5, 'img/adopcionPerros/perros/10/foto10a.jpg', 1),
(12, 'Barkibu', 'img/adopcionPerros/perros/11/foto11.jpg', 'Macho', 7, '2019-10-19', 'Grande', '30.350', 'Si', 'Activo y juguetón', NULL, 'img/adopcionPerros/perros/11/foto11a.jpg', 1),
(13, 'Eloise', 'img/adopcionPerros/perros/12/foto12.jpg', 'Hembra', 5, '2021-06-24', 'Grande', '41.000', 'Si', 'Tímida y tierna', 1, 'img/adopcionPerros/perros/12/foto12a.jpg', 1),
(14, 'Jumanji', 'img/adopcionPerros/ppp/13/foto13.jpg', 'Macho', 4, '2020-09-28', 'Mediano', '25.200', 'Si', 'Alocado y juguetón', NULL, 'img/adopcionPerros/ppp/13/foto13a.jpg', 1),
(15, 'Manchitas', 'img/adopcionPerros/perros/14/foto14.jpg', 'Hembra', 5, '2015-04-08', 'Grande', '36.500', 'Si', 'Tímida pero cariñosa', NULL, 'img/adopcionPerros/perros/14/foto14a.jpg', 1),
(16, 'Niebla', 'img/adopcionPerros/perros/15/foto15.jpg', 'Hembra', 8, '2009-10-10', 'Mediano', '22.500', 'Si', 'Tranquila y encantadora', NULL, 'img/adopcionPerros/perros/15/foto15a.jpg', 1),
(17, 'Taviro', 'img/adopcionPerros/perros/16/foto16.jpg', 'Macho', 15, '2020-11-29', 'Mediano', '19.000', 'Si', 'Muy juguetón', NULL, 'img/adopcionPerros/perros/16/foto16a.jpg', 1),
(18, 'Bentley', 'img/adopciónGatos/17/foto17.jpg', 'Macho', 9, '2021-06-20', 'Mediano', '3.400', 'Si', 'Cariñosa y pegajosa', 6, 'img/adopciónGatos/17/foto17a.jpg', 1),
(19, 'Bichito', 'img/adopciónGatos/18/foto18.jpg', 'Macho', 10, '2022-03-01', 'Pequeño', '2.100', 'Si', 'Tímido y asustadizo', NULL, 'img/adopciónGatos/18/foto18a.jpg', 1),
(20, 'Bimo', 'img/adopciónGatos/19/foto19.jpg', 'Macho', 11, '2021-02-08', 'Mediano', '2.680', 'Si', 'Activo y juguetón', NULL, 'img/adopciónGatos/19/foto19a.jpg', 1),
(21, 'Casho', 'img/adopciónGatos/20/foto20.jpg', 'Macho', 11, '2019-05-20', 'Mediano', '4.100', 'Si', 'Tranuqilo y curioso', NULL, 'img/adopciónGatos/20/foto20a.jpg', 1),
(22, 'Frambuesa', 'img/adopciónGatos/21/foto21.jpg', 'Hembra', 12, '2022-08-18', 'Mediano', '3.500', 'Si', 'Tímida, pero muy juguetona', NULL, 'img/adopciónGatos/21/foto21a.jpg', 1),
(23, 'Copito', 'img/adopciónGatos/22/foto22.jpg', 'Macho', 13, '2020-05-04', 'Mediano', '4.200', 'No', 'Gruñon y muy territorial, no está preparado para vivir con otros animales de momento', NULL, 'img/adopciónGatos/22/foto22a.jpg', 1),
(24, 'Occidente', 'img/adopciónGatos/23/foto23.jpg', 'Macho', 11, '2022-06-15', 'Mediano', '3.800', 'Si', 'Travieso y juguetón', NULL, 'img/adopciónGatos/23/foto23a.jpg', 1),
(25, 'Pipilastrun', 'img/adopciónGatos/24/foto24.jpg', 'Hembra', 11, '2022-08-25', 'Mediano', '2.600', 'Si', 'Tranquila y amistosa, convive muy bien con otros animales', NULL, 'img/adopciónGatos/24/foto24a.jpg', 1),
(26, 'Carbón', 'img/adopciónGatos/25/foto25.jpg', 'Macho', 14, '2020-08-05', 'Grande', '4.600', 'Si', 'Muy dócil y tranquilo', NULL, 'img/adopciónGatos/25/foto25a.jpg', 1),
(27, 'Reina', 'img/adopciónGatos/26/foto26.jpg', 'Hembra', 9, '2018-05-04', 'Mediana', '3.500', 'Si', 'Curiosa y rebelde, pero muy dormilona', 1, 'img/adopciónGatos/26/foto26a.jpg', 1),
(28, 'Dark', 'img/adopciónGatos/27/foto27.jpg', 'Hembra', 9, '2019-06-20', 'Mediana', '3.200', 'Si', 'Miedosa, dormilona y muy juguetona', 2, 'img/adopciónGatos/27/foto27a.jpg', 1),
(29, 'Arwen', 'img/animales/arwena.jpg', 'Hembra', 6, '2021-02-01', 'Mediano', '16.000', 'Si', 'Cachorra timida', NULL, 'img/animales/arwentrasera.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padrinos`
--

CREATE TABLE `padrinos` (
  `id_padrinos` int(4) NOT NULL,
  `importe` decimal(10,0) NOT NULL,
  `periocidad` varchar(50) NOT NULL,
  `id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `padrinos`
--

INSERT INTO `padrinos` (`id_padrinos`, `importe`, `periocidad`, `id_usuario`) VALUES
(1, '20', 'Mensual', 10),
(2, '60', 'Trimestral', 11),
(3, '20', 'Trimestral', 12),
(4, '20', 'Mensual', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protectora`
--

CREATE TABLE `protectora` (
  `id_protectora` int(4) NOT NULL,
  `cif` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `poblacion` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `protectora`
--

INSERT INTO `protectora` (`id_protectora`, `cif`, `nombre`, `correo`, `telefono`, `direccion`, `cp`, `poblacion`, `provincia`) VALUES
(1, 'A80192727', 'Colitas', 'info@Colitas.com', '620137812', 'Av. de la Universidad, s/n', '10003', 'Cáceres', 'Cáceres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `id_raza` int(4) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `id_tipo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id_raza`, `nombre`, `id_tipo`) VALUES
(1, 'BullDog Americano', 3),
(2, 'Pit Bull', 3),
(3, 'Dogo Argentino', 3),
(4, 'American Staffordshire', 3),
(5, 'Mastín', 2),
(6, 'Mestizo', 2),
(7, 'Pastor Alemán', 2),
(8, 'Perro de Aguas', 2),
(9, 'Siamés', 1),
(10, 'Mixta', 1),
(11, 'Común Europeo', 1),
(12, 'Tortoiseshell', 1),
(13, 'Bosque de Noruega', 1),
(14, 'Maine Coon', 1),
(15, 'Beagle', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `id_socio` int(4) NOT NULL,
  `importe` decimal(10,0) NOT NULL,
  `periocidad` varchar(50) NOT NULL,
  `id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id_socio`, `importe`, `periocidad`, `id_usuario`) VALUES
(1, '600', 'Anual', 13),
(2, '500', 'Trimestral', 14),
(3, '60', 'Mensual', 16),
(4, '100', 'Trimestral', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomascota`
--

CREATE TABLE `tipomascota` (
  `id_tipo` int(3) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipomascota`
--

INSERT INTO `tipomascota` (`id_tipo`, `nombre`) VALUES
(1, 'Gato'),
(2, 'Perro'),
(3, 'Perro Potencialmente Peligroso (PPP)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(3) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `nif` varchar(10) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `poblacion` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `iban` varchar(24) NOT NULL,
  `id_protectora` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`, `nif`, `nombres`, `apellidos`, `correo`, `telefono`, `direccion`, `cp`, `poblacion`, `provincia`, `iban`, `id_protectora`) VALUES
(1, 'admin', 'contraseñaAdmin', '', '', '', '', '', '', '', '', '', '', 1),
(2, 'cmoratog15', 'c12345', '76073869X', 'Cristina', 'Morato González', 'cmoratog15@gmail.com', '620134856', 'C/San Blas 45', '10500', 'Valencia de Alcántara', 'Cáceres', 'ES44 2100 4563 1101 1234', 1),
(3, 'mmoratog', 'm1234', '754128585Y', 'Mirian', 'Morato González', 'miri-mory@gmail.com', '625431582', 'C/San Antonio', '10500', 'Valencia de Alcántara', 'Cáceres', 'ES44 2100 4321 1101 2654', 1),
(4, 'emarquez', 'e1234', '7589654235', 'Eva', 'Marquez', 'evamqz@gmail.com', '625314870', 'C/La Cuesta Arriba', '10500', 'Valencia de Alcántara', 'Cáceres', 'ES23 2450 1120 1421 1587', 1),
(5, 'malonso', 'ma1234', '75214983G', 'Manuel', 'Alonso Tejeda', 'manuelAlonso@gmail.com', '626553322', 'C/Los Olivos 23', '33201', 'Gijon', 'Asturias', 'ES25 3321 6487 2388 0094', 1),
(6, 'dcarrondor', 'd1234', '75642356S', 'Daniel', 'Carrondo Rey', 'danny_CR@gmail.com', '647999435', 'C/De Abajo 6', '10460', 'Losar de la Vera', 'Cáceres', 'ES41 3451 6485 1108 0004', 1),
(7, 'rperez', 'r1234', '75142563N', 'Ruben', 'Perez Clemente', 'rubenpc@gmail.conm', '653412354', 'C/ Los Olmos 4', '10600', 'Plasencia', 'Plasencia', 'ES44 3023 3465 2388 1002', 1),
(8, 'egarcia', 'e1234', '77745624T', 'Edurne', 'García Lobo', 'lobodurne@gmail.com', '654321485', 'C/Los Cardos 23', ' 2401', 'Omaña', 'León', 'ES20 0123 8877 5546 3110', 1),
(10, 'pperez', 'p2345', '75412356F', 'Pedro', 'Alonso Tejeda', 'alonsoTejeda@gmail.com', '647999435', 'C/Las huertas', '1600', 'Caceres', 'Cáceres', 'ES41 3451 7854 9632 4400', 1),
(11, 'javinuñe', 'j4567', '75412356C', 'Javier', 'Nuñez', 'jnunez@gmail.com', '654343789', 'C/ Fernando Catolico', '10500', 'Valencia de Alcantara', 'Caceres', 'ES44 2100 5410 1102 2004', 1),
(12, 'claudiadiaz', 'c4567', '758412365K', 'Claudia', 'Diaz Rollano', 'claudiaDiaz@gmail.com', '652142534', 'C/Joaquin Mesa 12', '10500', 'Valencia de Alcantara', 'Cáceres', 'ES44 1200 0001 2255 4532', 1),
(13, 'pepepimienta', 'pp1234', '74545896Z', 'Pepe', 'Pimienta Salada', 'pepepimienta@gmail.com', '652141234', 'C/ Limoncito Plateado 2', '42012', 'Mijas', 'Malaga', 'ES24 2170 1122 4458 2023', 1),
(14, 'limonvinagre', 's6543', '74523689H', 'Sara', 'Limon Vinagre', 'limalimon@gmail.com', '652143521', 'C/ Manzano 3', '06200', 'Almendralejo', 'Badajoz', 'ES20 2040 5578 1322 5855', 1),
(15, 'KikePalomares', 'kikop', '75869325G', 'Kike', 'Palomares Voladores', 'kikep@gmail.com', '652014785', 'C/Los Limones 7', '33201', 'Gijon', 'Asturias', 'ES44 2100 8878 1101 0023', 1),
(16, 'Antonio123', 'a12345', '74125684S', 'Antonio', 'Baldes de Aguas', 'antonioaguas@gmail.com', '652145789', 'C/Los mares 23', '10259', 'Caceres', 'Caceres', 'ES42 2100 4563 1212 2587', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adoptantes`
--
ALTER TABLE `adoptantes`
  ADD PRIMARY KEY (`id_adoptante`),
  ADD UNIQUE KEY `id_usuario_2` (`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `id_adoptante` (`id_adoptante`),
  ADD KEY `id_raza` (`id_raza`),
  ADD KEY `id_protectora` (`id_protectora`);

--
-- Indices de la tabla `padrinos`
--
ALTER TABLE `padrinos`
  ADD PRIMARY KEY (`id_padrinos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `protectora`
--
ALTER TABLE `protectora`
  ADD PRIMARY KEY (`id_protectora`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id_raza`,`id_tipo`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipomascota`
--
ALTER TABLE `tipomascota`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_protectora` (`id_protectora`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adoptantes`
--
ALTER TABLE `adoptantes`
  MODIFY `id_adoptante` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id_mascota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `padrinos`
--
ALTER TABLE `padrinos`
  MODIFY `id_padrinos` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `id_raza` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `id_socio` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipomascota`
--
ALTER TABLE `tipomascota`
  MODIFY `id_tipo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adoptantes`
--
ALTER TABLE `adoptantes`
  ADD CONSTRAINT `adoptantes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_2` FOREIGN KEY (`id_adoptante`) REFERENCES `adoptantes` (`id_adoptante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascotas_ibfk_3` FOREIGN KEY (`id_raza`) REFERENCES `raza` (`id_raza`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `padrinos`
--
ALTER TABLE `padrinos`
  ADD CONSTRAINT `padrinos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `raza`
--
ALTER TABLE `raza`
  ADD CONSTRAINT `raza_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipomascota` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `socios`
--
ALTER TABLE `socios`
  ADD CONSTRAINT `socios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_protectora`) REFERENCES `protectora` (`id_protectora`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
