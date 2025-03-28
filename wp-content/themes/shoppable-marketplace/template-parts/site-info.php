<?php
/**
 * Template part for displaying site info
 *
 * @package Shoppable Marketplace
 */

?>

<div class="site-info">
	<?php
    $site_info = wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'shoppable-marketplace' ) ) ) .  esc_html( date( 'Y' ) ) . ' '.  esc_html( get_bloginfo( 'name' ) ) . esc_html__( '. Powered by', 'shoppable-marketplace' ) . ' <a href="'.   esc_url( __( "https://wordpress.org/", "shoppable-marketplace" ) ) . '" target="_blank"> ' . esc_html__( 'WordPress', 'shoppable-marketplace' ) . '</a>';

    echo apply_filters( 'shoppable_copyright', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
   ?>
</div><!-- .site-info -->