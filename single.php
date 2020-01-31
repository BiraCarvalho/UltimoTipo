<?php

/**
 * The Template for displaying all single posts.
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

	/* Run the loop to output the post.

	 * If you want to overload this in a child theme then include a file

	 * called loop-single.php and that will be used instead.

	 */

	get_template_part( 'loop', 'single' );

?>

</div>

<div id="column-right">

    <?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	

</div>

<?php get_footer(); ?>