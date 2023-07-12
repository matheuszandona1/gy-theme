<?php

// Template Name: Home

get_header();
?>

<main class="page--home before bg-gy" style="background-position: center bottom; background-size:110%;">
  <section class="hero ">
    <div class="hero-slider">
      <div class="hero__slide">
        <div class="hero__container">
          <div class="hero__content col-7">
            <h1 class="hero__title">Lorem ipsum</h1>
            <p class="hero__desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
              ipsum consequat, gravida quam nec, ornare orci. Etiam at ex rutrum,
              vehicula quam vitae, consequat ex. Mauris dictum interdum augue vitae
              dictum. Suspendisse potenti. Nulla venenatis massa non porttitor
              eleifend.
            </p>
            <div class="button--container">
              <a href="#" class="button button--default">Lorem ipsum</a>
            </div>
            <div class="nav-slide-holder">
              <button class="prev-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
              <button class="next-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
            </div>
          </div>
          <div class="hero__img no-before">
            <div class="cards__category">relatorio</div>
            <a href="#" class="cards__info">
              <h3 class="cards__title">Relatório Anual</h3>
            </a>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
          </div>
        </div>
      </div>
      <div class="hero__slide">
        <div class="hero__container">
          <div class="hero__content col-7">
            <h1 class="hero__title">Lorem ipsum</h1>
            <p class="hero__desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non
              ipsum consequat, gravida quam nec, ornare orci. Etiam at ex rutrum,
              vehicula quam vitae, consequat ex. Mauris dictum interdum augue vitae
              dictum. Suspendisse potenti. Nulla venenatis massa non porttitor
              eleifend.
            </p>
            <div class="button--container">
              <a href="#" class="button button--default">Lorem ipsum</a>
            </div>
            <div class="nav-slide-holder">
              <button class="prev-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
              <button class="next-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
            </div>
          </div>
          <div class="hero__img no-before">
            <div class="cards__category">relatorio</div>
            <a href="#" class="cards__info">
              <h3 class="cards__title">Relatório Anual</h3>
            </a>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="solucoes container">
    <h2 class="titulo text-center mb-5">Nossas soluções</h2>
    <?php get_template_part('components/diagrama', 'solucoes'); ?>
    <div class="numeros">
      <div class="case__container--numbers">
        <div class="col-3">
          <div class="box text-center">
            <span>+1000</span>
            <p>lorem ipsum dolor sit amet </p>
          </div>
        </div>
        <div class="col-3">
          <div class="box text-center">
            <span>+1000</span>
            <p>lorem ipsum dolor sit amet </p>
          </div>
        </div>
        <div class="col-3">
          <div class="box text-center">
            <span>+1000</span>
            <p>lorem ipsum dolor sit amet </p>
          </div>
        </div>
        <div class="col-3">
          <div class="box text-center">
            <span>+1000</span>
            <p>lorem ipsum dolor sit amet </p>
          </div>
        </div>
      </div>
    </div>
    <div class="button--container center">
      <a href="" class="button button--default">Conheça nossas solucoes</a>
    </div>
  </section>
  <section class="segmentos container">
    <h2 class="titulo text-center">Conheça as nossas áreas de atuação</h2>
    <p class="text-center mb-5">e veja qual se encaixa melhor ao seu negócio:</p>
    <section class="cases">
      <div class="cases__container">
        <div class="relatorios__content">
          <a href="">
            <div class="cards cards__bigger">
              <div class="cards__info">
                <h3 class="cards__title">Relatório Anual</h3>
              </div>
            </div>
          </a>
          <a href="">
            <div class="cards cards__bigger">
              <div class="cards__info">
                <h3 class="cards__title">Relatório Anual</h3>
              </div>
            </div>
          </a>
          <a href="">
            <div class="cards cards__bigger">
              <div class="cards__info">
                <h3 class="cards__title">Relatório Anual</h3>
              </div>
            </div>
          </a>
          <a href="">
            <div class="cards cards__bigger">
              <div class="cards__info">
                <h3 class="cards__title">Relatório Anual</h3>
              </div>
            </div>
          </a>
          <a href="">
            <div class="cards cards__bigger">
              <div class="cards__info">
                <h3 class="cards__title">Relatório Anual</h3>
              </div>
            </div>
          </a>
          <a href="">
            <div class="cards cards__bigger">
              <div class="cards__info">
                <h3 class="cards__title">Relatório Anual</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  </section>

  <section class="clientes">
    <div class="clientes__container">
      <h2 class="default__title no-after smaller">Nossos Clientes</h2>
      <div class="clientes-slider">
        <div class="clientes__slide">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
        </div>
        <div class="clientes__slide">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
        </div>
        <div class="clientes__slide">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
        </div>
        <div class="clientes__slide">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
        </div>
        <div class="clientes__slide">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
        </div>
        <div class="clientes__slide">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
        </div>

      </div>
      <div class="nav-slide-holder">
        <button class="prev-arrow-clientes"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
        <button class="next-arrow-clientes"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
      </div>
    </div>
  </section>
  <section class="hub">
    <div class="hub__container">
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
        <a href="#" class="button button--default">ACESSE TODOS OS NOSSOS CONTEÚDOS</a>
      </div>
    </div>
  </section>
  <?php get_template_part('components/newsletter'); ?>

  <?php get_template_part('components/mapa'); ?>


</main>

<?php
get_footer();
