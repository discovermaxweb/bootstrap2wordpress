<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>



<?php wp_footer(); ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!-- ERROR: Failed to load resource: net::ERR_FILE_NOT_FOUND - FIXED BY ADDING "http:" -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/old/bootstrap.min.js"></script> <!-- NB: using file from completed project since it does not display correctly with the newest version of Bootstrap  -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>

<!-- NB - a strange glitch: this code does not work from the external style sheet
================================================== -->
<style>
	i.ci {
		display: inline-block;
		height: 40px;
		width: 40px;
		background: url('assets/img/icon-sprite.png') no-repeat;
	}
</style>

</body>
</html>
