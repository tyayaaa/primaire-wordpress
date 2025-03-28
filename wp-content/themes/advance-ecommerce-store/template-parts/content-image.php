<?php
/**
 * The template part for displaying services
 *
 * @package advance-ecommerce-store
 * @subpackage advance-ecommerce-store
 * @since advance-ecommerce-store 1.0
 */
?> 
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>  
<article class="page-box p-2 mt-0 mx-2 mb-3">
  <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if( get_theme_mod( 'advance_ecommerce_store_author_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_date_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_comment_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_time_hide',true) != '') { ?>
    <div class="metabox py-2 px-0 mb-3">
      <?php if( get_theme_mod( 'advance_ecommerce_store_date_hide',true) != '') { ?>
        <span class="entry-date py-0 pe-1"><i class="fa fa-calendar me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="ms-1"><?php echo esc_html( get_theme_mod('advance_ecommerce_store_metabox_separator_blog_post','|') ); ?></span>
      <?php } ?>     
      <?php if( get_theme_mod( 'advance_ecommerce_store_comment_hide',true) != '') { ?>
        <span class="entry-comments py-0 px-2"><i class="fas fa-comments me-2"></i> <?php comments_number( __('0 Comment', 'advance-ecommerce-store'), __('0 Comments', 'advance-ecommerce-store'), __('% Comments', 'advance-ecommerce-store') ); ?></span><span class="ms-1"><?php echo esc_html( get_theme_mod('advance_ecommerce_store_metabox_separator_blog_post','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'advance_ecommerce_store_author_hide',true) != '') { ?>
        <span class="entry-author py-0 px-2"><i class="fa fa-user me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span class="ms-1"><?php echo esc_html( get_theme_mod('advance_ecommerce_store_metabox_separator_blog_post','|') ); ?></span>
      <?php } ?>
      <?php if( get_theme_mod( 'advance_ecommerce_store_time_hide',true) != '') { ?>
        <span class="entry-time py-0 px-2"><i class="fas fa-clock"></i> <?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
    </div>
  <?php }?>
  <?php if( get_theme_mod( 'advance_ecommerce_store_show_featured_image_post',true) != '') { ?>
    <div class="box-image m-0">
      <?php the_post_thumbnail();?>
    </div>
  <?php } ?>
  <div class="new-text">
    <?php if(get_theme_mod('advance_ecommerce_store_blog_post_description_option') == 'Full Content'){ ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php }
    if(get_theme_mod('advance_ecommerce_store_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="entry-content"><p><?php $advance_ecommerce_store_excerpt = get_the_excerpt(); echo esc_html( advance_ecommerce_store_string_limit_words( $advance_ecommerce_store_excerpt, esc_attr(get_theme_mod('advance_ecommerce_store_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('advance_ecommerce_store_post_suffix_option','...') ); ?></p></div>
      <?php }?>
    <?php }?>
    <div class="second-border text-end my-4 mx-0">
      <a href="<?php echo esc_url( get_permalink() );?>" class="py-3 px-4" title="<?php esc_attr_e( 'Read More', 'advance-ecommerce-store' ); ?>"><?php echo esc_html(get_theme_mod('advance_ecommerce_store_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_ecommerce_store_button_text','Read More'));?></span></a>
    </div>
  </div>
  <div class="clearfix"></div>
</article>