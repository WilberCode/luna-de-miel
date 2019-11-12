<header><meta http-equiv="Content-Type" content="text/html; charset=gb18030"> 
 <?php get_header();?>
</header>
<main   style=" width:60%;padding-left:20%;">
<h3 style="font-family:Prelo SemiBold; color: #EB3D82; font-size: 15px; text-align: center">-imperdibles-</h3>
<h2  style=" text-align: center; font-family: Times New Roman; font-size: 35px; ">3 eventos para escapar de lo
tradicional y relajarte.</h2>
 <?php if ( have_posts() ) : // Verifica si hay publicaciones para mostrar ?>
 

 <?php while ( have_posts() ) : the_post(); //El Loop ?>
 <h2>
 <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
 <h3 style=" text-align: center; font-family: Times New Roman; font-size: 25px;color: black !important;"><?php the_title(); ?></h3>
 </a>
 </h2>
 <?php the_content(); ?> 
 <?php endwhile; ?>
 <?php else: ?>
 <p>lo sentimos, ningun texto coincide con tu Criteria.</p>
 <?php endif; ?>
</main>
<footer>
<?php get_footer(); ?>
</footer>