-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 24, 2022 at 04:15 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_genialogie`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_even`
--

CREATE TABLE `history_even` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `music` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_even`
--

INSERT INTO `history_even` (`id`, `title`, `description`, `photo`, `video`, `music`, `date`) VALUES
(9, 'Guerre de corée', '\"Une cicatrice mondiale\r\nDans la nuit du 24 au 25 juin 1950, à 4 heures du matin, 600 000 soldats nord-coréens franchissent la ligne de démarcation du 38e parallèle qui sépare leur État, sous gouvernement communiste, de la Corée du Sud, sous régime pro-occidental.\r\n\r\n Des négociations de paix s\'engagent entre les deux parties. Elles traînent en longueur et c\'est seulement la mort de Staline, protecteur des Nord-Coréens, qui va débloquer le processus.\r\n        \r\n Vite oubliée, la guerre de Corée reste le conflit le plus meurtrier de la deuxième moitié du XXe siècle. On évalue le nombre de victimes à 38.500 dans les forces onusiennes, à 70 000 dans les forces sud-coréennes et à 2 millions chez les combattants nord-coréens et chinois. À cela s\'ajoutent les civils victimes des bombardements, des disettes et des épidémies (peut-être trois millions de victimes en plus des combattants).\r\n        \r\n  Cette guerre illustre la stratégie des deux superpuissances (États-Unis et URSS) pendant la «guerre froide» : maintenir la tension localement en évitant qu\'elle ne débouche sur un conflit généralisé. Mais les élucubrations du général MacArthur ont montré que cette stratégie n\'était pas sans risque. Les tensions extrêmes occasionnées par la guerre de Corée ont par ailleurs contribué à la «chasse aux sorcières» aux États-Unis.\"', '1950-histo.png', NULL, NULL, '1950-01-01 00:00:00'),
(16, 'Premier marathon de Paris', '\"Paris fait son sport.\r\n\r\nLe premier Marathon de Paris est organisé le 18/09/1976 dans les bois de Boulogne. C\'est le français Jean-Pierre Eudier qui remporte l\'épreuve en 2 heures 20 minutes et 57 secondes. On lui remet une médaille, mais pas de prime.\"', '1976-histo.png', NULL, NULL, '1976-01-01 13:35:06'),
(18, 'Sortie album Thriller de Michael Jackson', '\"\"\"Thriller\"\", entre tournant musical et génie créatif.\r\n\r\nEn 1982, Michael Jackson met le monde K.O avec la révolution \"\"Thriller\"\", un album qui s\'est vendu au bas mot à 60 millions d\'exemplaires. Avant \"\"Beat it\"\", personne n\'a fait du rock comme ça. Le guitariste à la mode, Eddy Van Halen, est invité à jouer le solo sur le morceau. L\'association d\'un guitariste de hard rock avec un chanteur de funk américain est novatrice. Jackson fait montre d\'une grande force en mélangeant tous les styles, aidé de son producteur de génie, Quincy Jones. \r\n\r\nLa deuxième claque est aussi bien visuelle que musicale puisque le titre Thriller va révolutionner l\'univers du vidéo-clip. La vidéo est plus qu\'un simple clip mais un mini film de 14 minutes. Sa diffusion mondiale est un événement. Dans la vidéo, un brin angoissante mais aussi éblouissante, Michael Jackson exécute une chorégraphie de mort-vivant et se transforme en loup-garou et en zombie. En matière de guest star, on convoque ici l\'acteur de films d\'horreur, Vincent Price, qui prête sa voix mais surtout son rire d\'épouvante. \"', '1980-histo.png', NULL, NULL, '1980-01-01 13:40:00'),
(19, 'Premier SMS envoyé', '\"Le message tenait en deux mots : «Merry Christmas !» Le tout premier SMS (Short Messaging Service) a été envoyé d\'un ordinateur, un certain 3 décembre 1992, par Neil Papworth, un jeune ingénieur anglais et souhaitait «Joyeux Noël» à un collègue.\r\n\r\n«Comme les téléphones portables n\'avaient pas encore de clavier, j\'ai tapé le message sur un PC. Il disait «Joyeux Noël» et je l\'ai envoyé à Richard Jarvis de Vodafone qui était à une fête de Noël du bureau.», se rappelle Neil Papworth dans The Guardian. C\'était le premier message jamais envoyé dans le monde.\r\n\r\nMais à l\'origine l\'invention n\'était pas destinée au grand public. Neil Papworth, désormais citoyen canadien, travaillait pour un réseau téléphonique anglais et développait un système interne d\'échanges de messages entre employés. L\'entreprise a par la suite adopté cette technologie pour communiquer entre secrétaires et dirigeants.\r\n\r\nCette avancée est ensuite restée confinée à un cercle limité d\'utilisateurs pendant sept ans. Les compagnies téléphoniques britanniques ne voyaient alors pas l\'intérêt de proposer ce service à des clients qui, selon eux, préféreraient parler directement à leurs interlocuteurs plutôt que perdre du temps à écrire.\"', '1990-histo.png', NULL, NULL, '1990-01-01 13:41:33'),
(21, 'Sortie de la saga Harry Potter aux cinémas français', '\"Harry Potter à l\'école des sorciers\r\nLe film est adapté du roman du même nom de J. K. Rowling, sorti en 1997. Il constitue le premier volet de la série de films Harry Potter. \r\n\r\nSon intrigue suit la première année scolaire de Harry Potter à l\'école de Poudlard, alors qu\'il découvre qu\'il est un sorcier célèbre. \r\n\r\nLe film est sorti en salles peu avant Noël 2001. Il est devenu un succès critique et commercial, le film le plus rentable de 2001 et, à cette époque, \r\nle deuxième film le plus rentable de tous les temps.  \"', '2001-histo.png', NULL, NULL, '2001-01-01 13:45:04'),
(23, 'Pandémie mondiale', '\"Un nouveau virus qui paralyse le monde.\r\n\r\nLe 7 janvier, les responsables chinois annoncent qu’un nouveau virus a été isolé, baptisé 2019-nCov. Le 11, la Chine fait part du premier décès à Wuhan. En quelques jours, des cas apparaissent à travers l’Asie, en France, aux États-Unis. Fin janvier, les pays commencent à rapatrier leurs ressortissants de Chine. Les frontières commencent à se fermer et plus de 50 millions de résidents de la province de Wuhan, dans le Hubei, sont placés en quarantaine. En février, la France annonce le premier décès enregistré hors d’Asie.\r\n\r\nL’Italie, puis l’Espagne, la France et la Grande-Bretagne décrètent le confinement. L’OMS déclare le Covid-19 comme pandémie. Pour la première fois en temps de paix, les Jeux Olympiques d’été sont ajournés.\r\n\r\nMi-avril, 3,9 milliards de personnes, la moitié de l’humanité, vivent une forme ou une autre de confinement. De Paris à New York, de Delhi à Lagos et de Londres à Buenos Aires, le silence irréel des rues désertées n’est troublé que par les sirènes des ambulances qui rappellent que la mort rode. Ceux qui le peuvent travaillent à domicile. Les visioconférences remplacent les réunions de travail, les voyages et les célébrations. Embrassades, étreintes et même poignées de mains ne sont plus que des souvenirs. Les échanges se font à travers les masques et des parois de plexiglas. La violence domestique explose, les problèmes psychologiques aussi.\r\n\r\nIl faudra attendre la création de vaccins limitant la propagation et les risques de cas graves pour entrevoir le bout du tunnel.\"', '2020-histo.png', NULL, NULL, '2020-01-01 13:48:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_even`
--
ALTER TABLE `history_even`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_even`
--
ALTER TABLE `history_even`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
