<?php
	// $_SESSION[ "person" ] = $_POST;
	// print_r( $_POST );
	// print_r( $_SESSION[ "person" ] );
	// 50 pkt - – 0- 8 pkt poziom A1, 16pkt  poziom A2, 24 pkt poziom B1, 32 pkt poziom B2, 40 pkt poziom C1, 48 pkt poziom C2,
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
			"pytanie" => "Anna e Piotr ... due polacchi.",
			"odpowiedzi" => array(
				array(
					"text" => "hanno",
				),
				array(
					"text" => "sono",
					"correct" => true,
				),
				array(
					"text" => "fanno",
				),
				array(
					"text" => "sanno",
				),
			),
		),
		array(
			"pytanie" => "Michelle e’ una ragazzza ... .",
			"odpowiedzi" => array(
				array(
					"text" => "francese",
					"correct" => true,
				),
				array(
					"text" => "polacca",
				),
				array(
					"text" => "greca",
				),
				array(
					"text" => "Cinese",
				),
			),
		),
		array(
			"pytanie" => "Ora il treno e’ ... Parigi.",
			"odpowiedzi" => array(
				array(
					"text" => "in",
				),
				array(
					"text" => "a",
					"correct" => true,
				),
				array(
					"text" => "nel",
				),
				array(
					"text" => "al",
				),
			),
		),
		array(
			"pytanie" => "tavoli sono ... .",
			"odpowiedzi" => array(
				array(
					"text" => "biache",
				),
				array(
					"text" => "marzone",
				),
				array(
					"text" => "neri",
					"correct" => true,
				),
				array(
					"text" => "arancione",
				),
			),
		),
		array(
			"pytanie" => "Sono In Italia ... lavoro.",
			"odpowiedzi" => array(
				array(
					"text" => "per",
					"correct" => true,
				),
				array(
					"text" => "con",
				),
				array(
					"text" => "di",
				),
				array(
					"text" => "Da",
				),
			),
		),
		array(
			"pytanie" => "Nella scuola ... tanti allievi.",
			"odpowiedzi" => array(
				array(
					"text" => "sono",
				),
				array(
					"text" => "sono",
					"correct" => true,
				),
				array(
					"text" => "hanno",
				),
				array(
					"text" => "trovano",
				),
			),
		),
		array(
			"pytanie" => "... restare a casa.",
			"odpowiedzi" => array(
				array(
					"text" => "preferisco",
					"correct" => true,
				),
				array(
					"text" => "prefero",
				),
				array(
					"text" => "preferesco",
				),
				array(
					"text" => "prefericso",
				),
			),
		),
		array(
			"pytanie" => "Andrea ... il medico.",
			"odpowiedzi" => array(
				array(
					"text" => "faccia",
				),
				array(
					"text" => "fa",
					"correct" => true,
				),
				array(
					"text" => "fu",
				),
				array(
					"text" => "e’",
				),
			),
		),
		array(
			"pytanie" => "Sono ... Varsavia.",
			"odpowiedzi" => array(
				array(
					"text" => "da",
				),
				array(
					"text" => "a",
				),
				array(
					"text" => "di",
					"correct" => true,
				),
				array(
					"text" => "Della",
				),
			),
		),
		array(
			"pytanie" => "Mario e Chiara hanno il cane. Il ... cane e’ molto carino.",
			"odpowiedzi" => array(
				array(
					"text" => "suo",
				),
				array(
					"text" => "loro",
					"correct" => true,
				),
				array(
					"text" => "suoi",
				),
				array(
					"text" => "Miei",
				),
			),
		),
		array(
			"pytanie" => "Vado ... ristorante.",
			"odpowiedzi" => array(
				array(
					"text" => "a",
				),
				array(
					"text" => "in",
				),
				array(
					"text" => "al",
					"correct" => true,
				),
				array(
					"text" => "per",
				),
			),
		),
		array(
			"pytanie" => "Anne ... ieri sera a Parigi.",
			"odpowiedzi" => array(
				array(
					"text" => "ha tornato",
				),
				array(
					"text" => "e’ tornato",
				),
				array(
					"text" => "e’ tornata",
					"correct" => true,
				),
				array(
					"text" => "ha tornata",
				),
			),
		),
		array(
			"pytanie" => "Io ... ancora qui perche’ mi piace l’Italia.",
			"odpowiedzi" => array(
				array(
					"text" => "rimangero’",
				),
				array(
					"text" => "rimarro’",
					"correct" => true,
				),
				array(
					"text" => "rimanero’",
				),
				array(
					"text" => "Rimarrai",
				),
			),
		),
		array(
			"pytanie" => "Tutte le mie ... sono pulite.",
			"odpowiedzi" => array(
				array(
					"text" => "camicie",
					"correct" => true,
				),
				array(
					"text" => "camice",
				),
				array(
					"text" => "camici",
				),
				array(
					"text" => "Camicii",
				),
			),
		),
		array(
			"pytanie" => "... molto alla lezione di italiano.",
			"odpowiedzi" => array(
				array(
					"text" => "mi ho annoiato",
				),
				array(
					"text" => "mi sono anoiato",
				),
				array(
					"text" => "mi sono annoiato",
					"correct" => true,
				),
				array(
					"text" => "si sono annoiato",
				),
			),
		),
		array(
			"pytanie" => "... compro una bottiglia.",
			"odpowiedzi" => array(
				array(
					"text" => "la",
				),
				array(
					"text" => "lo",
				),
				array(
					"text" => "ne",
					"correct" => true,
				),
				array(
					"text" => "li",
				),
			),
		),
		array(
			"pytanie" => "... ringrazio molto di tutto quello che ha fatto per me.",
			"odpowiedzi" => array(
				array(
					"text" => "La",
					"correct" => true,
				),
				array(
					"text" => "Le",
				),
				array(
					"text" => "Li",
				),
				array(
					"text" => "ti",
				),
			),
		),
		array(
			"pytanie" => "Non ... troppa carne, Anna.",
			"odpowiedzi" => array(
				array(
					"text" => "mangi",
				),
				array(
					"text" => "mangia",
				),
				array(
					"text" => "mangiare",
					"correct" => true,
				),
				array(
					"text" => "mangio",
				),
			),
		),
		array(
			"pytanie" => "Da bambina sempre lei ... al lago di Garda con i suoi genitori.",
			"odpowiedzi" => array(
				array(
					"text" => "e’ andata",
					"correct" => true,
				),
				array(
					"text" => "andava",
				),
				array(
					"text" => "ha andato",
				),
				array(
					"text" => "sono andata",
				),
			),
		),
		array(
			"pytanie" => "... Fiat e’ una machina italiana.",
			"odpowiedzi" => array(
				array(
					"text" => "il",
				),
				array(
					"text" => "la",
					"correct" => true,
				),
				array(
					"text" => "lo",
				),
				array(
					"text" => "I’",
				),
			),
		),
		array(
			"pytanie" => "Penso che Andrea ... una persona molto diligente.",
			"odpowiedzi" => array(
				array(
					"text" => "e’",
				),
				array(
					"text" => "sia",
					"correct" => true,
				),
				array(
					"text" => "sii",
				),
				array(
					"text" => "e",
				),
			),
		),
		array(
			"pytanie" => "Dove hai ... il giornale ?",
			"odpowiedzi" => array(
				array(
					"text" => "metto",
				),
				array(
					"text" => "meso",
				),
				array(
					"text" => "messo",
					"correct" => true,
				),
				array(
					"text" => "metto",
				),
			),
		),
		array(
			"pytanie" => "Questo ragazzo e’ molto alto e ha i ... molto folti.",
			"odpowiedzi" => array(
				array(
					"text" => "capelli",
					"correct" => true,
				),
				array(
					"text" => "cappelli",
				),
				array(
					"text" => "capeli",
				),
				array(
					"text" => "apello",
				),
			),
		),
		array(
			"pytanie" => "Se ... molti soldi, ... in vancanza in Sardegna.",
			"odpowiedzi" => array(
				array(
					"text" => "avrei, andassi",
				),
				array(
					"text" => "avrei, andrei",
				),
				array(
					"text" => "avessi, andrei",
					"correct" => true,
				),
				array(
					"text" => "andrei, avessi",
				),
			),
		),
		array(
			"pytanie" => "Era meglio che ... per l’Italia.",
			"odpowiedzi" => array(
				array(
					"text" => "parte",
				),
				array(
					"text" => "parta",
				),
				array(
					"text" => "partisse",
					"correct" => true,
				),
				array(
					"text" => "andasse",
				),
			),
		),
		array(
			"pytanie" => "Magari ... bel tempo domani, vogliamo andare in bicicletta.",
			"odpowiedzi" => array(
				array(
					"text" => "facesse",
					"correct" => true,
				),
				array(
					"text" => "faccia",
				),
				array(
					"text" => "faccio",
				),
				array(
					"text" => "fa",
				),
			),
		),
		array(
			"pytanie" => "Una persona che ama dormire e il dolce far niente e’ un ... .",
			"odpowiedzi" => array(
				array(
					"text" => "diligente",
				),
				array(
					"text" => "laborioso",
				),
				array(
					"text" => "pigrone",
					"correct" => true,
				),
				array(
					"text" => "allegro",
				),
			),
		),
		array(
			"pytanie" => "Loro hanno tanti ... .",
			"odpowiedzi" => array(
				array(
					"text" => "probleme",
				),
				array(
					"text" => "problemi",
					"correct" => true,
				),
				array(
					"text" => "problema",
				),
				array(
					"text" => "problemo",
				),
			),
		),
		array(
			"pytanie" => "... uomo e’ una persona molto seria.",
			"odpowiedzi" => array(
				array(
					"text" => "quell’",
					"correct" => true,
				),
				array(
					"text" => "quello",
				),
				array(
					"text" => "quel",
				),
				array(
					"text" => "quella",
				),
			),
		),
		array(
			"pytanie" => "Marco e’ piu’ alto ... Paolo.",
			"odpowiedzi" => array(
				array(
					"text" => "che",
				),
				array(
					"text" => "da",
				),
				array(
					"text" => "che",
				),
				array(
					"text" => "di",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "In ... possiamo comprare la carne macinata.",
			"odpowiedzi" => array(
				array(
					"text" => "macelleria",
					"correct" => true,
				),
				array(
					"text" => "barbieri",
				),
				array(
					"text" => "salumeria",
				),
				array(
					"text" => "parrucchiere",
				),
			),
		),
		array(
			"pytanie" => "Se quel giorno ... di quell’evento, non ... .",
			"odpowiedzi" => array(
				array(
					"text" => "avessi saputo, mi sarei sposata",
					"correct" => true,
				),
				array(
					"text" => "avrei saputo, mi sarei sposati",
				),
				array(
					"text" => "fossi saputo, sarei sposata",
				),
			),
		),
		array(
			"pytanie" => "L’Italia e’ divisa in ... .",
			"odpowiedzi" => array(
				array(
					"text" => "regioni,",
					"correct" => true,
				),
				array(
					"text" => "ragi oni",
				),
				array(
					"text" => "cantoni",
				),
				array(
					"text" => "paesi",
				),
			),
		),
		array(
			"pytanie" => "Angolschool e’ una delle migliori scuole ... lingua in Polonia.",
			"odpowiedzi" => array(
				array(
					"text" => "da",
				),
				array(
					"text" => "delle",
				),
				array(
					"text" => "di",
					"correct" => true,
				),
				array(
					"text" => "dalle",
				),
			),
		),
		array(
			"pytanie" => "Va ... fare le spese nel supermercato qui vicino.",
			"odpowiedzi" => array(
				array(
					"text" => "per",
				),
				array(
					"text" => "al",
				),
				array(
					"text" => "a",
					"correct" => true,
				),
				array(
					"text" => "con",
				),
			),
		),
		array(
			"pytanie" => "Qualcosa che non puo’ essere sostituito con un’altra e’ ... .",
			"odpowiedzi" => array(
				array(
					"text" => "necessario",
				),
				array(
					"text" => "indispensabile",
					"correct" => true,
				),
				array(
					"text" => "utile",
				),
				array(
					"text" => "indispansabile",
				),
			),
		),
		array(
			"pytanie" => "Milano si trova in ... .",
			"odpowiedzi" => array(
				array(
					"text" => "Calabria",
				),
				array(
					"text" => "Lombardia",
					"correct" => true,
				),
				array(
					"text" => "Lazio",
				),
				array(
					"text" => "Piemonte",
				),
			),
		),
		array(
			"pytanie" => "Una persona che lavora a casa si chiama ... .",
			"odpowiedzi" => array(
				array(
					"text" => "casalinga",
					"correct" => true,
				),
				array(
					"text" => "pensionato",
				),
				array(
					"text" => "disoccupato",
				),
				array(
					"text" => "lavoratore",
				),
			),
		),
		array(
			"pytanie" => "Gli ho chiesto la foto ma non ... data.",
			"odpowiedzi" => array(
				array(
					"text" => "me la",
					"correct" => true,
				),
				array(
					"text" => "gliela",
				),
				array(
					"text" => "gliene",
				),
				array(
					"text" => "me ne",
				),
			),
		),
		array(
			"pytanie" => "Il tuo arrivo ... un grande dolore",
			"odpowiedzi" => array(
				array(
					"text" => "ci ha procurato",
					"correct" => true,
				),
				array(
					"text" => "ci ha procurati",
				),
				array(
					"text" => "li ha procurato",
				),
				array(
					"text" => "ci e’ procurato",
				),
			),
		),
		array(
			"pytanie" => "... ho visti tutti",
			"odpowiedzi" => array(
				array(
					"text" => "ne",
				),
				array(
					"text" => "li",
					"correct" => true,
				),
				array(
					"text" => "ci",
				),
				array(
					"text" => "le",
				),
			),
		),
		array(
			"pytanie" => "Lo faccio ... lui non sia d’accordo.",
			"odpowiedzi" => array(
				array(
					"text" => "benche’",
					"correct" => true,
				),
				array(
					"text" => "affinche’",
				),
				array(
					"text" => "purche’",
				),
				array(
					"text" => "prima che",
				),
			),
		),
		array(
			"pytanie" => "Nel 1939 ... la Seconda Guerra Mondiale.",
			"odpowiedzi" => array(
				array(
					"text" => "scoppia",
				),
				array(
					"text" => "sccoppio'",
					"correct" => true,
				),
				array(
					"text" => "scoppie",
				),
				array(
					"text" => "scoppiava",
				),
			),
		),
		array(
			"pytanie" => "Gli ho detto che ... il giorno dopo.",
			"odpowiedzi" => array(
				array(
					"text" => "avrei venuta",
				),
				array(
					"text" => "sarei venuta",
					"correct" => true,
				),
				array(
					"text" => "fossi venuta",
				),
				array(
					"text" => "avessi venuta",
				),
			),
		),
		array(
			"pytanie" => "Si ... tanti buoni libri in liberia Agosto.",
			"odpowiedzi" => array(
				array(
					"text" => "vende",
				),
				array(
					"text" => "vendono",
					"correct" => true,
				),
				array(
					"text" => "venda",
				),
				array(
					"text" => "compra",
				),
			),
		),
		array(
			"pytanie" => "Dopo che ... l’acquazzone, la citta’ cambio’.",
			"odpowiedzi" => array(
				array(
					"text" => "e’ terminato",
				),
				array(
					"text" => "fu terminato",
					"correct" => true,
				),
				array(
					"text" => "ha terminato",
				),
				array(
					"text" => "ha terminata",
				),
			),
		),
		array(
			"pytanie" => "Quando ... l’Universita’, lavorero’ come interprete in una grande azienda. italiana.",
			"odpowiedzi" => array(
				array(
					"text" => "avro’ finto",
					"correct" => true,
				),
				array(
					"text" => "finiro’",
				),
				array(
					"text" => "finira’",
				),
				array(
					"text" => "avra’ finto",
				),
			),
		),
		array(
			"pytanie" => "Le ho chiesto ... entrare",
			"odpowiedzi" => array(
				array(
					"text" => "a",
				),
				array(
					"text" => "di",
					"correct" => true,
				),
				array(
					"text" => "per",
				),
				array(
					"text" => "con",
				),
			),
		),
		array(
			"pytanie" => "Ho compato un pacco ... spaghetti.",
			"odpowiedzi" => array(
				array(
					"text" => "dei",
				),
				array(
					"text" => "con",
				),
				array(
					"text" => "da",
				),
				array(
					"text" => "di",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Puo’ darsi che non ... .",
			"odpowiedzi" => array(
				array(
					"text" => "piove",
				),
				array(
					"text" => "piovi",
				),
				array(
					"text" => "piova",
					"correct" => true,
				),
				array(
					"text" => "pioggia",
				),
			),
		),

	);