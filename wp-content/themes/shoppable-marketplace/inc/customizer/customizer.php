<?php
/**
 * Enqueue customizer css.
 */

function shoppable_marketplace_customize_enqueue_style() {

	wp_enqueue_style( 'shoppable-marketplace-customize-controls', get_stylesheet_directory_uri() . '/inc/customizer/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'shoppable_marketplace_customize_enqueue_style', 99 );

/**
 * Kirki Customizer
 *
 * @return void
 */
add_action( 'init' , 'shoppable_marketplace_kirki_fields', 999, 1 );

function shoppable_marketplace_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}

	//Display
	Kirki::add_section( 'blog_display', array(
	    'title'          => esc_html__( 'Display', 'shoppable-marketplace' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 26,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Display Section', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'display_section',
		'section'      => 'blog_display',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Display 1', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_display_one',
		'section'      => 'blog_display',
		'default'      => '',
		'priority'	   => 20,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Display 2', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_display_two',
		'section'      => 'blog_display',
		'default'      => '',
		'priority'	   => 30,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Display 3', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_display_three',
		'section'      => 'blog_display',
		'default'      => '',
		'priority'	   => 40,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'display_responsive_separator',
	    'section'     => 'blog_display',
	    'default'     => esc_html__( 'Responsive', 'shoppable-marketplace' ),
	    'priority'	  => 50,
	    'active_callback' => array(
			array(
				'setting'  => 'display_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Display', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_display',
		'section'      => 'blog_display',
		'default'      => true,
		'priority'	   => 60,
		'active_callback' => array(
			array(
				'setting'  => 'display_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//Followers
	Kirki::add_section( 'blog_followers', array(
	    'title'          => esc_html__( 'Followers', 'shoppable-marketplace' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 27,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Followers Section', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'followers_section',
		'section'      => 'blog_followers',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Tagline', 'shoppable-marketplace' ),
		'type'        => 'text',
		'settings'    => 'followers_tagline',
		'section'     => 'blog_followers',
		'default'     => '',
		'priority'	   => 20,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Follower One', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_follower_one',
		'section'      => 'blog_followers',
		'default'      => '',
		'priority'	   => 30,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	kirki::add_field('hello-shoppable',array(
		'label'        => esc_html__( 'Follower Two', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_follower_two',
		'section'      => 'blog_followers',
		'default'      => '',
		'priority'	   => 40,
		'choices'     => array(
			'save_as' => 'id',
		),
	));

	kirki::add_field('hello-shoppable',array(
		'label'        => esc_html__( 'Follower Three', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_follower_three',
		'section'      => 'blog_followers',
		'default'      => '',
		'priority'	   => 50,
		'choices'     => array(
			'save_as' => 'id',
		),
	)); 

	kirki::add_field('hello-shoppable',array(
		'label'        => esc_html__( 'Follower Four', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_follower_four',
		'section'      => 'blog_followers',
		'default'      => '',
		'priority'	   => 60,
		'choices'     => array(
			'save_as' => 'id',
		),
	));

	kirki::add_field('hello-shoppable',array(
		'label'        => esc_html__( 'Follower Five', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_follower_five',
		'section'      => 'blog_followers',
		'default'      => '',
		'priority'	   => 70,
		'choices'     => array(
			'save_as' => 'id',
		),
	));

	kirki::add_field('hello-shoppable',array(
		'label'        => esc_html__( 'Follower Six', 'shoppable-marketplace' ),
		'type'         => 'image',
		'settings'     => 'blog_follower_six',
		'section'      => 'blog_followers',
		'default'      => '',
		'priority'	   => 80,
		'choices'     => array(
			'save_as' => 'id',
		),
	));

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'followers_responsive_separator',
	    'section'     => 'blog_followers',
	    'default'     => esc_html__( 'Responsive', 'shoppable-marketplace' ),
	    'priority'	  => 90,
	    'active_callback' => array(
			array(
				'setting'  => 'followers_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	kirki::add_field('hello-shoppable',array(
		'label'        => esc_html__( 'Follower', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_followers',
		'section'      => 'blog_followers',
		'default'      => true,
		'priority'	   => 100,
		'active_callback' => array(
			array(
				'setting'  => 'followers_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//Survey 
	Kirki::add_section( 'blog_survey', array(
	    'title'          => esc_html__( 'Survey', 'shoppable-marketplace' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 28,
	) );

	Kirki::add_field( 'hello-shoppabe', array(
		'label'        => esc_html__( 'Survey Section', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'survey_section',
		'section'      => 'blog_survey',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppabe', array(
		'label'       => esc_html__( 'Page 1', 'shoppable-marketplace' ),
		'type'        => 'select',
		'settings'    => 'survey_page_one',
		'section'     => 'blog_survey',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 1', 'shoppable-marketplace' ),
		'choices'     => shoppable_marketplace_get_pages(),
		'priority'	  => 20,
	));
		

	Kirki::add_field( 'hello-shoppabe', array(
		'label'       => esc_html__( 'Page 2', 'shoppable-marketplace' ),
		'type'        => 'select',
		'settings'    => 'survey_page_two',
		'section'     => 'blog_survey',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 2', 'shoppable-marketplace' ),
		'choices'     => shoppable_marketplace_get_pages(),
		'priority'	  => 30,
		
	) );

	Kirki::add_field( 'hello-shoppabe', array(
		'label'       => esc_html__( 'Page 3', 'shoppable-marketplace' ),
		'type'        => 'select',
		'settings'    => 'survey_page_three',
		'section'     => 'blog_survey',
		'default'     => '',
		'choices'     => shoppable_marketplace_get_pages(),
		'placeholder' => esc_html__( 'Select Page 3', 'shoppable-marketplace' ),
		'priority'	  => 40,
	
	) );

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'survey_responsive_separator',
	    'section'     => 'blog_survey',
	    'default'     => esc_html__( 'Responsive', 'shoppable-marketplace' ),
	    'priority'	  => 50,
	    'active_callback' => array(
			array(
				'setting'  => 'survey_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Survey', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_survey',
		'section'      => 'blog_survey',
		'default'      => true,
		'priority'	   => 60,
		'active_callback' => array(
			array(
				'setting'  => 'survey_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	#Companions
	Kirki::add_section( 'blog_companions', array(
	    'title'          => esc_html__( 'Companions', 'shoppable-marketplace' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 29,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Companions Section', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'companions_section',
		'section'      => 'blog_companions',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 1', 'shoppable-marketplace' ),
		'type'        => 'select',
		'settings'    => 'companions_page_one',
		'section'     => 'blog_companions',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 1', 'shoppable-marketplace' ),
		'choices'     => shoppable_marketplace_get_pages(),
		'priority'	  => 20,
	));
		

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 2', 'shoppable-marketplace' ),
		'type'        => 'select',
		'settings'    => 'companions_page_two',
		'section'     => 'blog_companions',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 2', 'shoppable-marketplace' ),
		'choices'     => shoppable_marketplace_get_pages(),
		'priority'	  => 30,
		
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 3', 'shoppable-marketplace' ),
		'type'        => 'select',
		'settings'    => 'companions_page_three',
		'section'     => 'blog_companions',
		'default'     => '',
		'choices'     => shoppable_marketplace_get_pages(),
		'placeholder' => esc_html__( 'Select Page 3', 'shoppable-marketplace' ),
		'priority'	  => 40,
	
	) );
	
	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 4', 'shoppable-marketplace' ),
		'type'        => 'select',
		'settings'    => 'companions_page_four',
		'section'     => 'blog_companions',
		'default'     => '',
		'choices'     => shoppable_marketplace_get_pages(),
		'placeholder' => esc_html__( 'Select Page 4', 'shoppable-marketplace' ),
		'priority'	  => 50,
	) );

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'companions_responsive_separator',
	    'section'     => 'blog_companions',
	    'default'     => esc_html__( 'Responsive', 'shoppable-marketplace' ),
	    'priority'	  => 60,
	    'active_callback' => array(
			array(
				'setting'  => 'companions_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Companions', 'shoppable-marketplace' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_companions',
		'section'      => 'blog_companions',
		'default'      => true,
		'priority'	   => 70,
		'active_callback' => array(
			array(
				'setting'  => 'companions_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

}