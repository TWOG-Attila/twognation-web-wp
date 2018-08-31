<section id="blog">
  <h3>Blog</h3>

  <div class="news-feed wrapper">


    <?php $all_news = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'News',
        'posts_per_page' => 2
    )); 

    if ( $all_news->have_posts() ) : ?>

        <ul>
            <!-- the loop -->	 
            <?php while ( $all_news->have_posts() ) : $all_news->the_post(); ?>
                <li class="news-content">

                    <div class="news-image">
                        <a href="<?php the_permalink(); ?>">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </a>
                    </div>

                    <div class="news-excerpt">
                        
                        <div class="title">
                          <h2>  
                            <a href="<?php the_permalink(); ?>">
                              <?php the_title(); ?>
                            </a>
                          </h2>
                          <h5>
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_date('d.m.y'); ?>
                            </a>
                          </h5>
                        </div>

                        <a href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>

                    </div>

                </li>
            <?php endwhile; ?>
            <!-- end of the loop -->

        </ul>

        <?php wp_reset_postdata(); ?>

    <!-- empty template -->
    <?php else : ?>
        <ul>
            <li class="news-content">
                <div class="news-image">
                    <img class="aligncenter" src="/wp-content/uploads/2018/05/twog.jpg" alt="">
                </div>

                <div class="news-excerpt">
                    
                    <div class="title no-news">
                        <h2>No news at the moment, stay tuned!</h2>
                    </div>

                </div>
            </li>
        </ul>
    <?php endif; ?>

  </div>

  <div class="text-center">
    <a class="read-more" href="/twognation-blog">Read More</a>
  </div>
</section>