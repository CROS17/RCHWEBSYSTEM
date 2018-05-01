{{-- 
@extends('layouts.app') 
 @section('content')  --}}
<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>RCH MEDIA</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
       
        <link href="{{ asset('owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('owl-carousel/owl.theme.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
        <script src="{{ asset('js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
        <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 {{--        <script src="{{ asset('js/main.js') }}"></script> --}}
        <script src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>

            <!-- =================== media ================================ -->
      <link rel="stylesheet" href="{{ asset('media/css/main1.css') }}"> 
    <link rel="stylesheet" href="{{ asset('media/css/main.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ultra">
    <link rel="stylesheet" href="{{ asset('media/css/responsive.css') }}">
    <script src="{{ asset('media/js/jquery-1.8.min.js')}}"></script>
        <!--FANCYBOX-->
    <link rel="stylesheet" href="{{ asset('media/css/fancybox/jquery.fancybox.css') }}">
    <script src="{{ asset('media/js/fancybox/jquery.fancybox.js')}}"></script>
    <!--BANNER-->
    <link rel="stylesheet" href="{{ asset('media/css/slider/jquery.maximage.css?v=1.2') }}" media="screen">
    <script src="{{ asset('media/js/slider/jquery.cycle.all.js') }}"></script>
    <script src="{{ asset('media/js/slider/jquery.maximage.js') }}"></script>

    <!--Scrolling Horizontal-->
    <script src="{{ asset('media/js/jquery.scrollTo-1.4.2-min.js') }}"></script>

    <!--///// PORTAFOLIO /////-->
    <link rel="stylesheet" href="{{ asset('media/css/mixitup/layout.css') }}">
    <script src="{{ asset('media/js/mixitup/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('media/js/mixitup/jquery.mixitup.min.js') }}"></script>

    <!-- //// PESTAÑAS ANIMADAS //// -->
    <script src="{{ asset('media/js/jquery-ui.js') }}"></script>

    <!-- PLAYER / JavaScript API-->
    <script src="{{ asset('media/js/froogaloop2.min.js') }}"></script>

    <!--SCROLLING HORIZONTAL-->
    <link rel="stylesheet" href="{{ asset('media/css/animate.min.css') }}">
    <script src="{{ asset('media/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

    <!--LAZY-LOAD-->
    <link rel="stylesheet" href="{{ asset('media/css/jquery.lazyloadxt.fadein.css') }}">
    <script src="{{ asset('media/js/jquery.lazyloadxt.js') }}"></script>

 <!--===================================================================================================-->
</head>
    <style type="text/css">
        h1 {font-size: 45px; font-family: arial;}
    </style>

<body>  

 <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                   {{--          <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                           <li><a href="{{ route('home')}}">Admin</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<!--===================================================================================================-->
     <div id="carousel-header" class="carousel slide" data-ride="carousel" data-interval="8000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="{{ asset('img/img3.jpg') }}" alt="">
                </div>

                <div class="item">
                    <img src="{{ asset('img/slide2.jpg') }}" alt="">
                </div>

                <div class="item">
                    <img src="{{ asset('img/img4.jpg') }}" alt="">
                </div>

                <div class="item">
                    <img src="{{ asset('img/slide1.jpg') }}" alt="">
                </div>

                <div class="item">
                    <img src="{{ asset('img/img5.jpg') }}" alt="">
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-header" role="button" data-slide="next">
                <img src="{{ asset('img/left.png') }}" alt="Previous">
            </a>
            <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
                <img src="{{ asset('img/right.png') }}" alt="Next">
            </a>
        </div>
 <!--===================================================================================================-->        
            <!--///// NOSOTROS /////-->
      <div id="nosotros" page="1" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        
          <ul class="botones ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="-1" aria-controls="tabs-1" aria-labelledby="ui-id-9" aria-selected="false" aria-expanded="false"><a class="wow zoomIn ui-tabs-anchor" href="#tabs-1" title="NUESTRA MISIÓN"role="presentation" tabindex="-1" id="ui-id-9" style="visibility: visible; animation-duration: 2s; animation-delay: 300ms; animation-name: zoomIn;">NOSOTROS</a></li>
       
            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-10" aria-selected="false" aria-expanded="false"><a class="wow zoomIn ui-tabs-anchor" href="#tabs-2" title="NUESTRA MISIÓN" role="presentation" tabindex="-1" id="ui-id-10" style="visibility: visible; animation-duration: 2s; animation-delay: 300ms; animation-name: zoomIn;">NUESTRA MISIÓN</a></li>
            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-11" aria-selected="false" aria-expanded="false"><a class="wow zoomIn ui-tabs-anchor" href="#tabs-3" title="NUESTRA VISIÓN" tabindex="-1" id="ui-id-11" style="visibility: visible; animation-duration: 2s; animation-delay: 300ms; animation-name: zoomIn;">NUESTRA VISIÓN</a></li>
          </ul>
          <br clear="all">
          

          <!---->
          <div id="tabs_container" class="animated zoomIn">
            <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom animated slideInLeft"  aria-labelledby="ui-id-9" role="tabpanel" aria-hidden="true" >
              <h2 itemprop="articleSection">ACERCA DE<br>
                <strong>RCH media</strong></h2>
              <p> <span itemprop="description"><strong>RCH media</strong>, nace con el propósito de poner a su alcance soluciones y herramientas que le permitan potenciar <br>el desarrollo de su empresa, producto o servicio, utilizando estrategias de marketing efectivas, para su empresa o negocio.<br> Nuestro objetivo es establecer relaciones de trabajo duraderas y significativas con nuestros clientes,<br> servirlo de la manera más eficaz y satisfacer sus necesidades de comunicación</span> </p>
            </div>
            <div id="tabs-2" aria-labelledby="ui-id-10" class="ui-tabs-panel ui-widget-content ui-corner-bottom animated slideInLeft" role="tabpanel" aria-hidden="true" style="display: none;">
              <h2 itemprop="articleSection">NUESTRA<br>
                <strong>MISIÓN</strong></h2>
              <p> <span itemprop="description">Somos una productora familiar que usa una adecuada
                                tecnologia <br> audiovisual para brindar un servicio de calidad 
                                y a un precio competitivo.</span> </p>
            </div>
            <div id="tabs-3" aria-labelledby="ui-id-11" class="ui-tabs-panel ui-widget-content ui-corner-bottom animated slideInLeft" role="tabpanel" aria-hidden="true" style="display: none;">
              <h2 itemprop="articleSection">NUESTRA<br>
                <strong>VISIÓN</strong></h2>
              <p> <span itemprop="description">En <strong>RCH media</strong> Nuestros clientes 
                disfrutan de material audiovisual de calidad a un precio accesible..</span> </p>
            </div>
          </div>
        <!--End tabs--> 
      </div>
      <!--End tabs container--> 
          <script>
      $('.botones li .us1').attr({'class':'wow slideInRight','data-wow-delay':'150ms'});
      $('.botones li .us').attr({'class':'wow zoomIn','data-wow-delay':'300ms','data-wow-duration':'2s'});
      $( "#nosotros" ).tabs();
    </script>
<!--===================================================================================================-->
  <!--///// SERVICIOS /////-->
      <div id="servicios"><a id="services"></a>
        <h2>SERVICIOS</h2>
<div class="service_descrip">
  <h3>“Creemos que dar un buen servicio es la mejor forma de
    decir que somos buenos en lo que hacemos”</h3>
  <div class="clear"></div>
</div>
<!--BLOQUE 1-->
<div id="wrapper3">
  <ul id="mask">
    <li id="box0" class="box">
      <div class="contenido">
        <ul class="botones3">
          <li> <a id="post" href="#box1" class="link3">
            <img src="{{asset('media/img/postproduccion.png')}}" alt="REALIZACIÓN POST-PRODUCCIÓN">
            <span></span>
            <p>REALIZACIÓN<strong>POST-PRODUCCIÓN</strong></p>
            </a> </li>
          <li> <a href="#box2" class="link3"> <img src="{{asset('media/img/diseñoweb.png')}}" alt="DISEÑO WEB MÓVIL"><span></span>
            <p>DISEÑO WEB<strong>MÓVIL</strong></p>
            </a> </li>
          <li> <a href="#box3" class="link3"> <img src="{{asset('media/img/diseñografico.png')}}" alt="DISEÑO GRÁFICO</strong>"><span></span>
            <p>DISEÑO<strong>GRÁFICO</strong></p>
            </a> </li>
          </ul>
          <div class="borrar"></div>
          <ul class="botones3">
  {{--         <li> <a href="#box4" class="link3"> <img src="{{asset('media/img/socialmedia.png')}}" alt="SOCIAL MEDIA MANAGEMENT"><span></span>
            <p>SOCIAL MEDIA<strong>MANAGEMENT</strong></p>
            </a> </li> --}}
          <li> <a href="#box5" class="link3"> <img src="{{asset('media/img/multimedia.png')}}" alt="ANIMACIÓN MULTIMEDIA"><span></span>
            <p>ANIMACIÓN<strong>MULTIMEDIA</strong></p>
            </a> </li>
          <li> <a href="#box6" class="link3"> <img src="{{asset('media/img/software.png')}}" alt="MANTENIMIENTO DE CPU"><span></span>
            <p>MANTENIMIENTO<strong>DE CPU</strong></p>
            </a> </li>
        </ul>
        <script>
      $('#mask li a').attr({'class':'wow zoomInLeft link3','data-wow-delay':'300ms'});
      $('#servicios h2').attr({'class':'wow fadeInRight','data-wow-delay':'300ms'});
      //$('#servicios img').addClass('lazy');
      $('#servicios .service_descrip').attr({'class':'service_descrip wow zoomInRight','data-wow-delay':'300ms'});
    </script> 
      </div>
    </li>
    <li id="box1" class="box">
      <div class="contenido"><img src="{{asset('media/img/servicios_.png')}}" alt="REALIZACIÓN Y POST-PRODUCCIÓN">
        <div class="texto">
          <h1>REALIZACIÓN Y POST-PRODUCCIÓN</h1>
<p><span itemprop="description"><strong>RCH media</strong> realiza todo tipo de Videos Institucionales, Promocionales, Documentales, Docuficción, Spots de TV, Cortometrajes y videos con propuesta, según sea el requerimiento. Es así que contamos con equipos para grabación en alta definición FULL HD y SD, así como islas de edición no lineales y el personal profesional con amplia experiencia en el campo de las comunicaciones, desarrollando productos del más exigente nivel.<br><br>Podemos decir que el diferencial está en que nosotros mismos somos los que producimos, dirigimos y editamos los videos, teniendo como resultado final, un producto de calidad.</span></p>
        </div>
        <a href="#box0" class="flecha"><img class="volver" src="{{asset('media/img/flecha.png')}}" alt=""></a> </div>
    </li>
    <li id="box3" class="box">
      <div class="contenido" >
        <img src="{{asset('media/img/servicios_1.png')}}" alt="DISEÑO GRÁFICO">
        <div class="texto">
          <h1>DISEÑO GRÁFICO</h1>
<p><span itemprop="description">Debido al crecimiento veloz y masivo en el intercambio de información, la demanda de Diseño Gráfico Publicitario se ha incrementado a causa del desarrollo de nuevas tecnologías y de la necesidad de transmitir mensajes visuales con alta dosis de creatividad a determinados grupos sociales.<br><br><strong>RCH media</strong> cuenta con un equipo de trabajo que gracias a su experiencia, creatividad y pasión por el diseño, logran plasmar ideas impactantes que lleguen directamente a los consumidores, traduciéndose así, en un éxito para su empresa. </span></p>
        </div>
        <a href="#box0" class="flecha"><img class="volver" src="{{asset('media/img/flecha.png')}}" alt=""></a> </div>
    </li>
    <li id="box2" class="box">
      <div class="contenido"><img src="{{asset('media/img/servicios_2.png')}}" alt="DISEÑO WEB – MÓVIL">
        <div class="texto">
          <h1>DISEÑO WEB – MÓVIL</h1>
<p><span itemprop="description">Publicar un sitio web le permite dar a conocer su empresa a millones de usuarios alrededor del mundo. En <strong>RCH media</strong> le entregamos un producto de calidad, altamente creativo, moderno y funcional, asesorándolo durante el desarrollo de su Sitio Web o Portal. Realizamos sitios webs o portales animados totalmente compatibles con smartphones o tablets, logrando con ello que su sitio web pueda ser visto desde cualquier dispositivo móvil.</span></p>
        </div>
        <a href="#box0" class="flecha"><img class="volver" src="{{asset('media/img/flecha.png')}}" alt=""></a> </div>
    </li>
{{--     <li id="box4" class="box">
      <div class="contenido"><img src="{{asset('media/img/servicios_3.png')}}" alt="SOCIAL MEDIA MANAGEMENT">
        <div class="texto">
           <h1>SOCIAL MEDIA MANAGEMENT</h1>
<p> <span itemprop="description">El uso de las redes sociales es un gran avance tecnológico para la comunicación y el marketing de empresas y proveedores de servicios. Por eso, es recomendable sacar provecho y ventaja de esta nueva manera de llegar de forma sutil, divertida, completa y llamativa a cada uno de los potenciales clientes futuros, seguidores y adictos a la red. <br><br>En <strong>RCH media</strong> desarrollamos estrategias orientadas a la interacción entre su marca y su público objetivo en redes sociales y microblogging, generando una comunicación directa con sus clientes, fortaleciendo el posicionamiento de su marca y logrando que las redes sociales no solo sean un medio informativo de los productos que brinda, sino, además, un canal de atención al cliente. </span> </p>
        </div>
        <a href="#box0" class="flecha"><img class="volver" src="{{asset('media/img/flecha.png')}}" alt=""></a> </div>
    </li> --}}
    <li id="box5" class="box">
      <div class="contenido"><img src="{{asset('media/img/servicios_4.png')}}" alt="MULTIMEDIA">
        <div class="texto">
          <h1>MULTIMEDIA</h1>
<p><span itemprop="description">El diseño multimedia ofrece un mayor dinamismo, logrando presentaciones mucho más personalizadas y específicas. Su contenido puede ofrecer presentaciones con video y audio, además de imágenes fotográficas y textos animados y dinámicos; todo esto diagramado y diseñado para el lanzamiento de un nuevo producto o servicio, algún informe de actividades, exposición de objetivos, o lo que la empresa necesite transmitir a sus clientes.<br><br>Realizamos el servicio desde la creación del entorno hasta el replicado del producto final. Si lo desea, también diseñamos la impresión del CD y el empaque en diversas presentaciones.</span></p>        </div>
        <a href="#box0" class="flecha"><img class="volver" src="{{asset('media/img/flecha.png')}}" alt=""></a> </div>
    </li>
    <li id="box6" class="box">
      <div class="contenido"><img src="{{asset('media/img/servicios_5.png')}}" alt="MANTENIMIENTO DE CPU">
        <div class="texto">
          <h1>MANTENIMIENTO DE CPU</h1>
<p><span itemprop="descripción"><strong>RCH</strong> media cuenta con un área de sistemas en la cual se brinda servicios de mantemiento para sus CPU. Este servicio engloba formateo y limpieza de software y hadware. tambien realizamos instalacion de programas como Office, antivirus.</span></p>
        </div>
        <a href="#box0" class="flecha"><img class="volver" src="{{asset('media/img/flecha.png')}}" alt=""></a> </div>
    </li>
  </ul>
</div>

<!--BLOQUE 2-->
<div id="service2">
  <ul class="botones2">
    <li><a class="ancla" href="#box-1" title="REALIZACIÓN POST-PRODUCCIÓN">
      <div><p>REALIZACIÓN Y POST-PRODUCCIÓN</p></div>
      <img src="{{asset('media/img/iconos-02.png')}}" alt=""></a></li>
    <li><a class="ancla" href="#box-2" title="DISEÑO WEB MÓVIL">
      <div><p>DISEÑO WEB–MÓVIL</p></div>
      <img src="{{asset('media/img/iconos-03.png')}}" alt=""></a></li>
    <li><a class="ancla" href="#box-3" title="DISEÑO GRÁFICO">
      <div><p>DISEÑO GRÁFICO</p></div>
      <img src="{{asset('media/img/iconos-01.png')}}" alt=""></a></li>
{{--     <li><a class="ancla" href="#tabs-4" title="SOCIAL MEDIA MANAGEMENT">
      <div><p>SOCIAL MEDIA MANAGEMENT</p></div>
      <img src="{{asset('media/img/iconos-04.png')}}" alt=""></a></li> --}}
    <li><a class="ancla" href="#tabs-5" title="MULTIMEDIA">
      <div><p>MULTIMEDIA</p></div>
      <img src="{{asset('media/img/iconos-05.png')}}" alt=""></a></li>
    <li><a class="ancla" href="#tabs-6" title="MANTENIMIENTO DE CPU">
      <div><p>MANTENIMIENTO DE CPU</p></div>
      <img src="{{asset('media/img/iconos-06.png')}}" alt=""></a></li>
    <!--service--> 
    <script>
    $('#service2 .botones2 li ancla').addClass('wow slideInRight');
    $('#service2 .botones2 li a').attr({'data-wow-delay':'1500ms'});
  </script>
  </ul>
  <div id="tabs_container">
    <div id="box-1" class="cont_service" itemprop="serviceType" itemscope itemtype="http://schema.org/ProfessionalService">
      <img src="{{asset('media/img/servicios_.png')}}" alt="">
      <h1>REALIZACIÓN Y POST-PRODUCCIÓN</h1>
<p><span itemprop="descripción"><strong>RCH media</strong> realiza todo tipo de Videos Institucionales, Promocionales, Documentales, Docuficción, Spots de TV, Cortometrajes y videos con propuesta, según sea el requerimiento. Es así que contamos con equipos para grabación en alta definición FULL HD y SD, así como islas de edición no lineales y el personal profesional con amplia experiencia en el campo de las comunicaciones, desarrollando productos del más exigente nivel.<br><br>Podemos decir que el diferencial está en que nosotros mismos somos los que producimos, dirigimos y editamos los videos, teniendo como resultado final, un producto de calidad.</span></p>
    </div>
    <div id="box-2" class="cont_service" itemprop="serviceType" itemscope itemtype="http://schema.org/ProfessionalService">
      <img src="{{asset('media/img/servicios_2.png')}}" alt="">
      <h1>DISEÑO WEB – MÓVIL</h1>
<p><span itemprop="descripción">Publicar un sitio web le permite dar a conocer su empresa a millones de usuarios alrededor del mundo. En <strong>RCH media</strong> le entregamos un producto de calidad, altamente creativo, moderno y funcional, asesorándolo durante el desarrollo de su Sitio Web o Portal. Realizamos sitios webs o portales animados totalmente compatibles con smartphones o tablets, logrando con ello que su sitio web pueda ser visto desde cualquier dispositivo móvil.</span></p>
    </div>
    <div id="box-3" class="cont_service" itemprop="serviceType" itemscope itemtype="http://schema.org/ProfessionalService">
      <img src="{{asset('media/img/servicios_1.png')}}" alt="">
      <h1>DISEÑO GRÁFICO</h1>
<p><span itemprop="descripción">Debido al crecimiento veloz y masivo en el intercambio de información, la demanda de Diseño Gráfico Publicitario se ha incrementado a causa del desarrollo de nuevas tecnologías y de la necesidad de transmitir mensajes visuales con alta dosis de creatividad a determinados grupos sociales.<br><br><strong>RCH media</strong> cuenta con un equipo de trabajo que gracias a su experiencia, creatividad y pasión por el diseño, logran plasmar ideas impactantes que lleguen directamente a los consumidores, traduciéndose así, en un éxito para su empresa. </span></p>
    </div>
{{--     <div id="tabs-4" class="cont_service" itemprop="serviceType" itemscope itemtype="http://schema.org/ProfessionalService">
      <img src="{{asset('media/img/servicios_3.png')}}" alt="">
      <h1>SOCIAL MEDIA MANAGEMENT</h1>
<p> <span itemprop="descripción">El uso de las redes sociales es un gran avance tecnológico para la comunicación y el marketing de empresas y proveedores de servicios. Por eso, es recomendable sacar provecho y ventaja de esta nueva manera de llegar de forma sutil, divertida, completa y llamativa a cada uno de los potenciales clientes futuros, seguidores y adictos a la red. <br><br>En <strong>RCH media</strong> desarrollamos estrategias orientadas a la interacción entre su marca y su público objetivo en redes sociales y microblogging, generando una comunicación directa con sus clientes, fortaleciendo el posicionamiento de su marca y logrando que las redes sociales no solo sean un medio informativo de los productos que brinda, sino, además, un canal de atención al cliente. </span> </p>
    </div> --}}
    <div id="tabs-5" class="cont_service" itemprop="serviceType" itemscope itemtype="http://schema.org/ProfessionalService">
      <img src="{{asset('media/img/servicios_4.png')}}" alt="">
      <h1>MULTIMEDIA</h1>
<p><span itemprop="descripción">El diseño multimedia ofrece un mayor dinamismo, logrando presentaciones mucho más personalizadas y específicas. Su contenido puede ofrecer presentaciones con video y audio, además de imágenes fotográficas y textos animados y dinámicos; todo esto diagramado y diseñado para el lanzamiento de un nuevo producto o servicio, algún informe de actividades, exposición de objetivos, o lo que la empresa necesite transmitir a sus clientes.<br><br>Realizamos el servicio desde la creación del entorno hasta el replicado del producto final. Si lo desea, también diseñamos la impresión del CD y el empaque en diversas presentaciones.</span></p>    </div>
    <div id="tabs-6" class="cont_service" itemprop="serviceType" itemscope itemtype="http://schema.org/ProfessionalService">
      <img src="{{asset('media/img/servicios_5.png')}}" alt="">
      <h1>MANTENIMIENTO DE CPU</h1>
<p><span itemprop="descripción"><strong>RCH</strong> media cuenta con un área de sistemas en la cual se brinda servicios de mantemiento para sus CPU. Este servicio engloba formateo y limpieza de software y hadware. tambien realizamos instalacion de programas como Office, antivirus.</span></p>
    </div>
    <script>
    $('#service2 .cont_service').attr({'class':'wow fadeInLeft cont_service','data-wow-delay':'300ms'});
  </script> 
  </div>
  <!--End tabs container--> 
</div>
<!--End tabs BLOQUE 2--> 
        <!--END SERVICIOS CONTENIDO--> 
      </div>

  <!--==========================================================================================-->
          <!--//// PROYECTOS /////--> 

    {{--     <div id="projects" class="recent-projects">
            <div class="recent-projects-title">
                ALGUNOS DE NUESTROS PROYECTOS
            </div>
			    <div class="recent-projects-content content-block-gray">
	                 <div id="owl-carousel" class="owl-carousel"> 
	                    <div>
	                        <img src="{{asset('img/cumple.png')}}" alt="">
	                        <a href="#" target="_blank" >Cumpleaños</a>
	                    </div>
	                    <div>
	                        <img src="{{asset('img/PTAR.png')}}" alt="">
	                        <a href="#" target="_blank" >Conferencias</a>
	                    </div>
	                    <div>
	                        <img src="{{asset('img/mujer.png')}}" alt="">
	                        <a href="#" target="_blank" >Capacitaciones</a>
	                    </div>
	                    <div>
	                        <img src="{{asset('img/cumple2.png')}}" alt="">
	                        <a href="#" target="_blank" >Cumpleaños</a>
	                    </div>
	                    <div>
	                        <img src="{{asset('img/tumbes.png')}}" alt="">
	                        <a href="#" target="_blank" >Charlas</a>
	                    </div>
                       dd("sdsdss");
	                 </div> 
                       dd("hola");
            	</div>

        dd("hola");
        </div><!-- /.recent-projects -->
        
        dd("hola"); --}}

<!--===================================================================================================-->

<!-- ////// CONTACTOS ///// -->
<div id="contacto" class="" page="5"><a name="contacto"></a>
        <div class="contactos">
          <div class="wow zoomInLeft left" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: zoomInLeft;">
            <h2 itemprop="articleSection">CONTACTO</h2>
            <p> <span itemprop="description">¿Quieres comunicarte con nosotros?</span> </p>
            <h3>NOMBRE: </h3>
            <form action="proceso.php" id="comment_form" method="post">
              <input name="nombre" id="nombre" placeholder="" type="text" required="">
              <h3>EMPRESA: </h3>
              <input name="company" id="company" placeholder="" type="text" required="">
              <h3>E-MAIL:</h3>
              <input name="email" id="email" placeholder="" type="email" pattern="[a-zA-Z0-9._-]+([.][a-zA-Z0-9]+)*@[a-zA-Z0-9._-]+([.][a-zA-Z0-9]+)*[.][a-zA-Z]{1,5}" required="">
              <h3>TELÉFONO: </h3>
              <input name="fono" id="fono" placeholder="" title="Ingresa numeros del 0 - 9" type="tel" pattern="[0-9*-]{7,15}" required="">
              <h3>MENSAJE: </h3>
              <textarea name="mensaje" id="mensaje" placeholder="" required=""></textarea>

              <input type="submit" value="Enviar" name="envio" id="envio">
            </form>
          </div>
          <div class="right">
            <div id="googleMap" style="height:350px;width:100%;"></div>
            <script>
              function myMap() {
              var myCenter = new google.maps.LatLng(-5.224101,-80.6281908);
              var mapProp = {center:myCenter, zoom:17, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
              var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
              var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
              }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsoFFS2JVU_TaRrjN-IUisf-f_8W_5oLs&amp;callback=myMap"></script>
            <br>
            <div id="address" class="wow zoomInRight" data-wow-delay="250ms" style="visibility: visible; animation-delay: 250ms; animation-name: zoomInRight;">
              <h2 itemprop="articleSection">DIRECCIÓN</h2>
              <p> <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"> <span itemprop="addressLocality">Calle Mayta Capac #2123, Chiclayito<br>
              Castilla - Piura</span>
                <meta itemprop="addressCountry" content="Perú">
                <meta itemprop="postalCode" content="Piur 33">
                </span><br>
                <span itemprop="telephone">FIJO: <a class="link" href="tel:+073 340744"> <span>+073 340744</span></a> 
                RPC: <a href="tel:969 682 858">969 682 858</a></span> <br>
                E-MAIL: &nbsp;<a href="mailto:rolandososalzamora@gmail.com"> <span itemprop="email">rolandososalzamora@gmail.com</span></a></p>
            </div>
            
          </div>
          <div class="borrar"></div>
        </div>
      </div>

{{--  @endsection
  --}}

 </body>
 </html> 