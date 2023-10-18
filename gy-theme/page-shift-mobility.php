<?php

// Template Name: Shifty Mobility

get_header();
?>
<div class="page--shift mobility">
	<div class="page--shift production">
		<main>
			<?php get_template_part('components/hero'); ?>
			<section class="resources">
				<div class="resources__container">
					<div class="resources__img col-6">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2023/07/909fd7d49688e34e18820a63747fbe93-2.jpg" alt="" />
					</div>
					<div class="resources__content col-6">
						<div class="resources__top">
							<div class="check-vazado"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check-vazado.svg" alt="" /></div>
							<h2 class="default__title no-after smaller text-start">Conheça a solução Charge as a Service</h2>
						</div>
						<div class="resources__side">
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Adequação da infraestrutura elétrica do local</p>
								</div>
							</div>
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Implantação do eletroposto</p>
								</div>
							</div>
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Operação e manutenção</p>
								</div>
							</div>
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Fornecimento de energia renovável para o eletroposto</p>
								</div>
							</div>
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Investimento 100% GY</p>
								</div>
							</div>
							<div class="button--container">
								<a href="#" class="button button--default">Saiba mais sobre os carregadores elétricos</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="pr-operating">
				<div class="pr-operating__container">
					<div class="pr-operating__content">
						<h2 class="default__title no-after smaller">Lorem ipsum dolor sit amet</h2>
						<h3 class="default__desc">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci.
						</h3>
						<div class="nav-slide-holder">
							<button class="prev-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
							<button class="next-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
						</div>
					</div>
					<div class="pr-operating__holder">
						<div class="pr-operating__slider">
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci.</p>
								</div>
							</div>
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci.</p>
								</div>
							</div>
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci.</p>
								</div>
							</div>
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci.</p>
								</div>
							</div>
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Uso racional das fontes de energia</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="cases" class="cases">
				<div class="cases__container">
					<h2 class="default__title no-after smaller">Nossos cases de sucesso</h2>
					<div class="relatorios__content">
						<?php
						$args = array(
							'post_type' => 'case',
							'post_status' => 'publish',
							'posts_per_page' => 3,
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
										<p class="cards__desc"><?php the_excerpt(); ?></p>
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
			</section>
			<?php get_template_part('components/newsletter'); ?>
		</main>
	</div>
</div>

<?php
get_footer();
