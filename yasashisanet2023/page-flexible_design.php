<?php
/*
Template Name: Flexible Design Template
Template Post Type: page, post
*/
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php if(get_field('fdt_add_block')): ?>
<?php $count_block = 1 ?>
<?php $count_block_div = 1 ?>

<?php
$group_all = get_field('fdt_wrap_setup_block_all');
if($group_all){
	$fdt_check_bg_block_color_all = $group_all['fdt_bg_block_color'];
	$fdt_check_bg_image_all = $group_all['fdt_bg_image'];

	$fdt_block_class_all = ' '.$group_all['fdt_block_class'];
	$fdt_bg_block_color_all = 'background-color:'.$group_all['fdt_bg_block_color'].'; ';
	$fdt_bg_image_all = 'background-image:url('.$group_all['fdt_bg_image'].'); ';
}
?>


<section class="fdb_block block_no<?php echo $count_block; ?><?php if($fdt_block_class_all){echo $fdt_block_class_all; } ?>"<?php if(($fdt_bg_block_color_all) || ($fdt_bg_image_all)){ ?>
style="<?php if($fdt_check_bg_block_color_all){echo $fdt_bg_block_color_all; }; ?><?php if($fdt_check_bg_image_all){echo $fdt_bg_image_all; }; ?>"<?php } ?>>

<?php while(the_repeater_field('fdt_add_block')): ?>

<?php /* 
 ------------------------------ ブロック区切り
*/?>
	<?php if( get_sub_field('fdt_select_module') == "select_block"): ?>
</section>
<?php $count_block += 1 ?>
<?php $count_block_div = 1 ?>
<?php
$group_section = get_sub_field('fdt_wrap_setup_block');
if($group_section){
	$fdt_check_bg_block_color_section = $group_section['fdt_bg_block_color'];
	$fdt_check_bg_image_section = $group_section['fdt_bg_image'];

	$fdt_block_id_section = ' id="'.$group_section['fdt_block_id'].'"';
	$fdt_block_class_section = ' '.$group_section['fdt_block_class'];
	$fdt_bg_block_color_section = 'background-color:'.$group_section['fdt_bg_block_color'].'; ';
	$fdt_bg_image_section = 'background-image:url('.$group_section['fdt_bg_image'].'); ';
}
?>
<section<?php if($fdt_block_id_section){ echo $fdt_block_id_section; } ?> class="fdb_block block_no<?php echo $count_block; ?><?php if($fdt_block_class_section){echo $fdt_block_class_section; } ?>"<?php if(($fdt_check_bg_block_color_section) || ($fdt_check_bg_image_section)){ ?>style="<?php if($fdt_check_bg_block_color_section){echo $fdt_bg_block_color_section; }; ?><?php if($fdt_check_bg_image_section){echo $fdt_bg_image_section; }; ?>"<?php } ?>>



<?php /* 
 ------------------------------ コード入力
*/?>
	<?php elseif( get_sub_field('fdt_select_module') == "phpcode"): ?>

<?php
	if(get_sub_field("fdt_phpcode")){
		$tmpfile = tmpfile();

		//テンポラリファイルに書き込み
		fwrite($tmpfile, "<?php " . get_sub_field("fdt_phpcode") . "?>");

		//テンポラリファイルのパスを指定して読み込み
		include(stream_get_meta_data($tmpfile)["uri"]);

		//テンポラリファイルを削除
		fclose($tmpfile);
	}
?>

<?php /* 
 ------------------------------ その他
*/?>
	<?php else: ?>

<?php //選択されていないフィールドは表示しないように制御
$fdt_select = get_sub_field('fdt_select_field');
$search_setup = 'setup';
$search_title = 'title';
$search_img = 'img';
$search_movie = 'movie';
$search_text = 'text';
$search_list_text = 'list_text';
$search_caution = 'caution';
$search_tables = 'tables';
$check_setup = in_array($search_setup, $fdt_select);
$check_title = in_array($search_title, $fdt_select);
$check_text = in_array($search_text, $fdt_select);
$check_list_text = in_array($search_list_text, $fdt_select);
$check_img = in_array($search_img, $fdt_select);
$check_movie = in_array($search_movie, $fdt_select);
$check_caution = in_array($search_caution, $fdt_select);
$check_tables = in_array($search_tables, $fdt_select);
?>
<?php
$group = get_sub_field('fdt_wrap_setup_block');
if($group){
	$fdt_check_bg_block_color = $group['fdt_bg_block_color'];
	$fdt_check_bg_image = $group['fdt_bg_image'];

	$fdt_block_class = ' '.$group['fdt_block_class'];
	$fdt_bg_block_color = 'background-color:'.$group['fdt_bg_block_color'].'; ';
	$fdt_bg_image = 'background-image:url('.$group['fdt_bg_image'].'); ';
}
?>

	<div class="fdt_block_div<?php echo $count_block_div; ?> fdt_innner <?php the_sub_field('fdt_select_module');?><?php if($fdt_block_class){echo $fdt_block_class; } ?>"<?php $count_block_div += 1 ?><?php if ($check_setup):?><?php if(($fdt_check_bg_block_color) || ($fdt_check_bg_image)){ ?>
style="<?php if($fdt_check_bg_block_color){echo $fdt_bg_block_color; }; ?><?php if($fdt_check_bg_image){echo $fdt_bg_image; }; ?><?php } ?><?php if(($fdt_check_bg_block_color) || ($fdt_check_bg_image)){ ?>"<?php }?><?php endif; ?>>

<?php if(get_sub_field('fdt_select_module') == 'slideshow'){ ?>
<?php /* ?><?php */ ?>
<script type="text/javascript">
	$(function () {
		$('#fdt_slider<?php echo $count_block_div - 1; ?>').slick({
		arrows: true,
		dots: true,
		autoplay: true, // 自動再生
		cssEase: 'linear',// アニメーション
		speed: 600, // フェードアニメーションの速度設定
		}
		);
	});
</script>

<?php } ?>

<?php if((get_sub_field('fdt_select_module') === 'column2_text_img') || (get_sub_field('fdt_select_module') === 'column2_img_text')){ ?>
	<div class="column_1st">
	<?php include('flexble_design_template/inc_fdt_movie.php'); ?>
	<?php if($check_img):?><?php include('flexble_design_template/inc_fdt_ul_img.php'); ?><?php endif; ?>
	<?php include('flexble_design_template/inc_fdt_ul_img_svg.php'); ?>
	</div>

	<div class="column_2nd">
<?php } ?>

<?php include('flexble_design_template/inc_fdt_title.php'); ?>

<?php if(!(get_sub_field('fdt_select_module') === 'column2_text_img') && !(get_sub_field('fdt_select_module') === 'column2_img_text')){ ?>
<?php include('flexble_design_template/inc_fdt_movie.php'); ?>
<?php if ($check_img):?><?php include('flexble_design_template/inc_fdt_ul_img.php'); ?><?php endif; ?>
<?php include('flexble_design_template/inc_fdt_ul_img_svg.php'); ?>
<?php } ?>

<?php if ($check_text):?><?php include('flexble_design_template/inc_fdt_p_text.php'); ?><?php endif; ?>
<?php if ($check_list_text):?><?php include('flexble_design_template/inc_fdt_ul_text.php'); ?><?php endif; ?>
<?php if ($check_tables):?><?php include('flexble_design_template/inc_fdt_tables.php'); ?><?php endif; ?>

<?php if ($check_caution): if( get_sub_field('fdt_ul_caution')): ?>
<ul class="fdt_ul_caution"><?php while(the_repeater_field('fdt_ul_caution')): ?>
<li><?php the_sub_field('fdt_ul_caution_text');?></li>
<?php endwhile;//fdt_ul_img ?></ul>
<?php endif; endif; ?>

<?php if((get_sub_field('fdt_select_module') === 'column2_text_img') || (get_sub_field('fdt_select_module') === 'column2_img_text')){ ?>
</div>
<?php } ?> 

	</div><!--//fdt_select_module--> 
	<?php endif; ?>

<?php endwhile;//fdt_add_block ?>
</section>
<?php endif; ?>
	<?php // the_content(); ?>
<?php endwhile; ?>			

<?php
get_footer();
