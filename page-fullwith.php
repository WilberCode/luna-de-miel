<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 * 
 * Template Name: Full Width
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
		<div class="container page-wrap">
			<div class="col-xs-12 col-md-12"> 
				<div class="page-content">
					<?php edit_post_link(__('Editar esta entrada','html5reset'), '<span>', '</span>'); ?>
					<h1><?php the_title(); ?></h1>
					<div class="entry">	
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>		
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
