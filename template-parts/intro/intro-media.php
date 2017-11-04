<?php
/**
 * Page intro media
 *
 * Video is displayed on front page only,
 * and only on screens larger than 900 x 500 pixels.
 *
 * @link  https://make.wordpress.org/core/2016/11/26/video-headers-in-4-7/
 *
 * @package    Modern
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    2.0.0
 * @version  2.0.0
 */





// Requirements check

	if (
			Modern_Post::is_paged()
			|| ! function_exists( 'the_custom_header_markup' )
			|| ! get_custom_header_markup()
			|| ( Modern_Post::is_singular() && get_post_meta( get_the_ID(), 'no_intro_media', true ) )
		) {
		return;
	}


?>

<div id="intro-media" class="intro-media">
	<?php the_custom_header_markup(); ?>
</div>
