<section class="container">
  <div class="row articles_list">

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

  while ( $the_query->have_posts() ) {
  $the_query->the_post();
    get_template_part( 'templates/misc/article' );

  }
/* Restore original Post Data */
wp_reset_postdata();
} else {
// no posts found
}

 ?>

  </div>
  <div class="row button_more">
    <a href="#" class="button" title="read more"> + d'articles</a>
  </div>
</section>
