
-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf32_unicode_ci NOT NULL,
  `picture` blob NOT NULL,
  `quantity` int(128) NOT NULL,
  `price` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
