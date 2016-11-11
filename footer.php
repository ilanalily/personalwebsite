<footer>
	<div class="container">
		<h6>Social Media</h6>
		<?php wp_nav_menu( array(
		  'container' => false,
		  'theme_location' => 'secondary'
		)); ?>
		<p>&copy;2016 Coded with <i class="fa fa-heart" aria-hidden="true"></i> by Ilana Solomons</p>
		<p>Email: <a href="mailto:ilana@ilanalily.ca">ilana@ilanalily.ca</a></p>
		<p>Headshot by <a href="http://pamlau.com/">Pam Lau</a></p>
	</div>


</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>