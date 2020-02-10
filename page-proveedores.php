<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 * 
 */
 get_header(); ?> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main" class="clearfix  provider ">
		<div class="container page-wrap">
			<div class="col-xs-12 col-md-12"> 
				<div class="page-content">
					<?php edit_post_link(__('Editar esta entrada','html5reset'), '<span>', '</span>'); ?>
					<h1><?php the_title(); ?></h1>
					<div class="entry">	
						<?php the_content(); ?>
					</div>
				</div>
				<div class="proveedores">
				<?php
					$terms = get_terms( array('taxonomy' => 'rubros','hide_empty' => false,'orderby'=>'name'));
				?>
					<?php foreach($terms as $term) {
						$img_cat = get_metadata('term', $term->term_id, 'imagen', true );?>
						<div class="col-xs-6 col-sm-2 text-center">
							<a href="/rubros/<?php echo $term->slug?>/">
							<img src="<?php echo $img_cat['guid']; ?>" alt="Buscando proveedores" /><br/>
							<?php echo $term->name; ?>
							</a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>		
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
