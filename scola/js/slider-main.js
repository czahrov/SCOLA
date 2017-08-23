$(document).ready(function(){
(function( slider, img, circle, nav ){
	var current = 0;
	var lock = false;
	circle.text( String( current + 1 ) + "/" + String( img.length ) );
	
	TweenLite.set(
		img.not( img.first() ),
		{
			opacity: 0,
		}
	);
	
	slider
	.on({
		set: function( e ){
			lock = true;
			if( current < 0 ) current += img.length;
			
			current %= img.length;
			
			circle.text( String( current + 1 ) + "/" + String( img.length ) );
			
			new TimelineLite({
				onComplete: function(){
					lock = false;
					
				},
				
			})
			.add('start',0)
			.add(
				TweenLite.to(
					img.not( img.eq( current ) ),
					0.5,
					{
						opacity: 0,
						ease: Power2.easeInOut,
					}
				),
				'start'
			)
			.add(
				TweenLite.to(
					img.eq( current ),
					0.5,
					{
						opacity: 1,
						ease: Power2.easeInOut,
					}
				),
				'start'
			)
			
		},
		prev: function( e ){
			if( !lock ){
				current--;
				slider.triggerHandler( 'set' );
				
			}
			
		},
		next: function( e ){
			if( !lock ){
				current++;
				slider.triggerHandler( 'set' );
				
			}
		},
		
	});
	
	nav.click(function( e ){
		if( $(this).hasClass( 'slider-arrow-2' ) ){
			slider.triggerHandler( 'next' );
			
		}
		else{
			slider.triggerHandler( 'prev' );
			
		}
		
	});
	
})
( $( '.slider' ), $( '.slider > .inner-slider' ), $( '.slider > .slider-pager' ), $( '.slider .slider-arrows .slider-arrow-box') );

});