<div class="demo-content">
	<?php 
    // Check if the demo import has been completed
    $advance_ecommerce_store_demo_import_completed = get_option('advance_ecommerce_store_demo_import_completed', false);

    // If the demo import is completed, display the "View Site" button
    if ($advance_ecommerce_store_demo_import_completed) {
      echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'advance-ecommerce-store') . '</p>';
      echo '<a href="' . esc_url(home_url()) . '" class="view-btn" target="_blank">' . esc_html__('VIEW SITE', 'advance-ecommerce-store') . '</a>';
    }

    if (isset($_POST['submit'])) {

    // Check if woocommerce is installed and activated
    if (!is_plugin_active('woocommerce/woocommerce.php')) {
      // Install the plugin if it doesn't exist
      $advance_ecommerce_store_plugin_slug = 'woocommerce';
      $advance_ecommerce_store_plugin_file = 'woocommerce/woocommerce.php';

      // Check if plugin is installed
      $advance_ecommerce_store_installed_plugins = get_plugins();
      if (!isset($advance_ecommerce_store_installed_plugins[$advance_ecommerce_store_plugin_file])) {
          include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
          include_once(ABSPATH . 'wp-admin/includes/file.php');
          include_once(ABSPATH . 'wp-admin/includes/misc.php');
          include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

          // Install the plugin
          $advance_ecommerce_store_upgrader = new Plugin_Upgrader();
          $advance_ecommerce_store_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
      }
      // Activate the plugin
      activate_plugin($advance_ecommerce_store_plugin_file);
    }

    // --- Menu 1: Top Menu ---
    $advance_ecommerce_store_top_menu_name = 'Main Menu Top';
    $advance_ecommerce_store_top_menu_location = 'woocommerce-menu';
    $advance_ecommerce_store_top_menu_exists = wp_get_nav_menu_object($advance_ecommerce_store_top_menu_name);

    if (!$advance_ecommerce_store_top_menu_exists) {
        // Create the top menu
        $advance_ecommerce_store_top_menu_id = wp_create_nav_menu($advance_ecommerce_store_top_menu_name);

        // Create and assign the Home page
        $advance_ecommerce_store_home_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'Home',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'home'
        ));
        // Assign template and set as front page
        add_post_meta($advance_ecommerce_store_home_page_id, '_wp_page_template', 'page-template/custom-front-page.php');
        update_option('page_on_front', $advance_ecommerce_store_home_page_id);
        update_option('show_on_front', 'page');

        // Add Home page to the top menu
        wp_update_nav_menu_item($advance_ecommerce_store_top_menu_id, 0, array(
            'menu-item-title'     => __('Home', 'advance-ecommerce-store'),
            'menu-item-classes'   => 'home',
            'menu-item-url'       => home_url('/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $advance_ecommerce_store_home_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Create and assign the About Us page
        $advance_ecommerce_store_about_us_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'About Us',
            'post_content'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'about-us'
        ));

        // Add About Us page to the top menu
        wp_update_nav_menu_item($advance_ecommerce_store_top_menu_id, 0, array(
            'menu-item-title'     => __('About Us', 'advance-ecommerce-store'),
            'menu-item-classes'   => 'about-us',
            'menu-item-url'       => home_url('/about-us/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $advance_ecommerce_store_about_us_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Assign top menu to its location
        $advance_ecommerce_store_locations = get_theme_mod('nav_menu_locations', array());
        $advance_ecommerce_store_locations[$advance_ecommerce_store_top_menu_location] = $advance_ecommerce_store_top_menu_id;
        set_theme_mod('nav_menu_locations', $advance_ecommerce_store_locations);
    }

    // --- Menu 2: Main Menu ---
    $advance_ecommerce_store_main_menu_name = 'Main Menu';
    $advance_ecommerce_store_main_menu_location = 'primary';
    $advance_ecommerce_store_main_menu_exists = wp_get_nav_menu_object($advance_ecommerce_store_main_menu_name);

    if (!$advance_ecommerce_store_main_menu_exists) {
        // Create the main menu
        $advance_ecommerce_store_main_menu_id = wp_create_nav_menu($advance_ecommerce_store_main_menu_name);

        // Create and assign the Blog page
        $advance_ecommerce_store_blog_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'Blog',
            'post_content'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'blog'
        ));

        // Add Blog page to the main menu
        wp_update_nav_menu_item($advance_ecommerce_store_main_menu_id, 0, array(
            'menu-item-title'     => __('Blog', 'advance-ecommerce-store'),
            'menu-item-classes'   => 'blog',
            'menu-item-url'       => home_url('/blog/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $advance_ecommerce_store_blog_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Create and assign the Contact Us page
        $contact_us_page_id = wp_insert_post(array(
            'post_type'     => 'page',
            'post_title'    => 'Contact Us',
            'post_content'  => 'This is the Contact Us page content.',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'contact-us'
        ));

        // Add Contact Us page to the main menu
        wp_update_nav_menu_item($advance_ecommerce_store_main_menu_id, 0, array(
            'menu-item-title'     => __('Contact Us', 'advance-ecommerce-store'),
            'menu-item-classes'   => 'contact-us',
            'menu-item-url'       => home_url('/contact-us/'),
            'menu-item-status'    => 'publish',
            'menu-item-object-id' => $contact_us_page_id,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
        ));

        // Assign main menu to its location
        $advance_ecommerce_store_locations = get_theme_mod('nav_menu_locations', array());
        $advance_ecommerce_store_locations[$advance_ecommerce_store_main_menu_location] = $advance_ecommerce_store_main_menu_id;
        set_theme_mod('nav_menu_locations', $advance_ecommerce_store_locations);
    }   

    // Set the demo import completion flag
    update_option('advance_ecommerce_store_demo_import_completed', true);

    // Display success message and "View Site" button
    echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'advance-ecommerce-store') . '</p>';
    echo '<span><a href="' . esc_url(home_url()) . '" class="view-btn" target="_blank">' . esc_html__('VIEW SITE', 'advance-ecommerce-store') . '</a></span>';

    //end

    // Slider
    set_theme_mod( 'advance_ecommerce_store_slider_small_title', 'LOREM IPSUM' );
    for($advance_ecommerce_store_i=1;$advance_ecommerce_store_i<=4;$advance_ecommerce_store_i++){
       $advance_ecommerce_store_slider_title = 'LOREM IPSUM IS SIMPLY';
       $advance_ecommerce_store_slider_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet purus placerat leo egestas, sit amet tempus nibh tempus.';
          // Create post object
       $advance_ecommerce_store_my_post = array(
       'post_title'    => wp_strip_all_tags( $advance_ecommerce_store_slider_title ),
       'post_content'  => $advance_ecommerce_store_slider_content,
       'post_status'   => 'publish',
       'post_type'     => 'page',
       );

       // Insert the post into the database
       $advance_ecommerce_store_post_id = wp_insert_post( $advance_ecommerce_store_my_post );

       if ($advance_ecommerce_store_post_id) {
         // Set the theme mod for the slider page
         set_theme_mod('advance_ecommerce_store_slider_page' . $advance_ecommerce_store_i, $advance_ecommerce_store_post_id);

          $advance_ecommerce_store_image_url = get_template_directory_uri().'/images/slider'.$advance_ecommerce_store_i.'.png';

        $advance_ecommerce_store_image_id = media_sideload_image($advance_ecommerce_store_image_url, $advance_ecommerce_store_post_id, null, 'id');

            if (!is_wp_error($advance_ecommerce_store_image_id)) {
                // Set the downloaded image as the post's featured image
                set_post_thumbnail($advance_ecommerce_store_post_id, $advance_ecommerce_store_image_id);
            }
        }
    }

    // Products Service
    set_theme_mod( 'advance_ecommerce_store_product_service', 'category1' );

    // Define post category names and post titles
    $advance_ecommerce_store_category_names = array('category1', 'category2', 'category3');
    $advance_ecommerce_store_title_array = array(
        array("MONEY BACK", "FREE SHIPPING", "SPECIAL SALE"),
        array("MONEY BACK", "FREE SHIPPING", "SPECIAL SALE"),
        array("MONEY BACK", "FREE SHIPPING", "SPECIAL SALE")
    );

        foreach ($advance_ecommerce_store_category_names as $advance_ecommerce_store_index => $advance_ecommerce_store_category_name) {
            // Create or retrieve the post category term ID
            $advance_ecommerce_store_term = term_exists($advance_ecommerce_store_category_name, 'category');
            if ($advance_ecommerce_store_term === 0 || $advance_ecommerce_store_term === null) {
                // If the term does not exist, create it
                $advance_ecommerce_store_term = wp_insert_term($advance_ecommerce_store_category_name, 'category');
            }
            if (is_wp_error($advance_ecommerce_store_term)) {
                error_log('Error creating category: ' . $advance_ecommerce_store_term->get_error_message());
                continue; // Skip to the next iteration if category creation fails
            }

            for ($advance_ecommerce_store_i = 0; $advance_ecommerce_store_i < 3; $advance_ecommerce_store_i++) {
                // Create post content
                $advance_ecommerce_store_title = $advance_ecommerce_store_title_array[$advance_ecommerce_store_index][$advance_ecommerce_store_i];
                $advance_ecommerce_store_content = '30 Days Money Back Guarantee';

                // Create post post object
                $advance_ecommerce_store_my_post = array(
                    'post_title'    => wp_strip_all_tags($advance_ecommerce_store_title),
                    'post_content'  => $advance_ecommerce_store_content,
                    'post_status'   => 'publish',
                    'post_type'     => 'post', // Post type set to 'post'
                );

                // Insert the post into the database
                $advance_ecommerce_store_post_id = wp_insert_post($advance_ecommerce_store_my_post);

                if (is_wp_error($advance_ecommerce_store_post_id)) {
                    error_log('Error creating post: ' . $advance_ecommerce_store_post_id->get_error_message());
                    continue; // Skip to the next post if creation fails
                }

                // Assign the category to the post
                wp_set_post_categories($advance_ecommerce_store_post_id, array((int)$advance_ecommerce_store_term['term_id']));

                // Handle the featured image using media_sideload_image
                $advance_ecommerce_store_image_url = get_template_directory_uri() . '/images/image' . ($advance_ecommerce_store_i + 1) . '.png';
                $advance_ecommerce_store_image_id = media_sideload_image($advance_ecommerce_store_image_url, $advance_ecommerce_store_post_id, null, 'id');

                if (is_wp_error($advance_ecommerce_store_image_id)) {
                    error_log('Error downloading image: ' . $advance_ecommerce_store_image_id->get_error_message());
                    continue; // Skip to the next post if image download fails
                }
                // Assign featured image to post
                set_post_thumbnail($advance_ecommerce_store_post_id, $advance_ecommerce_store_image_id);
            }
        }

        // Define category names
        $advance_ecommerce_store_category_array = array(
            "CLOTHING",
            "ELECTRONICS",
            "SHOES",
            "WATCHES",
            "JEWELLERY",
            "HEALTH AND BEAUTY"
        );

        // Define product titles (one for each category)
        $advance_ecommerce_store_product_titles = array(
            "Product Name Here",
            "Product Name Here",
            "Product Name Here",
            "Product Name Here",
            "Product Name Here",
            "Product Name Here"
        );

        // Define prices for the products (one for each category)
        $advance_ecommerce_store_product_prices = array(
            49.99, 199.99, 79.99, 149.99, 99.99, 29.99
        );

        // Loop to create categories and one product per category
        foreach ($advance_ecommerce_store_category_array as $index => $category_name) {
            // Create or retrieve the category term
            $advance_ecommerce_store_category = term_exists($category_name, 'product_cat');
            if ($advance_ecommerce_store_category === 0 || $advance_ecommerce_store_category === null) {
                $advance_ecommerce_store_category = wp_insert_term($category_name, 'product_cat');
            }

            if (is_wp_error($advance_ecommerce_store_category)) {
                error_log('Error creating category: ' . $advance_ecommerce_store_category->get_error_message());
                continue; // Skip to the next category if creation fails
            }

            // Get the term ID of the category
            $advance_ecommerce_store_category_id = (int) $advance_ecommerce_store_category['term_id'];

            // Create the product associated with this category
            $advance_ecommerce_store_product_title = $advance_ecommerce_store_product_titles[$index];
            $advance_ecommerce_store_my_post = array(
                'post_title'    => wp_strip_all_tags($advance_ecommerce_store_product_title),
                'post_content'  => 'This is a sample product description for ' . $category_name,
                'post_status'   => 'publish',
                'post_type'     => 'product',
            );

            // Insert the product into the database
            $advance_ecommerce_store_post_id = wp_insert_post($advance_ecommerce_store_my_post);

            if (is_wp_error($advance_ecommerce_store_post_id)) {
                error_log('Error creating product: ' . $advance_ecommerce_store_post_id->get_error_message());
                continue; // Skip to the next product if creation fails
            }

            wp_set_object_terms($advance_ecommerce_store_post_id, $advance_ecommerce_store_category_id, 'product_cat');

            $advance_ecommerce_store_image_url = get_template_directory_uri() . '/images/product' . ($index + 1) . '.png';
            $advance_ecommerce_store_image_id = media_sideload_image($advance_ecommerce_store_image_url, $advance_ecommerce_store_post_id, null, 'id');

            if (!is_wp_error($advance_ecommerce_store_image_id)) {
                // Assign the downloaded image as the product's featured image
                set_post_thumbnail($advance_ecommerce_store_post_id, $advance_ecommerce_store_image_id);
            } else {
                error_log('Error downloading image: ' . $advance_ecommerce_store_image_id->get_error_message());
            }

            // Add price meta fields to the product
            $product_price = $advance_ecommerce_store_product_prices[$index];
            update_post_meta($advance_ecommerce_store_post_id, '_price', $product_price);
            update_post_meta($advance_ecommerce_store_post_id, '_regular_price', $product_price);
        }

        // Product Page
        $advance_ecommerce_store_page_query = new WP_Query(array(
            'post_type'      => 'page',
            'title'          => 'Products',
            'post_status'    => 'publish',
            'posts_per_page' => 1
        ));

        if (!$advance_ecommerce_store_page_query->have_posts()) {
            $advance_ecommerce_store_page_title = 'Products';
            $productpage = '[products limit="3" columns="3"]';

            // Append the WooCommerce products shortcode to the content
            $advance_ecommerce_store_content = '';
            $advance_ecommerce_store_content .= do_shortcode($productpage);

            // Create the new page
            $advance_ecommerce_store_page = array(
                'post_type'    => 'page',
                'post_title'   => $advance_ecommerce_store_page_title,
                'post_content' => $advance_ecommerce_store_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'products'
            );

            // Insert the page and get its ID
            $advance_ecommerce_store_page_id = wp_insert_post($advance_ecommerce_store_page);

            // Store the page ID in theme mod
            if (!is_wp_error($advance_ecommerce_store_page_id)) {
                set_theme_mod('advance_ecommerce_store_product_page', $advance_ecommerce_store_page_id);
            }
        } 
    }
    ?>

	<p><strong><?php esc_html_e('Reminder : ', 'advance-ecommerce-store'); ?></strong><?php esc_html_e('Backup your site before importing. This process will overwrite existing Advance Ecommerce Store settings.', 'advance-ecommerce-store'); ?></p>

    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=advance_ecommerce_store_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('advance_ecommerce_store_demo_import_completed')) : ?>
        <form method="post">
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','advance-ecommerce-store'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>
