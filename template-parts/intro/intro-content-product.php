<?php
/**
 * Page intro content for WooCommerce products
 *
 * @package    Modern
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    2.0.0
 * @version  2.0.0
 */





// Helper variables

	$product = wc_setup_product_data( get_the_ID() );


?>

<?php woocommerce_breadcrumb(); ?>

<div class="product-title-price">
	<h1 class="product-title entry-title h1 intro-title"><?php single_post_title(); ?></h1>
	<p class="price h2"><?php echo $product->get_price_html(); ?></p>
</div>
