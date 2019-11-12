<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
*/

header ("Expires: Fri, 14 Mar 1980 20:53:00 GMT"); //la pagina expira en fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache"); //PARANOIA, NO GUARDAR EN CACHE 

?>

<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127421070-1"></script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2347629658600209'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" alt="Luna de Miel" src="https://www.facebook.com/tr?id=2347629658600209&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

 

  gtag('config', 'UA-127421070-1');

</script>



	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
   	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	
	<meta name="keywords" content="Guía para parejas, Luna de miel, moda, vivienda, ropa para mujer, cine, entretenimiento, farándula, eventos, actividades en pareja, cinerama, música en vivo, restaurante, novedades, 
restaurantes románticos, tendencias de boda, celebridades, catering, bares y café, escapadas, fotógrafos de boda, iglesias, nutrición, bodas, paseos, viajes, excursiones, bares, café, belleza, vacaciones, decoración, iglesias, tecnología, fiestas, tips, consejos, dio del padre, regalos papa, copa de américa, entradas, novedades, cartelera, combo cine, entradas, taquilla, butaca, estrenos, terror, comedia, drama, ciencia ficción, romántica, infantil, combos, estrenos, entradas, diversión, sorteos, concursos, bodas, shows, presentaciones, show musical, concierto, espectáculo, juegos, comida, cupones, descuento, fotodepilación, joyería, oferta, promoción, promo, combocine, 2x1, almuerzo, desayuno, ropa de moda, trajes de boda, florería, fotografías, weeding planner, despedidas, locales, recepción, paquetes de viaje, Nuevo Mundo Viajes, excursiones, hoteles, casa playa, vestidos, accesorios para bebes, anillos, zapatos, ternos, buques, casa ideas, artículos, juguetes, dulcería, lentes, celulares, coche de bebe, libros, juegos mecánicos, cosméticos, maquillaje, supermercado, ropa para mujer, sandalias, juegos, jeans, billeteras, bolsos, perfumes, casacas, joyas, pareja,depa,dormitorios, departamento,inmobiliaria,San Isidro, San Borja,comunes,coworking,Surco,Surquillo”>

	<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php
		/*
			j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
			 - device-width : Occupy full width of the screen in its current orientation
			 - initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
			 - maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
			 - minimal-ui = iOS devices have minimal browser ui by default
		*/
		if (true == of_get_option('meta_viewport'))
			echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';


		/*
			These are for traditional favicons and Android home screens.
			 - sizes: 1024x1024
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/
			 - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
		*/
		if (true == of_get_option('head_favicon')) {
			echo '<meta name=”mobile-web-app-capable” content=”yes”>';
			echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
		}


		/*
			The is the icon for iOS Web Clip.
			 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
			 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
			 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
		*/
		if (true == of_get_option('head_apple_touch_icon'))
			echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
	?>

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	
	 <!-- Bootstrap -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/bootstrap.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->


	<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>

	<!-- Application-specific meta tags -->
	<?php
		// Windows 8
		if (true == of_get_option('meta_app_win_name')) {
			echo '<meta name="application-name" content="' . of_get_option("meta_app_win_name") . '" /> ';
			echo '<meta name="msapplication-TileColor" content="' . of_get_option("meta_app_win_color") . '" /> ';
			echo '<meta name="msapplication-TileImage" content="' . of_get_option("meta_app_win_image") . '" />';
		}

		// Twitter
		if (true == of_get_option('meta_app_twt_card')) {
			echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
			echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
			echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
			echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
			echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
		}

		// Facebook
		/*if (true == of_get_option('meta_app_fb_title')) {
			echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
	      echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
			echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
			echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
			
			echo '<meta property="fb:page_id" content="2347629658600209"/>';
	        echo '<meta property="fb:app_id" content="2347629658600209"/>';
		
		}*/
	?>
	<?php wp_head(); ?>

<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/22596825/Home_Footer_Skycrapper', [728, 90], 'div-gpt-ad-1459740034135-0').addService(googletag.pubads());
    googletag.defineSlot('/22596825/Home_Middle_720x300', [720, 300], 'div-gpt-ad-1459740034135-1').addService(googletag.pubads());
    googletag.defineSlot('/22596825/Home_Right_1_300x250', [300, 250], 'div-gpt-ad-1459740034135-2').addService(googletag.pubads());
    googletag.defineSlot('/22596825/Home_Right_2_300x250', [300, 250], 'div-gpt-ad-1459740034135-3').addService(googletag.pubads());
    googletag.defineSlot('/22596825/Home_Top_Skycrapper', [728, 90], 'div-gpt-ad-1459740034135-4').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
</head>

<body <?php body_class(); ?>>
	<?php include_once("googletagmanager.php") ?>
<?php
  $settings = pods('configuracindelsitio');
  $logo = $settings->field('logo');
  $facebook = $settings->field('facebook');
  $twitter = $settings->field('twitter');
  $pinterest = $settings->field('pinterest');
  $instagram = $settings->field('instagram');
?>	
	<!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
		<?php if(is_front_page()){ ?>
		<header id="header" class="clearfix">
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="logo-home"><img id="logo-ldm" src="http://lunademiel.com.pe/wp-content/uploads/2019/01/lunaDeMiel.png"  width="158" height="138" alt="Portal Luna de Miel" title="Portal Luna de Miel"/></a>
					</div>
				</div>
			</div>
		</header>
		<?php $layerSlider = 1;//get_post_meta($post->ID, 'layerSlider', true);
		   if ( $layerSlider ) { ?>
			<section id="slides">
				<div class="container-fluid sin-padding" >
					<?php echo do_shortcode('[layerslider id="'.$layerSlider.'"]'); ?> 
													
				</div>
			</section>    
			<?php } ?>
		<section id="suscripcion">
			<div class="container">
				<div class="row">
					<h2>GUÍA PARA PAREJAS: <small>Agenda romántica, novedades & promociones exclusivas.</small></h2>
					
					<!--SUSCRÍBETE boton-->
					<div class="col-sx-12 col-md-8">
						<h2>SUSCRÍBETE <small>Y recibe la agenda, novedades & promociones exclusivas.</small></h2>
					</div>
					<div class="col-sx-12 col-md-4">
						<div class="input-group margin-bottom-sm">
						  <!--<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
						  <input class="form-control" type="text" placeholder="Tu email aquí"> -->
						  <?php
						    $form_widget = new \MailPoet\Form\Widget();
                            echo $form_widget->widget(array('form' => 2, 'form_type' => 'php'));
						  ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-2 social-icons">
						<a href="https://www.facebook.com/portallunademiel/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
						<a href="/contacto/"><i class="fa fa-envelope-o fa-2x"></i></a>
						<a href="/"><i class="fa fa-home fa-2x"></i></a>
					</div>
					<div class="col-xs-12 col-md-10">
						<nav class="macromenu">
							<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false,  'menu_class' => 'nav nav-prime',) ); ?>
						</nav>
						<nav class="micromenu" >					
							<?php 
									if ($menu_type == "Select Dropdown"){
										inti_dropdown_menu( array('theme_location' => 'main-mobile', 'container' => false ));
									} else {
									?>

									<ul id="nav-buttons" class="clearfix">								
										
										<li id="show-nav-prime" class="hover">
											<div class="fa fa-bars"></div> MENÚ
										</li>
									</ul>
									
									<?php
										wp_nav_menu( array( 'theme_location' => 'main-mobile', 'container' => false, 'menu_id' => '', 'menu_class' => 'nav nav-prime', ) );
									}
							?>
						</nav>

					</div>
				</div>
			</div>
		</section>
		<?php } else { ?>
		<header id="header-int" class="clearfix">
			<div class="container">
				<div class="row clearfix">
					<div class="col-sx-12 col-sm-3 col-md-2 text-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="logo-home"><img id="logo-ldm" src="http://lunademiel.com.pe/wp-content/uploads/2019/01/lunaDeMiel.png" alt="Portal Luna de Miel" width="100" height="90" title="Portal Luna de Miel"/></a>
					</div>
					<div class="col-sx-12 col-sm-9 col-md-10">
						<div class="row suscripcion-int">				
							<!--<div class="col-md-2">
								<h2>SUSCRÍBETE</h2>
							</div>
							<div class="col-md-4">
								<div class="input-group margin-bottom-sm">
								  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
								  <input class="form-control" type="text" placeholder="Tu email aquí">
								</div>
							</div>-->
							<div class="col-md-5 social-icons">
								<a href="https://www.facebook.com/portallunademiel/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
								<a href="/contacto/"><i class="fa fa-envelope-o fa-2x"></i></a>
								<a href="/"><i class="fa fa-home fa-2x"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 padding20">
								<nav class="macromenu">
									<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false,  'menu_class' => 'nav nav-prime',) ); ?>
								</nav>
								<nav class="micromenu">					
									<?php 
											if ($menu_type == "Select Dropdown"){
												inti_dropdown_menu( array('theme_location' => 'main-mobile', 'container' => false ));
											} else {
											?>
											<ul id="nav-buttons" class="clearfix">								
												
												<li id="show-nav-prime" class="hover">
													<div class="fa fa-bars"></div> MENÚ
												</li>
											</ul>
											<?php
												wp_nav_menu( array( 'theme_location' => 'main-mobile', 'container' => false, 'menu_id' => '', 'menu_class' => 'nav nav-prime', ) );
											}
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<?php } ?>
		

