-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 07:48 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizbuzz`
--
CREATE DATABASE IF NOT EXISTS `quizbuzz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quizbuzz`;

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `id` int(3) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `score` int(3) NOT NULL,
  `user_id` int(5) NOT NULL,
  `time` varchar(20) NOT NULL,
  `no` int(2) NOT NULL,
  `topic_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`id`, `file_name`, `score`, `user_id`, `time`, `no`, `topic_id`) VALUES
(4, 'questionlist.txt', 10, 101, '1475211702', 6, 0),
(5, 'questionlist7.txt', 111, 7, '1475673761', 10, 9),
(16, 'questionlist3.txt', 46, 3, '1475690887', 10, 9),
(19, 'questionlist5.txt', 153, 5, '1475731923', 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question` text NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `ans` int(1) NOT NULL,
  `topic_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `topic_id`) VALUES
(13, 'Which Household possesses the banner of a moon and a falcon?', 'House Greyjoy', 'House Arryn', 'House Lannister', 'House Karstark', 2, 8),
(14, 'Who was the first to stab Jon Snow in the Season 5 finale?', 'Bowen Marsh', 'Denys Mallister', 'Olly', 'Alliser Thorne', 4, 8),
(16, 'What was the name of Arya''s direwolf?', 'Lady', 'Grey Wind', 'Summer', 'Nymeria', 4, 8),
(17, 'What were the names of Aegon Targaryen''s three dragons that Dany named her ships after?', 'Balerion, Drogon, and Viserion', 'Meraxes, Rhaegal, and Vhagar', 'Rhaegal, Drogon, and Viserion', 'Meraxes, Vhagar, and Balerion', 4, 8),
(23, 'Who said, "A very small man can cast a very large shadow"?', 'Tyrion Lannister', 'Pycelle', 'Petyr Baelish', 'Lord Varys', 4, 8),
(24, 'Why was Jorah Mormont exiled from Westeros?', 'For trading slaves', 'For killing his wife', 'For buying slaves', 'For being a slave', 1, 8),
(25, 'What did Tywin give his grandson Joffrey during the royal wedding?', 'A book "The Lives of Four Kings ".', 'Seven gold bars', 'Valyrian steel Sword', 'Iphone 7', 3, 8),
(26, 'Who is the father of Loras Tyrell?', 'Willas', 'Garlan', 'Mace', 'Barristan', 3, 8),
(33, 'Where did Lady Talisa come from?', 'Riverrun', 'Astapor', 'Pentos', 'Volantis', 4, 8),
(34, 'What was the name of Ned Stark Valyrian steel sword?\r\n', 'Ice', 'Longclaw', 'Hearteater', 'Needle', 1, 8),
(35, 'Who does Dany name her dragon''s after?', 'She made them up', 'She named them after Aegon''s dragons', 'Her brother, father, and husband', 'Her husband and two brothers', 4, 8),
(36, 'Who returns Tyrion Lannister''s purse of gold upon his release from Catelyn Stark?', 'Catelyn Stark', 'Bronn', 'Ser Rodrik Cassel', 'Lysa Stark', 3, 8),
(37, 'What did the duck eat that made him sick?', 'Peanut butter', 'Nutter Butter', 'Rachel''s face cream', 'Chandler''s shaving cream', 3, 9),
(38, ' What card did Joey think was stolen by the guy who robbed the apartment?', 'Seven of spades', 'Five of spades', 'Ten of clubs', 'Eight of hearts', 2, 9),
(39, 'How many blocks was Rachel''s childhood dog LaPooh dragged?', '18', '19', '17', '13', 2, 9),
(41, 'In The One With All the Resolutions Joey wants to learn how to play guitar. Which of the following is NOT one of the chord shapes that Phoebe teaches him?', 'Old lady', 'Iceberg', 'Dragon', 'Lion', 4, 9),
(42, 'In Season 2, who is the manager of Central Perk?', 'Jerry', 'Gunther', 'Terry', 'John', 3, 9),
(43, 'In The One With the Lottery what is the power ball number?', '3', '4', '5', '7', 4, 9),
(44, 'Which actor plays Joey?', 'Matt Tribiani', 'Matt LeBlan', 'Mathew Perry', 'Matt LeBlanc', 4, 9),
(45, 'How did Phoebe''s mother die?', 'She got mugged and shot', 'She got hit by a cab', 'She killed herself', 'She burned in Phoebe''s flat', 3, 9),
(46, 'What is Joey''s Chat-up line?', 'Hey, baby!', 'How you doing?', 'I drive a Porsche!', 'How''s it going baby?', 2, 9),
(47, 'Which of the friends has a biological son by the end of the series?', 'Ross and Monica', 'Rachel and Ross', 'Phoebe, Ross, ', 'Ross, Monica and Chandler', 4, 9),
(48, 'Who was Rachel dating when she turned 30 years old?', 'Tag', 'Ross', 'Chip', 'Paul', 1, 9),
(49, ' What is the name of the Bartender in Central Perk?', 'GUNTER', 'John', 'Gunther', 'Gunsher', 3, 9),
(50, 'How many series have there been?', '9', '12', '10', '8', 3, 9),
(53, 'Former Australian captain Mark Taylor has had several nicknames over his playing career. Which of the following was NOT one of them?', 'Tubby', 'Stodge', 'Helium Bat', 'Stumpy', 4, 10),
(54, 'Which was the 1st non Test playing country to beat India in an international match?', 'Canada', 'Srilanka', 'Zimbabwe', 'East Africa', 2, 10),
(55, 'Track and field star Carl Lewis won how many gold medals at the 1984 Olympic games?', 'Two', 'Three', 'Four', 'Eight', 3, 10),
(56, 'Which county did Ravi Shastri play for?', 'Glamorgan', 'Leicestershire', 'Gloucestershire', 'Lancashire', 1, 10),
(57, 'Who was the first Indian to win the World Amateur Billiards title?', 'Geet Sethi', 'Wilson Jones', 'Michael Ferreira', 'Manoj Kothari', 2, 10),
(58, 'Who is the first Indian woman to win an Asian Games gold in 400m run?', 'M.L.Valsamma', 'P.T.Usha', 'Kamaljit Sandhu', 'K.Malleshwari', 3, 10),
(59, 'Standard cricket bats are made of?', 'Pine wood ', 'Rose wood ', 'Teak wood ', 'Willow wood ', 4, 10),
(60, 'India''s Saina Nehwal created a hattrick by winning third super series title. Whom did she defeat in Indonesia Open Super Series ? ', 'China ', 'Indonesia ', 'Japan ', 'Pakistan ', 3, 10),
(61, 'With which game is Geet Sethi associated ? ', 'Lawn Tennis ', 'Kabaddi ', 'Billiards ', 'Squash ', 3, 10),
(62, 'The most popular game in the United States of America is?', 'Baseball ', 'Cricket ', 'Hockey ', 'Lawn Tennis ', 1, 10),
(63, 'Who won the men''s single title in the Brisbane International Tennis played in January 2010 ? ', 'Andy Roddick ', 'Rafael Nadal ', 'Ivan Ljubicic ', 'Mikhail Youzhny ', 1, 10),
(64, '5th World Military Games held in 2011 at? ', 'Beijing (China) ', 'Lisbon (Portugal) ', 'Rio de Janeiro (Brazil) ', 'Istanbul (Turkey) ', 3, 10),
(65, 'Who is the first cricket player from Kerala to make a test debut ? ', 'T. Krishnan ', 'T. S. Shekar ', 'T. Yohannan ', 'R. Somasunder ', 3, 10),
(66, 'Which of the following won Wimbledon Lawn Tennis menâ€™s singles title for 2010 ? ', 'Roger Federer ', 'Andy Roddick ', 'Marat Safin ', 'Rafael Nadal ', 4, 10),
(67, 'Who won the 60th Senior National Basketball Championship played in January 2010 ? ', 'Tamil Nadu ', 'Indian Railways ', 'Andhra Pradesh ', 'Orissa ', 2, 10),
(68, 'Who are the man and woman winners of the singles title in French Open Lawn Tennis Tournament held in Paris in June 2010 ? ', 'Rafael Nadal & Francesca Schiavone ', 'Pete Sampras & Serena Williams ', 'Rafael Nadal & Justine Henin Hardenne ', 'Peter Sampras & Venus Williams ', 3, 10),
(69, ' Which of the following event was dropped from the olympics ? ', 'Polo ', 'Football ', 'Hockey ', 'Tennis ', 1, 10),
(70, ' Who is the youngest world champion in the history of Formula One Races to-late ? ', 'Felipe Massa ', 'Robert Kubic ', 'Kimi Raikkonen ', 'Lewis Hamilton ', 4, 10),
(71, 'Which place has been given to Indias ace cricketer Mahendra Singh Dhoni in ICC ranking in April 2010 ? ', '4th', '3rd', '1st', '2nd', 3, 10),
(72, 'Total number of gold medal won by indian hockey Team in olympics?', '8', '12', '6', '9', 8, 10),
(73, 'Who among the following is known as flying Sikh of  india?', 'Kapil dev', 'PT usha', 'Milkha singh', 'Joginder Singh', 3, 10),
(74, 'In which Stadium Tendulkar completed his 100th Century?', 'Eden Garden', 'Shere Bangla Stadium', 'Firoz Shah Kotla Ground', 'None of the above', 2, 10),
(75, 'Who was Indias First Football Caption?', 'P K Banerjee', 'Shailen Manna', 'SC Goswami', 'Talimeren Ao', 4, 10),
(76, 'Sachin Tendulkar score his first century after playing?', '56 matches', '45 matches', '78 matches', '35 matches', 3, 10),
(77, 'Who is the only and first indian player to compete six Olympic games?', 'Karni Singh', 'Randhir Singh', 'Leander Paes', 'Mahesh Bhupati', 3, 10),
(78, 'A baby chicken''s first home is called a?', 'Home', 'Nest', 'Brooder', 'Albatross', 3, 11),
(79, 'Which animal can create the loudest sound among any living creature?', 'Whale shark', 'Gibbon', 'Humpback Whales', 'Howler monkey', 3, 11),
(80, 'Which animal has the scientific name bufo bufo?', 'Frog', 'Common toad', 'Newt', 'Grass snake', 2, 11),
(81, 'Which bird is often called the man-o-war?', 'Frigatebird', 'Seagull', 'Penguin', 'Eagle', 1, 11),
(82, 'What is the fastest of all the birds?', 'Blood pheasant', 'Swift', 'Sparrow', 'None', 2, 11),
(83, 'What playful semi-a quatic is distinguished for having the thickest fur in the animal kingdom?', 'Seal', 'Sea otter', 'Beaver', 'Chinchilla', 2, 11),
(84, 'How many bones do sharks have in their bodies?', '305', '0', '251', '201', 2, 11),
(85, 'Which one of the following is not true fish?', 'Silver fish', 'Saw fish', 'Hammer fish', 'Sucker fish', 4, 11),
(86, 'Which large marine mammal is also known as a cachalot?', 'Nurse shark', 'Alligator', 'Beaver', 'Sperm whale', 4, 11),
(87, 'Which is the heaviest animal on earth land?', 'Hippopotamus', 'African Elephant ', 'Gorilla', 'Anaconda', 2, 11),
(88, 'Which one of the following have no skeleton at all?', 'Star fish', 'Sponge', 'Jelly fish', 'Silver fish', 3, 11),
(89, 'which of the following animals is not a reptile?', 'Alligator', 'Snake', 'Frog', 'Turtle', 3, 11),
(90, 'How many year cat can live up to?', '12', '20', '35', '25', 2, 11),
(91, 'Which animal exclusively eat only eucalyptus leaves and nothing else?', 'Koala', 'Greater glider', 'Common wombat', 'Kangaroo', 1, 11),
(92, 'Cows can see colors,except for a specific one.what color are cows not able to see?', 'Green', 'Yellow', 'Red', 'Brown', 3, 11),
(93, 'The koala bear prefers to feed on the leaves of which tree?', 'Pine', 'Eucalyptus', 'Teak', 'Puff adder', 2, 11),
(94, 'which is the only bird that can fly backwards?', 'Sunbird', 'Kingfisher', 'Honey eater', 'Hummingbird', 4, 11),
(95, 'Which is the longest snake in the world?', 'Black mamba', 'Puff adder', 'Reticulated python', 'Anaconda', 3, 11),
(96, 'Name the bird which fly from the north pole to the south pole and back?', 'Swallow', 'Crane', 'Arctic tern', 'Penguin', 3, 11),
(97, 'Which living bird lays the world''s largest egg?', 'Eagle', 'Ostrich', 'Owl', 'Vulture', 2, 11),
(98, 'What is Harry Potters Middle name?', 'Dudley', 'Ronald', 'James', 'Weasley', 3, 12),
(99, 'What is Hermione Grangers middle name?', 'Katherine', 'Jean', 'Sara', 'Lyndsay', 2, 12),
(100, 'What is Ronald Weasleys Middle name?', 'Donald', 'Harold', 'Dean', 'Bilius', 4, 12),
(101, 'What are the items that you must process to become "Master of Death"?', 'Resturring Stones', 'Pheniox wand', 'The deathly hallows', 'Magic stick', 1, 12),
(102, 'Who becomes master of death?', 'Aberforth Dumbledore', 'Death itself', 'Harry Potter', 'Albus Dumbledore', 3, 12),
(103, 'What is Harry''s birthday?', 'July 31st', 'September 1st', 'Febuary 3rd', 'November 5th', 1, 12),
(104, 'From which platform does the Hogwarts express leave?', '10', '9', '8¾', '9¾', 0, 12),
(105, 'What is Dolores Umbrigdes Favorite Color?', 'Red', 'Pink', 'Purple', 'Blue', 2, 12),
(106, 'Who is in the main group of harry potter?', 'Fred And George', 'Ronald', 'Draco', 'Voldemort', 2, 12),
(107, 'What is Snapes Patrounus?', 'Buck', 'Doe', 'Swan', 'Bat', 2, 12),
(108, 'What is the name of Bellatrix husband?', 'Albert Lestrange', 'Rolphius Lestrange', 'Adolph Lestrange ', 'Rodolphus Lestrange', 4, 12),
(109, 'What class did Neville end up teaching at Hogwarts?', 'Astronomy', 'Muggle Studies', 'Herbology', 'Charms', 3, 12),
(110, 'What''s the name of Tonks and Lupin''s son?', 'Theodore', 'Lyall', 'James', 'Edward', 4, 12),
(111, 'Which class did Severus Snape always want to teach?', 'Defense', 'Potions', 'Charms', 'Transfiguration', 1, 12),
(112, 'What is the name of Fleur Delacour''s sister?', 'Victoire', 'Apolline', 'Dominique', 'Gabrielle', 4, 12),
(113, 'Which of these is not a wizarding school?', 'Durmstrang', 'Mahoutokoro', 'Uagadou', 'Slavdovoretz', 4, 12),
(114, 'Which of these are not one of Hagrid''s many pets?', 'Grawp', 'Fluffy', 'Aragog', 'Norberta', 1, 12),
(115, 'What is the next prime number after 7?', '9', '10', '11', '13', 3, 13),
(116, 'The perimeter of a circle is also known as what?', 'The circumference', 'Redius', 'Diameter', 'Sector', 1, 13),
(117, '65 - 43 = ?', '22', '21', '12', '32', 22, 13),
(118, 'A convex shape curves outwards?', 'False ', 'True', 'Not have curves', '1 & 3 both', 0, 13),
(119, 'What does the square root of 144 equal?', '12', '13', '14', '15', 1, 13),
(120, 'Pi can be correctly written as a fraction?', 'False ', 'True', 'Not in digit', '1 & 3 both', 1, 13),
(121, 'What comes after trillion?', 'A Quintillion', 'A Quadrillion', 'A  Sextillion', 'A Decillion', 2, 13),
(122, '52 divided by 4 equals what?', '15', '12', '14', '13', 4, 13),
(123, 'How many sides does a nonagon have?', '6', '5', '9', '7', 3, 13),
(124, '2 is?', 'Integer', 'Prime number', 'Odd', '1 & 2 both', 4, 13),
(125, 'What is the next number in the Fibonacci sequence 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ?', '45', '55', '65', '75', 2, 13),
(126, '16X9?', '124', '144', '134', '154', 2, 13),
(127, 'In an isosceles triangle all sides are unequal?', 'True ', 'False', 'Only adjusting ', 'None of the above', 2, 13),
(128, 'In statistics, the middle value of an ordered set of values is called what?', 'Median', 'Mean', 'Mode', 'None of the above', 1, 13),
(129, 'What does 15 squared equal?', '200', '225', '600', '275', 2, 13),
(130, 'If a bag of 30 sweets weighs 20g, how many sweets would weigh 1kg?', '1400', '1300', '1500', '1350', 3, 13),
(131, 'How many faces does a dodecahedron have?', '13', '11', '10', '12', 4, 13),
(132, 'What is the size of long variable?', '8 bit', '16 bit', '32 bit', '64 bit', 4, 14),
(133, 'What is the default value of byte variable?', '0', '0.0', 'Null', 'Undefined', 1, 14),
(134, 'Inheritance represents', 'HAS-A relationship.', 'IS-A relationship.', 'Both 1 & 2', 'None of the above', 2, 14),
(135, 'Which is the way(Method) in which a thread can enter the waiting state?', 'Invoke its sleep()', 'Invoke objects wait', 'Invoke its suspend()', 'All of the Above', 4, 14),
(136, 'Is it necessary that each try block must be followed by a finally block?', 'True ', 'False', 'On some special case', 'None of the above', 2, 14),
(137, 'Which of the following is a thread safe?', 'StringBuilder', 'StringBuffer', 'Both of the above', 'None of the above', 2, 14),
(138, 'What of the following is the default value of an instance variable?', 'Null', '0', 'Depends on type of variable', 'Not assigned', 3, 14),
(139, 'What is the size of char variable?', '8 bit', '16 bit', '32 bit', '64 bit', 2, 14),
(140, 'What is the default value of double variable?', '0.0d', '0.0f', '0', 'Not defined', 1, 14),
(141, 'Which of the following is true about String?', 'String is mutable', 'String is immutable', 'String is a data type', 'None of the above', 2, 14),
(142, 'Static binding uses which information for binding?', 'Type', 'Object', 'Both 1 & 2', 'None of the above', 1, 14),
(143, 'Which of the following is not a keyword in java?', 'static', 'Boolean', 'void', 'private', 2, 14),
(144, 'Which method must be implemented by all threads?', 'Wait()', 'Start()', 'Stop()', 'Run()', 4, 14),
(145, 'In which case, a program is expected to recover?', 'If an error occurs', 'If an exception occurs', 'Both of the above', 'None of the above', 2, 14),
(146, 'Dynamic binding uses which information for binding?', 'Type', 'Object', 'Both of the above', 'None of the above', 2, 14),
(147, 'This is the parent of Error and Exception classes?', 'Throwable', 'Catchable', 'MainError', 'MainException', 1, 14),
(148, 'The Battle of Plassey was fought in', '1757', '1782', '1748', '1764', 1, 15),
(149, 'The territory of Porus who offered strong resistance to Alexander was situated between the rivers of?', 'Sutlej and Beas', 'Jhelum and Chenab', 'Ravi and Chenab', 'Ganga and Yamuna', 2, 15),
(150, 'Under Akbar, the Mir Bakshi was required to look after', 'Military affairs', 'The state treasury', 'The royal household', 'The land revenue system', 1, 15),
(151, 'Tripitakas are sacred books of', 'Buddhists', 'Hindus', 'Jains', 'None of the above', 1, 15),
(152, 'The trident-shaped symbol of Buddhism does not represent', 'Nirvana', 'Sangha', 'Buddha', 'Dhamma', 1, 15),
(153, 'The theory of economic drain of India during British imperialism was propounded by', 'Jawaharlal Nehru', 'Dadabhai Naoroji', 'R.C. Dutt', 'M.K. Gandhi', 2, 15),
(154, 'The treaty of Srirangapatna was signed between Tipu Sultan and', 'Robert Clive', 'Cornwallis', 'Dalhousie', 'Warren Hastings', 2, 15),
(155, 'The system of competitive examination for civil service was accepted in principle in the year?', '1833', '1853', '1858', '1882', 2, 15),
(156, 'Through which one of the following, the king exercised his control over villages in the Vijayanagar Empire?', 'Dannayaka', 'Sumanta', 'Nayaka', 'Mahanayakacharya', 4, 15),
(157, 'The Vijayanagara ruler, Kirshnadev Raya''s work Amuktamalyada, was in?', 'Telugu', 'Sanskrit', 'Tamil', 'Kannada', 1, 15),
(158, 'Under an agreement with which of the following countries did Subhas Chandra Bose organize the Indian soldiers, taken as prisoners by the Axis Powers, into the Azad Hind Fauj?', 'China', 'Germany', 'Italy', 'Japan', 4, 15),
(159, 'We hear of two envoys being sent to the Roman kings, one in 27-28 AD to the court of Augustus and the other in 110-20 AD to the court of?', 'Cartius', 'Trajan', 'Nero', 'Brutus', 2, 15),
(160, 'The use of Kharoshti in ancient Indian architecture is the result of Indiaâ€™s contact with?', 'Central Asia', 'Iran', 'Greece', 'China', 3, 15),
(161, 'Vaikhanasa the five-fold conception of Vishnu consists of?1.brahman,2.purusha,3.prakriti,4.satya,5.achyuta,6.aniruddha\r\n', '1,2,3,4,5', '2,3,4,5,6', '1,2,4,5,6', '1,3,4,5,6', 4, 15),
(162, 'The troops raised by the emperor but not paid directly the state and place under the charge of mansabadars were know as?', 'Walashahi', 'Barawardi', 'JCumaki', 'Dakhili', 4, 15),
(163, 'The title of Viceroy was added to the office of the Governor-General of India for the first time in', '1848 AD', '1856 AD', '1858 AD', '1862 AD', 3, 15),
(164, 'To which of the following dynasties did King Bhoja, a great patron of literature and art, belong?', 'Karkota', 'Utpala', 'Paramara', 'Gurjara Pratihara', 3, 15),
(165, 'Vikramaditya, a king of Ujjain, started the Vikrama samvat in 58 BC in commemoration of his victory over?', 'Indo-Greeks', 'Sakas', 'Parthinas', 'Kushanas', 2, 15),
(166, 'Two of the great Mughals wrote their own memories. There were?', 'Babar and Humayun', 'Humayun and Jahangir', 'Babar and Jahangir', 'Jahangir and Shahjahan', 3, 15),
(167, 'To which king belongs the Lion capital at Sarnath?', 'Chandragupta', 'Ashoka', 'Kanishka', 'Harsha', 2, 15),
(168, 'Where is the smallest bone in our body located?', 'Nose', 'Ear', 'Little finger ', 'Feet', 2, 16),
(169, 'What percentage of the human body is water?', '75%', '66%', '60%', '50%', 3, 16),
(170, 'Which organ filters out foreign material,eliminates worn out blood cells and produces white blood cells?', 'Spleen', 'Kidney', 'Spinal cord', 'Bone marrow', 1, 16),
(171, 'what percentage of total oxygen consumed by the body is used by human brain?', 'More than 20', 'More than 30', 'More than 40', 'Moe than 60', 1, 16),
(172, 'In which part of the human brain is ninety percent of nerve cells located?', 'Basal ganglia ', 'Cerebellum', 'Cerebral cortex', 'None of the above', 3, 16),
(173, 'What is your body''s largest organ?', 'Brain', 'Skin', 'Kidney', 'Large intestine', 2, 16),
(174, 'which is the strongest bone in your body?', 'The hipbone', 'The femur', 'The thighbone', 'The shoulder blade', 3, 16),
(175, 'which cartilage do the footballers most often damage?', 'Cartilage in the nose', 'Cartilage in the rib', 'Cartilage in the knee', 'Cartilage in the elbow', 3, 16),
(176, 'what is the average number of sweat glands in an adult human body?', '2,00,000', '20,00,000', '2,00,00,000', '20,000', 2, 16),
(177, 'Which organ in the body can regenerate itself?', 'Brain', 'Liver', 'Stomach', 'Lunges', 2, 16),
(178, 'How much time does a human blood cell take complete one circuit of the body?', '30 seconds', '1 minute', '30 minute', '2 hours', 2, 16),
(179, 'How many eggs does a woman ovulate during her reproductive lifetime?', '1 egg', '100 to 200 egg', '7000 to 8000 eggs', '300 to 400 egg', 4, 16),
(180, 'How much hair loss per day is normal?', '50 to 100 hairs', '250 to 300 hairs', '10 to 15 hairs', '1000 to 1500 hairs', 1, 16),
(181, 'Which one of the following companies has started a rural marketing network called â€™e-chaupalsâ€™?', 'ITC  ', 'Dabur', 'Proctor and Gamble', 'Hindustan Lever', 1, 17),
(182, 'Which one of the following companies has launched its flagship smart phone G2 in September 2013 in India?', 'Lenovo', 'Sony', 'Apple', 'L G  ', 4, 17),
(183, 'Which company has launched 4G service for its employees under Jio brand name?', 'Airtel', 'Reliance (mukesh Ambani) ', 'Vodafone', 'Idea', 2, 17),
(184, 'What is the animal on the insignia of the RBI', 'Lion', 'Tiger  ', 'Panther', 'Elephant', 2, 17),
(185, 'Which among the following brand is most influential brand in India?', 'Zenith', 'Facebook', 'Google  ', 'Bajaj', 3, 17),
(186, 'Whats is the new slogan and Logo launched by Online classified advertising company Quikr on 14 July 2015?', 'Badalna Hua Asaan', 'Ab badale Asani se', 'Badal Dalo sabkuch', 'Aasan hai badalna  ', 4, 17),
(187, 'The popular mobile brand Nokia originated in which country?', 'India', 'Finland  ', 'Switzerland', 'Greenland', 2, 17),
(188, 'Who created the Google logo?', 'Dennis Hwang', 'Sergey Brin  ', 'Ruth Kedar', 'Larry Page', 2, 17),
(189, 'What does the McDonalds tag line say?', 'I''m lovin'' it  ', 'World''s best', 'I love it', 'People''s choice', 1, 17),
(190, 'Which popular brand sponsors the Indian National Cricket Team?', 'Reebok', 'Puma', 'Adidas', 'Nike  ', 4, 17),
(191, 'The arrow in the logo of Amazon is from?', 'A-N', 'A-Z  ', 'A-A', 'A-O', 2, 17),
(192, 'The popular brand Adidas was founded by?', 'David Beckham', 'Rudi Dassler', 'Mark Twain', 'Adi Dassler  ', 4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `file` varchar(1001) NOT NULL,
  `slogan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `image`, `file`, `slogan`) VALUES
(8, 'Game Of Thrones', '', 'Game of thrones is an American  fantasy  drama television series created by David Benioff  and   D. B.  Weise. It is an adaptation of A Song of ICE and FIRE , George R. R. Martin’s series of fantasy novels, the first of which is titled A Games of thrones It is filmed at Titanic Studios in BELFAST and on location elsewhere in the United Kingdom, as well as in Croatia, Iceland, Malta, Morocco, Spain, and the United States. The series premiered on HBO in the United States on April 17, 2011, and its sixth season concluded on June 26, 2016. The series was renewed for a seventh season, which is scheduled to premiere in mid-2017 with a total of seven episodes. The series will conclude with its eighth season in 2018.', 'VALAR MORGULUS'),
(9, 'FRIENDS', '', ' FRIENDS is an American television sitcom, created by David Crane and Marta Kuffman, which aired on NBC from September 22, 1994, to May 6, 2004, lasting ten seasons. With an ensemble cast starring Jennifer Aniston, Courteney Cox, Lisa Kudrow, Matt LeBlanc, Matthew Perry and David Schwimmer, the show revolves around six 20-30 something friends living in Manhattan. The series was produced by Bright/Kauffman/Crane Productions, in association with Warner Bros. Television. The original executive producers were Kevin S. Bright, Marta Kauffman, and David Crane.', 'HOW U DOIN ?'),
(10, 'Sports', '', ' Sport (UK) or sports (US) are all forms of usually competitive physical activity or games which, through casual or organised participation, aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators.  Usually the contest or game is between two sides, each attempting to exceed the other. Some sports allow a tie game; others provide tie-breaking methods, to ensure one winner and one loser. A number of such two-sided contests may be arranged in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by playoffs. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, each against all with one winner.', 'WIN OR LOSE'),
(11, 'Animal', '', 'Animals are multicellular, eukaryotic organisms of the kingdom Animalia (also called Metazoa). All animals are motile, meaning they can move spontaneously and independently at some point in their lives. Their body plan eventually becomes fixed as they develop, although some undergo a process of metamorphosis later on in their lives. All animals are heterotrophs: they must ingest other organisms or their products for sustenance.', 'shoot u with cameras not guns'),
(12, 'Harry Potter', '', 'Harry James Potter is the title character of J. K. Rowling''s Harry Potter series. The majority of the books'' plot covers seven years in the life of the orphan Potter, who, on his eleventh birthday, learns he is a wizard. Thus, he attends Hogwarts School of Witchcraft and Wizardry to practice magic under the guidance of the kindly headmaster Albus Dumbledore and other school professors. Harry also discovers that he is already famous throughout the novel''s magical community, and that his fate is tied with that of Lord Voldemort, the internationally feared Dark Wizard and murderer of his parents Lily and James.', 'Time is making fools of us again.'),
(13, 'Basic Math', '', '  Mathematics (“knowledge, study, learning”) is the study of topics such as quantity (numbers) ,structure, space, and change. There is a range of views among mathematicians and philosophers as to the exact scope anddefinition of mathematics .', 'Maths is Fun'),
(14, 'JAVA', '', 'Java is a programming language expressly designed for use in the distributed environment of the Internet. It was designed to have the "look and feel" of the C++ language, but it is simpler to use than C++ and enforces an object-oriented programming model.', 'I didnt get it !'),
(15, 'Indian History', '', ' India, officially the Republic of India is a country in South Asia. It is the seventh-largest country by area, the second-most populous country (with over 1.2 billion people), and the most populous democracy in the world. Bounded by the Indian Ocean on the south, the Arabian Sea on the south-west, and the Bay of Bengal on the south-east, it shares land borders with Pakistan to the west;[d] China, Nepal, and Bhutan to the north-east; and Myanmar (Burma) and Bangladesh to the east. In the Indian Ocean, India is in the vicinity of Sri Lanka and the Maldives; in addition, India''s Andaman and Nicobar Islands share a maritime border with Thailand and Indonesia. India''s capital is New Delhi; other metropolises include Mumbai, Bangalore,Chennai, Hyderabad, Ahmedabad and Kolkata.', 'Ye to Sirf Trailer tha'),
(16, 'GK Human Body', '', '  The human body is the entire structure of a human being. It is composed of many different types of cells that together createtissues and subsequently organ systems. They ensure homeostasis and viability of human body.It comprises a head, neck, trunk (which includes the thorax and abdomen), arms and hands, legs and feet. The study of the human body involves anatomy, physiology, histology and embryology. The body varies anatomically in known ways. Physiology focuses on the systems and organs of the human body and their functions. Many systems and mechanisms interact in order to maintain homeostasis, with safe levels of substances such as sugar and oxygen in the blood.The body is studied by health professionals, physiologists, anatomists, and by artists to assist them in their work.', 'Its Complicated'),
(17, 'Brands', '', 'Brands have a wide range of uses for businesses, products and individuals in today’s dynamic marketing landscape where publishing and message distribution are no longer limited to media entities. Through the use of social media platforms, every consumer is a publisher and has his own brand to promote. Each brand is competing for time and attention—today’s scarce resources—to break though the message clutter in order to build relationships with their target audience(s). By itself, a brand isn’t a marketing strategy.', 'Think Different');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(5) NOT NULL,
  `u_id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profile_pic` varchar(30) NOT NULL DEFAULT 'profile.jpg',
  `world_rank` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `u_id`, `fname`, `lname`, `email`, `profile_pic`, `world_rank`) VALUES
(1, 1, 'manmath', 'paste', 'manmathpaste123@gmail.com', 'profile.jpg', 0),
(2, 2, 'ganesh', 'patil', 'ganeshpatil@gmail.com', 'profile.jpg', 0),
(3, 3, 'rupesh', 'singh', 'rupesh@quizbuzz.com', 'profile.jpg', 0),
(4, 4, 'harsh', 'patel', 'diyoraharsh06@gmail.com', 'profile.jpg', 0),
(5, 5, 'sachin', 'patil', 'sachin@gmail.com', 'profile.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'manmathpaste', 'manmath'),
(2, 'ganeshpatil', 'ganesh'),
(3, 'rupesh_s', 'rupesh'),
(4, 'harsh_07', '123456'),
(5, 'sachinp', 'sachin');

-- --------------------------------------------------------

--
-- Table structure for table `user_score`
--

CREATE TABLE `user_score` (
  `id` int(6) NOT NULL,
  `u_id` int(5) NOT NULL,
  `topic_id` int(3) NOT NULL,
  `score` int(3) NOT NULL,
  `played` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_score`
--

INSERT INTO `user_score` (`id`, `u_id`, `topic_id`, `score`, `played`) VALUES
(1, 1, 1, 60, 'yes'),
(2, 7, 9, 0, 'yes'),
(3, 3, 17, 0, 'yes'),
(4, 5, 10, 0, 'yes'),
(5, 5, 12, 0, 'yes'),
(6, 3, 8, 0, 'yes'),
(7, 3, 16, 0, 'yes'),
(8, 3, 9, 0, 'yes'),
(9, 5, 8, 153, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current`
--
ALTER TABLE `current`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_score`
--
ALTER TABLE `user_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current`
--
ALTER TABLE `current`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_score`
--
ALTER TABLE `user_score`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
