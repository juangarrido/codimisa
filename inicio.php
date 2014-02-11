<?php
/*
Template Name: Inicio
*/
?>
<?php get_header(); ?>
<div id="fondo">
<div id="socializa">
	<div id="titulo">Socioaliza con nosotros</div>
	<div id="redes">
		<ul>
			<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" ></a></li>
			<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" ></a></li>
			<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" ></a></li>
		</ul>
	</div>
</div>
<div id="cinicio">
	<div class="left">
    <div class="span12" style="width: 500px;">
      <div id="owl-demo" class="owl-carousel"> 

        <div class="item"><img src="http://construyendoideas.com/codimisa/wp-content/uploads/2014/02/Codimisa_inicio_v2.png"></div>
        <div class="item"><img src="http://construyendoideas.com/codimisa/wp-content/uploads/2014/02/Codimisa_inicio_v2.png"></div>
        <div class="item"><img src="http://construyendoideas.com/codimisa/wp-content/uploads/2014/02/Codimisa_inicio_v2.png"></div>

      </div>
    </div>

	<div class="rigth">
		<?php global $switched; /* $switched es para hacer conexión a la base de datos */
		switch_to_blog(2); /* aquí especificamos el ID del blog de la red a la cual nos queremos conectar */ ?> 
			<!--Aquí escribimos lo que queremos hacer, en este caso yo estoy llamando una categoría que mostrara algunos 7 post-->
			<?php query_posts('category_name=noticias-principales&showposts=7'); ?> 
			<!--Abrimos la puerta para los elementos de la entrada-->
			<?php if (have_posts()) : ?> 
			<?php while (have_posts()) : the_post(); ?> 
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			    <?php the_content(); ?> 
				<?php the_post_thumbnail( array(100,100) ); ?>
				</a>
			<?php endwhile; ?> 
			<?php endif; ?>
			<!--Cerramos la puerta-->
		<?php restore_current_blog(); ?> <!--cerramos la entrada al blog-->
	</div>
</div>



<?php get_footer(); ?>