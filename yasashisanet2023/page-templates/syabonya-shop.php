<?php
/*
Template Name: SYABONYASHOP
*/
?>
<link href="<?php bloginfo('template_directory'); ?>/css/syabonya.css" type="text/css" rel="stylesheet">

<?php get_header(); ?>

</div><!-- //#primary -->

<div id="oneContents">
<section>
<p class="pankuzu"><a href="http://yasashisa.net">TOP</a> > <a href="<?php echo get_bloginfo(‘home’); ?>/syabonya01">京都しゃぼんや</a> > 店舗のご案内</p>
</section>

<section>
<h2 class="syabonyaTop"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-top.jpg" alt="京都しゃぼんや"></h2>
<div class="syabonyaMiddle">

<ul class="naviSyabonya clearfix">
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya01"><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya01_off.jpg" alt="わたしたちのこだわり"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya02"><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya02_off.jpg" alt="石けんの製法"></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya03"><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya03_off.jpg" alt="コラボレーション"></a></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya04_select.jpg" alt="店舗のご案内"></li>
</ul>

<!-- 催事情報 -->
<div class="syabonyaIvent">
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
<a name="top" id="slider1"></a>
<!--
<p class="center mb30 pt20"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-photo01.jpg" alt=""></p>
-->
	
<p class="mt20 mb10"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-text01.jpg" alt="京都の老舗をめざして"></p>
<p class="mb20">
京都は三条通にあるオーガニック石鹸の「京都しゃぼんや」です。「京都そのもの」がギュッと詰まったmade in Kyoto のオーガニック手作り石鹸や無添加のコスメのお店です。2009年、「京都石鹸屋（しゃぼんや）」として、新たな京都の老舗を目指し手作り石鹸のお店を立ち上げました。 
江戸時代から明治時代まで石鹸のことを「しゃぼん」と呼んでいたそうです。しゃぼんやは書いて字のごとく石鹸を販売するお店ですが、「心と体を和ませ、幸せな気持ちになっていただける処」をコンセプトにしています。
"Made in Kyoto"にこだわり、しゃぼんや工房で１点１点真心込めて作る「手作り洗顔石鹸」を中心に、 様々なバスグッズや美容用品を取り扱っています。
</p>



<div class="syabonyaVoice">
<h3 class="center mb10"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-voice.jpg" alt="お客様の声"></h3>

<p>
  <?php
$post_id = 678; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'edit'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>
</p>

</div>



<div class="clearfix mt20 mb20">
<div class="syabonyaShopLeft">
<h3><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-photo03.jpg" alt="足湯"></h3><br />
<h3><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-photo05.jpg" alt="手作り石鹸"></h3><br />
<h3><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-photo04.jpg" alt="手作り石鹸"></h3><br>
</div>

<div class="syabonyaShopRight">
<h3><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-photo07.jpg" alt="手作り石鹸"></h3><br />
<h3><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-photo08.jpg" alt="手作り石鹸"></h3><br>
<p> 今後、organicコスメや京都の木を使ったワークショップを充実していきます。ご期待下さい！
<br>
<br>
</p>
</div>
</div>


<div class="syabonyaVoice">
<p>京都しゃぼんや店舗MAP</p>
<!--
<h3 class="center mb10"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop.jpg" alt="ブログからの転送"></h3>
-->
<!-- 画像付きRSS -->
<div id="blz_rss_6130_2816">
<script type="text/javascript">
<!--
var blzP='rss',blzT='6130',blzU='2816',blzAC='1';
-->
</script>
<script src="//blozoo.net/js/rsstool/blogparts.js"></script>
</div>
<!-- https://blozoo.com/ -->
</div>


<p class="bold mt20">京都しゃぼんや店舗MAP</p>
<iframe width="845" height="630" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.jp/maps?f=q&amp;source=s_q&amp;hl=ja&amp;geocode=&amp;q=%E4%BA%AC%E9%83%BD%E3%81%97%E3%82%83%E3%81%BC%E3%82%93%E3%82%84&amp;aq=&amp;sll=35.014857,135.765668&amp;sspn=0.120065,0.20153&amp;brcurrent=3,0x6001062b6f570db9:0x408c4afef6d460fd,0&amp;ie=UTF8&amp;hq=%E4%BA%AC%E9%83%BD%E3%81%97%E3%82%83%E3%81%BC%E3%82%93%E3%82%84&amp;hnear=&amp;t=m&amp;cid=8209821251089549066&amp;ll=35.008487,135.762691&amp;spn=0.04429,0.072441&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a target="_blank" href="https://maps.google.co.jp/maps?f=q&amp;source=embed&amp;hl=ja&amp;geocode=&amp;q=%E4%BA%AC%E9%83%BD%E3%81%97%E3%82%83%E3%81%BC%E3%82%93%E3%82%84&amp;aq=&amp;sll=35.014857,135.765668&amp;sspn=0.120065,0.20153&amp;brcurrent=3,0x6001062b6f570db9:0x408c4afef6d460fd,0&amp;ie=UTF8&amp;hq=%E4%BA%AC%E9%83%BD%E3%81%97%E3%82%83%E3%81%BC%E3%82%93%E3%82%84&amp;hnear=&amp;t=m&amp;cid=8209821251089549066&amp;ll=35.008487,135.762691&amp;spn=0.04429,0.072441&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">GoogleMapで見る</a></small>

<div class="clear clearfix mt20 mb20">
<p>
【京都しゃぼんや奥の工房】〒604-0982
京都市中京区松本町567-2
お問合せ：075-257-7774<br>
<br>
</p>
</div>
	
<!--
<div class="clear clearfix mt20 mb20">
<p class="fleft">

<a href="mailto:&#115;&#104;&#97;&#98;&#111;&#110;&#121;&#97;&#64;&#109;&#97;&#109;&#97;&#105;&#108;&#46;&#106;&#112;"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-mailmagazine.jpg" alt="メルマガ"></a>
</p>

<p class="fright">
<img src="<?php bloginfo('template_directory'); ?>/images/syabonya-shop-contact.jpg" alt="TEL075-257-7774">
</p>
</div>


<!-- 求人情報 -->
	<!-- 
<div class="syabonyaIvent">
<h3 class="center mb10"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-recruit.jpg" alt="求人情報"></h3>
<p>
アルバイト（接客・販売スタッフ）を募集しています。【接客、販売、在庫チェックなどを行って頂きます。】<br />
【対象】年齢24才〜35才位。心を込めて接客できる明るく温かい方、社会的な一般常識を備えた方、手作り石鹸などに興味がある方<br />
【給与】時給850円（研修期間／実働14日間は800円）、年１回昇給査定有り<br />
【時間】営業時間10時〜19時（繁忙期など変更有り）勤務時間はシフト制<br />
【場所】京都しゃぼんや　〒604-8111　京都市中京区三条通桝屋町55番<br />
【応募】上記住所へ履歴書と職務経歴書を送付下さい。（採用担当：川端香　075-257-7774）<br />
<p>

</div>
<!-- 求人情報 -->

<ul class="naviSyabonya clearfix mt20 clear ">
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya01"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya01_off.jpg" alt="わたしたちのこだわり"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya02"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya02_off.jpg" alt="石けんの製法"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya03"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya03_off.jpg" alt="コラボレーション"></a></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya04_select.jpg" alt="店舗のご案内"></li>
</ul>

<p class="mt20"><a href="<?php bloginfo('url'); ?>/archives/item_category/category18"><img src="<?php bloginfo('template_directory'); ?>/images/bt-syabonya-item.jpg" alt="京都しゃぼんやの商品一覧"></p>


</div><!--syabonyaMiddle-->

<p class="mb20"><a href="<?php echo get_bloginfo(‘home’); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-bottom.jpg" alt="京都しゃぼんや"></p>

</section>


</div><!--oneContents-->



<?php get_footer(); ?>