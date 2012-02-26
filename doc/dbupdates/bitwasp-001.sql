--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `date_bought` date DEFAULT NULL,
  `paid` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `date_bought`, `paid`) VALUES
(1, 2, 1, '2011-04-14', 'Y'),
(2, 2, 2, '2011-04-13', 'Y'),
(3, 1, 2, '2011-04-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` int(11) DEFAULT NULL,
  `price` decimal(14,8) DEFAULT NULL,
  `images` text NOT NULL COMMENT 'Serialised Array of Product Images',
  `tiered_prices` text NOT NULL COMMENT 'Serialised Array of Prices for multiple products',
  `quantity` text NOT NULL COMMENT 'Quantity of Product Available',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `images`, `tiered_prices`, `quantity`) VALUES
(1, 'Tobacco', 0, '1.12000000', '', '', '2'),
(2, '250ml Round Bottom Flask', 0, '0.94000000', '', '', '10'),
(3, '1L Sulfuric Acid', 3, '2.23000000', '', '', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL COMMENT 'phpass Hashed Passsword',
  `public_key` mediumtext COMMENT 'Users PGP Public Key',
  `date_registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` varchar(5) NOT NULL COMMENT 'Set if user is a buyer or seller',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `public_key`, `date_registered`, `user_type`) VALUES
(1, 'Twitch', '', 'sihsduisadaufhsuifhsdiufhs==', '2011-04-10 23:00:00', 'B'),
(4, 'Beuller', '', '-----BEGIN PGP PUBLIC KEY BLOCK-----\r\nVersion: GnuPG v1.4.11 (GNU/Linux)\r\n\r\nmQENBE9JVuUBCADOR0tXf/c5pI3+LPQM1IwY8zSeHWBKVOg0spqKSvt8V1AHPIk+\r\nPDOTA7fgFph0IEwFVUwlHLt7vRKZHA81V/5zTBLRZh2QyAM4oStOLtnirlIkXWJp\r\nIQtJclI7NRcA2zC1GUCe6y+NEmCqpzM0tZ7CR3uJH6D22ws2pXJFa0L7ZuWO7vUp\r\nwY//0sNLf/M7vzyLfWBjZL86VMAhnjkN50fl3Cn9NA23ZDRlo5noJ8+XCDzMRx61\r\nt4TOKN4QUOr1u2gIhU1w0KWJofxkI7ETLZZe5DmJaWKYmZ1yfoncGlo5yzGnvtJL\r\nwpEDXaaZxzdXVJSGOB5fLwbHr4J5RjMvNF81ABEBAAG0KkRvbm5jaGEgQ2Fycm9s\r\nbCA8ZG9ubmNoYWNhcnJvbGxAZ21haWwuY29tPokBOAQTAQIAIgUCT0lW5QIbDwYL\r\nCQgHAwIGFQgCCQoLBBYCAwECHgECF4AACgkQGYSula2kAlUFCQgAksncj+OYTS9j\r\n68IkPlYo5cfOLIp1GUSuyVLCpMlg1ItrELW//KUEQ8EkYIQ7FEjJg/YnvevTiXL5\r\n10XmiPDJNSF9ef/SHkNyUtI/p+/0xr7AzqTejHQf1vZZK9cMHqbjg5lBZMvAZkid\r\nu/L/JPLHDIRGGJLwxIA5d6GGYHnbJoaqnkY+pqZWCaW19IySF4sJ/4ljymdlSLY/\r\n5kh7GOz5oygfvLxEEPEKkKkzQ5yBNdW0W8pu6zDoqw186w+Zlc1bFFj3Y48mnarb\r\n5wVwHJdpJr6bod1ocQsqy4uXa8Zh/bzQHyp1z0odj3kCKSXDJQXvueCg9rcpe7xv\r\nC+sQNlMhpQ==\r\n=PB3A\r\n-----END PGP PUBLIC KEY BLOCK-----', '2012-02-25 22:14:39', 'B');

