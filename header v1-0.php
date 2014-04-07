<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>CODIMISA</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>


<!-- SCROOL TOP -->
<script type="text/javascript">

    $(document).ready(function(){
        //nos desplazamos entre todos los divs
        $('a.ancla').click(function(e){
        e.preventDefault();
        enlace  = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(enlace).offset().top
        }, 1000);
        });
        //vamos al principio o al final de la página
        $('a.arriba').click(function(e){
        e.preventDefault();
        volver  = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(volver).offset().top
        }, 400);
        });
        //pasando la cantidad de pixeles que queremos a scrollTop
        $('.prueba').click(function(){
            $('html, body').animate({scrollTop:50}, 1000); return false;
        });
    });
</script>


    <link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/acordeon.css" rel="stylesheet">
<!-- SCROOL TOP -->
</head>
<body>
<div id="fondo">
<a href="#abajo" id="arriba" class="arriba"></a>

    <header>
        <div id="contenedor">
            <div id="header">
                <div class="logo"><a href="http://construyendoideas.com/codimisa/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a></div>
            </div>
            <div id="horario">
                <?php
                    $consulta = "SELECT * FROM `jnq_options` WHERE `option_id` = 83";
                    $respuesta = mysql_query($consulta);
                    while($fila = mysql_fetch_array($respuesta)){
                        echo $fila["option_value"];
                } ?>

                <form role="search" method="get" id="search" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" value="" name="s" id="s" placeholder="Buscar" />
                </form>

            </div>
        </div>
    </header>
    <div id="fondomenu"></div>
    <nav>
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
        <?php wp_nav_menu( array(
                'container' => 'nav',
                'fallback_cb' => 'starkers_menu',
                'theme_location' => 'primary'
            ) );
        ?>
    </nav>