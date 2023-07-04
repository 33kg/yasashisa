<?php
/*
Template Name: SITEMAP
*/
?>
<link href="<?php bloginfo('template_directory'); ?>/css/howtouse.css" type="text/css" rel="stylesheet">

<?php get_header(); ?>

<section>
<p class="pankuzu"><a href="<?php bloginfo('url'); ?>">TOP</a> > サイトマップ</p>
</section>


<h2 class="mt10"><img src="<?php bloginfo('template_directory'); ?>/images/title-sitemap.jpg" alt="サイトマップ"></h2>
<div class="contentsBox">
  <div class="contentsBoxVertical">
    <div class="contentsBoxBttom" class="clearfix">
    <div class="contensPadding35 clearfix">
    
      <div class="sitemapArea clearfix">
       
        <h3 class="sitemapCate">健康食品</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category02">∟ ピュア粉末シリーズ</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category03">∟ 濃いシリーズ</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category04">∟ 一般健康食品</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category05">∟ 自然食品</a></li>
        </ul>
        
        <h3 class="sitemapCate">化粧品・石鹸</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category06">∟ アロマ石鹸</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category07">∟ 京の石鹸</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category08">∟ クリーム・オイル・スキンケア</a></li>
        </ul>
        
        <h3 class="sitemapCate">バス用品・雑貨</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category09">∟ バス用品</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category10">∟ ひのきグッズ</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category11">∟ 海線すぽんじ</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category12">∟ オブラート・容器</a></li>
        </ul>
        
        <h3 class="sitemapCate">アロマグッズ</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category13">∟ エッセンシャルオイル</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category14">∟ ブレンドオイル</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category15">∟ 素焼きセット</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/item_category/category16">∟ 芳香機</a></li>
        </ul>
        
        <h3 class="sitemapCate">お問い合わせ・マイページ</h3>
        <ul class="sitemapUl">
          <li><a href="https://www.yasashisa.net/contact/">お問い合わせ</a></li>
          <li><a href="https://www.yasashisa.net/account/my_page_login">マイページ</a></li>
          <li><a href="http://www.yasashisa.net/shop/display_cart">ショッピングカート</a></li>
          <li><a href="https://www.yasashisa.net/account/my_page_login">会員登録</a></li>
          <li><a href="https://www.yasashisa.net/account/my_page_login">会員ログイン</a></li>
        </ul>
        
      </div>
      
      
      <div class="sitemapArea clearfix">
        <h3 class="sitemapCate">ブランド</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/kusuriya01">京のくすり屋</a></li>
          <li><a href="<?php bloginfo('url'); ?>/syabonya01">京都しゃぼんや</a></li>
        </ul>
        
        
        <h3 class="sitemapCate">コンテンツ</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/about">やさしさ.netについて</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/category/voice">お客様の声</a></li>
          <li><a href="<?php bloginfo('url'); ?>/archives/category/media">メディア情報</a></li>
        </ul>
        
        
        <h3 class="sitemapCate">やさしさ.netコラム</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/column01">桑の葉</a></li>
          <li><a href="<?php bloginfo('url'); ?>/column03">大麦若葉</a></li>
          <li><a href="<?php bloginfo('url'); ?>/column04">ケール</a></li>
          <li><a href="<?php bloginfo('url'); ?>/column05">田七人参</a></li>
        </ul>
        
        
        <h3 class="sitemapCate">ご利用方法</h3>
        <ul class="sitemapUl">
          <li><a href="<?php bloginfo('url'); ?>/howtouse">ご利用方法</a></li>
          <li><a href="<?php bloginfo('url'); ?>/howtopay"> お支払い方法</a></li>
          <li><a href="<?php bloginfo('url'); ?>/receipt">領収書について</a></li>
          <li><a href="<?php bloginfo('url'); ?>/periodic">定期購入について</a></li>
          <li><a href="<?php bloginfo('url'); ?>/carriage">送料・お届け日数について</a></li>
          <li><a href="<?php bloginfo('url'); ?>/point">ポイント・割引について</a></li>
        </ul>
        
      </div>
    </div>
  </div>
</div>
            <p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/shadow.jpg" alt=""></p>
            
			</div>

            
           


		</div><!-- //#primary -->

<?php get_sidebar(howtouseshort); ?>

<?php get_footer(); ?>