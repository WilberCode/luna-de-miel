<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 * 
 */
 get_header(); ?> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main" class="clearfix">
		<div class="container page-wrap">
			<div class="col-xs-12 col-md-12">
				<?php edit_post_link(__('Edit this entry','html5reset'), '<span style=" text-align: center; font-family: Times New Roman; font-size: 35px;">', '</span>'); ?> 
			 
				<div class="page-content">
					<h1  style=" font-family:Didot ;letter-spacing: 1px;font-size:44px; font-style: italic;color: black !important;text-align: center; "><?php the_title(); ?></h1>
					<div style=" text-align: center; font-family: Times New Roman; font-size: 35px;" >
						<?php the_content(); ?>
					</div>
				</div>
				
				<?php 
					$promolist = get_terms( 'category', array('hide_empty' => false,'orderby'=>'count','order'=>'desc') );
				?>
				
				<div class="container-fluid mas-recientes">
				<?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'post',
					'orderby' => 'date',
					'order' => 'desc',
					'post_status' => 'publish',
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
		</div>
	</section>		
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
