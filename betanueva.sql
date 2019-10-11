-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2019 a las 18:20:10
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `betanueva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abuelito`
--

CREATE TABLE `abuelito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `fechaNAcimiento` date DEFAULT NULL,
  `estado` varchar(30) NOT NULL,
  `necesidades` text DEFAULT NULL,
  `examenMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id` int(11) NOT NULL,
  `nombreActividad` varchar(45) DEFAULT NULL,
  `horaActividad` varchar(30) DEFAULT NULL,
  `abuelito_idAbuelito` int(11) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `tipoActividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apadrinamiento`
--

CREATE TABLE `apadrinamiento` (
  `id` int(11) NOT NULL,
  `fechaInicial` date DEFAULT NULL,
  `abuelito_idAbuelito` int(11) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `solicitudApadrinamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `idArchivo` int(11) NOT NULL,
  `url` varchar(3000) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado`
--

CREATE TABLE `certificado` (
  `idCertificado` int(11) NOT NULL,
  `tipoCertificado` varchar(45) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `horaCertificado` varchar(30) DEFAULT NULL,
  `usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `idDonacion` int(11) NOT NULL,
  `valorDonacion` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tipoDonacion` varchar(1000) DEFAULT NULL,
  `abuelito_idAbuelito` int(11) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `descripcionDonacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad`
--

CREATE TABLE `enfermedad` (
  `idEnfermedad` int(11) NOT NULL,
  `tipoEnfermedad` varchar(45) DEFAULT NULL,
  `descripcionEnfermedad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idEventos` int(11) NOT NULL,
  `tipoEvento` int(11) DEFAULT NULL,
  `fechaEvento` date DEFAULT NULL,
  `estado` varchar(30) NOT NULL,
  `descripcionEventos` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenesmedicos`
--

CREATE TABLE `examenesmedicos` (
  `idExamenesMedicos` int(11) NOT NULL,
  `fechaExamenesMedicos` date DEFAULT NULL,
  `medicamentos_idMedicamentos` int(11) NOT NULL,
  `enfermedad_idEnfermedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `idMedicamentos` int(11) NOT NULL,
  `fechaVencimiento` date DEFAULT NULL,
  `laboratorio` varchar(40) DEFAULT NULL,
  `tipoMedicamento` int(11) DEFAULT NULL,
  `nombreMedicamento` varchar(45) DEFAULT NULL,
  `descripcionMedicamento` varchar(500) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `unidades` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `idMensaje` int(11) NOT NULL,
  `asunto` varchar(200) NOT NULL,
  `contenido` varchar(200) NOT NULL,
  `correoDestinatario` varchar(40) NOT NULL,
  `designatario` int(11) NOT NULL,
  `remitenteUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `tipoRol` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `tipoRol`) VALUES
(1, 'administrador'),
(3, 'medico'),
(2, 'padrino'),
(4, 'practicante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudapadrinamiento`
--

CREATE TABLE `solicitudapadrinamiento` (
  `idSolicitud` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `IdAbuelito` int(11) NOT NULL,
  `estadoId` varchar(20) DEFAULT '1',
  `razon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoactividad`
--

CREATE TABLE `tipoactividad` (
  `idTipoActividad` int(11) NOT NULL,
  `tipoActividad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoevento`
--

CREATE TABLE `tipoevento` (
  `idTipoEvento` int(11) NOT NULL,
  `tipoEvento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomedicamento`
--

CREATE TABLE `tipomedicamento` (
  `idTipoMedicamento` int(11) NOT NULL,
  `tipoMedicamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `rol` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `PASSWORD`, `rol`, `imagen`) VALUES
(1, 'admin', 'admin', 'admin@asitad.com', '12345', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `idVisitas` int(11) NOT NULL,
  `fechaVisita` date DEFAULT NULL,
  `horaVisita` varchar(30) DEFAULT NULL,
  `apadrinamiento_idApadrinamiento` int(11) NOT NULL,
  `abuelito_idAbuelito` int(11) NOT NULL,
  `estadoVisita` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abuelito`
--
ALTER TABLE `abuelito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examenMedico` (`examenMedico`);

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abuelito_idAbuelito` (`abuelito_idAbuelito`),
  ADD KEY `usuario_idUsuario` (`usuario_idUsuario`),
  ADD KEY `tipoActividad` (`tipoActividad`);

--
-- Indices de la tabla `apadrinamiento`
--
ALTER TABLE `apadrinamiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abuelito_idAbuelito` (`abuelito_idAbuelito`),
  ADD KEY `usuario_idUsuario` (`usuario_idUsuario`),
  ADD KEY `solicitudApadrinamiento` (`solicitudApadrinamiento`);

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`idArchivo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`idCertificado`),
  ADD KEY `usuario_idUsuario` (`usuario_idUsuario`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`idDonacion`),
  ADD KEY `usuario_idUsuario` (`usuario_idUsuario`),
  ADD KEY `abuelito_idAbuelito` (`abuelito_idAbuelito`);

--
-- Indices de la tabla `enfermedad`
--
ALTER TABLE `enfermedad`
  ADD PRIMARY KEY (`idEnfermedad`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEventos`),
  ADD KEY `tipoEvento` (`tipoEvento`);

--
-- Indices de la tabla `examenesmedicos`
--
ALTER TABLE `examenesmedicos`
  ADD PRIMARY KEY (`idExamenesMedicos`),
  ADD KEY `medicamentos_idMedicamentos` (`medicamentos_idMedicamentos`),
  ADD KEY `enfermedad_idEnfermedad` (`enfermedad_idEnfermedad`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`idMedicamentos`),
  ADD KEY `tipoMedicamento` (`tipoMedicamento`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`idMensaje`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_tipoRol` (`tipoRol`);

--
-- Indices de la tabla `solicitudapadrinamiento`
--
ALTER TABLE `solicitudapadrinamiento`
  ADD PRIMARY KEY (`idSolicitud`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `IdAbuelito` (`IdAbuelito`);

--
-- Indices de la tabla `tipoactividad`
--
ALTER TABLE `tipoactividad`
  ADD PRIMARY KEY (`idTipoActividad`);

--
-- Indices de la tabla `tipoevento`
--
ALTER TABLE `tipoevento`
  ADD PRIMARY KEY (`idTipoEvento`);

--
-- Indices de la tabla `tipomedicamento`
--
ALTER TABLE `tipomedicamento`
  ADD PRIMARY KEY (`idTipoMedicamento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`idVisitas`),
  ADD KEY `apadrinamiento_idApadrinamiento` (`apadrinamiento_idApadrinamiento`),
  ADD KEY `abuelito_idAbuelito` (`abuelito_idAbuelito`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abuelito`
--
ALTER TABLE `abuelito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `apadrinamiento`
--
ALTER TABLE `apadrinamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `idArchivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `certificado`
--
ALTER TABLE `certificado`
  MODIFY `idCertificado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `idDonacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enfermedad`
--
ALTER TABLE `enfermedad`
  MODIFY `idEnfermedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEventos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `examenesmedicos`
--
ALTER TABLE `examenesmedicos`
  MODIFY `idExamenesMedicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `idMedicamentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitudapadrinamiento`
--
ALTER TABLE `solicitudapadrinamiento`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoactividad`
--
ALTER TABLE `tipoactividad`
  MODIFY `idTipoActividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoevento`
--
ALTER TABLE `tipoevento`
  MODIFY `idTipoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipomedicamento`
--
ALTER TABLE `tipomedicamento`
  MODIFY `idTipoMedicamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `idVisitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abuelito`
--
ALTER TABLE `abuelito`
  ADD CONSTRAINT `abuelito_ibfk_1` FOREIGN KEY (`examenMedico`) REFERENCES `examenesmedicos` (`idExamenesMedicos`);

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`tipoActividad`) REFERENCES `tipoactividad` (`idTipoActividad`),
  ADD CONSTRAINT `actividad_ibfk_3` FOREIGN KEY (`abuelito_idAbuelito`) REFERENCES `abuelito` (`id`);

--
-- Filtros para la tabla `apadrinamiento`
--
ALTER TABLE `apadrinamiento`
  ADD CONSTRAINT `apadrinamiento_ibfk_1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `apadrinamiento_ibfk_2` FOREIGN KEY (`abuelito_idAbuelito`) REFERENCES `abuelito` (`id`),
  ADD CONSTRAINT `apadrinamiento_ibfk_3` FOREIGN KEY (`solicitudApadrinamiento`) REFERENCES `solicitudapadrinamiento` (`idSolicitud`);

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `archivo_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `certificado_ibfk_1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `donacion_ibfk_1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `donacion_ibfk_2` FOREIGN KEY (`abuelito_idAbuelito`) REFERENCES `abuelito` (`id`);

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`tipoEvento`) REFERENCES `tipoevento` (`idTipoEvento`);

--
-- Filtros para la tabla `examenesmedicos`
--
ALTER TABLE `examenesmedicos`
  ADD CONSTRAINT `examenesmedicos_ibfk_1` FOREIGN KEY (`medicamentos_idMedicamentos`) REFERENCES `medicamentos` (`idMedicamentos`),
  ADD CONSTRAINT `examenesmedicos_ibfk_2` FOREIGN KEY (`enfermedad_idEnfermedad`) REFERENCES `enfermedad` (`idEnfermedad`);

--
-- Filtros para la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `medicamentos_ibfk_1` FOREIGN KEY (`tipoMedicamento`) REFERENCES `tipomedicamento` (`idTipoMedicamento`);

--
-- Filtros para la tabla `solicitudapadrinamiento`
--
ALTER TABLE `solicitudapadrinamiento`
  ADD CONSTRAINT `solicitudapadrinamiento_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `solicitudapadrinamiento_ibfk_2` FOREIGN KEY (`IdAbuelito`) REFERENCES `abuelito` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`apadrinamiento_idApadrinamiento`) REFERENCES `apadrinamiento` (`id`),
  ADD CONSTRAINT `visitas_ibfk_2` FOREIGN KEY (`abuelito_idAbuelito`) REFERENCES `abuelito` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
