# PÁGINA WEB - LUNA DE MIEL

Empresa peruana - TENDENZE Y ADRETAIL dedicada a publicidad y marketing omnicanal.
 
## Link de la página: 
https://www.lunademiel.com.pe/ 

echo '<div class="col-xs-12 col-sm-6 col-md-3 post-card">';
							echo '<a   href="' . get_permalink() . '"  ><img class="thumbnail"  src=" ' . $imagethumb . '" alt="'.get_the_title().'"/>';
							echo '<h2 class="title-list">'.get_the_title().'</h2>';
							echo '</a>'; 
							echo '</div>';
