<div id="clients-partners">
  <div class="wrapper">
    <section class="partners">
      <div class="wrapper flex">				
        <div class="section-title">
          <h3>Partners<br>&Clients</h3>
        </div>
        <div class="members-wrapper">

          <?php $all_partners_and_clients = new WP_Query(array(
            'post_type' => 'post',
            'category_name' => 'Partners And Clients',
            'post_status' => 'publish',
            'posts_per_page' => -1));

            if ( $all_partners_and_clients->have_posts() ) : ?>

              <ul class="members">
                <?php while ( $all_partners_and_clients->have_posts() ) : $all_partners_and_clients->the_post(); ?>
                  <li>
                    <a href="<?php echo get_the_content(); ?>" target="_blank">
                        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>

            <?php else : ?>

              <ul class="members">
                <li class="no-members">
                  <h2>Comming soon!</h2>
                </li>
            </ul>

            <?php endif; 

          wp_reset_postdata(); ?>
        </div>
      </div>
    </section>  
  </div>
</div>
