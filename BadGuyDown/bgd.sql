-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 08:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`) VALUES
(1, 'BGD_Admin', 'p'),
(2, 'nick', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `applied_courses`
--

CREATE TABLE `applied_courses` (
  `applied_id` int(11) NOT NULL,
  `applied_title` varchar(255) NOT NULL,
  `applied_tag` varchar(255) NOT NULL,
  `applied_prerequisites` text NOT NULL,
  `applied_linfo` text NOT NULL,
  `applied_learn` text NOT NULL,
  `applied_equipment` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_courses`
--

INSERT INTO `applied_courses` (`applied_id`, `applied_title`, `applied_tag`, `applied_prerequisites`, `applied_linfo`, `applied_learn`, `applied_equipment`, `update_timestamp`) VALUES
(1, 'Applied Pistol', '', '', '', '', '', 0),
(2, 'Applied Revolver', '', '', '', '', '', 0),
(3, 'Applied Carbine', '', '', '', '', '', 0),
(4, 'Applied Shotgun', '', '', '', '', '', 0),
(5, 'Applied Precision Rifle', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `boss_courses`
--

CREATE TABLE `boss_courses` (
  `boss_id` int(11) NOT NULL,
  `boss_title` varchar(255) NOT NULL,
  `boss_tag` varchar(255) NOT NULL,
  `boss_info` text NOT NULL,
  `boss_learn` text NOT NULL,
  `boss_equipment` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boss_courses`
--

INSERT INTO `boss_courses` (`boss_id`, `boss_title`, `boss_tag`, `boss_info`, `boss_learn`, `boss_equipment`, `update_timestamp`) VALUES
(1, 'Basics of Safe Shooting (B.o.S.S.)', '', 'The B.o.S.S. Course teaches shooters proper safety, conduct, and ettiquete while carrying and using a firearm on the range and in public.\r\n\r\nPLEASE NOTE: If you have never trained under a professional shooting instructor, this course is REQUIRED prior to attending any other shooting courses. (Sorry, CCW does not count).\r\n\r\nCourse Length: 3 hours.\r\n\r\nPrice: $20.', '.The Big 4 Rules of Gun Safety.\r\nRange Ettiquete and Commands.\r\nCarrying a Gun on/off the Range.\r\nEquipment Placement on Belt.\r\nWorking from a Holster at the Range.\r\nWorking with a Slung Long Gun.\r\nTactical Body Posture and Grip.\r\nLoading, Reloading, Unloading.\r\nBasic Marksmanship.\r\nReal-world Personal Security Concepts', '.Semi-Automatic pistol or revolver.\r\nOutside-the-Waistband Holster (NO Shoulder Harness or Cross-Draw holsters).\r\n100 Rounds of FMJ ammunition.\r\nEye and Ear Protection.\r\n*ALL EQUIPMENT CAN BE RENTED OR PURCHASED AT CLASS', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `ccw_courses`
--

CREATE TABLE `ccw_courses` (
  `ccw_id` int(11) NOT NULL,
  `ccw_title` varchar(255) NOT NULL,
  `ccw_tag` varchar(255) NOT NULL,
  `ccw_prerequisites` text NOT NULL,
  `ccw_info` text NOT NULL,
  `ccw_learn` text NOT NULL,
  `ccw_equipment` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ccw_courses`
--

INSERT INTO `ccw_courses` (`ccw_id`, `ccw_title`, `ccw_tag`, `ccw_prerequisites`, `ccw_info`, `ccw_learn`, `ccw_equipment`, `update_timestamp`) VALUES
(1, 'Missouri CCW', '', '', 'Our certified CCW course focuses on the safe, legal, and effective use of handguns for self-defense.\r\n\r\nLearn all you want about pistols and revolvers, self-defense laws, gun maintenance, mindset, advanced shooting techniques and marksmanship.\r\n\r\nLearn how to shoot with extreme accuracy and find out what to do if you are ever forced to defend yourself.\r\n\r\nHow do you link up with police officers after a shooting and not put yourself or others in danger?\r\n\r\nWhat should we NOT say when calling 911?\r\n\r\nIf you defend yourself incorrectly, YOU CAN LOSE YOUR FREEDOM, YOUR MONEY, AND/OR YOUR LIFE!\r\n\r\nThere IS a difference between having a permit and not; please don\'t find that out the hard way!\r\n', '', '', 2147483647),
(2, 'Deep Concealment - Advanced Carry Tactics', '', '.Basics of Safe Shooting\r\n.CCW', '.Course Length: 4 hours\r\n.Price: $59', '.Concealment Methods and Gear\r\n.Concealed Carry on a Protective Security Detail Team\r\n.Deep Concealment Draw Techniques\r\n.De-confliction with Other Sheepdogs\r\n.Identification Methods for Low-Profile Security Personnel', '.CCW Pistol or Revolver\r\n.IWB holster, ankle holster, concealment clothing, purse, pack, or other concealed carry holster method (Shoulder harness, cross-draw, or middle-of-the-back carry IS allowed, but will be HIGHLY controlled)\r\n.200 Rounds of FMJ ammunition\r\n.2 magazines, minimum\r\n.Cover garment (jacket or long shirt)\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `guest_instructors`
--

CREATE TABLE `guest_instructors` (
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(255) NOT NULL,
  `instructor_image` text NOT NULL,
  `instructor_info` text NOT NULL,
  `instructor_link` varchar(255) NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_instructors`
--

INSERT INTO `guest_instructors` (`instructor_id`, `instructor_name`, `instructor_image`, `instructor_info`, `instructor_link`, `update_timestamp`) VALUES
(3, 'John Doe', 'images/rifle-pose.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper enim a elit pharetra, nec imperdiet nunc placerat. Ut eget blandit felis. Proin in consequat urna, et aliquet nunc. Mauris eleifend euismod consectetur. Phasellus ut turpis a nunc dapibus sagittis. Duis tincidunt nisl erat, eget molestie sapien laoreet a. Curabitur in mi feugiat dui scelerisque eleifend. Donec volutpat tellus ac nibh blandit malesuada. Praesent fringilla mauris vel finibus feugiat.', 'https://www.vagaro.com/badguydowntraining/classes?ig_fbb=true', 1557764874);

-- --------------------------------------------------------

--
-- Table structure for table `pistol_courses`
--

CREATE TABLE `pistol_courses` (
  `pistol_id` int(11) NOT NULL,
  `pistol_title` varchar(255) NOT NULL,
  `pistol_tag` varchar(255) NOT NULL,
  `pistol_prerequisites` text NOT NULL,
  `pistol_info` text NOT NULL,
  `pistol_learn` text NOT NULL,
  `pistol_equipment` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pistol_courses`
--

INSERT INTO `pistol_courses` (`pistol_id`, `pistol_title`, `pistol_tag`, `pistol_prerequisites`, `pistol_info`, `pistol_learn`, `pistol_equipment`, `update_timestamp`) VALUES
(1, 'Pistol 1: Working from the Holster like a Pro', 'Pistol 1', '.Basics of Safe Shooting', 'You\'ve learned the basics. Now it\'s time to get to work earning your place as a real gun-totin\' shooter. This is real-world skills people.<br />\r\nCourse Length: 8 hours<br />\r\nPrice: $99', '.Grip<br />\r\n.Stance<br />\r\n.The Draw Stroke<br />\r\n.The 5 Controls of Marksmanship<br />\r\n.Extreme Close Quarters Draw<br />\r\n.Instinctive Shooting vs. Precision Shooting<br />\r\n.Dry Fire Drills for Home<br />\r\n.Fixing Pistol Malfunctions in a Gun Fight<br />\r\n.Fast Reloads vs. Good Reloads<br />\r\n.Cover and Concealment', '.Semi-Automatic pistol<br />\r\n.OWB Holster (NO Shoulder Harness or Cross-Draw)<br />\r\n.300 Rounds of round-nose (FMJ) ammunition<br />\r\n.3 magazines for your pistol (Minimum)<br />\r\n.Magazine Pouch (or other way to hold extra magazines)<br />\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)<br />\r\n.Weather appropriate clothing', 1557617446),
(2, 'Pistol 2: Shooting, Moving, Speed, and Multiples', 'Pistol 2', '.Basics of Safe Shooting\r\n.Pistol 1', 'Course Length: 8 hours\r\n\r\nPrice: $99', '.Advanced Shooting Positions\r\n.Malfunctions and Reloads on the Move\r\n.Working with Cover\r\n.Marksmanship While Moving\r\n.Speeding up the Draw/First Hit\r\n.Medium/Long Distance Shooting\r\n.360 degree Engagements\r\n.Multiple Threat Tactics\r\n.Shoot/No Shoot, Limited Input Shooting\r\n.How to Improve Shot-to-Shot Times', '.Semi-Automatic pistol\r\n.OWB Holster (NO Shoulder Harness or Cross-Draw)\r\n.400 Rounds of FMJ ammunition\r\n.3 magazines for your pistol (Minimum)\r\n.Magazine Pouch\r\n.Eye and Ear Protection\r\n.Weather appropriate clothing', 2147483647),
(3, 'Pistol 3: Stress Inoculation, Teamwork & Qualification', 'Pistol 3', '.Basics of Safe Shooting<br />\r\n.Pistol 1<br />\r\n.Pistol 2<br />\r\n.PRE-TEST', 'Course Length: 8 hours<br />\r\nPrice: $99', '.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET', '.Semi-Automatic pistol<br />\r\n.OWB Holster (NO Shoulder Harness or Cross-Draw)<br />\r\n.400 Rounds of FMJ ammunition<br />\r\n.3 Magazines for your pistol (Minimum)<br />\r\n.Magazine Pouch<br />\r\n.Eye and Ear Protection<br />\r\n.Weather appropriate clothing<br />\r\n.*YOU WILL WANT TO BE SOMEWHAT PHYSICALLY FIT FOR THIS COURSE<br />\r\n', 1557540219),
(4, 'Performance Pistol: Crush the Competition', 'Performance Pistol', '.Basics of Safe Shooting<br />\r\n.Pistol 1<br />\r\n.Pistol 2', '*THIS IS A DRILL-HEAVY COURSE AND IS DESIGNED TO WORK THE SHOOTER EXTENSIVELY ON COMPETITIVE SKILLS*<br />\r\nCourse Length: 8 hours<br />\r\nPrice: $99', '.Alternative Draw Drills<br />\r\n.IDPA Rules vs. Real World Rules<br />\r\n.Faster Hit Times<br />\r\n.Accuracy Improvement Drills<br />\r\n.Controlling Body Movement and Stress<br />\r\n.Head-to-Head Competition<br />\r\n.Sample IDPA and IPSC Stages<br />\r\n.Recoil Harmonics and Rhythm', '.Semi-Automatic Pistol<br />\r\n.OWB Holster (Race-holsters OK, No cross-draw or shoulder harness)<br />\r\n.600 Rounds of FMJ ammunition<br />\r\n.5 Magazines for your gun<br />\r\n.2 Magazine Pouches<br />\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)', 1557542544),
(5, 'Revolver: Mastering the Wheel Gun', 'Revolver', '.Basics of Safe Shooting', 'Course Length: 8 hours<br />\r\nPrice: $99', '.Intro to the Revolver as a Fighting Gun<br />\r\n.Snubbies vs. Large Frames<br />\r\n.Carry Ammo Recommendations<br />\r\n.Grip<br />\r\n.Draw<br />\r\n.Reloads<br />\r\n.Contact Shooting<br />\r\n.Pocket/Pack Shooting<br />\r\n.Distance Shooting with a Small Revolver', '.Any Revolver, Single or Double Action (No Nuclear Calibers, please)<br />\r\n.300 Rounds of FMJ ammunition<br />\r\n.Speed loader or Speed Strips for your Revolver<br />\r\n.OWB holster<br />\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)', 1557770845);

-- --------------------------------------------------------

--
-- Table structure for table `response_courses`
--

CREATE TABLE `response_courses` (
  `response_id` int(11) NOT NULL,
  `response_title` varchar(255) NOT NULL,
  `response_tag` varchar(255) NOT NULL,
  `response_prerequisites` text NOT NULL,
  `response_info` text NOT NULL,
  `response_learn` text NOT NULL,
  `response_equipment` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response_courses`
--

INSERT INTO `response_courses` (`response_id`, `response_title`, `response_tag`, `response_prerequisites`, `response_info`, `response_learn`, `response_equipment`, `update_timestamp`) VALUES
(1, 'Vehicle Counter-Ambush Tactics: The Car is Down, You Are Not', 'Vehicle Counter', '.Pistol 2', 'We live in a very mobile world and we spend a lot of time in our vehicles. Do you know what to do if you are attacked in your vehicle? What if you unknowingly drive into the midst of a violent protest or mob? What if you had your children with you? Would you know what to do? Could you do it?<br />\r\nCourse Length: 8 hours<br />\r\nPrice: $99', '.Park your vehicle for the best escape<br />\r\n.Fight in/around vehicles<br />\r\n.Use vehicles for cover/concealment<br />\r\n.Engage threats from inside your vehicle<br />\r\n.Mount/Dismount Disabled Vehicle During Fight<br />\r\n.Work with a teammate to escape an ambush', '.A semi-automatic pistol<br />\r\n.300 Rounds of FMJ ammunition<br />\r\n.OWB Holster (NO cross-draw or shoulder harnesses)<br />\r\n.Mechanix-Style or Shooting Gloves<br />\r\n.Knee pads (Recommended)<br />\r\n.Magazine pouch for extra magazines (recommended)<br />\r\n.Eye and ear protection (Electronic Ear Pro Recommended)', 1557580171);

-- --------------------------------------------------------

--
-- Table structure for table `rifle_courses`
--

CREATE TABLE `rifle_courses` (
  `rifle_id` int(11) NOT NULL,
  `rifle_title` varchar(255) NOT NULL,
  `rifle_tag` varchar(255) NOT NULL,
  `rifle_prerequisites` text NOT NULL,
  `rifle_info` text NOT NULL,
  `rifle_learn` text NOT NULL,
  `rifle_equipment` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rifle_courses`
--

INSERT INTO `rifle_courses` (`rifle_id`, `rifle_title`, `rifle_tag`, `rifle_prerequisites`, `rifle_info`, `rifle_learn`, `rifle_equipment`, `update_timestamp`) VALUES
(1, 'Carbine 1: Intro to the Carbine', 'Carbine 1', '.Basics of Safe Shooting', 'Carbine 1 is open to new and experienced AR-15 operators and we start by laying a solid foundation in the fundamentals of good manipulation and handling habits, marksmanship, and tactics.\r\n\r\nCourse Length: 8 hours\r\n\r\nPrice: $99', '.Introduction to the AR-15 Carbine\r\n.How to Zero your Carbine\r\n.Holds and Shooting Positions\r\n.5 Controls of Marksmanship\r\n.Using iron sights and optics\r\n.Using iron sights and optics\r\n.Dry Fire Drills\r\n.Psychology and Physiology of Combat\r\n.Dry Fire Drills\r\n.Malfunction Recoveries\r\n.Reloads\r\n.Working Cover and Concealment\r\n', '.AR-15 or M4 Variant with sling (Bullpups are fine)\r\n.300 Rounds of FMJ ammunition\r\n.3 30-round magazines minimum\r\n.A magazine pouch or chest-rig/plate carrier (Not required, but recommended)\r\n.Athletic or tactical shoes/boots\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)', 2147483647),
(2, 'Carbine 2: Shoot, Move, Shoot, Move, Shootâ€¦', 'Carbine 2', '.Basics of Safe Shooting<br />\r\n.Carbine 1', 'Course Length: 8 hours<br />\r\nPrice: $99', '.Perfecting Carbine 1 base skills<br />\r\n.Movement drills<br />\r\n.Use of unique shooting positions for cover and stability<br />\r\n.Transitions to secondary (sidearm) and back-transitions<br />\r\n.Complex shooting/reloading/malfunction scenarios<br />\r\n.Working with a partner for basic team movements', '.AR15 or M4 variant Carbine (Bullpups are okay)<br />\r\n.500 Rounds of FMJ ammo (Less is workable...)<br />\r\n.You MUST HAVE a properly fitted 1, 2, OR 3-point sling)<br />\r\n.3 30-Round magazines for your rifle (minimum)<br />\r\n.Mag pouch or chest rig (recommended, not required)<br />\r\n.Kneepads (recommended, not required)<br />\r\n.Sidearm with OWB holster, 2 extra pistol mags, mag pouch, 100 rounds of FMJ ammunition<br />\r\n.Eye and ear protection (Electronic Ear Pro Recommended)', 1557591051),
(3, 'Carbine 3: Stress Inoculation, Teamwork & Qualification', 'Carbine 3', '.Basics of Safe Shooting<br />\r\n.Carbine 1<br />\r\n.Carbine 2<br />\r\n.PRE-TEST', 'Course Length: 8 hours<br />\r\nPrice: $99', '.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET<br />\r\n.SECRET', '.AR15 or M4 variant Carbine (Bullpups are okay)<br />\r\n.500 Rounds of FMJ ammo<br />\r\n.You MUST HAVE a properly fitted 1, 2, OR 3-point sling)<br />\r\n.4 30-round magazines for your rifle (minimum)<br />\r\n.Mag pouch or chest rig (recommended, not required)<br />\r\n.Kneepads (recommended, not required)<br />\r\n.Sidearm with OWB holster, 2 extra pistol mags, mag pouch, 100 rounds of FMJ ammunition<br />\r\n.Eye and ear protection (Electronic Ear Pro Recommended)', 1557591172),
(4, 'Scoped Rifle 1: The Mechanics of Reach-Out', 'Scoped Rifle 1', '.Basics of Safe Shooting', 'Course Length: 8 hours<br />\r\nPrice: $99', '.Equipment selection and setup<br />\r\n.Types of scopes (MIL, MOA, BDC, etc.) and Setup<br />\r\n.Using Ballistic Calculation Equipment<br />\r\n.Ballistics and Things Effecting Ballistics<br />\r\n.Establishing a Zero<br />\r\n.Wind reading basics<br />\r\n.Gathering Rifle Data for Ballistic Calculations<br />\r\n.Target Engagement out to Known Distance of 350 Meters<br />\r\n.Recording DOPE', '.A Scoped Rifle w/ Bipod (or Bag Rest)<br />\r\n.A Notepad and Pen for DOPE (DOPE book recommended)<br />\r\n.100 Rounds of Match-Grade Ammunition<br />\r\n.Squeeze Bag Recommended, Not Required<br />\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)', 1557591282),
(5, 'Scoped Rifle 2: Real-time Reach-out', 'Scoped Rifle 2', '.Basics of Safe Shooting<br />\r\n.Scoped Rifle 1', 'Course Length: 8 hours<br />\r\nPrice: $99', '.In-depth Recap of Scoped Rifle 1<br />\r\n.A deep understanding of atmospheric variables affecting precision shooting<br />\r\n.Exhaustive Ballistics<br />\r\n.Faster Engagement of Targets<br />\r\n.Target Engagements out to UNKNOWN Distances up to 600 Meters', '.A Scoped Rifle w/ Bipod (or Bag Rest)<br />\r\n.A Notepad and Pen for DOPE (DOPE book recommended)<br />\r\n.100 Rounds of Match-Grade Ammunition<br />\r\n.Squeeze Bag Recommended, Not Required<br />\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)', 1557591372),
(6, 'Scoped Rifle 3: Extreme Reach-out', 'Scoped Rifle 3', '.Basics of Safe Shooting<br />\r\n.Scoped Rifle 1<br />\r\n.Scoped rifle 2', 'Course Length: 8 hours<br />\r\nPrice: $99', '.In-depth Recap of Scoped Rifle 2<br />\r\n.Distances Move out to 1000+ meters<br />\r\n.Working with a Spotter<br />\r\n.Being a Spotter', '.A Scoped Rifle Capable of Extreme Distances w/ Bipod (or Bag Rest)<br />\r\n.Rifle Must Be Zeroed Prior, We WILL NOT ZERO RIFLES AT THIS COURSE<br />\r\n.Anything you need to be out ALL DAY. To reach the distances needed for this course you may be far from civilization<br />\r\n.A Notepad and Pen for DOPE (DOPE book recommended)<br />\r\n.100 Rounds of Match-Grade Ammunition<br />\r\n.Squeeze Bag Recommended<br />\r\n.Eye and Ear Protection (Electronic Ear Pro Recommended)', 1557591472);

-- --------------------------------------------------------

--
-- Table structure for table `shotgun_courses`
--

CREATE TABLE `shotgun_courses` (
  `shotgun_id` int(11) NOT NULL,
  `shotgun_title` varchar(255) NOT NULL,
  `shotgun_tag` varchar(255) NOT NULL,
  `shotgun_prerequisites` text NOT NULL,
  `shotgun_info` text NOT NULL,
  `shotgun_learn` text NOT NULL,
  `shotgun_equipment` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shotgun_courses`
--

INSERT INTO `shotgun_courses` (`shotgun_id`, `shotgun_title`, `shotgun_tag`, `shotgun_prerequisites`, `shotgun_info`, `shotgun_learn`, `shotgun_equipment`, `update_timestamp`) VALUES
(1, 'Home Defense Shotgun', 'Home Defense Shotgun', '.Basics of Safe Shooting', 'Widely accepted as the most effective home defense weapon in existence, the shotgun is the last thing a home invader wants to run into.<br />\r\nThis 5-hour course will bring new and experienced shotgunners up to a better understanding of the tried-and-true scattergun.', '.Shotgun Safe Handling Practices<br />\r\n.Chokes tubes and their applications<br />\r\n.Different shot numbers and sizes<br />\r\n.Patterning<br />\r\n.Stance<br />\r\n.Grip<br />\r\n.Proper Aiming Techniques<br />\r\n.Working the Action<br />\r\n.Workspace<br />\r\n.Loading & Unloading<br />\r\n.Combat/Speed Loads', '.A pump action shotgun is recommended for this course, but if you have a semi-automatic, it will work fine<br />\r\n.50-100 rounds of birdshot (#6-9 shot)<br />\r\n.5 buckshot<br />\r\n.5 slugs<br />\r\n.Eye and Ear protection', 1557694535);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_courses`
--
ALTER TABLE `applied_courses`
  ADD PRIMARY KEY (`applied_id`);

--
-- Indexes for table `boss_courses`
--
ALTER TABLE `boss_courses`
  ADD PRIMARY KEY (`boss_id`);

--
-- Indexes for table `ccw_courses`
--
ALTER TABLE `ccw_courses`
  ADD PRIMARY KEY (`ccw_id`);

--
-- Indexes for table `guest_instructors`
--
ALTER TABLE `guest_instructors`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `pistol_courses`
--
ALTER TABLE `pistol_courses`
  ADD PRIMARY KEY (`pistol_id`);

--
-- Indexes for table `response_courses`
--
ALTER TABLE `response_courses`
  ADD PRIMARY KEY (`response_id`);

--
-- Indexes for table `rifle_courses`
--
ALTER TABLE `rifle_courses`
  ADD PRIMARY KEY (`rifle_id`);

--
-- Indexes for table `shotgun_courses`
--
ALTER TABLE `shotgun_courses`
  ADD PRIMARY KEY (`shotgun_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applied_courses`
--
ALTER TABLE `applied_courses`
  MODIFY `applied_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boss_courses`
--
ALTER TABLE `boss_courses`
  MODIFY `boss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ccw_courses`
--
ALTER TABLE `ccw_courses`
  MODIFY `ccw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guest_instructors`
--
ALTER TABLE `guest_instructors`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pistol_courses`
--
ALTER TABLE `pistol_courses`
  MODIFY `pistol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `response_courses`
--
ALTER TABLE `response_courses`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rifle_courses`
--
ALTER TABLE `rifle_courses`
  MODIFY `rifle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shotgun_courses`
--
ALTER TABLE `shotgun_courses`
  MODIFY `shotgun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
