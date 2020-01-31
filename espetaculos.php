<?php
/**
 * Template Name: Espetáculos
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="column-center">
	
	<?php get_template_part('topo','page') ?>

	<?php 
						
		$args_wpquery = array(
			'post_type'	  => 'page',
			'post_status' => 'publish',
			'post_parent' => 1078
		);	
		
		$espetaculos = new WP_Query( $args_wpquery ); 

	?>


	<div class="hentry">

	    <h1>Espetáculos</h1>	
		
		<ul>
		
		<?php if($espetaculos->have_posts()): ?>		
			
			<?php while($espetaculos->have_posts()): ?>
		
				<?php $espetaculos->the_post(); ?>
				
				<?php wp_list_pages( array('title_li' =>get_the_title(),'child_of' => get_the_ID()) ); ?> 
			
			<?php endwhile; // end of the loop. ?>
		
		<?php endif ?>
		
		</ul>

	</div>

</div><!-- column-center -->
	
<div id="column-right">
	<?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	
</div><!-- column-right -->

<?php get_footer(); ?>
