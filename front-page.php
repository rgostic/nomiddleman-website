<?php
get_template_part('part/structure/head');
get_template_part('part/structure/header');
?>
<div class="container">
    <div class="row expanded">
        <div class="columns large-12">
            <?php get_template_part('part/front-page/top-fold'); ?>
       </div>
    </div>
    <div class="row ">
        <div class="columns large-12">

        </div>
    </div>
    <div class="row ">
        <div class="columns small-12 large-4">

             <?php get_template_part('part/front-page/why-us'); ?>

        </div>
        <div class="columns small-12 large-6 large-offset-2">
            <div class="row">
                <div class="columns small-12 large-12">
                    <?php get_template_part('part/front-page/description'); ?>


                </div>
                <div class="columns">
                <?php get_template_part('part/front-page/features'); ?>
                </div>
            </div>




       </div>
    </div>
    <div class="row ">
        <div class="columns">
            <?php get_template_part('part/front-page/testimonials'); ?>
        </div>
    </div>
    <div class="row ">
        <div class="columns">
            <?php get_template_part('part/general/crypto-list'); ?>
        </div>
    </div>

    <?php get_template_part('part/structure/footer'); ?>
</div>

