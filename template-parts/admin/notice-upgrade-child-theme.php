<?php
/**
 * Admin notice: Upgrade: Incompatible child theme
 *
 * @package    Modern
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    2.0.0
 * @version  2.0.0
 */





?>

<div class="updated notice is-dismissible theme-upgrade-notice-child-theme">
	<h2>
		<?php esc_html_e( 'IMPORTANT: This is a major theme upgrade', 'modern' ); ?>
	</h2>
	<p>
		<?php esc_html_e( 'Thank you for upgrading your theme!', 'modern' ); ?>
		<?php esc_html_e( 'We have noticed you are using a child theme.', 'modern' ); ?>
		<?php esc_html_e( 'Please note that there are a lot of changes in this theme update and you should check the code of your child theme modifications for compatibility.', 'modern' ); ?>
	</p>
	<p>
		<?php esc_html_e( 'We are sorry for any inconvenience caused.', 'modern' ); ?>
		<?php esc_html_e( 'Please understand we strive to provide most relevant and up to date WordPress code in our products.', 'modern' ); ?>
		<?php esc_html_e( 'Thank you for understanding!', 'modern' ); ?>
	</p>
	<p>
		<a href="https://webmandesign.github.io/docs/modern/#child-theme">
			<?php esc_html_e( 'Check documentation about child themes &raquo;', 'modern' ); ?>
		</a>
		<br>
		<a href="https://support.webmandesign.eu/new-ticket/">
			<?php esc_html_e( 'Contact support for help &raquo;', 'modern' ); ?>
		</a>
		<br>
		<a href="https://github.com/webmandesign/modern/releases">
			<?php esc_html_e( 'Download a previous theme version &raquo;', 'modern' ); ?>
		</a>
	</p>
</div>

<style type="text/css" media="screen">

	.notice.theme-upgrade-notice-child-theme {
		padding: 1.62em;
		font-weight: bolder;
		background: #f5c6cb;
		color: #721c24;
		border: .5em solid rgba(0,0,0,.1);
	}

	.notice.theme-upgrade-notice-child-theme h2 {
		margin-top: 0;
		font-weight: 800;
		color: inherit;
	}

	.notice.theme-upgrade-notice-child-theme p {
		max-width: 40em;
		margin-bottom: 0;
	}

</style>