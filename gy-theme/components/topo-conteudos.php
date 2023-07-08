<section class="topo__conteudos">
  <div class="topo__conteudos--container">
    <?php if (get_field('icone_pagina')) { ?>
      <img src="<?php the_field('icone_pagina'); ?>" alt="ícone <?php the_title(); ?>">
    <?php } ?>
    <h1>
      <?php if (is_page()) {
        the_title();
      } elseif (is_category()) { ?>
        Artigos sobre <span class="categoria"><?php single_cat_title(); ?></span>
      <?php } ?>
    </h1>
  </div>
</section>