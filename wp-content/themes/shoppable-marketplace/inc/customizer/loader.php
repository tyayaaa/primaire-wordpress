<?php

function shoppable_marketplace_default_styles(){

	// Begin Style
	$css = '<style>';

	# Responsive Display
	if( !get_theme_mod( 'mobile_display', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-display-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Follower
	if(!get_theme_mod('mobile_followers', true ) ){
		$css .='
			@media screen and (max-width: 767px){
				.section-follower-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Survey
	if( !get_theme_mod( 'mobile_survey', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-survey-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Companions
	if( !get_theme_mod( 'mobile_companions', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-companion-area {
	    			display: none;
				}
			}
		';
	}
	
	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'shoppable_marketplace_default_styles', 99 );