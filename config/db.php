<?php
// config/db.php

// Definimos las constantes de conexión
define('DB_HOST', '127.0.0.1');
define('DB_PORT', 3307);
define('DB_NAME', 'el_faro');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

try {
    $dsnServer = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=' . DB_CHARSET;
    $conexion = new PDO($dsnServer, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $sqlCreateDb = 'CREATE DATABASE IF NOT EXISTS `' . DB_NAME . '` CHARACTER SET ' . DB_CHARSET . ' COLLATE ' . DB_CHARSET . '_unicode_ci';
    $conexion->exec($sqlCreateDb);
    $conexion->exec('USE `' . DB_NAME . '`');

    $sqlCreateUsuarios = "CREATE TABLE IF NOT EXISTS `usuarios` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `nombre` VARCHAR(100) NOT NULL,
        `email` VARCHAR(150) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        UNIQUE KEY `email_unico` (`email`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

    $sqlCreateArticulos = "CREATE TABLE IF NOT EXISTS `articulos` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `titulo` VARCHAR(255) NOT NULL,
        `contenido` TEXT NOT NULL,
        `autor` VARCHAR(100) NOT NULL,
        `categoria` VARCHAR(100) NOT NULL,
        `fecha_publicacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

    $sqlCreateContactos = "CREATE TABLE IF NOT EXISTS `contactos` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `nombre` VARCHAR(100) NOT NULL,
        `email` VARCHAR(150) NOT NULL,
        `mensaje` TEXT NOT NULL,
        `fecha_envio` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

    $conexion->exec($sqlCreateUsuarios);
    $conexion->exec($sqlCreateArticulos);
    $conexion->exec($sqlCreateContactos);
} catch (PDOException $e) {
    die('Error en la conexión de El Faro: ' . $e->getMessage());
}
?>