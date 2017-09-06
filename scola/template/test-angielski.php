<?php
	// $_SESSION[ "person" ] = $_POST;
	// print_r( $_POST );
	// print_r( $_SESSION[ "person" ] );
	
	$progi = array(
		array(
			"value" => 0,
			"name" => "A1",
		),
		array(
			"value" => 26,
			"name" => "A2",
		),
		array(
			"value" => 39,
			"name" => "B1",
		),
		array(
			"value" => 52,
			"name" => "B2",
		),
		array(
			"value" => 65,
			"name" => "C1",
		),
		array(
			"value" => 78,
			"name" => "C2",
		),
		
	);
	
	$quest = array(
		array(
			"pytanie" => "Do you like ... Italian food ?",
			"odpowiedzi" => array(
				array(
					"text" => "-",
					"correct" => true,
				),
				array(
					"text" => "a",
				),
				array(
					"text" => "an",
				),
				array(
					"text" => "the",
				),
				
			),
		),
		array(
			"pytanie" => "I can't talk to you now. I ... a report.",
			"odpowiedzi" => array(
				array(
					"text" => "have written",
				),
				array(
					"text" => "wrote",
				),
				array(
					"text" => "am writing",
					"correct" => true,
				),
				array(
					"text" => "write",
				),
				
			),
		),
		array(
			"pytanie" => "Poor Jane! She ... to the dentist twice a month.",
			"odpowiedzi" => array(
				array(
					"text" => "go",
				),
				array(
					"text" => "going",
				),
				array(
					"text" => "goes",
					"correct" => true,
				),
				array(
					"text" => "is going",
				),
				
			),
		),
		array(
			"pytanie" => "We ... to live here before the Second World War.",
			"odpowiedzi" => array(
				array(
					"text" => "come",
				),
				array(
					"text" => "have come",
				),
				array(
					"text" => "came",
					"correct" => true,
				),
				array(
					"text" => "did come",
				),
				
			),
		),
		array(
			"pytanie" => "Look at the clouds! It ... !",
			"odpowiedzi" => array(
				array(
					"text" => "is going to rain",
					"correct" => true,
				),
				array(
					"text" => "rains",
				),
				array(
					"text" => "is snowing",
				),
				array(
					"text" => "has rained",
				),
				
			),
		),
		array(
			"pytanie" => "... is windy, but sunny today.",
			"odpowiedzi" => array(
				array(
					"text" => "There",
				),
				array(
					"text" => "That",
				),
				array(
					"text" => "This",
				),
				array(
					"text" => "It",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "She wants to lose some weight, ... she's going to the gym.",
			"odpowiedzi" => array(
				array(
					"text" => "because",
				),
				array(
					"text" => "to",
				),
				array(
					"text" => "so",
					"correct" => true,
				),
				array(
					"text" => "but",
				),
				
			),
		),
		array(
			"pytanie" => "I bought Mike a camera ' he really loves ... photographs.",
			"odpowiedzi" => array(
				array(
					"text" => "doing",
				),
				array(
					"text" => "seeing",
				),
				array(
					"text" => "making",
				),
				array(
					"text" => "taking",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Do you think you ... to Spain next summer?",
			"odpowiedzi" => array(
				array(
					"text" => "are going",
				),
				array(
					"text" => "go",
				),
				array(
					"text" => "went",
				),
				array(
					"text" => "will go",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "She is ... girl in our class.",
			"odpowiedzi" => array(
				array(
					"text" => "most pretty",
				),
				array(
					"text" => "the most pretty",
				),
				array(
					"text" => " the most prettiest",
				),
				array(
					"text" => "the prettiest",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Boston isn't ... interesting ... New York.",
			"odpowiedzi" => array(
				array(
					"text" => "much, than",
				),
				array(
					"text" => "as, than",
				),
				array(
					"text" => "as, as",
					"correct" => true,
				),
				array(
					"text" => "so, so",
				),
				
			),
		),
		array(
			"pytanie" => "This film is ... than the one I saw last week.",
			"odpowiedzi" => array(
				array(
					"text" => "more bad",
				),
				array(
					"text" => "worse",
					"correct" => true,
				),
				array(
					"text" => "worst",
				),
				array(
					"text" => "badder",
				),
				
			),
		),
		array(
			"pytanie" => "I went to London ... clothes.",
			"odpowiedzi" => array(
				array(
					"text" => "to buy",
					"correct" => true,
				),
				array(
					"text" => "so to buy",
				),
				array(
					"text" => "for buy",
				),
				array(
					"text" => "for buying",
				),
				
			),
		),
		array(
			"pytanie" => "This picture ... by a friend of my mother's.",
			"odpowiedzi" => array(
				array(
					"text" => "is painting",
				),
				array(
					"text" => "was painted",
					"correct" => true,
				),
				array(
					"text" => "was painting",
				),
				array(
					"text" => "is painted",
				),
				
			),
		),
		array(
			"pytanie" => "As soon as she came in I knew I ... her before.",
			"odpowiedzi" => array(
				array(
					"text" => "had seen",
					"correct" => true,
				),
				array(
					"text" => "saw",
				),
				array(
					"text" => "have seen",
				),
				array(
					"text" => "was seen",
				),
				
			),
		),
		array(
			"pytanie" => "She's an old friend ' I ... her ... years.",
			"odpowiedzi" => array(
				array(
					"text" => "have known, since",
				),
				array(
					"text" => "have been knowing, for",
				),
				array(
					"text" => "have known, for",
					"correct" => true,
				),
				array(
					"text" => "know, for",
				),
				
			),
		),
		array(
			"pytanie" => "'I love this music.' ... he!'",
			"odpowiedzi" => array(
				array(
					"text" => "So does",
					"correct" => true,
				),
				array(
					"text" => "So is",
				),
				array(
					"text" => "Neither does",
				),
				array(
					"text" => "Nor does",
				),
				
			),
		),
		array(
			"pytanie" => "I ... you if you ... that again.",
			"odpowiedzi" => array(
				array(
					"text" => "hit, say",
				),
				array(
					"text" => "hit, will say",
				),
				array(
					"text" => "will hit, say",
					"correct" => true,
				),
				array(
					"text" => "will hit, will say",
				),
				
			),
		),
		array(
			"pytanie" => "She met her husband while she ... in Egypt.",
			"odpowiedzi" => array(
				array(
					"text" => "was travelling",
					"correct" => true,
				),
				array(
					"text" => "travelled",
				),
				array(
					"text" => "has traveled would travel",
				),
				array(
					"text" => "would travel",
				),
				
			),
		),
		array(
			"pytanie" => "If you asked nicely, mother ... you have a piece of cake.",
			"odpowiedzi" => array(
				array(
					"text" => "will let",
				),
				array(
					"text" => "would have let",
				),
				array(
					"text" => "would let",
					"correct" => true,
				),
				array(
					"text" => "lets",
				),
				
			),
		),
		array(
			"pytanie" => "I ... smoke like a chimney but I gave up last year.",
			"odpowiedzi" => array(
				array(
					"text" => "used to",
					"correct" => true,
				),
				array(
					"text" => "use to",
				),
				array(
					"text" => "liked",
				),
				array(
					"text" => "would like",
				),
				
			),
		),
		array(
			"pytanie" => "Peter never ran a business, ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "didn't he",
					"correct" => true,
				),
				array(
					"text" => "deos he",
				),
				array(
					"text" => "did he",
				),
				array(
					"text" => "doesn't he",
				),
				
			),
		),
		array(
			"pytanie" => "That is the man ... took your coat.",
			"odpowiedzi" => array(
				array(
					"text" => "which",
				),
				array(
					"text" => "who",
					"correct" => true,
				),
				array(
					"text" => "whose",
				),
				
			),
		),
		array(
			"pytanie" => "He asked me if ... the letter yet.",
			"odpowiedzi" => array(
				array(
					"text" => "I had received",
					"correct" => true,
				),
				array(
					"text" => "have I received",
				),
				array(
					"text" => "had I received",
				),
				array(
					"text" => "did I received",
				),
				
			),
		),
		array(
			"pytanie" => "The general manager is away ... business this week.",
			"odpowiedzi" => array(
				array(
					"text" => "for",
				),
				array(
					"text" => "on",
					"correct" => true,
				),
				array(
					"text" => "in",
				),
				array(
					"text" => "about",
				),
				
			),
		),
		array(
			"pytanie" => "'You look tired.' 'I ... in the garden all day!'",
			"odpowiedzi" => array(
				array(
					"text" => "dug",
				),
				array(
					"text" => "have dug",
				),
				array(
					"text" => "have beed digging",
					"correct" => true,
				),
				array(
					"text" => "was digging",
				),
				
			),
		),
		array(
			"pytanie" => "Where can such rocks ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "to be found",
				),
				array(
					"text" => "be found",
					"correct" => true,
				),
				array(
					"text" => "find",
				),
				array(
					"text" => "had been found",
				),
				
			),
		),
		array(
			"pytanie" => "The policeman ... me not to park there.",
			"odpowiedzi" => array(
				array(
					"text" => "talked",
				),
				array(
					"text" => "said",
				),
				array(
					"text" => "told",
					"correct" => true,
				),
				array(
					"text" => "spoke",
				),
				
			),
		),
		array(
			"pytanie" => "The student failed the exam as it was ... .",
			"odpowiedzi" => array(
				array(
					"text" => "hard",
					"correct" => true,
				),
				array(
					"text" => "hardly",
				),
				array(
					"text" => "harder",
				),
				array(
					"text" => "hardest",
				),
				
			),
		),
		array(
			"pytanie" => "I know nothing about car engines so I will ... .",
			"odpowiedzi" => array(
				array(
					"text" => "fix it",
				),
				array(
					"text" => "have fix it",
				),
				array(
					"text" => "fixed it",
				),
				array(
					"text" => "have it fixed",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "I ... lost if I hadn't had a map on me.",
			"odpowiedzi" => array(
				array(
					"text" => "would get",
				),
				array(
					"text" => "would got",
				),
				array(
					"text" => "would have got",
					"correct" => true,
				),
				array(
					"text" => "got",
				),
				
			),
		),
		array(
			"pytanie" => "'I can't hear the TV very well.' 'I will ... it up.'",
			"odpowiedzi" => array(
				array(
					"text" => "make",
				),
				array(
					"text" => "turn",
					"correct" => true,
				),
				array(
					"text" => "take",
				),
				array(
					"text" => "give",
				),
				
			),
		),
		array(
			"pytanie" => "How many times ... to Chicago?",
			"odpowiedzi" => array(
				array(
					"text" => "did you go",
				),
				array(
					"text" => "do you go",
				),
				array(
					"text" => "have you been",
					"correct" => true,
				),
				array(
					"text" => "were you",
				),
				
			),
		),
		array(
			"pytanie" => "The film ... when the lights went out.",
			"odpowiedzi" => array(
				array(
					"text" => "recorded",
				),
				array(
					"text" => "was recording",
					"correct" => true,
				),
				array(
					"text" => "was being recorded",
				),
				array(
					"text" => "was recorded",
				),
				
			),
		),
		array(
			"pytanie" => "We saw him ... the house.",
			"odpowiedzi" => array(
				array(
					"text" => "to leave",
				),
				array(
					"text" => "leaving",
					"correct" => true,
				),
				array(
					"text" => "leaves",
				),
				array(
					"text" => "to leaving",
				),
				
			),
		),
		array(
			"pytanie" => "Mary is a sensitive girl ' you really ... at her last night.",
			"odpowiedzi" => array(
				array(
					"text" => "could shout",
				),
				array(
					"text" => "shouldn't have shouted",
					"correct" => true,
				),
				array(
					"text" => "shouldn't shouted",
				),
				array(
					"text" => "needn't shout",
				),
				
			),
		),
		array(
			"pytanie" => "What's this? It ... delicious. Have you made it by yourself?",
			"odpowiedzi" => array(
				array(
					"text" => "tastes",
					"correct" => true,
				),
				array(
					"text" => "has tasted",
				),
				array(
					"text" => "is tasting",
				),
				array(
					"text" => "would taste",
				),
				
			),
		),
		array(
			"pytanie" => "As the chairman couldn't arrive, we ... off the meeting until the next day.",
			"odpowiedzi" => array(
				array(
					"text" => "put",
				),
				array(
					"text" => "called",
					"correct" => true,
				),
				array(
					"text" => "took",
				),
				array(
					"text" => "got",
				),
				
			),
		),
		array(
			"pytanie" => "John's a typical couch ... ' he does nothing but sits in front of the TV and eats crisps.",
			"odpowiedzi" => array(
				array(
					"text" => "tomato",
				),
				array(
					"text" => "potato",
					"correct" => true,
				),
				array(
					"text" => "cucumber",
				),
				array(
					"text" => "cauliflower",
				),
				
			),
		),
		array(
			"pytanie" => "They ... next Monday at 10.00.",
			"odpowiedzi" => array(
				array(
					"text" => "are arriving",
					"correct" => true,
				),
				array(
					"text" => "will have arrived",
				),
				array(
					"text" => "have arrived",
				),
				array(
					"text" => "arrive",
				),
				
			),
		),
		array(
			"pytanie" => "It ... snow tomorrow ' I'm not sure.",
			"odpowiedzi" => array(
				array(
					"text" => "should",
				),
				array(
					"text" => "will",
				),
				array(
					"text" => "might",
					"correct" => true,
				),
				array(
					"text" => "must",
				),
				
			),
		),
		array(
			"pytanie" => "He's always ... lies! Don't trust him.",
			"odpowiedzi" => array(
				array(
					"text" => "talking",
				),
				array(
					"text" => "speaking",
				),
				array(
					"text" => "telling",
					"correct" => true,
				),
				array(
					"text" => "saying",
				),
				
			),
		),
		array(
			"pytanie" => "Luckily, the firemen ... save everyone from the fire at the station.",
			"odpowiedzi" => array(
				array(
					"text" => "could",
				),
				array(
					"text" => "managed",
				),
				array(
					"text" => "were able to",
					"correct" => true,
				),
				array(
					"text" => "must",
				),
				
			),
		),
		array(
			"pytanie" => "After a downpour the ... was very wet and it was really hard to play football on it.",
			"odpowiedzi" => array(
				array(
					"text" => "playground",
				),
				array(
					"text" => "rink",
				),
				array(
					"text" => "pitch",
					"correct" => true,
				),
				array(
					"text" => "course",
				),
				
			),
		),
		array(
			"pytanie" => "If I've got a headache, I always ... an aspirin.",
			"odpowiedzi" => array(
				array(
					"text" => "took",
				),
				array(
					"text" => "will take",
				),
				array(
					"text" => "would take",
				),
				array(
					"text" => "take",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "'Can I borrow the book next week?' 'Yes, I ... it by Monday.'",
			"odpowiedzi" => array(
				array(
					"text" => "will have read",
					"correct" => true,
				),
				array(
					"text" => "would read",
				),
				array(
					"text" => "would have read",
				),
				array(
					"text" => "will be reading",
				),
				
			),
		),
		array(
			"pytanie" => "They ... already. It's only 10.30. I'm sure they're still at home.",
			"odpowiedzi" => array(
				array(
					"text" => "mustn't leave",
				),
				array(
					"text" => "can't left",
				),
				array(
					"text" => "didn't leave",
				),
				array(
					"text" => "can't have left",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "I'm afraid I can't afford that car. I wish I ... more money.",
			"odpowiedzi" => array(
				array(
					"text" => "will have",
				),
				array(
					"text" => "would have",
				),
				array(
					"text" => "had",
					"correct" => true,
				),
				array(
					"text" => "have",
				),
				
			),
		),
		array(
			"pytanie" => "There are two hotels in our town. ... one has got a swimming pool.",
			"odpowiedzi" => array(
				array(
					"text" => "All",
				),
				array(
					"text" => "Each",
					"correct" => true,
				),
				array(
					"text" => "Every",
				),
				array(
					"text" => "None",
				),
				
			),
		),
		array(
			"pytanie" => "Please drive slowly ... order to avoid accidents.",
			"odpowiedzi" => array(
				array(
					"text" => "for",
				),
				array(
					"text" => "with",
				),
				array(
					"text" => "that",
				),
				array(
					"text" => "in",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "I'm afraid this blouse doesn't ... me. What size is it?",
			"odpowiedzi" => array(
				array(
					"text" => "suit",
				),
				array(
					"text" => "fit",
					"correct" => true,
				),
				array(
					"text" => "match",
				),
				array(
					"text" => "put on",
				),
				
			),
		),
		array(
			"pytanie" => "I often have a headache as I'm still ... contact lenses.",
			"odpowiedzi" => array(
				array(
					"text" => "got used to wearing",
				),
				array(
					"text" => "used to wearing",
				),
				array(
					"text" => "getting used to wearing",
					"correct" => true,
				),
				array(
					"text" => "used to wear",
				),
				
			),
		),
		array(
			"pytanie" => "I've no idea where the key is. I ... it at home.",
			"odpowiedzi" => array(
				array(
					"text" => "left",
				),
				array(
					"text" => "can have left",
				),
				array(
					"text" => "might have left",
				),
				array(
					"text" => "must have left",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "'Susan is giving a ... party this weekend.' 'Oh, really? I didn't know she's getting married.'",
			"odpowiedzi" => array(
				array(
					"text" => "cow",
				),
				array(
					"text" => "rabbit",
				),
				array(
					"text" => "hen",
					"correct" => true,
				),
				array(
					"text" => "bee",
				),
				
			),
		),
		array(
			"pytanie" => "I wish you ... your music so loudly. It drives me mad!",
			"odpowiedzi" => array(
				array(
					"text" => "wouldn't play",
				),
				array(
					"text" => "didn't play",
					"correct" => true,
				),
				array(
					"text" => "aren't playing",
				),
				array(
					"text" => "don't play",
				),
				
			),
		),
		array(
			"pytanie" => "The robber denied ... anyone in the bank.",
			"odpowiedzi" => array(
				array(
					"text" => "to kill",
					"correct" => true,
				),
				array(
					"text" => "that kill",
				),
				array(
					"text" => "killing",
				),
				array(
					"text" => "for killing",
				),
				
			),
		),
		array(
			"pytanie" => "There's something wrong with the TV. It ... .",
			"odpowiedzi" => array(
				array(
					"text" => "needs fixing",
					"correct" => true,
				),
				array(
					"text" => "is needed to fix",
				),
				array(
					"text" => "fixes",
				),
				array(
					"text" => "to be fixed",
				),
				
			),
		),
		array(
			"pytanie" => "'Ben seems to know everything.' 'No wonder. He's got ... lot of books.'",
			"odpowiedzi" => array(
				array(
					"text" => "such a",
					"correct" => true,
				),
				array(
					"text" => "so a",
				),
				array(
					"text" => "so",
				),
				array(
					"text" => "such",
				),
				
			),
		),
		array(
			"pytanie" => "... though it's raining we can still go for a walk.",
			"odpowiedzi" => array(
				array(
					"text" => "So",
				),
				array(
					"text" => "Even",
					"correct" => true,
				),
				array(
					"text" => "Spite",
				),
				array(
					"text" => "As",
				),
				
			),
		),
		array(
			"pytanie" => "She gave him a map so that he ... get lost.",
			"odpowiedzi" => array(
				array(
					"text" => "won't",
				),
				array(
					"text" => "wouldn't",
					"correct" => true,
				),
				array(
					"text" => "didn't",
				),
				array(
					"text" => "don't",
				),
				
			),
		),
		array(
			"pytanie" => "Andrea ... me every day this week.",
			"odpowiedzi" => array(
				array(
					"text" => "was phoning",
				),
				array(
					"text" => "phones",
				),
				array(
					"text" => "has phoned",
				),
				array(
					"text" => "is phoning",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Once I ... a huge collection of shells, but I sold them all.",
			"odpowiedzi" => array(
				array(
					"text" => "have had",
				),
				array(
					"text" => "had had",
				),
				array(
					"text" => "would have",
				),
				array(
					"text" => "used to have",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Wouldn't you ... learn French than Italian?",
			"odpowiedzi" => array(
				array(
					"text" => "better",
				),
				array(
					"text" => "rather",
					"correct" => true,
				),
				array(
					"text" => "did",
				),
				array(
					"text" => "have",
				),
				
			),
		),
		array(
			"pytanie" => "If you ... quiet, we'll watch the video. (request)",
			"odpowiedzi" => array(
				array(
					"text" => "would be",
				),
				array(
					"text" => "be",
					"correct" => true,
				),
				array(
					"text" => "will be",
				),
				array(
					"text" => "have been",
				),
				
			),
		),
		array(
			"pytanie" => "Being both unemployed, they find it hard to make ... meet.",
			"odpowiedzi" => array(
				array(
					"text" => "days",
				),
				array(
					"text" => "ends",
					"correct" => true,
				),
				array(
					"text" => "fingers",
				),
				array(
					"text" => "jobs",
				),
				
			),
		),
		array(
			"pytanie" => "Drugs can cause serious ... to your health.",
			"odpowiedzi" => array(
				array(
					"text" => "injury",
				),
				array(
					"text" => "damage",
					"correct" => true,
				),
				array(
					"text" => "hurt",
				),
				array(
					"text" => "illness",
				),
				
			),
		),
		array(
			"pytanie" => "Barry is believed to ... for the Mafia for many years before he was caught.",
			"odpowiedzi" => array(
				array(
					"text" => "work",
				),
				array(
					"text" => "be workin",
				),
				array(
					"text" => "has worked",
					"correct" => true,
				),
				array(
					"text" => "have been working",
				),
				
			),
		),
		array(
			"pytanie" => "Hardly ever ... such a boring film.",
			"odpowiedzi" => array(
				array(
					"text" => "do I see",
				),
				array(
					"text" => "did I see",
				),
				array(
					"text" => "have I seen",
					"correct" => true,
				),
				array(
					"text" => "I have seen",
				),
				
			),
		),
		array(
			"pytanie" => "They are sending a spacecraft to ... the planet Mars.",
			"odpowiedzi" => array(
				array(
					"text" => "investigate",
				),
				array(
					"text" => "explore",
					"correct" => true,
				),
				array(
					"text" => "inquire",
				),
				array(
					"text" => "look into",
				),
				
			),
		),
		array(
			"pytanie" => "I've been trying to get in touch with Joe all week long, but ... vain. Nobody answers his phone.",
			"odpowiedzi" => array(
				array(
					"text" => "on",
				),
				array(
					"text" => "off",
				),
				array(
					"text" => "in",
					"correct" => true,
				),
				array(
					"text" => "from",
				),
				
			),
		),
		array(
			"pytanie" => "Damn it! I can't afford the car now. If only I ... more money last year.",
			"odpowiedzi" => array(
				array(
					"text" => "saved",
				),
				array(
					"text" => "had saved",
					"correct" => true,
				),
				array(
					"text" => "was saving",
				),
				array(
					"text" => "were saving",
				),
				
			),
		),
		array(
			"pytanie" => "Oh, that's a pity she didn't know. .... her, I'd have spoken to her.",
			"odpowiedzi" => array(
				array(
					"text" => "If I see",
				),
				array(
					"text" => "Should I see",
				),
				array(
					"text" => "Had I seen",
					"correct" => true,
				),
				array(
					"text" => "Do I see",
				),
				
			),
		),
		array(
			"pytanie" => "The play was a tragedy, ... I thought it was going to be a comedy.",
			"odpowiedzi" => array(
				array(
					"text" => "however",
				),
				array(
					"text" => "despite",
				),
				array(
					"text" => "whereas",
					"correct" => true,
				),
				array(
					"text" => "in spite of",
				),
				
			),
		),
		array(
			"pytanie" => "The police ... real bullets at the practice targets.",
			"odpowiedzi" => array(
				array(
					"text" => "sent",
				),
				array(
					"text" => "threw",
				),
				array(
					"text" => "fired",
					"correct" => true,
				),
				array(
					"text" => "shot",
				),
				
			),
		),
		array(
			"pytanie" => "It's not very polite to boast ... one's achievements.",
			"odpowiedzi" => array(
				array(
					"text" => "for",
				),
				array(
					"text" => "in",
				),
				array(
					"text" => "of",
					"correct" => true,
				),
				array(
					"text" => "from",
				),
				
			),
		),
		array(
			"pytanie" => "I'm afraid we'll have to take a bus as my car is out of ... .",
			"odpowiedzi" => array(
				array(
					"text" => "job",
				),
				array(
					"text" => "work",
				),
				array(
					"text" => "order",
					"correct" => true,
				),
				array(
					"text" => "power",
				),
				
			),
		),
		array(
			"pytanie" => "I don't think Robert is responsible enough to ... a business on his own.",
			"odpowiedzi" => array(
				array(
					"text" => "do",
				),
				array(
					"text" => "bear",
				),
				array(
					"text" => "make",
				),
				array(
					"text" => "run",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Don't mumble! I can't ... what you're saying.",
			"odpowiedzi" => array(
				array(
					"text" => "make up",
				),
				array(
					"text" => "get through",
				),
				array(
					"text" => "get over",
				),
				array(
					"text" => "make out",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "He was accused of ... an old lady as she was walking home one evening.",
			"odpowiedzi" => array(
				array(
					"text" => "stealing",
				),
				array(
					"text" => "burgling",
				),
				array(
					"text" => "blackmailing",
				),
				array(
					"text" => "mugging",
					"correct" => true,
				),
				
			),
		),
		
	);