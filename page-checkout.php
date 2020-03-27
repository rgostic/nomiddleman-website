<?php
get_template_part('part/structure/head');
get_template_part('part/structure/header');
get_template_part('part/masthead/masthead');


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
get_template_part('part/structure/footer');
