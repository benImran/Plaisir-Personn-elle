-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 19 Avril 2017 à 15:00
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `testuser`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$6bR5djNarxsX4PQZwHAL1.7DmqzLovqWb2GlEBtZPX9RaquD1t6dS'),
(3, 'lucas', '$2y$10$QuFIpZBI49sF4.C0R0OyQeQks8RQbpaUAWUH7IRYVbZt.gKH5jNLe'),
(4, 'admin2', '$2y$10$bA.pGq3hp6Z9INSnqkuhBeicgsmhQLDQq5F/o5Mmuqp2Fx.Zs0Puq');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title_product` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `title_product`, `description`, `price`) VALUES
(1, 'Le Berlingot', 'Vibromasseur sensuel en silicone. Très maniable, il a un profil arrondi afin d\'assurer une stimulation en grande douceur. Revêtu d\'un silicone très soyeux, son corps glisse sur les zones sensibles en procurant une délicieuse progression. Sensations garanties grâce à la tête de bon gabarit. Vibrations puissantes et silencieuses. Augmentez les sensations en faisant vibrer ce sextoy suivant 7 programmes. Touches +/- lumineuses. A utiliser avec lubrifiant à base d\'eau.', 199.99),
(2, 'L\'Arlequin', 'Sextoys vibrant pour clitoris. Ce masturbateur de clitoris ultra puissant, est le wang le plus fantastique pour procurer des orgasmes clitoridien puissants. Grace a 8 vitesses et 10 modes de vibration. Ce merveilleux sextoys est waterproof, alors, sous la douche ou dans la beignoir n’hésitez pas a l’utiliser. Compact vous pourrez l’utiliser en toute circonstance.', 159.99),
(3, 'Les Dragées', 'Boules de geisha en silicone ultra douces. Encore plus chics, encore plus douces, encore plus stimulantes, ces nouvelles boules de geisha sont nervurées en finesse pour caresser le vagin à merveille. Renfermant une petite bille, chaque boule reproduit la sensation du coït lorsque vous bougez. De plus, elles sont parfaitement insonorisées. Le jeu donne l\'impression d\'un rapport sexuel permanent. Dosez les gestes pour affiner les sensations. Un cordon permet le retrait.', 49.99),
(4, 'Le Loukoum', 'Stimulateur anal unisexe en silicone. Appelé également Plug, il s\'introduit complètement et reste coincé grâce à sa forme spéciale. Vous le portez en toute sécurité grâce à sa base qui joue un rôle de butée. La dilatation qu\'il procure est un excellent préliminaire au rapport anal. Débutez en anal avec ce petit stimulateur en acier. Très facile à insérer, il dilate en douceur et peut se porter longtemps. Cordon de retrait. Un plug idéal pour une initiation.', 39.99);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmation_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`) VALUES
(67, 'oo', 'lucas@mail.com', '$2y$10$QWgND2RAPfJu3iFfic0qU.LEq8.r0wPXzaMkxvlyc1lOTctIjNIvC', 'w3nIGHPhG2u2tT8uhmft4o8o9PdmxILUdJdpP8npmHgamc9cgWfwHomOsV45', NULL),
(70, 'aa', 'aa@mail.com', '$2y$10$LKAYv8TLaDZF3AIrChD30eH3vw6lrK9g23HndHuZgvFx3oYRA9rjO', 'jTARWQvaxm9PPDPWq2eedCqL9hoeNwBUlJnzwNXK4lPZJD1ZSKKjfETxSCMi', NULL),
(71, 'kk', 'kk@mail.com', '$2y$10$xZlO.a/iQOD0DrO9O7Xare0JvYmUc9mQwXz.N1SmOuvQEKVliU9hG', 'UrQLeYWvmU6j8UIZQIJbwbSrFupqGmi2BNqvkq8k4XrtFcsByqxiw2pbnWeN', NULL),
(72, 'benben', 'ben@gmail.com', '$2y$10$Ns9etydUKNcyUDirCSVo5OeA0Y3UQGObiTi9hpb37b5Ok/56vqPp.', 'lEBgMBCi9IwcX5AZmrJgpqwxWsZhlYXSNmgKEcr6F0WRlcM9CcI4ySxI4qbp', NULL),
(73, 'pp', 'pp@mail.com', '$2y$10$u5PcGAZRVZT.6u242SoOaenHNzUNAmtxvpsTFIzvSrCoBiQ4lrdQ6', 'uCiZVM5sjXthnIDI7Ntlhw2COYkOxA04cKjs8PCH7I2MjUgmzbvrwoYZwtac', NULL),
(76, 'rem', 'erm@gmail.com', '$2y$10$zt5sbyqF2znIg3LJko6DbO5./kW/tROwB958dig595QWc.uA9/dIC', 'i9NMP1BGI15gP1IUnZ7wUleAKDfy4gFJOdZR3Nj0aFS8G3YMpkt0XH1KshgA', NULL),
(77, 'lucas', 'lucas.lecot@gmail.com', '$2y$10$UKpY2hkJ1lxD3mrVPFvXeuR9QQiLZHEvmZ/jE.sC0a51jyu9ZA9ae', NULL, '2017-03-24');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;