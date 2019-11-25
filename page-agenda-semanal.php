 <?php  
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 * 
 */
/** 
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
	<section id="main" class="clearfix">
		<div class="container">
			<div class="col-xs-12 col-md-12">
				<?php edit_post_link(__('Edit this entry','html5reset'), '<span>', '</span>'); ?>
				<h2><?php the_title(); ?></h2>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<?php 
					$promolist = get_terms( 'agenda', array('hide_empty' => false,'orderby'=>'count','order'=>'desc') );
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
				<div class="listing">
				<?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'agendasemanal',
					'orderby' => 'date',
					'order' => 'desc',
					'post_status' => 'publish',
					'posts_per_page' => -1
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
							echo '<div class="col-xs-12 col-sm-6 col-md-3 show-grid">';
							echo '<a href="' . get_permalink() . '" rel="nofollow" class="thumbnail"><img src="' . $imagethumb . '" alt="'.get_the_title().'"/>';
							echo '</a>';
							echo the_category(' - ');
							echo '<a href="' . get_permalink() . '" class="title-list">'.get_the_title().'</a>';
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
<?php
 get_footer(); 
?>
*/?> 
<!doctype html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Luna de miel</title>

<style type="text/css">

                /****** EMAIL CLIENT BUG FIXES - BEST NOT TO CHANGE THESE ********/

                        .ExternalClass {width:100%;} /* Forces Outlook.com to display emails at full width */

                        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                            line-height: 100%;
                            }  /* Forces Outlook.com to display normal line spacing, here is more on that:
                            http://www.emailonacid.com/forum/viewthread/43/
                            */

                        body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;} /* Prevents Webkit and Windows Mobile
                        platforms from changing default font sizes. */

                        body {margin:0; padding:0;} /* Resets all body margins and padding to 0 for good measure */

                        table td {border-collapse:collapse;}
                        /*This resolves the Outlook 07, 10, and Gmail td padding issue.  Heres more info:
                                http://www.ianhoar.com/2008/04/29/outlook-2007-borders-and-1px-padding-on-table-cells
                                http://www.campaignmonitor.com/blog/post/3392/1px-borders-padding-on-table-cells-in-outlook-07
                                */

                /****** END BUG FIXES ********/

                /****** RESETTING DEFAULTS, IT IS BEST TO OVERWRITE THESE STYLES INLINE ********/

                        p {margin:0; padding:0; margin-bottom:0;}
                                /* This sets a clean slate for all clients EXCEPT Gmail.
                               From there it forces you to do all of your spacing inline during the development process.
                               Be sure to stick to margins because paragraph padding is not supported by Outlook 2007/2010
                               Remember: Outlook.com does not support "margin" nor the "margin-top" properties.
                               Stick to "margin-bottom", "margin-left", "margin-right" in order to control spacing
                               It also doesnt hurt to set the inline top-margin to "0" for consistancy in Gmail for every instance of a
                               paragraph tag (see our paragraph example within the body of this template)

                               Another option:  Use double BRs instead... of paragraphs */

                       h1, h2, h3, h4, h5, h6 {
                           color: black;
                           line-height: 100%;
                           }  /* This CSS will overwrite Outlook.com's default css and make your headings appear consistant with Gmail.
                           From there, you can overwrite your styles inline if needed.  */

                       a, a:link {
                           color:black;
                           text-decoration:none;
                           }  /* This is the embedded CSS link color for Gmail.  This will overwrite Outlook.com and Yahoo Beta's
                           embedded link colors and make it consistent with Gmail.  You must overwrite this color inline */

               /****** END RESETTING DEFAULTS ********/

			   .post-firstrow tr td img, .post-firstsecond tr td img{
					object-fit:cover;
			   }
			   .post-firstrow tr td:nth-child(1)  {
					text-align: left !important;
				}	
				.post-firstrow tr td:nth-child(1)  h1, .post-firstrow tr td:nth-child(1)  p  {
					padding-right:10px!important;  
				}	   
				.post-firstrow tr td:nth-child(3)  h1, .post-firstrow tr td:nth-child(3)  p  {
					padding-left:10px!important;  
				}	   
				.post-firstrow tr td:nth-child(2)   {
					text-align: center !important;
				}	   
				.post-firstrow tr td:nth-child(3){
					text-align: right !important;
				}	   
				.post-firstsecond tr td:nth-child(1){
					text-align: left !important;
				}	
				.post-firstsecond tr td:nth-child(1) h1,.post-firstsecond tr td:nth-child(1) p {
						padding-right:10px!important;  
				}	  
				.post-firstsecond tr td:nth-child(2){
					text-align: center !important;
				}	  
       </style>
</head>

<body>
	
 <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td width="200" align="left" valign="middle" bgcolor="#ffffff" style="border-collapse:collapse">
            <a href="http://www.lunademiel.com.pe/" style="color:black;text-decoration:none" target="_blank" >
              <img src="http://lunademiel.com.pe/wp-content/uploads/2019/01/lunaDeMiel.png" width="104" height="auto" alt="Luna de miel agenda" >
            </a>
          </td>
          <td width="400" colspan="2" align="right" valign="middle" style="text-transform:uppercase;border-collapse:collapse;font-family:Prelo;font-size:14px;font-weight:bold;letter-spacing:1px;height:80px">
            <span style="color:#eb3d82" >ESPECIAL </span> &nbsp; <?   echo  date_i18n( 'F ', strtotime( get_the_time( "m" ) ) ); ?>  &gt;
			</td>
        </tr>
        <tr>
          <td width="600" colspan="3" align="right" valign="top" style="border-collapse:collapse;font-family:Didot;letter-spacing:1px;font-size:54px;font-style:italic">
            #AgendaRomántica
			</td>
        </tr>
        <tr>
          <td width="600" align="right" colspan="3" valign="middle" style="border-collapse:collapse;font-family:Prelo;font-size:13px;letter-spacing:1px">
            Ideas para romper la rutina y disfrutar toda la semana
			</td>
        </tr>
        <tr>
          <td width="600" height="15" align="right" colspan="3" valign="middle" style="border-collapse:collapse"></td>
        </tr>
        <tr>
          <td width="600" height="1" align="right" colspan="3" valign="middle" style="border-collapse:collapse;background-color:#eb3d82"></td>
        </tr>
        <tr>
          <td width="600" height="10" align="right" colspan="3" valign="middle" style="border-collapse:collapse"></td>
		</tr>  

		<!-- First row with 3 posts -->
	   <tr>
			<td width="600" colspan="3"  >  
			 <table border="0"  cellpadding="0" cellspacing="0" class="post-firstrow">
						   <tr> 
						   	<?php
					global $post;
					 
					$args = array(
					'post_type' => 'agendasemanal',
					'orderby' => 'date',
					'order' => 'desc',
					'post_status' => 'publish',
					'posts_per_page' => 3
					);
					$first_number = 1; 
					$listing = new WP_query($args);   
					// create output
					if ($listing->have_posts()):
						while ($listing->have_posts()) : $listing->the_post();  
						?>
							<?php 
							$terms_slugs_string = '';
							$terms = get_the_terms( $post->ID, 'agenda' );
							if ( $terms && ! is_wp_error( $terms ) ) {                
								$term_slugs_array = array();
								foreach ( $terms as $term ) {
									$term_slugs_array[] = $term->slug;
								}
								$terms_slugs_string = join( " & ", $term_slugs_array ); 
							} 
							?>
							<td width="200" align="<?php

							 	if($first_number == 1 ){ echo 'left'; } else if($first_number == 3){ echo 'right';}else{echo 'center';}

							 ?>" style="border-collapse:collapse" valign="top" >
							 
								 

								<a href="<?php the_permalink();?>" style="color:black;text-decoration:none" >
								<img src="<?php if(main_image_url('full')){echo  main_image_url('full');}else{echo  get_template_directory_uri()."/_/images/thumb-default.jpg"; } ?>" alt="<?php the_title(); ?>" width="190" height="260">
								<p width="200" style="margin:0;padding:0;margin-bottom:0;font-family:Prelo SemiBold;color:#eb3d82;font-size:14px;padding:3px 0;text-align:center;<?php

							 	if($first_number == 1 ){ echo 'padding-right: 10px!important;'; } else if($first_number == 3){ echo 'padding-left: 10px!important;';}else{echo '';}

							 ?>">
									- <?php if($terms_slugs_string !== "" ) { echo $terms_slugs_string;} else { echo "actividades";} ?> -</p>     
								

								<h1 style="color:black;line-height:100%;font-family:Times New Roman;font-size:20px;font-weight:200;margin:2px 0;line-height:1.2;text-align:center;<?php

							 	if($first_number == 1 ){ echo 'padding-right: 10px!important;'; } else if($first_number == 3){ echo 'padding-left: 10px!important;';}else{echo '';}
								$first_number++;
							 ?>">
							<?php the_title(); ?>		 
							</h1>
								</a>
							</td>
							<?php
						endwhile;
					endif; 
					// reset the query
					wp_reset_postdata();
				  ?>	
						   </tr>
			 </table>
			</td>
	   		  
        </tr>
  
        <tr>
          <td width="600" height="28" align="center" colspan="3" valign="middle" style="border-collapse:collapse"></td>
        </tr>
        <!-- Second row with 2 posts -->
        <tr>
		<td width="600" colspan="3"  >  
			 <table border="0"  cellpadding="0" cellspacing="0" class="post-firstsecond">
				<tr>
						<?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'agendasemanal',
					'orderby' => 'date',
					'order' => 'desc',
					'post_status' => 'publish',  
					'posts_per_page' => 2,
					'offset' => 3
					);

					$listing = new WP_query($args);
					$second_number = 1; 
					// create output
					if ($listing->have_posts()):
						while ($listing->have_posts()) : $listing->the_post(); ?>
						<?php 
							$terms_slugs_string = '';
							$terms = get_the_terms( $post->ID, 'agenda' );
							if ( $terms && ! is_wp_error( $terms ) ) {                
								$term_slugs_array = array();
								foreach ( $terms as $term ) {
									$term_slugs_array[] = $term->slug; 
								}
								$terms_slugs_string = join( " ", $term_slugs_array ); 
							} 
							?>
							<td width="200" align="<?php

							 	if($second_number == 1 ){ echo 'left';}else{echo 'center';}

							 ?>" style="border-collapse:collapse;" valign="top" >
								<a href="<?php the_permalink();?>" style="color:black;text-decoration:none"  >
								<img src="<?php if(main_image_url('full')){echo  main_image_url('full');}else{echo  get_template_directory_uri()."/_/images/thumb-default.jpg"; } ?>" alt="<?php the_title(); ?>" width="190" height="260">
								<p width="200" style="margin:0;padding:0;margin-bottom:0;font-family:Prelo SemiBold;color:#eb3d82;font-size:14px;padding:3px 0;text-align:center;
								<?php if($second_number == 1 ){ echo 'padding-right: 10px!important;'; }else{echo '';} ?>"> - <?php if($terms_slugs_string !== "" ) { echo $terms_slugs_string;} else { echo "actividades";} ?> -</p>
								<h1 style="color:black;line-height:100%;font-family:Times New Roman;font-size:20px;font-weight:200;margin:2px 0;line-height:1.2;text-align:center;
								<?php if($second_number == 1 ){ echo 'padding-right: 10px!important;'; }else{echo '';} ?>">
							<?php the_title(); $second_number++; ?>		 
							</h1>
								</a>
							</td>
							<?php
						endwhile;
					endif;

					// reset the query
					wp_reset_postdata();
				  ?>	
				   <td width="200" align="right" valign="top" style="border-collapse:collapse;border-collapse:collapse;border:none" cellpadding="0" cellspacing="0">
						<a href="http://www.lunademiel.com.pe/proveedores/" style="color:black;text-decoration:none"   >
						<img src="https://lunademiel.com.pe/emailing/2019/3-marzo/29/mi.png" width="195" height="auto" style="border:0;display:block" alt="" >
						</a>
					</td>
				</tr>
				
			 </table>
			</td> 
        </tr>
        <tr>
          <td width="400" height="10" align="right" colspan="3" valign="middle" style="border-collapse:collapse"></td>
        </tr>
        <tr>
          <td width="400" align="right" colspan="2" valign="middle" style="border-collapse:collapse"></td>
          <td width="200" align="center" valign="top" style="border-collapse:collapse">
            <a href="https://www.facebook.com/portallunademiel/" style="color:black;text-decoration:none"   >
              <img src="https://lunademiel.com.pe/emailing/2019/3-marzo/29/facebook.png" width="190" height="auto" alt="" >
            </a>
          </td>
        </tr>
        <tr>
          <td style="border-collapse:collapse">
            <hr style="border-top:1px solid #eeeeee;border-bottom:0px">
          </td>
        </tr>
        <tr>
          <td colspan="6" style="border-collapse:collapse;font:normal normal 10px/12px Arial,sans-serif;color:#666666;text-align:left">
            <p style="margin:0;padding:0;margin-bottom:0">Te enviamos este e-mail a !email porque elegiste recibir nuestra información.</p>
            <p style="margin:0;padding:0;margin-bottom:0">En cumplimiento de la Ley 29733 Ley de Protección de Datos Personales y su Reglamento N° 003-2013 JUS autorizo
					y otorgo expresamente al Portal Luna de Miel mi consentimiento libre, expreso, inequívoco e informado para hacer
					uso y tratar los datos personales que le proporcione a través de su web o eventos de bodas, viajes así
					como de la información que se derive de su uso, incluida aquella que resulte de la navegación que el suscrito
					realice en nuestro sitio web, en adelante la Información. El tratamiento de la información tiene como
					finalidad: la ejecución de la relación contractual con el Portal Luna de Miel, la creación de perfiles
					personalizados y la adecuación de ofertas comerciales a mis características particulares. Conozco que
					puedo ejercer, conforme a la Ley, los derechos de información, acceso, actualización, inclusión,
					rectificación, supresión y oposición sobre mis datos personales, enviando una comunicación
					a la siguiente dirección de correo electrónico:
					<a href="mailto:contacto@lunademiel.com.pe" style="color:black;text-decoration:none;color:#ff3787" target="_blank">contacto@lunademiel.com.pe</a> o solicitando ser removido de la lista.</p>
          </td>
        </tr>
      </tbody>
    </table>
</body>
</html>
