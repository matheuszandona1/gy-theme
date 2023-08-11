<?php

// Template Name: Interna segmentos

get_header();
?>

<div class="page--segmentos">
	<main class="manipulating">
		<?php get_template_part('components/hero', 'segmentos'); ?>
		<section class="solucoes">
			<div class="solucoes__container">
				<h2 class="default__title no-after">Nossas soluções</h2>
				<div class="solucoes__container--content">
					<?php the_content(); ?>
				</div>
				<?php get_template_part('components/diagrama', 'solucoes'); ?>
			</div>
		</section>
		<section class="pr-operating">
			<div class="pr-operating__container">
				<div class="pr-operating__content">
					<h2 class="default__title no-after smaller">Benefícios da transição energética e descarbonização no segmento</h2>

					<div class="nav-slide-holder">
						<button class="prev-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
						<button class="next-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
					</div>
				</div>
				<div class="pr-operating__holder">
					<div class="pr-operating__slider">
						<div class="pr-operating__slide">
							<div class="card-check">
								<p class="card-check__text">Redução das despesas, seja pela redução do consumo, seja pela redução do custo da energia.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<p class="card-check__text">Redução da pegada de carbono para atingimento de metas sustentáveis.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<p class="card-check__text">Maior previsibilidade dos custos de energia e utilidades.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<p class="card-check__text">Maior confiabilidade dos equipamentos, reduzindo quebras e falhas.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<p class="card-check__text">Redução do uso de fluidos refrigerantes emissores de gases de efeito estufa.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<p class="card-check__text">Redução de quebras e perda de produtos.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pr-custom">
			<div class="pr-custom__container">
				<h2 class="default__title no-after smaller text-start">Por que ter a GY como parceira?</h2>
				<div class="pr-custom__content text-center">
					<?php if (have_rows('gy_parceira')) { ?>
						<?php while (have_rows('gy_parceira')) : the_row(); ?>
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text"><?php the_sub_field('motivo') ?></p>
							</div>
							<?php endwhile; ?><?php  } ?>
				</div>
			</div>
		</section>
		<section class="cases">
			<div class="cases__container">
				<h2 class="default__title no-after smaller">Nossos cases de sucesso</h2>
				<div class="relatorios__content">
					<div class="cards cards__bigger">
						<div class="cards__category">case de sucesso</div>
						<div class="cards__info">
							<h3 class="cards__title">Relatório Anual de Responsabilidade Corporativa 2021</h3>
							<p class="cards__desc">Confira a 3ª edição do relatório global GreenYellow e entenda nossas ações e políticas.</p>
						</div>
					</div>
					<div class="cards cards__bigger">
						<div class="cards__category">case de sucesso</div>
						<div class="cards__info">
							<h3 class="cards__title">Relatório de Responsabilidade Corporativa 2021 – ZOOM Brasil</h3>
							<p class="cards__desc">Confira a 2ª edição do Relatório de Responsabilidade Corporativa – Zoom Brasil.</p>
						</div>
					</div>
					<div class="cards cards__bigger">
						<div class="cards__category">case de sucesso</div>
						<div class="cards__info">
							<h3 class="cards__title">Código de Aquisição Responsável</h3>
						</div>
					</div>
				</div>
				<div class="cases__holder d-flex">
					<div class="card card-s-img card--border col-6">
						<a href="#">
							<div class="card-flex">
								<div class="card-img"></div>
								<div class="card-block">
									<h3 class="card-title">
										Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quisquam repellendus tempore minima possimus iure culpa tenetur ullam
										repudiandae asperiores!
									</h3>
									<p class="card-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, ullam.</p>
									<a href="#" class="card-link">Ler o artigo <span>→</span></a>
								</div>
							</div>
						</a>
					</div>
					<div class="card card-s-img card--border col-6">
						<a href="#">
							<div class="card-flex">
								<div class="card-img"></div>
								<div class="card-block">
									<h3 class="card-title">
										Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quisquam repellendus tempore minima possimus iure culpa tenetur ullam
										repudiandae asperiores!
									</h3>
									<a href="#" class="card-link">Ler o artigo <span>→</span></a>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="button--container center">
					<a href="#" class="button button--redirect">lorem ipsum</a>
				</div>
			</div>
		</section>
		<?php get_template_part('components/newsletter', 'b'); ?>
	</main>
</div>
<?php
get_footer();
