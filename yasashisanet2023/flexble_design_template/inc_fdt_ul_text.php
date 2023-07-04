<?php
$group_all = get_sub_field('fdt_list_select_field');
if($group_all){
	$fdt_check_list_title = $group_all['title'];
	$fdt_check_list_text = $group_all['text'];
	$fdt_check_list_img = $group_all['img'];
	$fdt_check_list_link = $group_all['link'];

	$fdt_block_class_all = ' '.$group_all['fdt_block_class'];
	$fdt_bg_block_color_all = 'background-color:'.$group_all['fdt_bg_block_color'].'; ';
	$fdt_bg_image_all = 'background-image:url('.$group_all['fdt_bg_image'].'); ';
}
?>

<?php //選択されていないフィールドは表示しないように制御
$fdt_select = get_sub_field('fdt_list_select_field');
$search_title = 'title';
$search_img = 'img';
$search_text = 'text';
$search_link = 'link';
$check_title = in_array($search_title, $fdt_select);
$check_img = in_array($search_img, $fdt_select);
$check_text = in_array($search_text, $fdt_select);
$check_link = in_array($search_link, $fdt_select);
?>

<?php if( get_sub_field('fdt_ul_text')): ?>
	<ul class="fdt_ul_text"><?php while(the_repeater_field('fdt_ul_text')): ?>
	<li><?php if ($check_link):?><?php if( get_sub_field('fdt_li_link')): ?><a href="<?php the_sub_field('fdt_li_link');?>"><?php endif; ?><?php endif; ?><?php if ($check_title):?><?php if( get_sub_field('fdt_li_title')): ?><strong><?php the_sub_field('fdt_li_title');?></strong><?php endif; ?><?php endif; ?><?php if ($check_img):?><?php include('inc_fdt_ul_img.php'); ?><?php endif; ?><?php if ($search_text):?><div class="wrap_text"><?php the_sub_field('fdt_li_text');?></div><?php endif; ?><?php if ($check_link):?><?php if( get_sub_field('fdt_li_link')): ?></a><?php endif; ?><?php endif; ?></li>
	<?php endwhile;//fdt_ul_text ?></ul>
<?php endif; ?>