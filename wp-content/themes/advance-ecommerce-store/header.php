<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-ts">
 *
 * @package advance-ecommerce-store
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
       <!-- preloader -->
    <?php if(get_theme_mod('advance_ecommerce_store_preloader_option',false)!= '' || get_theme_mod('advance_ecommerce_store_responsive_preloader', false) != ''){ ?>
      <?php if(get_theme_mod('advance_ecommerce_store_preloader_type_options', 'Preloader 1')  == 'Preloader 1') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div id="loader" class="rounded-circle"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      <?php } else if(get_theme_mod('advance_ecommerce_store_preloader_type_options', 'Preloader 2') ==  'Preloader 2') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div class="loader">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      <?php }?>
    <?php }?>
  <!-- preloader end -->
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-ecommerce-store' ); ?></a>
      <div id="responsive-navbar" class="<?php if( get_theme_mod( 'advance_ecommerce_store_sticky_header', false) != '' || get_theme_mod( 'advance_ecommerce_store_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
          <div class="container">
            <div class="toggle-menu mobile-menu">
              <button class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('advance_ecommerce_store_open_menu_icon','fas fa-bars')); ?> my-2"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-ecommerce-store'); ?></span></button>
            </div>
            <div id="res-sidebar" class="nav sidebar">
              <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Responsive Menu', 'advance-ecommerce-store' ); ?>">
                <?php
                  wp_nav_menu( array( 
                    'theme_location' => 'resposive-menu',
                    'container_class' => 'main-menu-navigation clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) );
                ?>
                <div id="contact-info">
                  <?php if(get_theme_mod('advance_ecommerce_store_mobile_search_option',true) != ''){ ?>
                    <?php get_search_form();?>
                  <?php }?>
                  <?php dynamic_sidebar('social'); ?>
                </div>
                <a href="javascript:void(0)" class="closebtn mobile-menu"><i class="<?php echo esc_attr(get_theme_mod('advance_ecommerce_store_close_menu_icon','far fa-times-circle')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-ecommerce-store'); ?></span></a>
              </nav>
            </div>
          </div>
      </div>
    <div id="header">   
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <?php if (is_active_sidebar('social')) : ?>
                <?php dynamic_sidebar('social'); ?>
              <?php else : ?>
                <!-- Default Social Icons Widgets -->
                <div class="social_widget py-3">
                  <div class="custom-social-icons">
                    <a href="https://facebook.com" target="_blank" class="pe-2"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" class="px-2"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank" class="px-2"><i class="fab fa-twitter"></i></a>
                    <a href="https://youtube.com" target="_blank" class="px-2"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-lg-7 col-md-6">
              <div id="woomenu-sidebar" class="nav sidebar">
                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Woocommerce Menu', 'advance-ecommerce-store' ); ?>">
                  <?php
                    if(has_nav_menu('woocommerce-menu')){ 
                      wp_nav_menu( array( 
                        'theme_location' => 'woocommerce-menu',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) );
                    } 
                  ?>
                </nav>
              </div>
            </div>
          </div>        
        </div>
      </div>
      <div class="middle-header">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-3 col-md-3 py-2 align-self-center">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if( get_theme_mod('advance_ecommerce_store_site_title',true) != ''){ ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php }?>
              <?php endif; ?>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('advance_ecommerce_store_tagline',false) != ''){ ?>
                  <p class="site-description mb-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php }?>
              <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-5 align-self-center">
              <?php if(class_exists('woocommerce')){ ?>
                <?php get_product_search_form()?>
              <?php }?>
            </div>
            <div class="account col-lg-1 col-md-1 col-4 mx-lg-0 my-md-4 m-3 align-self-center">
              <?php if ( is_user_logged_in() ) { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-sign-in-alt p-3"></i><span class="screen-reader-text"><?php esc_html_e('My Account','advance-ecommerce-store'); ?></span></a>
              <?php } 
              else { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-user p-3"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
              <?php } ?>
            </div>
            <div class="col-lg-2 col-md-2 col-6 cart_icon mx-lg-0 p-md-0 my-md-3 my-1 align-self-center">
              <?php if(class_exists('woocommerce')){ ?>
                <li class="cart_box text-end">
                  <span class="cart-value rounded-circle py-1 px-2"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
                </li>
                <span class="cart_no py-lg-2 px-lg-5 py-md-3 px-md-2 py-2 px-4">
                  <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'SHOPPING CART','advance-ecommerce-store' ); ?>"><?php esc_html_e( 'SHOPPING CART','advance-ecommerce-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'SHOPPING CART','advance-ecommerce-store' );?></span></a>
                </span>
              <?php }?>
            </div>         
          </div>
        </div>
      </div>
      <div class="main-menu <?php if( get_theme_mod( 'advance_ecommerce_store_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>" >
        <div class="container">
          <div id="menu-sidebar" class="nav sidebar text-lg-center">
            <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-ecommerce-store' ); ?>">
              <?php
                wp_nav_menu( array( 
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu-navigation clearfix' ,
                  'menu_class' => 'main-menu-navigation clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav pl-lg-0">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) );
              ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>