<?php
get_template_part('part/structure/head');
get_template_part('part/structure/header');
?>
<div class="content-main">
    <h2>Hi Margaret!</h2>
    <div class="row expanded">
        <div class="columns large-12">
            <?php get_template_part('part/front-page/top-fold'); ?>
       </div>
    </div>
    <div class="row">
        <div class="columns small-12 large-7">
            <div class="row">
                <div class="columns">
                    <?php get_template_part('part/general/sections/download-now'); ?>
                    <?php get_template_part('part/front-page/sections/features'); ?>
                    <?php get_template_part('part/general/sections/crypto-list'); ?>
                </div>
            </div>
       </div>
        <div class="columns small-12 large-5 column-space-evenly">

             <?php get_template_part('part/front-page/sections/why-us'); ?>
            <?php get_template_part('part/front-page/sections/testimonials'); ?>
        </div>
    </div>

    <?php get_template_part('part/structure/footer'); ?>
</div>

