<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="small-12">
		<?php if ( has_post_thumbnail() ) { ?>
		<div class="pageFeaturedImage" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
		</div>
		<?php }?>
		<h4><?php the_category(', ') ?></h4>
		   <p class="promo">
	<?php 
	if(pll_current_language() == "da"){
	the_time('l, j. F, Y'); 
	}else{
		the_time('l, jS F, Y'); 
	}
	
	?>
	</p>
	</div>
<div class="row">
<div class="small-12">
	<div class="small-9 medium-10 columns">
	<h2 class="page-title"><?php the_title('' , ''); ?></h2>
	</div>
	<div class="small-3 medium-2 columns text-right">
	<div class="socialIcon">DEL &nbsp;&nbsp;<a onClick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><i class="billio-ss-facebook51"></i></a>
</div>
	</div>
</div>
</div>
	<div class="small-12">
		<section class="entry-content" itemprop="articleBody">
			<?php the_content(); ?>
		</section>
	</div>
</article> <!-- end article -->