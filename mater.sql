CREATE TABLE IF NOT EXISTS `p_detail` (
`id` int(11) NOT NULL,
  `p_name` varchar(125) NOT NULL,
  `p_cat` varchar(125) NOT NULL,
  `p_brand` varchar(100) NOT NULL,
  `p_quant` varchar(100) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_version` varchar(100) NOT NULL,
  `p_add_user` varchar(100) NOT NULL,
  `p_add_date` date NOT NULL,
  `p_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `p_category` (
`id` int(11) NOT NULL,
  `c_name` varchar(125) NOT NULL,
  `c_version` varchar(100) NOT NULL,
  `c_add_user` varchar(100) NOT NULL,
  `c_add_date` date NOT NULL,
  `c_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `p_brand` (
`id` int(11) NOT NULL,
  `b_name` varchar(125) NOT NULL,
  `b_version` varchar(100) NOT NULL,
  `b_add_user` varchar(100) NOT NULL,
  `b_add_date` date NOT NULL,
  `b_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `u_name` varchar(125) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_phone` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_access_p` varchar(100) NOT NULL,
  `u_created_date` date NOT NULL,
  `u_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



ALTER TABLE `p_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_detail`
--
ALTER TABLE `p_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_category`
--
ALTER TABLE `p_brand`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_brand`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);
 
--
-- Indexes for table `user`
--