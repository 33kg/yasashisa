<?php
/*
Template Name: 検索ページ2023
Template Post Type: page
*/
?>
<?php get_header(); ?>
<style type="text/css">
#contents{
	width: 100vw;
	background: #efece9;
	}
#primary{
	width:auto;
   max-width: 850px;
   float: none; 
   margin: 0 auto;
   padding: 40px;
   background: #fff;
	}
.wrap_search{
   min-height: 50vh;	
	}

#form{
	 position:relative;
	}
	#s-box{
	 height: 40px;
	 padding: 0 10px;
	 position: absolute;
	 left: 0;
	 top: 0;
	 border-radius:2px;
	 border:solid 3px #eaeaea;
	 outline: 0;
	}
	#s-btn-area{
	 height: 50px;
	 position: absolute;
	 left:250px;
	 top: 0;
	 background:none;
	 color:#666;
	 border:none;
	 font-size:20px;
	 outline: 0;
	}
	#s-btn{
	 background-color: black;
	 width: 50px;
	 height: 30px;
	 position: relative;
	 right: 20px;
	 bottom: 10px;
	 border-radius: 3px;
	 font-size: 16px;
	 color: #fff;
	 line-height: 31px;
	}

</style>

<p class="pankuzu"><a href="<?php echo home_url('/'); ?>">TOP</a> &gt; 検索結果</p>
<div class="wrap_search">
<?php get_search_form(); ?>
</div>

<?php /*
   ---------------------------------------- 旧コンテンツの表示エリア  ----------------------------------------
*/ ?>
<?php the_content(); ?>
<?php /*
   ---------------------------------------- // 旧コンテンツの表示エリア  ----------------------------------------
*/ ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>