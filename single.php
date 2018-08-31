<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TwogNation
 */

get_header();
?>

	<div id="primary" class="content-area">
		<section id="main" class="site-main">

			<?php
			if ( have_posts() ) : the_post(); ?>

				<div class="wrapper single-news-full">
		
					<div class="heading">
						<a class="back-to-blog" href="/twognation-blog">
							<h4>Back to</h4>
							<h4>blog</h4>
						</a>
						<h1><?php echo get_the_title(); ?></h1>
						<div>
							<h5><?php echo get_the_date("d.m.y"); ?></h5>
							<ul class="socials">
								<li>
									<a href="<?php echo 'http://www.facebook.com/sharer.php?u=' . get_the_permalink(); ?>" target="_blank">
										<i class="fab fa-facebook-f" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="<?php echo 'https://twitter.com/share?url=' . get_the_permalink(); ?>" target="_blank">
										<i class="fab fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="<?php echo 'http://www.linkedin.com/shareArticle?mini=true&amp;url=' . get_the_permalink(); ?>" target="_blank">
										<i class="fab fa-linkedin-in" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<?php twognation_post_thumbnail(); ?>

					<div class="content">
						<?php echo the_content(); ?>
					</div>

					<ul class="socials">
						<li>Share:</li>
						<li>
							<a href="<?php echo 'http://www.facebook.com/sharer.php?u=' . get_the_permalink(); ?>" target="_blank">
								<i class="fab fa-facebook-f" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo 'https://twitter.com/share?url=' . get_the_permalink(); ?>" target="_blank">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo 'http://www.linkedin.com/shareArticle?mini=true&amp;url=' . get_the_permalink(); ?>" target="_blank">
								<i class="fab fa-linkedin-in" aria-hidden="true"></i>
							</a>
						</li>
					</ul>

				</div>

			<?php endif; // End of the loop.
			?>

		</section><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
