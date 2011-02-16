-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2011 at 11:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cijobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(7, 'Accounting and Finance'),
(8, 'Arts, Design and Media'),
(9, 'Computer and Telecomm.'),
(10, 'Engineering and Medical'),
(11, 'Customer Service'),
(12, 'Marketing and Sales'),
(13, 'Scientific'),
(14, 'Administrative'),
(15, 'Legal and Consulting'),
(16, 'Management'),
(17, 'Human Resource'),
(18, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `body` text,
  `location` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `posted` decimal(10,0) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `ipaddress` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `body`, `location`, `company`, `posted`, `type`, `category`, `email`, `url`, `ipaddress`) VALUES
(20, 'Accountant/ CPA', '* Must be a graduate of Bachelor degree in ACCOUNTANCY or any related course\r\n\n* Must be a CERTIFIED PUBLIC ACCOUNTANT\r\n\n* with at least 1 year experience in accounting\r\n\n* with experience in finance/general accounting\r\n\n* knowledgeable in accounting software is a plus\r\n\n* with pleasing personality is required\r\n\n* with good communication skills', 'Manila', 'Virtual Assistant', 1297721427, 'Full Time', 7, 'v.a@v.com', '', '127.0.0.1'),
(21, 'Accounitng Assistant', '* Must be a graduate of bachelor degree in Accountancy, financial management and any related course\r\n\n* Must have at least 6 months of experience as Accounting Assistant\r\n\n* with experience in general accounting\r\n\n* with excellent communication skills', 'Manila', 'Me and You Corp.', 1297721483, 'Full Time', 7, 'me@you.com', '', '127.0.0.1'),
(22, 'Senior PHP Developer (Urgent)', 'Senior PHP Developer\r\n\n\r\n\nMainly focussed on development of Web applications and Website. Debugging and testing of developed websites and application. Mobile knowledge is an extra plus.\r\n\n\r\n\nJob Requirements:\r\n\n* Proficient in PHP/MySQL and coding standards.\r\n\n* At least 5+ years experience in developing PHP web applications. 3 years in MySQL.\r\n\n* Has a keen eye for detail.\r\n\n\r\n\n* Proficient in coding (No Copy-&amp;-Paste Programming):\r\n\n-- WordPress plugins from scratch.\r\n\n-- Custom Content Management Systems.\r\n\n-- Custom PHP web applications.\r\n\n* Use of PHP Frameworks is a plus\r\n\n* Fluent in written and spoken English.\r\n\n\r\n\n* Experience working with online gaming systems is desirable not must\r\n\n\r\n\n* Candidates must be comfortable with providing development time estimates and meeting the deadlines at all costs\r\n\n\r\n\n* Can work independently\r\n\n\r\n\nCandidate must possess a Degree in Computer Science or equivalent. Top percentile of class is added plus.\r\n\n\r\n\nStrong background in PHP / MYSQL is a MUST. Efficient coding example needed. Creative.\r\n\n\r\n\nTo be considered for this position, please forward a cover letter and resume to the email below (to the attention of our CEO).\r\n\n\r\n\nIn addition to illustrating your skills to meet the above requirements, please also include:\r\n\n1. Salary requirement. We are competitive.\r\n\n2. Dates available to work.\r\n\n3. Interest in full/part/contract employment.\r\n\n4. How you can take over a project that is challenging and executed it.\r\n\n5. List any weakness in skills.\r\n\n6. At least 100 words as to why you want and fit this position.\r\n\n\r\n\nIncomplete application requirements will not be processed.\r\n\n\r\n\nThis is not a static posting. We will reply to you promptly if there are questions once we receive your information.\r\n\n\r\n\nWe look forward to reviewing your application and next steps.', 'Iloilo', 'Ninjas Work', 1297721566, 'Full Time', 9, 'nin@ja.com', 'http://Ninja.com', '127.0.0.1'),
(23, 'Senior Network Support Architect', '• Telecommunications and Network Services Architect responsible for the development of network solutions in support of complex business and mission requirements.\r\n\n\r\n\n• Evaluates networking technologies, software, systems, and services to develop technical solutions, keeps abreast of vendor products and services commercially available in the marketplace.\r\n\n\r\n\n• Develops and generates conceptual, logical, and physical network architectures, resulting documents and drawings, testing analyses, test plans, and risk assessments to ensure sound architecture meeting client needs.\r\n\n\r\n\n• Must demonstrate experience developing enterprise IPT &amp; VoIP designs, implementations, and migration approaches.\r\n\n\r\n\n• Must have hands on working knowledge of a wide range of network technologies in a variety of environments such as LAN, Data Center, WAN, Enterprise voice using IPT &amp; VoIP technologies, Unified Communications, Transport services, and Mobility. Knowledge and expertise across multiple vendors (ie. firewalls, switches, routers, load balancers, DNS).\r\n\n\r\n\n• Participates as a Telecommunications and Networking subject matter expert in the development of solutions in support of new business and account expansion creating strategies to win business in new markets or current accounts.\r\n\n\r\n\n• Provides tier 3 troubleshooting support with the most complex data or voice network and hardware problems; researches and analyzes significant, complex network problems that require evaluation of intangibles, such as downstream effects on client satisfaction; assesses and evaluates current and future systems.\r\n\n\r\n\n• Demonstrates experience in leading a team that analyzes, designs, troubleshoots, and implements network architectures and solutions in order to best meet client requirements; leverages resources from different teams to ensure that customer needs are met.\r\n\n\r\n\n• Determines methods and procedures to be implemented and used on the most complex new technologies to enhance performance. Determines approach for customer, based on assessment of customer needs.\r\n\n\r\n\n• Researches technological advancements to ensure that voice and data networking solutions are continuously improved, supported, and aligned with industry and company standards. Evaluates complex data or voice networking technologies to understand their potential and recommends future direction.\r\n\n\r\n\n• Design, configure and install complex network systems.\r\n\n\r\n\nBasic Qualifications\r\n\n\r\n\n•Bachelor''s degree in computer science, management information systems, or related field preferred\r\n\n\r\n\n•Candidate must be a Cisco Certified Internetwork Expert\r\n\n\r\n\n•Five (5) or more years of experience in networks, LAN/WAN or management information systems\r\n\n\r\n\n•Experience working with multiple technical platforms (e.g.; mainframe, two-tiered client-server, three-tiered client-server) and multiple network systems (e.g.; Novell, Windows NT, etc)\r\n\n\r\n\n•Experience working with network systems and networking principles, data voice or video\r\n\n\r\n\n•Experience working with network software and hardware, data, voice or video', 'Manila', 'Data Links Inc', 1297721619, 'Part Time', 9, 'hr@data.com', '', '127.0.0.1'),
(24, 'System Administrator', 'Key Requirements:\r\n\n\r\n\n• Male, between 24-30 years old\r\n\n\r\n\n• Bachelor’s degree in Computer Science/Management Information System or\r\n\n\r\n\nequivalent. Should have a good scholastic records, no failing grades\r\n\n\r\n\n• Good working experience in related field\r\n\n\r\n\n• Good Technical and Non-Technical verbal and written communication skills.\r\n\n\r\n\n• Experience in Administration of Business Application Systems\r\n\n\r\n\n• Knowledge in Microsoft SQL.\r\n\n\r\n\n• Experience in Web Development and Administration.\r\n\n\r\n\n• Knowledge in Email Configurations such as POP3,IMAP or Exchange Server would be\r\n\n\r\n\nan advantage.\r\n\n\r\n\n• Experience of design installation and maintenance of Local and Wide Area\r\n\n\r\n\nNetworks (LAN/WAN) on a multi-platform environments and desktop knowledge.\r\n\n\r\n\n• Knowledge in Virtual Private Network would be an advantage.\r\n\n\r\n\n• Knowledge of Configuration, Management, Trouble shooting of Network devices\r\n\n\r\n\n(Routers, Access Points Switches, DSL Modems, Firewalls).\r\n\n\r\n\n• Experience in Software and Hardware Troubleshooting.\r\n\n\r\n\n• IT Certifications would be an advantage.\r\n\n\r\n\n\r\n\n\r\n\nKey Responsibilities:\r\n\n\r\n\n• Maintain &amp;amp; update company website\r\n\n\r\n\n• Troubleshoots all computer breakdowns\r\n\n\r\n\n• Ensure that all computers are maintained &amp;amp; updated\r\n\n\r\n\n• Maintenance &amp;amp; Update/Enhance of the network system of the company.\r\n\n\r\n\n• Ensures that all pertinent company files have back-up\r\n\n\r\n\n• Install software programs.\r\n\n\r\n\n• Coordinates with suppliers of systems, computers, printer and other related\r\n\n\r\n\nequipment.\r\n\n\r\n\n• Recommend/Upgrades computer &amp;amp; other related equipment/gadgets for purchase.\r\n\n\r\n\n• In-charge of Centralized Network Printing\r\n\n\r\n\n• Manage, Administer, Troubleshoot all matters related to IFCA Property Plus System.\r\n\n\r\n\n• Cost analysis of branch online hook-up to property plus’ server’ present the\r\n\n\r\n\nhardware and system infrastructures; manage implementation of branch connectivity to\r\n\n\r\n\nHead office.\r\n\n\r\n\n• Propose system enhancements, modifications and improvements.\r\n\n\r\n\n• Must initiate development of management related reports; study and propose a\r\n\n\r\n\npowerful report writer software (if applicable to the existing system.)\r\n\n\r\n\n• Manage and ensure smooth program interface and posting; ensure correctness of\r\n\n\r\n\nall reports generated in the system.\r\n\n\r\n\n\r\n\n\r\n\n\r\n\n\r\n\nInterested applicants may visit our office or send their resume to:\r\n\n\r\n\n\r\n\n\r\n\nStargroup Executive Search, Inc.\r\n\n\r\n\n2F Mazda Bldg. Chino Roces Ave., Cor. Sabio St., Makati City\r\n\n\r\n\n(Entrance is the gate between Tokyo Healthlink &amp;amp; Artemis Shop)\r\n\n\r\n\n\r\n\n\r\n\n\r\n\n\r\n\nLook for Ms. Jhoye\r\n\n\r\n\n\r\n\n\r\n\nDirect Line Number: (02)894-2723\r\n\n\r\n\n', 'Manila', 'THe Net', 1297721670, 'Freelance', 9, 'netbook@a.com', '', '127.0.0.1');
