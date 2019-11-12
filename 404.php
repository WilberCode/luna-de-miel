<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<section id="main" class="clearfix">
  <div class="container">
	<div class="col-main col-sm-12">
		<h2>Upss... No encontramos la información solicitada.</h2>
		<p>Te invitamos a navegues por nuestra web para encontrar la información requerida:</p>
		<?php wp_nav_menu( array('theme_location' => 'sidebar','menu_class' => 'menu-sidebar') ); ?>
	</div>
  </div>
</section>
<?php get_footer(); ?>
