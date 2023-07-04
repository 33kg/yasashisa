
<?php if( get_sub_field('url_youtube')):
	$id_youtube_url = get_sub_field('url_youtube');
	$id_youtube_id = str_replace('https://youtu.be/','',$id_youtube_url);
	$modal_url = "https://www.youtube.com/embed/".$id_youtube_id;
	$modal_thumb = "//img.youtube.com/vi/".$id_youtube_id."/hqdefault.jpg";
?>
<div class="wrap_video"><a href="<?php echo $modal_url; ?>" class="video">
<img src="<?php echo $modal_thumb; ?>">
</a></div>
<?php /* ?>
<div  class="fdt_wrap_youtube">
<iframe width="100%" src="<?php echo $modal_url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?php */ ?>
<?php endif; ?>