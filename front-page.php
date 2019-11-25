<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
  <?php
  $settings = pods('configuracindelsitio');
  $foto_agenda_semanal = $settings->field('foto_agenda_semanal');
  $foto_promociones = $settings->field('foto_promociones');
  $foto_viajes = $settings->field('foto_viajes');
  $foto_entrevistas = $settings->field('foto_entrevistas');
  $foto_articulos = $settings->field('foto_articulos');
?>
  <?php global $wp;  ?>
    <section class="publicidad hidden-xs">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </section>

    <section id="destacados">
      <div class="container">
        <div class="row show-grid">
          <div class="col-xs-12 col-sm-7 col-md-8" >
            <div class="box-agenda" style="background:url(<?php echo $foto_agenda_semanal['guid']; ?>) center center no-repeat;">
              <dl class="box-destacado text-center">
                <dt>
                  <a href="<?php echo home_url( $wp->request );?>/agenda-semanal/">
                    <h1>AGENDA ROMÁNTICA</h1>
                  </a>
                </dt>
                <dd>

                </dd>
              </dl>
            </div>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-4">
            <div class="banner-right-300x250">
              <a href="http://www.lunademiel.com.pe/proveedores/">
                <img src="http://www.lunademiel.com.pe/emailing/logo/directorio2.png" alt="¿Buscando proveedores?" width="100%" height="auto"
                />
              </a>
              <!-- /22596825/Home_Right_2_300x250 -->
              <!--<div id='div-gpt-ad-1459740034135-3' style='height:250px; width:300px;'>-->
              <script type='text/javascript'>
                //googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-3'); });
              </script>
              <!--</div>-->
            </div>
          </div>
        </div>
        <div class="row show-grid">
          <div class="col-xs-12 col-sm-7 col-md-8">
            <div class="box-promociones box-agenda " style="background:url(<?php echo $foto_promociones['guid']; ?>) center center no-repeat;" >
              <dl class="box-destacado text-center">
              <dt> 
                <a href="<?php echo home_url( $wp->request );?>/promociones"><h1>PROMOCIONES</h1></a> 
              </dt>
              <dd> 
                <?php 

                

								$promolist = get_terms( 'promocion', array('hide_empty' => false) );
								$numberpromo = 1;
								foreach ($promolist as $promo) {
                  if(	$numberpromo > 1){echo "/";}else{echo "";}
							?>
                <a href="/<?php echo $promo->taxonomy; ?>/<?php echo $promo->slug; ?>/">
                  <?php echo $promo->name; ?>
                </a>
                <?php
                $numberpromo++;
							} 
							?>
              </dd>
            </dl>
            </div>
          </div>
          <!--BRASIL-->
          <div class="col-xs-12 col-sm-5 col-md-4">
            <div class="banner-right-300x250">
              <a href="http://www.lunademiel.com.pe/contacto/">
                <img src="http://www.lunademiel.com.pe/emailing/logo/b3.png" alt="¿Tienes una marca para parejas?" width="100%" height="auto"
                />
              </a>
              <!-- /22596825/Home_Right_1_300x250 
						<!--<div id='div-gpt-ad-1459740034135-2' style='height:250px; width:300px;'>
						<div style='height:250px; width:300px;'>
						<a href="https://goo.gl/D9FlQc" target="_blank"><img src="http://www.lunademiel.com.pe/wp-content/uploads/2017/03/postlola-ldm.png" style="height: 250px; width: 300px" /></a>-->
              <script type='text/javascript'>
                //googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-2'); });
              </script>
              <!--</div>-->
            </div>
          </div>
          <!--FIN BRASIL-->
        </div>
        <div class="row show-grid top-margin">
          <div class="hidden-xs col-md-1">&nbsp;</div>
          <div class="col-md-12 col-md-10">
            <div class="col-xs-12 col-sm-4 col-md-4 item-destacados text-center">

              <a href="<?=home_url( $wp->request );?>/viajes/" style="overflow:hidden;">
                <?php
							global $post;
							
							//query subpages
							$args = array(
							'post_type' => 'viajes',
							'orderby' => 'date',
							'orderby' => 'desc',
							'posts_per_page' => 4
							);

							$listing = new WP_query($args);
							
							$countt = 0;
							
							while ($listing->have_posts()) : $listing->the_post();
								if($countt == 0){
									$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
									$imagethumb = $arr_image[0];
									echo '<img src="' . $imagethumb . '" alt="'.get_the_title().'" style="height:229px"/>';
								}
								$countt ++;
							endwhile;
						?>

              </a>
              <a href="<?=home_url( $wp->request );?>/viajes/" class="titulo"><h1>VIAJES</h1></a>
              <ul>
                <?php
							global $post;
							
							//query subpages
							$args = array(
							'post_type' => 'viajes',
							'orderby' => 'date',
							'orderby' => 'desc',
							'posts_per_page' => 4
							);

							$listing = new WP_query($args);

							// create output
							if ($listing->have_posts()) :
								while ($listing->have_posts()) : $listing->the_post();
									echo '<li><a href="' . get_permalink() . '">'.get_the_title().'</a></li>';
								endwhile;
							endif;

							// reset the query
							wp_reset_postdata();
						  ?>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 item-destacados text-center">
             
              <a href="<?=home_url( $wp->request );?>/entrevistas/" style="overflow:hidden;">
                <?php
                            global $post;
                            
                            //query subpages
                            $args = array(
                            'post_type' => 'entrevistas',
                            'orderby' => 'date',
                            'orderby' => 'desc',
                            'posts_per_page' => 4
                            );

                            $listing = new WP_query($args);
                            
                            $countt = 0;
                            
                            while ($listing->have_posts()) : $listing->the_post();
                              if($countt == 0){
                                $arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
                                $imagethumb = $arr_image[0];
                                echo '<img src="' . $imagethumb . '" alt="'.get_the_title().'" style="height:229px"/>';
                              }
                              $countt ++;
                            endwhile;
                          ?>

            </a>
              <a href="<?=home_url( $wp->request );?>/entrevistas/" class="titulo"><h1>BODAS</h1></a>
              <ul>
                <?php
							global $post;
							
							//query subpages
							$args = array(
							'post_type' => 'entrevistas',
							'orderby' => 'date',
							'orderby' => 'desc',
							'posts_per_page' => 4
							);

							$listing = new WP_query($args);

							// create output
							if ($listing->have_posts()) :
								while ($listing->have_posts()) : $listing->the_post();
									echo '<li><a href="' . get_permalink() . '">'.get_the_title().'</a></li>';
								endwhile;
							endif;

							// reset the query
							wp_reset_postdata();
						  ?>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 item-destacados text-center">
              <a href="<?=home_url( $wp->request );?>/articulos/" style="overflow:hidden;">
                <?php
							global $post;
							
							//query subpages
							$args = array(
							'post_type' => 'articulos',
							'orderby' => 'date',
							'orderby' => 'desc',
							'posts_per_page' => 4
							);

							$listing = new WP_query($args);
							
							$countt = 0;
							
							while ($listing->have_posts()) : $listing->the_post();
								if($countt == 0){
									$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
									$imagethumb = $arr_image[0];
									echo '<img src="' . $imagethumb . '" alt="'.get_the_title().'" style="height:229px"/>';
								}
								$countt ++;
							endwhile;
						?>

              </a>
              <a href="<?=home_url( $wp->request );?>/articulos/" class="titulo"><h1>MUNDO PAREJAS</h1></a>
              <ul>
                <?php
							global $post;
							
							//query subpages
							$args = array(
							'post_type' => 'articulos',
							'orderby' => 'date',
							'orderby' => 'desc',
							'posts_per_page' => 4
							);

							$listing = new WP_query($args);

							// create output
							if ($listing->have_posts()) :
								while ($listing->have_posts()) : $listing->the_post();
									echo '<li><a href="' . get_permalink() . '">'.get_the_title().'</a></li>';
								endwhile;
							endif;

							// reset the query
							wp_reset_postdata();
						  ?>
              </ul>
            </div>
          </div>
          <div class="hidden-xs col-md-1">&nbsp;</div>
        </div>
      </div>
    </section>

    <!-- <section class="publicidad hidden-xs">
		<div class="container">
			<div class="banner-middle-720x300">
<!-- /22596825/Home_Middle_720x300 
<div id='div-gpt-ad-1459740034135-1' style='height:300px; width:720px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1459740034135-1'); });
</script>
</div>			
			</div>
		</div>
	</section>
	
	-->

    <section id="novedades" class="novedades">
      <div class="container">
        <div class="row">
          <div class="hidden-xs col-md-1">&nbsp;</div>
          <div class="col-md-12 col-md-10">
            <h1 class="novedades__title" >NOVEDADES</h1>
          </div>
          <div class="hidden-xs col-md-1">&nbsp;</div>
        </div>
        <div class="row show-grid">
          <div class="hidden-xs col-md-1">&nbsp;</div>
          <div class="col-md-12 col-md-10">
            <?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'novedades',
					'orderby' => 'date',
					'orderby' => 'desc',
					'posts_per_page' => 3
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
							echo '<div class="col-xs-12 col-sm-4 col-md-4 item-novedades text-center">';
							echo '<a href="' . get_permalink() . '" rel="nofollow"><img src="' . $imagethumb . '" alt="'.get_the_title().'"/></a>';
							echo '<a href="' . get_permalink() . '" class="titulo">'.get_the_title().'</a>';
							echo '</div>';
						endwhile;
					endif;

					// reset the query
					wp_reset_postdata();
				  ?>
          </div>
          <div class="hidden-xs col-md-1">&nbsp;</div>
        </div>
      </div>
    </section>

    <section class="publicidad hidden-xs">
      <div class="container">
        <div class="row">
          <div class="banner-footer-728x90">
            <!-- /22596825/Home_Footer_Skycrapper -->
            <div id='div-gpt-ad-1459740034135-0' style='height:90px; width:728px;'>
              <script type='text/javascript'>
                googletag.cmd.push(function () {
                  googletag.display('div-gpt-ad-1459740034135-0');
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>