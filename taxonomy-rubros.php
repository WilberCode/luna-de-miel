<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?> 
<section id="main" class="clearfix provider-single" >
	<div class="container">
		<div class="col-main col-sm-12">
			<h1><?php echo single_cat_title(''); ?></h1>
			<div class="entry">
				<?php echo category_description(); ?>
			</div>
		</div>
		<div class="col-sm-8">
			<?php if (have_posts()) : ?>
			<div class="lista-proveedores-destacados"> 			
			<?php 
				$catId = get_queried_object()->term_id; //capturo el ID del current term
				
				$args = array(
				'post_type' => 'proveedores',
				'tax_query' => array(
								array(
									'taxonomy' => 'rubros',
									'field'    => 'term_id',
									'terms'    => $catId,
								),
							),
				'meta_query' => array(
								array(
									'key'     => 'prov_premium',
									'value'   => 1,
									'compare' => '=',
								),
							),
				'orderby' => 'modify',
				'order' => 'desc',
				'posts_per_page' => -1,
				);

				$listing = new WP_query($args);
				
				while ($listing->have_posts()) : $listing->the_post();
				
				$direccion = get_post_meta( $post->ID, 'direccion', true );
				$email = get_post_meta( $post->ID, 'email', true );
				$sitio_web = get_post_meta( $post->ID, 'sitio_web', true );
				$telefono = get_post_meta( $post->ID, 'telefono', true );
				
				$horario = get_post_meta( $post->ID, 'horario', true );
			?>
				<dl>
					<dt><?php echo get_the_title() ?></dt>
					<?php if ($direccion) {?><dd><span>Dirección: </span><?php echo $direccion;?></dd><?php }?>
					
					<?php if ($telefono) {?><dd><span>Teléfono: </span><?php echo $telefono;?></dd><?php }?>
					<?php if ($sitio_web) {?><dd><span>Sitio Web: </span><a href="<?php echo $sitio_web;?>"><?php echo $sitio_web;?></a></dd><?php }?>
					
					<?php if ($email) {?><dd><span>Email: </span><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></dd><?php }?>
					
						<?php if ($horario) {?><dd><span>horario: </span><?php echo $horario;?></dd><?php }?>
				</dl>
			<?php endwhile; ?>
			</div>
			<div class="lista-proveedores"> 			
			<?php 
				$catId = get_queried_object()->term_id; //capturo el ID del current term
				
				$args = array(
				'post_type' => 'proveedores',
				'tax_query' => array(
								array(
									'taxonomy' => 'rubros',
									'field'    => 'term_id',
									'terms'    => $catId,
								),
							),
				'meta_query' => array(
								array(
									'key'     => 'prov_premium',
									'value'   => 1,
									'compare' => '!=',
								),
							),
				'orderby' => 'modify',
				'order' => 'desc',
				'posts_per_page' => -1,
				);

				$listing = new WP_query($args);
				
				while ($listing->have_posts()) : $listing->the_post();
				
				$direccion = get_post_meta( $post->ID, 'direccion', true );
				$email = get_post_meta( $post->ID, 'email', true );
				$sitio_web = get_post_meta( $post->ID, 'sitio_web', true );
				$telefono = get_post_meta( $post->ID, 'telefono', true );
				
					$horario = get_post_meta( $post->ID, 'horario', true );
				
				
			?>
				<dl>
					<dt><?php echo get_the_title() ?></dt>
					<?php if ($direccion) {?><dd><span>Dirección: </span><?php echo $direccion;?></dd><?php }?>
					<?php if ($telefono) {?><dd><span>Teléfono: </span><?php echo $telefono;?></dd><?php }?>
					<?php if ($sitio_web) {?><dd><span>Sitio Web: </span><a href="<?php echo $sitio_web;?>"><?php echo $sitio_web;?></a></dd><?php }?>
					<?php if ($email) {?><dd><span>Email: </span><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></dd><?php }?>
					
						<?php if ($horario) {?><dd><span>horario: </span><?php echo $horario;?></dd><?php }?>
				</dl>
			<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
		<div class="col-sm-4 text-center"> 
			<?php
				$terms = get_terms( array('taxonomy' => 'rubros','hide_empty' => false,'orderby'=>'count','order'=>'desc','number'=>10));
			?>
			<!-- <div class="list-group siderbar-rubros"> -->
		 <div class="list-group  ">
			<?php foreach($terms as $term) {?>			
			  <a href="/rubros/<?php echo $term->slug?>/" class="list-group-item"><?php echo $term->name; ?><span class="badge"><?php echo $term->count; ?></span></a>
			<?php }?>
			  <a href="/proveedores/" class="list-group-item">Ver más categorías</a>
			</div> 
		</div>
	</div>
</section>
<?php get_footer(); ?>

