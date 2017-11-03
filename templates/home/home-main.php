<section class="container">
  <div class="row">

<?php
// args
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'paged' => 1,
);

// The Query
$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) {
echo '<ul>';
while ( $the_query->have_posts() ) {
$the_query->the_post();
echo '<li>' . get_the_title() . '</li>';
}
echo '</ul>';
/* Restore original Post Data */
wp_reset_postdata();
} else {
// no posts found
}

 ?>

  </div>
</section>
