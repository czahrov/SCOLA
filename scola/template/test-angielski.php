<?php
	// $_SESSION[ 'person' ] = $_POST;
	// print_r( $_POST );
	// print_r( $_SESSION[ 'person' ] );
	
	$progi = array(
		array(
			'value' => 0,
			'name' => 'noob',
		),
		array(
			'value' => 20,
			'name' => 'uczeń',
		),
		array(
			'value' => 40,
			'name' => 'licealista',
		),
		array(
			'value' => 60,
			'name' => 'student',
		),
		array(
			'value' => 80,
			'name' => 'pro',
		),
		
	);
	
	$quest = array(
		array(
			'pytanie' => 'Do you like ... Italian food ?',
			'odpowiedzi' => array(
				array(
					'text' => '-',
					'correct' => true,
				),
				array(
					'text' => 'a',
				),
				array(
					'text' => 'an',
				),
				array(
					'text' => 'the',
				),
				
			),
		),
		array(
			'pytanie' => 'I can\'t talk to you now. I ... a report.',
			'odpowiedzi' => array(
				array(
					'text' => 'have written',
					'correct' => true,
				),
				array(
					'text' => 'wrote',
				),
				array(
					'text' => 'am writing',
				),
				array(
					'text' => 'write',
				),
				
			),
		),
		array(
			'pytanie' => 'Poor Jane! She ... to the dentist twice a month.',
			'odpowiedzi' => array(
				array(
					'text' => 'go',
					'correct' => true,
				),
				array(
					'text' => 'going',
				),
				array(
					'text' => 'goes',
				),
				array(
					'text' => 'is going',
				),
				
			),
		),
		
	);