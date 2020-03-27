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
	<div class="content-wrapper">
        <?php
//        if (is_cart() || is_checkout()) {
//            get_template_part('');
//            echo 'lalalalala';
//        }
        ?>
		<div class="row">
            <div class="columns small-12">
<!--            <main id="main" class="content-wrapper" role="main">-->
<!--                <div class="row">-->
<!--                    <div class="columns small-12 large-8 large-centered">-->
                    <?php
                    if ( have_posts() ) :
                        the_post();
                        the_content();
                    endif;
                    ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </main>#main -->
            </div>
		</div>
	</div>
<?php
get_template_part('part/general/products');
get_template_part('part/general/contact-form');
get_template_part('part/structure/footer');
