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
			"value" => 16,
			"name" => "A2",
		),
		array(
			"value" => 24,
			"name" => "B1",
		),
		array(
			"value" => 32,
			"name" => "B2",
		),
		array(
			"value" => 40,
			"name" => "C1",
		),
		array(
			"value" => 48,
			"name" => "C2",
		),
		
	);
	
	$quest = array(

		array(
			"pytanie" => "Ils ... polonais.",
			"odpowiedzi" => array(
				array(
					"text" => "font",		
				),
				array(
					"text" => "sont",
					"correct" => true,
				),
				array(
					"text" => "ont",
				),
				array(
					"text" => "vont",
				),
				
			),
		),
		array(
			"pytanie" => "Elle est ... .",
			"odpowiedzi" => array(
				array(
					"text" => "italien",		
				),
				array(
					"text" => "italiene",
				),
				array(
					"text" => "italienne",
					"correct" => true,
				),
				array(
					"text" => "italiens",
				),
				
			),
		),
		array(
			"pytanie" => "Maintenant, le train part ... Paris.",
			"odpowiedzi" => array(
				array(
					"text" => "à",		
				),
				array(
					"text" => "pour",
					 "correct" => true,
				),
				array(
					"text" => "en",
				),
				array(
					"text" => "au",
				),
				
			),
		),
		array(
			"pytanie" => "Les tables sont: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "blancs",		
				),
				array(
					"text" => "blanches",
					 "correct" => true,
				),
				array(
					"text" => "blanc",
				),
				array(
					"text" => "blanche",
				),
				
			),
		),
		array(
			"pytanie" => "Dans la cuisine, ... une chaise.",
			"odpowiedzi" => array(
				array(
					"text" => "il y a",		
					"correct" => true,
				),
				array(
					"text" => "se trouvent",
				),
				array(
					"text" => "est",
				),
				array(
					"text" => "sont",
				),
				
			),
		),
		array(
			"pytanie" => "Je vais ... vélo.",
			"odpowiedzi" => array(
				array(
					"text" => "à",		
					"correct" => true,
				),
				array(
					"text" => "en",
				),
				array(
					"text" => "au",
				),
				array(
					"text" => "pour",
				),
				
			),
		),
		array(
			"pytanie" => "Il joue ... guitare.",
			"odpowiedzi" => array(
				array(
					"text" => "du",
				),
				array(
					"text" => "au",
				),
				array(
					"text" => "de la",
					"correct" => true,
				),
				array(
					"text" => "à la",
				),
				
			),
		),
		array(
			"pytanie" => "Ella pratique ... gymnastique.",
			"odpowiedzi" => array(
				array(
					"text" => "de la",
				),
				array(
					"text" => "la",
					"correct" => true,
				),
				array(
					"text" => "du",
				),
				array(
					"text" => "le",
				),
				
			),
		),
		array(
			"pytanie" => "Je n'aime pas ... viande.",
			"odpowiedzi" => array(
				array(
					"text" => "de la",
				),
				array(
					"text" => "du",
				
				),
				array(
					"text" => "de",
				),
				array(
					"text" => "la",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "J'achète du porc chez le ... .",
			"odpowiedzi" => array(
				array(
					"text" => "boulanger",
				),
				array(
					"text" => "boucher",
					"correct" => true,
				),
				array(
					"text" => "poissonier",
				),
				array(
					"text" => "coiffeur",
				),
				
			),
		),
		array(
			"pytanie" => "Elle est née ... juillet.",
			"odpowiedzi" => array(
				array(
					"text" => "au",
				),
				array(
					"text" => "dans",
				),
				array(
					"text" => "en",
					"correct" => true,
				),
				array(
					"text" => "à",
				),
				
			),
		),
		array(
			"pytanie" => "J'aime le quartier ... j'habite.",
			"odpowiedzi" => array(
				array(
					"text" => "dans",
				),
				array(
					"text" => "où",
					"correct" => true,
				),
				array(
					"text" => "dont",
				),
				array(
					"text" => "que",
				),
				
			),
		),
		array(
			"pytanie" => "Vous ... voulez combien?",
			"odpowiedzi" => array(
				array(
					"text" => "les",
				),
				array(
					"text" => "le",
				),
				array(
					"text" => "en",
					"correct" => true,
				),
				array(
					"text" => "lui",
				),
				
			),
		),
		array(
			"pytanie" => "Il n'a pas bien dormi cette nuit. Il a mal ... tête.",
			"odpowiedzi" => array(
				array(
					"text" => "de la",
				),
				array(
					"text" => "la",
				),
				array(
					"text" => "à",
				),
				array(
					"text" => "à la",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Elle est malade. Ella a ... fièvre.",
			"odpowiedzi" => array(
				array(
					"text" => "à la",
				),
				array(
					"text" => "de la",
					"correct" => true,
				),
				array(
					"text" => "la",
				),
				array(
					"text" => "le",
				),
				
			),
		),
		array(
			"pytanie" => "Hier soir, nous ... au restaurant.",
			"odpowiedzi" => array(
				array(
					"text" => "avons allés",
				),
				array(
					"text" => "sont allés",
				),
				array(
					"text" => "ont allés",
				),
				array(
					"text" => "sommes allés",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Elles ont fait un voyage ... elles sont contentes.",
			"odpowiedzi" => array(
				array(
					"text" => "qui",
				),
				array(
					"text" => "que",
				),
				array(
					"text" => "dont",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "La semaine prochaine, nous ... le voyage en train.",
			"odpowiedzi" => array(
				array(
					"text" => "ferons",
					"correct" => true,
				),
				array(
					"text" => "faisons",
				),
				array(
					"text" => "faisions",
				),
				array(
					"text" => "fassions",
				),
				
			),
		),
		array(
			"pytanie" => "Elle se brosse ses cheveux avec ... .",
			"odpowiedzi" => array(
				array(
					"text" => "un sèche-cheveux",
				),
				array(
					"text" => "un peigne",
					"correct" => true,
				),
				array(
					"text" => "un rasoir",
				),
				array(
					"text" => "un savon",
				),
				
			),
		),
		array(
			"pytanie" => "... fille est belle",
			"odpowiedzi" => array(
				array(
					"text" => "Ce",
				),
				array(
					"text" => "Cet",
				),
				array(
					"text" => "Ces",
				),
				array(
					"text" => "Cette",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "J'ai acheté un litre ... lait.",
			"odpowiedzi" => array(
				array(
					"text" => "du",
				),
				array(
					"text" => "de la",
				),
				array(
					"text" => "de ",
					"correct" => true,
				),
				array(
					"text" => "le",
				),
				
			),
		),
		array(
			"pytanie" => "Le mois dernier, j'ai lu ... livres.",
			"odpowiedzi" => array(
				array(
					"text" => "beaucoup des",
				),
				array(
					"text" => "quelques",
					"correct" => true,
				),
				array(
					"text" => "peu des",
				),
				array(
					"text" => "peu du",
				),
				
			),
		),
		array(
			"pytanie" => "Hier, elle ... en retard.",
			"odpowiedzi" => array(
				array(
					"text" => "est venu",
				),
				array(
					"text" => "a venue",
				),
				array(
					"text" => "a venu",
				),
				array(
					"text" => "est venue",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Ils mangent ... chocolat.",
			"odpowiedzi" => array(
				array(
					"text" => "le",
				),
				array(
					"text" => "de la",
				),
				array(
					"text" => "du",
					"correct" => true,
				),
				array(
					"text" => "la",
				),
				
			),
		),
		array(
			"pytanie" => "Elle achète ... pain à la boulangerie.",
			"odpowiedzi" => array(
				array(
					"text" => "le",
				),
				array(
					"text" => "de la",
				),
				array(
					"text" => "du",
					"correct" => true,
				),
				array(
					"text" => "de",
				),
				
			),
		),
		array(
			"pytanie" => "Demain, toute ma famille ... au concert.",
			"odpowiedzi" => array(
				array(
					"text" => "vont",
				),
				array(
					"text" => "iront",
				),
				array(
					"text" => "ira",
					"correct" => true,
				),
				array(
					"text" => "est allée",
				),
				
			),
		),
		array(
			"pytanie" => "Je veux que tu ... .",
			"odpowiedzi" => array(
				array(
					"text" => "sorte",
				),
				array(
					"text" => "sortes",
					"correct" => true,
				),
				array(
					"text" => "sors",
				),
				array(
					"text" => "sois",
				),
				
			),
		),
		array(
			"pytanie" => "Peux-tu me prêter ta voiture? ... ne marche pas.",
			"odpowiedzi" => array(
				array(
					"text" => "Ma",
				),
				array(
					"text" => "Le mien",
				),
				array(
					"text" => "La mienne",
					"correct" => true,
				),
				array(
					"text" => "Mon",
				),
			),
		),
		array(
			"pytanie" => "C'est un médecin ... je peux recommander.",
			"odpowiedzi" => array(
				array(
					"text" => "qui",
				),
				array(
					"text" => "que",
					"correct" => true,
				),
				array(
					"text" => "dont",
				),
				array(
					"text" => "où",
				),
			),
		),
		array(
			"pytanie" => "Les parents d'Eric lui ont expliqué pourquoi ils l' ... ainsi.",
			"odpowiedzi" => array(
				array(
					"text" => "ont baptisé",
				),
				array(
					"text" => "a baptizé",
				),
				array(
					"text" => "avaient baptisé",
					"correct" => true,
				),
				array(
					"text" => "sont baptisés",
				),
			),
		),
		array(
			"pytanie" => "Voilà les papiers pour vos élèves. Donnez ... .",
			"odpowiedzi" => array(
				array(
					"text" => "les en",
				),
				array(
					"text" => "les lui",
				),
				array(
					"text" => "les leur",
					"correct" => true,
				),
				array(
					"text" => "le leur",
				),
			),
		),
		array(
			"pytanie" => "Avignon se trouve en: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "Bretagne",
				),
				array(
					"text" => "Alsace",
				),
				array(
					"text" => "Normandie",
				),
				array(
					"text" => "Provence",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "L'année dernière, je ... chez ma tante Marie.",
			"odpowiedzi" => array(
				array(
					"text" => "vais",
				),
				array(
					"text" => "étais allé",
				),
				array(
					"text" => "ai allé",
				),
				array(
					"text" => "suis allé",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Ce film n'est pas aussi intéressant que ... nous avons vu hier.",
			"odpowiedzi" => array(
				array(
					"text" => "celui qui",
				),
				array(
					"text" => "celle qui",
				),
				array(
					"text" => "celui que",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Pour ouvrir la bouteille de vin, il faut avoir: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "un couteau",
				),
				array(
					"text" => "une fourchette",
				),
				array(
					"text" => "une cuillère",
				),
				array(
					"text" => "un tire-bouchon",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "La marque de voiture française, c'est ... .",
			"odpowiedzi" => array(
				array(
					"text" => "FIAT",
				),
				array(
					"text" => "FIAT",
				),
				array(
					"text" => "Opel",
				),
				array(
					"text" => "Peugeot",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Le drapeau français est ... .",
			"odpowiedzi" => array(
				array(
					"text" => "vert, blanc, rouge",
				),
				array(
					"text" => "bleu, blanc, rouge",
					"correct" => true,
				),
				array(
					"text" => "noir, rouge, jaune",
				),
				array(
					"text" => "noir, jaune, rouge",
				),
			),
		),
		array(
			"pytanie" => "Le tableau se trouve ... le professeur.",
			"odpowiedzi" => array(
				array(
					"text" => "sur",
				),
				array(
					"text" => "avant",
				),
				array(
					"text" => "derrière",
					"correct" => true,
				),
				array(
					"text" => "sous",
				),
			),
		),
		array(
			"pytanie" => "Si je ... au Loto, j'achèterais une voiture de sport.",
			"odpowiedzi" => array(
				array(
					"text" => "gagne",
				),
				array(
					"text" => "gagnes",
				),
				array(
					"text" => "gagnais",
					"correct" => true,
				),
				array(
					"text" => "ai gagné",
				),
			),
		),
		array(
			"pytanie" => "Vous prenez souvent le train? - Je ... prends souvent. ",
			"odpowiedzi" => array(
				array(
					"text" => "y",
				),
				array(
					"text" => "en",
				),
				array(
					"text" => "le",
					"correct" => true,
				),
				array(
					"text" => "les",
				),
			),
		),
		array(
			"pytanie" => "A-t-il invité Paul et Marie? Il les ... .",
			"odpowiedzi" => array(
				array(
					"text" => "a invité",
				),
				array(
					"text" => "est invité",
				),
				array(
					"text" => "a invités",
					"correct" => true,
				),
				array(
					"text" => "a invitées",
				),
			),
		),
		array(
			"pytanie" => "Les jeux d'argent: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "est interdit",
				),
				array(
					"text" => "sont interdit",
				),
				array(
					"text" => "sont interdits",
					"correct" => true,
				),
				array(
					"text" => "sont interdites",
				),
			),
		),
		array(
			"pytanie" => "e ne pense pas: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "qu'il vient",
				),
				array(
					"text" => "qu'il vienne",
					"correct" => true,
				),
				array(
					"text" => "qu'il viens",
				),
			),
		),
		array(
			"pytanie" => "As-tu peur? ... courageux!",
			"odpowiedzi" => array(
				array(
					"text" => "Es",
				),
				array(
					"text" => "Tu as",
				),
				array(
					"text" => "Sois",
					"correct" => true,
				),
				array(
					"text" => "Tu sois",
				),
			),
		),
		array(
			"pytanie" => "Aujourd'hui, il ... beau.",
			"odpowiedzi" => array(
				array(
					"text" => "est",
				),
				array(
					"text" => "fera",
				),
				array(
					"text" => "fait",
					"correct" => true,
				),
				array(
					"text" => "faisait",
				),
			),
		),
		array(
			"pytanie" => "Les émissions politiques. Je regarde ... d'elles",
			"odpowiedzi" => array(
				array(
					"text" => "chacun",
				),
				array(
					"text" => "chacune",
					"correct" => true,
				),
				array(
					"text" => "chacuns",
				),
				array(
					"text" => "chacunes",
				),
			),
		),
		array(
			"pytanie" => "Il est absent parce qu'il ... malade.",
			"odpowiedzi" => array(
				array(
					"text" => "sait",
				),
				array(
					"text" => "a",
				),
				array(
					"text" => "est",
					"correct" => true,
				),
				array(
					"text" => "va",
				),
			),
		),
		array(
			"pytanie" => "Cet animal est gris, gras et gros, il a de grandes oreilles. C'est un ... .",
			"odpowiedzi" => array(
				array(
					"text" => "ours",
				),
				array(
					"text" => "lion",
				),
				array(
					"text" => "elephant",
					"correct" => true,
				),
				array(
					"text" => "tigre",
				),
			),
		),
		array(
			"pytanie" => "Quand j'aurai fini mes études, ... voyager autour du monde.",
			"odpowiedzi" => array(
				array(
					"text" => "vais",
				),
				array(
					"text" => "j'irai",
					"correct" => true,
				),
				array(
					"text" => "j'irai",
				),
				array(
					"text" => "j'aille",
				),
			),
		),
		array(
			"pytanie" => "Les feuilles des arbres tombent ... automne.",
			"odpowiedzi" => array(
				array(
					"text" => "en",
					"correct" => true,
				),
				array(
					"text" => "au",
				),
				array(
					"text" => "dans",
				),
				array(
					"text" => "à l'",
				),
			),
		),
		
		
		
	);