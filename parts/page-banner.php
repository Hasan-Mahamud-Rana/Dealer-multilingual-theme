<div class="pageBanner">
  <div class="small-12">
    <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>	
	<?php
      if($term->name){
	  echo '<h1 class="page-title">'.$term->name.'</h1>';
	  }
	  the_title( '<h1 class="page-title">', '</h1>' );
      the_breadcrumb();
	  echo $term->name;
    ?>
  </div>
</div>