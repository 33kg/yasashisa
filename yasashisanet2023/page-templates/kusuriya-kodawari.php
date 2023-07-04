<?php
/*
Template Name: kusuriyaKODAWARI
*/
?>
<link href="http://yasashisa.net/web/wp-content/themes/yasashisanet/css/kusuriya.css" type="text/css" rel="stylesheet">

<?php get_header(); ?>

</div><!-- //#primary -->

<div id="oneContents">
<section>
<p class="pankuzu"><a href="<?php echo get_bloginfo(‘home’); ?>/">TOP</a> > 京のくすり屋 > わたしたちのこだわり</p>
</section>

<section>
<h2 class="kusuriyaTop"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-top.jpg" alt="京都しゃぼんや"></h2>
<div class="kusuriyaMiddle">
<ul class="navikusuriya clearfix">
<li><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya01_select.jpg" alt="わたしたちのこだわり"></li>
<!--<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya02"><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya02_off.jpg" alt="現地視察"></a></li> !-->
<!--<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya03"><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya03_off.jpg" alt="京都の素材"></a></li> !-->
<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya04"><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya04_off.jpg" alt="店舗のご案内"></a></li>
</ul>


<!-- 催事情報 -->
<div class="kusuriyaVoice">
<h3 class="center mb10"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-saiji.jpg" alt="催事出店情報"></h3>
<p>
<?php
$post_id = 5441; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'edit'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>
</p>
</div>
<!-- 催事情報 -->

<div class="clearfix pt30 mb30">
<div class="kusuriyaKodawariLeft">
<p><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-kodawari-photo01.jpg" alt=""></p>
</div>
<div class="kusuriyaKodawariRight">
<p><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-kodawari-text01.jpg" alt=""></p>
<p class="mt20">
京のくすり屋は国内外の展示会に参加し、海外の業者様から直接原料を買い付ける事で、流通経路を短縮し無駄を省きました。また製品自体もなるべく純度を高く、添加物などの無駄を極力省いています。
飲みにくいものもありますが、本来のカタチに近い物をお届けいたします。
</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-kodawari-tx01.jpg" alt=""></p>
</div>
</div> <!-- clearfix -->

<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-kodawari-image01.jpg" alt=""></p>
<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-kodawari-image02.jpg" alt=""></p>
<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-kodawari-image03.jpg" alt=""></p>
<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-kodawari-image04.jpg" alt=""></p>

<ul class="navikusuriya clearfix mt20">
<li><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya01_select.jpg" alt="わたしたちのこだわり"></li>
<!--<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya02"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya02_off.jpg" alt="現地視察"></a></li> !-->
<!--<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya03"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya03_off.jpg" alt="京都の素材"></a></li> !-->
<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya04"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya04_off.jpg" alt="店舗のご案内"></a></li>
</ul>

<p class="mt20"><a href="http://yasashisa.net/web/archives/item_category/category17"><img src="<?php bloginfo('template_directory'); ?>/images/bt-kusuriya-item.jpg" alt="京のくすり屋の商品一覧"></p>

</div><!--kusuriyaMiddle-->

<p class="mb20"><a href="<?php echo get_bloginfo(‘home’); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-bottom.jpg" alt="京のくすり屋"></p>

</section>


</div><!--oneContents-->



<?php get_footer(); ?>