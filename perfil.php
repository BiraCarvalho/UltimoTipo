<?php
/**
 * Template Name: Perfil
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
			'post_type'		=> 'page',
			'post_status'	=> 'publish',
			'post_parent'	=> 36,
			'orderby'		=> 'ID',
			'order'			=> 'ASC'
		);	
		
		$espetaculos = new WP_Query( $args_wpquery ); 

	?>


	<div class="hentry">

	    <h1>Os Tipos</h1>	
		
		<ul class="perfil" >
		
		<?php if($espetaculos->have_posts()): ?>		
			
			<?php while($espetaculos->have_posts()): ?>
		
				<?php $espetaculos->the_post(); ?>
				
				<li>
				
					<?php if($thumb = get_post_thumbnail_id( $post->ID )): ?>
						<?php $image_attributes = wp_get_attachment_image_src( $thumb, 'post-thumbnail' ); ?>
						<a class="foto" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
							<img src="<?php echo $image_attributes[0] ?>" width="250" height="250" title="<?php the_title(); ?>" />
							<span class="nome"><?php the_title(); ?></span> 
						</a>		
					<?php endif; ?>		
					
					
				
				</li>

			<?php endwhile; // end of the loop. ?>
		
		<?php endif ?>
		
		</ul>

	</div>

</div><!-- column-center -->
	
<div id="column-right">
	<?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	
</div><!-- column-right -->

<?php get_footer(); ?>
