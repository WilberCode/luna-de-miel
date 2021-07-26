<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 * 
 */
 get_header(); ?>
	 <section class="publicidad   ">
		<div class="container">
			<div class="row">
				<div class="ins-wrap justify-center"> 
				<!-- Categoria - top -->
				<ins class="adsbygoogle"
					style="display:inline-block;width:728px;height:90px"
					data-ad-client="ca-pub-2072313038095874"
					data-ad-slot="1746007268"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>		 
  					 
				</div>
			</div>
		</div>
	</section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main" class="clearfix ">
		<div class="container page-wrap">
			<div class="col-xs-12 col-md-12"> 
				<div class="page-content">
					<?php edit_post_link(__('Editar esta entrada','html5reset'), '<span>', '</span>'); ?>
					<h1><?php the_title(); ?></h1>
					<div class="entry">	
						<?php the_content(); ?>
					</div>
				</div>
				<div class="listing post">
				<?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'novedades',
					'orderby' => 'date',
					'order' => 'desc',
					'posts_per_page' => -1
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
							echo '<div class="col-xs-12 col-sm-6 col-md-3 post-card ">';
							echo '<a href="' . get_permalink() . '"  ><img src="' . $imagethumb . '" alt="'.get_the_title().'" class="thumbnail"/> <h2>'.get_the_title().'</h2>';
							echo '</a>'; 
							echo '</div>'; 
						endwhile;
					endif;

					// reset the query
					wp_reset_postdata();
				  ?>
					</div>
			</div>
			<div class="col-xs-12 col-md-12 text-center">
				<a class="btn btn-default btn-lg" href="/novedades/" role="button">Regresar a novedades</a>
			</div>
		</div>
	</section>		
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
