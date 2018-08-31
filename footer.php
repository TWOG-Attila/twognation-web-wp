<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TwogNation
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">

        <a href="#content" id="toTheTopArrow">
            <i class="fa fa-angle-up"></i>
        </a>

        <div class="wrapper">

            <div class="contact">
                <h3>Contact</h3>
                <p>Want to know more about possibilities<br> which esports can bring to you?<br> Contact us.</p>
                <label>info@twognation.com</label>
            </div>

            <div class="newsletter">
                <h3>Newsletter</h3>
                <form>
                    <input type="text" placeholder="Enter your email" name="email">
                    <button type="submit" name="subscribe">Subscribe</button>
                </form>
                <div class="response-placeholder"></div>
            </div>

            <div class="copyright">
                <h5>&copy; 2018 by TwogNation</h5>
                <h6><a href="#">Terms of Service</a></h6>
                <h6><a href="#">Privacy Policy</a></h6>
            </div>

        </div>

    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>