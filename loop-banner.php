<?php



/**

 * Exibe galeria full-banner na home

 *

 * The loop displays the posts and the post content. See

 * http://codex.wordpress.org/The_Loop to understand it and

 * http://codex.wordpress.org/Template_Tags to understand

 * the tags used in it.

 *

 * This can be overridden in child themes with loop-page.php.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.2

 */





 	$args = array(

		'post_type'         => 'post',

		'category_name'     => 'banner-principal',

		'posts_per_page'    => -1

	);		



	$banner_query = new WP_Query( $args );



?>



<div id="banner-principal">

	

	<div class="container">



	<?php if ( $banner_query->have_posts() ): ?>



		<?php while ( $banner_query->have_posts() ) : ?> 



			<?php $banner_query->the_post(); ?>



				<?php 

					$thumb_id = get_post_thumbnail_id();

					$image_attributes = wp_get_attachment_image_src( $thumb_id, 'banner' ); 

				?>



				<div id="banner-<?php echo get_the_ID(); ?>">



		        	<a class="banner" href="<?php echo get_post_meta(get_the_ID(),'banner_url',true) ?>">

		                <img class="banner" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />

		            </a>



		        	<div id="banner-overlay"></div>



		            <div id="banner-label">                            

		                <h3><?php echo get_the_title(); ?></h3>

		                <p><?php the_content(); ?></p>

		            </div>



		        </div><!-- #banner-[ID] -->



		<?php endwhile; // end of the loop. ?>



	<?php endif; ?>

	</div><!-- .container -->		

	

	<a id="banner-button-left" >

		<img src="<?php echo bloginfo('template_url'); ?>/images/banner_button_left.png" />

	</a>



	<a id="banner-button-right">

		<img src="<?php echo bloginfo('template_url'); ?>/images/banner_button_right.png" />

	</a>



</div><!-- #banner-principal -->





<script type="text/javascript" >



	jQuery(function(){



		jQuery("#banner-principal > .container").cycle({

			pause: true,

			fx: 'fade',

			prev: '#banner-button-left',

			next: '#banner-button-right'

		});



	})



</script>











