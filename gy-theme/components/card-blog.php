<a href="<?php the_permalink(); ?>">
  <div class="cards cards__blog">
    <div class="cards__image"><img src="<?php the_post_thumbnail_url(); ?>" alt="imagem <?php the_title(); ?>" width="100%"></div>
    <div class="cards__category"><?php the_category(''); ?></div>
    <div class="cards__info" style="box-shadow: none; padding: 0;">
      <div class="cards__date">GreenYellow • <?php echo get_the_date(); ?></div>
      <h3 class="cards__title"><?php the_title(); ?></h3>
      <p class="cards__desc"><?php echo get_the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="cards__readmore">Ler o artigo →</a>
    </div>
  </div>
</a>