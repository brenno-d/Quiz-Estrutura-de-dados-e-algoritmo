-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 29, 2026 at 04:33 PM
-- Server version: 8.0.46
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--
DROP DATABASE IF EXISTS `quiz`;
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternativas_questao`
--

DROP TABLE IF EXISTS `tb_alternativas_questao`;
CREATE TABLE `tb_alternativas_questao` (
  `cd_alternativa` int NOT NULL,
  `id_questao` int NOT NULL,
  `ds_alternativa` varchar(100) NOT NULL,
  `ic_correta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_alternativas_questao`
--

INSERT INTO `tb_alternativas_questao` (`cd_alternativa`, `id_questao`, `ds_alternativa`, `ic_correta`) VALUES
(1, 1, 'Reduzir a quantidade de memória utilizada pela tabela hash.', 0),
(2, 1, 'Diminuir a ocorrência de colisões e manter as operações de busca, inserção e remoção eficientes.', 1),
(3, 1, 'Ordenar automaticamente todas as chaves armazenadas.', 0),
(4, 1, 'Garantir que cada posição da tabela contenha exatamente um elemento.', 0),
(5, 2, '0,50', 0),
(6, 2, '0,60', 0),
(7, 2, '0,75', 1),
(8, 2, '1,25', 0),
(9, 3, 'Apenas I, II e IV estão corretas.', 1),
(10, 3, 'Apenas II e III estão corretas.', 0),
(11, 3, 'Apenas I e III estão corretas.', 0),
(12, 3, 'Apenas I e IV estão corretas.', 0),
(13, 4, 'O(n²)', 0),
(14, 4, 'O(log n)', 1),
(15, 4, 'O(n log n)', 0),
(16, 4, 'O(n)', 0),
(17, 5, 'O acesso pode ocorrer, em média, em tempo O(1).', 1),
(18, 5, 'Os elementos permanecem ordenados automaticamente.', 0),
(19, 5, 'Consome sempre menos memória que um array.', 0),
(20, 5, 'Permite apenas chaves numéricas.', 0),
(21, 6, 'O Array esteja ordenado.', 1),
(22, 6, 'O array possua exatamente 100 elementos.', 0),
(23, 6, 'Todos os elementos sejam diferentes.', 0),
(24, 6, 'O array seja dinâmico.', 0),
(25, 7, 'Acesso imediato a qualquer posição pelo índice.', 0),
(26, 7, 'Permitem busca binária.', 0),
(27, 7, 'Ocupam sempre menos memória que arrays.', 0),
(28, 7, 'Inserções e remoções no início podem ser feitas sem deslocar elementos.', 1),
(29, 8, 'LIFO (Last In, First Out)', 0),
(30, 8, 'Inserção aleatória', 0),
(31, 8, 'Ordenação crescente', 0),
(32, 8, 'FIFO (First In, First Out)', 1),
(33, 9, 'Ordenação de listas ligadas.', 0),
(34, 9, 'Encontrar resultados em subarrays ou substrings consecutivas de forma eficiente.', 1),
(35, 9, 'Balanceamento de árvores binárias.', 0),
(36, 9, 'Conversão de números decimais para binários.', 0),
(37, 10, 'Um algoritmo de busca.', 0),
(38, 10, 'Um conjunto de vértices.', 0),
(39, 10, 'Uma conexão entre dois vértices.', 1),
(40, 10, 'O caminho mais curto entre todos os vértices.', 0),
(41, 11, 'Sliding Window.', 1),
(42, 11, 'Busca Binária.', 0),
(43, 11, 'Merge Sort.', 0),
(44, 11, 'Pilha (Stack).', 0),
(45, 12, 'Diminuir a complexidade assintótica do algoritmo.', 0),
(46, 12, 'Evitar o crescimento da call stack, reduzindo o consumo de memória.', 1),
(47, 12, 'Eliminar a necessidade de chamadas recursivas.', 0),
(48, 12, 'Garantir que a função execute em tempo constante.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_questoes`
--

DROP TABLE IF EXISTS `tb_questoes`;
CREATE TABLE `tb_questoes` (
  `cd_questao` int NOT NULL,
  `ds_questao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_questoes`
--

INSERT INTO `tb_questoes` (`cd_questao`, `ds_questao`) VALUES
(1, 'O Load Factor (fator de carga) de uma tabela hash é definido como a razão entre o número de elementos armazenados e o número de posições (buckets) da tabela. Quando esse valor se torna muito alto, normalmente é realizado um rehash. Qual é o principal objetivo desse procedimento?'),
(2, 'Uma tabela hash possui 20 buckets e armazena 15 elementos. Qual é o seu Load Factor?'),
(3, 'Uma biblioteca digital armazena uma lista com 1.000.000 de livros, organizada em ordem alfabética pelo título. Um usuário deseja encontrar rapidamente um livro específico.\r\n\r\nI. Utilizar uma busca linear garante encontrar o livro, mas, no pior caso, será necessário verificar todos os elementos da lista.\r\nII. Utilizar uma busca binária reduz significativamente a quantidade de comparações, desde que a lista esteja ordenada.\r\nIII. A complexidade de tempo da busca linear é O(log n).\r\nIV. A complexidade de tempo da busca binária é O(log n).\r\n\r\nAssinale a alternativa correta:'),
(4, 'Qual alternativa representa corretamente a função com menor crescimento assintótico para entradas muito grandes?'),
(5, 'Qual é a principal vantagem de um HashMap em relação a um array para buscas por chave?'),
(6, 'Para que a busca binária funcione corretamente, é necessário que:'),
(7, 'Qual das alternativas representa uma vantagem das linked lists em relação aos arrays?'),
(8, 'Uma fila segue qual princípio?'),
(9, 'A técnica Sliding Window é mais indicada para resolver problemas que envolvem:'),
(10, 'Em um grafo, uma aresta representa:'),
(11, 'Considere o seguinte problema: Dada uma string, determine o comprimento da maior substring sem caracteres repetidos. Qual técnica é a mais apropriada para obter uma solução eficiente?'),
(12, 'Em algumas linguagens de programação, compiladores podem aplicar a Tail Call Optimization (TCO) em funções implementadas com Tail Recursion. Qual é o principal benefício dessa otimização?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `cd_usuario` int NOT NULL,
  `nm_usuario` varchar(30) NOT NULL,
  `pontos_usuario` int NOT NULL,
  `ds_tempo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternativas_questao`
--
ALTER TABLE `tb_alternativas_questao`
  ADD PRIMARY KEY (`cd_alternativa`),
  ADD KEY `idx_questao` (`id_questao`);

--
-- Indexes for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD PRIMARY KEY (`cd_questao`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternativas_questao`
--
ALTER TABLE `tb_alternativas_questao`
  MODIFY `cd_alternativa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  MODIFY `cd_questao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alternativas_questao`
--
ALTER TABLE `tb_alternativas_questao`
  ADD CONSTRAINT `fk_id_questao` FOREIGN KEY (`id_questao`) REFERENCES `tb_questoes` (`cd_questao`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
