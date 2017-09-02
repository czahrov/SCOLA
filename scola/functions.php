<?php
add_theme_support('post-thumbnails');

$develop = true;

if( !is_admin() ){
	wp_enqueue_style( "fonts", get_template_directory_uri() . "/css/fonts.css", array() );
	wp_enqueue_style( "font-awesome", get_template_directory_uri() . "/css/font-awesome.min.css", array() );
	if( $develop ){
		wp_enqueue_style( "facepalm", get_template_directory_uri() . "/css/facepalm.css", array() );
		// wp_enqueue_style( "piotr", get_template_directory_uri() . "/css/piotr.css", array() );
		wp_enqueue_style( "style", get_template_directory_uri() . "/style.css", array() );
	}
	else{
		wp_enqueue_style( "facepalm", get_template_directory_uri() . "/css/facepalm.min.css", array() );
		// wp_enqueue_style( "piotr", get_template_directory_uri() . "/css/piotr.min.css", array() );
		wp_enqueue_style( "style", get_template_directory_uri() . "/style.min.css", array() );
	}
	
	wp_enqueue_script( "googleapis", "https://maps.googleapis.com/maps/api/js?key=AIzaSyBOweaY6BOQgd9-6_eNaUTj4sq-3WRmFd4" );
	wp_enqueue_script( "jQ", get_template_directory_uri() . "/js/jquery-1.12.4.min.js" );
	wp_enqueue_script( "jQTS", get_template_directory_uri() . "/js/jquery.touchSwipe.min.js" );
	wp_enqueue_script( "jQMW", get_template_directory_uri() . "/js/jquery.mousewheel.min.js" );
	wp_enqueue_script( "TweenLite.min", get_template_directory_uri() . "/js/TweenLite.min.js" );
	wp_enqueue_script( "TimelineLite.min", get_template_directory_uri() . "/js/TimelineLite.min.js" );
	wp_enqueue_script( "CSSPlugin.min", get_template_directory_uri() . "/js/CSSPlugin.min.js" );
	wp_enqueue_script( "ScrollToPlugin", get_template_directory_uri() . "/js/ScrollToPlugin.min.js" );
	wp_enqueue_script( "RoundProps", get_template_directory_uri() . "/js/RoundPropsPlugin.min.js" );
	wp_enqueue_script( "TextPlugin", get_template_directory_uri() . "/js/TextPlugin.min.js" );
	wp_enqueue_script( "gmap3", get_template_directory_uri() . "/js/gmap3.min.js" );
	if( $develop ){
		wp_enqueue_script( "FP", get_template_directory_uri() . "/js/facepalm.js" );
	}
	else{
		wp_enqueue_script( "FP", get_template_directory_uri() . "/js/facepalm.min.js" );
	}
	
}

function isAjax(){
	return $_SERVER["HTTP_X_REQUESTED_WITH"] === "XMLHttpRequest";
}

function home_slider_top(){
	return array(
		array(
			'title' => 'Kursy językowe dofinansowane ze środków UE w SCOLA',
			'img' => 'https://placeimg.com/300/100/tech',
			'url' => home_url(),
			'date' => time(),
			'cats' => array(
				'ważne informacje',
				
			),
			
		),
		array(
			'title' => 'Lorem ipsum',
			'img' => 'https://placeimg.com/300/101/tech',
			'url' => home_url(),
			'date' => time(),
			'cats' => array(
				'ważne informacje',
				'ogłoszenia',
				
			),
			
		),
		array(
			'title' => 'Inne lorem ipsum',
			'img' => 'https://placeimg.com/300/102/tech',
			'url' => home_url(),
			'date' => time(),
			'cats' => array(
				'ogłoszenia',
				
			),
			
		),
		
	);
	
}

class NewsLetter{
	/*		$data
		array(
			'inactive' =>array(
				[mail] => array(
					'id' => ...,
					
				),
			),
			'active' =>array(
				[mail] => array(
					'id' => ...,
					
				),
			),
		),
		
	*/
	/*		$proxy
		array(
			'inactive' =>array(
				[id] => array(
					'mail' => ...,
					
				),
			),
			'active' =>array(
				[id] => array(
					'mail' => ...,
					
				),
			),
		),
		
	*/
	
	private $file;
	private $data;
	public $proxy;
	
	public function __construct(){
		$this->file = get_template_directory() . '/pocztowka.php';
		$this->loadData();
		
	}
	
	private function loadData(){
		$data = @json_decode( file_get_contents( $this->file ), true );
		if( file_exists( $this->file ) && $data !== NULL ){		// czy plik istnieje i zawiera dane JSON
			$this->data = $data;
			
		}
		else{
			$this->data = array(
				'inactive' => array(),
				'active' => array(),
				
			);
			
			$this->saveData();
			
		}
		
		$this->proxy = array(
			'inactive' => array(),
			'active' => array(),
			
		);
		
		if( count( $this->data[ 'inactive' ] ) > 0 ) foreach( $this->data[ 'inactive' ] as $mail => $item ){
			$this->proxy[ 'inactive' ][ $item[ 'id' ] ] = $mail;
			
		}
		
		if( count( $this->data[ 'active' ] ) > 0 )  foreach( $this->data[ 'active' ] as $mail => $item ){
			$this->proxy[ 'active' ][ $item[ 'id' ] ] = $mail;
			
		}
		
	}
	
	private function saveData(){
		file_put_contents( $this->file, json_encode( $this-> data ) );
		
	}
	
	public function getRegLink( $mail ){
		if( $this->mailStatus( $mail ) === false ){		// czy dany mail nie został już aktywowany ani nie jest na liście oczekujących do aktywacji
			$this->data[ 'inactive' ][ $mail ][ 'id' ] = md5( microtime( true ) );		// generowanie ID
			$this->saveData();
			
		}
		
		$id = $this->data[ 'inactive' ][ $mail ][ 'id' ];		// ID danego maila
		
		return sprintf( "%s?reg=%s", home_url( 'newsletter' ), $id );
		
	}
	
	public function register( $id ){
		$mail = $this->proxy[ 'inactive' ][ $id ];
		if( strlen( $mail ) > 0 ){
			$this->data[ 'active' ][ $mail ] = $this->data[ 'inactive' ][ $mail ];
			unset( $this->data[ 'inactive' ][ $mail ] );
			$this->saveData();
			
			return $mail;
			
		}
		else return false;
		
	}
	
	public function getUnregLink( $id, $isMail = false ){
		if( $isMail ){
			$mail = $id;
			$id = $this->getID( $id );
			
		}
		else{
			$mail = $this->getMail( $id );
			
		}
		
		if( !empty( $mail ) ){
			return sprintf( "%s?unreg=%s", home_url( 'newsletter' ), $id );
			
		}
		else{
			return false;
			
		}
		
	}
	
	public function getUnregMail( $mail ){
		$id = $this->data[ 'active' ][ $mail ][ 'id' ];
		if( !empty( $id ) ){
			return sprintf( "%s?unregmail=%s", home_url( 'newsletter' ), $id );
			
		}
		else{
			return false;
		}
		
	}
	
	public function unregister( $id ){
		$mail = $this->proxy[ 'active' ][ $id ];
		if( strlen( $mail ) > 0 ){
			unset( $this->data[ 'active' ][ $mail ] );
			$this->saveData();
			return $mail;
			
		}
		else return false;
		
	}
	
	public function getData(){
		return $this->data;
		
	}
	
	public function mailStatus( $mail ){
		if( !empty( $this->data[ 'inactive' ][ $mail ] ) ){
			return '0';
			
		}
		elseif( !empty( $this->data[ 'active' ][ $mail ] ) ){
			return '1';
			
		}
		else{
			return false;
			
		}
		
	}
	
	public function getMail( $id ){
		$active = $this->proxy[ 'active' ][ $id ];
		$inactive = $this->proxy[ 'inactive' ][ $id ];
		return !empty( $active )?( $active ):( !empty( $inactive )?( $inactive ):( false ) );
		
	}
	
	public function getID( $mail ){
		$active = $this->data[ 'active' ][ $mail ][ 'id' ];
		$inactive = $this->data[ 'inactive' ][ $id ][ 'id' ];
		return !empty( $active )?( $active ):( !empty( $inactive )?( $inactive ):( false ) );
		
	}
	
	public function printLista(){
		if( count( $this->data[ 'active' ] ) > 0 ){
			$ret = array();
			foreach( $this->data[ 'active' ] as $mail => $data ){
				$ret[] = $mail;
				
			}
			
			echo implode( ", ", $ret );
			
		}
		else{
			echo "Lista mailingowa jest pusta.";
			
		}
		
	}
	
}

add_action( 'page_title', function( $arg ){
	$arr = array();
	
	if( is_home() ){
		$arr[] = "Strona główna";
	}
	else{
		$arr[] = get_post()->post_title;
		
	}
	
	$arr[] = get_bloginfo( 'name' );
	
	echo implode( " | ", $arr );
	
} );

add_action( 'bodyMarkup', function( $arg ){
	$class = array(
		'regular',
		'font-dark',
		
	);
	
	if( is_home() ){
		$class[] = 'home';
		
	}
	
	printf( "<body class='%s'>", implode( " ", $class ) );
	
} );

add_action( 'tab', function( $arg ){
	$arg = array_merge(
		array(
			'class' => '',
			'to' => '',
			'direction' => 'down',
			'img' => 'arrow_small.png',
			'url' => '',
			
		),
		$arg
	);
	
	printf(
		"<div class='tab arrow_slide pointer flex flex-items-center flex-justify-center %s' slide-to='%s'>
			<img class='icon arrow %s' src='%s/img/%s'/>
			%s
		</div>",
		$arg[ 'class' ],
		$arg[ 'to' ],
		$arg[ 'direction' ],
		get_template_directory_uri(),
		$arg[ 'img' ],
		empty( $arg[ 'url' ] )?( '' ):( "<a class='hitbox' href='{$arg[ 'url' ]}'></a>" )
		
	);
	
} );

add_action( 'customButton', function( Array $arg ){
	$arg = array_merge(
		array(
			'arrow' => 'green',
			'direction' => 'right',
			'class' => '',
			'title' => '',
			'url' => '',
			'newWindow' => false,
		),
		$arg
	);
	
	/*
	<div class='button bold pointer arrow_slide font-green flex flex-items-center flex-justify-center'>
		<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_green.png' />
		<div class='content'>
			metody nauczania
		</div>
		<a class='hitbox' href='<?php home_url(); ?>'></a>
		
	</div>
	*/
	
	$ret = "";
	
	$ret .= sprintf( "<div class='customButton bold pointer arrow_slide font-green flex flex-items-center flex-justify-center %s'>", $arg[ 'class' ] );
	
	$arrow = "/img/arrow_";
	
	if( empty( $arg[ 'arrow' ] ) ){
		$arrow .= "green";
	}
	else{
		$arrow .= $arg[ 'arrow' ];
	}
	
	$arrow .= ".png";
	
	$ret .= sprintf( "<img class='icon arrow %s' src='%s%s' />", $arg[ 'direction' ], get_template_directory_uri(), $arrow );
	
	$ret .= sprintf( "<div class='content'>%s</div>", $arg[ 'title' ] );
	
	if( !empty( $arg[ 'url' ] ) ){
		$target = $arg[ 'newWindow' ]?( " target='_blank'" ):( "" );
		$ret .= sprintf( "<a class='hitbox' href='%s'%s></a>", $arg[ 'url' ], $target );
		
	}
	
	$ret .= "</div>";
	
	echo $ret;
	
} );

add_action( 'customButtonFill', function( Array $arg ){
	$arg = array_merge(
		array(
			'arrow' => 'white',
			'direction' => 'right',
			'class' => '',
			'title' => '',
			'url' => ''
		),
		$arg
	);
	/*
	<div class='customButtonFill pointer flex'>
		<div class='box bg-green font-light arrow_slide flex grow flex-items-center'>
			<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_white.png'/>
			<div class='title'>
				wypełnij test
			</div>
			
		</div>
		<a class='hitbox' href='<?php echo home_url( "testy/$slug" ); ?>'></a>
		
	</div>
	*/
	
	$img = sprintf( "%s/img/arrow_%s.png", get_template_directory_uri(), $arg[ 'arrow' ] );
	$url = empty( $arg[ 'url' ] )?( '' ):( "<a class='hitbox' href='{$arg[ 'url' ]}'></a>" );
	
	$ret = "<div class='customButtonFill pointer flex {$arg[ 'class' ]}'>
		<div class='box bg-green font-light arrow_slide flex grow flex-items-center'>
			<img class='icon arrow {$arg[ 'direction' ]}' src='{$img}'/>
			<div class='title'>
				{$arg[ 'title' ]}
			</div>
			
		</div>
		{$url}
	</div>";
	
	echo $ret;
	
} );

add_action( 'customSelect', function( $arg ){
	$arg = array_merge(
		array(
			'class' => '',
			'atts' => array(),
			'head' => '',
			'title' => '',
			'icon' => 'fa fa-chevron-down',
			'options' => '',
			'option' => '',
			'items' => array(),
			
		),
		$arg
	);
	
	$atts = "";
	if( count( $arg[ 'atts' ] ) > 0 ){
		foreach( $arg[ 'atts' ] as $name => $value ){
			$atts .= sprintf( "%s='%s' ", $name, $value );
			
		}
		
	}
	
	$ret = sprintf( "<div class='customSelect flex %s' %s>
		<div class='head base1 flex flex-items-center flex-justify-between %s'>
			<div class='title'>%s</div>
			<div class='icon %s'></div>
			
		</div>
		<div class='options base1 %s'>",
		$arg[ 'class' ],
		$atts,
		$arg[ 'head' ],
		$arg[ 'title' ],
		$arg[ 'icon' ],
		$arg[ 'options' ] );
	
	if( count( $arg[ 'items' ] ) > 0 ) foreach( $arg[ 'items' ] as $item ){
		$ret .= sprintf( "<div class='option flex flex-items-center %s'>%s</div>", 
			$arg[ 'option' ],
			$item );
			
	}
	
	$ret .= "</div></div>";
	
	echo $ret;
	
	/* <div class='customSelect flex'>
			<div class='head base1 flex flex-items-center flex-justify-between'>
				<div class='title'></div>
				<div class='icon fa fa-chevron-down'></div>
				
			</div>
			<div class='options base1'>
				<div class='option flex flex-items-center'></div>
				
			</div>
			
		</div> */
	
} );

add_action( 'customFile', function( $arg ){
	$arg = array_merge(
		array(
			'class' => '',
			'head' => '',
			'title' => 'Dodaj załącznik',
			'icon' => 'fa fa-plus',
			'name' => sprintf( "file%s", time() ),
			'accept' => '.*',
			'multi' => false,
			
		),
		$arg
	);
	
	/*
	<div class='customFile item pointer base1 base2-mm base3-ml flex'>
		<div class='head bg-light font-dark base1 flex flex-items-center flex-justify-between'>
			<div class='title'>
				Wgraj plik
			</div>
			<div class='icon fa fa-plus'></div>
			
		</div>
		<input class='hide' type='file' name='plik'>
		
	</div>
	*/
	
	printf( "<div class='customFile flex %s'>
			<div class='head base1 flex flex-items-center flex-justify-between %s'>
				<div class='title'>
					%s
				</div>
				<div class='icon %s'></div>
				
			</div>
			<input class='hide' type='file' name='%s' accept='%s' %s>
			
		</div>",
		$arg[ 'class' ],
		$arg[ 'head' ],
		$arg[ 'title' ],
		$arg[ 'icon' ],
		$arg[ 'name' ],
		$arg[ 'accept' ],
		$arg[ 'multi' ] === true?( 'multiple' ):( '' )
		
	);
	
} );

add_action( 'breadcrumb', function( $arg ){
	$items = array();
	
	$current = get_post();
	$parent = $current->post_parent;
	array_unshift( $items, sprintf( "<div class='item'><a href='%s'>%s</a></div>", get_permalink( $current->ID ), $current->post_title ) );
	
	if( $current->ID !== 0 ){
		while( $parent !== 0 ){
			$current = get_post( $parent );
			$parent = $current->post_parent;
			array_unshift( $items, sprintf( "<div class='item'><a href='%s'>%s</a></div>", get_permalink( $current->ID ), $current->post_title ) );
			
		}
		
	}
	
	array_unshift( $items, sprintf( "<div class='item'><a href='%s'>%s</a></div>", home_url(), 'Strona główna' ) );
	
	$ret = "<div id='breadcrumb' class='grid bold flex flex-wrap flex-items-center'><div class='title'>Obecnie przeglądasz:</div>";
	$ret .= implode( " • ", $items );
	$ret .= "</div>";
	
	echo $ret;
	
} );
