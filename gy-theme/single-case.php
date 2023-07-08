<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
    $terms = get_the_terms(get_the_ID(), 'categoria_case');

    if ($terms && !is_wp_error($terms)) :

      $tax_links = array();

      foreach ($terms as $term) {
        $tax_links[] = $term->name;
      }

      $tax_links_str = join(", ", $tax_links);
?>

      <div class="page--case">
        <main class="case">
          <div class="case__heading text-center">
            <h3>Case de sucesso</h3>
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('subtitulo'); ?></h2>
            <div class="case__heading--category">
              <h3><?php echo $tax_links_str; ?></h3>
            </div>
          </div>
          <div class="case__container">
            <?php the_content(); ?>
            <div class="case__container--numbers">
              <?php if (have_rows('numeros')) : while (have_rows('numeros')) : the_row(); ?>
                  <div class="col-3">
                    <div class="box">
                      <span>+<?php the_sub_field('numero'); ?></span>
                      <p><?php the_sub_field('texto'); ?></p>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
          <?php get_template_part('components/newsletter', 'post'); ?>
        </main>
      </div>
  <?php endif;
  endwhile;
else : ?>
  <p>Essa página não existe</p>
<?php endif; ?>

<?php
get_footer();
