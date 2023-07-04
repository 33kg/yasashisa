<?php
/*
Template Name: MANUFACTURING
*/
?>
<link href="<?php bloginfo('template_directory'); ?>/css/syabonya.css" type="text/css" rel="stylesheet">

<?php get_header(); ?>

</div><!-- //#primary -->

<div id="oneContents">
<section>
<p class="pankuzu"><a href="http://yasashisa.net">TOP</a> > <a href="<?php echo get_bloginfo(‘home’); ?>/syabonya01">京都しゃぼんや</a> > 石鹸の製法</p>
</section>

<section>
<h2 class="syabonyaTop"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-top.jpg" alt="京都しゃぼんや"></h2>
<div class="syabonyaMiddle">

<ul class="naviSyabonya clearfix">
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya01"><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya01_off.jpg" alt="わたしたちのこだわり"></a></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/navi-syabonya02_select.jpg" alt="石けんの製法"></li>
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
<p class="center mb30 pt20"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-photo01.jpg" alt=""></p>

<div class="clearfix">
<div class="makeLeft">
<img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-photo02.jpg" alt="">
</div>
<div class="makeRight">
<h3 class="mt20"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-text01.jpg" alt="手作り石鹸と市販石鹸の決定的な違い"></h3>
<p class="mt10">
原料が違う：大量生産された市販石鹸の表示成分をご覧になってみて下さい。
ほとんどが石鹸素地と書いてあります。<br><br>

「石鹸素地？」この表示には成分の由来は全く書かれていません。
石鹸に使用する油もピンからキリまであります。廃油の精製油から安い食用油があるかと思えば、１本数千円するような化粧品用油まで、
どんな油を使っているか全くわからないほど怖いものはありません。<br><br>

「京都しゃぼんや」の石鹸は、上質の植物油を厳選して使用しております。 また、香料にもこだわっております。
一般的には化粧品や石鹸の香りは合成香料です。 合成香料は皮膚から吸収され体内に残存する為、その影響が心配されます。 
「京都しゃぼんや」が使用する香料は全て天然香料で、その殆どがオーガニックです。
</p>
</div>
</div> <!--clearfix-->

<div class="aboutSoup">
<div class="aboutSoupLeft">
<p class="fleft"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-photo03.jpg" alt="手作り石鹸とは？"></p>
</div>
<div class="aboutSoupRight">
<h3  class="mt20 mb10"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-text02.jpg" alt="手作り石鹸とは？"></h3>
<p>手作り石鹸は、オリーブオイル、ココナッツ油などの植物油を使って作る石鹸です。 
これらのコールドプロセス（冷製法）で作る石鹸は、適度の油脂が残る「過脂肪石鹸」であることから、市販の石鹸とはかなり違った使い心地になります。
良質の手作り石鹸は、泡立ち、汚れ落ちも良く、何より、洗い上がった後のしっとり感は石鹸そのものに対する常識が全く変わる程です。</p>
</div>
</div>


<div class="aboutMakeLeft">
<h4><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-text03.jpg" alt="石鹸の製法について"></h4>
<p>
石鹸の製法は大きく分けて３つあります。<br>
① 枠練り／機械練り製法（石鹸素地） <br>
② 釜炊き製法(けん化法) <br>
③ コールドプロセス製法 <br><br>

工業的に作られる石鹸は主として「中和法」と、「けん化法」で作られています。大手企業のほとんどが効率化を考えてこれらの石鹸素地を利用した枠練り／機械練りで石鹸を作ります。 「京都しゃぼんや」の手作り石鹸は、最も手間のかかる方法で作ります。<br>
それは 40 度前後の低い温度で、油を傷めないように作り、更に２か月かけて熟成するという方法です 。
</p>
</div>

<div class="aboutMakeRight">
<p class=""><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-photo04.jpg" alt="手作り石鹸とは？"></p>
</div>

<p class="clear mb30">
この方法は熱を加えないので「コールドプロセス法」ともよばれ、原料油脂の性質を最も生かした石鹸になります。 また、油脂の中に含まれていたグリセリンがそのまま石鹸の中に閉じこめられています。油脂の中に含まれているスクワレン、ステロール、ビタミンＡ、Ｂ、Ｅなど、肌に良いとされる成分も石けんの中に残ったままになります。 多くの植物油脂は種から採取されますが、成分を壊さないよう、低温で圧搾されます。低温での製法は「成分を守る製法」とも言えます。
</p>

<div class="oilarea">
<div class="oilLeft"><p><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-photo05.jpg" alt=""></p></div>
<div class="oilRight">
<h4 class="mt20"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-make-text04.jpg" alt="原料の精油について"></h4>
<p>原料となる精油ももちろん、オーガニック＆天然原料にこだわっています。「水尾柚子」「京都産ひのき」の精油は、京都で収穫された原料から、京北にある自社の精油抽出設備にて「水蒸気蒸留法」で採油しています。</p>
</div>
</div>


<ul class="naviSyabonya clearfix mt20 clear ">
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya01"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya01_off.jpg" alt="わたしたちのこだわり"></a></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya02_select.jpg" alt="石けんの製法"></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya03"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya03_off.jpg" alt="コラボレーション"></a></li>
<li><a href="<?php echo get_bloginfo(‘home’); ?>/syabonya04"><img src="<?php bloginfo('template_directory'); ?>/images/naviunder-syabonya04_off.jpg" alt="店舗のご案内"></a></li>
</ul>

<p class="mt20"><a href="<?php bloginfo('url'); ?>/archives/item_category/category18"><img src="<?php bloginfo('template_directory'); ?>/images/bt-syabonya-item.jpg" alt="京都しゃぼんやの商品一覧"></p>

</div><!--syabonyaMiddle-->

<p class="mb20"><a href="<?php echo get_bloginfo(‘home’); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/syabonya-bottom.jpg" alt="京都しゃぼんや"></p>

</section>


</div><!--oneContents-->



<?php get_footer(); ?>