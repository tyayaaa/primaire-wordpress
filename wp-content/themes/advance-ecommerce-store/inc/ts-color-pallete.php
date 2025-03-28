<?php
	
	$advance_ecommerce_store_theme_color = get_theme_mod('advance_ecommerce_store_theme_color');

	$advance_ecommerce_store_custom_css = '';

	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='#sidebar .tagcloud a:hover,.top-menu,.main-menu, .account a i, span.cart-value, .categry-title, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a, .product-service, .second-border a:hover, #footer input[type="submit"], .copyright, woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar h3, #sidebar input[type="submit"], .pagination a:hover, .pagination .current, .woocommerce span.onsale, #footer .tagcloud a:hover, input[type="submit"],#res-sidebar input[type="submit"],#comments a.comment-reply-link ,.tags p a:hover, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .read-moresec a.button, .post-categories li a, .meta-nav:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, #sidebar .widget_block h2, #sidebar #block-2 button[type="submit"], .page-links .post-page-numbers.current, .page-links a:hover, #sidebar .widget_block.widget_tag_cloud a:hover, .page-box-single .wp-block-tag-cloud a:hover, #footer .widget_block.widget_tag_cloud a:hover, #sidebar .widget_block.widget_search label, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a, .wp-block-woocommerce-cart .wc-block-cart__submit-container a, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .=' #footer .woocommerce a.button:hover, .woocommerce button.button:hover, .bradcrumbs span, .bradcrumbs a, .wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale, .wp-block-woocommerce-empty-cart-block .wp-block-button a{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_theme_color).' !important;';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
			$advance_ecommerce_store_custom_css .='border-color: '.esc_attr($advance_ecommerce_store_theme_color).' !important;';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='.bradcrumbs a:hover{';
		$advance_ecommerce_store_custom_css .='background-color: #fff !important;';
			$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_theme_color).'!important;';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='#footer h3, .woocommerce-message::before, #footer h3,.woocommerce-message::before, .primary-navigation ul ul a, .primary-navigation a:hover, #footer li a:hover,.primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation a:focus,.sf-arrows ul .sf-with-ul:after, .sf-arrows ul li > .sf-with-ul:focus:after,.sf-arrows ul li:hover > .sf-with-ul:after,.sf-arrows .sfHover > .sf-with-ul:after,.primary-navigation li a:hover, .primary-navigation li:hover a,.tags i,.metabox a:hover,#footer a.rsswidget, .primary-navigation ul ul li:hover > a, #sidebar ul li a:hover, .entry-date:hover a, .entry-date:hover i, .entry-author:hover a, .entry-author:hover i, #footer ul li a:hover, .post-categories li a:hover, #sidebar .widget_block.widget_tag_cloud a, .page-box-single .wp-block-tag-cloud a, #sidebar .tagcloud a, #footer .widget_block .wp-block-heading{';
			$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='.woocommerce-message, hr.slidehr,.primary-navigation ul ul{';
			$advance_ecommerce_store_custom_css .='border-top-color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='#footer .tagcloud a:hover, #footer input[type="search"],.primary-navigation ul, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, #sidebar .widget_block.widget_tag_cloud a, .page-box-single .wp-block-tag-cloud a, #sidebar .widget_block.widget_tag_cloud a:hover, .page-box-single .wp-block-tag-cloud a:hover, #footer .widget_block.widget_tag_cloud a:hover, #sidebar .tagcloud a, .wp-block-woocommerce-empty-cart-block .wp-block-button a{';
			$advance_ecommerce_store_custom_css .='border-color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_theme_color).'!important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// single post image setting
	$advance_ecommerce_store_single_img_border_radius = get_theme_mod('advance_ecommerce_store_single_img_border_radius', 0);
	$advance_ecommerce_store_custom_css .='.page-box-single .feature-box img{';
		$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_single_img_border_radius).'px;';
	$advance_ecommerce_store_custom_css .='}';

	$advance_ecommerce_store_single_img_box_shadow = get_theme_mod('advance_ecommerce_store_single_img_box_shadow',0);
	$advance_ecommerce_store_custom_css .='.page-box-single .feature-box img{';
		$advance_ecommerce_store_custom_css .='box-shadow: '.esc_attr($advance_ecommerce_store_single_img_box_shadow).'px '.esc_attr($advance_ecommerce_store_single_img_box_shadow).'px '.esc_attr($advance_ecommerce_store_single_img_box_shadow).'px #ccc;';
	$advance_ecommerce_store_custom_css .='}';

	/*---- Comment form ----*/
	$advance_ecommerce_store_comment_width = get_theme_mod('advance_ecommerce_store_comment_width', '100');
	$advance_ecommerce_store_custom_css .='#comments textarea{';
		$advance_ecommerce_store_custom_css .=' width:'.esc_attr($advance_ecommerce_store_comment_width).'%;';
	$advance_ecommerce_store_custom_css .='}';

	/*----Comment title text----*/
	$advance_ecommerce_store_title_comment_form = get_theme_mod('
		advance_ecommerce_store_title_comment_form', 'Leave a Reply');
	if($advance_ecommerce_store_title_comment_form == ''){
	$advance_ecommerce_store_custom_css .='#comments h2#reply-title {';
	$advance_ecommerce_store_custom_css .='display: none;';
	$advance_ecommerce_store_custom_css .='}';
	}

	/*----Comment button text----*/
	$advance_ecommerce_store_comment_form_button_content = get_theme_mod('advance_ecommerce_store_comment_form_button_content', 'Post Comment');
	if($advance_ecommerce_store_comment_form_button_content == ''){
	$advance_ecommerce_store_custom_css .='#comments p.form-submit {';
	$advance_ecommerce_store_custom_css .='display: none;';
	$advance_ecommerce_store_custom_css .='}';
	}

	// media
	$advance_ecommerce_store_custom_css .='@media screen and (max-width:1000px) {';
	if($advance_ecommerce_store_theme_color){
	$advance_ecommerce_store_custom_css .='#res-sidebar, .primary-navigation ul ul a,.primary-navigation a:focus, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul,#contact-info{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($advance_ecommerce_store_theme_color).' 120%);
		}';
	}
	$advance_ecommerce_store_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_theme_options','Default');
    if($advance_ecommerce_store_theme_lay == 'Default'){
		$advance_ecommerce_store_custom_css .='body{';
			$advance_ecommerce_store_custom_css .='max-width: 100%;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_ecommerce_store_custom_css .='width: 97.3%';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Container'){
		$advance_ecommerce_store_custom_css .='body{';
			$advance_ecommerce_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_ecommerce_store_custom_css .='width: 97.7%';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Box Container'){
		$advance_ecommerce_store_custom_css .='body{';
			$advance_ecommerce_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='#header{';
			$advance_ecommerce_store_custom_css .='right:0';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*---------------Slider Content Layout -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_slider_content_alignment','Left');
    if($advance_ecommerce_store_theme_lay == 'Left'){
		$advance_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_ecommerce_store_custom_css .='text-align:left; left:15%; right:15%;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Center'){
		$advance_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_ecommerce_store_custom_css .='text-align:center; left:20%; right:20%;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='hr.slidehr{';
			$advance_ecommerce_store_custom_css .='margin: 0 auto;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Right'){
		$advance_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_ecommerce_store_custom_css .='text-align:right; left:15%; right:15%;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='hr.slidehr{';
			$advance_ecommerce_store_custom_css .='margin: 0 0 0 auto;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_slider_image_opacity','0.9');
	if($advance_ecommerce_store_theme_lay == '0'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.1'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.1';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.2'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.2';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.3'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.3';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.4'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.4';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.5'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.5';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.6'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.6';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.7'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.7';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.8'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.8';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.9'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.9';
		$advance_ecommerce_store_custom_css .='}';
		}

	/*----------------- Button Settings option-----------------*/
	$advance_ecommerce_store_button_padding_top_bottom = get_theme_mod('advance_ecommerce_store_button_padding_top_bottom');
	$advance_ecommerce_store_button_padding_left_right = get_theme_mod('advance_ecommerce_store_button_padding_left_right');
	if($advance_ecommerce_store_button_padding_top_bottom != false || $advance_ecommerce_store_button_padding_left_right != false){
		$advance_ecommerce_store_custom_css .='.second-border a, #slider .more-btn a, #comments .form-submit input[type="submit"], .product-page .woocommerce ul.products li.product .button{';
			$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($advance_ecommerce_store_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($advance_ecommerce_store_button_padding_left_right).'px !important; padding-right: '.esc_attr($advance_ecommerce_store_button_padding_left_right).'px !important; display:inline-block;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_button_border_radius = get_theme_mod('advance_ecommerce_store_button_border_radius');
	if($advance_ecommerce_store_button_border_radius != false){
		$advance_ecommerce_store_custom_css .='.second-border a,#slider .more-btn a, #comments .form-submit input[type="submit"], .product-page .woocommerce ul.products li.product .button{';
			$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_button_border_radius).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*-----------------------------Responsive Setting --------------------*/
	$advance_ecommerce_store_stickyheader = get_theme_mod( 'advance_ecommerce_store_responsive_sticky_header',false);
	if($advance_ecommerce_store_stickyheader == true && get_theme_mod( 'advance_ecommerce_store_sticky_header', false) == false){
    	$advance_ecommerce_store_custom_css .='.fixed-header{';
			$advance_ecommerce_store_custom_css .='position:static;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_stickyheader == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='.fixed-header{';
			$advance_ecommerce_store_custom_css .='position:fixed;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_stickyheader == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='.fixed-header{';
			$advance_ecommerce_store_custom_css .='position:static;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_store_slider = get_theme_mod( 'advance_ecommerce_store_responsive_slider',true);
	if($advance_ecommerce_store_slider == true && get_theme_mod( 'advance_ecommerce_store_slider_hide', true) == false){
    	$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_slider == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='display:block;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_slider == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_store_scroll = get_theme_mod( 'advance_ecommerce_store_responsive_scroll',true);
	if($advance_ecommerce_store_scroll == true && get_theme_mod( 'advance_ecommerce_store_enable_disable_scroll', true) == false){
    	$advance_ecommerce_store_custom_css .='#scroll-top{';
			$advance_ecommerce_store_custom_css .='display:none !important;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_scroll == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#scroll-top{';
			$advance_ecommerce_store_custom_css .='visibility: visible !important;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_scroll == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#scroll-top{';
			$advance_ecommerce_store_custom_css .='visibility: hidden !important;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_ = get_theme_mod( 'advance_ecommerce_store_responsive_sidebar',true);
    if($advance_ecommerce_ == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#sidebar{';
			$advance_ecommerce_store_custom_css .='display:block;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_ == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#sidebar{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_store_loader = get_theme_mod( 'advance_ecommerce_store_responsive_preloader', true);
	if($advance_ecommerce_store_loader == true && get_theme_mod( 'advance_ecommerce_store_preloader_option', true) == false){
    	$advance_ecommerce_store_custom_css .='#loader-wrapper{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_loader == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#loader-wrapper{';
			$advance_ecommerce_store_custom_css .='display:block;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_loader == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#loader-wrapper{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_background_skin_mode','Transparent Background');
    if($advance_ecommerce_store_theme_lay == 'With Background'){
		$advance_ecommerce_store_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$advance_ecommerce_store_custom_css .='background-color: #fff;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Transparent Background'){
		$advance_ecommerce_store_custom_css .='#sidebar aside,.slider-category, .page-box-single{';
			$advance_ecommerce_store_custom_css .='background-color: transparent;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$advance_ecommerce_store_top_bottom_product_button_padding = get_theme_mod('advance_ecommerce_store_top_bottom_product_button_padding', 10);
	if($advance_ecommerce_store_top_bottom_product_button_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($advance_ecommerce_store_top_bottom_product_button_padding).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_left_right_product_button_padding = get_theme_mod('advance_ecommerce_store_left_right_product_button_padding', 16);
	if($advance_ecommerce_store_left_right_product_button_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$advance_ecommerce_store_custom_css .='padding-left: '.esc_attr($advance_ecommerce_store_left_right_product_button_padding).'px; padding-right: '.esc_attr($advance_ecommerce_store_left_right_product_button_padding).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_product_button_border_radius = get_theme_mod('advance_ecommerce_store_product_button_border_radius', 0);
	if($advance_ecommerce_store_product_button_border_radius != false){
		$advance_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_product_button_border_radius).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_show_related_products = get_theme_mod('advance_ecommerce_store_show_related_products',true);
	if($advance_ecommerce_store_show_related_products == false){
		$advance_ecommerce_store_custom_css .='.related.products{';
			$advance_ecommerce_store_custom_css .='display: none;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_show_wooproducts_border = get_theme_mod('advance_ecommerce_store_show_wooproducts_border', false);
	if($advance_ecommerce_store_show_wooproducts_border == true){
		$advance_ecommerce_store_custom_css .='.products li{';
			$advance_ecommerce_store_custom_css .='border: 1px solid #767676;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_top_bottom_wooproducts_padding = get_theme_mod('advance_ecommerce_store_top_bottom_wooproducts_padding',0);
	if($advance_ecommerce_store_top_bottom_wooproducts_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($advance_ecommerce_store_top_bottom_wooproducts_padding).'px !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_left_right_wooproducts_padding = get_theme_mod('advance_ecommerce_store_left_right_wooproducts_padding',0);
	if($advance_ecommerce_store_left_right_wooproducts_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='padding-left: '.esc_attr($advance_ecommerce_store_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($advance_ecommerce_store_left_right_wooproducts_padding).'px !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_wooproducts_border_radius = get_theme_mod('advance_ecommerce_store_wooproducts_border_radius',0);
	if($advance_ecommerce_store_wooproducts_border_radius != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_wooproducts_border_radius).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_wooproducts_box_shadow = get_theme_mod('advance_ecommerce_store_wooproducts_box_shadow',0);
	if($advance_ecommerce_store_wooproducts_box_shadow != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='box-shadow: '.esc_attr($advance_ecommerce_store_wooproducts_box_shadow).'px '.esc_attr($advance_ecommerce_store_wooproducts_box_shadow).'px '.esc_attr($advance_ecommerce_store_wooproducts_box_shadow).'px #eee;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/

	$advance_ecommerce_store_footer_heading = get_theme_mod( 'advance_ecommerce_store_footer_heading','Left');
    if($advance_ecommerce_store_footer_heading == 'Left'){
		$advance_ecommerce_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$advance_ecommerce_store_custom_css .='text-align: left !important;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_footer_heading == 'Center'){
		$advance_ecommerce_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$advance_ecommerce_store_custom_css .='text-align: center !important;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_footer_heading == 'Right'){
		$advance_ecommerce_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$advance_ecommerce_store_custom_css .='text-align: right !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_footer_content = get_theme_mod( 'advance_ecommerce_store_footer_content','Left');
    if($advance_ecommerce_store_footer_content == 'Left'){
		$advance_ecommerce_store_custom_css .='#footer .widget{';
		$advance_ecommerce_store_custom_css .='text-align: left;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_footer_content == 'Center'){
		$advance_ecommerce_store_custom_css .='#footer .widget{';
			$advance_ecommerce_store_custom_css .='text-align: center;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_footer_content == 'Right'){
		$advance_ecommerce_store_custom_css .='#footer .widget{';
			$advance_ecommerce_store_custom_css .='text-align: right;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// Footer Heading Font Size
	$advance_ecommerce_store_footer_font_size = get_theme_mod('advance_ecommerce_store_footer_font_size',24);
	$advance_ecommerce_store_custom_css .='#footer h3{';
		$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_footer_font_size).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// Footer Heading Text Transform
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_footer_text_tranform','Uppercase');
    if($advance_ecommerce_store_theme_lay == 'Uppercase'){
		$advance_ecommerce_store_custom_css .='#footer h3{';
			$advance_ecommerce_store_custom_css .='text-transform: uppercase !important;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Lowercase'){
		$advance_ecommerce_store_custom_css .='#footer h3{';
			$advance_ecommerce_store_custom_css .='text-transform: lowercase !important;';
		$advance_ecommerce_store_custom_css .='}';
	}
	else if($advance_ecommerce_store_theme_lay == 'Capitalize'){
		$advance_ecommerce_store_custom_css .='#footer h3{';
			$advance_ecommerce_store_custom_css .='text-transform: capitalize !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_copyright_content_align = get_theme_mod('advance_ecommerce_store_copyright_content_align');
	if($advance_ecommerce_store_copyright_content_align != false){
		$advance_ecommerce_store_custom_css .='.copyright{';
			$advance_ecommerce_store_custom_css .='text-align: '.esc_attr($advance_ecommerce_store_copyright_content_align).'!important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_footer_content_font_size = get_theme_mod('advance_ecommerce_store_footer_content_font_size', 16);
	if($advance_ecommerce_store_footer_content_font_size != false){
		$advance_ecommerce_store_custom_css .='.copyright p{';
			$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_footer_content_font_size).'px !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_copyright_padding = get_theme_mod('advance_ecommerce_store_copyright_padding', 15);
	$advance_ecommerce_store_custom_css .='.copyright{';
		$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_copyright_padding).'px; padding-bottom: '.esc_attr($advance_ecommerce_store_copyright_padding).'px;';
	$advance_ecommerce_store_custom_css .='}';

	/*------ copyright text color -------*/
	$advance_ecommerce_store_footer_text_color = get_theme_mod('advance_ecommerce_store_footer_text_color');
	if($advance_ecommerce_store_footer_text_color != false){
		$advance_ecommerce_store_custom_css .='.copyright p, .copyright p a{';
			$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_footer_text_color).'!important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*------ copyright background css -------*/
	$advance_ecommerce_store_footer_text_bg_color = get_theme_mod('advance_ecommerce_store_footer_text_bg_color');
	if($advance_ecommerce_store_footer_text_bg_color != false){
		$advance_ecommerce_store_custom_css .='.copyright{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_footer_text_bg_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_footer_widget_bg_color = get_theme_mod('advance_ecommerce_store_footer_widget_bg_color');
	if($advance_ecommerce_store_footer_widget_bg_color != false){
		$advance_ecommerce_store_custom_css .='#footer{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_footer_widget_bg_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_footer_widget_bg_image = get_theme_mod('advance_ecommerce_store_footer_widget_bg_image');
	if($advance_ecommerce_store_footer_widget_bg_image != false){
		$advance_ecommerce_store_custom_css .='#footer{';
			$advance_ecommerce_store_custom_css .='background: url('.esc_attr($advance_ecommerce_store_footer_widget_bg_image).'); background-size: cover;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// scroll to top bg color
	$advance_ecommerce_store_back_to_top_bg_color = get_theme_mod('advance_ecommerce_store_back_to_top_bg_color');
	if($advance_ecommerce_store_back_to_top_bg_color != false){
		$advance_ecommerce_store_custom_css .='#scroll-top{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_back_to_top_bg_color).';';
			$advance_ecommerce_store_custom_css .='border-color: '.esc_attr($advance_ecommerce_store_back_to_top_bg_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	// scroll to top bg hover color
	$advance_ecommerce_store_back_to_top_bg_hover_color = get_theme_mod('advance_ecommerce_store_back_to_top_bg_hover_color');
	if($advance_ecommerce_store_back_to_top_bg_hover_color != false){
		$advance_ecommerce_store_custom_css .='#scroll-top:hover{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_back_to_top_bg_hover_color).';';
			$advance_ecommerce_store_custom_css .='border-color: '.esc_attr($advance_ecommerce_store_back_to_top_bg_hover_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	// scroll to top
	$advance_ecommerce_store_scroll_font_size_icon = get_theme_mod('advance_ecommerce_store_scroll_font_size_icon', 22);
	if($advance_ecommerce_store_scroll_font_size_icon != false){
		$advance_ecommerce_store_custom_css .='#scroll-top i{';
			$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_scroll_font_size_icon).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// Slider Height 
	$advance_ecommerce_store_slider_image_height = get_theme_mod('advance_ecommerce_store_slider_image_height');
	$advance_ecommerce_store_custom_css .='#slider img{';
		$advance_ecommerce_store_custom_css .='height: '.esc_attr($advance_ecommerce_store_slider_image_height).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// button font size
	$advance_ecommerce_store_button_font_size = get_theme_mod('advance_ecommerce_store_button_font_size');
	$advance_ecommerce_store_custom_css .='.page-box .new-text .second-border a{';
		$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_button_font_size).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// font weight
	$advance_ecommerce_store_btn_font_weight = get_theme_mod('advance_ecommerce_store_btn_font_weight');{
	$advance_ecommerce_store_custom_css .='.page-box .new-text .second-border a{';
	$advance_ecommerce_store_custom_css .='font-weight: '.esc_attr($advance_ecommerce_store_btn_font_weight).';';
	$advance_ecommerce_store_custom_css .='}';
	}

	// Button Text Transform
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_button_text_transform','Uppercase');
    if($advance_ecommerce_store_theme_lay == 'Uppercase'){
		$advance_ecommerce_store_custom_css .='.page-box .new-text .second-border a{';
			$advance_ecommerce_store_custom_css .='text-transform: uppercase;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Lowercase'){
		$advance_ecommerce_store_custom_css .='.page-box .new-text .second-border a{';
			$advance_ecommerce_store_custom_css .='text-transform: lowercase;';
		$advance_ecommerce_store_custom_css .='}';
	}
	else if($advance_ecommerce_store_theme_lay == 'Capitalize'){
		$advance_ecommerce_store_custom_css .='.page-box .new-text .second-border a{';
			$advance_ecommerce_store_custom_css .='text-transform: capitalize;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// Display Blog Post 
	$advance_ecommerce_store_display_blog_page_post = get_theme_mod( 'advance_ecommerce_store_display_blog_page_post','In Box');
    if($advance_ecommerce_store_display_blog_page_post == 'Without Box'){
		$advance_ecommerce_store_custom_css .='.page-box{';
			$advance_ecommerce_store_custom_css .='border:none; margin:25px 0;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// Blog Post Alignment
	$advance_ecommerce_store_blog_post_alignment = get_theme_mod( 'advance_ecommerce_store_blog_post_alignment','Left');
    if($advance_ecommerce_store_blog_post_alignment == 'Left'){
		$advance_ecommerce_store_custom_css .='.page-box h2, .page-box .metabox, .page-box .entry-content p{';
		$advance_ecommerce_store_custom_css .='text-align: left;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_blog_post_alignment == 'Center'){
		$advance_ecommerce_store_custom_css .='.page-box h2, .page-box .metabox, .page-box .entry-content p, .page-box .second-border{';
			$advance_ecommerce_store_custom_css .='text-align: center !important;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_blog_post_alignment == 'Right'){
		$advance_ecommerce_store_custom_css .='.page-box h2, .page-box .metabox, .page-box .entry-content p, .page-box .second-border{';
			$advance_ecommerce_store_custom_css .='text-align: right;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// Pagination Alignment
	$advance_ecommerce_store_pagination_alignment = get_theme_mod( 'advance_ecommerce_store_pagination_alignment','Left');
    if($advance_ecommerce_store_pagination_alignment == 'Left'){
		$advance_ecommerce_store_custom_css .='.pagination, .nav-links{';
		$advance_ecommerce_store_custom_css .='float: left;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_pagination_alignment == 'Center'){
		$advance_ecommerce_store_custom_css .='.pagination, .nav-links{';
			$advance_ecommerce_store_custom_css .='justify-content: center; float: none;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_pagination_alignment == 'Right'){
		$advance_ecommerce_store_custom_css .='.pagination, .nav-links{';
			$advance_ecommerce_store_custom_css .='float: right;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// slider overlay
	$advance_ecommerce_store_slider_overlay = get_theme_mod('advance_ecommerce_store_slider_overlay', true);
	if($advance_ecommerce_store_slider_overlay == false){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:1;';
		$advance_ecommerce_store_custom_css .='}';
	} 
	$advance_ecommerce_store_slider_image_overlay_color = get_theme_mod('advance_ecommerce_store_slider_image_overlay_color', true);
	if($advance_ecommerce_store_slider_overlay != false){
		$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_slider_image_overlay_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	//slider button bg color
	$advance_ecommerce_store_slider_btn_bg_color = get_theme_mod('advance_ecommerce_store_slider_btn_bg_color');
	$advance_ecommerce_store_custom_css .='.more-btn a{';
		$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_slider_btn_bg_color).';';
	$advance_ecommerce_store_custom_css .='}';

	// site title and tagline font size option
	$advance_ecommerce_store_site_title_size_option = get_theme_mod('advance_ecommerce_store_site_title_size_option', 30);{
	$advance_ecommerce_store_custom_css .='.logo a, .logo p.site-title a{';
	$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_site_title_size_option).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_site_tagline_size_option = get_theme_mod('advance_ecommerce_store_site_tagline_size_option', 13);{
	$advance_ecommerce_store_custom_css .='.logo p{';
	$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_site_tagline_size_option).'px !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// woocommerce product sale settings
	$advance_ecommerce_store_border_radius_product_sale = get_theme_mod('advance_ecommerce_store_border_radius_product_sale',0);
	$advance_ecommerce_store_custom_css .='.woocommerce span.onsale {';
		$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_border_radius_product_sale).'px;';
	$advance_ecommerce_store_custom_css .='}';

	$advance_ecommerce_store_align_product_sale = get_theme_mod('advance_ecommerce_store_align_product_sale', 'Right');
	if($advance_ecommerce_store_align_product_sale == 'Right' ){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_ecommerce_store_custom_css .=' left:auto; right:0;';
		$advance_ecommerce_store_custom_css .='}';
	}elseif($advance_ecommerce_store_align_product_sale == 'Left' ){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_ecommerce_store_custom_css .=' left:0; right:auto;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_product_sale_font_size = get_theme_mod('advance_ecommerce_store_product_sale_font_size',14);
	$advance_ecommerce_store_custom_css .='.woocommerce span.onsale{';
		$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_product_sale_font_size).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// product sale padding top /bottom
	$advance_ecommerce_store_sale_padding_top = get_theme_mod('advance_ecommerce_store_sale_padding_top', '');
	$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
	$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_sale_padding_top).'px; padding-bottom: '.esc_attr($advance_ecommerce_store_sale_padding_top).'px !important;' ;
	$advance_ecommerce_store_custom_css .='}';

	// product sale padding left/right
	$advance_ecommerce_store_sale_padding_left = get_theme_mod('advance_ecommerce_store_sale_padding_left', '');
	$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
	$advance_ecommerce_store_custom_css .='padding-left: '.esc_attr($advance_ecommerce_store_sale_padding_left).'px; padding-right: '.esc_attr($advance_ecommerce_store_sale_padding_left).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// preloader background image
	$advance_ecommerce_store_preloader_bg_image = get_theme_mod('advance_ecommerce_store_preloader_bg_image');
	if($advance_ecommerce_store_preloader_bg_image != false){
		$advance_ecommerce_store_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
			$advance_ecommerce_store_custom_css .='background: url('.esc_attr($advance_ecommerce_store_preloader_bg_image).'); background-size: cover;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// preloader background option
	$advance_ecommerce_store_loader_background_color_first = get_theme_mod('advance_ecommerce_store_loader_background_color_first');
	$advance_ecommerce_store_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
		$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_loader_background_color_first).';';
	$advance_ecommerce_store_custom_css .='} ';

	// breadcrumb color
	$advance_ecommerce_store_breadcrumb_color = get_theme_mod('advance_ecommerce_store_breadcrumb_color');
	$advance_ecommerce_store_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_breadcrumb_color).';';
	$advance_ecommerce_store_custom_css .='} ';

	// breadcrumb bg color
	$advance_ecommerce_store_breadcrumb_bg_color = get_theme_mod('advance_ecommerce_store_breadcrumb_bg_color');
	$advance_ecommerce_store_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_breadcrumb_bg_color).';';
	$advance_ecommerce_store_custom_css .='} ';

	// fixed header padding option
	$advance_ecommerce_store_sticky_header_padding_settings = get_theme_mod('advance_ecommerce_store_sticky_header_padding_settings', 0);
	$advance_ecommerce_store_custom_css .='.fixed-header{';
		$advance_ecommerce_store_custom_css .='padding: '.esc_attr($advance_ecommerce_store_sticky_header_padding_settings).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// woocommerce Product Navigation
	$advance_ecommerce_store_products_navigation = get_theme_mod('advance_ecommerce_store_products_navigation', 'Yes');
	if($advance_ecommerce_store_products_navigation == 'No'){
		$advance_ecommerce_store_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$advance_ecommerce_store_custom_css .='display: none;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// featured image setting
	$advance_ecommerce_store_featured_img_border_radius = get_theme_mod('advance_ecommerce_store_featured_img_border_radius', 0);
	$advance_ecommerce_store_custom_css .='.our-services img{';
		$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_featured_img_border_radius).'px;';
	$advance_ecommerce_store_custom_css .='}';

	$advance_ecommerce_store_featured_img_box_shadow = get_theme_mod('advance_ecommerce_store_featured_img_box_shadow',0);
	$advance_ecommerce_store_custom_css .='.our-services img{';
		$advance_ecommerce_store_custom_css .='box-shadow: '.esc_attr($advance_ecommerce_store_featured_img_box_shadow).'px '.esc_attr($advance_ecommerce_store_featured_img_box_shadow).'px '.esc_attr($advance_ecommerce_store_featured_img_box_shadow).'px #ccc;';
	$advance_ecommerce_store_custom_css .='}';

	//First Cap (Blog Post)
	$advance_ecommerce_store_show_first_caps = get_theme_mod('advance_ecommerce_store_show_first_caps', 'false');
	if($advance_ecommerce_store_show_first_caps == 'true' ){
	$advance_ecommerce_store_custom_css .='.page-box .entry-content p:nth-of-type(1)::first-letter{';
	$advance_ecommerce_store_custom_css .=' font-size: 55px; font-weight: 600;';
	$advance_ecommerce_store_custom_css .=' margin-right: 6px;';
	$advance_ecommerce_store_custom_css .=' line-height: 1;';
	$advance_ecommerce_store_custom_css .='}';
	}elseif($advance_ecommerce_store_show_first_caps == 'false' ){
	$advance_ecommerce_store_custom_css .='.page-box .entry-content p:nth-of-type(1)::first-letter {';
	$advance_ecommerce_store_custom_css .='display: none;';
	$advance_ecommerce_store_custom_css .='}';
	}

	//First Cap (Single Post)
	$advance_ecommerce_store_single_post_first_caps = get_theme_mod('advance_ecommerce_store_single_post_first_caps', 'false');
	if($advance_ecommerce_store_single_post_first_caps == 'true' ){
	$advance_ecommerce_store_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter{';
	$advance_ecommerce_store_custom_css .=' font-size: 55px; font-weight: 600;';
	$advance_ecommerce_store_custom_css .=' margin-right: 6px;';
	$advance_ecommerce_store_custom_css .=' line-height: 1;';
	$advance_ecommerce_store_custom_css .='}';
	}elseif($advance_ecommerce_store_single_post_first_caps == 'false' ){
	$advance_ecommerce_store_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter {';
	$advance_ecommerce_store_custom_css .='display: none;';
	$advance_ecommerce_store_custom_css .='}';
	}

	// slider top and bottom padding
	$advance_ecommerce_store_top_bottom_slider_content_space = get_theme_mod('advance_ecommerce_store_top_bottom_slider_content_space');
	$advance_ecommerce_store_left_right_slider_content_space = get_theme_mod('advance_ecommerce_store_left_right_slider_content_space');
	$advance_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$advance_ecommerce_store_custom_css .='top: '.esc_attr($advance_ecommerce_store_top_bottom_slider_content_space).'%; bottom: '.esc_attr($advance_ecommerce_store_top_bottom_slider_content_space).'%;left: '.esc_attr($advance_ecommerce_store_left_right_slider_content_space).'%;right: '.esc_attr($advance_ecommerce_store_left_right_slider_content_space).'%;';
	$advance_ecommerce_store_custom_css .='}';

	// Menu Text Transform
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_text_tranform_menu','Uppercase');
    if($advance_ecommerce_store_theme_lay == 'Uppercase'){
		$advance_ecommerce_store_custom_css .='.primary-navigation a{';
			$advance_ecommerce_store_custom_css .='text-transform: uppercase;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Lowercase'){
		$advance_ecommerce_store_custom_css .='.primary-navigation a{';
			$advance_ecommerce_store_custom_css .='text-transform: lowercase;';
		$advance_ecommerce_store_custom_css .='}';
	}
	else if($advance_ecommerce_store_theme_lay == 'Capitalize'){
		$advance_ecommerce_store_custom_css .='.primary-navigation a{';
			$advance_ecommerce_store_custom_css .='text-transform: capitalize;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// menu font size
	$advance_ecommerce_store_menus_font_size = get_theme_mod('advance_ecommerce_store_menus_font_size',12);
	$advance_ecommerce_store_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
		$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_menus_font_size).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// menu padding
	$advance_ecommerce_store_menus_padding = get_theme_mod('advance_ecommerce_store_menus_padding');
	$advance_ecommerce_store_custom_css .='.primary-navigation ul li{';
		$advance_ecommerce_store_custom_css .='padding: '.esc_attr($advance_ecommerce_store_menus_padding).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// Menu hover effect
	$advance_ecommerce_store_menus_item = get_theme_mod( 'advance_ecommerce_store_menus_item_style','None');
    if($advance_ecommerce_store_menus_item == 'None'){
		$advance_ecommerce_store_custom_css .='.primary-navigation ul a{';
			$advance_ecommerce_store_custom_css .='';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_menus_item == 'Zoom In'){
		$advance_ecommerce_store_custom_css .='.primary-navigation ul a:hover{';
			$advance_ecommerce_store_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// menu font weight
	$advance_ecommerce_store_menu_weight = get_theme_mod('advance_ecommerce_store_menu_weight');{
		$advance_ecommerce_store_custom_css .='.primary-navigation a{';
			$advance_ecommerce_store_custom_css .='font-weight: '.esc_attr($advance_ecommerce_store_menu_weight).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	// Menu Color Option
	$advance_ecommerce_store_menu_color_settings = get_theme_mod('advance_ecommerce_store_menu_color_settings');
	$advance_ecommerce_store_custom_css .='.primary-navigation ul li a  {';
		$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_menu_color_settings).';';
	$advance_ecommerce_store_custom_css .='} ';

	// Menu Hover Color Option
	$advance_ecommerce_store_menu_hover_color_settings = get_theme_mod('advance_ecommerce_store_menu_hover_color_settings');
	$advance_ecommerce_store_custom_css .='.primary-navigation ul li a:hover {';
		$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_menu_hover_color_settings).';';
	$advance_ecommerce_store_custom_css .='} ';

	// Submenu Color Option
	$advance_ecommerce_store_submenu_color_settings = get_theme_mod('advance_ecommerce_store_submenu_color_settings');
	$advance_ecommerce_store_custom_css .='.primary-navigation ul.sub-menu li a, .primary-navigation ul.children li a {';
		$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_submenu_color_settings).';';
	$advance_ecommerce_store_custom_css .='} ';

	// Submenu Hover Color Option
	$advance_ecommerce_store_submenu_hover_color_settings = get_theme_mod('advance_ecommerce_store_submenu_hover_color_settings');
	$advance_ecommerce_store_custom_css .='.primary-navigation ul.sub-menu li a:hover, .primary-navigation ul.children li a:hover {';
	$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_submenu_hover_color_settings).';';
	$advance_ecommerce_store_custom_css .='} ';

	// responsive menu button 
	$advance_ecommerce_store_button_alignment = get_theme_mod('advance_ecommerce_store_button_alignment');
	if($advance_ecommerce_store_button_alignment != false){
		$advance_ecommerce_store_custom_css .='.toggle-menu.mobile-menu{';
			$advance_ecommerce_store_custom_css .='text-align: '.esc_attr($advance_ecommerce_store_button_alignment).';';
		$advance_ecommerce_store_custom_css .='}';
	} 

	//Toggle Button Color Option
	$advance_ecommerce_store_toggle_button_color_settings = get_theme_mod('advance_ecommerce_store_toggle_button_color_settings');
	$advance_ecommerce_store_custom_css .='.toggle-menu i  {';
		$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_toggle_button_color_settings).';';
	$advance_ecommerce_store_custom_css .='} ';

	// site tagline color
	$advance_ecommerce_store_site_tagline_color = get_theme_mod('advance_ecommerce_store_site_tagline_color');
	$advance_ecommerce_store_custom_css .='.logo p {';
		$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_site_tagline_color).' !important;';
	$advance_ecommerce_store_custom_css .='}';

	// site title color
	$advance_ecommerce_store_site_title_color = get_theme_mod('advance_ecommerce_store_site_title_color');
	$advance_ecommerce_store_custom_css .='.site-title a{';
		$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_site_title_color).' !important;';
	$advance_ecommerce_store_custom_css .='}';

	// site top-bottom logo padding 
	$advance_ecommerce_store_logo_padding_top = get_theme_mod('advance_ecommerce_store_logo_padding_top', '');
	$advance_ecommerce_store_custom_css .='.logo{';
	$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_logo_padding_top).'px !important; padding-bottom: '.esc_attr($advance_ecommerce_store_logo_padding_top).'px !important;';
	$advance_ecommerce_store_custom_css .='}';

	// site left-right logo padding 
	$advance_ecommerce_store_logo_padding_left = get_theme_mod('advance_ecommerce_store_logo_padding_left', '');
	$advance_ecommerce_store_custom_css .='.logo{';
	$advance_ecommerce_store_custom_css .='padding-left: '.esc_attr($advance_ecommerce_store_logo_padding_left).'px; padding-right: '.esc_attr($advance_ecommerce_store_logo_padding_left).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// site top-bottom logo margin 
	$advance_ecommerce_store_logo_margin_top = get_theme_mod('advance_ecommerce_store_logo_margin_top', '');
	$advance_ecommerce_store_custom_css .='.logo{';
	$advance_ecommerce_store_custom_css .='margin-top: '.esc_attr($advance_ecommerce_store_logo_margin_top).'px; margin-bottom: '.esc_attr($advance_ecommerce_store_logo_margin_top).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// site left-right logo margin
	$advance_ecommerce_store_logo_margin_left = get_theme_mod('advance_ecommerce_store_logo_margin_left', '');
	$advance_ecommerce_store_custom_css .='.logo{';
	$advance_ecommerce_store_custom_css .='margin-left: '.esc_attr($advance_ecommerce_store_logo_margin_left).'px; margin-right: '.esc_attr($advance_ecommerce_store_logo_margin_left).'px;';
	$advance_ecommerce_store_custom_css .='}';





