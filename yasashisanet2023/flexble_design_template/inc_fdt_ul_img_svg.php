<?php if( get_sub_field('fdt_ul_img_svg')): ?>
	<ul class="fdt_ul_img"><?php while(the_repeater_field('fdt_ul_img_svg')): ?>
	<li><?php the_sub_field('fdt_li_img_svg');?></li>
	<?php endwhile;//fdt_ul_img ?></ul>
<?php endif; ?>