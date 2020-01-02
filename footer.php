<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
	<footer id="footer" class="source-org vcard copyright" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 hidden-xs">
					<?php wp_nav_menu( array('theme_location' => 'footer','container_class' => 'nav-sitemap') ); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8 col-md-6 col-lg-6"><br/><br/>
					Portal Luna de Miel - Todos los derechos reservados - <?php echo date("Y"); ?>
				</div>
				<div class="col-xs-4 col-md-6 col-lg-6 text-right">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home-footer"><img src="http://lunademiel.com.pe/wp-content/uploads/2019/01/lunaDeMiel.png" width="158" height="138" alt="Portal Luna de Miel" title="Portal Luna de Miel"/></a>
				</div>
			</div>
		</div>
	</footer>


	<?php wp_footer(); ?>

	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

	<!-- jQuery is called via the WordPress-friendly way via functions.php -->

	<!-- this is where we put our custom functions -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/hoverIntent.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/_/js/bootstrap.min.js"></script>

	<!-- Search in front-page -->
	<script>
		document.getElementById('s').placeholder = "Buscar..."
	</script>

	<!-- Footer menu set nofollow -->
	 <script>
    //   var footer_menu = document.querySelectorAll('#menu-main-menu-1 li a') 
    //   for(i in footer_menu){ 
    //      footer_menu[i].rel = "nofollow" 
    //   }
    </script>

 
    
</body>

</html>
