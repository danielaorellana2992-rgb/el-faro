-- Script de creación de base de datos para El Faro
CREATE DATABASE IF NOT EXISTS `el_faro` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `el_faro`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_unico` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `articulos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(255) NOT NULL,
  `contenido` TEXT NOT NULL,
  `autor` VARCHAR(100) NOT NULL,
  `categoria` VARCHAR(100) NOT NULL,
  `fecha_publicacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `contactos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `mensaje` TEXT NOT NULL,
  `fecha_envio` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO `articulos` (`titulo`, `contenido`, `autor`, `categoria`) VALUES
('Estadísticas del campeonato', 'Resumen de resultados y análisis de la última jornada.', 'Redacción El Faro', 'Deportes'),
('Inversión en energías renovables', 'Cómo el sector privado impulsa proyectos sustentables.', 'Redacción El Faro', 'Negocios');
