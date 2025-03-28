<?php
/**
 * Advance Ecommerce Store Theme Customizer
 *
 * @package advance-ecommerce-store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function advance_ecommerce_store_customize_register($wp_customize) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	//add home page setting pannel
	$wp_customize->add_panel('advance_ecommerce_store_panel_id', array(
		'priority'       => 12,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'advance-ecommerce-store'),
		'description'    => __('Description of what this panel does.', 'advance-ecommerce-store'),
	));

	// font array
	$advance_ecommerce_store_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Coming+Soon' => 'Coming+Soon',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Noto Sans' => 'Noto Sans',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Poppins' => 'Poppins',
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Roboto' => 'Roboto',
        'Roboto Condensed' => 'Roboto Condensed',
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Satisfy' => 'Satisfy',
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Unica One' => 'Unica One',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'advance_ecommerce_store_typography', array(
    	'title'      => __( 'Typography', 'advance-ecommerce-store' ),
		'priority'   => 30,
		'panel' => 'advance_ecommerce_store_panel_id'
	) );

	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_paragraph_color', array(
		'label' => __('Paragraph Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_paragraph_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( 'Paragraph Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	$wp_customize->add_setting('advance_ecommerce_store_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_typography',
		'setting'	=> 'advance_ecommerce_store_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_atag_color', array(
		'label' => __('"a" Tag Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_atag_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( '"a" Tag Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_li_color', array(
		'label' => __('"li" Tag Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_li_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( '"li" Tag Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_h1_color', array(
		'label' => __('H1 Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_h1_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( 'H1 Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('advance_ecommerce_store_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_h1_font_size',array(
		'label'	=> __('H1 Font Size','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_typography',
		'setting'	=> 'advance_ecommerce_store_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_h2_color', array(
		'label' => __('H2 Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_h2_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( 'H2 Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('advance_ecommerce_store_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_h2_font_size',array(
		'label'	=> __('H2 Font Size','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_typography',
		'setting'	=> 'advance_ecommerce_store_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_h3_color', array(
		'label' => __('H3 Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_h3_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( 'H3 Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('advance_ecommerce_store_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_h3_font_size',array(
		'label'	=> __('H3 Font Size','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_typography',
		'setting'	=> 'advance_ecommerce_store_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_h4_color', array(
		'label' => __('H4 Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_h4_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( 'H4 Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('advance_ecommerce_store_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_h4_font_size',array(
		'label'	=> __('H4 Font Size','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_typography',
		'setting'	=> 'advance_ecommerce_store_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_h5_color', array(
		'label' => __('H5 Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_h5_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( 'H5 Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('advance_ecommerce_store_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_h5_font_size',array(
		'label'	=> __('H5 Font Size','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_typography',
		'setting'	=> 'advance_ecommerce_store_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'advance_ecommerce_store_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_h6_color', array(
		'label' => __('H6 Color', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_typography',
		'settings' => 'advance_ecommerce_store_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('advance_ecommerce_store_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_h6_font_family', array(
	    'section'  => 'advance_ecommerce_store_typography',
	    'label'    => __( 'H6 Fonts','advance-ecommerce-store'),
	    'type'     => 'select',
	    'choices'  => $advance_ecommerce_store_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('advance_ecommerce_store_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_h6_font_size',array(
		'label'	=> __('H6 Font Size','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_typography',
		'setting'	=> 'advance_ecommerce_store_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','advance-ecommerce-store'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','advance-ecommerce-store'),
            'Transparent Background' => __('Transparent Background','advance-ecommerce-store'),
        ),
	) );

  	// woocommerce section
	$wp_customize->add_section('advance_ecommerce_store_woocommerce_settings', array(
		'title'    => __('WooCommerce Settings', 'advance-ecommerce-store'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

    $wp_customize->add_setting( 'advance_ecommerce_store_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_ecommerce_store_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_woocommerce_settings'
    ));

    // shop page sidebar alignment
    $wp_customize->add_setting('advance_ecommerce_store_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'advance-ecommerce-store'),
		'section'        => 'advance_ecommerce_store_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-ecommerce-store'),
			'Right Sidebar' => __('Right Sidebar', 'advance-ecommerce-store'),
		),
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_wocommerce_single_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_ecommerce_store_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_woocommerce_settings'
    ));
    
    // single product page sidebar alignment
    $wp_customize->add_setting('advance_ecommerce_store_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'advance-ecommerce-store'),
		'section'        => 'advance_ecommerce_store_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-ecommerce-store'),
			'Right Sidebar' => __('Right Sidebar', 'advance-ecommerce-store'),
		),
	));

	$wp_customize->add_setting('advance_ecommerce_store_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_woocommerce_settings',
    ));

	$wp_customize->add_setting('advance_ecommerce_store_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_woocommerce_settings',
    ));

    $wp_customize->add_setting( 'advance_ecommerce_store_wooproducts_per_columns' , array(
		'default'           => 4,
		'transport'         => 'refresh',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'advance-ecommerce-store' ),
		'section'  => 'advance_ecommerce_store_woocommerce_settings',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('advance_ecommerce_store_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','advance-ecommerce-store'),
		'section'	=> 'advance_ecommerce_store_woocommerce_settings',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control( 'advance_ecommerce_store_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control( 'advance_ecommerce_store_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_ecommerce_store_sanitize_number_range',
	));
	$wp_customize->add_control('advance_ecommerce_store_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_ecommerce_store_sanitize_number_range',
	));
	$wp_customize->add_control('advance_ecommerce_store_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('advance_ecommerce_store_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_choices'
    ));
    $wp_customize->add_control('advance_ecommerce_store_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','advance-ecommerce-store'),
       'choices' => array(
            'Yes' => __('Yes','advance-ecommerce-store'),
            'No' => __('No','advance-ecommerce-store'),
        ),
       'section' => 'advance_ecommerce_store_woocommerce_settings',
    ));

	$wp_customize->add_setting( 'advance_ecommerce_store_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'advance_ecommerce_store_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_ecommerce_store_sanitize_number_range',
	));
	$wp_customize->add_control('advance_ecommerce_store_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
	),));

	$wp_customize->add_setting('advance_ecommerce_store_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_woocommerce_settings',
        'choices' => array(
            'Right' => __('Right','advance-ecommerce-store'),
            'Left' => __('Left','advance-ecommerce-store'),
        ),
	) );

	$wp_customize->add_setting( 'advance_ecommerce_store_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','advance-ecommerce-store'),
        'section'  => 'advance_ecommerce_store_woocommerce_settings',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('advance_ecommerce_store_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float'
	));
	$wp_customize->add_control('advance_ecommerce_store_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_woocommerce_settings',
		'type'=> 'number'
	));

	// sale button padding
	$wp_customize->add_setting( 'advance_ecommerce_store_sale_padding_top',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control( 'advance_ecommerce_store_sale_padding_top',	array(
		'label' => esc_html__( ' Product Sale Top Bottom Padding','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_sale_padding_left',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control( 'advance_ecommerce_store_sale_padding_left',	array(
		'label' => esc_html__( ' Product Sale Left Right Padding','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'advance_ecommerce_store_theme_color_option', array(
		'panel' => 'advance_ecommerce_store_panel_id',
		'title' => esc_html__( 'Theme Color Option', 'advance-ecommerce-store' )
	) );

  	$wp_customize->add_setting( 'advance_ecommerce_store_theme_color', array(
	    'default' => '#cb4f00',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme color on just one click.', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_theme_color_option',
	    'settings' => 'advance_ecommerce_store_theme_color',
  	)));

	// navigation menu
	$wp_customize->add_section( 'advance_ecommerce_store_menu_settings' , array(
    	'title'      => __( 'Menus Settings', 'advance-ecommerce-store' ),
		'priority'   => null,
		'panel' => 'advance_ecommerce_store_panel_id'
	) );

	$wp_customize->add_setting('advance_ecommerce_store_text_tranform_menu',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
 	));
 	$wp_customize->add_control('advance_ecommerce_store_text_tranform_menu',array(
		'type' => 'radio',
		'label' => __('Menu Text Transform','advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_menu_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','advance-ecommerce-store'),
		   'Lowercase' => __('Lowercase','advance-ecommerce-store'),
		   'Capitalize' => __('Capitalize','advance-ecommerce-store'),
		),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_menus_font_size',array(
		'default'=> 12,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float'
	));
	$wp_customize->add_control('advance_ecommerce_store_menus_font_size',array(
		'label'	=> __('Menus Font Size','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_menu_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_menu_weight',array(
		'label'	=> __('Menus Font Weight','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_menu_settings',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','advance-ecommerce-store'),
            '200' => __('200','advance-ecommerce-store'),
            '300' => __('300','advance-ecommerce-store'),
            '400' => __('400','advance-ecommerce-store'),
            '500' => __('500','advance-ecommerce-store'),
            '600' => __('600','advance-ecommerce-store'),
            '700' => __('700','advance-ecommerce-store'),
            '800' => __('800','advance-ecommerce-store'),
            '900' => __('900','advance-ecommerce-store'),
        ),
	));

	$wp_customize->add_setting('advance_ecommerce_store_menus_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float'
	));
	$wp_customize->add_control('advance_ecommerce_store_menus_padding',array(
		'label'	=> __('Menus Padding','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_menus_item_style',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_menus_item_style',array(
		'type' => 'select',
		'section' => 'advance_ecommerce_store_menu_settings',
		'label' => __('Menu Hover Effect','advance-ecommerce-store'),
		'choices' => array(
			'None' => __('None','advance-ecommerce-store'),
			'Zoom In' => __('Zoom In','advance-ecommerce-store'),
		),
	) );

	$wp_customize->add_setting( 'advance_ecommerce_store_menu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_menu_color_settings', array(
  		'label' => __('Menu Color', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_menu_settings',
	    'settings' => 'advance_ecommerce_store_menu_color_settings',
  	)));

  	$wp_customize->add_setting( 'advance_ecommerce_store_menu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_menu_hover_color_settings', array(
  		'label' => __('Menu Hover Color', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_menu_settings',
	    'settings' => 'advance_ecommerce_store_menu_hover_color_settings',
  	)));

  	$wp_customize->add_setting( 'advance_ecommerce_store_submenu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_submenu_color_settings', array(
  		'label' => __('Sub-menu Color', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_menu_settings',
	    'settings' => 'advance_ecommerce_store_submenu_color_settings',
  	)));

  	$wp_customize->add_setting( 'advance_ecommerce_store_submenu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_submenu_hover_color_settings', array(
  		'label' => __('Sub-menu Hover Color', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_menu_settings',
	    'settings' => 'advance_ecommerce_store_submenu_hover_color_settings',
  	)));

	//Slider
	$wp_customize->add_section( 'advance_ecommerce_store_slider' , array(
    	'title'      => __( 'Slider Settings', 'advance-ecommerce-store' ),
		'priority'   => null,
		'panel' => 'advance_ecommerce_store_panel_id'
	) );

	$wp_customize->add_setting('advance_ecommerce_store_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','advance-ecommerce-store'),
		'description' => "<ul><li>". esc_html__('You can change how many slides there are.','advance-ecommerce-store') ."</li><li>". esc_html__('You can change the font family and the colours of headings and subheadings.','advance-ecommerce-store') ."</li><li>". esc_html__('And so on...','advance-ecommerce-store') ."</li></ul><a target='_blank' href='". esc_url(ADVANCE_ECOMMERCE_STORE_BUY_NOW) ." '>". esc_html__('Upgrade to Pro','advance-ecommerce-store') ."</a>",
		'section'=> 'advance_ecommerce_store_slider'
	));

	$wp_customize->add_setting('advance_ecommerce_store_slider_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_slider',
    ));

    $wp_customize->add_setting('advance_ecommerce_store_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_slider'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_slider'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_slider_button_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_slider_button_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_slider'
    ));

	$wp_customize->add_setting( 'advance_ecommerce_store_slider_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_slider_small_title', array(
		'label'    => __( 'Add Slider Small Text', 'advance-ecommerce-store' ),
		'section'  => 'advance_ecommerce_store_slider',
		'type'     => 'text'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'advance_ecommerce_store_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'advance_ecommerce_store_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'advance_ecommerce_store_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'advance-ecommerce-store' ),
			'section'  => 'advance_ecommerce_store_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('advance_ecommerce_store_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','advance-ecommerce-store'),
		'description'    => __('This option will add colors over the slider.','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_slider'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_slider_image_overlay_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_ecommerce_store_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','advance-ecommerce-store'),
		'settings' => 'advance_ecommerce_store_slider_image_overlay_color',
	)));

	//content layout
    $wp_customize->add_setting('advance_ecommerce_store_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_slider',
        'choices' => array(
            'Center' => __('Center','advance-ecommerce-store'),
            'Left' => __('Left','advance-ecommerce-store'),
            'Right' => __('Right','advance-ecommerce-store'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'advance_ecommerce_store_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_slider',
		'type'        => 'number',
		'settings'    => 'advance_ecommerce_store_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('advance_ecommerce_store_slider_image_opacity',array(
      'default'              => 0.9,
      'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control( 'advance_ecommerce_store_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','advance-ecommerce-store' ),
	'section'     => 'advance_ecommerce_store_slider',
	'type'        => 'select',
	'settings'    => 'advance_ecommerce_store_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr__('0','advance-ecommerce-store'),
		'0.1' =>  esc_attr__('0.1','advance-ecommerce-store'),
		'0.2' =>  esc_attr__('0.2','advance-ecommerce-store'),
		'0.3' =>  esc_attr__('0.3','advance-ecommerce-store'),
		'0.4' =>  esc_attr__('0.4','advance-ecommerce-store'),
		'0.5' =>  esc_attr__('0.5','advance-ecommerce-store'),
		'0.6' =>  esc_attr__('0.6','advance-ecommerce-store'),
		'0.7' =>  esc_attr__('0.7','advance-ecommerce-store'),
		'0.8' =>  esc_attr__('0.8','advance-ecommerce-store'),
		'0.9' =>  esc_attr__('0.9','advance-ecommerce-store')
	),
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'advance_ecommerce_store_sanitize_number_range',
	));
	$wp_customize->add_control( 'advance_ecommerce_store_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('advance_ecommerce_store_slider_image_height',array(
		'default'=> __('550','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_slider_image_height',array(
		'label'	=> __('Slider Image Height','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_slider_button',array(
		'default'=> __('READ MORE','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_slider_button',array(
		'label'	=> __('Slider Button Text','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_slider_button_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('advance_ecommerce_store_slider_button_url',array(
		'label'	=> esc_html__('Add Button Link','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_slider',
		'type'=> 'url'
	));

	$wp_customize->add_setting('advance_ecommerce_store_slider_btn_bg_color', array(
		'default'           => '#cb4f00',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_ecommerce_store_slider_btn_bg_color', array(
		'label'    => __('Slider Button Background Color', 'advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_slider',
	)));

	$wp_customize->add_setting('advance_ecommerce_store_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	//Products Service
	$wp_customize->add_section( 'advance_ecommerce_store_services_section' , array(
    	'title'      => __( 'Product Services', 'advance-ecommerce-store' ),
		'priority'   => null,
		'panel' => 'advance_ecommerce_store_panel_id'
	) );

	$wp_customize->add_setting('advance_ecommerce_store_services_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_services_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','advance-ecommerce-store'),
		'description' => "<ul><li>". esc_html__('For more settings and features, please explore our premium theme.','advance-ecommerce-store') ."</li></ul><a target='_blank' href='". esc_url(ADVANCE_ECOMMERCE_STORE_BUY_NOW) ." '>". esc_html__('Upgrade to Pro','advance-ecommerce-store') ."</a>",
		'section'=> 'advance_ecommerce_store_services_section'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('advance_ecommerce_store_product_service',array(
		'default'	=> 'select',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_product_service',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Services','advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_services_section',
	));

	//New Arrivals
	$wp_customize->add_section( 'advance_ecommerce_store_products' , array(
    	'title'      => __( 'New Arrivals', 'advance-ecommerce-store' ),
		'priority'   => null,
		'panel' => 'advance_ecommerce_store_panel_id'
	) );

	$wp_customize->add_setting('advance_ecommerce_store_product_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_product_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','advance-ecommerce-store'),
		'description' => "<ul><li>". esc_html__('Includes settings to set section title.','advance-ecommerce-store') ."</li><li>". esc_html__('Contains settings for the background colour.','advance-ecommerce-store') ."</li><li>". esc_html__('Contains options for background images.','advance-ecommerce-store') ."</li><li>". esc_html__('You can change the font family and colours of heading.','advance-ecommerce-store') ."</li><li>". esc_html__('And so on...','advance-ecommerce-store') ."</li></ul><a target='_blank' href='". esc_url(ADVANCE_ECOMMERCE_STORE_BUY_NOW) ." '>". esc_html__('Upgrade to Pro','advance-ecommerce-store') ."</a>",
		'section'=> 'advance_ecommerce_store_products'
	));

	$wp_customize->add_setting('advance_ecommerce_store_section_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_ecommerce_store_section_title', array(
		'label'   => __('Section Title', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_products',
		'type'    => 'text',
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_product_page', array(
		'default'           => '',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'advance_ecommerce_store_product_page', array(
		'label'    => __( 'Select Page', 'advance-ecommerce-store' ),
		'section'  => 'advance_ecommerce_store_products',
		'type'     => 'dropdown-pages'
	));

	//Blog Post
	$wp_customize->add_section('advance_ecommerce_store_blog_post',array(
		'title'	=> __('Blog Post Settings','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_blog_post'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_date_icon',array(
		'label'	=> __('Post Date Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_blog_post'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_comment_icon',array(
		'label'	=> __('Comments Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_blog_post'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_author_icon',array(
		'label'	=> __('Author Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_blog_post'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_time_icon',array(
		'label'	=> __('Time Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_blog_post'
    ));

    $wp_customize->add_setting( 'advance_ecommerce_store_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'advance_ecommerce_store_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_show_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'advance_ecommerce_store_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'advance-ecommerce-store'),
		'type' => 'checkbox',
		'section' => 'advance_ecommerce_store_blog_post',
	));

    $wp_customize->add_setting('advance_ecommerce_store_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_blog_post',
        'choices' => array(
            'No Content' => __('No Content','advance-ecommerce-store'),
            'Excerpt Content' => __('Excerpt Content','advance-ecommerce-store'),
            'Full Content' => __('Full Content','advance-ecommerce-store'),
        ),
	) );

    $wp_customize->add_setting( 'advance_ecommerce_store_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_blog_post',
		'type'        => 'number',
		'settings'    => 'advance_ecommerce_store_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'advance_ecommerce_store_post_suffix_option', array(
		'default'   => __('...','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_ecommerce_store_post_suffix_option',
	) );

	$wp_customize->add_setting( 'advance_ecommerce_store_metabox_separator_blog_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','advance-ecommerce-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'advance-ecommerce-store' ),
        ),
		'section'     => 'advance_ecommerce_store_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_ecommerce_store_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('advance_ecommerce_store_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_blog_post',
        'choices' => array(
            'In Box' => __('In Box','advance-ecommerce-store'),
            'Without Box' => __('Without Box','advance-ecommerce-store'),
        ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_blog_post_alignment',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_blog_post_alignment',array(
	    'type' => 'select',
	    'label' => __('Blog Post Alignment','advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_blog_post',
	    'choices' => array(
	    	'Left' => __('Left','advance-ecommerce-store'),
	        'Center' => __('Center','advance-ecommerce-store'),
	        'Right' => __('Right','advance-ecommerce-store')
	    ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_blog_post'
    ));

	$wp_customize->add_setting( 'advance_ecommerce_store_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_choices'
    ));
    $wp_customize->add_control( 'advance_ecommerce_store_pagination_settings', array(
        'section' => 'advance_ecommerce_store_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'advance-ecommerce-store' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'advance-ecommerce-store' ),
            'next-prev' => __( 'Next / Previous', 'advance-ecommerce-store' ),
    )));

	$wp_customize->add_setting('advance_ecommerce_store_pagination_alignment',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_pagination_alignment',array(
	    'type' => 'select',
	    'label' => __('Pagination Alignment','advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_blog_post',
	    'choices' => array(
	    	'Left' => __('Left','advance-ecommerce-store'),
	        'Center' => __('Center','advance-ecommerce-store'),
	        'Right' => __('Right','advance-ecommerce-store')
	    ),
	) );

	// Button
	$wp_customize->add_section( 'advance_ecommerce_store_theme_button', array(
		'title' => __('Button Option','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_button_text',array(
		'default'=> __('Read More','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_button_text',array(
		'label'	=> __('Add Button Text','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_theme_button',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float'
	));
	$wp_customize->add_control('advance_ecommerce_store_button_font_size',array(
		'label'	=> __('Button Font Size','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_btn_font_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_btn_font_weight',array(
		'label'	=> __('Button Font Weight','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_theme_button',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','advance-ecommerce-store'),
            '200' => __('200','advance-ecommerce-store'),
            '300' => __('300','advance-ecommerce-store'),
            '400' => __('400','advance-ecommerce-store'),
            '500' => __('500','advance-ecommerce-store'),
            '600' => __('600','advance-ecommerce-store'),
            '700' => __('700','advance-ecommerce-store'),
            '800' => __('800','advance-ecommerce-store'),
            '900' => __('900','advance-ecommerce-store'),
        ),
	));

	$wp_customize->add_setting('advance_ecommerce_store_button_text_transform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
 	));
 	$wp_customize->add_control('advance_ecommerce_store_button_text_transform',array(
		'type' => 'radio',
		'label' => __('Button Text Transform','advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_theme_button',
		'choices' => array(
		   'Uppercase' => __('Uppercase','advance-ecommerce-store'),
		   'Lowercase' => __('Lowercase','advance-ecommerce-store'),
		   'Capitalize' => __('Capitalize','advance-ecommerce-store'),
		),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Single Post Settings
	$wp_customize->add_section('advance_ecommerce_store_single_post_settings',array(
		'title'	=> __('Single Post Settings','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_single_post_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_single_post_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_single_post_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_single_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_single_post_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_single_post_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_single_post_comment_icon',array(
		'label'	=> __('Single Post Comments Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_single_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_single_post_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_single_post_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_single_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_single_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_single_post_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_single_post_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Time','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_ecommerce_store_category_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_category_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Category','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

    $wp_customize->add_setting( 'advance_ecommerce_store_single_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_single_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_single_post_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'advance_ecommerce_store_single_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_single_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','advance-ecommerce-store' ),
		'section' => 'advance_ecommerce_store_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_single_post_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'advance_ecommerce_store_single_post_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'advance-ecommerce-store'),
		'type' => 'checkbox',
		'section' => 'advance_ecommerce_store_single_post_settings',
	));

    $wp_customize->add_setting( 'advance_ecommerce_store_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
	) );
	$wp_customize->add_control('advance_ecommerce_store_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Single Post Comment Box','advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_single_post_settings'
	));

	$wp_customize->add_setting( 'advance_ecommerce_store_single_post_breadcrumb',array(
		'default' => false,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_ecommerce_store_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','advance-ecommerce-store' ),
        'section' => 'advance_ecommerce_store_single_post_settings'
    ));

    // show/hide single post pagination
    $wp_customize->add_setting('advance_ecommerce_store_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Pagination','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

    //Comment Textarea Width
    $wp_customize->add_setting( 'advance_ecommerce_store_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'advance_ecommerce_store_comment_width', array(
		'label'  => __('Comment Textarea Width','advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_single_post_settings',
		'description' => __('Measurement is in %.','advance-ecommerce-store'),
		'input_attrs' => array(
		   'step'=> 1,
		   'min' => 0,
		   'max' => 100,
		),
		'type'		=> 'number'
    ));

    $wp_customize->add_setting( 'advance_ecommerce_store_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','advance-ecommerce-store'),
		'type'        => 'text',
		'settings'    => 'advance_ecommerce_store_single_post_meta_seperator',
	) );

	$wp_customize->add_setting('advance_ecommerce_store_title_comment_form',array(
       'default' => __('Leave a Reply','advance-ecommerce-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_ecommerce_store_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_comment_form_button_content',array(
       'default' => __('Post Comment','advance-ecommerce-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_ecommerce_store_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_single_post_settings'
    ));

    //Grid Post Settings
	$wp_customize->add_section('advance_ecommerce_store_grid_post_settings',array(
		'title'	=> __('Grid Post Settings','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_grid_post_date',array(
       'type' => 'checkbox',
       'label' => __('Post Date','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_grid_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_grid_post_date_icon',array(
		'label'	=> __('Date Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_grid_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_grid_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Post Comment','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_grid_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_grid_post_comment_icon',array(
		'label'	=> __('Comment Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_grid_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_grid_post_author',array(
       'type' => 'checkbox',
       'label' => __('Post Author','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_grid_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_grid_post_author_icon',array(
		'label'	=> __('Author Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_grid_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_time',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_grid_post_time',array(
       'type' => 'checkbox',
       'label' => __('Post Time','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_grid_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_grid_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_grid_post_time_icon',array(
		'label'	=> __('Time Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_grid_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'advance_ecommerce_store_grid_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_grid_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_grid_post_settings',
		'type'        => 'number',
		'settings'    => 'advance_ecommerce_store_grid_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'advance_ecommerce_store_metabox_separator_grid_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_metabox_separator_grid_post', array(
		'label'       => esc_html__( 'Meta Box Separator','advance-ecommerce-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'advance-ecommerce-store' ),
        ),
		'section'     => 'advance_ecommerce_store_grid_post_settings',
		'type'        => 'text',
		'settings'    => 'advance_ecommerce_store_metabox_separator_grid_post',
	) );

    //Related Post Settings
	$wp_customize->add_section('advance_ecommerce_store_related_post_settings',array(
		'title'	=> __('Related Post Settings','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

    $wp_customize->add_setting( 'advance_ecommerce_store_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_ecommerce_store_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','advance-ecommerce-store' ),
        'section' => 'advance_ecommerce_store_related_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_related_post_title',array(
		'default'=> __('Related Posts','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_related_post_title',array(
		'label'	=> __('Related Post Title','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_related_post_settings',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('advance_ecommerce_store_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_related_posts_number',array(
		'label'	=> __('Related Post Number','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_related_post_settings',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

    $wp_customize->add_setting('advance_ecommerce_store_show_featured_image_related_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_show_featured_image_related_post',array(
       'type' => 'checkbox',
       'label' => __('Related Post Image','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_related_post_settings'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_related_post_settings',
        'choices' => array(
            'categories' => __('Categories','advance-ecommerce-store'),
            'tags' => __('Tags','advance-ecommerce-store'),
        ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_related_post_excerpt_number',array(
		'default'=> 20,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_related_post_excerpt_number',array(
		'label'	=> __('Related Post Content Limit','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_related_post_settings',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Layouts
	$wp_customize->add_section('advance_ecommerce_store_left_right', array(
		'title'    => __('Layout Settings', 'advance-ecommerce-store'),
		'panel'    => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_theme_options',array(
        'default' => 'Default',
	    'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','advance-ecommerce-store'),
        'description' => __('Here you can change the Width layout. ','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_left_right',
        'choices' => array(
            'Default' => __('Default','advance-ecommerce-store'),
            'Container' => __('Container','advance-ecommerce-store'),
            'Box Container' => __('Box Container','advance-ecommerce-store'),
        ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_preloader_option',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_left_right'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_preloader_type_options', array(
		'default'           => 'Preloader 1',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_preloader_type_options',array(
		'type'           => 'radio',
		'label'          => __('Preloader Type', 'advance-ecommerce-store'),
		'section'        => 'advance_ecommerce_store_left_right',
		'choices'        => array(
			'Preloader 1'  => __('Preloader 1', 'advance-ecommerce-store'),
			'Preloader 2' => __('Preloader 2', 'advance-ecommerce-store'),
		),
	));

	$wp_customize->add_setting('advance_ecommerce_store_preloader_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'advance_ecommerce_store_preloader_bg_image',array(
        'label' => __('Preloader Background Image','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_left_right'
	)));

    $wp_customize->add_setting( 'advance_ecommerce_store_loader_background_color_first', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_loader_background_color_first', array(
  		'label' => __('Background Color for Preloader', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_left_right',
	    'settings' => 'advance_ecommerce_store_loader_background_color_first',
  	)));

  	$wp_customize->add_setting( 'advance_ecommerce_store_breadcrumb_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_breadcrumb_color', array(
  		'label' => __('Breadcrumb Color', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_left_right',
	    'settings' => 'advance_ecommerce_store_breadcrumb_color',
  	)));

  	$wp_customize->add_setting( 'advance_ecommerce_store_breadcrumb_bg_color', array(
	    'default' => '#cb4f00',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_breadcrumb_bg_color', array(
  		'label' => __('Breadcrumb Background Color', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_left_right',
	    'settings' => 'advance_ecommerce_store_breadcrumb_bg_color',
  	)));

	$wp_customize->add_setting( 'advance_ecommerce_store_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_ecommerce_store_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','advance-ecommerce-store' ),
        'section' => 'advance_ecommerce_store_left_right'
    ));

    $wp_customize->add_setting( 'advance_ecommerce_store_sticky_header_padding_settings', array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_ecommerce_store_sticky_header_padding_settings', array(
		'label'       => esc_html__( 'Sticky Header Padding','advance-ecommerce-store' ),
		'section'     => 'advance_ecommerce_store_left_right',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );
    
    $wp_customize->add_setting( 'advance_ecommerce_store_single_page_breadcrumb',array(
		'default' => false,
      	'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_ecommerce_store_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','advance-ecommerce-store' ),
        'section' => 'advance_ecommerce_store_left_right'
    ));

	$wp_customize->add_setting('advance_ecommerce_store_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_layout_options',array(
		'type'           => 'radio',
		'label' => __('Blog Post Layouts', 'advance-ecommerce-store'),
		'section'       => 'advance_ecommerce_store_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-ecommerce-store'),
			'Right Sidebar' => __('Right Sidebar', 'advance-ecommerce-store'),
			'One Column'    => __('One Column', 'advance-ecommerce-store'),
			'Three Columns' => __('Three Columns', 'advance-ecommerce-store'),
			'Four Columns'  => __('Four Columns', 'advance-ecommerce-store'),
			'Grid Layout'   => __('Grid Layout', 'advance-ecommerce-store')
		),
	));

	$wp_customize->add_setting('advance_ecommerce_store_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'advance-ecommerce-store'),
		'section'        => 'advance_ecommerce_store_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-ecommerce-store'),
			'Right Sidebar' => __('Right Sidebar', 'advance-ecommerce-store'),
			'One Column'    => __('One Column', 'advance-ecommerce-store'),
		),
	));

	$wp_customize->add_setting('advance_ecommerce_store_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
	));
	$wp_customize->add_control('advance_ecommerce_store_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'advance-ecommerce-store'),
		'section'        => 'advance_ecommerce_store_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-ecommerce-store'),
			'Right Sidebar' => __('Right Sidebar', 'advance-ecommerce-store'),
			'One Column'    => __('One Column', 'advance-ecommerce-store'),
		),
	));

	//no Result Found
	$wp_customize->add_section('advance_ecommerce_store_noresult_found',array(
		'title'	=> __('No Result Found','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_nosearch_found_title',array(
		'default'=> __('Nothing Found','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_noresult_found'
    ));

	//404 Page Setting
	$wp_customize->add_section('advance_ecommerce_store_404_page_setting',array(
		'title'	=> __('404 Page','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_title_404_page',array(
		'default'=> __('404 Not Found', 'advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_title_404_page',array(
		'label'	=> __('404 Page Title','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.', 'advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_content_404_page',array(
		'label'	=> __('404 Page Content','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_ecommerce_store_button_404_page',array(
		'default'=> __('Back to Home Page','advance-ecommerce-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_ecommerce_store_button_404_page',array(
		'label'	=> __('404 Page Button','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('advance_ecommerce_store_responsive_setting',array(
		'title'	=> __('Responsive Settings','advance-ecommerce-store'),
		'panel' => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_button_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_button_alignment',array(
        'type' => 'select',
        'label' => __('Menu Button Alignment','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_responsive_setting',
        'choices' => array(
            'Left' => __('Left','advance-ecommerce-store'),
            'Right' => __('Right','advance-ecommerce-store'),
            'Center' => __('Center','advance-ecommerce-store'),
        ),
	) );

  	$wp_customize->add_setting( 'advance_ecommerce_store_toggle_button_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_ecommerce_store_toggle_button_color_settings', array(
  		'label' => __('Toggle Button Color', 'advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_responsive_setting',
	    'settings' => 'advance_ecommerce_store_toggle_button_color_settings',
  	)));

	$wp_customize->add_setting('advance_ecommerce_store_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_open_menu_icon',array(
		'label'	=> __('Open Menu Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_responsive_setting',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_ecommerce_store_close_menu_icon',array(
		'default'	=> 'far fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_close_menu_icon',array(
		'label'	=> __('Close Menu Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_responsive_setting',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_ecommerce_store_mobile_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_mobile_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_responsive_setting'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_responsive_setting'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_responsive_slider',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_responsive_setting'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_responsive_setting'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_responsive_setting'
    ));

    $wp_customize->add_setting('advance_ecommerce_store_responsive_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_ecommerce_store_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','advance-ecommerce-store'),
       'section' => 'advance_ecommerce_store_responsive_setting'
    ));

	//footer
	$wp_customize->add_section('advance_ecommerce_store_footer_section', array(
		'title'       => __('Footer Text', 'advance-ecommerce-store'),
		'priority'    => null,
		'panel'       => 'advance_ecommerce_store_panel_id',
	));

	$wp_customize->add_setting('advance_ecommerce_store_show_hide_footer',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_ecommerce_store_show_hide_footer',array(
     	'type' => 'checkbox',
        'label' => __('Show / Hide Footer','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_footer_section',
	));

	$wp_customize->add_setting('advance_ecommerce_store_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices',
    ));
    $wp_customize->add_control('advance_ecommerce_store_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'advance-ecommerce-store'),
        'section'     => 'advance_ecommerce_store_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'advance-ecommerce-store'),
        'choices' => array(
            '1'     => __('One', 'advance-ecommerce-store'),
            '2'     => __('Two', 'advance-ecommerce-store'),
            '3'     => __('Three', 'advance-ecommerce-store'),
            '4'     => __('Four', 'advance-ecommerce-store')
        ),
    ));

    $wp_customize->add_setting('advance_ecommerce_store_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_ecommerce_store_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_footer_section',
	)));

	$wp_customize->add_setting('advance_ecommerce_store_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'advance_ecommerce_store_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_footer_section'
	)));

	$wp_customize->add_setting('advance_ecommerce_store_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','advance-ecommerce-store'),
	        'Center' => __('Center','advance-ecommerce-store'),
	        'Right' => __('Right','advance-ecommerce-store')
	    ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','advance-ecommerce-store'),
	    'section' => 'advance_ecommerce_store_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','advance-ecommerce-store'),
	        'Center' => __('Center','advance-ecommerce-store'),
	        'Right' => __('Right','advance-ecommerce-store')
	    ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_footer_font_size',array(
		'default'=> 24,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float'
	));
	$wp_customize->add_control('advance_ecommerce_store_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_footer_text_tranform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
 	));
 	$wp_customize->add_control('advance_ecommerce_store_footer_text_tranform',array(
		'type' => 'radio',
		'label' => __('Footer Heading Text Transform','advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_footer_section',
		'choices' => array(
		   'Uppercase' => __('Uppercase','advance-ecommerce-store'),
		   'Lowercase' => __('Lowercase','advance-ecommerce-store'),
		   'Capitalize' => __('Capitalize','advance-ecommerce-store'),
		),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_show_hide_copyright',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_ecommerce_store_show_hide_copyright',array(
     	'type' => 'checkbox',
        'label' => __('Show / Hide Copyright','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_footer_section',
	));

	$wp_customize->add_setting('advance_ecommerce_store_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_ecommerce_store_footer_copy', array(
		'label'   => __('Copyright Text', 'advance-ecommerce-store'),
		'section' => 'advance_ecommerce_store_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('advance_ecommerce_store_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_footer_section',
        'choices' => array(
            'left' => __('Left','advance-ecommerce-store'),
            'right' => __('Right','advance-ecommerce-store'),
            'center' => __('Center','advance-ecommerce-store'),
        ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','advance-ecommerce-store' ),
		'section'=> 'advance_ecommerce_store_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('advance_ecommerce_store_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_copyright_padding',array(
		'label'	=> __('Copyright Padding','advance-ecommerce-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_ecommerce_store_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_ecommerce_store_footer_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_ecommerce_store_footer_text_color', array(
		'label'    => __('Copyright Text Color', 'advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_footer_section',
	)));

	$wp_customize->add_setting('advance_ecommerce_store_footer_text_bg_color', array(
		'default'           => '#cb4f00',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_ecommerce_store_footer_text_bg_color', array(
		'label'    => __('Copyright Background Color', 'advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_footer_section',
	)));

	$wp_customize->add_setting('advance_ecommerce_store_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_ecommerce_store_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','advance-ecommerce-store'),
      	'section' => 'advance_ecommerce_store_footer_section',
	));

	$wp_customize->add_setting('advance_ecommerce_store_back_to_top_icon',array(
		'default'	=> 'fas fa-chevron-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Ecommerce_Store_Icon_Changer(
        $wp_customize,'advance_ecommerce_store_back_to_top_icon',array(
		'label'	=> __('Scroll Back to Top Icon','advance-ecommerce-store'),
		'transport' => 'refresh',
		'section'	=> 'advance_ecommerce_store_footer_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_ecommerce_store_back_to_top_bg_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_ecommerce_store_back_to_top_bg_color', array(
		'label'    => __('Back to Top Background Color', 'advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_footer_section',
	)));

    $wp_customize->add_setting('advance_ecommerce_store_back_to_top_bg_hover_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_ecommerce_store_back_to_top_bg_hover_color', array(
		'label'    => __('Back to Top Background Hover Color', 'advance-ecommerce-store'),
		'section'  => 'advance_ecommerce_store_footer_section',
	)));

	$wp_customize->add_setting('advance_ecommerce_store_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_ecommerce_store_sanitize_choices'
	));
	$wp_customize->add_control('advance_ecommerce_store_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','advance-ecommerce-store'),
        'section' => 'advance_ecommerce_store_footer_section',
        'choices' => array(
            'Left' => __('Left','advance-ecommerce-store'),
            'Right' => __('Right','advance-ecommerce-store'),
            'Center' => __('Center','advance-ecommerce-store'),
        ),
	) );

	$wp_customize->add_setting('advance_ecommerce_store_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'advance_ecommerce_store_sanitize_float',
	));
	$wp_customize->add_control('advance_ecommerce_store_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','advance-ecommerce-store'),
		'section'=> 'advance_ecommerce_store_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	) );

}
add_action('customize_register', 'advance_ecommerce_store_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Advance_Ecommerce_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the controls.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Advance_Ecommerce_Store_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Advance_Ecommerce_Store_Customize_Section_Pro(
				$manager,
				'advance_ecommerce_store_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Ecommerce Pro', 'advance-ecommerce-store'),
					'pro_text' => esc_html__('Get Pro', 'advance-ecommerce-store'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/wordpress-ecommerce-theme/'),
				)
			)
		);

		$manager->add_section(
			new Advance_Ecommerce_Store_Customize_Section_Pro(
				$manager,
				'advance_ecommerce_store_doc_link',
				array(
					'priority' => 10,
					'title'    => esc_html__('Guide', 'advance-ecommerce-store'),
					'pro_text' => esc_html__('Documentation', 'advance-ecommerce-store'),
					'pro_url'  => esc_url('https://themeshopy.com/demo/docs/free-advance-ecommerce/'),
				)
			)
		);

		$manager->add_section(
			new Advance_Ecommerce_Store_Customize_Section_Pro(
				$manager,
				'advance_ecommerce_store_demo_link',
				array(
					'priority' => 11,
					'title'    => esc_html__('Live Demo', 'advance-ecommerce-store'),
					'pro_text' => esc_html__('Preview', 'advance-ecommerce-store'),
					'pro_url'  => esc_url('https://themeshopy.com/advance-ecommerce-store-pro/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('advance-ecommerce-store-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));

		wp_enqueue_style('advance-ecommerce-store-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Advance_Ecommerce_Store_Customize::get_instance();
