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
			"value" => 20,
			"name" => "A2",
		),
		array(
			"value" => 30,
			"name" => "B1",
		),
		array(
			"value" => 40,
			"name" => "B2",
		),
		array(
			"value" => 50,
			"name" => "C1",
		),
		array(
			"value" => 60,
			"name" => "C2",
		),
		
	);
	
	$quest = array(

		array(
			"pytanie" => "Wie ... du?",
			"odpowiedzi" => array(
				array(
					"text" => "bist",
				),
				array(
					"text" => "heißen",
				),
				array(
					"text" => "heißt",
					"correct" => true,
				),
				array(
					"text" => "sein",
				),
			),
		),
		array(
			"pytanie" => "Mein Name ... Carola.",
			"odpowiedzi" => array(
				array(
					"text" => "sein",
				),
				array(
					"text" => "ist",
					"correct" => true,
				),
				array(
					"text" => "heißt",
				),
				array(
					"text" => "heißen",
				),
			),
		),
		array(
			"pytanie" => "Und ... kommst du?",
			"odpowiedzi" => array(
				array(
					"text" => "wo",
				),
				array(
					"text" => "woher",
					"correct" => true,
				),
				array(
					"text" => "wohin",
				),
				array(
					"text" => "woraus",
				),
			),
		),
		array(
			"pytanie" => "... Berlin.",
			"odpowiedzi" => array(
				array(
					"text" => "Aus",
					"correct" => true,
				),
				array(
					"text" => "In",
				),
				array(
					"text" => "Nach",
				),
				array(
					"text" => "Von",
				),
			),
		),
		array(
			"pytanie" => "Das sind Eva und Ilsa. ... sind noch Schülerinnen.",
			"odpowiedzi" => array(
				array(
					"text" => "Die",
				),
				array(
					"text" => "Ihnen",
				),
				array(
					"text" => "Sie",
					"correct" => true,
				),
				array(
					"text" => "Ihr",
				),
			),
		),
		array(
			"pytanie" => "Das ist doch ... Waschmaschine, das ist ein Geschirrspüler.",
			"odpowiedzi" => array(
				array(
					"text" => "keine",
					"correct" => true,
				),
				array(
					"text" => "nicht",
				),
				array(
					"text" => "kein",
				),
				array(
					"text" => "nichts",
				),
			),
		),
		array(
			"pytanie" => "Entschuldigen Sie. Ist das hier ... Tasche?",
			"odpowiedzi" => array(
				array(
					"text" => "deine",
				),
				array(
					"text" => "Ihre",
					"correct" => true,
				),
				array(
					"text" => "dein",
				),
				array(
					"text" => "kein",
				),
			),
		),
		array(
			"pytanie" => "Ich trinke eine Cola. Und was ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "trinken du",
				),
				array(
					"text" => "hast du",
				),
				array(
					"text" => "nimmst du",
					"correct" => true,
				),
				array(
					"text" => "brauchst du.",
				),
			),
		),
		array(
			"pytanie" => "Ich ... jetzt keine Cola.",
			"odpowiedzi" => array(
				array(
					"text" => "esse",
				),
				array(
					"text" => "haben",
				),
				array(
					"text" => "will",
					"correct" => true,
				),
				array(
					"text" => "habt",
				),
			),
		),
		array(
			"pytanie" => "Ich bestelle mir lieber ... Orangensaft.",
			"odpowiedzi" => array(
				array(
					"text" => "einen",
					"correct" => true,
				),
				array(
					"text" => "der",
				),
				array(
					"text" => "ein",
				),
				array(
					"text" => "keine",
				),
			),
		),
		array(
			"pytanie" => "Hier dürfen Sie nicht rauchen! Bitte ... !",
			"odpowiedzi" => array(
				array(
					"text" => "aufhören Sie",
				),
				array(
					"text" => "hören auf Sie",
				),
				array(
					"text" => "hören Sie auf",
					"correct" => true,
				),
				array(
					"text" => "hören Sie zu",
				),
			),
		),
		array(
			"pytanie" => "Mama, ... ich noch spielen? - Nein, du musst jetzt ins Bett.",
			"odpowiedzi" => array(
				array(
					"text" => "darf",
					"correct" => true,
				),
				array(
					"text" => "kann",
				),
				array(
					"text" => "soll",
				),
				array(
					"text" => "muss",
				),
			),
		),
		array(
			"pytanie" => "Wie spät ist es? - 13:30: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "halb eins",
				),
				array(
					"text" => "halb zwei",
					"correct" => true,
				),
				array(
					"text" => "dreißig und eins",
				),
				array(
					"text" => "Viertel nach eins",
				),
			),
		),
		array(
			"pytanie" => "Wo gibt es hier ein gutes Restaurant? Hier in der Nähe gibt es leider ... .",
			"odpowiedzi" => array(
				array(
					"text" => "keins",
					"correct" => true,
				),
				array(
					"text" => "keine",
				),
				array(
					"text" => "kein",
				),
				array(
					"text" => "keiner",
				),
			),
		),
		array(
			"pytanie" => "Wo ist Martin? - Ich glaube, ... Garage.",
			"odpowiedzi" => array(
				array(
					"text" => "in die",
				),
				array(
					"text" => "in",
				),
				array(
					"text" => "in der",
					"correct" => true,
				),
				array(
					"text" => "in dem",
				),
			),
		),
		array(
			"pytanie" => "Ich habe solche Schmerzen. Mein Arzt sagt, ich ... Gymnastik machen.",
			"odpowiedzi" => array(
				array(
					"text" => "möchte",
				),
				array(
					"text" => "mag",
				),
				array(
					"text" => "soll",
					"correct" => true,
				),
				array(
					"text" => "kann",
				),
			),
		),
		array(
			"pytanie" => "Und was ... du gestern Abend gemacht?",
			"odpowiedzi" => array(
				array(
					"text" => "bist",
				),
				array(
					"text" => "hast",
					"correct" => true,
				),
				array(
					"text" => "hat",
				),
				array(
					"text" => "hättest",
				),
			),
		),
		array(
			"pytanie" => "Ich habe am Computer ... .",
			"odpowiedzi" => array(
				array(
					"text" => "gespielt",
					"correct" => true,
				),
				array(
					"text" => "spielt",
				),
				array(
					"text" => "geschreibt",
				),
				array(
					"text" => "geschrieben",
				),
			),
		),
		array(
			"pytanie" => "Ist Herr Meier wieder zu Hause? - Ja, ich habe ... gesehen.",
			"odpowiedzi" => array(
				array(
					"text" => "er",
				),
				array(
					"text" => "es",
				),
				array(
					"text" => "ihn",
					"correct" => true,
				),
				array(
					"text" => "ihm",
				),
			),
		),
		array(
			"pytanie" => "Warum ... ihr am Freitag nicht gekommen?",
			"odpowiedzi" => array(
				array(
					"text" => "sind",
				),
				array(
					"text" => "hattest",
				),
				array(
					"text" => "seid",
					"correct" => true,
				),
				array(
					"text" => "seit",
				),
			),
		),
		array(
			"pytanie" => "Wo ... du letzte Woche?",
			"odpowiedzi" => array(
				array(
					"text" => "bist",
				),
				array(
					"text" => "warst",
					"correct" => true,
				),
				array(
					"text" => "hattest",
				),
				array(
					"text" => "wärest",
				),
			),
		),
		array(
			"pytanie" => "Wir wohnen jetzt schon ein halbes Jahr ... Berlin.?",
			"odpowiedzi" => array(
				array(
					"text" => "auf",
				),
				array(
					"text" => "ihm",
				),
				array(
					"text" => "in",
					"correct" => true,
				),
				array(
					"text" => "bei",
				),
			),
		),
		array(
			"pytanie" => "Hier kann man wirklich viel machen, zum Beispiel ... Zoologischen Garten gehen.",
			"odpowiedzi" => array(
				array(
					"text" => "im",
				),
				array(
					"text" => "in den",
					"correct" => true,
				),
				array(
					"text" => "in dem",
				),
				array(
					"text" => "in der",
				),
			),
		),
		array(
			"pytanie" => "... Disco kann man bis zum frühen Morgen tanzen.",
			"odpowiedzi" => array(
				array(
					"text" => "In der",
					"correct" => true,
				),
				array(
					"text" => "Auf",
				),
				array(
					"text" => "Im,",
				),
				array(
					"text" => "In die",
				),
			),
		),
		array(
			"pytanie" => "Guten Tag. Kann ich ... helfen? Ich suche eine CD, als Geschenk für meine Freundin.",
			"odpowiedzi" => array(
				array(
					"text" => "ihnen",
				),
				array(
					"text" => "Ihr",
				),
				array(
					"text" => "Ihnen",
					"correct" => true,
				),
				array(
					"text" => "ihr",
				),
			),
		),
		array(
			"pytanie" => "Wie wär’s mit ... hier? Der ist sehr gut.",
			"odpowiedzi" => array(
				array(
					"text" => "dem",
					"correct" => true,
				),
				array(
					"text" => "der",
				),
				array(
					"text" => "ihm",
				),
				array(
					"text" => "denen",
				),
			),
		),
		array(
			"pytanie" => "Dieser MP3-Player ist sehr teuer, aber er funktioniert auch viel ... als dieser hier.",
			"odpowiedzi" => array(
				array(
					"text" => "am besten",
				),
				array(
					"text" => "besser",
					"correct" => true,
				),
				array(
					"text" => "mehr",
				),
				array(
					"text" => "meistens",
				),
			),
		),
		array(
			"pytanie" => "Marie ist ein bisschen größer ... ihre Schwester.",
			"odpowiedzi" => array(
				array(
					"text" => "als",
					"correct" => true,
				),
				array(
					"text" => "ob",
				),
				array(
					"text" => "wie",
				),
				array(
					"text" => "also",
				),
			),
		),
		array(
			"pytanie" => "Ihr neuer Freund sieht nicht gut aus: Er hat einen ... Bauch.",
			"odpowiedzi" => array(
				array(
					"text" => "dick",
				),
				array(
					"text" => "dicker",
				),
				array(
					"text" => "dicken",
					"correct" => true,
				),
				array(
					"text" => "dicksten",
				),
			),
		),
		array(
			"pytanie" => "Was soll ich heute Abend nur anziehen? Das ... Kleid?",
			"odpowiedzi" => array(
				array(
					"text" => "schwarz",
				),
				array(
					"text" => "schwarze",
					"correct" => true,
				),
				array(
					"text" => "schwarzem",
				),
				array(
					"text" => "schwarzen",
				),
			),
		),
		array(
			"pytanie" => "Frau Schmidt arbeitet als Flugbegleiterin, ... ihr die unregelmäßige Arbeitszeit nicht gefällt.",
			"odpowiedzi" => array(
				array(
					"text" => "denn",
				),
				array(
					"text" => "obwohl",
					"correct" => true,
				),
				array(
					"text" => "trotzdem",
				),
				array(
					"text" => "aber",
				),
			),
		),
		array(
			"pytanie" => "Hans ... eigentlich Pilot werden. Aber er ist dann doch Busfahrer geworden.",
			"odpowiedzi" => array(
				array(
					"text" => "will",
				),
				array(
					"text" => "wollen",
				),
				array(
					"text" => "wollte",
					"correct" => true,
				),
				array(
					"text" => "hat gewollt",
				),
			),
		),
		array(
			"pytanie" => "Mark ist krank. ... kann er heute nicht arbeiten.",
			"odpowiedzi" => array(
				array(
					"text" => "Denn",
				),
				array(
					"text" => "Deshalb",
					"correct" => true,
				),
				array(
					"text" => "Wenn",
				),
				array(
					"text" => "Danach",
				),
			),
		),
		array(
			"pytanie" => "Macht doch endlich den Laptop aus! Ihr interessiert ... doch nur fürs Internet.",
			"odpowiedzi" => array(
				array(
					"text" => "euch",
					"correct" => true,
				),
				array(
					"text" => "seid",
				),
				array(
					"text" => "ihr",
				),
				array(
					"text" => "sich",
				),
			),
		),
			array(
			"pytanie" => "Unsere Kinder ... gern viel mehr Computerspiele machen. Aber sie dürfen nicht.",
			"odpowiedzi" => array(
				array(
					"text" => "würden",
				),
				array(
					"text" => "hätten",
					"correct" => true,
				),
				array(
					"text" => "wären",
				),
				array(
					"text" => "haben",
				),
			),
		),
		array(
			"pytanie" => "Mein Bekannter besucht jetzt eine Tanzschule. Ich glaube, er ... gern ein Superstar.",
			"odpowiedzi" => array(
				array(
					"text" => "hätte",
				),
				array(
					"text" => "wäre",
					"correct" => true,
				),
				array(
					"text" => "war",
				),
				array(
					"text" => "will",
				),
			),
		),
		array(
			"pytanie" => "Warum nimmst du nicht das Auto da? Das hat einen wesentlich ... Benzinverbrauch als dieser Wagen hier.",
			"odpowiedzi" => array(
				array(
					"text" => "niedrig",
				),
				array(
					"text" => "niedrigen",
				),
				array(
					"text" => "niedrigeren",
					"correct" => true,
				),
				array(
					"text" => "niedriges",
				),
			),
		),
		array(
			"pytanie" => "Die Blinker ... bei der Autoinspektion morgen geprüft.",
			"odpowiedzi" => array(
				array(
					"text" => "haben",
				),
				array(
					"text" => "sind",
				),
				array(
					"text" => "werden",
					"correct" => true,
				),
				array(
					"text" => "sollen",
				),
			),
		),
		array(
			"pytanie" => "Werden die Reifen von der Werkstatt gratis ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "gewechselt",
					"correct" => true,
				),
				array(
					"text" => "wechseln",
				),
				array(
					"text" => "wechselt",
				),
				array(
					"text" => "wechselt",
				),
			),
		),
		array(
			"pytanie" => "Ich habe keine Lust, nach Griechenland ... .",
			"odpowiedzi" => array(
				array(
					"text" => "fahren",
				),
				array(
					"text" => "zu fahren",
					"correct" => true,
				),
				array(
					"text" => "zu bleiben",
				),
				array(
					"text" => "verreist",
				),
			),
		),
		array(
			"pytanie" => "Ich sagte: „Komm mal bitte her“, aber er ... einfach nur da und sah mich an.",
			"odpowiedzi" => array(
				array(
					"text" => "stand",
					"correct" => true,
				),
				array(
					"text" => "stände",
				),
				array(
					"text" => "steht",
				),
				array(
					"text" => "stellt",
				),
			),
		),
		array(
			"pytanie" => "... ich 10 Jahre alt war, haben mir meine Eltern ein Fahrrad geschenkt.",
			"odpowiedzi" => array(
				array(
					"text" => "Als",
					"correct" => true,
				),
				array(
					"text" => "Da",
				),
				array(
					"text" => "Wenn",
				),
				array(
					"text" => "Denn",
				),
			),
		),
		array(
			"pytanie" => "In Grönland ... fast immer.",
			"odpowiedzi" => array(
				array(
					"text" => "es schneit",
				),
				array(
					"text" => "schneit",
				),
				array(
					"text" => "schneit es",
					"correct" => true,
				),
				array(
					"text" => "schneidet es",
				),
			),
		),
		array(
			"pytanie" => "Ich möchte mit einem Mann leben, ... schöne Haare hat.",
			"odpowiedzi" => array(
				array(
					"text" => "der",
					"correct" => true,
				),
				array(
					"text" => "dem",
				),
				array(
					"text" => "den",
				),
				array(
					"text" => "denn",
				),
			),
		),
		array(
			"pytanie" => "Ich möchte an einem Berg leben, ... Spitze sehr hoch ist.",
			"odpowiedzi" => array(
				array(
					"text" => "das",
				),
				array(
					"text" => "dem",
				),
				array(
					"text" => "dessen",
					"correct" => true,
				),
				array(
					"text" => "deren",
				),
			),
		),
		array(
			"pytanie" => "Ich verbringe zu viel Zeit vor dem Computer. Jetzt brauche ich ... Lesen eine Brille.",
			"odpowiedzi" => array(
				array(
					"text" => "zu",
				),
				array(
					"text" => "bei",
				),
				array(
					"text" => "zum",
					"correct" => true,
				),
				array(
					"text" => "zur",
				),
			),
		),
		array(
			"pytanie" => "Herr Müller überlegt, ... er dieses Jahr in den Urlaub fahren soll.",
			"odpowiedzi" => array(
				array(
					"text" => "wo",
				),
				array(
					"text" => "ob",
					"correct" => true,
				),
				array(
					"text" => "wenn",
				),
				array(
					"text" => "wen",
				),
			),
		),
		array(
			"pytanie" => "Er ist in die USA gegangen, ... seine Kinder bessere Berufschancen haben.",
			"odpowiedzi" => array(
				array(
					"text" => "damit",
					"correct" => true,
				),
				array(
					"text" => "dass",
				),
				array(
					"text" => "um",
				),
				array(
					"text" => "dann",
				),
			),
		),
		array(
			"pytanie" => "... des Gewitters konnten wir gestern nicht fernsehen.",
			"odpowiedzi" => array(
				array(
					"text" => "Außer",
				),
				array(
					"text" => "Weil",
				),
				array(
					"text" => "Wegen",
					"correct" => true,
				),
				array(
					"text" => "Nach",
				),
			),
		),
		array(
			"pytanie" => "Viele Menschen haben Angst ... einem Erdbeben.",
			"odpowiedzi" => array(
				array(
					"text" => "vor",
					"correct" => true,
				),
				array(
					"text" => "von",
				),
				array(
					"text" => "fü",
				),
				array(
					"text" => "vom",
				),
			),
		),
		array(
			"pytanie" => "In ... Monat fahre ich zurück nach Berlin.",
			"odpowiedzi" => array(
				array(
					"text" => "ein",
				),
				array(
					"text" => "einem",
					"correct" => true,
				),
				array(
					"text" => "einem",
				),
				array(
					"text" => "einer",
				),
			),
		),
		array(
			"pytanie" => "Ich gehe jetzt. Ich will ... neue Schuhe kaufen.",
			"odpowiedzi" => array(
				array(
					"text" => "mir",
					"correct" => true,
				),
				array(
					"text" => "mich",
				),
				array(
					"text" => "mein",
				),
				array(
					"text" => "dich",
				),
			),
		),
		array(
			"pytanie" => "Du, ich brauche dein Handy. Würdest du ... leihen?",
			"odpowiedzi" => array(
				array(
					"text" => "er mir",
				),
				array(
					"text" => "es mir",
					"correct" => true,
				),
				array(
					"text" => "ihm mir",
				),
				array(
					"text" => "sie mir",
				),
			),
		),
		array(
			"pytanie" => "Sie haben ... beim Tanzen kennen gelernt.",
			"odpowiedzi" => array(
				array(
					"text" => "sich",
					"correct" => true,
				),
				array(
					"text" => "ihnen",
				),
				array(
					"text" => "ihr",
				),
				array(
					"text" => "einander",
				),
			),
		),
		array(
			"pytanie" => "Nach Angaben der Polizei ... der Dieb gestern verhaftet worden.",
			"odpowiedzi" => array(
				array(
					"text" => "ist",
				),
				array(
					"text" => "sei",
					"correct" => true,
				),
				array(
					"text" => "habe",
				),
				array(
					"text" => "hat",
				),
			),
		),
		array(
			"pytanie" => "Wenn sie gestern in die Stadt gegangen ... , hätte sie mich getroffen.",
			"odpowiedzi" => array(
				array(
					"text" => "hätte",
				),
				array(
					"text" => "wäre",
					"correct" => true,
				),
				array(
					"text" => "würde",
				),
				array(
					"text" => "wurde",
				),
			),
		),
		array(
			"pytanie" => "Diese Lösung ... nicht in Frage, stellte der Finanzminister fest.",
			"odpowiedzi" => array(
				array(
					"text" => "kommt",
					"correct" => true,
				),
				array(
					"text" => "komme",
				),
				array(
					"text" => "käme",
				),
				array(
					"text" => "steht",
				),
			),
		),
		array(
			"pytanie" => "... ich doch damals die CD gekauft!",
			"odpowiedzi" => array(
				array(
					"text" => "hätte",
					"correct" => true,
				),
				array(
					"text" => "wäre",
				),
				array(
					"text" => "würde",
				),
				array(
					"text" => "habe",
				),
			),
		),
		array(
			"pytanie" => "Zum ... ist niemand zu alt.",
			"odpowiedzi" => array(
				array(
					"text" => "Lesen",
				),
				array(
					"text" => "Liegen",
				),
				array(
					"text" => "Lernen",
					"correct" => true,
				),
				array(
					"text" => "Legen",
				),
			),
		),
		array(
			"pytanie" => "Man kann Daten sichern, .. man sie speichert.",
			"odpowiedzi" => array(
				array(
					"text" => "weil",
					"correct" => true,
				),
				array(
					"text" => "indem",
				),
				array(
					"text" => "deshalb",
				),
				array(
					"text" => "so",
				),
			),
		),
		array(
			"pytanie" => "„Steh auf „ – hat err gesagt als er in den Raum eintratt. Er hat mir gesagt: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "ich solle aufstehen",
					"correct" => true,
				),
				array(
					"text" => "ich muss aufstehen",
				),
				array(
					"text" => "mir aufzustehen",
				),
				array(
					"text" => "mich aufstehen",
				),
			),
		),
		array(
			"pytanie" => "Nachdem ich das Buch gelesen habe, ... ich ins Bett ... .",
			"odpowiedzi" => array(
				array(
					"text" => "habe, gegangen",
				),
				array(
					"text" => "hatte, gegangen",
				),
				array(
					"text" => "war, gegangen",
				),
				array(
					"text" => "gehe, --",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Falls Sie welche Fragen haben ... ich Ihnen gerne zur Verfügung.",
			"odpowiedzi" => array(
				array(
					"text" => "stehe",
					"correct" => true,
				),
				array(
					"text" => "komme",
				),
				array(
					"text" => "ruft",
				),
				array(
					"text" => "helfe",
				),
			),
		),
		array(
			"pytanie" => "Ende gut, alles ... .",
			"odpowiedzi" => array(
				array(
					"text" => "Mut",
				),
				array(
					"text" => "Hut",
				),
				array(
					"text" => "gut",
					"correct" => true,
				),
				array(
					"text" => "klappt",
				),
			),
		),
		array(
			"pytanie" => "... ich wieder zu Hause bin, ruf ich dich gleich an.",
			"odpowiedzi" => array(
				array(
					"text" => "Als",
				),
				array(
					"text" => "Sobald",
					"correct" => true,
				),
				array(
					"text" => "Nachdem",
				),
				array(
					"text" => "Wann",
				),
			),
		),


	);