SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `tbcontato` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbcontato` (`nome`, `email`, `assunto`, `mensagem`) VALUES
('Marcelo', 'marcelo01@gmail.com', 'olá', 'testando');

CREATE TABLE `tbevento` (
  `nome_do_casal` varchar(255) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `data_do_evento` date NOT NULL,
  `numero_de_convidados` enum('0-100','100-150','150-200','200-250') NOT NULL,
  `mais_informacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbevento` (`nome_do_casal`, `celular`, `data_do_evento`, `numero_de_convidados`, `mais_informacoes`) VALUES
('Matheus e Jules', '190', '2024-11-29', '100-150', '');

CREATE TABLE `tblogin` (
  `email` varchar(128) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `tel` int(20) NOT NULL,
  `cargo` varchar(32) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tblogin` (`email`, `senha`, `tel`, `cargo`) VALUES
('admin@admin', '$2y$10$rEGY0RZgrkPPQLXhWmF9B.pPSgfV2wYA1mQAVXZlhcqk3Yu8cKJci', 3333, 'admin'),
('marcelo@gmail.com', '$2y$10$ogYITzTTup0tYR.hnGCymuAHVm7RNZk6VN5hEWem3Pf4/gc52QlVS', 219724041, 'admin'),
('usuario@teste', '$2y$10$Xdp0I55PxpRiIMYBGhJoVuKWPQaqcF/ULEakP0MoEUNCWh9YOVrGG', 0, 'usuario');


ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`email`);

ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`celular`,`data_do_evento`);

ALTER TABLE `tblogin`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
