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
						<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/img-modelo.png" alt="" />
					</div>
					<div class="resources__content col-6">
						<div class="resources__top">
							<div class="check-vazado"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check-vazado.svg" alt="" /></div>
							<h2 class="default__title no-after smaller text-start">comercializadora</h2>
						</div>
						<p class="default__smaller">
							Negocie o custo de energia para obter previsão de orçamento com apoio personalizado. Uma estratégia energética otimizada para suprir as necessidades
							globais de nossos clientes, reduzindo não somente o consumo, mas também o custo da energia. Temos soluções otimizadas para o seu negócio.
						</p>
						<div class="resources__side">
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Telhado solar</p>
								</div>
							</div>
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Fazenda solar</p>
								</div>
							</div>
							<div class="resources__card">
								<div class="resources__card--top d-flex">
									<p class="resources__card--title">Carport solar</p>
								</div>
							</div>
							<div class="button--container">
								<a href="#" class="button button--default">Lorem ipsum</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="pr-operating">
				<div class="pr-operating__container">
					<div class="pr-operating__content">
						<h2 class="default__title no-after smaller">Benefícios da geração de energia renovável</h2>
						<h3 class="default__desc">
							Produzir uma energia verde, econômica e local é reduzir suas despesas energéticas, ter previsão de custos e evitar a inflação da energia, além de
							expressar seu compromisso com o meio ambiente. Nossos especialistas cuidam de tudo para que você cuide da sua empresa:
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
									<p class="card-check__text">Uso racional das fontes de energia</p>
								</div>
							</div>
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Uso racional das fontes de energia</p>
								</div>
							</div>
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Uso racional das fontes de energia</p>
								</div>
							</div>
							<div class="pr-operating__slide">
								<div class="card-check">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
									<p class="card-check__text">Uso racional das fontes de energia</p>
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
				</div>
			</section>
			<?php get_template_part('components/newsletter'); ?>
		</main>
	</div>
</div>

<?php
get_footer();
