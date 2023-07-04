<?php
/*
Template Name: kusuriyaSHOP
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
<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya01"><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya01_off.jpg" alt="こだわり"></a></li>
<!-- <li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya02"><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya02_off.jpg" alt="現地視察"></a></li> !-->
<!-- <li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya03"><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya03_off.jpg" alt="京都の素材"></a></li> !-->
<li><img src="<?php bloginfo('template_directory'); ?>/images/navi-kusuriya04_on.jpg" alt="店舗のご案内"></li>
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
<!--
<p class="center mb30 pt20"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-shop-photo01.jpg" alt=""></p>
-->

<p class="mt20 mb10"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-shop-text01.jpg" alt="京都の老舗をめざして"></p>
<p class="mb20">
京都は御所南。創業1948年の小さな薬屋「京のくすり屋」。お医者さんに聞きにくくい身体の心配事が、思ったより多い事に気付かされます。そんな小さな不安を１つ１つ解消していく事も大切にしてきました。病気の事、薬の事、予防や健康維持、お薬との飲み合わせといったお問合せに対して、体だけでなく心も元気に、そして安心してお伺いして頂けるお店を心がけています。
<br />
<br />
このたび「京のくすり屋」事務所を京都市中京区福屋町へ移転しました。これを機に社員一同気持ちを新たに、より一層のサービス向上に励む所存でございますので、なにとぞ倍旧のご愛顧を賜りますようお願い申し上げます。
新事務所では店頭販売は行いません。姉妹店の三条高倉「京都しゃぼんや」にて、京のくすり屋製品を一部取り扱いさせていただきます。取り扱い商品は、「金時生姜 100g・柚子茶・野茶い焙煎・和湯・アルガンオイル・ホホバオイル 100ml」・しゃぼんや商品の予定です。<br />
※京都しゃぼんやでも所持されているポイントはご利用頂けます。 </p>

<div class="clearfix">
<div class="makeLeft">
<img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-shop-photo02.jpg" alt="">
</div>
<div class="makeRight">
<h3 class="mt20"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-shop-text02.jpg" alt="手作り石鹸と市販石鹸の決定的な違い"></h3>
<p class="mt10">
医薬品や漢方薬の他、健康食品、自然食品、アロマ、入浴剤など天然原料を用いた商品を取り扱っています。９０％以上は自社で選定し開発したオリジナル商品です。<br /><br /> 
昔から赤ちゃんの産湯に使われていた「桃の葉」という生薬を、オリジナル入浴剤に加えたり、漢方薬の実績が長い「生姜」の粉末を料理レシピと共にご紹介しています。良い物は沢山ありますが、使い方が分からない。昔のような煮出しては使いにくいといった健康食品や生薬も工夫してご紹介しています。</p>
</div>
</div> <!--clearfix-->


<div class="kusuriyaVoice">
<h3 class="center mb10"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-voice02.jpg" alt="お客様の声"></h3>

<p>
  <?php
$post_id = 4856; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'edit'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>
</p>

</div>


<p class="bold mt20">京のくすり屋</p>
<!--
<p class="bold mt20">京のくすりや店舗MAP</p>
<iframe width="845" height="630" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.jp/maps?f=q&amp;source=s_q&amp;hl=ja&amp;geocode=&amp;q=%E4%BA%AC%E3%81%AE%E3%81%8F%E3%81%99%E3%82%8A%E5%B1%8B&amp;aq=&amp;sll=35.008487,135.762691&amp;sspn=0.087876,0.075188&amp;brcurrent=3,0x6001062b6f570db9:0x408c4afef6d460fd,0&amp;ie=UTF8&amp;hq=%E4%BA%AC%E3%81%AE%E3%81%8F%E3%81%99%E3%82%8A%E5%B1%8B&amp;hnear=&amp;t=m&amp;ll=35.016642,135.768013&amp;spn=0.088571,0.144882&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.jp/maps?f=q&amp;source=embed&amp;hl=ja&amp;geocode=&amp;q=%E4%BA%AC%E3%81%AE%E3%81%8F%E3%81%99%E3%82%8A%E5%B1%8B&amp;aq=&amp;sll=35.008487,135.762691&amp;sspn=0.087876,0.075188&amp;brcurrent=3,0x6001062b6f570db9:0x408c4afef6d460fd,0&amp;ie=UTF8&amp;hq=%E4%BA%AC%E3%81%AE%E3%81%8F%E3%81%99%E3%82%8A%E5%B1%8B&amp;hnear=&amp;t=m&amp;ll=35.016642,135.768013&amp;spn=0.088571,0.144882&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">大きな地図で見る</a></small>
-->


<div class="clear clearfix mt20 mb20">
<p class="fleft">

<a href="https://www.yasashisa.net/account/my_page_login"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-shop-mailmagazine.jpg" alt="メルマガ"></a>
</p>

<p class="fright">
<img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-shop-contact.jpg" alt="TEL075-254-6060">
</p>
</div>
<ul class="navikusuriya clearfix mt20">
<li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya01"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya01_off.jpg" alt="こだわり"></a></li>
<!-- <li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya02"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya02_off.jpg" alt="現地視察"></a></li> !-->
<!-- <li><a href="<?php echo get_bloginfo(‘home’); ?>/kusuriya03"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya03_off.jpg" alt="京都の素材"></a></li> !-->
<li><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-kusuriya04_on.jpg" alt="店舗のご案内"></li>
</ul>

<p class="mt20"><a href="http://yasashisa.net/web/archives/item_category/category17"><img src="<?php bloginfo('template_directory'); ?>/images/bt-kusuriya-item.jpg" alt="京のくすり屋の商品一覧"></p>

</div><!--kusuriyaMiddle-->

<p class="mb20"><a href="<?php echo get_bloginfo(‘home’); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/kusuriya-bottom.jpg" alt="京のくすり屋"></p>

</section>


</div><!--oneContents-->



<?php get_footer(); ?>