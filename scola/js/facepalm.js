(function(){
	var root = {};
	root.launcher = function(){
		if( typeof root.page.default === 'function' ) root.page.default();
		var path = window.location.pathname.match(new RegExp('^' + root.bazar.basePath + '(.*)$','i'))[1];
		
		if(path == '/'){		// czy strona główna?
			if( typeof root.page.index === 'function' ) root.page.index();
			
		}
		else{		//podstrona
			// var subpage = path.match(/([\w\-]+)\/$/)[1];
			var subpage = path.match(/^\/([\w\-]+)\//)[1];
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
					if( typeof $(this).attr( 'slide-to' ) !== 'string' ) return false;
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
			
			/* popup */
			(function( popup, box, close, header, content ){
				var lock = false;
				
				popup
				.on({
					open: function( e, status, title, text ){
						if( lock ) return false;
						lock = true;
						new TimelineLite({
							onStart: function(){
								popup
								.removeClass( 'ok info fail' )
								.addClass( 'open ' + status );
								
								header.html( title );
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
			( $( '#popup' ), 
			$( '#popup > .box' ), 
			$( '#popup > .box > .close' ), 
			$( '#popup > .box > .view .text > .title' ), 
			$( '#popup > .box > .view .text > .content' ) );
			
			/* customSelect */
			(function( custom, option ){
				custom
				.on({
					set: function( e, value ){
						$(this)
						.find( '.head > .title' )
						.text( $(this).attr( 'item-title' ) + ": " + value );
						
						$(this).attr( 'item-value', value );
						
					},
					reset: function( e ){
						$(this)
						.find( '.head > .title' )
						.text( $(this).attr( 'item-title' ) + " *" );
						
						$(this).attr( 'item-value', '' );
						
					},
					get: function( e ){
						return {
							name: $(this).attr( 'item-name' ),
							value: $(this).attr( 'item-value' ),
						};
						
					},
					
				});
				
				option.click(function( e ){
					$(this).parents( '.customSelect:first' ).triggerHandler( 'set', [ $(this).text() ] );
					
				});
				
			})
			( $( '.customSelect' ), 
			$( '.customSelect > .options > .option' ) );
			
			/* customFile */
			(function( custom ){
				custom.on({
					get: function( e ){
						var input = $(this).find( 'input:file' );
						if( input.prop( 'files' ).length > 1 ){
							var ret = [];
							$.each( input.prop( 'files' ), function( k, item ){
								ret.push( {
									name: input.attr( 'name' ) + "[]",
									value: item,
									
								} );
								
							} );
							
							return ret;
							
						}
						else{
							return {
								name: input.attr( 'name' ),
								value: input.prop( 'files' )[0],
								
							}
							
						}
						
					},
					reset: function( e ){
						var title = $(this).attr( 'item-title' );
						$(this).find( '.head > .title' ).text( title );
						
					},
					
				});
				
				custom
				.find( '.head' )
				.click(function( e ){
					$(this).siblings( 'input:file' ).click();
					
				});
				
			})
			( $( '.customFile' ) );
			
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
								
								console.log( data );
								var res = JSON.parse( data );
								if( typeof res.action !== "undefined" ){
									action = res.action;
									
								}
								popup.triggerHandler( 'open', [ res.status, 'Newsletter', res.msg ] );
								console.log( res );
								
							}
						);
						
					},
					
				});
				
				btn.click(function(){
					console.log( action );
					
					if( typeof action === "undefined" ){
						newsletter.triggerHandler( 'send' );
						
					}
					else{
						$.get(
							action,
							function( data ){
								action = undefined;
								var res = JSON.parse( data );
								popup.triggerHandler( 'open', [ res.status, 'Newsletter', res.msg ] );
								console.log( res );
								
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
		testy: function(){
			var addon = root.addon;
			var logger = addon.isLogger();
			
			if(logger) console.log('page.testy()');
			
			/* slider - pytania i formularz końcowy */
			(function( popup, slider, view, slides, input, label, nav, number, summary, correct, percent, note, buttons ){
				var current = 0;
				var max = 0;
				var lock = false;
				
				slider
				.on({
					set: function(){
						if( current < 0 ) current = 0;
						if( current > max ) current = max;
						if( current > slides.length - 1 ){
							current = slides.length - 1;
							
						}
						else{
							TweenLite.to(
								nav.filter( '.next' ).children( '.text' ),
								0.5,
								{
									text:{
										value: "następne",
										delimiter: "",
									},
									
								}
							);
							
						}
						
						// console.log( [ current, max, slides.length ] );
						
						if( slides.length === max && current + 1 === slides.length ){
							TweenLite.to(
								nav.filter( '.next' ).children( '.text' ),
								0.5,
								{
									text:{
										value: "zakończ test",
										delimiter: "",
									},
									
								}
							);
							
							// if( !slider.hasClass( 'show' ) ) slider.triggerHandler( 'end' );
							nav.filter( '.next' ).addClass( 'end');
							
						}
						
						
						new TimelineLite({
							onStart: function(){
								number
								.text( String( current + 1 ) );
								
							},
							onComplete: function(){
								lock = false;
							},
							
						})
						.add( 'start', 0 )
						.add(
							TweenLite.to(
								view,
								.5,
								{
									scrollLeft: function(){
										return slides.first().outerWidth( true ) * current;
									},
									ease: Power2.easeOut,
								}
							), 'start'
						);
						
					},
					next: function(){
						if( lock ) return false;
						lock = true;
						current++;
						slider.triggerHandler( 'set' );
						
					},
					prev: function(){
						if( lock ) return false;
						lock = true;
						current--;
						slider.triggerHandler( 'set' );
						
					},
					end: function(){
						var all = slides.length;
						var good = input.filter( ".correct:checked" ).length;
						var procent = Math.round( ( good / all ) * 1000 ) / 10;
						var i;
						
						correct.text( good );
						percent.text( String( procent ) + "%" );
						
						slider.slideUp();
						summary.slideDown();
						
						if( typeof progi === 'undefined' ){
							progi = [
								{
									value: 0,
									name: 'nieznany',
									
								},
								
							];
							
						}
						
						for( i = progi.length - 1; i >= 0; i-- ){
							if( procent >= progi[ i ].value ) break;
							
						}
						
						note.text( progi[ i ].name );
						
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
				
				nav.click(function( e ){
					if( $(this).hasClass( 'next' ) ){
						if( $(this).hasClass( 'end' ) ){
							slider.triggerHandler( 'end' );
							
						}
						else{
							slider.triggerHandler( 'next' );
							
						}
						
					}
					else if( $(this).hasClass( 'prev' ) ){
						$(this).siblings( '.next' ).removeClass( 'end' );
						slider.triggerHandler( 'prev' );
						
					}
					
				});
				
				label.click(function( e ){
					if( slider.hasClass( 'show' ) ){
						e.preventDefault();
						
					}
					else{
						var self = $(this);
						
						TweenLite.to(
							self.parents( '.item:first' ).find( '.title > .hole' ),
							.3,
							{
								text:{
									value: self.children( '.text' ).text(),
									delimiter: "",
									
								},
								
							}
						);
						
					}
					
				});
				
				input.change(function( e ){
					max = input.filter( ':checked' ).length;
					// console.log( [ current, max, slides.length ] );
					
					if( max === slides.length && current === max - 1 ){
						nav.filter( '.next' ).addClass( 'end' );
						TweenLite.to(
							nav.filter( '.next' ).children( '.text' ),
							0.5,
							{
								text:{
									value: "zakończ test",
									delimiter: "",
								},
								
							}
						);
						
					}
					
				});
				
				buttons.click(function( e ){
					var self = $(this);
					
					if( $(this).hasClass( 'show' ) ){
						slider
						.addClass( 'show' )
						.slideDown();
						
						// self.fadeOut();
						
					}
					else if( $(this).hasClass( 'send' ) ){
						var all = slides.length;
						var good = input.filter( ".correct:checked" ).length;
						var procent = Math.round( ( good / all ) * 1000 ) / 10;
						
						for( i = progi.length - 1; i >= 0; i-- ){
							if( procent >= progi[ i ].value ) break;
							
						}
						
						var level = progi[ i ].name;
						
						$.post(
							root.bazar.basePath + '/test-koniec',
							{
								good: input.filter( '.correct:checked' ).length,
								all: slides.length,
								level: level,
								
							},
							function( data ){
								console.log( data );
								var res = JSON.parse( data );
								console.log( res );
								
								popup.triggerHandler( 'open', [ res.status, res.title, res.msg ] );
								
								if( res.status === 'ok' ){
									self.fadeOut();
									
								}
								
							}
						);
						
					}
					
				});
				
			})
			( $( '#popup' ), 
			 $( '#test > .pytania' ), 
			$( '#test > .pytania > .box > .view' ), 
			$( '#test > .pytania > .box > .view > .item' ),
			$( '#test > .pytania > .box > .view > .item > .anwser > input' ),
			$( '#test > .pytania > .box > .view > .item > .anwser > label' ),
			$( '#test > .pytania > .box > .pagin > .nav' ),
			$( '#test > .pytania > .box > .pagin > .current > .number' ),
			$( '#test > .summary' ),
			$( '#test > .summary .stat .correct' ),
			$( '#test > .summary .stat .percent' ),
			$( '#test > .summary .note > .value' ),
			$( '#test > .summary .buttons > .customButton' ) );
			
			/* formularz wstępny */
			(function( popup, form, send ){
				form
				.on({
					test: function(){
						$.post(
							root.bazar.basePath + '/test-start',
							form.serializeArray(),
							function( data ){
								console.log( data );
								var res = JSON.parse( data );
								console.log( res );
								
								popup.triggerHandler( 'open', [ res.status, res.title, res.msg ] );
								
								if( res.status === 'ok' ){
									window.setTimeout(function(){
										form.trigger( 'submit' );
										
									}, 3000);
									
								}
								
							}
						);
						
					},
					
				});
				
				send.click(function( e ){
					form.triggerHandler( 'test' );
					
				});
				
			})
			( $( '#popup' ), 
			$( '#test > .mid > .box > form' ), 
			$( '#test > .mid > .box > form > .submit' ) );
			
		},
		kontakt: function(){
			var addon = root.addon;
			var logger = addon.isLogger();
			
			if(logger) console.log('page.kontakt()');
			
			/* mapa */
			(function( mapa ){
				var point = {
					lat: 49.618514,
					lng: 20.694836,
					
				};
				var tout;
				
				mapa.gmap3({
					map:{
						options:{
							center: point,
							zoom: 18,
							mapTypeId: google.maps.MapTypeId.MAP,
							gestureHandling: 'cooperative',
							mapTypeControl: false,
							
						}
					},
					marker:{
						latLng: point,
						options: {
							icon: root.bazar.basePath + '/wp-content/themes/scola/img/pin_scola.png',
							
						},
						
					},
					
				});
				
				var mymap = mapa.gmap3( 'get' );
				
				$( window ).resize(function( e ){
					window.clearTimeout( tout );
					tout = window.setTimeout(function(){
						mymap.panTo( point );
						
					}, 500);
					
				});
				
			})
			( $( '#kontakt > .mapa > .kontener' ) );
			
			/* formularz kontaktowy */
			(function( popup, form, send ){
				form
				.on({
					test: function(){
						$.post(
							root.bazar.basePath + '/form-kontakt',
							form.serializeArray(),
							function( data ){
								console.log( data );
								var resp = JSON.parse( data );
								console.log( resp );
								
								if( resp.status === 'ok' ){
									form.trigger( 'reset' );
									
								}
								
								popup.triggerHandler( 'open', [ resp.status, resp.title, resp.msg ] );
								
							}
						);
						
					},
					
				});
				
				send.click(function( e ){
					form.trigger( 'test' );
					
				});
				
			})
			( $( '#popup' ), 
			$( '#kontakt form' ), 
			$( '#kontakt form > .button.send' ) );
			
		},
		nasze_centrum: function(){
			var addon = root.addon;
			var logger = addon.isLogger();
			
			if(logger) console.log('page.nasze_centrum()');
			
			var subPage = window.location.pathname.match( /nasze-centrum\/([^\/]+)/ );
			if( subPage === null ){
				if(logger) console.log('page.nasze_centrum()');
				
			}
			else{
				var fn = {
					tlumaczenia: function(){
						var addon = root.addon;
						var logger = addon.isLogger();
						
						if(logger) console.log('page.tlumaczenia()');
						
						/* formularz */
						(function( popup, form, buttons, loader ){
							var sendFile = false;
							var url = root.bazar.basePath + '/form-tlumaczenia';
							
							loader.hide();
							
							loader
							.on({
								set: function( e, procent ){
									var config = {
										duration: .3,
										
									};
									$(this).find( '.title' ).text( Math.round( procent * 1000 ) / 10 );
									
									new TimelineLite()
									.add( 'start' )
									.add( TweenLite.to(
										$(this).find( '.progress > .bar' ),
										config.duration,
										{
											scaleX: parseFloat( procent ),
										}
									), 'start' );
									
								},
								reset: function( e ){
									$(this).find( '.title' ).text( '' );
									
									TweenLite.set(
										$(this).find( '.progress > .bar' ),
										{
											scaleX: 0,
										}
									);
									
								},
								
							});
							
							form
							.on({
								send: function( e ){
									var token = 'token' + new Date().getTime();
									var myData = $(this).triggerHandler( 'getData' );
									myData.append( 'token', token );
									
									/* for( var item of myData.entries() ){
										console.log( item );
										
									} */
									
									// przesyłanie tekstu
									$.ajax({
										method: 'post',
										url: sendFile === true?( url + '?save' ):( url ),
										data: myData,
										contentType: false,
										processData: false,
										success: function( data, status ){
											var resp;
											try{
												resp = JSON.parse( data );
												console.log( resp );
												
											}
											catch( err ){
												console.error( err );
												console.log( data );
											}
											
											// przesyłanie załączników
											if( sendFile === true ){
												
												// sprawdzanie wyniku walidacji
												if( resp.status === 'ok' ){
													form.triggerHandler( 'sendFile', [ token ] );
													
												}
												else{
													popup.triggerHandler( 'open', [ resp.status, resp.title, resp.msg ] );
													
												}
												
											}
											else{
												popup.triggerHandler( 'open', [ resp.status, resp.title, resp.msg ] );
												
												if( resp.status === 'ok' ){
													form.triggerHandler( 'clear' );
													
												}
												
											}
											
										},
										error: function(){
											popup.triggerHandler( 'open', [ 'fail', 'Błąd sieci', 'Nie udało się nawiązać połączenia z serwerem.<br>Proszę spróbować ponownie za chwilę.' ] );
											
										},
										
									});
									
								},
								sendFile: function( e, token ){
									var filesData = new FormData();
									
									form.find( '.customFile' ).each(function(){
										var files = $(this).triggerHandler( 'get' );
										// pojedynczy plik
										if( typeof files.length === 'undefined' ){
											filesData.append( files.name, files.value );
											
										}
										else{
											$.each( files, function( name, value ){
												filesData.append( name, value );
												
											} );
											
										}
										
									});
									
									filesData.append( 'token', token );
									
									/* for( var item of filesData.entries() ){
										console.log( item );
										
									} */
									
									$.ajax({
										method: 'post',
										url: url + '?load',
										data: filesData,
										contentType: false,
										processData: false,
										xhr: function(){
											var xhr = new window.XMLHttpRequest();
											
											xhr.addEventListener( 'loadstart', function( e ){
												loader.triggerHandler( 'reset' );
												
												loader.slideDown();
												buttons.slideUp();
												
											});
											
											xhr.upload.addEventListener( 'progress', function( e ){
												var progress = e.loaded / e.total;
												
												loader.triggerHandler( 'set', progress );
												
											});
											
											xhr.upload.addEventListener( 'loadend', function( e ){
												window.setTimeout(function(){
													loader.slideUp();
													loader.triggerHandler( 'reset' );
													buttons.slideDown();
													
												}, 1000);
												
											});
											
											return xhr;
										},
										success: function( data, fstatus ){
											try{
												resp = JSON.parse( data );
												console.log( resp );
												
												popup.triggerHandler( 'open', [ resp.status, resp.title, resp.msg ] );
												
												if( resp.status === 'ok' ){
													form.triggerHandler( 'clear' );
													
												}
												
											}
											catch( err ){
												console.error( err );
												console.log( data );
											}
											
										},
										error: function(){
											popup.triggerHandler( 'open', [ 'fail', 'Błąd sieci', 'Nie udało się nawiązać połączenia z serwerem.<br>Proszę spróbować ponownie za chwilę.' ] );
											
										},
										
									});
									
								},
								getData: function( e ){
									var ret = new FormData();
									$.each( form.serializeArray(), function( k, item ){
										ret.append( item.name, item.value );
										
									} );
									
									var item;
									
									$( '.customSelect' ).each(function(){
										item = $(this).triggerHandler( 'get' );
										ret.append( item.name, item.value );
										
									});
									
									return ret;
									
								},
								clear: function( e ){
									$( '.customSelect, .customFile' ).each(function(){
										$(this).triggerHandler( 'reset' );
										
									});
									
									form.trigger( 'reset' );
									
								},
								
							});
							
							buttons.click(function( e ){
								if( $(this).hasClass( 'send' ) ){
									form.triggerHandler( 'send' );
									
								}
								else if( $(this).hasClass( 'reset' ) ){
									form.triggerHandler( 'clear' );
									
								}
								
							});
							
							form.find( 'input:file' ).change(function( e ){
								var files = $(this).prop( 'files' );
								var title = $(this).parents( '.customFile:first' ).attr( 'item-title' );
								
								if( files.length > 0 ){
									sendFile = true;
									var t  = [];
									$.each( files, function( k, file ){
										t.push( file.name );
										
									} );
									
									title = t.join( ', ' );
								}
								else{
									sendFile = false;
									
								}
								
								$(this).parents( '.customFile:first' ).find( '.head > .title' ).text( title );
								
							});
							
							loader.triggerHandler( 'reset' );
							
						})
						( $( '#popup' ), 
						$( '#tlumaczenia > .bot form' ), 
						$( '#tlumaczenia > .bot form > .buttons > .button' ), 
						$( '#tlumaczenia > .bot form > .loader' ) );
						
					},
					kursy: function(){
						if(logger) console.log('page.kursy()');
						
						/* slider */
						(function( slider, view, slides, info, info_title, info_link, nav ){
							var current = 0;
							var lock = false;
							var itrv;
							var tout;
							var config = {
								duration: .5,
								delay: 2.5,
								
							};
							
							slider
							.on({
								set: function( e ){
									if( current < 0 ) current = slides.length - 1;
									current %= slides.length;
									
									new TimelineLite({
										onComplete: function(){
											info_link.attr( 'href', slides.eq( current ).attr( 'item-url' ) );
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
													return slides.first().outerWidth() * current;
													
												},
												
											}
										), 'start'
									)
									.add(
										TweenLite.to(
											info_title,
											config.duration,
											{
												text: function(){
													return slides.eq( current ).attr( 'item-title' );
													
												},
												
											}
										), 'start'
									);
									
									
								},
								next: function( e ){
									if( !lock ){
										lock = true;
										current++;
										slider.triggerHandler( 'set' );
										
									}
									
								},
								prev: function( e ){
									if( !lock ){
										lock = true;
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
										
									}, config.delay * 1000);
									
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
							
							$( window ).resize(function( e ){
								window.clearTimeout( tout );
								tout = window.setTimeout(function(){
									slider.triggerHandler( 'set' );
									
								}, 200);
								
							});
							
							slider.triggerHandler( 'start' );
							
						})
						( $( '#kursy > .top > .slider' ), 
						$( '#kursy > .top > .slider > .view' ), 
						$( '#kursy > .top > .slider > .view > .slide' ), 
						$( '#kursy > .top > .slider > .info' ), 
						$( '#kursy > .top > .slider > .info > .title' ), 
						$( '#kursy > .top > .slider > .info > .link' ), 
						$( '#kursy > .top > .slider > .info > .nav > .button' ) );
						
					},
					
				};
				
				var fn_name = subPage[1].replace( /\-/g, '_' );
				if( typeof fn[ fn_name ] === 'function' ) fn[ fn_name ]();
				
			}
			
		},
		
	};
	
	$(function(){
		root.launcher();
	});
	
})();