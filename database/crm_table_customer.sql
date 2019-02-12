
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `middle_name` varchar(32) COLLATE utf32_unicode_ci DEFAULT NULL,
  `last_name` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(64) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
