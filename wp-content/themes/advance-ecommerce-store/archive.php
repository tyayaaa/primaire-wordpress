<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package advance-ecommerce-store
 */

get_header(); ?>

<main role="main" id="maincontent" class="our-services">
    <div class="innerlightbox">
        <div class="container">
            <?php
            $advance_ecommerce_store_left_right = get_theme_mod( 'advance_ecommerce_store_layout_options','Right Sidebar');
            if($advance_ecommerce_store_left_right == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 py-4'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title mb-0 text-start">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                          while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                          endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                          endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_ecommerce_store_blog_post_pagination',true) != '') { ?>                
                            <div class="navigation">
                                <?php advance_ecommerce_store_pagination_type(); ?>
                            </div>
                        <?php } ?> 
                    </div>
                </div>
            <?php }else if($advance_ecommerce_store_left_right == 'Right Sidebar'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 py-4'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title mb-0 text-start">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_ecommerce_store_blog_post_pagination',true) != '') { ?>                
                            <div class="navigation">
                                <?php advance_ecommerce_store_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else if($advance_ecommerce_store_left_right == 'One Column'){ ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('py-4'); ?>>
                    <?php
                        the_archive_title( '<h1 class="page-title mb-0 text-start">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content' , get_post_format()); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' );
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'advance_ecommerce_store_blog_post_pagination',true) != '') { ?>                
                        <div class="navigation">
                            <?php advance_ecommerce_store_pagination_type(); ?>
                        </div>
                    <?php } ?>  
                </div>
            <?php }else if($advance_ecommerce_store_left_right == 'Three Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3 my-3 mx-0"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6 py-4'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title mb-0 text-start">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                          while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                          endwhile;
                          else :
                            get_template_part( 'no-results' );
                          endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_ecommerce_store_blog_post_pagination',true) != '') { ?>                
                            <div class="navigation">
                                <?php advance_ecommerce_store_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3 my-3 mx-0"><?php dynamic_sidebar('sidebar-2');?></div>
                </div>
            <?php }else if($advance_ecommerce_store_left_right == 'Four Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3 my-3 mx-0"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-3 py-4'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title mb-0 text-start">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_ecommerce_store_blog_post_pagination',true) != '') { ?>                
                            <div class="navigation">
                                <?php advance_ecommerce_store_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3 my-3 mx-0"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div id="sidebar" class="col-lg-3 col-md-3 my-3 mx-0"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            <?php }else if($advance_ecommerce_store_left_right == 'Grid Layout'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-9 col-md-9 row py-4'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title mb-0 text-start">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout', get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_ecommerce_store_blog_post_pagination',true) != '') { ?>                
                            <div class="navigation">
                                <?php advance_ecommerce_store_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else{?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 py-4'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title mb-0 text-start">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_ecommerce_store_blog_post_pagination',true) != '') { ?>                
                            <div class="navigation">
                                <?php advance_ecommerce_store_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }?>
          <div class="clearfix"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>