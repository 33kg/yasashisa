<?php if( get_sub_field('fdt_ul_img')): ?><ul class="fdt_ul_img<?php if(get_sub_field('fdt_select_module') == 'slideshow'): ?> slider-1" id="fdt_slider<?php echo $count_block_div - 1; ?><?php endif;?>"><?php while(the_repeater_field('fdt_ul_img')): ?>
	<li>

<?php
$img_group_all = get_sub_field('fdt_li_img_link_group');
$fdt_li_img_link_url = $img_group_all['fdt_li_img_link_url'];
$fdt_li_img_link_url_openaer = $img_group_all['fdt_li_img_link_url_openaer'];
?>

<?php if($fdt_li_img_link_url): ?><a href="<?php echo $img_group_all['fdt_li_img_link_url']; ?>"

<?php if($fdt_li_img_link_url_openaer == 'external'): ?> target="_blank"<?php endif; ?>

><?php endif; ?> <img<?php if( get_sub_field('fdt_li_img_sp')): ?> class="pc"<?php endif; ?> src="<?php the_sub_field('fdt_li_img');?>"> <?php if( get_sub_field('fdt_li_img_sp')): ?><img class="sp" src="<?php the_sub_field('fdt_li_img_sp');?>"><?php endif; ?> <?php if($img_group_all): ?></a><?php endif; ?> </li>
	<?php endwhile;//fdt_ul_img ?></ul>
	<?php endif; ?>