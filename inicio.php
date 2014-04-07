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
	<div class="left" id="leftinicio">
	    <div class="span12" style="width: 500px;">
	      <div id="owl-demo" class="owl-carousel"> 

	        <?php global $switched; /* $switched es para hacer conexión a la base de datos */
			switch_to_blog(2); /* aquí especificamos el ID del blog de la red a la cual nos queremos conectar */ ?> 
				<!--Aquí escribimos lo que queremos hacer, en este caso yo estoy llamando una categoría que mostrara algunos 7 post-->
				<?php query_posts('category_name=noticias-principales&showposts=7'); ?> 
				<!--Abrimos la puerta para los elementos de la entrada-->
				<?php if (have_posts()) : ?> 
				<?php while (have_posts()) : the_post(); ?> 
					<a href="<?php the_permalink(); ?>">
					<div class="item">
						<?php the_post_thumbnail( array(500,380) ); ?>
						<div class="titulo"><h1><?php the_title(); ?></h1></div>
					</div>				
					</a>
				<?php endwhile; ?> 
				<?php endif; ?>
				<!--Cerramos la puerta-->
			<?php restore_current_blog(); ?> <!--cerramos la entrada al blog-->

	      </div>
	    </div>
	</div>

	<div class="rigth" id="inicioa">
		<ul id="iniciob">
			<li>
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/images/cosmeticos.jpg">
					<div class="titulo">
						<h1>Cosméticos</h1>
						<span>ver más</span>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/images/cuidadopersonal.jpg">
					<div class="titulo">
						<h1>Cuidado pesonal</h1>
						<span>ver más</span>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/images/cuidadoparaelhogar.jpg">
					<div class="titulo">
						<h1>cuidado para el hogar</h1>
						<span>ver más</span>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<img src="<?php bloginfo('template_directory'); ?>/images/dimisaconsumer.jpg">
					<div class="titulo">
						<h1>dimisa consumer</h1>
						<span>ver más</span>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<div class="egi">
		<div class="eventosi"><a href=""><span>Eventos</span> <img src="<?php bloginfo('template_directory'); ?>/images/finicio.png"></a></div>
		<div class="galeriai"><a href=""><span>Galería</span> <img src="<?php bloginfo('template_directory'); ?>/images/finicio.png"></a></div>
	</div>

	<div class="tituloh">
		<div class="heading-single text-center title-small title-color">
		<span>NUESTRAS MARCAS</span>
		</div>
	</div>
	<div id="marcas" class="owl-carousel">      
    	<?php query_posts('category_name=marcas-que-trabajamos&showposts=99999'); ?> 
		<?php if (have_posts()) : ?> 
		<?php while (have_posts()) : the_post(); ?> 
			<div>
				<?php the_post_thumbnail('full'); ?>
			</div>
		<?php endwhile; ?> 
		<?php endif; ?>	    	
	    
	</div>
</div>


 


<?php get_footer(); ?>