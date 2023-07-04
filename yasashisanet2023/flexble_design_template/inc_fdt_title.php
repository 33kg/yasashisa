<?php if ($check_title): if( get_sub_field('fdt_wrap_title')): ?>
<?php $count_title = 1 ?>
	<?php while(the_repeater_field('fdt_wrap_title')): ?>
<?php if( $count_title < 7): ?>
	<h<?php echo $count_title; ?>><?php the_sub_field('fdt_title');?></h1>
	<?php $count_title += 1 ?>
<?php endif; ?>
	<?php endwhile;//fdt_ul_text ?>
<?php endif; endif; ?>
