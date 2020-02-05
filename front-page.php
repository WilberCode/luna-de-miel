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

<div class="container">
    <div class="row">
      <!-- Main -->
        <div id="destacados" class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
           <div class="box-agenda" style="background:url(<?php echo $foto_agenda_semanal['guid']; ?>) center center no-repeat;">
              <dl class="box-destacado text-center">
                <dt>
                  <a href="<?php echo home_url( $wp->request );?>/agenda-semanal/">
                    <h2>AGENDA ROMÁNTICA</h2> 
                  </a>
                </dt>
                <dd> 
                </dd>
              </dl>
            </div>
            <div class="box-promociones box-agenda " style="background:url(<?php echo $foto_promociones['guid']; ?>) center center no-repeat;" >
              <dl class="box-destacado text-center">
              <dt> 
                <a href="<?php echo home_url( $wp->request );?>/promociones"><h2>PROMOCIONES</h2></a> 
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
        <!-- Sidebar -->
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
            <div class=" search-front-page-wrap" > 
                <div class="search-front-page">
                  <?php get_search_form(true);?>
                </div> 
            </div>
            <?php get_template_part("/template-part/sidebar/sidebar-home") ;?>  
    </div>
</div>

    <section  id="destacados"  >
      <div class="container"> 
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
									echo '<img src="' . $imagethumb . '" alt="'.get_the_title().'"/>';
								}
								$countt ++;
							endwhile;
						?>
                <h2  class="titulo" >VIAJES</h2>
              </a>
              <!-- <a href="/viajes/" class="titulo"><h2>VIAJES</h2></a>   -->
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
                                echo '<img src="' . $imagethumb . '" alt="'.get_the_title().'"/>';
                              }
                              $countt ++;
                            endwhile;
                          ?>
                 <h2 class="titulo" >BODAS</h2>
            </a>
              <!-- <a href=" /entrevistas/" class="titulo"><h2>BODAS</h2></a> -->
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
									echo '<img src="' . $imagethumb . '" alt="'.get_the_title().'"/>';
								}
								$countt ++;
							endwhile;
						?> 
              <h2 class="titulo">MUNDO PAREJAS</h2>
              </a>
              <!-- <a href=" /articulos/" class="titulo"><h2>MUNDO PAREJAS</h2></a> -->
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
            <h2 class="novedades__title" >NOVEDADES</h2>
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
							echo '<a href="' . get_permalink() . '" ><img src="' . $imagethumb . '" alt="'.get_the_title().'"/> <h2 class="titulo" >'.get_the_title().'</h2> </a>'; 
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

  