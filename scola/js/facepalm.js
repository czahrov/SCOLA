(function(){
	var root = {};
	root.launcher = function(){
		if( typeof root.page.default === 'function' ) root.page.default();
		var path = window.location.pathname.match(new RegExp('^' + root.bazar.basePath + '(.*)$','i'))[1];
		
		if(path == '/'){		// czy strona główna?
			if( typeof root.page.index === 'function' ) root.page.index();
			
		}
		else{		//podstrona
			var subpage = path.match(/([\w\-]+)\/$/)[1];
			var t = subpage.replace(/\-/g,'_');
			if(typeof subpage === 'string' && subpage.length){
				if(typeof root.page[t] === 'function'){
					root.page[t]();
					
				}
				else if( typeof root.page.alternate === 'function' ) root.page.alternate();
				
			}
			
		}
		
	},
	root.bazar = {
		basePath: '/PiotrM/wp_scola',		// ścieżka do podfolderu ze stroną (np: /adres/do/podfolderu, albo wartość pusta )
		logger: /logger/i.test(window.location.hash),		// czy wyświetlać komunikaty o wywoływaniu funkcji
		mobile: /mobile/i.test(window.location.hash) || undefined,		// czy aktualnie używane urządzenie jest urządzeniem mobilnym
		
	},
	root.addon = {
		isLogger: function(){
			return root.bazar.logger || false;
		},
		isMobile: function(){
			var bazar = root.bazar;
			var logger = bazar.logger || false;
			if(logger) console.log('isMobile()');
			if(typeof bazar.mobile === 'undefined'){
				bazar.mobile = /Mobile|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
				
			}
			
			return bazar.mobile;
			
		},
		youtube: function(arg){
			/*
				arg = {
					ID*			// ID filmu video na YT
					iframe*		// element jQuery albo selektor iframe do odtwarzania filmu
					autoplay	// automatyczne odtwarzanie filmu [1/0]
					loop		// zapętlanie filmu [1/0]
					controls	// kontrolki filmu [1/0]
					beforePlay	// funkcja wywoływana przed rozpoczęciem odtwarzania filmu
					onClose		// funkcja wywoływana przy zamykaniu filmu
					
				}
			*/
			
			try{
				var logger = root.bazar.logger || false;
				
				if(typeof arg.ID !== 'string') throw 'Niepoprawny ID filmu';
				if(!$(arg.iframe).length) throw 'iframe nie istnieje';
				arg.autoplay = arg.autoplay || 0;
				arg.loop = arg.loop || 0;
				arg.controls = arg.controls || 1;
				arg.beforePlay = arg.beforePlay || function(){};
				arg.onClose = arg.onClose || function(){};
				
				var ret = {
					el: arg.iframe,
					url: "https://www.youtube.com/embed/"+ arg.ID +"?controls="+ arg.controls +"&autoplay="+ arg.autoplay +"&loop="+ arg.loop,
					open: function(){
						arg.beforePlay(this.el);
						$(this.el).attr({
							src: this.url,
							
						});
						
					},
					close: function(){
						arg.onClose(this.el);
						$(this.el).attr({
							src: '',
							
						});
						
					}
					
					
				};
				
				return ret;
				
			}
			catch(err){
				if(logger) console.error(err);
				
			}
			finally{
				
			}
			
		},
		form:{
			filters:{
				imie: /^[a-zA-Z \-żźćńółąśęŻŹĆŃÓŁĄŚĘ]+$/,
				nazwa: /^[\w \-żźćńółąśęŻŹĆŃÓŁĄŚĘ]+$/,
				adres: /^[\w \-żźćńółąśęŻŹĆŃÓŁĄŚĘ\.,\d]+$/,
				telefon: /^[\d\+ \(\)]+$/,
				mail: /^[^\d_\.\-][\w\d \.\-!#\$%&'\*\+/=\?^`\{\|\}~]{1,64}@\w+(?:\.\w+)+$/,
				tekst: /^[\w\s \-żźćńółąśęŻŹĆŃÓŁĄŚĘ\[\]\{\}\|\+\?\.,\:;\$\^\*\(\)!#%~/\\]*$/,
				tekst_req: /^[\w\s \-żźćńółąśęŻŹĆŃÓŁĄŚĘ\[\]\{\}\|\+\?\.,\:;\$\^\*\(\)!#%~/\\]+$/,
			},
			verify: function(arg){		// arg = tablica obiektów {name, item, filterName}
				var logger = root.addon.isLogger();
				if(logger) console.log('form.verify()');
				var self = this;
				if(typeof arg === 'object' && typeof arg.length === 'number'){
					var errors = [];
					for(i in arg){
						var value = $(arg[i].item).val();
						if(typeof arg[i] === 'object' && typeof value !== 'undefined' && typeof arg[i].filterName === 'string' && typeof arg[i].name === 'string' && typeof self.filters[arg[i].filterName] !== 'undefined'){
							if(!self.filters[arg[i].filterName].test(value)){
								errors.push(arg[i].item);
							}
							
						}
						else return false;
						
					}
					
					if(errors.length){
						return errors;
						
					}
					else return true;
					
				}
				
				return false;
				
			},
		},
		
	},
	root.page = {
		default: function(){
			var addon = root.addon;
			var logger = addon.isLogger();
			
			if(logger){
				window.facepalm = root;
				console.log('page.default()');
			}
			
			/* rozwijanie menu na mobilu */
			(function( item ){
				item
				.click(function(){
					$(this)
					.toggleClass( 'open' )
					.siblings()
					.removeClass( 'open' );
					
				});
				
			})
			( $( '#top > .menu > li' ) );
			
			/* obsługa toggle */
			(function( toggle, menu ){
				var lock = false;
				
				toggle
				.click(function(){
					if( lock ) return false;
					lock = true;
					toggle.add( menu ).toggleClass( 'open' );
					menu.children( 'li.open' ).removeClass( 'open' );
					window.setTimeout(function(){
						lock = false;
						
					}, 300);
					
				});
				
			})
			( $( '#top > .toggle' ), $( '#top > .menu' ) );
			
			/* obsługa strzałek przewijania */
			(function( link ){
				link.click(function( e ){
					var self = $(this);
					
					TweenLite.to(
						$( 'html, body' ),
						.5,
						{
							scrollTop: function(){
								return $( self.attr( 'slide-to' ) ).offset().top;
								
							},
							ease: Power2.easeInOut,
							
						}
					);
					
				});
				
				
			})
			( $('[slide-to]') );
			
			/* facebook button */
			(function( fb, top ){
				var tout;
				var config = {
					delay: 200,
					
				};
				
				fb
				.on({
					show: function( e ){
						fb.addClass( 'open' );
						
					},
					hide: function( e ){
						fb.removeClass( 'open' );
						
					},
					check: function( e ){
						var pos = function(){
							if( $( 'body' ).prop( 'scrollTop' ) == 0 ){
								return $( 'html' ).prop( 'scrollTop' );
								
							}
							else{
								return $( 'body' ).prop( 'scrollTop' );
								
							}
							
						}
						
						if( pos() >= top.offset().top + top.outerHeight() ){
							fb.triggerHandler( 'show' );
							
						}
						else{
							fb.triggerHandler( 'hide' );
							
						}
						
					},
					
				});
				
				$( window ).scroll(function(){
					window.clearTimeout( tout );
					tout = window.setTimeout(function(){
						fb.triggerHandler( 'check' );
						
					}, config.delay);
					
				});
				
			})
			( $( '#fb' ), $( '#top' ) );
			
		},
		alternate: function(){
			var addon = root.addon;
			var logger = addon.isLogger();
			
			if(logger) console.log('page.alternate()');
			
		},
		index: function(){
			var addon = root.addon;
			var logger = addon.isLogger();
			
			if(logger) console.log('page.index()');
			
			/* slider główny */
			(function( slider, view, slides, notify, numer, pagin, nav ){
				var config = {
					delay: 3000,
					duration: 500,
					
				};
				var slides = slider.find( '.view > .slide' );
				var itrv;
				var current = 0;
				var lock = false;
				
				pagin.children( '.mark' ).css({
					width: function(){
						return String(100 / slides.length) + '%';
					},
					
				});
				
				numer.text( String( current + 1 ) + '/' + String( slides.length ) );
				
				slider
				.on({
					set: function( e ){
						lock = true;
						if( current < 0 ) current = slides.length - 1;
						current %= slides.length;
						
						pagin.children( '.mark' ).css({
							transform: 'translateX(' + current * 100 + '%)',
							
						});
						
						numer.text( String( current + 1 ) + '/' + String( slides.length ) );
						
						new TimelineLite({
							onComplete: function(){
								lock = false;
							},
							
						})
						.add( 'start', 0 )
						.add(
							TweenLite.to(
								view,
								config.duration / 1000,
								{
									scrollLeft: current * slides.first().outerWidth( true ),
									roundProps: 'scrollLeft',
									ease: Power2.easeInOut,
									
								}
							), 'start'
						)
						.add(
							TweenLite.to(
								numer,
								config.duration / 1000,
								{
									text:{
										value: String( current + 1 ) + '/' + String( slides.length ),
										delimiter: "",
									},
									
								}
							), 'start'
						)
						.add(
							TweenLite.to(
								notify.find( '.content' ),
								config.duration / 1000,
								{
									text:{
										value: slides.eq( current ).find( '.box > .title' ).text(),
										delimiter: "",
									},
									
								}
							), 'start'
						)
						.add(
							TweenLite.to(
								notify.find( '.title' ),
								config.duration / 1000,
								{
									text:{
										value: slides.eq( current ).find( '.head > .kategoria' ).text(),
										delimiter: "",
									},
									
								}
							), 'start'
						)
						
					},
					next: function( e ){
						if( lock ) return false;
						current++;
						slider.triggerHandler( 'set' );
						
					},
					prev: function( e ){
						if( lock ) return false;
						current--;
						slider.triggerHandler( 'set' );
						
					},
					start: function( e ){
						slider.triggerHandler( 'stop' );
						itrv = window.setInterval(function(){
							slider.triggerHandler( 'next' );
							
						}, config.delay);
						
					},
					stop: function( e ){
						window.clearInterval( itrv );
						
					},
					mouseenter: function( e ){
						slider.triggerHandler( 'stop' );
						
					},
					mouseleave: function( e ){
						slider.triggerHandler( 'start' );
						
					},
					
				})
				.swipe({
					swipeLeft: function(){
						slider.triggerHandler( 'next' );
						
					},
					swipeRight: function(){
						slider.triggerHandler( 'prev' );
						
					},
					
				});
				
				nav.children( '.prev' ).click(function(){
					slider.triggerHandler( 'prev' );
					
				});
				
				nav.children( '.next' ).click(function(){
					slider.triggerHandler( 'next' );
					
				});
				
				slider.triggerHandler( 'start' );
				
				$( window ).resize(function(){
					slider.triggerHandler( 'set' );
					
				});
				
			})
			( $( '#home > .slider' ), 
			$( '#home > .slider > .view' ), 
			$( '#home > .slider > .view > .item' ), 
			$( '#home > .slider > .notify' ), 
			$( '#home > .slider > .grid > .numer' ), 
			$( '#home > .slider > .grid > .paginacja' ), 
			$( '#home > .slider > .grid > .nav' ) );
			
			/* slider język - kafelki */
			(function( slider, view, slides, nav, number){
				var config = {
					duration: 0.5,
					
				};
				var current = 0;
				var lock = false;
				
				number.text( String( current + 1 ) + "/" + String( slides.length ) );
				
				slider
				.on({
					set: function( e ){
						lock = true;
						if( current < 0 ) current = slides.length - 1;
						current %= slides.length;
						
						new TimelineLite({
							onComplete: function( e ){
								lock = false;
							},
							
						})
						.add( 'start', 0 )
						.add(
							TweenLite.to(
								view,
								config.duration,
								{
									scrollLeft: function(){
										return slides.first().outerWidth( true ) * current;
										
									},
									ease: Power2.easeOut,
									
								}
							), 'start'
						)
						.add(
							TweenLite.to(
								number,
								config.duration,
								{
									text:{
										value: String( current + 1 ) + "/" + String( slides.length ),
										delimiter: "",
										
									},
									ease: Power2.easeOut,
									
								}
							), 'start'
						);
						
					},
					next: function( e ){
						if( lock || window.innerWidth >= 768 ) return false;
						current++;
						slider.triggerHandler( 'set' );
						
					},
					prev: function( e ){
						if( lock || window.innerWidth >= 768 ) return false;
						current--;
						slider.triggerHandler( 'set' );
						
					},
					
				})
				.swipe({
					swipeLeft: function( e ){
						slider.triggerHandler( 'next' );
						
					},
					swipeRight: function( e ){
						slider.triggerHandler( 'prev' );
						
					},
					
				});
				
				nav.click(function( e ){
					if( $(this).hasClass( 'next' ) ){
						slider.triggerHandler( 'next' );
						
					}
					else if( $(this).hasClass( 'prev' ) ){
						slider.triggerHandler( 'prev' );
						
					}
					
				});
				
				$(window).resize(function( e ){
					if( window.innerWidth >= 768 ){
						 current = 0;
						 slider.triggerHandler( 'set' );
					}
					
				});
				
			})
			( $( '#home > .jezyk' ), 
			$( '#home > .jezyk > .box > .inner' ), 
			$( '#home > .jezyk > .box > .inner > .item.flag' ), 
			$( '#home > .jezyk > .box > .nav > .icon' ), 
			$( '#home > .jezyk > .box > .nav > .number' ) );
			
			/* slider opinie */
			(function( slider, view, slides, nav ){
				var itrv;
				var tout;
				var current = 0;
				var lock = false;
				var config = {
					delay: 4000,
					duration: 1000,
				};
				
				slider
				.on({
					set: function( e ){
						if( lock ) return false;
						lock = true;
						
						if( current < 0 ) current = slides.length - 1;
						current %= slides.length;
						
						new TimelineLite({
							onComplete: function(){
								lock = false;
								
							},
							
						})
						.add( 'start', 0 )
						.add(
							TweenLite.to(
								view,
								config.duration / 1000,
								{
									scrollLeft: function(){
										return slides.first().outerWidth( true ) * current;
										
									},
									ease: Power2.easeOut,
									
								}
							), 'start'
						);
						
					},
					next: function( e ){
						if( !lock ){
							current++;
							slider.triggerHandler( 'set' );
						}
						
					},
					prev: function( e ){
						if( !lock ){
							current--;
							slider.triggerHandler( 'set' );
						}
						
					},
					stop: function( e ){
						window.clearInterval( itrv );
						
					},
					start: function( e ){
						slider.triggerHandler( 'stop' );
						itrv = window.setInterval(function(){
							slider.triggerHandler( 'next' );
							
						}, config.delay);
						
					},
					mouseenter: function( e ){
						slider.triggerHandler( 'stop' );
						
					},
					mouseleave: function( e ){
						slider.triggerHandler( 'start' );
						
					},
					
				})
				.swipe({
					swipeLeft: function( e ){
						slider.triggerHandler( 'next' );
						
					},
					swipeRight: function( e ){
						slider.triggerHandler( 'prev' );
						
					},
					
				});
				
				nav.click(function( e ){
					if( $(this).hasClass( 'next' ) ){
						slider.triggerHandler( 'next' );
						
					}
					else if( $(this).hasClass( 'prev' ) ){
						slider.triggerHandler( 'prev' );
						
					}
					
				});
				
				$( window ).resize(function(){
					window.clearTimeout( tout );
					tout = window.setTimeout(function(){
						slider.triggerHandler( 'set' );
						
					}, 300);
					
				});
				
				slider.triggerHandler( 'start' );
				
			})
			( $( '#home > .opinie .slider' ), 
			$( '#home > .opinie .slider > .view' ), 
			$( '#home > .opinie .slider > .view > .slide' ), 
			$( '#home > .opinie .slider > .nav > .icon' ) );
			
			/* popup */
			(function( popup, box, close, content ){
				var lock = false;
				
				popup
				.on({
					open: function( e, status, text ){
						if( lock ) return false;
						lock = true;
						new TimelineLite({
							onStart: function(){
								popup
								.removeClass( 'ok info fail' )
								.addClass( 'open ' + status );
								
								content.html( text );
								
							},
							onComplete: function(){
								lock = false;
								
							},
							
						})
						.add( 'start', 0 )
						.add(
							TweenLite.fromTo(
								popup,
								.3,
								{
									opacity: 0,
								},
								{
									opacity: 1,
									
								}
							), 'start'
						)
						.add(
							TweenLite.fromTo(
								box,
								.2,
								{
									opacity: 0,
									y: -100,
								},
								{
									opacity: 1,
									y: 0,
								}
							), 'start+=0.3'
						)
						
					},
					close: function( e ){
						if( lock ) return false;
						lock = true;
						new TimelineLite({
							onComplete: function(){
								popup.removeClass( 'open ok fail info' );
								lock = false;
							},
							
						})
						.add( 'start', 0 )
						.add(
							TweenLite.to(
								box,
								0.2,
								{
									y: 100,
									opacity: 0,
								}
								
							), 'start'
						)
						.add(
							TweenLite.to(
								popup,
								0.3,
								{
									opacity: 0,
								}
								
							), 'start+=0.2'
						)
						
					},
					
				});
				
				popup
				.add( close )
				.click(function(){
					popup.triggerHandler( 'close' );
					
				});
				
				box.click(function( e ){
					e.stopPropagation();
					
				});
				
			})
			( $( '#popup' ), $( '#popup > .box' ), $( '#popup > .box > .close' ), $( '#popup > .box > .view .text > .content' ) );
			
			/* newsletter */
			(function( newsletter, btn, input, popup ){
				var action;
				
				newsletter
				.on({
					submit: function( e ){
						e.preventDefault();
						
					},
					send: function( e ){
						$.post(
							'newsletter',
							newsletter.serializeArray(),
							function( data, status ){
								
								// console.log( data );
								var res = JSON.parse( data );
								if( typeof res.action !== "undefined" ){
									action = res.action;
									
								}
								popup.triggerHandler( 'open', [ res.status, res.msg ] );
								// console.log( res );
								
							}
						);
						
					},
					
				});
				
				btn.click(function(){
					// console.log( action );
					
					if( typeof action === "undefined" ){
						newsletter.triggerHandler( 'send' );
						
					}
					else{
						$.get(
							action,
							function( data ){
								action = undefined;
								var res = JSON.parse( data );
								popup.triggerHandler( 'open', [ res.status, res.msg ] );
								// console.log( res );
								
							}
						);
						
					}
					
				});
				
				input.on( 'change', function( e ){
					var action = undefined;
					
				} );
				
			})
			( $( '#home > .newsletter > form' ), $( '#home > .newsletter > form > .button' ), $( '#home > .newsletter > form > .mail' ), $( '#popup' ) );
			
		},
		
	}
	
	$(function(){
		root.launcher();
	});
	
})();