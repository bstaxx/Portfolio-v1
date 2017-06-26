-- phpMyAdmin SQL Dump
-- version 4.1.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2014 at 06:51 PM
-- Server version: 5.5.36-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bstaxxco_gwd471`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalities`
--

DROP TABLE IF EXISTS `personalities`;
CREATE TABLE IF NOT EXISTS `personalities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personality` char(4) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personality` (`personality`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `personalities`
--

INSERT INTO `personalities` (`id`, `personality`, `description`) VALUES
(1, 'ENFJ', '<h2>Your profile is ENFJ, the Teacher</h2><p>ENFJs are idealist organizers, driven to implement their vision of what is best for humanity. They often act as catalysts for human growth because of their ability to see potential in other people and their charisma in persuading others to their ideas. They are focused on values and vision, and are passionate about the possibilities for people.</p><p>ENFJs are typically energetic and driven, and often have a lot on their plates. They are tuned into the needs of others and acutely aware of human suffering; however, they also tend to be optimistic and forward-thinking, intuitively seeing opportunity for improvement. The ENFJ is ambitious, but their ambition is not self-serving: rather, they feel personally responsible for making the world a better place.</p>'),
(2, 'ENFP', '<h2>Your profile is ENFP, the Champion</h2><p>ENFPs are people-centered creators with a focus on possibilities and a contagious enthusiasm for new ideas, people and activities. Energetic, warm, and passionate, ENFPs love to help other people explore their their creative potential.</p><p>ENFPs are typically agile and expressive communicators, using their wit, humour, and mastery of language to create engaging stories. Imaginative and original, ENFPs often have a strong artistic side. They are drawn to art because of its ability to express inventive ideas and a create a deeper understanding of human experience.</p>'),
(3, 'ENTJ', '<h2>Your profile is ENTJ, the Commander</h2><p>ENTJs are strategic leaders, motivated to organize change. They are quick to see inefficiency and conceptualize new solutions, and enjoy developing long-range plans to accomplish their vision. They excel at logical reasoning and are usually articulate and quick-witted.</p><p>ENTJs are analytical and objective, and like bringing order to the world around them. When there are flaws in a system, the ENTJ sees them, and enjoys the process of discovering and implementing a better way. ENTJs are assertive and enjoy taking charge; they see their role as that of leader and manager, organizing people and processes to achieve their goals.</p>'),
(4, 'ENTP', '<h2>Your profile is ENTP, the Visionary</h2><p>ENTPs are inspired innovators, motivated to find new solutions to intellectually challenging problems. They are curious and clever, and seek to comprehend the people, systems, and principles that surround them. Open-minded and unconventional, Visionaries want to analyze, understand, and influence other people.</p><p>ENTPs enjoy playing with ideas and especially like to banter with others. They use their quick wit and command of language to keep the upper hand with other people, often cheerfully poking fun at their habits and eccentricities. While the ENTP enjoys challenging others, in the end they are usually happy to live and let live. They are rarely judgmental, but they may have little patience for people who can''t keep up.</p>'),
(5, 'ESFJ', '<h2>Your profile is ESFJ, the Provider</h2><p>ESFJs are conscientious helpers, sensitive to the needs of others and energetically dedicated to their responsibilities. They are highly attuned to their emotional environment and attentive to both the feelings of others and the perception others have of them. ESFJs like a sense of harmony and cooperation around them, and are eager to please and provide.</p><p>ESFJs value loyalty and tradition, and usually make their family and friends their top priority. They are generous with their time, effort, and emotions. They often take on the concerns of others as if they were their own, and will attempt to put their significant organizational talents to use to bring order to other people''s lives.</p>'),
(6, 'ESFP', '<h2>Your profile is ESFP, the Performer</h2><p>ESFPs are vivacious entertainers who charm and engage those around them. They are spontaneous, energetic, and fun-loving, and take pleasure in the things around them: food, clothes, nature, animals, and especially people.</p><p>ESFPs are typically warm and talkative and have a contagious enthusiasm for life. They like to be in the middle of the action and the center of attention. They have a playful, open sense of humor, and like to draw out other people and help them have a good time.</p>'),
(7, 'ESTJ', '<h2>Your profile is ESTJ, the Supervisor</h2><p>ESTJs are hardworking traditionalists, eager to take charge in organizing projects and people. Orderly, rule-abiding, and conscientious, ESTJs like to get things done, and tend to go about projects in a systematic, methodical way.</p><p>ESTJs are the consummate organizers, and want to bring structure to their surroundings. They value predictability and prefer things to proceed in a logical order. When they see a lack of organization, the ESTJ often takes the initiative to establish processes and guidelines, so that everyone knows what''s expected.</p>'),
(8, 'ESTP', '<h2>Your profile is ESTP, the Dynamo</h2><p>ESTPs are energetic thrillseekers who are at their best when putting out fires, whether literal or metaphorical. They bring a sense of dynamic energy to their interactions with others and the world around them. They assess situations quickly and move adeptly to respond to immediate problems with practical solutions.</p><p>Active and playful, ESTPs are often the life of the party and have a good sense of humor. They use their keen powers of observation to assess their audience and adapt quickly to keep interactions exciting. Although they typically appear very social, they are rarely sensitive; the ESTP prefers to keep things fast-paced and silly rather than emotional or serious.</p>'),
(9, 'INFJ', '<h2>Your profile is INFJ, the Counselor</h2><p>INFJs are creative nurturers with a strong sense of personal integrity and a drive to help others realize their potential. Creative and dedicated, they have a talent for helping others with original solutions to their personal challenges.</p><p>The Counselor has a unique ability to intuit others'' emotions and motivations, and will often know how someone else is feeling before that person knows it himself. They trust their insights about others and have strong faith in their ability to read people. Although they are sensitive, they are also reserved; the INFJ is a private sort, and is selective about sharing intimate thoughts and feelings.</p>'),
(10, 'INFP', '<h2>Your profile is INFP, the Healer</h2><p>INFPs are imaginative idealists, guided by their own core values and beliefs. To a Healer, possibilities are paramount; the realism of the moment is only of passing concern. They see potential for a better future, and pursue truth and meaning with their own individual flair.</p><p>INFPs are sensitive, caring, and compassionate, and and are deeply concerned with the personal growth of themselves and others. Individualistic and nonjudgmental, INFPs believe that each person must find their own path. They enjoy spending time exploring their own ideas and values, and are gently encouraging to others to do the same. INFPs are creative and often artistic; they enjoy finding new outlets for self-expression.</p>'),
(11, 'INTJ', '<h2>Your profile is INTJ, the Mastermind</h2><p>INTJs are analytical problem-solvers, eager to improve systems and processes with their innovative ideas. They have a talent for seeing possibilities for improvement, whether at work, at home, or in themselves.</p><p>Often intellectual, INTJs enjoy logical reasoning and complex problem-solving. They approach life by analyzing the theory behind what they see, and are typically focused inward, on their own thoughtful study of the world around them. INTJs are drawn to logical systems and are much less comfortable with the unpredictable nature of other people and their emotions. They are typically independent and selective about their relationships, preferring to associate with people who they find intellectually stimulating.</p>'),
(12, 'INTP', '<h2>Your profile is INTP in a Nutshell</h2><p>INTPs are philosophical innovators, fascinated by logical analysis, systems, and design. They are preoccupied with theory, and search for the universal law behind everything they see. They want to understand the unifying themes of life, in all their complexity.</p><p>INTPs are detached, analytical observers who can seem oblivious to the world around them because they are so deeply absorbed in thought. They spend much of their time focused internally: exploring concepts, making connections, and seeking understanding. To the Architect, life is an ongoing inquiry into the mysteries of the universe.</p>'),
(13, 'ISEJ', '<h2>Your profile is ISFJ, the Architect</h2><p>ISFJs are industrious caretakers, loyal to traditions and organizations. They are practical, compassionate, and caring, and are motivated to provide for others and protect them from the perils of life.</p><p>ISFJs are conventional and grounded, and enjoy contributing to established structures of society. They are steady and committed workers with a deep sense of responsibility to others. They focus on fulfilling their duties, particularly when they are taking care of the needs of other people. They want others to know that they are reliable and can be trusted to do what is expected of them. They are conscientious and methodical, and persist until the job is done.</p>'),
(14, 'ISFP', '<h2>Your profile is ISFP, the Composer</h2><p>ISFPs are gentle caretakers who live in the present moment and enjoy their surroundings with cheerful, low-key enthusiasm. They are flexible and spontaneous, and like to go with the flow to enjoy what life has to offer. ISFPs are quiet and unassuming, and may be hard to get to know. However, to those who know them well, the ISFP is warm and friendly, eager to share in life''s many experiences.</p><p>ISFPs have a strong aesthetic sense and seek out beauty in their surroundings. They are attuned to sensory experience, and often have a natural talent for the arts. ISFPs especially excel at manipulating objects, and may wield creative tools like paintbrushes and sculptor''s knives with great mastery.</p>'),
(15, 'ISTJ', '<h2>Your profile is ISTJ, the Inspector</h2><p>ISTJs are responsible organizers, driven to create and enforce order within systems and institutions. They are neat and orderly, inside and out, and tend to have a procedure for everything they do. Reliable and dutiful, ISTJs want to uphold tradition and follow regulations.</p><p>ISTJs are steady, productive contributors. Although they are Introverted, ISTJs are rarely isolated; typical ISTJs know just where they belong in life, and want to understand how they can participate in established organizations and systems. They concern themselves with maintaining the social order and making sure that standards are met.</p>'),
(16, 'ISTP', '<h2>Your profile is ISTP, the Craftsman</h2><p>ISTPs are observant artisans with an understanding of mechanics and an interest in troubleshooting. They approach their environments with a flexible logic, looking for practical solutions to the problems at hand. They are independent and adaptable, and typically interact with the world around them in a self-directed, spontaneous manner.<p><p>ISTPs are attentive to details and responsive to the demands of the world around them. Because of their astute sense of their environment, they are good at moving quickly and responding to emergencies. ISTPs are reserved, but not withdrawn: the ISTP enjoys taking action, and approaches the world with a keen appreciation for the physical and sensory experiences it has to offer.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `question_1` varchar(255) DEFAULT NULL,
  `question_2` varchar(255) DEFAULT NULL,
  `type_1` char(1) DEFAULT NULL,
  `type_2` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `description`, `question_1`, `question_2`, `type_1`, `type_2`) VALUES
(1, 'Extroverted VS. Introverted', 'I am seen as "outgoing" or as a "people person."', 'I am seen as "reflective" or "reserved."', 'E', 'I'),
(2, 'Extroverted VS. Introverted', 'I feel comfortable in groups and like working in them.', 'I feel comfortable being alone and like things I can do on my own.', 'E', 'I'),
(3, 'Extroverted VS. Introverted', 'I sometimes jump too quickly into an activity and don''t allow enough time to think it over.', 'I sometimes forget to check with the outside world to see if my ideas really fit the experience.', 'E', 'I'),
(4, 'Sensing VS. Intuition', 'I remember events as snapshots of what actually happened.', 'I remember events by what i read "between the lines" about their meaning.', 'S', 'N'),
(5, 'Sensing VS. Intuition', 'I am pragmatic and look to the "bottom line."', 'I solve problems by leaping between different ideas and possibilities.', 'S', 'N'),
(6, 'Sensing VS. Intuition', 'I start with facts and then form a big picture.', 'I like to see the big picture, then to find out the facts.', 'S', 'N'),
(7, 'Thinking VS. Feeling', 'I enjoy technical and scientific fields where logic is important.', 'I am concerned with harmony and nervous when it is missing.', 'T', 'F'),
(8, 'Thinking VS. Feeling', 'I notice inconsistencies.', 'Sometimes i miss seeing or communication the "hard truth" of situations.', 'T', 'F'),
(9, 'Thinking VS. Feeling', 'I make decisions with my head and want to be fair.', 'I make decisions with my heart and want to be compassionate.', 'T', 'F'),
(10, 'Judging VS. Perceiving', 'I like to have things decided.', 'I like to stay open to respond to whatever happens.', 'J', 'P'),
(11, 'Judging VS. Perceiving', 'I appear to be task oriented.', 'I appear to be loose and casual. I like to keep plans to a minimum.', 'J', 'P'),
(12, 'Judging VS. Perceiving', 'I like to make lists of things to do.', 'I work in bursts of energy.', 'J', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `gender` char(6) NOT NULL,
  `active` int(1) DEFAULT '0',
  `admin` int(1) DEFAULT '0',
  `activation_code` varchar(32) DEFAULT NULL,
  `personality` char(4) DEFAULT NULL,
  `results` text,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `personality` (`personality`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `birthday`, `gender`, `active`, `admin`, `activation_code`, `personality`, `results`) VALUES
(1, 'Brandon', 'Anthony', 'BGAgolden15@aol.com', 'Gold1487', '1987-03-07', 'male', 1, 1, '9dff4667d5959a5b5ad35e8e3b93f07e', 'ESTJ', '{"EI":["E","E","E"],"SN":["S","S","S"],"TF":["T","T","T"],"JP":["J","J","J"]}'),
(2, 'erica', 'norris', 'erica.norris@ymail.com', 'lolipop123', '1994-05-04', 'female', 1, 0, 'ae5142c37554956b65f24930d54cf642', 'ENTJ', '{"EI":["E","E","E"],"SN":["N","N","S"],"TF":["T","T","F"],"JP":["P","P","P"]}'),
(3, 'Paige', 'Lee', 'Lee_tykira@yahoo.com', 'Michelle36', '1993-05-24', 'female', 1, 0, '619586a9b9b288dfd01bff5fd0182141', 'ENTJ', '{"EI":["E","E","E"],"SN":["N","N","N"],"TF":["T","T","F"],"JP":["J","J","J"]}'),
(4, 'Mikaiya', 'Stewart', 'mikaiyastewart@gmail.com', 'Taronn19', '1994-10-28', 'female', 1, 0, '7e1ea6f78d4966f52ca84c49b8960cd4', NULL, NULL),
(7, 'banana', 'joe', 'banana@bstaxx.com', 'banana', '1987-03-03', 'male', 1, 0, '9d660f21069ec5ac1dba1f1effac6f93', NULL, NULL),
(5, 'Brian', 'Thomas', 'bookumoneyentertainment@gmail.com', 'Gold1487', '1987-03-07', 'male', 1, 0, '4e334b92a98f0d9bfa261c584225e04d', 'ESTJ', '{"EI":["E","E","E"],"SN":["S","S","S"],"TF":["T","T","T"],"JP":["J","J","J"]}'),
(6, 'bob', 'dole', 'apple@you.com', 'apple', '1988-03-03', 'male', 1, 0, '6d1176e9d0bf121621f3042151048cd0', 'ESTJ', '{"EI":["E","E","E"],"SN":["S","S","S"],"TF":["T","T","T"],"JP":["J","J","J"]}'),
(8, '', '', '', '', '0000-00-00', '', 0, 0, 'fb4b2b851366d7281991404eddf56557', 'ESTJ', '{"EI":["E","E","E"],"SN":["S","S","S"],"TF":["T","T","T"],"JP":["J","J","J"]}'),
(9, 'coin', 'coin', 'coin@bstaxx.com', 'coin', '1987-03-03', 'male', 1, 0, '397e4533bd0b96f0f17af67a3b582e87', 'INTJ', '{"EI":["E","I","I"],"SN":["N","N","S"],"TF":["T","T","T"],"JP":["J","P","P"]}'),
(10, 'Brittany', 'Lynn', 'lynn@bstaxx.com', 'lynn', '1990-02-02', 'female', 1, 0, 'f06cbf3b5f05b8b132e700f6ffb18a81', 'ESTJ', '{"EI":["E","E","E"],"SN":["S","S","S"],"TF":["T","T","T"],"JP":["J","J","J"]}'),
(11, 'peggy', 'jean', 'peggy@bstaxx.com', 'peggy', '1960-03-21', 'female', 1, 0, '9e5b08b1d3cea92ce0bc835fece5e396', 'ESTJ', '{"EI":["E","E","E"],"SN":["S","S","S"],"TF":["T","T","T"],"JP":["J","J","J"]}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
