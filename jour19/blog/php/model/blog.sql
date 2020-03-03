SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(160) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(160) NOT NULL,
  `datePublication` datetime NOT NULL,
  `categorie` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `blog` (`id`, `titre`, `contenu`, `image`, `datePublication`, `categorie`) VALUES
(1, 'coronavirus', 'sera-t-il bloqué par les frontières ?', 'assets/img/virus.jpg', '2020-03-03 00:00:00', 'sante');
(2, 'benjamin griveaux', 'il est passé où le benjamin ?', 'assets/img/politique.jpg', '2020-03-03 00:00:00', 'politique');
(3,'match de foot','qui va gagner entre les 2 équipes?','assets/img/sport.jpg','2020-03-03 00:00:00','sport');
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;