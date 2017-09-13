<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<header class="article-header"><p class="spaceP"></p>
		<p class="byline">
	    <i><?php the_time('j.F, Y') ?></i>
		</p>
		<strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></strong>
		<?php //get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->
	<p class="spaceP"></p>			
	<section class="entry-content" itemprop="articleBody">
		<?php echo get_excerpt(); ?><p class="spaceP"></p>	
		<div class="small-10 float-left">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere</a>
        </div>

		<div class="small-2 columns socialIcon">DEL &nbsp;&nbsp;<a onClick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><i class="billio-ss-facebook51"></i></a>
        </div>
		
	</section> <!-- end article section -->
	<hr>
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->				    						
</article> <!-- end article -->