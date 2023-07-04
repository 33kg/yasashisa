<?php 
/* 
?>
		<div id="secondary">

			<div id="brandList">
				<div id="brandListVertical">
					<div id="brandListBottom">
						<h2 class="hideTxt">ブランドリスト</h2>
						<ul>
							<li><a href="<?php bloginfo('url'); ?>/kusuriya01"><img src="<?php echo get_template_directory_uri(); ?>/images/brandList01.gif" alt="京のくすり屋" /></a></li>
							<li><a href="<?php bloginfo('url'); ?>/syabonya01"><img src="<?php echo get_template_directory_uri(); ?>/images/brandList02.gif" alt="京都しゃぼんや" /></a></li>
							<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category24"><img src="<?php echo get_template_directory_uri(); ?>/images/brandList03.jpg" alt="KyotoNaturalFactory" /></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div id="categoies">
				<div id="categoiesVertical">
					<div id="categoiesBottom">
						<h2 class="hideTxt">商品カテゴリー</h2>
                        <section>
							<h3>ブランド別</h3>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category17">∟<img src="http://yasashisa.net/web/wp-content/themes/yasashisanet/images/mini_logo1.gif" border="0"/> 京のくすり屋</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category18">∟<img src="http://yasashisa.net/web/wp-content/themes/yasashisanet/images/mini_logo2.gif" border="0"/> 京都しゃぼんや</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category24">∟<img src="http://yasashisa.net/web/wp-content/themes/yasashisanet/images/mini_logo3.gif" border="0"/> KyotoNaturalFactory</a></li>
							</ul>
						</section>
						<section>
							<h3>地元・京都産の商品</h3>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category10">∟ 北山丸太</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category21">∟ 水尾柚子</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category22">∟ 宇治茶</a></li>
							</ul>
						</section>
						<section>
							<h3>健康</h3>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category02">∟ 粉末</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category03">∟ 錠剤・カプセル</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category05">∟ 菓子・飲料・調味料</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category12">∟ オブラート・容器</a></li>
							</ul>
						</section>
						<section>
							<h3>美容</h3>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category06">∟ 洗顔石鹸</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category07">∟ ボディ・手洗石鹸</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category08">∟ スキンケア・フレグランス</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category09">∟ 入浴剤</a></li>
							</ul>
						</section>
						<section>
							<h3>雑貨</h3>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category11">∟ バス・キッチン雑貨</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category25">∟ 除菌・アルコール</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category26">∟ インテリア雑貨</a></li>
								<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category13">∟ エッセンシャルオイル</a></li>
								<!--<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category14">∟ ブレンドオイル</a></li>-->
								<!--<li><a href="<?php bloginfo('url'); ?>/archives/item_category/category15">∟ 素焼きセット</a></li>-->
								<!--<li><a href="<?php// bloginfo('url'); ?>/items/item_category/category16">∟ 芳香機</a></li> -->
							</ul>
						</section>
						<section>
							<h3>GIFT</h3>
							<ul>
								<li><a href="http://yasashisa.net/web/archives/items/5462">∟ ギフト</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>

			<div id="members">
				<div id="membersVertical">
					<div id="membersBottom">
						<h2 class="hideTxt">会員登録</h2>
						<ul>
							<li><a href="https://www.yasashisa.net/account/my_page_login"><img src="<?php echo get_template_directory_uri(); ?>/images/members_registration.gif" alt="" /></a></li>
							<li><a href="https://www.yasashisa.net/account/my_page_login"><img src="<?php echo get_template_directory_uri(); ?>/images/members_login.gif" alt="" /></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="banner">
				<p><a href="<?php bloginfo('url'); ?>/archives/category/media"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr_media.jpg" alt="" /></a></p>
			</div>

			<div class="banner">
				<p><a href="http://www.yasashisa.net/shop/display_cart"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_show_cart.gif" alt="" /></a></p>
			</div>

			<div id="recommendSide">
				<div id="recommendSideVertical">
					<div id="recommendSideBottom">
						<h2 class="hideTxt">おすすめ商品</h2>
                        <?php
$toplist = array(
    'post_type' => 'items',
    'showposts' => -1,
    'item_category' => 'recommend-left'
    );
?>
<?php query_posts($toplist); ?>
<?php if (have_posts()):while(have_posts()):the_post(); ?>

		<?php 
		$image_id = get_post_meta( $post->ID , '商品画像' , true );
		if($image_id):
		?>
		<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
		<p class="itemListImage mt20"><a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" /></a></p>
        <?php endif; ?>
        
        <p class="bold mt5"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
        
        <?php if(get_post_meta($post->ID,"商品価格",true)): ?>
		<p class="itemListPrice mb10">
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
		<p class="itemListTextLeft">
        <?php echo get_post_meta($post->ID,"一覧用テキスト",true); ?></p>
		<?php endif; ?>
        
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>

						
					</div>
				</div>
			</div>
            
            <?php dynamic_sidebar( '最下部のウィジェットエリア' ) ; ?>

            
        
        
        <div class="fb-like-box" data-href="http://www.facebook.com/kyokusuriya" data-width="214" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

            
            
		</div><!-- //#secondary -->

<?php 
		*/
?>
