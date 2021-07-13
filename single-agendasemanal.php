<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
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
<!-- 
  <link rel="stylesheet" href="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/css/bastemp.min.css">
  <link rel="stylesheet" href="http://www.lunademiel.com.pe/emailing/2019/11-noviembre/agenda/css/styles.min.css"> -->
   <!-- Owl -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"> 
 
</head>
<body class=" "> 
<div class=" ">
 
  <section class="agenda max-w-[980px]  m-auto "> 
   		<div  class=" flex flex-col md:flex-row justify-between px-4 lg:px-0" >
			<div class=" flex justify-between md:block" >
				<a href="<?=get_home_url(); ?>" target="_self">
					<img src="<?=get_stylesheet_directory_uri().'/build/svg/logo.svg'?>" alt="Luna de Miel agenda" class=" w-28  0 sm:w-[150px]">
				</a>
				<div  class="inline-flex  md:hidden uppercase space-x-3  mt-5 " >
					<span class="text-[#eb3d82] font-bold" >ESPECIAL  </span> <span class="font-bold"  ><?php echo get_the_date( 'F' ); ?> ></span>
				</div>
			</div>

			<div class="text-right pt-0 xs:pt-2 sm:pt-10">
				<div  class=" agenda-date  uppercase space-x-3 " >
					<span class="text-[#eb3d82] font-bold" >ESPECIAL  </span> <span class="font-bold"  ><?php echo get_the_date( 'F' ); ?> ></span>
				</div>
				<div class=" mt-6 text-gray-900 sm:mt-12 text-[35px]  sm:text-[50px] lg:text-[88.5px] tracking-wide " style=" font-family:Didot ;"  >
				#AgendaRomántica
				</div> 
				<p  class=" text-[12px]   sm:text-[20px] lg:text-[22.53px]  " >Ideas para romper la rutina y disfrutar toda la semana</p>
			</div>
		</div>

    <div class="agenda-line mt-5 mb-6">&nbsp;</div>
    <div class="text-right px-4 lg:px-0">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_page_link();?>"   target="_blank" class="text-primary-500 text-[15px]  md:text-[19px] font-semibold inline-flex items-center">
        ¡Compártelo!&nbsp;&nbsp;<img class="w-[30px] md:w-[50px] h-[30px] md:h-[50px] " src="<?=get_stylesheet_directory_uri().'/build/svg/facebook.svg'?>" alt="facebook">
      </a>
    </div>
 
	<span class="text-center block  text-[16px] md:text-[20px] font-semibold py-8 ">-
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
  	<div class="agenda-single w-full max-w-[873px] m-auto px-4 lg:px-0 mb-4 "  >
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
	<div class="agenda-line ">&nbsp;</div>
	<div  class="px-10 lg:px-0" >
		<h2  class="agenda-carousel__title inline-flex " >Ver más publicaciones</h2> 
		<div class="post owl-carousel agenda-carousel-wrap owl-theme">
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
										$term_slugs_array[] = $term->name;
									}
									$terms_slugs_string = join( " & ", $term_slugs_array ); 
								} 
								?>
								 <div class="post-card item"> 
									<a href="<?=the_permalink(); ?>"  >
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
	</div>
  </section>
 <footer class="bg-primary-500 py-20 px-6 lg:px-0  mt-20">
    <div class="  md:flex  justify-between text-white w-full max-w-[873px] m-auto  space-x-6 ">
      <div  class="  inline-flex text-[18px]   sm:text-[20px]  lg:text-[24px]  items-center space-x-10 font-prelo tracking-wider " >
		<a href="<?=get_home_url();?>" class="block">
			<img src="<?=get_stylesheet_directory_uri().'/build/svg/hand.svg'?>" alt="Imagen" class=" w-[45px]   md:w-[60px] lg:w-[77.7px]">
		</a>
		<span>
		Artículos, actividades y <br>
		tips para ti y tu pareja.
		</span>
	  </div>
      <div class="flex items-center text-[14px]  md:text-[16.8px] font-semibold font-prelo tracking-wider mt-10 md:mt-0 ">
		<div>
		<div class="flex items-center space-x-8  mb-6">
			<a href="https://www.facebook.com/portallunademiel/"   target="_self">
			<img src="<?=get_stylesheet_directory_uri().'/build/svg/facebook-white.svg'?>" alt="Facebook" class=" min-w-[35px]   sm:w-[48px] "></a>
			<div>Únete a nuestra comunidad</div>

		</div>
		<div class="flex items-center space-x-8  mt-6" >
			<a href="http://www.lunademiel.com.pe/contacto/" class="block"  target="_self">
				<img src="<?=get_stylesheet_directory_uri().'/build/svg/email.svg'?>" alt="Correo" class=" min-w-[35px]   sm:w-[48px]  "></a>
			<div>Si tienes algún producto o servicio para <br class="hidden-xs" > parejas. ¡escribenos!</div>
		</div>
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