<link href="<?php bloginfo('template_directory'); ?>/css/howtouse.css" type="text/css" rel="stylesheet">

<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section>
<p class="pankuzu">
	<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &gt; 
	<?php $cat = get_the_category(); echo get_category_parents($cat[0], true, ''); ?>
</p>
</section>

<h2 class="mb20"><img src="http://yasashisa.net/web/wp-content/themes/yasashisanet/images/news-title.jpg" alt="お知らせ"></h2>

<section>
			
<!--<p class="mb10"><?//php echo get_the_category_list( ' ,' ); ?></p> -->
        

                            
		<?php if ( have_posts() ) : ?>
        
        
			<header class="archive-header">
				
				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
           
           <div class="contentsBox">
				<div class="contentsBoxVertical">
					<div class="contentsBoxBttom" class="clearfix">
                         <div class="blogArea">
                         
				<?php get_template_part( 'content', get_post_format() ); ?>
                
						</div><!-- #content -->
					</div>
				</div>
			</div>
            <p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/shadow.jpg" alt=""></p>

			<?php endwhile; ?>

            
            <?php wp_pagenavi(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		


            
           


		</div><!-- //#primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>