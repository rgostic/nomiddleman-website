<?php ?>
<nav class="main-nav">
    <ul class="menu horizontal">
    <?php
	wp_nav_menu(
		array(
			'menu' => 'Main Menu',
			'container' => false,
			'items_wrap' =>  '%3$s',
		)
	);
	?>
    </ul>
</nav>