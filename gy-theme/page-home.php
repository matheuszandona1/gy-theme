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
</main>

<?php
get_footer();
