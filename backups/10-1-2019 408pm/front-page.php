<?php
wp_head();

?>
<header>
    <img src="http://om.test/wp-content/uploads/2019/10/om-pacific.png" alt="om-pacific" />
    <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
</header>
<main>
    <?php while (have_posts()) {
        the_post();
        the_content();
    } ?>
</main>
<footer>
    <?php wp_nav_menu(array('menu' => 'Footer Menu')); ?>
    <?php wp_footer(); ?>
</footer>
