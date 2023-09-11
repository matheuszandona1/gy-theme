<?php

// Template Name: Blog

get_header();
?>

<div class="page--blog">
  <main class="blog">
    <?php get_template_part('components/topo', 'conteudos'); ?>
    <div class="blog__container">
      <div class="blog__container--destaque">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 2,
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $wpb_all_query = new WP_Query($args); ?>
        <?php if ($wpb_all_query->have_posts()) {
          while ($wpb_all_query->have_posts()) {
            $wpb_all_query->the_post();
        ?>
            <?php get_template_part('components/card', 'conteudo'); ?>
        <?php
          }
          wp_reset_postdata();
        } else {
          echo '<p>Nenhum case antigo, veja nossos últimos posts acima!</p>';
        }
        ?>

      </div>
      <div class="blog__container--categorias">
        <?php
        // Get all categories
        $categories = get_categories(array(
          'orderby' => 'name',
          'order'   => 'ASC',
          'number'  => 5,  // Limit the number of categories
        ));

        // Check if any category exists
        if (!empty($categories) && !is_wp_error($categories)) {
          foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id);

            echo '<div class="button--container"><a href="' . esc_url($category_link) . '" class="button button--lighten">' . $category->name . '</a></div>';
          }
        }
        ?>
      </div>
      <div class="blog__container--ultimas">
        <div class=" col-12 text-center">
          <h2 class="default__title smaller no-after" style="margin-bottom: 24px;">Últimas do blog</h2>
        </div>
        <div class="blog__card-container">
          <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'offset' => 2,
          );
          $wpb_all_query = new WP_Query($args); ?>
          <?php if ($wpb_all_query->have_posts()) {
            while ($wpb_all_query->have_posts()) {
              $wpb_all_query->the_post();
          ?>
              <div class=""><?php get_template_part('components/card', 'blog'); ?></div>
          <?php
            }
            wp_reset_postdata();
          } else {
            echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
          }
          ?>

        </div>
      </div>
      <div class="col-12 text-center">
        <a href="" class="button button--default">Leia mais no nosso blog</a>
      </div>
      <div class="blog__container--maislidos container-grid">
        <div class=" col-12">
          <h2 class="default__title smaller no-after" style="margin-bottom: 24px;">Posts mais lidos</h2>
        </div>
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'DESC',
          'offset' => 2,
        );
        $wpb_all_query = new WP_Query($args); ?>
        <?php if ($wpb_all_query->have_posts()) {
          while ($wpb_all_query->have_posts()) {
            $wpb_all_query->the_post();
        ?>
            <div class="card card--border col-6">
              <h3 class="card-title">
                <?php the_title(); ?>
              </h3>
              <a href="<?php the_permalink(); ?>" class="card-link">Ler o artigo <span>→</span></a>
            </div>
        <?php
          }
          wp_reset_postdata();
        } else {
          echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
        }
        ?>
      </div>
    </div>
    <?php get_template_part('components/newsletter', 'post'); ?>
  </main>
</div>
<?php
get_footer();
