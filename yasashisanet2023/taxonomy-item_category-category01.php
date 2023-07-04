<?php get_header(); ?>

	カテゴリ1です。
    
    <?php
    $taxonomy = $wp_query->get_queried_object();
echo esc_html($taxonomy->name);
    ?>

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
    
        <?php 
		$image_id = get_post_meta( $post->ID , '商品画像' , true );
		if($image_id):
		?>
		<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
		<p class="itemListImage"><a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" /></a></p>
        <?php endif; ?>
        
        <p class="itemListName"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        
        <?php if(get_post_meta($post->ID,"商品価格",true)): ?>
		<p class="itemListPrice">価格:<?php echo get_post_meta($post->ID,"商品価格",true); ?></p>
		<?php endif; ?>
   
    <?php endwhile; ?>
<?php endif; ?>




		</div><!-- //#primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>