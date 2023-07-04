<?php /*  ?>
<?php if( get_sub_field('fdt_ul_icons')): ?><ul class="fdt_ul_icons"><?php while(the_repeater_field('fdt_ul_icons')): ?>
	<li><?php the_sub_field('fdt_li_icon');?></li>
<?php endwhile;//fdt_ul_icons ?></ul>
<?php endif; ?>
<?php */  ?>

<div class="fdt_ul_icons">
<?php 
$tags_list = get_the_tag_list( '', __( '', 'text-domain' ) );
if ( $tags_list ) {
	printf(  __( '%1$s', 'text-domain' ), $tags_list ); // タグをカンマ区切りで表示する場合
}
 ?>
</div>