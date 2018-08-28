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
        <a class="scroller" href="#">
          <div class="scroll-icon"></div>
        </a>
      </div>
   </section>

  <section id="twogbiz">
    <div class="project wrapper">  
      <div class="image">
        <img src="/wp-content/themes/twognation/assets/biz-graphics.png" alt="TwogBiz">
      </div>

      <div class="info">
        <h1>TwogBiz</h1>
        <h4>is an esports agency catering to all businessneeds within the esportsand affiliated industries.</h4>
        <div class="link-logo">
          <a href="">VISIT WEBSITE</a> 
          <img src="/wp-content/themes/twognation/assets/logos/twogbiz.svg" alt="TwogBiz">
        </div>
      </div>
    </div>
  </section>

  <section id="twognews">
    <div class="project wrapper">
      <div class="info">
        <h1>TwogNews</h1>
        <h4>aggregates all esports news of game IPs, business and culture into one place, while adapting and summaraizing news content into a short and easy-to-digest TLDR format.</h4>
        <div class="link-logo">
          <a>COMING SOON</a>
          <img src="/wp-content/themes/twognation/assets/logos/twognews.svg" alt="TwogNews">
        </div>
      </div>

      <div class="image">
        <img src="/wp-content/themes/twognation/assets/news-graphics.png" alt="TwogNews">
      </div>
    </div>
  </section>

<?php
// get_footer();
