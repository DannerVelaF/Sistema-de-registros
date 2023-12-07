
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `cursos` (
  `id_cursos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_curso` varchar(255) DEFAULT NULL,
  `fecha_creacion`  varchar(255) DEFAULT NULL,
  PRIMARY KEY(id_cursos)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `nombre_estudiante` varchar(255) DEFAULT NULL,
  `apellido_paterno` varchar(255) DEFAULT NULL,
  `apellido_materno` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `estudiantes` (`id_estudiante`, `nombre_estudiante`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`) VALUES
(75807659, 'David', 'Herrera', 'Fernandez', '2004-03-05');


CREATE TABLE `inscripciones` (
  `id_inscripcion` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_cursos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_inscripcion` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `perfil` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `apellido_paternoU` varchar(255) DEFAULT NULL,
  `apellido_maternoU` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `perfil` (`id_usuario`, `usuario`, `clave`, `nombre_usuario`, `apellido_paternoU`, `apellido_maternoU`, `email`, `telefono`, `cargo`, `direccion`) VALUES
(1, 'admin', 'admin123', 'Pedro', 'Pérez', 'Suarez', 'pedro.perez@gmail.com', '912847520', 'Administrador', 'Av. Bolognesi 141');



ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`);


ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_cursos` (`id_cursos`),
  ADD KEY `id_usuario` (`id_usuario`);


ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_usuario`);

ALTER TABLE `cursos`
  MODIFY `id_cursos` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87888889;


ALTER TABLE `inscripciones`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `perfil`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `inscripciones`
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `inscripciones_ibfk_2` FOREIGN KEY (`id_cursos`) REFERENCES `cursos` (`id_cursos`),
  ADD CONSTRAINT `inscripciones_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `perfil` (`id_usuario`);
COMMIT;

