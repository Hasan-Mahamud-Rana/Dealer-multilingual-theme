<div class="small-12 nyheder">
  <?php
  //$paged = intval(get_query_var('paged'));
  //$paged = ($paged) ? $paged : 1;
  $post_type = "maplist";
  $args = array(
  'post_type' => $post_type,
  'posts_per_page' => -1,
  'map_location_categories' => 'fr-stoves-and-accessoriesdealer',
  //'paged' => $paged,
  //'more' => $more = 0,
  'order' => 'DESC',
  );
  $query = new WP_Query($args ); ?>
  <table>
    <thead>
      <tr>
        <th>Dealer Name</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Address</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      $meta = get_post_meta( get_the_ID());
      $maplist_latitude = get_post_meta( get_the_ID(), 'maplist_latitude' );
      $maplist_longitude = get_post_meta( get_the_ID(), 'maplist_longitude' );
      $maplist_address = get_post_meta( get_the_ID(), 'maplist_address' );
      $maplist_description = get_post_meta( get_the_ID(), 'maplist_description' );
      ?>
      <tr>
        <td><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title('' , ''); ?></a></td>
        <td><?php echo $maplist_latitude[0]; ?></td>
        <td><?php echo $maplist_longitude[0]; ?></td>
        <td><?php echo $maplist_address[0]; ?></td>
        <td><?php echo $maplist_description[0];
        ?></td>
      </tr>
      <?php endwhile; ?>
      <?php  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.','termatech' ); ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>