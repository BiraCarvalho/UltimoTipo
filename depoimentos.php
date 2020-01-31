<?php
/**
 * Template Name: Depoimentos
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
	
	<?php //get_template_part('topo','page') ?>

	<img src="<?php echo bloginfo('template_url')?>/images/topo-pagina.png" style="width:590px; height:170px;" alt="topo do conteúdo" />
	

	<?php

	/* Run the loop to output the page.

	 * If you want to overload this in a child theme then include a file

	 * called loop-page.php and that will be used instead.

	 */

	get_template_part( 'loop', 'page' );

	?>


	<?php 
		
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		$hash  = rand(10,100);
				
		$args_wpquery = array(
			'post_type'		 => 'post',
			'post_status'	 => 'publish',
			'category_name'	 => 'noticias',	
			//'posts_per_page' => 2,
			'paged' 		=> $paged,
		);	
		
		$posts_noticias = new WP_Query( $args_wpquery ); 

		$args_paginate = array(
			'base'     	=> str_replace( $hash, "%#%", esc_url( get_pagenum_link( $hash ) ) ),
			'format'  	=> '/paged/%#%',
			'current'	=> $paged,
			'total'		=> $posts_noticias->max_num_pages,
			'type'		=> 'list',
			'prev_text' => '«',
			'next_text' => '»',
		);		
	?>
	
	<ul class="lista-posts">
	<?php if ( $posts_noticias->have_posts() ) : ?>		
		<?php while ( $posts_noticias->have_posts() ) : ?>
	
			<?php $posts_noticias->the_post(); ?>
		
			<li>
				<?php if($thumb = get_post_thumbnail_id( $post->ID )): ?>
					<?php $image_attributes = wp_get_attachment_image_src( $thumb, 'thumbnail' ); ?>
					<img src="<?php echo $image_attributes[0] ?>" width="120" height="120" title="<?php the_title(); ?>" />		
				<?php endif; ?>

				<div class="texto <?php if($thumb) echo 'com_imagem'; ?>">
					<h2><?php the_title(); ?></h2>
					<span class="data"> <?php the_time(get_option('date_format')); ?></span>				
					<?php the_excerpt(); ?>
				</div>
			</li>	
		
		<?php endwhile; // end of the loop. ?>
	<?php endif ?>
	</ul>
	
	<?php echo paginate_links($args_paginate); ?>
	
</div><!-- column-center -->
	
<div id="column-right">
	<?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	
</div><!-- column-right -->

<?php get_footer(); ?>
