<a href="<?php the_permalink(); ?>" target="_blank">
  <div class="card card-s-img card--border col-6">
    <div class="card-flex">
      <div class="card-img">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="imagem <?php the_title(); ?>">
      </div>
      <div class="card-block">
        <h3 class="card-title">
          <?php the_title(); ?>
        </h3>
        <div class="card-link">Ler o artigo <span>→</span></div>
      </div>
    </div>
  </div>
</a>