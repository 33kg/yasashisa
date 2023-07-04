<?php get_header(); ?>

	<section>
<p class="pankuzu"><a href="<?php bloginfo('url'); ?>">TOP</a> > 
<?php 
$taxonomy = $wp_query->get_queried_object();
echo esc_html($taxonomy->name);
?>
</p>
</section>

<h2 class="mb20"><img src="<?php bloginfo('template_directory'); ?>/images/news-title.jpg" alt="お知らせ"></h2>
        
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


<?php
	$args = array(
		'post_type' => 'news',
		 'posts_per_page' => 15,
		 'paged' => $paged,
	);
?>
<?php query_posts($args); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
      <div id="itemDetail" class="line713 mb20">
      <div class="line713Vertical">
        <div class="line713Bottom clearfix">
        <div class="blogArea">
        
		<h2 class="pageTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blogtext"><?php the_content(); ?></p>
    
    <div class="postInfo clearfix">
                <p class="informationDate"><?php the_time("Y年n月j日"); ?></p>
             
                </div>
    
        </div>
        </div>
	</div>
</div>
	<?php endwhile; ?>
<?php endif; ?>



<?php
//ページナビ
if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
//ページ呼び出し時のクエリ状態にリセット
wp_reset_query();
?>



		</div><!-- //#primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>