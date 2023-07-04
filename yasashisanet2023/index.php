<?php get_header(); ?>
<script type="text/javascript">
  $(function(){
	  $("#slide").bxSlider({
		  controls: false,
		  auto: true,
		  easing:'ease-out',
		  speed:500,
		  hideControlOnEnd: false,
		  pause: 6000
		});
  });
</script>

			<div id="banners" class="clearfix">
				<ul>
					<li><a href="http://yasashisa.net/web/archives/item_category/category17"><img src="<?php echo get_template_directory_uri(); ?>/images/banner01.jpg" alt="" /></a></li>
					<li><a href="http://yasashisa.net/web/archives/item_category/category18"><img src="<?php echo get_template_directory_uri(); ?>/images/banner02.jpg" alt="" /></a></li>
					<li><a href="http://yasashisa.net/web/archives/category/media"><img src="<?php echo get_template_directory_uri(); ?>/images/banner03.gif" alt="" /></a><br /><br />
				</ul>
			</div>
            
            <!-- 催事情報 -->
            <!--
			<a href="http://www.tbs.co.jp/hanamaru/omeza/o_tokiha.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner05.jpg" alt="" /></a>
            -->

			<div id="recommendBox">
				<div id="recommendBoxVertical">
					<div id="recommendBoxBttom" class="clearfix">
						<h2 class="hideTxt">京のくすり屋のおすすめ商品</h2>
                        <?php
$toplist = array(
    'post_type' => 'items',
    'showposts' => -1,
    'item_category' => 'recommend-top'
    );
?>
<?php query_posts($toplist); ?>
<?php if (have_posts()):while(have_posts()):the_post(); ?>


<!-- item-list-area start -->
    <div class="item-list-area-top">
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
        
        <?php if(get_post_meta($post->ID,"一覧用テキスト",true)): ?>
		<p class="itemListText">
        <?php echo get_post_meta($post->ID,"一覧用テキスト",true); ?></p>
		<?php endif; ?>
        
        </div>
        <!-- item-list-area end -->


        
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

                        
					<div align="right"><a href="http://yasashisa.net/web/archives/item_category/category17">「京のくすり屋」の“商品一覧”はこちら</a></div>
					</div>
				</div>
			</div>
            
            
			<div id="recommendBox2">
				<div id="recommendBoxVertical">
					<div id="recommendBoxBttom" class="clearfix">
						<h2 class="hideTxt">京都しゃぼんやのおすすめ商品</h2>
                        <?php
$toplist = array(
    'post_type' => 'items',
    'showposts' => -1,
    'item_category' => 'recommend-top-shabonya'
    );
?>
<?php query_posts($toplist); ?>
<?php if (have_posts()):while(have_posts()):the_post(); ?>


<!-- item-list-area start -->
    <div class="item-list-area-top">
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
        
        <?php if(get_post_meta($post->ID,"一覧用テキスト",true)): ?>
		<p class="itemListText">
        <?php echo get_post_meta($post->ID,"一覧用テキスト",true); ?></p>
		<?php endif; ?>
        
        </div>
        <!-- item-list-area end -->


        
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

                        
					<div align="right"><a href="http://yasashisa.net/web/archives/item_category/category18">「京都しゃぼんや」の"商品一覧"はこちら</a></div>
					</div>
				</div>
			</div>


			<div id="recommendBox3">
				<div id="recommendBoxVertical">
					<div id="recommendBoxBttom" class="clearfix">
						<h2 class="hideTxt">KyotoNaturalFactoryのおすすめ商品</h2>
                        <?php
$toplist = array(
    'post_type' => 'items',
    'showposts' => -1,
    'item_category' => 'recommend-top-knf'
    );
?>
<?php query_posts($toplist); ?>
<?php if (have_posts()):while(have_posts()):the_post(); ?>


<!-- item-list-area start -->
    <div class="item-list-area-top">
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
        
        <?php if(get_post_meta($post->ID,"一覧用テキスト",true)): ?>
		<p class="itemListText">
        <?php echo get_post_meta($post->ID,"一覧用テキスト",true); ?></p>
		<?php endif; ?>
        
        </div>
        <!-- item-list-area end -->


        
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

                        
					<div align="right"><a href="http://yasashisa.net/web/archives/item_category/category24">「KyotoNaturalFactory」の“商品一覧”はこちら</a></div>
					</div>
				</div>
			</div>
            


			<div class="inclusionBox clearfix">
				<div id="suchPerson">
					<div id="suchPersonVertical">
						<div id="suchPersonBottom">
							<h2 class="hideTxt">こんな方におすすめ</h2>
							<ul>
								<li><a href="http://yasashisa.net/web/archives/item_category/recommend-category05"><img src="<?php echo get_template_directory_uri(); ?>/images/suchPerson05.jpg" alt="" /></a></li>
								<li><a href="http://yasashisa.net/web/archives/item_category/recommend-category02"><img src="<?php echo get_template_directory_uri(); ?>/images/suchPerson02.jpg" alt="" /></a></li>
								<li><a href="http://yasashisa.net/web/archives/item_category/recommend-category06"><img src="<?php echo get_template_directory_uri(); ?>/images/suchPerson07.jpg" alt="" /></a></li>
								<li><a href="http://yasashisa.net/web/archives/item_category/recommend-category04"><img src="<?php echo get_template_directory_uri(); ?>/images/suchPerson08.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div id="column">
					<div id="columnVertical">
						<div id="columnBottom">
							<h2 class="hideTxt">やさしさ.net 〜コラム〜</h2>
							<ul>
								<li><a  href="<?php bloginfo('url'); ?>/column01"><img src="<?php echo get_template_directory_uri(); ?>/images/column01.jpg" alt="" /></a></li>
								<li><a  href="<?php bloginfo('url'); ?>/column02"><img src="<?php echo get_template_directory_uri(); ?>/images/column02.jpg" alt="" /></a></li>
								<li><a  href="<?php bloginfo('url'); ?>/column03"><img src="<?php echo get_template_directory_uri(); ?>/images/column03.jpg" alt="" /></a></li>
								<li><a  href="<?php bloginfo('url'); ?>/column04"><img src="<?php echo get_template_directory_uri(); ?>/images/column04.jpg" alt="" /></a></li>
								<li><a  href="<?php bloginfo('url'); ?>/column05"><img src="<?php echo get_template_directory_uri(); ?>/images/column05.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="informationAndStocks">
				<div id="informationAndStocksVertical">
					<div id="informationAndStocksBottom" class="clearfix">
						<div id="information">
							<h2 class="hideTxt">お知らせ</h2>
							<ul id="information">

<?php query_posts('cat=95&showposts=5'); ?>
<?php if (have_posts()):while(have_posts()):the_post(); ?>
<li> <span class="date"><?php the_time('Y.m.d'); ?></span>　<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>
<li><a href="http://yasashisa.net/web/archives/category/news01">お知らせ一覧はこちら</a></li>


</ul>
                  
						</div>

						<div id="stocks">
							<h2 class="hideTxt">お知らせ</h2>
<div class="stockText"> 

  
  <?php
$post_id = 103; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'edit'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>
</div>

						</div>
					</div>
				</div>
			</div>

			<div id="voice">
				<div id="voiceVertical">
					<div id="voiceBottom">
						<h2 class="hideTxt">お客様の声</h2>
													<ul>
<?php
$lastposts = get_posts('numberposts=5&category=8&orderby=post_date');
foreach($lastposts as $post) :
setup_postdata($post);
?>
<li> <span class="date"><?php the_time('Y.m.d'); ?></span>　<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php the_title(); ?></a></li>
<?php endforeach; ?>
<li><a href="http://yasashisa.net/web/archives/category/voice">お客様の声一覧はこちら</a></li>
</ul>
              
					</div>
				</div>
			</div>

		</div><!-- //#primary -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>