<?php
/*
Template Name: Contacto
*/
?>
<!-- Cargame los scrips de wpcf7 solo en esta pagina -->
<!-- http://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/ -->
<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="formulario">
    <!-- formulario y muestras -->
    <?php echo do_shortcode('[contact-form-7 id="506" title="Muestras ESP"]'); ?>
    
    <!-- personas de contacto -->
    <div class="formulario__contacto">
        <dl>
        <dt>NACIONAL Y EXPORTACION</dt>
        <dd>JAVIER ROCA</dd>
        <dd>+ 34 655 813 842</dd>
        <dd><a href="mailto:info@fkrquimica.com" class="btn btn--primary">info@fkrquimica.com</a></dd>
        </dl>

        <dl>
        <dt>PORTUGAL</dt>
        <dd>ISMAEL CARDONA</dd>
        <dd>+ 34 655 813 840</dd>
        <dd><a href="mailto:ismaelcardona52@gmail.com" class="btn btn--primary">ismaelcardona52(a)gmail.com</a></dd>
        </dl>
        
    </div>
</div>
    
    <?php echo do_shortcode( '[vegas id=1076 fade="2500" delay ="4500" overlay="/wp-content/themes/fkrquimica/assets/img/overlays/04.png" arrows="yes" autoplay="yes" poster="yes" random="yes"]' ); ?>

    <!-- mapa -->
    <?php echo do_shortcode('[mappress mapid="1" width="100%"]'); ?>