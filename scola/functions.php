<?php
add_theme_support('post-thumbnails');

if( !is_admin() ){
	wp_enqueue_style( "fonts", get_template_directory_uri() . "/css/fonts.css", array() );
	wp_enqueue_style( "font-awesome", get_template_directory_uri() . "/css/font-awesome.min.css", array() );
	wp_enqueue_style( "facepalm", get_template_directory_uri() . "/css/facepalm.css", array() );
	wp_enqueue_style( "style", get_template_directory_uri() . "/style.css", array() );
	
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
	wp_enqueue_script( "FP", get_template_directory_uri() . "/js/facepalm.js" );
	
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
