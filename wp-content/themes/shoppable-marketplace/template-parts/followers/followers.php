<?php
$blogfolloweroneID = get_theme_mod( 'blog_follower_one','' );
$blogfollowertwoID = get_theme_mod( 'blog_follower_two','' );       
$blogfollowerthreeID = get_theme_mod( 'blog_follower_three','' );
$blogfollowerfourID = get_theme_mod( 'blog_follower_four','' );
$blogfollowerfiveID = get_theme_mod( 'blog_follower_five','' );
$blogfollowersixID = get_theme_mod( 'blog_follower_six','' );


$follower_array = array();
$has_follower = false;
if( !empty( $blogfolloweroneID ) ){
	$blog_follower_one  = wp_get_attachment_image_src( $blogfolloweroneID,'hello-shoppable-420-300');
 	if ( is_array(  $blog_follower_one ) ){
 		$has_follower = true;
   	 	$blog_followers_one = $blog_follower_one[0];
   	 	$follower_array['image_one'] = array(
			'ID' => $blog_followers_one,
		);	
  	}
}
if( !empty( $blogfollowertwoID ) ){
	$blog_follower_two = wp_get_attachment_image_src( $blogfollowertwoID,'hello-shoppable-420-300');
	if ( is_array(  $blog_follower_two ) ){
		$has_follower = true;	
        $blog_followers_two = $blog_follower_two[0];
        $follower_array['image_two'] = array(
			'ID' => $blog_followers_two,
		);	
  	}
}
if( !empty( $blogfollowerthreeID ) ){	
	$blog_follower_three = wp_get_attachment_image_src( $blogfollowerthreeID,'hello-shoppable-420-300');
	if ( is_array(  $blog_follower_three ) ){
		$has_follower = true;
      	$blog_followers_three = $blog_follower_three[0];
      	$follower_array['image_three'] = array(
			'ID' => $blog_followers_three,
		);	
  	}
}
if( !empty( $blogfollowerfourID ) ){	
	$blog_follower_four = wp_get_attachment_image_src( $blogfollowerfourID,'hello-shoppable-420-300');
	if ( is_array(  $blog_follower_four ) ){
		$has_follower = true;
      	$blog_followers_four = $blog_follower_four[0];
      	$follower_array['image_four'] = array(
			'ID' => $blog_followers_four,
		);	
  	}
}
if( !empty( $blogfollowerfiveID ) ){	
	$blog_follower_five = wp_get_attachment_image_src( $blogfollowerfiveID,'hello-shoppable-420-300');
	if ( is_array(  $blog_follower_five ) ){
		$has_follower = true;
      	$blog_followers_five = $blog_follower_five[0];
      	$follower_array['image_five'] = array(
			'ID' => $blog_followers_five,
		);	
  	}
}
if( !empty( $blogfollowersixID ) ){	
	$blog_follower_six = wp_get_attachment_image_src( $blogfollowersixID,'hello-shoppable-420-300');
	if ( is_array(  $blog_follower_six ) ){
		$has_follower = true;
      	$blog_followers_six = $blog_follower_six[0];
      	$follower_array['image_six'] = array(
			'ID' => $blog_followers_six,
		);	
  	}
}

if( get_theme_mod( 'followers_section', false ) && $has_follower){ ?>
	<section class="section-follower-area">
		<div class="follower-content-wrap">
			<div class="section-title-wrap text-center">
				<h2 class="section-title">
					<?php echo esc_html( get_theme_mod( 'followers_tagline', '' ) ); ?>
				</h2>
			</div>
			<div class="row justify-content-center">
				<?php foreach( $follower_array as $each_follower ){ ?>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<article class="follower-item">
							<figure class= "featured-image">
								<img src="<?php echo esc_url( $each_follower['ID'] ); ?>">
							</figure>
						</article>
					</div>
				<?php } ?>
			</div>	
		</div>
	</section>
<?php } ?>
