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
			"pytanie" => "Mi casa es ... grande ... la tuya.",
			"odpowiedzi" => array(
				array(
					"text" => "mayor, como",
				),
				array(
					"text" => "menos, como",
				),
				array(
					"text" => "menos, como",
				),
				array(
					"text" => "más, que",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "¿Dónde ... en Madrid?",
			"odpowiedzi" => array(
				array(
					"text" => "vivas",
				),
				array(
					"text" => "vives",
					"correct" => true,
				),
				array(
					"text" => "viva",
				),
				array(
					"text" => "vivo",
				),
				
			),
		),
		array(
			"pytanie" => "¿Dónde vives ahora?",
			"odpowiedzi" => array(
				array(
					"text" => "Vivo en Madrid",
					"correct" => true,
				),
				array(
					"text" => "Vivo a Madrid",
				),
				array(
					"text" => "Vivo Madridc",
				),
				array(
					"text" => "Vivo sobre Madrid",
				),
				
			),
		),
		array(
			"pytanie" => "La película es ... interesante.",
			"odpowiedzi" => array(
				array(
					"text" => "mucho",
				),
				array(
					"text" => "mucha",
				),
				array(
					"text" => "muchos",
				),
				array(
					"text" => "muy",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "¿A qué te dedicas?",
			"odpowiedzi" => array(
				array(
					"text" => "Me dedico a estudiante",
				),
				array(
					"text" => "Dedico a estudiante",
				),
				array(
					"text" => "Soy estudiante",
					"correct" => true,
				),
				array(
					"text" => "Estoy estudiante",
				),
				
			),
		),
		array(
			"pytanie" => "Madrid ...en el centro de la península Ibérica.",
			"odpowiedzi" => array(
				array(
					"text" => "es",
				),
				array(
					"text" => "está",
					"correct" => true,
				),
				array(
					"text" => "era",
				),
				array(
					"text" => "hay",
				),
				
			),
		),
		array(
			"pytanie" => "Por las mañanas ... al trabajo en metro.",
			"odpowiedzi" => array(
				array(
					"text" => "ves",
				),
				array(
					"text" => "estoy",
				),
				array(
					"text" => "voy",
					"correct" => true,
				),
				array(
					"text" => "veo",
				),
				
			),
		),
		array(
			"pytanie" => "No me gusta fregar. A mí .... .",
			"odpowiedzi" => array(
				array(
					"text" => "también",
				),
				array(
					"text" => "tampoco",
					"correct" => true,
				),
				array(
					"text" => "también no",
				),
				array(
					"text" => "tampoco no",
				),
				
			),
		),
		array(
			"pytanie" => "El sábado ... vamos a casa de abuela.",
			"odpowiedzi" => array(
				array(
					"text" => "tarde",
				),
				array(
					"text" => "en la tarde",
				),
				array(
					"text" => "por la tarde",
					"correct" => true,
				),
				array(
					"text" => "de la tarde",
				),
				
			),
		),
		array(
			"pytanie" => "Siempre voy a la universiadad ... tranvίa nύmero 5.",
			"odpowiedzi" => array(
				array(
					"text" => "en",
					"correct" => true,
				),
				array(
					"text" => "a",
				),
				array(
					"text" => "de",
				),
				array(
					"text" => "por",
				),
				
			),
		),
		array(
			"pytanie" => "Todos saben que para adelgazar ... comer menos.",
			"odpowiedzi" => array(
				array(
					"text" => "hay",
				),
				array(
					"text" => "hay que",
					"correct" => true,
				),
				array(
					"text" => "tener que",
				),
				array(
					"text" => "debe que",
				),
				
			),
		),
		array(
			"pytanie" => "El banco está ... supermercado.",
			"odpowiedzi" => array(
				array(
					"text" => "detrás",
				),
				array(
					"text" => "detrás de",
				),
				array(
					"text" => "detrás de el",
				),
				array(
					"text" => "detrás del",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "No puedo ir a bailar. Es que ... que hacer los deberes.",
			"odpowiedzi" => array(
				array(
					"text" => "qui ero",
				),
				array(
					"text" => "debo",
				),
				array(
					"text" => "tengo",
					"correct" => true,
				),
				array(
					"text" => "debo de",
				),
				
			),
		),
		array(
			"pytanie" => "En Costa Brava ... muchos turistas.",
			"odpowiedzi" => array(
				array(
					"text" => "hay",
					"correct" => true,
				),
				array(
					"text" => "están",
				),
				array(
					"text" => "está",
				),
				array(
					"text" => "son",
				),
				
			),
		),
		array(
			"pytanie" => "En el centro de la ciudad ... una plaza grande.",
			"odpowiedzi" => array(
				array(
					"text" => "es",
				),
				array(
					"text" => "está",
				),
				array(
					"text" => "Hay",
					"correct" => true,
				),
				array(
					"text" => "son",
				),
				
			),
		),
		array(
			"pytanie" => "¿Puedo jugar ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "con ti",
				),
				array(
					"text" => "contigo",
					"correct" => true,
				),
				array(
					"text" => "con tú",
				),
				array(
					"text" => "con tuyo",
				),
				
			),
		),
		array(
			"pytanie" => "Hace bastante tiempo que no lo veo pero creo que sigue ... español.",
			"odpowiedzi" => array(
				array(
					"text" => "estudiar",
				),
				array(
					"text" => "estudiado",
				),
				array(
					"text" => "en estudiar",
				),
				array(
					"text" => "estudiando",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "... tenía sueño, me eché la siesta.",
			"odpowiedzi" => array(
				array(
					"text" => "Por que",
					"correct" => true,
				),
				array(
					"text" => "Como",
					"correct" => true,
				),
				array(
					"text" => "Así que",
				),
				array(
					"text" => "Entonces",
				),
				
			),
		),
		array(
			"pytanie" => "Ten cuidado, no ... tan rápido!",
			"odpowiedzi" => array(
				array(
					"text" => "vayas",
					"correct" => true,
				),
				array(
					"text" => "vas",
				),
				array(
					"text" => "ir",
				),
				array(
					"text" => "ve",
				),
				
			),
		),
		array(
			"pytanie" => "Cogeré las vacaciones cuando ... mi socio.",
			"odpowiedzi" => array(
				array(
					"text" => "vuelve",
				),
				array(
					"text" => "volverá",
				),
				array(
					"text" => "vuelva",
					"correct" => true,
				),
				array(
					"text" => "va a volver",
				),
				
			),
		),
		array(
			"pytanie" => "Siento llegar tarde. Esta mañana ... muy cansado.",
			"odpowiedzi" => array(
				array(
					"text" => "me he levantado",
					"correct" => true,
				),
				array(
					"text" => "me levanter",
				),
				array(
					"text" => "me levanto",
				),
				array(
					"text" => "me ha levantado",
				),
				
			),
		),
		array(
			"pytanie" => "Cuando ... niño ... el pelo rubio.",
			"odpowiedzi" => array(
				array(
					"text" => "fui, tenía",
				),
				array(
					"text" => "fui, tuve",
				),
				array(
					"text" => "era, tenía",
					"correct" => true,
				),
				array(
					"text" => "era, tuve",
				),
				
			),
		),
		array(
			"pytanie" => "¿Dónde está mi libro? Ahí, ... en la estantería.",
			"odpowiedzi" => array(
				array(
					"text" => "la he puesto",
				),
				array(
					"text" => "lo he puesto",
					"correct" => true,
				),
				array(
					"text" => "le he puesto",
				),
				array(
					"text" => "se he puesto",
				),
				
			),
		),
		array(
			"pytanie" => "Ya está. Compro esta camisa y ... regalo a mi novio.",
			"odpowiedzi" => array(
				array(
					"text" => "le la",
				),
				array(
					"text" => "le lo",
				),
				array(
					"text" => "se lo",
				),
				array(
					"text" => "se la",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Quiero comprarle un libro a Ramón",
			"odpowiedzi" => array(
				array(
					"text" => "Le quiero lo comprar",
				),
				array(
					"text" => "Quiero comprarlo",
				),
				array(
					"text" => "Se lo quiero comprar",
					"correct" => true,
				),
				array(
					"text" => "Se la quiero comprar",
				),
				
			),
		),
		array(
			"pytanie" => "Ayer ...con Sebastían y le ... la verdad.",
			"odpowiedzi" => array(
				array(
					"text" => "hablé, dije",
					"correct" => true,
				),
				array(
					"text" => "hablé, he dije",
				),
				array(
					"text" => "he hablado, he dicho",
				),
				array(
					"text" => "hable, dije",
				),
				
			),
		),
		array(
			"pytanie" => "Hoy por la mañana me he ... demasiado tarde.",
			"odpowiedzi" => array(
				array(
					"text" => "despertó",
				),
				array(
					"text" => "despertado",
					"correct" => true,
				),
				array(
					"text" => "despertando",
				),
				array(
					"text" => "despertaba",
				),
				
			),
		),
		array(
			"pytanie" => "Si no quieres perder el tren, ... antes de las siete.",
			"odpowiedzi" => array(
				array(
					"text" => "llegamos",
				),
				array(
					"text" => "llegas",
				),
				array(
					"text" => "llega",
					"correct" => true,
				),
				array(
					"text" => "has llegado",
				),
				
			),
		),
		array(
			"pytanie" => "Anteayer ... que trabajar todo el día.",
			"odpowiedzi" => array(
				array(
					"text" => "tengo",
				),
				array(
					"text" => "tiene",
				),
				array(
					"text" => "tuve",
					"correct" => true,
				),
				array(
					"text" => "he tenido",
				),
				
			),
		),
		array(
			"pytanie" => "Todos los días ... a las doce de la noche",
			"odpowiedzi" => array(
				array(
					"text" => "nos acostamos",
					"correct" => true,
				),
				array(
					"text" => "nos acostado",
				),
				array(
					"text" => "acostamos",

				),
				array(
					"text" => "hemos acostado",
				),
				
			),
		),
		array(
			"pytanie" => "Después de tanto tiempo, por fin hoy ... la verdad.",
			"odpowiedzi" => array(
				array(
					"text" => "me ha dicho",
					"correct" => true,
				),
				array(
					"text" => "se has dicho",
				),
				array(
					"text" => "me ha dijo",

				),
				array(
					"text" => "se he dicho",
				),
			),
		),
		array(
			"pytanie" => "Mañana ... y luego ... a la universidad.",
			"odpowiedzi" => array(
				array(
					"text" => "estudiaré, iré",
					"correct" => true,
				),
				array(
					"text" => "estudié, fui",
				),
				array(
					"text" => "studio, fui",

				),
				array(
					"text" => "estudiare, iré",
				),
			),
		),
		array(
			"pytanie" => "Estaba hablando por teléfono cuando, de repente, ... a la puerta.",
			"odpowiedzi" => array(
				array(
					"text" => "habían llamado",
				),
				array(
					"text" => "estaban llamando",
				),
				array(
					"text" => "llamaban",

				),
				array(
					"text" => "llamaron",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Nos ha dado gracias ... el regalo que le hicimos.",
			"odpowiedzi" => array(
				array(
					"text" => "por",
					"correct" => true,
				),
				array(
					"text" => "a",
				),
				array(
					"text" => "de",

				),
				array(
					"text" => "para",
				),
			),
		),
		array(
			"pytanie" => "Nunca ... en Italia antes.",
			"odpowiedzi" => array(
				array(
					"text" => "haya estado",
				),
				array(
					"text" => "estoy",
				),
				array(
					"text" => "estaba",
				),
				array(
					"text" => "he estado",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Espero que ... las próximas vacaciones.",
			"odpowiedzi" => array(
				array(
					"text" => "me visitas",
				),
				array(
					"text" => "me visites",
					"correct" => true,
				),
				array(
					"text" => "me visitarás",
				),
				array(
					"text" => "me visita",
				),
			),
		),
		array(
			"pytanie" => "Es posible que ... verdad lo que dice.",
			"odpowiedzi" => array(
				array(
					"text" => "es",
				),
				array(
					"text" => "será",
				),
				array(
					"text" => "sea",
					"correct" => true,
				),
				array(
					"text" => "está",
				),
			),
		),
		array(
			"pytanie" => "No me gusta que ... esa cara.",
			"odpowiedzi" => array(
				array(
					"text" => "tener",
				),
				array(
					"text" => "tienes",
				),
				array(
					"text" => "tengas",
					"correct" => true,
				),
				array(
					"text" => "tendrás",
				),
			),
		),
		array(
			"pytanie" => "Espero que no .... demasiado tarde.",
			"odpowiedzi" => array(
				array(
					"text" => "hemos llegado",
				),
				array(
					"text" => "llegaste",
				),
				array(
					"text" => "llegaremos",
				),
				array(
					"text" => "hayamos llegado",
					"correct" => true,
				),
			),
		),
			array(
			"pytanie" => "Ojalá ... buen tiempo mañana, porque quiero ir a la piscina.",
			"odpowiedzi" => array(
				array(
					"text" => "hará",
				),
				array(
					"text" => "hace",
				),
				array(
					"text" => "haga",
					"correct" => true,
				),
				array(
					"text" => "haría",
				),
			),
		),
			array(
			"pytanie" => "En cuanto me ... algo, te lo comunicaré.",
			"odpowiedzi" => array(
				array(
					"text" => "dirán",
				),
				array(
					"text" => "dicen",
				),
				array(
					"text" => "digan",
					"correct" => true,
				),
				array(
					"text" => "digo",
				),
			),
		),
			array(
			"pytanie" => "Si yo ... dinero, ... en una isla.",
			"odpowiedzi" => array(
				array(
					"text" => "tenga, vivirías",
				),
				array(
					"text" => "tuviese, viviría",
					"correct" => true,
				),
				array(
					"text" => "tendría, vivir",
				),
				array(
					"text" => "tendría, viviría",
				),
			),
		),
			array(
			"pytanie" => "El joven, ... vuelta espero, llega hoy.",
			"odpowiedzi" => array(
				array(
					"text" => "tuya",
				),
				array(
					"text" => "cuya",
					"correct" => true,
				),
				array(
					"text" => "suya",
				),
				array(
					"text" => "cuyo",
				),
			),
		),
		array(
			"pytanie" => "Cuando llegamos, descubrimos que los otros ya ...",
			"odpowiedzi" => array(
				array(
					"text" => "llegan",
				),
				array(
					"text" => "están llegando",
				),
				array(
					"text" => "habían llegado",
					"correct" => true,
				),
				array(
					"text" => "estaban llegado",
				),
			),
		),
		array(
			"pytanie" => "Si yo ... que eso iba a suceder, no habría venido.",
			"odpowiedzi" => array(
				array(
					"text" => "hubiera sabido",
					"correct" => true,
				),
				array(
					"text" => "habría sabido",
				),
				array(
					"text" => "sabría",
				),
				array(
					"text" => "sabía",
				),
			),
		),
		array(
			"pytanie" => "Han ocurrido muchas cosas ... el año pasado.",
			"odpowiedzi" => array(
				array(
					"text" => "desde que",
				),
				array(
					"text" => "desde hace",
				),
				array(
					"text" => "desde cuando",
				),
				array(
					"text" => "desde",
					"correct" => true,
				),
			),
		),
		array(
			"pytanie" => "Cuando ... mi marido, nos marcharemos de este hotel.",
			"odpowiedzi" => array(
				array(
					"text" => "vuelve",
				),
				array(
					"text" => "volverá",
				),
				array(
					"text" => "vuelva",
					"correct" => true,
				),
				array(
					"text" => "volviera",
				),
			),
		),
		array(
			"pytanie" => "Quiero que usted nos ... la verdad.",
			"odpowiedzi" => array(
				array(
					"text" => "dice",
				),
				array(
					"text" => "diga",
					"correct" => true,
				),
				array(
					"text" => "ha dicho",
				),
				array(
					"text" => "dirá",
				),
			),
		),
		array(
			"pytanie" => "Nos alegra mucho que ...estar aquí con nosotros.",
			"odpowiedzi" => array(
				array(
					"text" => "puedes",
				),
				array(
					"text" => "puedas",
					"correct" => true,
				),
				array(
					"text" => "podrás",
				),
				array(
					"text" => "podrías",
				),
			),
		),
			array(
			"pytanie" => "Yo estaría más contento si ... algo más interesante.",
			"odpowiedzi" => array(
				array(
					"text" => "estudiando",
				),
				array(
					"text" => "estudiara",
					"correct" => true,
				),
				array(
					"text" => "estudiaría",
				),
				array(
					"text" => "estudie",
				),
			),
		),
		

	);