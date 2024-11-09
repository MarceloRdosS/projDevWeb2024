
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `evento` (
  `nome_do_casal` varchar(255) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `data_do_evento` date NOT NULL,
  `numero_de_convidados` enum('0-100','100-150','150-200','200-250') NOT NULL,
  `mais_informacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `tblogin` (
  `email` varchar(128) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `tel` int(20) NOT NULL,
  `cargo` varchar(32) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tblogin` (`email`, `senha`, `tel`, `cargo`) VALUES
('marcelo@gmail.com', '$2y$10$ogYITzTTup0tYR.hnGCymuAHVm7RNZk6VN5hEWem3Pf4/gc52QlVS', 219724041, 'admin'),
('usuario@teste', '$2y$10$Xdp0I55PxpRiIMYBGhJoVuKWPQaqcF/ULEakP0MoEUNCWh9YOVrGG', 0, 'usuario');


ALTER TABLE `evento`
  ADD PRIMARY KEY (`celular`,`data_do_evento`);


ALTER TABLE `tblogin`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;
