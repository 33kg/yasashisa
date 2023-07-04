<link href="<?php bloginfo('template_directory'); ?>/css/howtouse.css" type="text/css" rel="stylesheet">


<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<section>
<p class="pankuzu">
	<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &gt; 
	<?php $cat = get_the_category(); echo get_category_parents($cat[0], true, ' &gt; '); ?>
	<?php the_title(); ?>
</p>
</section>

<?php if (in_category('media') ): ?>
<h2 class="mb20"><img src="http://yasashisa.net/web/wp-content/themes/yasashisanet/images/media-title.jpg" alt="メディア掲載情報"></h2>
<?php elseif(in_category('news01')): ?>
<h2 class="mb20"><img src="<?php bloginfo('template_directory'); ?>/images/news-title.jpg" alt="お知らせ"></h2>
<?php else: ?>
<h2 class="mb20"><img src="http://yasashisa.net/web/wp-content/themes/yasashisanet/images/voice-title.jpg" alt="お客様の声"></h2>
<?php endif; ?>



<section>
			<div class="contentsBox">
				<div class="contentsBoxVertical">
					<div class="contentsBoxBttom" class="clearfix">
						<div class="blogArea">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
			

		

			<?php endwhile; ?>

						</div>
     				 </div>
				</div>
			</div>
            <p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/shadow.jpg" alt=""></p>
        
        
		</div><!-- //#primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>