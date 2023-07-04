<?php get_header(); ?>

	<section>
<p class="pankuzu"><a href="<?php bloginfo('url'); ?>">TOP</a> > 
<?php 
$taxonomy = $wp_query->get_queried_object();
echo esc_html($taxonomy->name);
?>
</p>
</section>


    <h2><img src="<?php echo get_template_directory_uri(); ?>/images/category-title-suyakiset.jpg" alt="素焼きセット" /></h2>
    
    <!-- itemDetail start -->
  <div id="itemDetail" class="line713 mt20">
      <div class="line713Vertical">
        <div class="line713Bottom clearfix">
        
<?php
	$url = rtrim($_SERVER[REQUEST_URI], '/');
	$thisSlug = end(explode('/', $url));

	$tarms = get_the_terms(  $post -> ID ,'item_category' );
	foreach($tarms as $tarm) {
		if($thisSlug == $tarm->slug)
		{
			$categoryName = $tarm->name;
			$slugName = $tarm->slug;
		}
	}
?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
    
    <!-- item-list-area start -->
    <div class="item-list-area">
        <?php 
		$image_id = get_post_meta( $post->ID , '商品画像' , true );
		if($image_id):
		?>
        
		<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
		<p class="itemListImage"><a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" /></a></p>
        <?php endif; ?>
        
        <p class="itemListName"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        
        
        
        <?php if(get_post_meta($post->ID,"商品価格",true)): ?>
		<p class="itemListPrice">
        <?php 
		$image_id = get_post_meta( $post->ID , '新商品アイコン' , true );
		if($image_id):
		?>
		<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
		<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        価格:<?php echo get_post_meta($post->ID,"商品価格",true); ?></p>
		<?php endif; ?>
        
        </div>
        <!-- item-list-area end -->
        
   
    <?php endwhile; ?>
<?php endif; ?>

</div>
</div>
</div>
<!-- itemDetail end -->


		</div><!-- //#primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>