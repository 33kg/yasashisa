<?php if( get_sub_field('fdt_buy_btn')): ?>
	<?php while(the_repeater_field('fdt_buy_btn')): ?>
	<div class="wrap_buy_btn">
<?php if( get_sub_field('fdt_volume')): ?><p class="volume"><?php the_sub_field('fdt_volume');?></p><?php endif; ?>
<?php if( get_sub_field('fdt_price')): ?><p class="price"><?php the_sub_field('fdt_price');?></p><?php endif; ?>
<?php the_sub_field('fdt_code_tamago');?>
	</div>
	<?php endwhile;//fdt_buy_btn ?>
<?php endif; ?>
<div class="wrap_shipping"><p>通常購入には5%分のポイントが付与されます。<br>全国一律送料500円、5,000円(税込)以上の購入で送料無料。</p></div>