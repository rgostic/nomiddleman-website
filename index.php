<?php
get_template_part('part/structure/head');
get_template_part('part/structure/header');
get_template_part('part/masthead/masthead');
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
            the_post();
            the_content();
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_template_part('part/structure/footer');
