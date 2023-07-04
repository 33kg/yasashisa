<?php get_header(); ?>

	<section>
<p class="pankuzu"><a href="<?php bloginfo('url'); ?>">TOP</a> > 
<?php 
$taxonomy = $wp_query->get_queried_object();
echo esc_html($taxonomy->name);
?>
</p>
</section>

メディア画像を入れます。
        
<?php
	$url = rtrim($_SERVER[REQUEST_URI], '/');
	$thisSlug = end(explode('/', $url));

	$tarms = get_the_terms(  $post -> ID ,'news_category' );
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
        <!-- itemDetail start -->
  <div id="itemDetail" class="line713 mb20">
      <div class="line713Vertical">
        <div class="line713Bottom clearfix">
    
    <h2 class="blogtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blogtext"><?php the_content(); ?></p>
    
        </div>
	</div>
</div>
   
    <?php endwhile; ?>
<?php endif; ?>


<!-- itemDetail end -->


		</div><!-- //#primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>