<?php

/**
 * The loop that displays a page.
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

?>

<?php 

	$args = array(
        'post_type'      => 'tribe_events',
        'post_status'    => 'publish',
        'posts_per_page' => 4,
        'orderby'        => 'date', 
        'order'          => 'ASC',
		//'date_query'     => array(
		//						array(
		//							'after'     => strftime("%Y-%m-%d"),
		//							'inclusive' => true
		//						),
		//					)        
    );
    
    $posts_agenda = new WP_Query( $args );

?>

<div class="agenda-lista">

    <h1><a href="<?=home_url( '/events' ); ?>" >TIPO AGENDA</a></h1>

    <ul>

    <?php if ( $posts_agenda->have_posts() ) : ?>		

        <?php while ( $posts_agenda->have_posts() ) : ?>

            <?php $posts_agenda->the_post(); ?>

            <?php            

                $local_id = get_metadata('post',get_the_ID(),'_EventVenueID',true);                 
                $local  = '';
                $cidade = '';
                $estado = '';

                if($local_id!=0):
                    $local  = get_post($local_id);
                    $cidade = get_metadata('post',$local_id,'_VenueCity',true);
                    $estado = get_metadata('post',$local_id,'_VenueProvince',true);
                endif;

                $data = get_metadata('post',get_the_ID(),'_EventStartDate',true);                 

            ?>       

            <li>

                <a href="<?php the_permalink(); ?>">

                    <h2>
                       <?php if($cidade) echo $cidade; ?>
                       <?php if($cidade && $estado) echo ' | '; ?>
                       <?php if($estado) echo $estado; ?>
                    </h2>

                    <?php if($data):?>
                        <span class="horario"><?php echo strftime('%d/%m/%Y - %H:%M',strtotime($data)); ?></span>
                    <?php endif; ?>

                    <?php if($local):?>
                        <span class="local"><?php echo $local->post_title; ?></span>
                    <?php endif; ?>                                                                        

                    <span class="espetaculo"><?php the_title(); ?></span>

                </a>

            </li>		

        <?php endwhile; // end of the loop. ?>

    <?php endif ?>

    </ul>
</div>