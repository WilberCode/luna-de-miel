<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
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
	<section id="main" class="clearfix page-posts">
		<div class="container page-wrap">
			<div class="col-main col-sm-12 show-grid">
				<section class="head-title page-content">	
					<style>
						.page-category__title:first-letter{
							text-transform:uppercase;
						}
					</style>
					<h1  class="page-category__title"><?php echo single_cat_title(''); ?></h1>
					<p><?php echo category_description(); ?></p>
				</section> 

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

				
				 <?php
				 
				if (  get_post_type( get_the_ID() ) == 'promociones') {
					$agendalist = get_terms( 'promocion', array('orderby'=>'count','order'=>'desc') );?>  
						<?php foreach ($agendalist as $agenda) {?>
							<li> 
							<a href="<?php echo get_term_link($agenda->slug, $taxonomy); ?>"><?php echo $agenda->name; ?>&nbsp;<span class="badge"><?php echo $agenda->count; ?></span> 
							</a>
							</li> 	 
						<?php 
							}
				}   ?>
						 
				 <?php
				 
				if (  get_post_type( get_the_ID() ) == 'agendasemanal') {
					$agendalist = get_terms( 'agenda', array('orderby'=>'count','order'=>'desc') );?>  
						<?php foreach ($agendalist as $agenda) {?>
							<li> 
							<a href="<?php echo get_term_link($agenda->slug, $taxonomy); ?>"><?php echo $agenda->name; ?>&nbsp;<span class="badge"><?php echo $agenda->count; ?></span> 
							</a>
							</li> 	 
						<?php 
							}
				}   ?>
						
			
				</ul>
			</div>
			<!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>	 				
 
			</div>
 
			
			<?php 
			global $query_string;
			query_posts( $query_string . '&post_status=publish&posts_per_page=-1' );
			if (have_posts()) : ?>
			<div class="listing post">
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php while (have_posts()) : the_post();
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
			endwhile; ?>
			</div>
			<?php else : ?>
				<div class="col-main col-sm-12  ">
					Por el momento no tenemos promociones. Si deseas contactarnos para enviarnos promociones o deseas anunciar con nosotros puedes <a href="/contacto/" id="contacto">escribirnos aquí</a>.
				</div>
			<?php endif; ?>
		</div>
	</section>		

<?php get_footer(); ?>

