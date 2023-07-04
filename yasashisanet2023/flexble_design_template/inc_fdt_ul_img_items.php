<?php 
$count = 1;
?>
<?php if( get_sub_field('fdt_ul_img_items')): ?><ul class="fdt_ul_img_items"><?php while(the_repeater_field('fdt_ul_img_items')): ?>
	<li><a href="<?php the_sub_field('fdt_li_img');?>" data-group="gallery" class="gallery"><img src="<?php the_sub_field('fdt_li_img');?>"></a></li>
<?php 
	$count += 1;
	?>
<?php endwhile;//fdt_ul_img ?></ul>
<?php endif; ?>