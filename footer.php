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
				<?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                        <?php if ( has_custom_logo() ) { ?> 
                    <a  href="<?php echo home_url();?>" rel="home">
                        <img width="158" height="142"    class="w-34 sm:w-43" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                    </a> 
                        <?php }else{?>
                    <a  href="<?php echo home_url();?>" rel="home">
                        <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                    </a>     
                        <?php }?>   
				</div>
			</div>
		</div>
	</footer>


	<?php wp_footer(); ?>
<!-- 
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
  
	<!-- this is where we put our custom functions -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/hoverIntent.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/_/js/bootstrap.min.js"></script>

	<!-- Search in front-page -->
	<script>
		document.getElementById('s').placeholder = "Buscar..."
	</script>
  <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body> 
</html>
