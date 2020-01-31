<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?>



<?php get_header(); ?>



<div id="column-center">    

<?php //get_template_part('topo','page') ?>

<img src="<?php echo bloginfo('template_url')?>/images/topo-pagina.png" style="width:590px; height:170px;" alt="" />                       

<?php

/* Run the loop to output the page.

 * If you want to overload this in a child theme then include a file

 * called loop-page.php and that will be used instead.

 */

get_template_part( 'loop', 'page' );

?>

</div>

	

<div id="column-right">

    <?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	

</div>



<?php get_footer(); ?>

