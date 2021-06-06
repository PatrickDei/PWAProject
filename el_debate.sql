-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 12:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el_debate`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `shortTitle` varchar(55) NOT NULL,
  `time` text NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `category` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `shortTitle`, `time`, `imagePath`, `category`) VALUES
(8, 'Tornados dejan danos en asas ddel sur de Estados Unidos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'ESTADOS UNIDOS', '11-05-2021', '../images/3.jpg', 'mundo'),
(9, 'Boeing reconoce defectos en software simulador del 737 MAX', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'BOEING', '01-06-2021', '../images/2.jpg', 'mundo'),
(10, 'Mujer logra increible transromacion al bajar mas de 200 kilos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'OBESIDAD', '25-05-2021', '../images/4.png', 'mundo'),
(11, 'Joven que el sacaron su bebe en Chicago mirava fotos cuando fue asesinada', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'ASESINATO', '05-06-2021', '../images/5.jpg', 'mundo'),
(13, 'Tigres vs Monterrey, mintuo a minutos semifinales Liga MX', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'TIGRES DE LA UANL', '23-04-2021', '../images/1.jpg', 'deporte'),
(14, 'Maria del Rosario Espinoza, comparte amargos adios a los mundiales', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'TAEKWONDO', '01-01-2021', '../images/8.jpg', 'deporte'),
(15, 'Yo decido en mi quipo, si no me marcharia, dice Zidane', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'ZINEDINE ZIDANE', '05-06-2021', '../images/6.jpg', 'deporte'),
(16, 'Lyon vence al Barcelona y gana su cuarta Champions femennil consecutiva', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit rhoncus nunc, cursus sollicitudin sem imperdiet in. Integer vestibulum lorem tincidunt euismod ultrices. Etiam viverra, quam at tincidunt ullamcorper, felis turpis egestas mi, sed imperdiet nulla eros et ipsum. Aenean vitae tincidunt est. In convallis eleifend odio quis commodo. Phasellus dapibus vitae magna sed convallis. In hac habitasse platea dictumst. Quisque mollis dignissim mauris pulvinar facilisis. Aliquam consequat interdum dolor vitae pellentesque. Sed tellus turpis, gravida vel vestibulum interdum, suscipit et velit. Quisque a interdum libero, at convallis ex. Morbi facilisis sapien tempus tellus efficitur, vitae dignissim odio luctus. Donec eget massa id diam commodo pharetra id quis felis. Suspendisse potenti. Sed auctor nulla ut dictum consectetur. Aenean aliquam felis non leo porttitor, ac mollis magna scelerisque.', 'LYON', '24-05-2021', '../images/7.jpg', 'deporte');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Administrator', 'admin', '$2y$10$JvoObaizTlPzIU0Jw1tAQ.oQzJTBQx/3DdkQQVXSwZMlSIX/jpJ3y', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
