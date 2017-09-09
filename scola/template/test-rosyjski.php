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
			"pytanie" => "Они вчера были в Мариинском театре: ... повезло. ",
			"odpowiedzi" => array(
				array(
					"text" => "им",
					"correct" => true,
				),
				array(
					"text" => "у них",
				),
				array(
					"text" => "их",
				),
				array(
					"text" => "ними",
				),
				
			),
		),
		array(
			"pytanie" => "В конце концов она согласилась ... . ",
			"odpowiedzi" => array(
				array(
					"text" => "у меня",
				),
				array(
					"text" => "обо мне",
				),
				array(
					"text" => "дла меня",
				),
				array(
					"text" => "со мной",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Что ... интересует, какая информация?",
			"odpowiedzi" => array(
				array(
					"text" => "вам",
				),
				array(
					"text" => "вами",
				),
				array(
					"text" => "у вас",
				),
				array(
					"text" => "вас",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Она напомнила ... об этом вчера.",
			"odpowiedzi" => array(
				array(
					"text" => "меня",
				),
				array(
					"text" => "у мена",
				),
				array(
					"text" => "у мена",
					"correct" => true,
				),
				array(
					"text" => "на мне",
				),
				
			),
		),
		array(
			"pytanie" => "Что пропало ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "у вашего багажа",
					"correct" => true,
				),
				array(
					"text" => "к вашему багажу",
				),
				array(
					"text" => "от вашего багажа",
				),
				array(
					"text" => "из вашего багажа",
				),
				
			),
		),
		array(
			"pytanie" => "Она написала нам ... на книги.",
			"odpowiedzi" => array(
				array(
					"text" => "на цены",
				),
				array(
					"text" => "о ценах",
					"correct" => true,
				),
				array(
					"text" => "за цены",
				),
				array(
					"text" => "за цены",
				),
				
			),
		),
		array(
			"pytanie" => "Сначала заплатите за покупки ... .",
			"odpowiedzi" => array(
				array(
					"text" => "за кассу",
				),
				array(
					"text" => "у кассы",
				),
				array(
					"text" => "до кассы",
				),
				array(
					"text" => "в кассу",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Узнайте ... , есть ли свободные номера.",
			"odpowiedzi" => array(
				array(
					"text" => "администратору",
				),
				array(
					"text" => "администратора",
				),
				array(
					"text" => "к администратору",
				),
				array(
					"text" => "у администратора",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "... звоните 01!",
			"odpowiedzi" => array(
				array(
					"text" => "О несчастных случаях",
				),
				array(
					"text" => "К несчастным случаям",
				),
				array(
					"text" => "С несчастными случаями",
				),
				array(
					"text" => "От несчастных случаев",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Давай оставим ему записку ... .",
			"odpowiedzi" => array(
				array(
					"text" => "с администратором",
				),
				array(
					"text" => "без администратора",
				),
				array(
					"text" => "у администратора",
					"correct" => true,
				),
				array(
					"text" => "из-за администратора",
				),
				
			),
		),
		array(
			"pytanie" => "Я желаю тебе ... в твоей работе.",
			"odpowiedzi" => array(
				array(
					"text" => "больших успехов",
					"correct" => true,
				),
				array(
					"text" => "о больших успехах",
				),
				array(
					"text" => "с большими успехами",
				),
				array(
					"text" => "большими успехами",
				),
				
			),
		),
		array(
			"pytanie" => "Извините, как попасть ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "до Садовой",
				),
				array(
					"text" => "на Садовой",
				),
				array(
					"text" => "на Садовую",
					"correct" => true,
				),
				array(
					"text" => "по Садовой",
				),
				
			),
		),
		array(
			"pytanie" => "Слова человека должны соответствовать ... .",
			"odpowiedzi" => array(
				array(
					"text" => "его поступкам",
					"correct" => true,
				),
				array(
					"text" => "его поступками",
				),
				array(
					"text" => "к его поступкам",
				),
				array(
					"text" => "на его поступки",
				),
				
			),
		),
		array(
			"pytanie" => "Нельзя отказываться ... врача.",
			"odpowiedzi" => array(
				array(
					"text" => "помощь",
				),
				array(
					"text" => "от помощи",
					"correct" => true,
				),
				array(
					"text" => "помощи",
				),
				array(
					"text" => "на помощь",
				),
				
			),
		),
		array(
			"pytanie" => "Старый профессор любит задавать ... .",
			"odpowiedzi" => array(
				array(
					"text" => "неожиданных вопросов",
				),
				array(
					"text" => "неожиданными вопросами",
				),
				array(
					"text" => "неожиданным вопросам",
				),
				array(
					"text" => "неожиданные вопросы",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Он не сказал, ... зависит его решение?",
			"odpowiedzi" => array(
				array(
					"text" => "почему",
				),
				array(
					"text" => "с кем",
				),
				array(
					"text" => "у кого",
				),
				array(
					"text" => "от чего",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Неужели у тебя нет ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "фотоаппарат",
				),
				array(
					"text" => "фотоаппарату",
				),
				array(
					"text" => "фотоаппарата",
					"correct" => true,
				),
				array(
					"text" => "фотоаппаратом",
				),
				
			),
		),
		array(
			"pytanie" => "Обсуждение дипломной работы должно состояться ... .",
			"odpowiedzi" => array(
				array(
					"text" => "на завтрашний семинар",
				),
				array(
					"text" => "в завтрашнем семинаре",
				),
				array(
					"text" => "на завтрашнем семинаре",
					"correct" => true,
				),
				array(
					"text" => "при завтрашнем семинаре",
				),
				
			),
		),
		array(
			"pytanie" => "Пожалуйста, ... свою фамилию по буквам",
			"odpowiedzi" => array(
				array(
					"text" => "называйте",
				),
				array(
					"text" => "зовут",
				),
				array(
					"text" => "называется",
				),
				array(
					"text" => "называется",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Я позвоню в поликлинику и ... , когда работает хирург.",
			"odpowiedzi" => array(
				array(
					"text" => "знаю",
				),
				array(
					"text" => "узнаю",
					"correct" => true,
				),
				array(
					"text" => "пойму",
				),
				array(
					"text" => "услышу",
				),
				
			),
		),
		array(
			"pytanie" => "Мы уедем 25 апреля, а ... 12 мая.",
			"odpowiedzi" => array(
				array(
					"text" => "приедем",
					"correct" => true,
				),
				array(
					"text" => "поедем",
				),
				array(
					"text" => "доеде",
				),
				array(
					"text" => "выедем",
				),
				
			),
		),
		array(
			"pytanie" => "Тебе надо ... на этой остановке.",
			"odpowiedzi" => array(
				array(
					"text" => "выйти",
					"correct" => true,
				),
				array(
					"text" => "выйти",
				),
				array(
					"text" => "прийти",
				),
				array(
					"text" => "пройти",
				),
				
			),
		),
		array(
			"pytanie" => "Ректор Петрова ... первокурсников с началом учебного года.",
			"odpowiedzi" => array(
				array(
					"text" => "поздравила",
					"correct" => true,
				),
				array(
					"text" => "поздравил",
				),
				array(
					"text" => "поздравили",
				),
				array(
					"text" => "поздравлял",
				),
				
			),
		),
		array(
			"pytanie" => "В какой театр вы посоветуете нам ... ?",
			"odpowiedzi" => array(
				array(
					"text" => "идти",
				),
				array(
					"text" => "идти",
					"correct" => true,
				),
				array(
					"text" => "прийти",
				),
				array(
					"text" => "пройти",
				),
				
			),
		),
		array(
			"pytanie" => "- Я хочу взять у Вас новые журналы. - Только ... аккуратно, а то они упадут.",
			"odpowiedzi" => array(
				array(
					"text" => "возьмите",
					"correct" => true,
				),
				array(
					"text" => "берите",
				),	
			),
		),
		array(
			"pytanie" => "Мы любим балет, поэтому часто ... в Большой Театр.",
			"odpowiedzi" => array(
				array(
					"text" => "идём",
				),
				array(
					"text" => "пойдём",
				),
				array(
					"text" => "придём",
				),
				array(
					"text" => "ходим",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Давно хотел с вами ... .",
			"odpowiedzi" => array(
				array(
					"text" => "знакомиться",
				),
				array(
					"text" => "знакомимся",
				),
				array(
					"text" => "познакомлюсь",
				),
				array(
					"text" => "познакомиться",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Вы видите знак: здесь нельзя ... .",
			"odpowiedzi" => array(
				array(
					"text" => "останавливаться",
				     "correct" => true,
				),
				array(
					"text" => "остановится",
				),
				array(
					"text" => "остановились",
				),
				array(
					"text" => "останавливались",
				),
				
			),
		),
			array(
			"pytanie" => "ты ... такую кассету, обязательно купи.",
			"odpowiedzi" => array(
				array(
					"text" => "увидишь",
				     "correct" => true,
				),
				array(
					"text" => "видишь",
				),
				array(
					"text" => "увидели",
				),
				array(
					"text" => "видел",
				),
				
			),
		),
		array(
			"pytanie" => "Я, к сожалению, не дочитала твою статью: не ... времени.",
			"odpowiedzi" => array(
				array(
					"text" => "был",
				),
				array(
					"text" => "была",
				),
				array(
					"text" => "были",
				),
				array(
					"text" => "было",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Я очень хотела ... , но, к сожалению, не смогла.",
			"odpowiedzi" => array(
				array(
					"text" => "приходить",
				),
				array(
					"text" => "придёт",
				),
				array(
					"text" => "прийти",
					"correct" => true,
				),
				array(
					"text" => "приходила",
				),
				
			),
		),
		array(
			"pytanie" => "Я советую тебе ... с собой зонт.",
			"odpowiedzi" => array(
				array(
					"text" => "брать",
				),
				array(
					"text" => "взять",
				),
				array(
					"text" => "берите",
				),
				array(
					"text" => "возьмите",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Мы вам вчера, наверное, мешали. Мы ... день рождения.",
			"odpowiedzi" => array(
				array(
					"text" => "отпразднуем",
				),
				array(
					"text" => "будем праздновать",
				),
				array(
					"text" => "отпраздновали",
				),
				array(
					"text" => "праздновали",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" =>  "Мне ... с темой научной работы. Эта проблема очень актуальная и перспективная.",
			"odpowiedzi" => array(
				array(
					"text" => "повезло",
					"correct" => true,
				),
				array(
					"text" => "посчастливилось",
				),
				array(
					"text" => "удалось",
				),
				array(
					"text" => "пришлось",
				),
				
			),
		),
		array(
			"pytanie" => "Вам необходимо ... план своей курсовой работы.",
			"odpowiedzi" => array(
				array(
					"text" => "пересмотреть",
					"correct" => true,
				),
				array(
					"text" => "осмотреть",
				),
				array(
					"text" => "присмотреть",
				),
				array(
					"text" => "подсмотреть",
				),
				
			),
		),
		array(
			"pytanie" => "У вас ... быть страховка.",
			"odpowiedzi" => array(
				array(
					"text" => "нужна",
				),
				array(
					"text" => "необходима",
				),
				array(
					"text" => "должна",
					"correct" => true,
				),
				array(
					"text" => "требуется",
				),
				
			),
		),
		array(
			"pytanie" => "Вы уверены, ... это её записная книжка?",
			"odpowiedzi" => array(
				array(
					"text" => "что",
					"correct" => true,
				),
				array(
					"text" => "если",
				),
				array(
					"text" => "чтобы",
				),
				array(
					"text" => "какой",
				),
				
			),
		),
		array(
			"pytanie" => "Я согласен, ... лучше не обсуждать этот вопрос.",
			"odpowiedzi" => array(
				array(
					"text" => "чтобы",
				),
				array(
					"text" => "как",
				),
				array(
					"text" => "что",
					"correct" => true,
				),
				array(
					"text" => "поэтому",
				),
				
			),
		),
		array(
			"pytanie" => "Это тот самый стол, ... любила собираться по вечерам семья моего дедушки.",
			"odpowiedzi" => array(
				array(
					"text" => "у которого",
					"correct" => true,
				),
				array(
					"text" => "на котором",
				),
				array(
					"text" => "с которым",
				),
				array(
					"text" => "за которым",
				),
				
			),
		),
		array(
			"pytanie" => "И все-таки мы опоздали, ... ехали очень быстро.",
			"odpowiedzi" => array(
				array(
					"text" => "если",
				),
				array(
					"text" => "хотя",
					"correct" => true,
				),
				array(
					"text" => "зато",
				),
				array(
					"text" => "в результате",
				),
				
			),
		),
		array(
			"pytanie" => "Друзья сразу же бросились его поздравлять, ... он вышел из аудитории после защиты диплома.",
			"odpowiedzi" => array(
				array(
					"text" => "прежде чем",
				),
				array(
					"text" => "как только",
					"correct" => true,
				),
				array(
					"text" => "с тех пор как",
				),
				array(
					"text" => "пока",
				),
				
			),
		),
		array(
			"pytanie" => "Ты обещал помочь мне, ... , к сожалению, не выполнил своего обещания.",
			"odpowiedzi" => array(
				array(
					"text" => "хотя",
				),
				array(
					"text" => "из-за чего",
				),
				array(
					"text" => "но",
					"correct" => true,
				),
				array(
					"text" => "или",
				),
				
			),
		),
		array(
			"pytanie" => "Я хочу закончить эту работу ... отпуска.",
			"odpowiedzi" => array(
				array(
					"text" => "потом",
				),
				array(
					"text" => "до",
					"correct" => true,
				),
				array(
					"text" => "перед",
				),
				array(
					"text" => "за",
				),
				
			),
		),
		array(
			"pytanie" => "В 1941 году сокровища Третьяковской галереи были отправлены в Сибирь ... они хранились всю войну.",
			"odpowiedzi" => array(
				array(
					"text" => "в которой",
				),
				array(
					"text" => "где",
					"correct" => true,
				),
				array(
					"text" => "куда",
				),
				array(
					"text" => "откуда",
				),
				
			),
		),
		array(
			"pytanie" => "Алексею на экзамене достался непростой вопрос. Он ... с ним справился",
			"odpowiedzi" => array(
				array(
					"text" => "благодаря труду",
				),
				array(
					"text" => "с трудом",
					"correct" => true,
				),
				array(
					"text" => "из-за труда",
				),
				array(
					"text" => "в труде",
				),
				
			),
		),
		array(
			"pytanie" => "Этот поезд идет ... Брест.",
			"odpowiedzi" => array(
				array(
					"text" => "до",
				),
				array(
					"text" => "через",
					"correct" => true,
				),
				array(
					"text" => "к",
				),
				array(
					"text" => "по",
				),
				
			),
		),
		array(
			"pytanie" => "Мы должны выехать из дома ... до вылета.",
			"odpowiedzi" => array(
				array(
					"text" => "после двух часов",
				),
				array(
					"text" => "за два часа",
					"correct" => true,
				),
				array(
					"text" => "на два часа",
				),
				array(
					"text" => "в два часа",
				),
				
			),
		),
		array(
			"pytanie" => "Вы сказали, ... поедете в этом году отдыхать на море?",
			"odpowiedzi" => array(
				array(
					"text" => "если",
				),
				array(
					"text" => "чтобы",
				),
				array(
					"text" => "если бы",
				),
				array(
					"text" => "что",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "не позвонил вам вчера, ... поздно вернулся из театра.",
			"odpowiedzi" => array(
				array(
					"text" => "так как",
					"correct" => true,
				),
				array(
					"text" => "поэтому",
				),
				array(
					"text" => "из-за",
				),
				array(
					"text" => "если",
				),
				
			),
		),
		array(
			"pytanie" => "Что нужно сделать, ... получить разрешение на вывоз валюты?",
			"odpowiedzi" => array(
				array(
					"text" => "когда",
				),
				array(
					"text" => "когда",
				),
				array(
					"text" => "что",
				),
				array(
					"text" => "чтобы",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Где ... узнать, какие документы нужны для поступления на курсы?",
			"odpowiedzi" => array(
				array(
					"text" => "разрешается ",
				),
				array(
					"text" => "можно",
					"correct" => true,
				),
				array(
					"text" => "запрещается",
				),
				array(
					"text" => "нельзя",
				),
				
			),
		),
		array(
			"pytanie" => "Надо зайти в аптеку и купить ... лекарство от головной боли.",
			"odpowiedzi" => array(
				array(
					"text" => "кое-какое",
				),
				array(
					"text" => "какое-никакое",
				),
				array(
					"text" => "какое-нибудь",
					"correct" => true,
				),
				array(
					"text" => "что-нибудь из",
				),
				
			),
		),
		array(
			"pytanie" => "Недавно я прочитал рассказ одного молодого писателя. ... рассказ очень интересный.",
			"odpowiedzi" => array(
				array(
					"text" => "При первом взгляде",
				),
				array(
					"text" => "На первый взгляд",
					"correct" => true,
				),
				array(
					"text" => "За первым взглядом",
				),
				array(
					"text" => "По первому взгляду",
				),
				
			),
		),
		array(
			"pytanie" => "Почему она не поехала на экскурсию? - ... болезни детей.",
			"odpowiedzi" => array(
				array(
					"text" => "Потому что",
				),
				array(
					"text" => "Так что",
				),
				array(
					"text" => "Из-за",
					"correct" => true,
				),
				array(
					"text" => "Поэтому",
				),
				
			),
		),
		array(
			"pytanie" => "Мы можем ответить на все вопросы, волнующие вас: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "которые вас волнуют",
					"correct" => true,
				),
				array(
					"text" => "которые вас волновали",
				),
				array(
					"text" => "которые вас взволновали",
				),
				array(
					"text" => "которыми Вы взвволнованы",
				),
				
			),
		),
		array(
			"pytanie" => "Остановки в пути делались всего ... .",
			"odpowiedzi" => array(
				array(
					"text" => "несколько минут",
					"correct" => true,
				),
				array(
					"text" => "через несколько минут",
				),
				array(
					"text" => "несколько минут",
				),
				array(
					"text" => "в несколько минут",
				),
				
			),
		),
		array(
			"pytanie" => "Тест по грамматике, ... нами, не был очень трудным. ",
			"odpowiedzi" => array(
				array(
					"text" => "выполняющий",
				),
				array(
					"text" => "выполненный",
				),
				array(
					"text" => "выполнявший",
				),
				array(
					"text" => "выполняемый",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "... на Родину, Джон хочет написать книгу о России и Санкт-Петербурге.",
			"odpowiedzi" => array(
				array(
					"text" => "Возвращаясь",
				),
				array(
					"text" => "Возвратившийся",
				),
				array(
					"text" => "Возвращенный",
				),
				array(
					"text" => "Возвратившись",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "Когда я сдаю экзамены, я не могу показывать своим гостям город: ... .",
			"odpowiedzi" => array(
				array(
					"text" => "Сдав экзамены",
				),
				array(
					"text" => "Сдающий экзамены",
				),
				array(
					"text" => "Сдавший экзамены",
				),
				array(
					"text" => "Сдавая экзамены",
					"correct" => true,
				),
				
			),
		),
		array(
			"pytanie" => "В современной литературе все чаще ... к античности, чтобы лучше понять современность.",
			"odpowiedzi" => array(
				array(
					"text" => "обращаются",
				),
				array(
					"text" => "обращается",
				),
				array(
					"text" => "обратятся",
				),
				array(
					"text" => "обратились",
					"correct" => true,
				),
				
			),
		),
		
	);