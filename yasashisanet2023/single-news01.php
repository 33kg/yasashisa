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
<?php
if (have_posts()) :
while (have_posts()) : the_post(); /* ループ開始 */
?>
		<p class="pankuzu"><a href="<?php echo home_url('/'); ?>">TOP</a> > <?php echo the_title(); ?></p>
<?php
endwhile;
endif;
?>
</section>

<h2 class="mb20"><img src="<?php bloginfo('template_directory'); ?>/images/news-title.jpg" alt="お知らせ"></h2>

<section>
			<div class="contentsBox">
				<div class="contentsBoxVertical">
					<div class="contentsBoxBttom" class="clearfix">
						<div class="blogArea">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h2 class="pageTitle"><?php the_title(); ?></h2>
		<?php else : ?>
		<h2 class="pageTitle">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; // is_single() ?>

		
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

<div class="postInfo clearfix">
                <p class="informationDate"><?php the_time("Y年n月j日"); ?></p>
             
                </div>

			

		

			<?php endwhile; ?>

						</div>
     				 </div>
				</div>
			</div>
            <p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/shadow.jpg" alt=""></p>
        
        
		</div><!-- //#primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>