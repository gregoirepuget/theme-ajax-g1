<article class="column small-12 medium-4">
  <h2><?= get_the_title(); ?></h2>
  <div><?php the_excerpt(); ?></div>
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Lire la suite</a>
</article>
