<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2072313038095874"
	crossorigin="anonymous"></script>
	<div  class="ins-wrap sm-from-hide justify-center " style="height:90px;" >
		<!-- Post - top in mobile -->
		<ins class="adsbygoogle"
			style="display:inline-block;width:325px;height:90px"
			data-ad-client="ca-pub-2072313038095874"
			data-ad-slot="7278848626"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
<section id="main" class="clearfix single">
  <div class="container">
	<div class="col-main col-sm-8">
		<?php if (get_post_status()=='archive'){ ?>
			<div class="alert alert-warning" role="alert">
			  Este artículo ya no se encuentra disponible. Te invitamos a que visites <a href="/novedades/" class="alert-link">nuestra sección de novedades</a>.
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
	<section class="related">
		<h3>También te puede interesar:</h3>
		<div class="row">
		<?php
			global $post;
			
			//query subpages
			$args = array(
			'post_type' => 'novedades',
			'orderby' => 'comment_count',
			'order' => 'desc',	
			'post__not_in' => array(get_the_ID()),
			'posts_per_page' => 4
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
					endif;
					echo '<div class="col-xs-3 col-sm-3 col-md-3 show-grid">';
					echo '<a href="' . get_permalink() . '" rel="nofollow" class="thumbnail"><img src="' . $imagethumb . '" alt="'.get_the_title().'"/>';
					echo '</a>';
					echo '<a href="' . get_permalink() . '" class="title-list">'.get_the_title().'</a>';
					echo '</div>';
				endwhile;
			endif;

			// reset the query
			wp_reset_postdata();
		  ?>
		  </div>
	</section>
		<section class="comentarios">
			<?php comments_template(); ?>
		</section>
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
					'post_type' => 'novedades',
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
							
							$terms = wp_get_post_terms( $listing->post->ID, array( 'catnovedades' ) ); 
							
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
			<a href="<?=get_home_url().'/contacto';?>" target="_blank"><img src="http://www.lunademiel.com.pe/emailing/logo/b3.png" style="height: 280px; width: 300px" /></a>
			<script type='text/javascript'>
			//googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-2'); });
			</script>
		</div>
		<!--FIN BRASIL-->
		<div class="row show-grid">
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
