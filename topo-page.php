	<div id="pagina-topo">	
	<?php if ( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'paginas-topo-thumb' ) ) : ?>
				
		<?php echo get_the_post_thumbnail( $post->ID );	?>	
	
	<?php else :	?>			
		
		<img src="<?php echo bloginfo('template_url')?>/images/topo-pagina.png" style="width:590px; height:170px;" alt="" />
	
	<?php endif; ?>
	</div>
