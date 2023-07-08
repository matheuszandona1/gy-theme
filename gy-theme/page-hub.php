<?php

// Template Name: Hub

get_header();
?>

<div class="page--hub">
  <main class="hub">
    <section class="topo__hub">
      <div class="topo__hub--links">
        <div class="button__container">
          <a href="<?php echo site_url(); ?>/blog" class="button button--lighten">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/icon-artigos.svg" alt="ícone artigos">
            Artigos
          </a>
          <a href="<?php echo site_url(); ?>/materiais" class="button button--lighten">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/icon-materiais.svg" alt="ícone materiais">
            Materiais
          </a>
          <a href="<?php echo site_url(); ?>/podcast" class="button button--lighten">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/icon-podcast.svg" alt="ícone podcast">
            Podcast
          </a>
          <a href="<?php echo site_url(); ?>/cases-de-sucesso" class="button button--lighten">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/icon-cases.svg" alt="ícone case">
            Cases
          </a>
          <a href="<?php echo site_url(); ?>/gy-na-midia" class="button button--lighten">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/icon-gymidia.svg" alt="ícone GY na mídia">
            GY na midia
          </a>
        </div>
      </div>
      <div class="topo__hub--destaque">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 1,
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $wpb_all_query = new WP_Query($args); ?>
        <?php if ($wpb_all_query->have_posts()) {
          while ($wpb_all_query->have_posts()) {
            $wpb_all_query->the_post();
        ?>
            <?php get_template_part('components/card', 'destaque'); ?>
        <?php
          }
          wp_reset_postdata();
        } else {
          echo '<p>Nenhum case antigo, veja nossos últimos posts acima!</p>';
        }
        ?>

      </div>
    </section>
    <div class="blog__container">
      <div class="blog__container--ultimas">
        <div class="titulo col-12 text-center">
          <h2>Últimas do blog</h2>
        </div>
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
            <div class="col-4"><?php get_template_part('components/card', 'blog'); ?></div>
        <?php
          }
          wp_reset_postdata();
        } else {
          echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
        }
        ?>
      </div>
      <div class="col-12 text-center">
        <a href="" class="button button--default">Leia mais no nosso blog</a>
      </div>
      <div class="blog__container--maislidos container-grid">
        <div class="titulo col-12">
          <h2>Posts mais lidos</h2>
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
              <a href="<?php echo the_permalink(); ?>" class="card-link">Ler o artigo <span>→</span></a>
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
  </main>
</div>
<?php
get_footer();
