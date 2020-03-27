<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div <?php wc_product_class( '', $product ); ?>>
	<?php echo $product->get_image('woocommerce_medium'); ?>
    <div class="product-price">
        <a href="<?php echo $product->add_to_cart_url(); ?>">
            <?php echo $product->get_price_html(); ?>
        </a>
    </div>
</div>
<div class="product-info">
    <a href="<?php echo $product->get_permalink(); ?>">
        <?php echo $product->get_title(); ?>
    </a>
        
</div>




