CREATE DATABASE IF NOT EXISTS tienda
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE tienda;

DROP TABLE IF EXISTS producto;
DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  email      VARCHAR(190) NOT NULL UNIQUE,
  alias      VARCHAR(60)  NOT NULL,        -- lo que se ve en la clasificacion:
  nombre     VARCHAR(120) NOT NULL,        -- nunca el nombre completo proyectado
  clave_hash VARCHAR(255) NOT NULL,        -- password_hash(), nunca en claro
  rol        ENUM('aventurero','maestre') NOT NULL DEFAULT 'aventurero',
  creado_en  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE producto (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(200) NOT NULL,
  descripcion VARCHAR(500),
  img VARCHAR(100) NULL,
  precio DECIMAL(10,2),
  categoria ENUM('bolsos', 'accesorios') NOT NULL,
  activo BOOLEAN NOT NULL DEFAULT TRUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;