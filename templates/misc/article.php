<article class="column small-12 medium-4">
  <?php if(has_post_thumbnail()) : ?>
    <div class="thumbnail">
      <?php the_post_thumbnail( $size = 'post-thumbnail' )?>
    </div>
  <?php endif; ?>
  <h2><?= get_the_title(); ?></h2>
  <div><?php the_excerpt(); ?></div>
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Lire la suite</a>
</article>
