
<?php 

	$args = array(
		'post_type'  	 	=> 'page',
		'orderby' 	 		=> rand,
		'posts_per_page' 	=> 9,
		'post_parent__in' 	=> array(1752,1754)
	);
	
	$widget_espetaculos_query = new WP_Query( $args ); 
?>

<div id="widget-espetaculos">			

	<img src="<?php echo bloginfo('template_url') ?>/images/widget-espetaculos.png" width="220" height="170" alt="" />			

	<div class="container">

	<?php if ( $widget_espetaculos_query->have_posts() ) : ?> 

		<?php while ( $widget_espetaculos_query->have_posts() ) : ?> 

			<?php $widget_espetaculos_query->the_post(); ?>
		
            <a class="widget-item<?php the_ID()?>" href="<?php the_permalink(); ?>">			

			<?php if(metadata_exists('post',get_the_ID(),'_thumbnail_id')): ?>

				<?php the_post_thumbnail( 'espetaculos-thumb-interna', 'title="'.get_the_title().'"' ); ?>

			<?php else: ?>

				<img src="<?php echo bloginfo('template_url') ?>/images/widget-espetaculos-thumb-70x70.png" width="70" height="70" title="<?php the_title(); ?>" class="attachment-espetaculos-thumb-interna wp-post-image" />				

			<?php endif; ?>	

			</a>			 

		<?php endwhile; // end of the loop. ?>

	<?php endif; ?>

	</div><!-- .container -->

</div>

<div id="widget-agenda">
	<?php get_template_part( 'loop', 'agenda' ); ?>				
</div>
