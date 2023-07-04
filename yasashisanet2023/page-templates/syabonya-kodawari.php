<?php
/*
Template Name: SYABONYAKODAWARI
*/
?>
<link href="<?php bloginfo('template_directory'); ?>/css/syabonya.css" type="text/css" rel="stylesheet">

<?php get_header(); ?>

</div><!-- //#primary -->

<div id="oneContents">
<section>
<p class="pankuzu"><a href="http://yasashisa.net">TOP</a> > 京都しゃぼんや > わたしたちのこだわり</p>
</section>



<section>
<h2 class="syabonyaTop"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-top.jpg" alt="京都しゃぼんや"></h2>
<div class="syabonyaMiddle">
<ul class="naviSyabonya clearfix">
<li><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya01_select.jpg" alt="わたしたちのこだわり"></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya02"><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya02_off.jpg" alt="石けんの製法"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya03"><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya03_off.jpg" alt="コラボレーション"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya04"><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya04_off.jpg" alt="店舗のご案内"></a></li>
</ul>

<!-- 催事情報 -->
<div class="syabonyaVoice">
<h3 class="center mb10"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-saiji.jpg" alt="催事出店情報"></h3>
<p>
<?php
$post_id = 5439; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'edit'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>
</p>
</div>
<!-- 催事情報 -->

<div class="clearfix pt30 mb30">
<div class="syabonyaKodawariLeft">
<p><img src="<?php bloginfo('template_directory'); ?>/images/shabonya-kodawari-photo01.jpg" alt=""></p>
</div>
<div class="syabonyaKodawariRight">
<p><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-kodawari-text01.jpg" alt=""></p>
<p class="mt20">
一点一点、温かに見守り子供を育てるように・・・
"人の心と体をきれいにして幸せをお届けできるように"と念じながら製造しています。しゃぼんやの石鹸は巷で流行っている自然成分を少しだけ配合した "自然派化粧品"ではなく、天然、自然原料にこだわりぬいた、「100％自然化粧品」です。<br><br>
＊京都本店のみで販売するスタイルを貫いてきましたが、皆様の熱い要望にお応えして通信販売を始めました。一人でも多くの方に私たちのこだわりぬいた石鹸が届きますように。
</p>
</div>
</div> <!-- clearfix -->

<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-kodawari-image01.jpg" alt=""></p>
<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-kodawari-image02.jpg" alt=""></p>
<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-kodawari-image03.jpg" alt=""></p>
<p class="center"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-kodawari-image04.jpg" alt=""></p>

<div class="syabonyaKokoro">
<h3 class="center mt10 mb10"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-kokorogamae.jpg" alt="京都しゃぼんや 石鹸製造の心構え"></h3>
<div class="clearfix">
<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae01.jpg" alt="京都しゃぼんや 石鹸製造の心構え"></h4>
<p>私たちは常に使用した人が幸せな気持ちになることを願い、真心込めて石鹸を作ります。</p>
</div>

<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae02.jpg" alt="素直な心"></h4>
<p>私たちは常に素直な心で石鹸を作ります。</p>
</div>

<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae03.jpg" alt="感謝の心"></h4>
<p>私たちは常に働けることへの感謝、購入いただけるお客様への感謝の心で石鹸を作ります。</p>
</div>

<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae04.jpg" alt="落ち着きの心"></h4>
<p>私たちはイライラ、怒り、人を責める心がある時は石鹸を作りません。心が落ち着いてから製造します。</p>
</div>

<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae05.jpg" alt="愚痴と不満のない心"></h4>
<p>私たちは、「大変、しんどい…」と不満なこころで石鹸を作りません。困難や辛いことは自分の成長への鍵です。</p>
</div>

<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae06.jpg" alt="謙虚な心"></h4>
<p>注意された時は素直に「申し訳ありませんでした」と謝ります。</p>
</div>

<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae07.jpg" alt="常に笑顔で"></h4>
<p>常に笑顔で！
もの作りは"心"が商品に宿ります。
「今日も一日宜しくお願いします。」
決して"作業"にならず清き祈りで製造を開始します。</p>
</div>

<div class="kokoroarea">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/kokorogamae-name.jpg" alt="大橋 俊石"></h4>
</div>

</div>
</div>

<ul class="naviSyabonya clearfix mt20">
<li><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya01_select.jpg" alt="わたしたちのこだわり"></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya02"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya02_off.jpg" alt="石けんの製法"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya03"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya03_off.jpg" alt="コラボレーション"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya04"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya04_off.jpg" alt="店舗のご案内"></a></li>
</ul>

<p class="mt20"><a href="<?php bloginfo('url'); ?>/archives/item_category/category18"><img src="<?php bloginfo('template_directory'); ?>/images/bt-syabonya-item.jpg" alt="京都しゃぼんやの商品一覧"></p>

</div><!--syabonyaMiddle-->

<p class="mb20"><a href="<?php echo get_bloginfo(‘home’); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-bottom.jpg" alt="京都しゃぼんや"></p>

</section>


</div><!--oneContents-->



<?php get_footer(); ?>