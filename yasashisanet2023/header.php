<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>
<?php if( is_home() || is_front_page() ): ?>

<?php else: ?>
	<?php echo the_title(); ?> | 
<?php endif; ?>
	やさしさ.net | 京のくすり屋・京都しゃぼんや・KyotoNaturalFactoryの通販サイト
    </title>
    <?php wp_head(); ?>
    

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.min.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.page-scroller.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/smartRollover.js"></script>
   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fdt.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fdt_reserved_word.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick_setup.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/yasashisa2023.css">

<?php
	if (is_page('5kindnesses') && $post->post_parent) { ?>

	<?php } else { ?>

<?php } ?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/modaal.min.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modaal.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
    
<script type="text/javascript">

$(function(){
	/* 開く・閉じる*/
	$("ul.menu").hide();
	$("ul.menu2").hide();
	$("div#title").click(function(){
		$("div#title").not(this).next().hide('fast');
		$(this).next().slideToggle('fast');
	});
	$("#menu2 #title2").click(function(){
		$(this).next().slideToggle('fast');
	});
});

</script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=250653611640742";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style type="text/css">
	.sub_nav{display: none};

</style>
<script>
  var mainNavItems = document.querySelectorAll('#main_nav > li > a');

  for (var i = 0; i < mainNavItems.length; i++) {
	mainNavItems[i].addEventListener('mouseover', function() {
	  var subNav = this.nextElementSibling;
	  if (subNav && subNav.classList.contains('sub_nav')) {
		subNav.classList.add('active');
	  }
	});

	mainNavItems[i].addEventListener('mouseout', function() {
	  var subNav = this.nextElementSibling;
	  if (subNav && subNav.classList.contains('sub_nav')) {
		subNav.classList.remove('active');
	  }
	});
  }
</script>

<header id="header">
	<div class="wrap_inner">
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/h1_logo_kyonoichi.png" alt="今日丿市" /></a></h1>
	<ul id="main_nav">
	<li><a href="<?php echo esc_url( home_url( '/5kindnesses/' ) ); ?>">5つのやさしさ</a>
		<ul class="sub_nav">
		<li><a href="<?php echo esc_url( home_url( '/5kindnesses/kindness/' ) ); ?>">相手を想う</a></li>
		<li><a href="<?php echo esc_url( home_url( '/5kindnesses/skin_care/' ) ); ?>">相手を想う</a></li>
		<li><a href="<?php echo esc_url( home_url( '/5kindnesses/have_a_good_day/' ) ); ?>">今日をよくする</a></li>
		<li><a href="<?php echo esc_url( home_url( '/5kindnesses/healing/' ) ); ?>">心を癒す</a></li>
		<li><a href="<?php echo esc_url( home_url( '/5kindnesses/body_care/' ) ); ?>">身体をいたわる</a></li>
		</ul>
	</li>
	<li><a href="<?php echo esc_url( home_url( '/itemlist' ) ); ?>">シーンの選ぶ</a></li>
	<li><a href="<?php echo esc_url( home_url( '/itemlist' ) ); ?>">カテゴリーで選ぶ</a></li>
	<li><a href="<?php echo esc_url( home_url( '/brands' ) ); ?>">ブランド</a></li>
	<li><a href="<?php echo esc_url( home_url( '/letter' ) ); ?>">やさしさ便り</a></li>
	<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">わたしたちについて</a></li>
	<li><a href="http://www.yasashisa.net/shop/display_cart"><img src="<?php echo get_template_directory_uri(); ?>/common/img/icon_ec_cart.png" alt="カートを見る" /></a></li>
<?php /*	?><li><a href="https://yasashisa.net/account/my_page_login"><img src="<?php echo get_template_directory_uri(); ?>/common/img/icon_favorite.png" alt="お気に入り" /></a></li> <?php */ ?>
	<li><a href="https://yasashisa.net/account/my_page_login"><img src="<?php echo get_template_directory_uri(); ?>/common/img/icon_member.png" alt="マイページ" /></a></li>
	</ul>
	</div>
</header>

<?php /* ?>
	<section id="gNav">
		<section id="gNavInner">
			<nav id="nav">
				<ul>
					<li class="gNav01"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/gNav01_off.gif"></a></li>
					<li class="gNav02"><a href="<?php bloginfo('url'); ?>/itemlist"><img src="<?php echo get_template_directory_uri(); ?>/images/gNav02_off.gif"></a></li>
					<li class="gNav03"><a href="<?php bloginfo('url'); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/images/gNav03_off.gif"></a></li>
					<li class="gNav04"><a href="<?php bloginfo('url'); ?>/archives/category/voice"><img src="<?php echo get_template_directory_uri(); ?>/images/gNav04_off.gif"></a></li>
					<li class="gNav05"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/gNav05_off.gif"></a></li>
				</ul>
			</nav>
		</section>
	</section>
<?php */ ?>

	<div id="contents">

		<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000004063;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b97.yahoo.co.jp/pagead/conversion/1000004063/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>
		
			
<!-- header案内ここから -->
<!--
<div align="center"><img src="<?php echo esc_url( home_url( '/' ) ); ?>web/wp-content/uploads/2020/12/201230.jpg" alt="" /></div>
<!--  header案内ここまで -->



<div id="primary">


			<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170635454-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170635454-1');
</script>

