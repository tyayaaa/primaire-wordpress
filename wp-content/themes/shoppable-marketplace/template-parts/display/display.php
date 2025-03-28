<?php
$blogdisponeID = get_theme_mod( 'blog_display_one','');
$blogdisptwoID = get_theme_mod( 'blog_display_two','');       
$blogdispthreeID = get_theme_mod( 'blog_display_three','');

$display_array = array();
$has_display = false;
if( !empty( $blogdisponeID ) ){
	$blog_display_one  = wp_get_attachment_image_src( $blogdisponeID,'hello-shoppable-420-300');
 	if ( is_array(  $blog_display_one ) ){
 		$has_display = true;
   	 	$blog_displays_one = $blog_display_one[0];
   	 	$display_array['image_one'] = array(
			'ID' => $blog_displays_one,
		);	
  	}
}
if( !empty( $blogdisptwoID ) ){
	$blog_display_two = wp_get_attachment_image_src( $blogdisptwoID,'hello-shoppable-420-300');
	if ( is_array(  $blog_display_two ) ){
		$has_display = true;	
        $blog_displays_two = $blog_display_two[0];
        $display_array['image_two'] = array(
			'ID' => $blog_displays_two,
		);	
  	}
}
if( !empty( $blogdispthreeID ) ){	
	$blog_display_three = wp_get_attachment_image_src( $blogdispthreeID,'hello-shoppable-420-300');
	if ( is_array(  $blog_display_three ) ){
		$has_display = true;
      	$blog_displays_three = $blog_display_three[0];
      	$display_array['image_three'] = array(
			'ID' => $blog_displays_three,
		);	
  	}
}

if( get_theme_mod( 'display_section', false ) && $has_display ){ ?>
	<section class="section-display-area">
		<div class="content-wrap">
			<div class="row">
				<?php foreach( $display_array as $each_display ){ ?>
					<div class="col-md-4">
						<article class="display-content-wrap">
							<figure class= "featured-image">
								<img src="<?php echo esc_url( $each_display['ID'] ); ?>">
							</figure>
						</article>
					</div>
				<?php } ?>
			</div>	
		</div>
	</section>
<?php } ?>
