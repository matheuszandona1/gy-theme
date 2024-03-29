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
        <div class="hub__floating">
          <?php
          $args = array(
            'post_type' => 'case',
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
              <a href="<?php the_permalink(); ?>" class="cards cards__bigger" style="background: url('<?php the_post_thumbnail_url(); ?>') 0 0 / cover no-repeat;">
                <div class="cards__category">case de sucesso</div>
                <div class="cards__info">
                  <h3 class="cards__title"><?php the_title(); ?></h3>
                  <p class="cards__desc">Saiba mais <span style="margin-left: 10px;">→</span></p>
                </div>
              </a>
          <?php
            }
            wp_reset_postdata();
          } else {
            echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
          }
          ?>
          <div class="hub__floating--middle">
            <div class="sidebar">
              <?php
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'offset' => 1,
                'order' => 'DESC',
              );
              $wpb_all_query = new WP_Query($args); ?>
              <?php if ($wpb_all_query->have_posts()) {
                while ($wpb_all_query->have_posts()) {
                  $wpb_all_query->the_post();
              ?>
                  <a href="<?php the_permalink(); ?>" class="card card--border">
                    <h3 class="card-title">
                      <?php the_title(); ?>
                    </h3>
                    <div class="card-link">Ler o artigo <span>→</span></div>
                  </a>
              <?php
                }
                wp_reset_postdata();
              } else {
                echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
              }
              ?>
              <?php get_template_part('components/newsletter', 'sidebar-hub'); ?>
            </div><!-- #secondary -->
          </div>
          <!-- <div class="hub__floating--end">
            <a href="">
              <div class="cards cards__bigger">
                <div class="cards__info">
                  <h3 class="cards__title">Relatório Anual</h3>
                </div>
              </div>
            </a>
          </div> -->
        </div>
      </div>
    </section>
    <div class="blog__container">
      <div class="blog__container--ultimas">
        <div class="titulo col-12 text-center">
          <h2 class="default__title no-after smaller">Últimas do blog</h2>
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
        <a href="<?php echo site_url(); ?>/blog" class="button button--default">Leia mais no nosso blog</a>
      </div>
      <div class="hub-holder d-flex" style="padding: 80px 0px;">

        <div class="blog__container--maislidos container-grid" style="flex-direction: column; margin: 0;">
          <div class="titulo">
            <h2 class="default__title no-after smaller text-start">GY na mídia</h2>
          </div>
          <?php
          $args = array(
            'post_type' => 'midia',
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
              <a href="<?php the_field('link_midia'); ?>" target="_blank" class="card card--border col-6">
                <h3 class="card-title">
                  <?php the_title(); ?>
                </h3>
                <div class="card-link">Ler o artigo <span>→</span></div>
              </a>
          <?php
            }
            wp_reset_postdata();
          } else {
            echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
          }
          ?>
          <div class="button--container">
            <a href="<?php echo site_url(); ?>/gy-na-midia" class="button button--default">mais greenyellow na mídia</a>
          </div>
        </div>
        <div class="ebooks">
          <div class="titulo">
            <h2 class="default__title no-after smaller text-start">Baixe nossos materiais ricos</h2>
          </div>
          <div class="ebooks__container d-flex" style="gap:24px;">
            <?php
            $args = array(
              'post_type' => 'material',
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
                <a href="<?php the_field('link_material'); ?>" target="_blank" class="cards cards__bigger" style="background: url('<?php the_post_thumbnail_url(); ?>') 0 0 / cover no-repeat;">
                  <div class="cards__category">
                    <?php
                    // Get the custom taxonomy terms for the post
                    $terms = get_the_terms(get_the_ID(), 'categoria_material');
                    if (!empty($terms) && !is_wp_error($terms)) {
                      foreach ($terms as $term) {
                        echo $term->name;
                      }
                    } ?>
                  </div>
                  <div class="cards__info">
                    <h3 class="cards__title"><?php the_title(); ?></h3>
                    <p class="cards__desc">Saiba mais<span style="margin-left: 10px;">→</span></p>
                  </div>
                </a>
            <?php
              }
              wp_reset_postdata();
            } else {
              echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="success-cases">
        <div class="titulo text-center">
          <h2 class="default__title no-after smaller">Nossos cases de sucesso</h2>
        </div>
        <div class="succes-cases d-flex">

          <?php
          $args = array(
            'post_type' => 'case',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
            'offset' => 1,
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
            echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
          }
          ?>
        </div>
        <div class="button--container center">
          <a href="<?php echo site_url(); ?>/cases-de-sucesso" class="button button--default">veja mais cases da greenyellow</a>
        </div>
      </div>
    </div>
  </main>
</div>
<?php
get_footer();
