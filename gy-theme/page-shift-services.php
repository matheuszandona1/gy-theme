<?php

// Template Name: Shifty Services

get_header();
?>

<div class="page--shift services">
	<main>
		<?php get_template_part('components/hero'); ?>
		<section class="resources">
			<h2 class="default__title smaller no-after">Conheça os serviços em energia que a GreenYellow oferece</h2>
			<div class="relatorios">
				<div class="relatorios__container">
					<nav>
						<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
							<button class="nav-link active" id="nav-psb-tab" data-bs-toggle="tab" data-bs-target="#nav-psb" type="button" role="tab" aria-controls="nav-psb" aria-selected="false">Comercializadora</button>
							<button class="nav-link" id="nav-psb1-tab" data-bs-toggle="tab" data-bs-target="#nav-psb1" type="button" role="tab" aria-controls="nav-psb1" aria-selected="false">EasyEnergy</button>
							<button class="nav-link" id="nav-psb2-tab" data-bs-toggle="tab" data-bs-target="#nav-psb2" type="button" role="tab" aria-controls="nav-psb2" aria-selected="false">Armazenamento de Energia</button>
							<button class="nav-link" id="nav-psb3-tab" data-bs-toggle="tab" data-bs-target="#nav-psb3" type="button" role="tab" aria-controls="nav-psb3" aria-selected="false">I-RECs e Créditos de Carbono</button>
						</div>
					</nav>
				</div>
			</div>
			<div class="tab-content" id="nav-tabContent">
				<div class="resources__tab tab-pane fade show active" id="nav-psb" role="tabpanel" aria-labelledby="nav-psb-tab" tabindex="0">
					<div class="resources__container ">
						<div class="resources__img col-6">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2023/07/49be169c67dcff74542a5c2ab10b75b7-1.jpg" alt="" />
						</div>
						<div class="resources__content col-6">
							<div class="resources__top">
								<div class="check-vazado"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check-vazado.svg" alt="" /></div>
								<h2 class="default__title no-after smaller text-start">Comercializadora</h2>
							</div>
							<p class="default__smaller">
								Negocie o custo de energia para obter previsão de orçamento com apoio personalizado.
							</p>
							<p class="default__smaller">
								Uma estratégia energética otimizada para suprir as necessidades
								globais de nossos clientes, reduzindo não somente o consumo, mas também o custo da energia. Temos soluções otimizadas para o seu negócio.
							</p>
							<div class="resources__side">
								<div class="resources__card">
									<div class="resources__card--top d-flex">
										<p class="resources__card--title">Gestão de energia</p>
									</div>
									<p class="resources__card--desc">
										Gerenciamento de contratos, relatórios personalizados e informações de mercado.
									</p>
								</div>
								<div class="resources__card">
									<div class="resources__card--top d-flex">
										<p class="resources__card--title">Migração</p>
									</div>
									<p class="resources__card--desc">
										Estudo de viabilidade e apoio.
									</p>
								</div>
								<div class="resources__card">
									<div class="resources__card--top d-flex">
										<p class="resources__card--title">Mercado Livre</p>
									</div>
									<p class="resources__card--desc">
										Fazemos a gestão de ativos e garantimos a geração e performance da usina.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="resources__tab tab-pane fade " id="nav-psb1" role="tabpanel" aria-labelledby="nav-psb1-tab" tabindex="0">
					<div class="resources__container ">
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
									<p class="resources__card--desc">
										Instalação no telhado ou no estacionamento, diminuindo a distância entre a geração e o consumo, aproveitando áreas inutilizadas e aumentando a
										independência do fornecimento da distribuidora local.
									</p>
								</div>
								<div class="resources__card">
									<div class="resources__card--top d-flex">
										<p class="resources__card--title">Fazenda solar</p>
									</div>
									<p class="resources__card--desc">
										Usina instalada no chão, de até 5 MWp, gera energia para uma ou mais unidades dentro da mesma área de concessão. Permite que empreendimentos
										cercados por altas construções e sem área suficiente de telhado possam suprir seu consumo a partir da energia solar.
									</p>
								</div>
								<div class="resources__card">
									<div class="resources__card--top d-flex">
										<p class="resources__card--title">Carport solar</p>
									</div>
									<p class="resources__card--desc">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse
										urna nibh, viverra non, semper suscipit, posuere a, pede.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="resources__tab tab-pane fade " id="nav-psb2" role="tabpanel" aria-labelledby="nav-psb2-tab" tabindex="0">
					<div class="resources__container ">
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
									<p class="resources__card--desc">
										Instalação no telhado ou no estacionamento, diminuindo a distância entre a geração e o consumo, aproveitando áreas inutilizadas e aumentando a
										independência do fornecimento da distribuidora local.
									</p>
								</div>
								<div class="resources__card">
									<div class="resources__card--top d-flex">
										<p class="resources__card--title">Fazenda solar</p>
									</div>
									<p class="resources__card--desc">
										Usina instalada no chão, de até 5 MWp, gera energia para uma ou mais unidades dentro da mesma área de concessão. Permite que empreendimentos
										cercados por altas construções e sem área suficiente de telhado possam suprir seu consumo a partir da energia solar.
									</p>
								</div>
								<div class="resources__card">
									<div class="resources__card--top d-flex">
										<p class="resources__card--title">Carport solar</p>
									</div>
									<p class="resources__card--desc">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse
										urna nibh, viverra non, semper suscipit, posuere a, pede.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pr-operating">
			<div class="pr-operating__container">
				<div class="pr-operating__content">
					<h2 class="default__title no-after smaller">Ao migrar para o Ambiente Livre de Contratação de Energia (ACL) você tem muitas vantagens:</h2>
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
								<p class="card-check__text">Melhor custo de energia com a concorrência de fornecedores e a possibilidade de negociar preço, prazo e indexação.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text">Previsibilidade no orçamento com a possibilidade de negociar com antecedência.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text">Poder de decisão para escolher os fornecedores e garantir maior performance e rentabilidade.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text">Otimização de contratos e operação por meio de gestão eficiente.</p>
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

<?php
get_footer();
