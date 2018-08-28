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
		
		<div id="toTheTopArrow">
			<i class="fa fa-angle-up"></i>
		</div>

		<div class="wrapper">
			
			<div class="contact clearfix">

				<div class="address">
					<h3>Contact</h3>
					<p>Want to know more about possibilities<br> which esports can bring to you?<br> Contact us.</p>
					<h6>info@twognation.com</h6> 
				</div>

				<div class="newsletter">
					<h3>Newsletter</h3>
					<form action="">
						<input type="text" placeholder="Enter your email">
						<button type="submit">Subscribe</button>
					</form>
				</div>

			</div>

			<div class="socials">
				<ul>
					<li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
				</ul>
				<h6>&copy; 2018 by TwogNation</h6>
			</div>

		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
