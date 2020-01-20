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
				<?php 
					$promolist = get_terms( 'promocion', array('hide_empty' => false,'orderby'=>'count','order'=>'desc') );
				?>
				 
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand visible-xs-block">Filtros</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
						<?php foreach ($promolist as $promo) {	?>
						<li>
							<a href="/<?php echo $promo->taxonomy; ?>/<?php echo $promo->slug; ?>/"><?php echo $promo->name; ?>&nbsp;<span class="badge"><?php echo $promo->count; ?></span>
							</a>
						</li>
						<?php } ?>				      
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				<div class="listing post">
				<?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'promociones',
					'orderby' => 'date',
					'order' => 'desc',
					'post_status' => 'publish',
					'posts_per_page' => -1
					);

					$listing = new WP_query($args);

					// create output
					if ($listing->have_posts()) :
						while ($listing->have_posts()) : $listing->the_post();
							$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing-top');
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
		</div>
	</section>		
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
