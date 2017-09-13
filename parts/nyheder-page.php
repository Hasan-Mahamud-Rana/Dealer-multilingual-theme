<div class="small-12 nyheder">
  <?php $query = new WP_Query( 'order=des&post_type=nyheders&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage"><div class="small-12 float-left">
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
    <h2 class="page-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title('' , ''); ?></a></h2>
    <span><?php the_excerpt (); ?></span>
  </div>
  <div class="small-10 float-left">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere</a>
  </div>
  <div class="small-2 columns socialIcon">DEL &nbsp;&nbsp;<a onClick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><i class="billio-ss-facebook51"></i></a>
</div>
<div class="small-12 float-left">
  <?php the_post_thumbnail('full'); ?><hr>
</div>
</article>
<?php endwhile; ?>
<div class="small-12">
<div class="navigation text-center">
  <?php if (function_exists("pagination")) {
  pagination($query->max_num_pages);
  } ?>
</div>
</div>
<?php  wp_reset_postdata(); else : ?>
<?php _e( 'Sorry, no posts matched your criteria.','termatech' ); ?>
<?php endif; ?>
</div>