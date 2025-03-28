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
<article class="page-box-single py-3 px-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><?php the_title();?></h1>
	<?php if( get_theme_mod( 'advance_ecommerce_store_single_post_author_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_single_post_date_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_single_post_comment_hide',true) != '' || get_theme_mod( 'advance_ecommerce_store_single_post_time_hide',true) != '') { ?>
	    <div class="metabox py-2 px-0 mb-3">
	      <?php if( get_theme_mod( 'advance_ecommerce_store_single_post_date_hide',true) != '') { ?>
	        <span class="entry-date py-0 pe-2"><i class="<?php echo esc_attr(get_theme_mod('advance_ecommerce_store_single_post_date_icon','fa fa-calendar')); ?> me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('advance_ecommerce_store_single_post_meta_seperator','|') ); ?>
	      <?php } ?>     
	      <?php if( get_theme_mod( 'advance_ecommerce_store_single_post_comment_hide',true) != '') { ?>
	        <span class="entry-comments py-0 px-2"><i class="<?php echo esc_attr(get_theme_mod('advance_ecommerce_store_single_post_comment_icon','fas fa-comments')); ?> me-2"></i> <?php comments_number( __('0 Comment', 'advance-ecommerce-store'), __('0 Comments', 'advance-ecommerce-store'), __('% Comments', 'advance-ecommerce-store') ); ?></span><?php echo esc_html( get_theme_mod('advance_ecommerce_store_single_post_meta_seperator','|') ); ?>
	      <?php } ?>
	      <?php if( get_theme_mod( 'advance_ecommerce_store_single_post_author_hide',true) != '') { ?>
	        <span class="entry-author py-0 px-2"><i class="<?php echo esc_attr(get_theme_mod('advance_ecommerce_store_single_post_author_icon','fa fa-user')); ?> me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('advance_ecommerce_store_single_post_meta_seperator','|') ); ?>
	      <?php } ?>
	      <?php if( get_theme_mod( 'advance_ecommerce_store_single_post_time_hide',true) != '') { ?>
	        <span class="entry-time py-0 px-2"><i class="<?php echo esc_attr(get_theme_mod('advance_ecommerce_store_single_post_time_icon','fas fa-clock')); ?> me-2"></i> <?php echo esc_html( get_the_time() ); ?></span><span class="me-2"><?php echo esc_html( get_theme_mod('advance_ecommerce_store_single_post_meta_seperator','|') ); ?></span>
	      <?php }?>
        <?php echo esc_html (advance_ecommerce_store_edit_link()); ?>
	    </div>
	<?php }?>
	<?php if( get_theme_mod( 'advance_ecommerce_store_show_featured_image_single_post',true) != '') { ?>
		<?php if(has_post_thumbnail()) { ?>
	    <hr>
	    <div class="feature-box">   
      		<?php the_post_thumbnail(); ?>
	    </div>
	    <hr>                    
	  <?php } ?> 
	<?php } ?>
	<?php if( get_theme_mod('advance_ecommerce_store_category_show_hide',true) != ''){ ?>
      <div class="category-sec">
        <span class="category-1"><?php esc_html_e('Categories:','advance-ecommerce-store'); ?></span>
        <?php the_category(); ?>
      </div>
  <?php } ?>
  <div class="new-text">
    <div class="entry-content"><?php the_content(); ?></div> 
    <?php if( get_theme_mod( 'advance_ecommerce_store_tags_hide',true) != '') { ?>
    	<div class="tags my-3 mx-0"><p><?php
        if( $tags = get_the_tags() ) {
          echo '<i class="fas fa-tags me-3"></i>';
          echo '<span class="meta-sep"></span>';
          foreach( $tags as $content_tag ) {
            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
          }
        } ?></p>
      </div>
    <?php } ?>
  </div>
    <?php if( get_theme_mod( 'advance_ecommerce_store_show_single_post_pagination',true) != '') { ?>
	    <?php
				
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav text-uppercase p-2">Published in</span><span class="post-title my-3 mx-0">%title</span>', 'Parent post link', 'advance-ecommerce-store' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'advance-ecommerce-store' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'advance-ecommerce-store' ) . '</span> ' ,
					'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'advance-ecommerce-store' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-ecommerce-store' ) . '</span> ' ,
				) );
			}echo '<div class="clearfix"></div>'; ?>
		<?php } ?>	
<?php if( get_theme_mod( 'advance_ecommerce_store_post_comment',true) != '') { 
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
  }?>

	<?php get_template_part('template-parts/related-posts'); ?>
</article>