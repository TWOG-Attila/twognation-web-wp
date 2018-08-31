<?php
/**
 * Page Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TwogNation
 */

get_header();
?>

	<div id="primary" class="content-area">
		<section id="main" class="site-main">

            <div class="wrapper">

                <?php 
                    
                    $current_page = get_query_var('paged');

                    $news = new WP_Query(array(
                        'post_type' => 'post', 
                        'category_name' => 'News', 
                        'post_status' => 'publish', 
                        'posts_per_page' => 3,
                        'paged' => $current_page
                    ));
                    
                    if ( $news->have_posts() ) :

                        while ( $news->have_posts() ) : $news->the_post(); ?>
                            
                            <div class="single-news">

                                <?php twognation_post_thumbnail(); ?>
                            
                                <div class="excerpt">
                                    <a href="<?php echo the_permalink(); ?>">
                                        <h5><?php echo get_the_date('d.m.y'); ?></h5>
                                    </a>

                                    <a href="<?php echo the_permalink(); ?>">
                                        <h2><?php echo the_title(); ?></h2>
                                    </a>
                                    
                                    <a href="<?php echo the_permalink(); ?>">
                                        <div class="spotlight">
                                            <p><?php echo the_content(); ?></p>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        <?php endwhile; ?>
    
                        <div class="pagination">

                            <?php 
                                echo paginate_links(array(
                                    'total' => $news->max_num_pages,
                                    'prev_next' => false
                                ));
                            ?>

                        </div>

                        <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <h1 class="no-news"><?php _e( 'No news at the moment, stay tuned!' ); ?></h1>
                    <?php endif; 
                    
                ?>

            </div>

		</section><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
