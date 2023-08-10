<?php

// Template Name: Home

get_header();
?>

<main class="page--home before bg-gy" style="background-position: center bottom; background-size:110%;">
  <section class="hero ">
    <div class="hero-slider">
      <?php if (have_rows('slide')) { ?>
        <?php while (have_rows('slide')) : the_row(); ?>
          <div class="hero__slide">
            <div class="hero__container">
              <div class="hero__content col-7">
                <h1 class="hero__title"><?php the_sub_field('titulo') ?></h1>
                <?php if (get_sub_field('subtitulo')) { ?>
                  <h2 class="hero__sub-title"><?php the_sub_field('subtitulo'); ?></h2>
                <?php } ?>
                <p class="hero__desc">
                  <?php the_sub_field('texto') ?>
                </p>
                <div class="button--container">
                  <a href="<?php the_sub_field('link_cta') ?>" class="button button--default"><?php the_sub_field('texto_cta') ?></a>
                </div>
                <div class="nav-slide-holder">
                  <button class="prev-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
                  <button class="next-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
                </div>
              </div>
              <div class="hero__img no-before">
                <?php if (get_sub_field('texto_tag_imagem')) { ?>
                  <a href="<?php the_sub_field('link_tag_imagem'); ?>" class="cards__category"><?php the_sub_field('texto_tag_imagem'); ?></a>
                <?php } ?>
                <?php if (get_sub_field('texto_cta_imagem')) { ?>
                  <a href="<?php the_sub_field('link_cta_imagem'); ?>" class="cards__info">
                    <h3 class="cards__title"><?php the_sub_field('texto_cta_imagem'); ?></h3>
                  </a>
                <?php } ?>
                <img src="<?php the_sub_field('imagem'); ?>" alt="banner <?php the_sub_field('titulo'); ?>" />
              </div>
            </div>
          </div>
          <?php endwhile; ?><?php  } ?>
    </div>
  </section>
  <section class="solucoes container">
    <h2 class="titulo text-center mb-5">Nossas soluções</h2>
    <?php get_template_part('components/diagrama', 'solucoes'); ?>
    <div class="numeros">
      <div class="case__container--numbers">
      <?php if (have_rows('numeros')) { ?>
        <?php while (have_rows('numeros')) : the_row(); ?>
          <div class="col-2">
            <div class="box text-center">
              <span>+<?php the_sub_field('numero'); ?></span>
              <p><?php the_sub_field('descricao'); ?></p>
            </div>
          </div>
        <?php endwhile; ?><?php  } ?>
      </div>
    </div>
    <div class="button--container center">
      <a href="<?php echo site_url(); ?>/solucoes-gy" class="button button--default">Conheça nossas solucoes</a>
    </div>
  </section>
  <section class="segmentos container">
    <h2 class="titulo text-center">Conheça as nossas áreas de atuação</h2>
    <p class="text-center mb-5">e veja qual se encaixa melhor ao seu negócio:</p>
    <section class="cases">
      <div class="cases__container">
        <div class="relatorios__content">
          <a href="<?php echo site_url(); ?>/segmentos/varejo" class="col-2">
            <div class="cards cards__bigger" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/varejo.jpg');">
              <div class="cards__info">
                <h3 class="cards__title">Varejo</h3>
              </div>
            </div>
          </a>
          <a href="<?php echo site_url(); ?>/segmentos/shoppings-e-predios-comerciais" class="col-2">
            <div class="cards cards__bigger" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/shoppings.jpg');">
              <div class="cards__info">
                <h3 class="cards__title">Shoppings
                  e prédios
                  comerciais</h3>
              </div>
            </div>
          </a>
          <a href="<?php echo site_url(); ?>/segmentos/hotelaria" class="col-2">
            <div class="cards cards__bigger" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/hotelaria.jpg');">
              <div class="cards__info">
                <h3 class="cards__title">Hotelaria</h3>
              </div>
            </div>
          </a>
          <a href="<?php echo site_url(); ?>/segmentos/mineracao" class="col-2">
            <div class="cards cards__bigger" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/mineracao.jpg');">
              <div class="cards__info">
                <h3 class="cards__title">Mineração</h3>
              </div>
            </div>
          </a>
          <a href="<?php echo site_url(); ?>/segmentos/industria" class="col-2">
            <div class="cards cards__bigger" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/industria.jpg');">
              <div class="cards__info">
                <h3 class="cards__title">Indústria</h3>
              </div>
            </div>
          </a>
          <a href="<?php echo site_url(); ?>/segmentos/logistica" class="col-2">
            <div class="cards cards__bigger" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/logistica.jpg');">
              <div class="cards__info">
                <h3 class="cards__title">Logística</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
    <div class="button--container center">
      <a href="<?php echo site_url(); ?>/segmentos" class="button button--default">Conheça nossos segmentos</a>
    </div>
  </section>

  <section class="clientes">
    <div class="clientes__container">
      <h2 class="default__title no-after smaller">Nossos Clientes</h2>
      <div class="clientes-slider">
        <?php if (have_rows('clientes')) { ?>
          <?php while (have_rows('clientes')) : the_row(); ?>
            <div class="clientes__slide">
              <img src="<?php the_sub_field('logo') ?>" alt="" />
            </div>
            <?php endwhile; ?><?php  } ?>
      </div>
      <div class="nav-slide-holder">
        <button class="prev-arrow-clientes"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
        <button class="next-arrow-clientes"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
      </div>
    </div>
  </section>
  <section class="hub">
    <div class="hub__container">
      <h2 class="titulo text-center">Tudo sobre transição energética e tendências do setor</h2>
      <p class="text-center mb-5">Confira nossos conteúdos.</p>
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
          <div class="cards cards__bigger">
            <div class="cards__category">case de sucesso</div>
            <div class="cards__info">
              <h3 class="cards__title">Relatório de Responsabilidade Corporativa 2021 – ZOOM Brasil</h3>
              <p class="cards__desc">Confira a 2ª edição do Relatório de Responsabilidade Corporativa – Zoom Brasil.</p>
            </div>
          </div>
          <div class="hub__floating--middle">
            <div class="sidebar">
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
                  <div class="card card--border">
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
              <?php get_template_part('components/newsletter', 'sidebar-hub'); ?>
            </div><!-- #secondary -->
          </div>
          <div class="hub__floating--end">
            <a href="">
              <div class="cards cards__bigger">
                <div class="cards__info">
                  <h3 class="cards__title">Relatório Anual</h3>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="button--container center">
        <a href="<?php echo site_url(); ?>/hub-de-conteudos" class="button button--default">Acesse todos os nossos conteúdos</a>
      </div>
    </div>
  </section>
  <?php get_template_part('components/newsletter'); ?>

  <?php get_template_part('components/mapa'); ?>


</main>

<?php
get_footer();
