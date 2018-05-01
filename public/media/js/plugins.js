// JavaScript Document

	//-- FancyBox --
      $(document).ready(function() {
        $(".fancy").fancybox();
        $(".various").fancybox({
          maxWidth  : 1280,
          maxHeight : 800,
          fitToView : false,
          width   	: '100%',
          height    : '100%',
          autoSize  : false,
          closeClick  : false,
          openEffect  : 'elastic',
          closeEffect : 'none'
        });
      });

	//-- Required --

	//<!--BANNER-->
	window.jQuery || document.write("<script src='lib/js/jquery.min.js'>\x3C/script>")
	$(function(){
	$('#maximage').maximage({
		cycleOptions: {
		fx: 'fade',
		speed: 3000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
		timeout: 4000,
		prev: '#arrow_left',
		next: '#arrow_right',
		pause: 1,
		after: function(last,current){
			if(!$.browser.msie){
			if($(last).find('video').length > 0) $(last).find('video')[0].pause();
			if($(current).find('video').length > 0) $(current).find('video')[0].play();
							}
						}
			},
			onFirstImageLoaded: function(){
			jQuery('#cycle-loader').hide();
			jQuery('#maximage').fadeIn('slow');
		},
		debug:true
	});
				// Helper function to Fill and Center the HTML5 Video
	jQuery('.html5video').maximage('maxcover');
				// To show it is dynamic html text
	jQuery('.in-slide-content').delay(3000).fadeIn();
	});
  
	//--Scrolling Horizontal-->
	$(document).ready(function() {  
		$('a.link3').click(function () {  
			$('#wrapper3').scrollTo($(this).attr('href'), 1000);
			return false;  
		});
		$('a.flecha').click(function () {  
			$('#wrapper3').scrollTo($(this).attr('href'), 1000);
			return false;  
		});  
	});
	
    //--======   SCRIPT GOOGLE MAP  ====-->
      function inicializar_mapa() {
        var mapOptions = {
          center: new google.maps.LatLng(-12.114172, -76.968643),
          zoom: 17,
		  scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);

        var pos = new google.maps.LatLng(-12.114172, -76.968643); //-12.114150, -76.968636

        var marker = new google.maps.Marker({
            position: pos,
            map: map,
            title:"VPI media",
			icon: 'http://www.vpi-media.com/img/vpi-google.map.ico',
            animation: google.maps.Animation.DROP
        }); 

	}

	//--///// PORTAFOLIO /////-->
	$(function () {
		var filterList = {
			init: function () {
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
			targetSelector: '.portfolio',
			filterSelector: '.filter',
					//effects: ['fade'],
					//effects: ['rotateX'],
			effects: ['scale'],
					//effects: ['rotateY'],
					//effects: ['blur'],
					//effects: ['rotateZ'],
			easing: 'snap',
					// call the hover effect
					
			onMixEnd: filterList.hoverEffect()
		});				
	},
	hoverEffect: function () {
	// Simple parallax effect
	$('#portfoliolist .portfolio').hover(
	function () {
		$(this).find('.label').stop().animate({bottom: 0}, 400, 'easeOutQuad');
		$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
		},
		function () {
		$(this).find('.label').stop().animate({bottom: -150}, 450, 'easeInQuad');
		$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			}
		};
		// Run the show!
		filterList.init();
	});	

	/////////////////  MENU RESPONSIVE   ////////////////
	function confirmar(){
		if(confirm('Deseas ir al enlace..!')){
            	return true;
		}
	}
		
	//-- //// PESTAÑAS ANIMADAS //// -->
	  $(function() {
		$( "#tabs3" ).tabs();
	  });
	  $(function() {
		$( "#service2" ).tabs();
	  });
	  $(function() {
		$( "#nosotros" ).tabs();
	  });

  	//--BOTONES ANIMADOS
	$(window).load(function(){
		$('.customers').click(function (e) {
			$('#clientes .ui-tabs-panel').addClass('animated flip')
				.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			});
		});
		$('.ancla').click(function (e) {
			$('#tabs_container').addClass('animated zoomIn')
				.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			});
		});
		$('.botones a').click(function (e) {
			$('#nosotros .ui-tabs-panel').addClass('animated slideInLeft')
				.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			});
		});
		$('.botones2 a').click(function (e) {
			$('#tabs_container .cont_service').addClass('animated slideInRight')
				.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			});
		});
	});
    
  	//--ANCLAS VERTICALES-->
    /*$(document).ready(function(){
      //nos desplazamos entre todos los divs
      $('.ancla').on('click touchstart', function(e){
      e.preventDefault();
        enlace  = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(enlace).offset().top // - 125 añadimos - 125px al target
        }, 1500);
      });
    });*/
	
	$(document).ready(function(){
      //nos desplazamos entre todos los divs
      $('.ancla').click(function(e){
      e.preventDefault();
        enlace  = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(enlace).offset().top // - 125 añadimos - 125px al target
        }, 1500);
      });
    });

   // PLAYER / JavaScript API 
	function pauseAll() {
		$('iframe[src*="vimeo.com"]').each(function () {
			$f(this).api('pause');
		});
	}
	// ]]>
  ///////////////  EFECTO PARPADEO //////////////
    (function() {
    setInterval(function(){
      var el = document.getElementById('blink');
      if(el.className == 'luz'){
          el.className = 'luz on';
      	}else{
          el.className = 'luz';
		  }
		},700);
    })();
