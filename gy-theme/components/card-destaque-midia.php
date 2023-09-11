<div class="card card-s-img card--border col-12">
  <a href="<?php the_field('link_midia'); ?>" target="_blank">
    <div class="card-flex">
      <div class="card-block">
        <h3 class="card-title">
          <?php the_title(); ?>
        </h3>
        <p class="card-text"><?php echo get_the_excerpt(); ?></p>
        <div class="card-link">Ler o artigo <span>→</span></div>
      </div>
      <div class="card-img">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="imagem <?php the_title(); ?>">
      </div>
    </div>
  </a>
</div>