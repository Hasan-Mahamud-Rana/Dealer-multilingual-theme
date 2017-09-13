<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage"><div class="small-12 float-left">
	<h4><?php the_category(', ') ?></h4>
	   <p class="promo">
	<?php 
	if(pll_current_language() == "da"){
	the_time('l, \d\. j. F, Y'); 
	}else{
		the_time('l, jS F, Y'); 
	}
	
	?>
	</p>
	<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title('' , ''); ?></a></h4>
	<span><?php the_excerpt(); ?></span>
</div>
<div class="small-10 float-left">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php _e("Læs mere", "termatech");?></a>
</div>
<div class="small-2 columns socialIcon">DEL &nbsp;&nbsp;<a onClick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><i class="billio-ss-facebook51"></i></a>
</div>
</article>
<hr>