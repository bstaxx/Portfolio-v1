CREATE TABLE personalities (
	id INT NOT NULL AUTO_INCREMENT,
	personality CHAR(4),
	description TEXT,
	PRIMARY KEY (id),
	UNIQUE (personality)
);

INSERT INTO personalities(personality, description)
VALUES(
	'ENFJ',
	"<h2>ENFJ in a Nutshell</h2><p>ENFJs are idealist organizers, driven to implement their vision of what is best for humanity. They often act as catalysts for human growth because of their ability to see potential in other people and their charisma in persuading others to their ideas. They are focused on values and vision, and are passionate about the possibilities for people.</p><p>ENFJs are typically energetic and driven, and often have a lot on their plates. They are tuned into the needs of others and acutely aware of human suffering; however, they also tend to be optimistic and forward-thinking, intuitively seeing opportunity for improvement. The ENFJ is ambitious, but their ambition is not self-serving: rather, they feel personally responsible for making the world a better place.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ENFP',
	"<h2>ENFP in a Nutshell</h2><p>ENFPs are people-centered creators with a focus on possibilities and a contagious enthusiasm for new ideas, people and activities. Energetic, warm, and passionate, ENFPs love to help other people explore their their creative potential.</p><p>ENFPs are typically agile and expressive communicators, using their wit, humour, and mastery of language to create engaging stories. Imaginative and original, ENFPs often have a strong artistic side. They are drawn to art because of its ability to express inventive ideas and a create a deeper understanding of human experience.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ENTJ',
	"<h2>ENTJ in a Nutshell</h2><p>ENTJs are strategic leaders, motivated to organize change. They are quick to see inefficiency and conceptualize new solutions, and enjoy developing long-range plans to accomplish their vision. They excel at logical reasoning and are usually articulate and quick-witted.</p><p>ENTJs are analytical and objective, and like bringing order to the world around them. When there are flaws in a system, the ENTJ sees them, and enjoys the process of discovering and implementing a better way. ENTJs are assertive and enjoy taking charge; they see their role as that of leader and manager, organizing people and processes to achieve their goals.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ENTP',
	"<h2>ENTP in a Nutshell</h2><p>ENTPs are inspired innovators, motivated to find new solutions to intellectually challenging problems. They are curious and clever, and seek to comprehend the people, systems, and principles that surround them. Open-minded and unconventional, Visionaries want to analyze, understand, and influence other people.</p><p>ENTPs enjoy playing with ideas and especially like to banter with others. They use their quick wit and command of language to keep the upper hand with other people, often cheerfully poking fun at their habits and eccentricities. While the ENTP enjoys challenging others, in the end they are usually happy to live and let live. They are rarely judgmental, but they may have little patience for people who can't keep up.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ESFJ',
	"<h2>ESFJ in a Nutshell</h2><p>ESFJs are conscientious helpers, sensitive to the needs of others and energetically dedicated to their responsibilities. They are highly attuned to their emotional environment and attentive to both the feelings of others and the perception others have of them. ESFJs like a sense of harmony and cooperation around them, and are eager to please and provide.</p><p>ESFJs value loyalty and tradition, and usually make their family and friends their top priority. They are generous with their time, effort, and emotions. They often take on the concerns of others as if they were their own, and will attempt to put their significant organizational talents to use to bring order to other people's lives.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ESFP',
	"<h2>ESFP in a Nutshell</h2><p>ESFPs are vivacious entertainers who charm and engage those around them. They are spontaneous, energetic, and fun-loving, and take pleasure in the things around them: food, clothes, nature, animals, and especially people.</p><p>ESFPs are typically warm and talkative and have a contagious enthusiasm for life. They like to be in the middle of the action and the center of attention. They have a playful, open sense of humor, and like to draw out other people and help them have a good time.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ESTJ',
	"<h2>ESTJ in a Nutshell</h2><p>ESTJs are hardworking traditionalists, eager to take charge in organizing projects and people. Orderly, rule-abiding, and conscientious, ESTJs like to get things done, and tend to go about projects in a systematic, methodical way.</p><p>ESTJs are the consummate organizers, and want to bring structure to their surroundings. They value predictability and prefer things to proceed in a logical order. When they see a lack of organization, the ESTJ often takes the initiative to establish processes and guidelines, so that everyone knows what's expected.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ESTP',
	"<h2>ESTP in a Nutshell</h2><p>ESTPs are energetic thrillseekers who are at their best when putting out fires, whether literal or metaphorical. They bring a sense of dynamic energy to their interactions with others and the world around them. They assess situations quickly and move adeptly to respond to immediate problems with practical solutions.</p><p>Active and playful, ESTPs are often the life of the party and have a good sense of humor. They use their keen powers of observation to assess their audience and adapt quickly to keep interactions exciting. Although they typically appear very social, they are rarely sensitive; the ESTP prefers to keep things fast-paced and silly rather than emotional or serious.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'INFJ',
	"<h2>INFJ in a Nutshell</h2><p>INFJs are creative nurturers with a strong sense of personal integrity and a drive to help others realize their potential. Creative and dedicated, they have a talent for helping others with original solutions to their personal challenges.</p><p>The Counselor has a unique ability to intuit others' emotions and motivations, and will often know how someone else is feeling before that person knows it himself. They trust their insights about others and have strong faith in their ability to read people. Although they are sensitive, they are also reserved; the INFJ is a private sort, and is selective about sharing intimate thoughts and feelings.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'INFP',
	"<h2>INFP in a Nutshell</h2><p>INFPs are imaginative idealists, guided by their own core values and beliefs. To a Healer, possibilities are paramount; the realism of the moment is only of passing concern. They see potential for a better future, and pursue truth and meaning with their own individual flair.</p><p>INFPs are sensitive, caring, and compassionate, and and are deeply concerned with the personal growth of themselves and others. Individualistic and nonjudgmental, INFPs believe that each person must find their own path. They enjoy spending time exploring their own ideas and values, and are gently encouraging to others to do the same. INFPs are creative and often artistic; they enjoy finding new outlets for self-expression.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'INTJ',
	"<h2>INTJ in a Nutshell</h2><p>INTJs are analytical problem-solvers, eager to improve systems and processes with their innovative ideas. They have a talent for seeing possibilities for improvement, whether at work, at home, or in themselves.</p><p>Often intellectual, INTJs enjoy logical reasoning and complex problem-solving. They approach life by analyzing the theory behind what they see, and are typically focused inward, on their own thoughtful study of the world around them. INTJs are drawn to logical systems and are much less comfortable with the unpredictable nature of other people and their emotions. They are typically independent and selective about their relationships, preferring to associate with people who they find intellectually stimulating.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'INTP',
	"<h2>INTP in a Nutshell</h2><p>INTPs are philosophical innovators, fascinated by logical analysis, systems, and design. They are preoccupied with theory, and search for the universal law behind everything they see. They want to understand the unifying themes of life, in all their complexity.</p><p>INTPs are detached, analytical observers who can seem oblivious to the world around them because they are so deeply absorbed in thought. They spend much of their time focused internally: exploring concepts, making connections, and seeking understanding. To the Architect, life is an ongoing inquiry into the mysteries of the universe.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ISEJ',
	"<h2>ISFJ in a Nutshell</h2><p>ISFJs are industrious caretakers, loyal to traditions and organizations. They are practical, compassionate, and caring, and are motivated to provide for others and protect them from the perils of life.</p><p>ISFJs are conventional and grounded, and enjoy contributing to established structures of society. They are steady and committed workers with a deep sense of responsibility to others. They focus on fulfilling their duties, particularly when they are taking care of the needs of other people. They want others to know that they are reliable and can be trusted to do what is expected of them. They are conscientious and methodical, and persist until the job is done.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ISFP',
	"<h2>ISFP in a Nutshell</h2><p>ISFPs are gentle caretakers who live in the present moment and enjoy their surroundings with cheerful, low-key enthusiasm. They are flexible and spontaneous, and like to go with the flow to enjoy what life has to offer. ISFPs are quiet and unassuming, and may be hard to get to know. However, to those who know them well, the ISFP is warm and friendly, eager to share in life's many experiences.</p><p>ISFPs have a strong aesthetic sense and seek out beauty in their surroundings. They are attuned to sensory experience, and often have a natural talent for the arts. ISFPs especially excel at manipulating objects, and may wield creative tools like paintbrushes and sculptor's knives with great mastery.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ISTJ',
	"<h2>ISTJ in a Nutshell</h2><p>ISTJs are responsible organizers, driven to create and enforce order within systems and institutions. They are neat and orderly, inside and out, and tend to have a procedure for everything they do. Reliable and dutiful, ISTJs want to uphold tradition and follow regulations.</p><p>ISTJs are steady, productive contributors. Although they are Introverted, ISTJs are rarely isolated; typical ISTJs know just where they belong in life, and want to understand how they can participate in established organizations and systems. They concern themselves with maintaining the social order and making sure that standards are met.</p>"
);

INSERT INTO personalities(personality, description)
VALUES(
	'ISTP',
	"<h2>ISTP in a Nutshell</h2><p>ISTPs are observant artisans with an understanding of mechanics and an interest in troubleshooting. They approach their environments with a flexible logic, looking for practical solutions to the problems at hand. They are independent and adaptable, and typically interact with the world around them in a self-directed, spontaneous manner.<p><p>ISTPs are attentive to details and responsive to the demands of the world around them. Because of their astute sense of their environment, they are good at moving quickly and responding to emergencies. ISTPs are reserved, but not withdrawn: the ISTP enjoys taking action, and approaches the world with a keen appreciation for the physical and sensory experiences it has to offer.</p>"
);

CREATE TABLE users (
	user_id INT NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(20),
	last_name VARCHAR(20),
	email VARCHAR(50) NOT NULL,
	password VARCHAR(15) NOT NULL,
	birthday DATE NOT NULL,
	gender CHAR(6) NOT NULL,
	active INT(1) DEFAULT '0',
	admin INT(1) DEFAULT '0',
	activation_code VARCHAR(32),
	personality CHAR(4),
	results TEXT,
	PRIMARY KEY (user_id),
	FOREIGN KEY (personality) REFERENCES personalities (personality),
	UNIQUE (email)
);

INSERT INTO users(first_name, last_name, email, password, birthday, gender, active, admin) 
VALUES('Brandon', 'Anthony', 'BGAgolden15@aol.com', 'Gold1487', '1987-03-07', 'male', 1, 1);

CREATE TABLE questions (
	id INT NOT NULL AUTO_INCREMENT,
	description VARCHAR(255),
	question_1 VARCHAR(255),
	question_2 VARCHAR(255),
	type_1 CHAR(1),
	type_2 CHAR(1),
	PRIMARY KEY (id)
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Extroverted VS. Introverted',
	'I am seen as "outgoing" or as a "people person."', 
	'I am seen as "reflective" or "reserved."', 
	'E',
	'I'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Extroverted VS. Introverted',
	'I feel comfortable in groups and like working in them.', 
	'I feel comfortable being alone and like things I can do on my own.',
	'E', 
	'I'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Extroverted VS. Introverted',
	"I sometimes jump too quickly into an activity and don't allow enough time to think it over.", 
	"I sometimes forget to check with the outside world to see if my ideas really fit the experience.",
	'E', 
	'I'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Sensing VS. Intuition',
	'I remember events as snapshots of what actually happened.', 
	'I remember events by what i read "between the lines" about their meaning.',
	'S',
	'N'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Sensing VS. Intuition',
	'I am pragmatic and look to the "bottom line."', 
	'I solve problems by leaping between different ideas and possibilities.',
	'S',
	'N'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Sensing VS. Intuition',
	'I start with facts and then form a big picture.', 
	'I like to see the big picture, then to find out the facts.',
	'S',
	'N'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Thinking VS. Feeling',
	'I enjoy technical and scientific fields where logic is important.', 
	'I am concerned with harmony and nervous when it is missing.', 
	'T',
	'F'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Thinking VS. Feeling',
	'I notice inconsistencies.', 
	'Sometimes i miss seeing or communication the "hard truth" of situations.',
	'T',
	'F'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Thinking VS. Feeling',
	'I make decisions with my head and want to be fair.', 
	'I make decisions with my heart and want to be compassionate.',
	'T',
	'F'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Judging VS. Perceiving',
	'I like to have things decided.', 
	'I like to stay open to respond to whatever happens.',
	'J',
	'P'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Judging VS. Perceiving',
	'I appear to be task oriented.',
	'I appear to be loose and casual. I like to keep plans to a minimum.',
	'J',
	'P'
);

INSERT INTO questions(description, question_1, question_2, type_1, type_2) 
VALUES(
	'Judging VS. Perceiving',
	'I like to make lists of things to do.',
	'I work in bursts of energy.',
	'J',
	'P'
);







