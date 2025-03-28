<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package advance-ecommerce-store
 */
?>
<div id="sidebar" class="my-3 mx-0">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside role="complementary" aria-label="firstsidebar" id="archives" class="widget p-2 mb-3">
            <h3 class="widget-title text-capitalize p-2 mt-0 mx-0 mb-3"><?php esc_html_e( 'Archives', 'advance-ecommerce-store' ); ?></h3>
            <ul class="m-0">
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside role="complementary" aria-label="secondsidebar" id="meta" class="widget p-2 mb-3">
            <h3 class="widget-title text-capitalize p-2 mt-0 mx-0 mb-3"><?php esc_html_e( 'Meta', 'advance-ecommerce-store' ); ?></h3>
            <ul class="m-0">
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        <aside id="search" class="widget p-2 mb-3" role="complementary" aria-label="thirdsidebar">
            <h3 class="widget-title text-capitalize p-2 mt-0 mx-0 mb-3"><?php esc_html_e( 'Search', 'advance-ecommerce-store' ); ?></h3>
            <?php get_search_form(); ?>
        </aside>
        <aside id="categories" class="widget p-2 mb-3" role="complementary" aria-label="forthsidebar">
            <h3 class="widget-title text-capitalize p-2 mt-0 mx-0 mb-3"><?php esc_html_e( 'Categories', 'advance-ecommerce-store' ); ?></h3>
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>  
</div>