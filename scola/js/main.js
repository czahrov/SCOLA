
$(document).ready(function(){
    $(".hamburger").click(function(){
        $(this).toggleClass("open");
        $(".main-list").toggleClass("closed");
    });

});

$(function(){

	(function( menu ){
		menu
		.click(function( e ){
			$(this)
			.toggleClass('opened')
			.siblings()
			.removeClass('opened');
			
		})
		.mouseleave(function( e ){
			$(this)
			.removeClass('opened')
			
		});
		
	})( $('.drop-element') );
	
});

$(function(){
	(function( panel ){
		var visible = false;
		var posY = function(){
			var body = $( 'body' ).prop( 'scrollTop' );
			var html = $( 'html' ).prop( 'scrollTop' );
			
			return html === 0?( body ):( html );
			
		};
		var clone = panel
		.clone( true )
		.appendTo( panel.parent() )
		.hide()
		.css({
			position: 'fixed',
			top: 0,
			right: 0,
			
		});
		
		
		panel
		.on({
			show: function( e ){
				clone.show();
				visible = true;
				
			},
			hide: function( e ){
				clone.hide();
				visible = false;
				
			},
			check: function( e ){
				if( posY() > panel.offset().top && !visible && window.innerWidth >= 1024 ){
					panel.triggerHandler( 'show' );
					
				}
				else if( posY() <= panel.offset().top && visible ){
					panel.triggerHandler( 'hide' );
					
				}
				
			},
			
		});
		
		$( window ).scroll( function(){
			panel.triggerHandler( 'check' );
			
		} );
		
		$( window ).resize(function(){
			if( window.innerWidth < 1024 && visible ){
				panel.triggerHandler( 'hide' );
				
			}
			
		});
		
	})
	( $( '.info-certyfications' ) );
	
});

$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});

$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 600) {
			$('.facebook').fadeIn();
		} else {
			$('.facebook').fadeOut();
		}
	});
	

	
});



$(document).ready(function(){
	$('.translate-input-dropdown1').click(function() {
		$('.choose-lang-container1').toggleClass('openning');
	});
	$('.translate-form-row').mouseleave(function() {
		$('.choose-lang-container1').removeClass('openning');
	});
	$('.choose-item').click(function() {
		$('.translate-input-dropdown1').empty()
		.prepend('.choose-item');
	});

});
	$(document).ready(function(){
	$('.translate-input-dropdown2').click(function() {
		$('.choose-lang-container2').toggleClass('openning');
	});

});

