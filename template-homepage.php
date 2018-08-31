<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TwogNation
 */

get_header();
?>

    <section id="hero-banner">
      <div class="inscription">
        <h1>Everything esports.</h1>
        <h2>TwogNation is an esports focus holding company creating a
           1-stop-solution for gamers and industry stakeholders.</h2>
        <h3>Our projects</h3>
        <a class="scroller" href="#twoghub">
          <div class="scroll-icon"></div>
        </a>
      </div>
   </section>

  <section id="twoghub">

    <div class="project wrapper">
      <div class="info">
        <h1>TwogHub</h1>
        <h4>is a competitive gaming aggregator platform providing unique features for gamers and industry stakeholders</h4>
        <div class="link-logo">
          <div>
            <a style="margin-bottom: 20px;" href="https://www.twoghub.com/" target="_blank">GO TO HUB</a> 
            <a href="https://www.twoghub.io/" target="_blank">LEARN MORE</a> 
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/twoghub.svg" alt="TwogBiz">
        </div>
      </div>

      <div class="macbook-slider-container">
        <img class="macbook-image" src="<?php echo get_template_directory_uri(); ?>/assets/macbook-slider-stage.png">
        <img class="ipad-image" src="<?php echo get_template_directory_uri(); ?>/assets/ipad-slider-stage.png">
        <div class="slider-container">
          <div class="ba-slider">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/passport-screen.jpg">       
            
            <div class="resize">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/tournament-screen.jpg">
            </div>
            
            <span class="handle"></span>
          </div>
          
        </div>
      </div>

    </div>

  </section>

  <section id="twogbiz">
    <div class="project wrapper">  
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/biz-graphics.png" alt="TwogBiz">
      </div>

      <div class="info">
        <h1>TwogBiz</h1>
        <h4>is an esports advisory agency providing full-cycle solutions for industry stakeholders – from strategy development to execution</h4>
        <div class="link-logo">
          <a href="https://twogbiz.com/" target="_blank">VISIT WEBSITE</a> 
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/twogbiz.svg" alt="TwogBiz">
        </div>
      </div>
    </div>
  </section>

  <section id="twognews">
    <div class="project wrapper">
      <div class="info">
        <h1>TwogNews</h1>
        <h4>is an esports aggregator, which allows user to consume content in a customized and short format</h4>
        <div class="link-logo">
          <a>COMING SOON</a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/twognews.svg" alt="TwogNews">
        </div>
      </div>

      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/news-graphics.png" alt="TwogNews">
      </div>
    </div>
  </section>

  <?php  get_template_part( 'template-parts/our-team' ) ?>

  <?php  get_template_part( 'template-parts/news-feed' ) ?>

  <?php get_template_part('template-parts/partners-and-clients') ?>	

<?php
get_footer();
