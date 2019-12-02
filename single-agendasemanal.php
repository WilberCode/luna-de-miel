<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
/** 
 get_header(); ?>
<section id="main" class="clearfix">
  <div class="container">
	<div class="col-main col-sm-8">
		<?php if (get_post_status()=='archive'){ ?>
			<div class="alert alert-warning" role="alert">
			  Este evento ya no se encuentra disponible. Te invitamos a que visites <a href="/agenda-semanal/" class="alert-link">la agenda semanal</a>.
			</div>
		<?php } ?>
		<section class="head-title">	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><?php echo get_the_title(); ?></h1>
			<?php endwhile; endif; ?>
		</section>
		<?php //if ( has_post_thumbnail() ):?>
			<!--<div class="row">
				<div class="featured-image-wrap text-center"><?php the_post_thumbnail(); ?></div>
			</div>-->
		<?php //endif; ?>	
		<div class="entry">
			<?php the_content(); ?>
		</div>
	<section class="publicidad hidden-xs">
			<div class="row">
				<div class="banner-footer-728x90">			
					<!-- /22596825/Home_Footer_Skycrapper -->
					<div id='div-gpt-ad-1459740034135-0' style='height:90px; width:728px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-0'); });
					</script>
					</div>
				</div>
			</div>
	</section>			
		<!--<section class="comentarios">
			<?php //comments_template(); ?>
		</section>-->
  	</div>
	<div class="col-sidebar col-sm-1"></div>
	<div class="col-sidebar col-sm-3">
	  	<div class="row show-grid">
			<h3>Los más recientes</h3>
			<div class="container-fluid mas-recientes">
			<?php
					global $post,$categoria;
					
					//query subpages
					$args = array(
					'post_type' => 'agendasemanal',
					'orderby' => 'date',
					'order' => 'desc',
					'post__not_in' => array(get_the_ID()),
					'posts_per_page' => 3
					);

					$listing = new WP_query($args);

					// create output
					if ($listing->have_posts()) :
						while ($listing->have_posts()) : $listing->the_post();
							$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-sidebar');
							if ( $arr_image[0] != '' ) :
								 $imagethumb = $arr_image[0];
							else :
								 $imagethumb = get_template_directory_uri()."/_/images/thumb-default.jpg";
							endif;
							
							$terms = wp_get_post_terms( $listing->post->ID, array( 'agenda' ) ); 
							
							$categoria = $terms[0]->name;
							
							echo '<div class="row">';
							echo '<div class="col-xs-4 col-md-4 cinco-padding"><a href="' . get_permalink() . '" rel="nofollow" class="thumbnail"><img src="' . $imagethumb . '" alt="'.get_the_title().'"/></a></div>';
							echo '<div class="col-xs-8 col-md-8 cinco-padding"><p>'.$categoria.'</p><a href="' . get_permalink() . '" class="title-list">'.get_the_title().'</a></div>';
							echo '</div><hr class="clean"/>';
						endwhile;
					endif;

					// reset the query
					wp_reset_postdata();
				  ?>
				 </div>
	  	</div>
		<!--BRASIL-->
		<div class="banner-right-300x250">
			<!-- /22596825/Home_Right_1_300x250 
			<div id='div-gpt-ad-1459740034135-2' style='height:250px; width:300px;'>-->
			<div style='height:300px; width:300px;'>
			<a href="http://www.lunademiel.com.pe/contacto/" target="_blank"><img src="http://www.lunademiel.com.pe/emailing/logo/b3.png" style="height: 280px; width: 300px" /></a>
			<script type='text/javascript'>
			//googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-2'); });
			</script>
		</div>
		<!--FIN BRASIL-->
		<div>
			<h3>También visita</h3>
			<?php wp_nav_menu( array('theme_location' => 'sidebar','menu_class' => 'menu-sidebar') ); ?>
	  	</div>
	  	<div class="banner-right-300x250">
			<!-- /22596825/Home_Right_2_300x250 -->
			<div id='div-gpt-ad-1459740034135-3' style='height:250px; width:300px;'>
			<script type='text/javascript'>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-3'); });
			</script>
			</div>
		</div>
	</div> 
  </div>
</section>
<?php get_footer(); ?>
*/ 
?>
 <?php  get_header(); 
$number_og = 1;
$number_single = 1;
 
 ?>

<!DOCTYPE html>
<html lang="es" style="margin-top:0!important;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <meta property="og:url" content="<?php echo get_page_link();?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content=" <?php echo  the_title(); ?> - Luna de Miel" />
  <meta property="og:description" content="<?php $number_og = 1; $terms = get_the_terms( $post->ID , 'agenda' );
  	foreach ( $terms as $term ) {$term_link = get_term_link( $term, 'agenda' ); if( is_wp_error( $term_link ) ) continue; ?> <?php if($number_og >1){echo ' & '.$term->description;} else{ echo $term->description;} ?> <?php $number_og++; }?>"/>
  <meta property="og:image" content="<?php echo main_image_url('full'); ?>" />
   <link rel="shortcut icon" href="http://lunademiel.com.pe/wp-content/uploads/2019/01/lunaDeMiel.png" type="image/x-icon">

  <title> <?php echo  the_title(); ?></title>
  <meta name="description"  content="<?php $number_single = 1; $terms = get_the_terms( $post->ID , 'agenda' );
  	foreach ( $terms as $term ) {$term_link = get_term_link( $term, 'agenda' ); if( is_wp_error( $term_link ) ) continue; ?> <?php if($number_single >1){echo ' & '.$term->description;} else{ echo $term->description;} ?> <?php $number_single++; }?>">

  <link rel="stylesheet" href="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/css/bastemp.min.css">
  <link rel="stylesheet" href="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/css/styles.min.css">

   <!-- Owl -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"> 
  <style> 
  h1,h2,h3,h4,h5{
	font-family: 'Times New Roman', Times, serif;
    font-weight: 100;
	margin: .3vw 0;
	color:black;
  }
  h1{
	  font-size: 5rem;
	      
  }
  h2{
	   font-size: 3rem !important;
  }
  p img{
	  width:100% !important;  
  }
  img{
      vertical-align: unset !important;
  }
  .agenda-single  p img{
	  width:100% !important;
	  height:auto;
  }
  a{
	  color: #EB3D82; 
  }
  a:hover{
      color:#eb3d82;
  }
  p,div{
      color:black;
  }
  p{
	  font-size: 20px; 
  }
  header{
      display:none; 
  }
  .at-above-post.addthis_tool, .at-below-post.addthis_tool{
      display:none;
  }
  body{
    font-size: 1.6rem !important;
    line-height: normal;
  }
  
  </style>
 
</head>
<body class="section_top_center"> 
<div class="section_top_center">
  <section class="w_90 w_50_desktop section_middle_justify">
    <a href="http://www.lunademiel.com.pe/" target="_self">
      <img src="http://lunademiel.com.pe/wp-content/uploads/2019/01/lunaDeMiel.png" alt="Luna de Miel agenda" class="img_biggest img_normal_mobile">
    </a>

    <div class="align_right w_61 w_75_desktop font_tiny_mobile">
      <span style=" color:#EB3D82; ">ESPECIAL </span> &nbsp;  <span style="text-transform:uppercase;" ><?php echo get_the_date( 'F' ); ?> ></span>
     <div class="w_100 w_100_desktop " style=" font-family:Didot ;letter-spacing: 1px;font-size: 4.5vw; font-style: italic; margin-top: 20px; "  >
      #AgendaRomántica
    </div>
      <br>
      Ideas para romper la rutina y disfrutar toda la semana
    </div>

    <div class="separador marginVertical_small">&nbsp;</div>
    <div class="w_100 section_middle_right">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_page_link();?>"
      target="_blank" class="pinkColor section_middle_right w_20_desktop">
        ¡Compártelo!&nbsp;&nbsp;<img src="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/images/facebook.svg" alt="facebook" class="img_small img_tiny_mobile">
      </a>
    </div>

	<span class="w_100 align_center pinkColor font_normal marginVertical_tiny">-
	<?php
	$number = 1;
	$termscategory = get_the_terms( $post->ID , 'agenda' ); 
		if($termscategory){
			foreach ( $termscategory as $term ) {
				$term_link = get_term_link( $term, 'agenda' );
				if( is_wp_error( $term_link ) )
					continue; 
						?>
					<a href="<?php $term_link; ?>"> <?php if($number > 1){ echo "& "; }else{ echo ' ';}?><?php echo $term->name; ?> </a> 
			<?php 
				$number++;
			} 
		} else{
			echo "actividades";
		}?>
	 
	 -</span>
  	<div class="agenda-single" style="width:100%;margin-bottom:4em;" >
		<?php
				if (have_posts()) :
					while (have_posts()):
							the_post();
							the_content(); 
					endwhile;
				endif;

				// reset the query
				wp_reset_postdata();
		?> 
	</div>  	
	<div class="separador ">&nbsp;</div>
		<h2  class="agenda-carousel__title" >Ver más publicaciones</h2> 
		<div class="post owl-carousel owl-theme">
					<?php
						global $post;
						
						//query subpages
						$args = array(
						'post_type' => 'agendasemanal',
						'orderby' => 'date',
						'order' => 'desc', 
						'post__not_in' => array(get_the_ID()),
						'post_status' => 'publish',
						'posts_per_page' => 12
						);

						$listing = new WP_query($args);	

						// create output
						if ($listing->have_posts()) :
							while ($listing->have_posts()) : $listing->the_post();
								$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
								if ( $arr_image[0] != '' ) :
									$imagethumb = $arr_image[0];
								else :
									$imagethumb = get_template_directory_uri()."/_/images/thumb-default.jpg";
								endif;?>
								
								<?php 
								$first_number = 1;
							    $terms_slugs_string = '';
								$terms = get_the_terms( $post->ID, 'agenda' );
								if ( $terms && ! is_wp_error( $terms ) ) {                
									$term_slugs_array = array();
									foreach ( $terms as $term ) {
										$term_slugs_array[] = $term->slug;
									}
									$terms_slugs_string = join( " & ", $term_slugs_array ); 
								} 
								?>
								 <div class="post-card item"> 
									<a href="<? the_permalink(); ?>"  >
										<img src="<?php echo $imagethumb; ?>" alt="<?php the_title();?>" class="thumbnail"/> 
										<p>- <?php if($terms_slugs_string !== "" ) { echo $terms_slugs_string;} else { echo "actividades";} ?> -</p>   
										<h2><?php the_title();?></h2>
							 		</a> 
								 </div> 
								<?php
							endwhile;
						endif;

						// reset the query
						wp_reset_postdata();
					?>  
		</div>		  
  </section>
 <footer class="pinkColorBg w_100 section_middle_center">
    <div class="w_50_desktop w_80 section_middle_center">
      <a href="http://www.lunademiel.com.pe" class="w_40_desktop w_80 marginVertical_normal">
        <img src="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/images/footer_img.svg" alt="Imagen" class="w_100">
      </a>
      <div class="w_60_desktop w_80 section_middle_right marginVertical_normal">
      <div class="w_90_desktop w_80 section_middle_right marginVertical_normal">
        <a href="https://www.facebook.com/portallunademiel/"  class="w_20_desktop w_20 marginVertical_normal" target="_self"><img src="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/images/f.svg" alt="Facebook" class="img_normal img_small_mobile"></a>
        <div class="w_70 w_65_desktop whiteColor " style="margin-left:15px;">Únete a nuestra comunidad</div>

      </div>
       <div class="w_90_desktop  w_80 section_middle_right  marginVertical_normal" >
        <a href="http://www.lunademiel.com.pe/contacto/"  class="w_20_desktop w_20 marginVertical_normal" target="_self"><img src="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/images/correo.svg" alt="Correo" class="img_normal img_small_mobile"></a>
        <div class="w_70 w_65_desktop whiteColor "  style="margin-left:15px;">si tienes algún producto o servicio para parejas. ¡escribenos!</div>
      </div>
    </div>
    </div>
  </footer>
  </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

	  <script>
 $('.owl-carousel').owlCarousel({
	loop:true,
	margin:18,
	nav:true,  
	navText: [
		"<i class='fa fa-caret-left agenda-carousel__icon'></i>",
		"<i class='fa fa-caret-right agenda-carousel__icon'></i>"
	],
	responsive:{
		0:{
			items:2
		},
		600:{
			items:3
		},
		1000:{
			items:5
		}
	}
	})
 
</script>
</body>
</html> 