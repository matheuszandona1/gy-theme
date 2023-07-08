<div class="cards cards__bigger" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
  <div class="cards__category">case de sucesso</div>
  <div class="cards__info">
    <h3 class="cards__title"><?php the_title(); ?></h3>
    <p class="cards__desc"><?php echo get_the_excerpt(); ?></p>
  </div>
</div>