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

       </style>
</head>

<body>
	
 <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td width="200" align="left" valign="middle" bgcolor="#ffffff" style="border-collapse:collapse">
            <a href="http://www.lunademiel.com.pe/" style="color:black;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.lunademiel.com.pe/&amp;source=gmail&amp;ust=1573673889422000&amp;usg=AFQjCNGuFK8d-y_3p8JSRknw05B536qhdg">
              <img src="https://ci6.googleusercontent.com/proxy/PjCiv6oRAanBBTSPl8dn1xA5fvh9x6SX6csYxSWa0oT9dO8mknfyoJL1IFyzkw851VSekHb3qR5GOd4CIhA6yqh7jLRNaSkRzH3fcJVGLEeur57uGA=s0-d-e1-ft#http://lunademiel.com.pe/wp-content/uploads/2019/01/lunaDeMiel.png" width="104" height="auto" alt="" class="CToWUd">
            </a>
          </td>
          <td width="400" colspan="2" align="right" valign="middle" style="border-collapse:collapse;font-family:Prelo;font-size:14px;font-weight:bold;letter-spacing:1px;height:80px">
            <span style="color:#eb3d82">ESPECIAL </span> &nbsp;OCTUBRE &gt;
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
		


	   <tr>

	   			<?php
					global $post;
					
					//query subpages
					$args = array(
					'post_type' => 'agendasemanal',
					'orderby' => 'date',
					'order' => 'desc',
					'post_status' => 'publish',
					'posts_per_page' => 3
					);

					$listing = new WP_query($args);

					// create output
					if ($listing->have_posts()):
						while ($listing->have_posts()) : $listing->the_post(); ?>
							<td width="200" align="center" style="border-collapse:collapse;text-align:left" valign="top" >
								<a href="http://localhost:8080/wordpress/magazino/agendas/el-estreno-mas-esperado/" style="color:black;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://localhost:8080/wordpress/magazino/agendas/el-estreno-mas-esperado/&amp;source=gmail&amp;ust=1573673889422000&amp;usg=AFQjCNGKz8we5bjzJDLP2oorRRZNT3y6Lw">
								<img src="<?php echo main_image_url('full'); ?>" alt="ww" width="190" height="260">
								<p width="200" style="margin:0;padding:0;margin-bottom:0;padding-right:10px!important;font-family:Prelo SemiBold;color:#eb3d82;font-size:14px;text-align:center;padding:3px 0">
									- entretenimiento -</p>
								<h1 style="color:black;line-height:100%;padding-right:10px!important;font-family:Times New Roman;font-size:20px;font-weight:200;text-align:center;margin:2px 0;line-height:1.2">
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
 
 
        <tr>
          <td width="600" height="28" align="center" colspan="3" valign="middle" style="border-collapse:collapse"></td>
        </tr>
        
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
					'offset' => 2
					);

					$listing = new WP_query($args);

					// create output
					if ($listing->have_posts()):
						while ($listing->have_posts()) : $listing->the_post(); ?>
							<td width="200" align="center" style="border-collapse:collapse;text-align:left" valign="top" >
								<a href="http://localhost:8080/wordpress/magazino/agendas/el-estreno-mas-esperado/" style="color:black;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://localhost:8080/wordpress/magazino/agendas/el-estreno-mas-esperado/&amp;source=gmail&amp;ust=1573673889422000&amp;usg=AFQjCNGKz8we5bjzJDLP2oorRRZNT3y6Lw">
								<img src="<?php echo main_image_url('full'); ?>" alt="ww" width="190" height="260">
								<p width="200" style="margin:0;padding:0;margin-bottom:0;padding-right:10px!important;font-family:Prelo SemiBold;color:#eb3d82;font-size:14px;text-align:center;padding:3px 0">
									- entretenimiento -</p>
								<h1 style="color:black;line-height:100%;padding-right:10px!important;font-family:Times New Roman;font-size:20px;font-weight:200;text-align:center;margin:2px 0;line-height:1.2">
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
          <td width="200" align="right" valign="top" style="border-collapse:collapse;border-collapse:collapse;border:none" cellpadding="0" cellspacing="0">
            <a href="http://www.lunademiel.com.pe/proveedores/" style="color:black;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.lunademiel.com.pe/proveedores/&amp;source=gmail&amp;ust=1573673889423000&amp;usg=AFQjCNFhkN0DUM5kqqjNTSUPQWhpyGihjQ">
              <img src="https://ci6.googleusercontent.com/proxy/eTUATc6SNdrxfshV73kIyqfCwA3vHrn6653_H-5b6Nbe1cpcx7LY6Yfn7F0wGKcfN1xj-4_8Ty0SSV0W6DatylQQKkgd6pzONOZU=s0-d-e1-ft#http://lunademiel.com.pe/emailing/2019/3-marzo/29/mi.png" width="195" height="auto" style="border:0;display:block" alt="" class="CToWUd">
            </a>
          </td>
        </tr>
        <tr>
          <td width="400" height="10" align="right" colspan="3" valign="middle" style="border-collapse:collapse"></td>
        </tr>
        <tr>
          <td width="400" align="right" colspan="2" valign="middle" style="border-collapse:collapse"></td>
          <td width="200" align="center" valign="top" style="border-collapse:collapse">
            <a href="https://www.facebook.com/portallunademiel/" style="color:black;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/portallunademiel/&amp;source=gmail&amp;ust=1573673889423000&amp;usg=AFQjCNEh83o5FDdUxI5IWB_SxI6pCx5g4A">
              <img src="https://ci3.googleusercontent.com/proxy/_e-NyrS30xD4Lrn45kf6qb04zYAWCMMSpf0cgOGC4_fWe4-ON9B0mnvdqvxlD5tL_Rh717_oHmK9FxWGOedH3o4tqCSKdRmaHeQpXuavKgLY=s0-d-e1-ft#http://lunademiel.com.pe/emailing/2019/3-marzo/29/facebook.png" width="190" height="auto" alt="" class="CToWUd">
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
