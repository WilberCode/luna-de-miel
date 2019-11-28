<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 * 
 */
 get_header(); ?>
	<section class="publicidad hidden-xs">
		<div class="container">
			<div class="row">
				<div class="banner-top-728x90">			
					<!-- /22596825/Home_Top_Skycrapper -->
					<div id='div-gpt-ad-1459740034135-4' style='height:90px; width:728px;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-4'); });
					</script>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main" class="clearfix page-posts">
		<div class="container">
			<div class="col-xs-12 col-md-12">
				<?php edit_post_link(__('Edit this entry','html5reset'), '<span>', '</span>'); ?>
				<h1><?php the_title(); ?></h1>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<div class="listing">
				<?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'articulos',
					'orderby' => 'date',
					'order' => 'desc',
					'posts_per_page' => 24
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
							echo '<div class="col-xs-12 col-sm-6 col-md-3 show-grid">';
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
			</div>
			<div class="col-xs-12 col-md-12 text-center">
				<a class="btn btn-default btn-lg" href="/todos-articulos/" role="button">Ver todos los artículos</a>
			</div>
		</div>
	</section>		
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
