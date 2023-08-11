<?php

// Template Name: Shifty Production

get_header();
?>

<div class="page--shift production">
	<main>
		<?php get_template_part('components/hero'); ?>
		<section class="pr-operating">
			<div class="pr-operating__container">
				<div class="pr-operating__content">
					<h2 class="default__title no-after smaller">Benefícios da geração de energia renovável</h2>
					<h3 class="default__desc">
						Produzir uma energia verde, econômica e local é reduzir suas despesas energéticas, ter previsão de custos e evitar a inflação da energia, além de
						expressar seu compromisso com o meio ambiente. Nossos especialistas cuidam de tudo para que você cuide da sua empresa:
					</h3>
					<div class="button--container"><a href="#" class="button button--default">FALE COM UM CONSULTOR</a></div>
				</div>
				<div class="pr-operating__holder">
					<div class="pr-operating__slider">
						<div class="pr-operating__slide">
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text">Investimos nos projetos enquanto você investe no seu negócio.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text">Desenvolvemos o design do projeto, modelagem financeira e contratual, fundiário e licenciamento ambiental.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text">Fazemos a gestão de ativos e garantimos a geração e performance da usina.</p>
							</div>
						</div>
						<div class="pr-operating__slide">
							<div class="card-check">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check.svg" alt="" />
								<p class="card-check__text">Investimos nos projetos enquanto você investe no seu negócio.</p>
							</div>
						</div>
					</div>
					<div class="nav-slide-holder">
						<button class="prev-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-right.svg" alt="" /></button>
						<button class="next-arrow"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/seta-slider-left.svg" alt="" /></button>
					</div>
				</div>
			</div>
		</section>
		<section class="resources">
			<div class="resources__container">
				<div class="resources__img col-6">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2023/07/49be169c67dcff74542a5c2ab10b75b7-1.jpg" alt="" />
				</div>
				<div class="resources__content col-6">
					<div class="resources__top">
						<div class="check-vazado"><img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/check-vazado.svg" alt="" /></div>
						<h2 class="default__title no-after smaller text-start">Nossas soluções são personalizadas para as suas necessidades</h2>
					</div>
					<div class="resources__side">
						<div class="resources__card">
							<div class="resources__card--top d-flex">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/painel solar.svg" alt="" />
								<p class="resources__card--title">
									Telhado <br />
									solar
								</p>
							</div>
							<p class="resources__card--desc">
								Instalação no telhado ou no estacionamento, diminuindo a distância entre a geração e o consumo, aproveitando áreas inutilizadas e aumentando a
								independência do fornecimento da distribuidora local.
							</p>
						</div>
						<div class="resources__card">
							<div class="resources__card--top d-flex">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/estufa.svg" alt="" />
								<p class="resources__card--title">
									Fazenda <br />
									solar
								</p>
							</div>
							<p class="resources__card--desc">
								Usina instalada no chão, de até 5 MWp, gera energia para uma ou mais unidades dentro da mesma área de concessão. Permite que empreendimentos
								cercados por altas construções e sem área suficiente de telhado possam suprir seu consumo a partir da energia solar.
							</p>
						</div>
						<div class="resources__card">
							<div class="resources__card--top d-flex">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/carport.svg" alt="" />
								<p class="resources__card--title">
									Carport <br />
									solar
								</p>
							</div>
							<p class="resources__card--desc">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse
								urna nibh, viverra non, semper suscipit, posuere a, pede.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="type">
			<div class="type__container">
				<h2 class="default__title no-after">Conheça nossas três modalidades de contratação</h2>
				<div class="relatorios">
					<div class="relatorios__container">
						<div class="relatorios__items">
							<nav>
								<div class="nav nav-tabs justify-content-center" style="margin-bottom: 0px;" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-buss-tab" data-bs-toggle="tab" data-bs-target="#nav-buss" type="button" aria-controls="nav-buss" aria-selected="false">Geração Solar Distribuída</button>
									<button class="nav-link" id="nav-buss1-tab" data-bs-toggle="tab" data-bs-target="#nav-buss1" type="button" aria-controls="nav-buss1" aria-selected="false">Autoprodução no Mercado Livre de Energia</button>
									<button class="nav-link" id="nav-buss2-tab" data-bs-toggle="tab" data-bs-target="#nav-buss2" type="button" aria-controls="nav-buss2" aria-selected="false">Behind the meter</button>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="tab-content" id="nav-tabContent">
					<div class="type__tab tab-pane fade show active" id="nav-buss" role="tabpanel" aria-labelledby="nav-buss-tab" tabindex="0">
						<div class="type__project ">
							<div class="dynamic__img bn" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/49be169c67dcff74542a5c2ab10b75b7-1.jpg');"></div>
							<div class="type__content">
								<div class="type__project--title">
									<h3 class="default__title no-after smaller">Geração Solar Distribuída</h3>
								</div>
								<p class="type__project--desc">
									Em 2012, a ANEEL publicou a Resolução Normativa 482, estabelecendo as condições gerais da micro e minigeração distribuída no Brasil e implementando o Sistema de Compensação de Energia Elétrica. Assim, o consumidor passou a ter o direito de gerar energia solar, consumir e exportar para a rede elétrica em caso de excedente, gerando créditos que podem ser usados por 5 anos.
								</p>
								<p class="type__project--desc">
									1. Os painéis captam a radiação solar e convertem em eletricidade, que varia de acordo com a extensão do telhado.
									<br>
									2. O inversor solar converte a energia solar para a sua casa ou empresa.
									<br>
									3. A corrente alternada permite ligar aparelhos elétricos da sua empresa.
									<br>
									4. A energia gerada e não consumida ao longo do dia é redirecionada para a rede de concessionária e transformada em créditos para abatimento da conta.
								</p>
							</div>
						</div>
					</div>
					<div class="type__tab tab-pane fade" id="nav-buss1" role="tabpanel" aria-labelledby="nav-buss1-tab" tabindex="0">
						<div class="type__project">
							<div class="dynamic__img bn"></div>
							<div class="type__content">
								<div class="type__project--title">
									<h3 class="default__title no-after smaller">Contraadq3qdq3dto de Performance</h3>
								</div>
								<p class="type__project--desc">
									Em 2012, a ANEEL publicou a Resolução Normativa 482, estabelecendo as condições gerais da micro e minigeração distribuída no Brasil e
									implementando o Sistema de Compensação de Energia Elétrica. Assim, o consumidor passou a ter o direito de gerar energia solar, consumir e exportar
									para a rede elétrica em caso de excedente, gerando créditos que podem ser usados por 5 anos. Os painéis captam a radiação solar e convertem em
									eletricidade, que varia de acordo com a extensão do telhado. O inversor solar converte a energia solar para a sua casa ou empresa. A corrente
									alternada permite ligar aparelhos elétricos da sua empresa. A energia gerada e não consumida ao longo do dia é redirecionada para a rede de
									concessionária e transformada em créditos para abatimento da conta.
								</p>
							</div>
						</div>
					</div>
					<div class="type__tab tab-pane fade" id="nav-buss2" role="tabpanel" aria-labelledby="nav-buss2-tab" tabindex="0">
						<div class="type__project">
							<div class="dynamic__img bn"></div>
							<div class="type__content">
								<div class="type__project--title">
									<h3 class="default__title no-after smaller">Contrato de Perforlkanflajdfnmance</h3>
								</div>
								<p class="type__project--desc">
									Em 2012, a ANEEL publicou a Resolução Normativa 482, estabelecendo as condições gerais da micro e minigeração distribuída no Brasil e
									implementando o Sistema de Compensação de Energia Elétrica. Assim, o consumidor passou a ter o direito de gerar energia solar, consumir e exportar
									para a rede elétrica em caso de excedente, gerando créditos que podem ser usados por 5 anos. Os painéis captam a radiação solar e convertem em
									eletricidade, que varia de acordo com a extensão do telhado. O inversor solar converte a energia solar para a sua casa ou empresa. A corrente
									alternada permite ligar aparelhos elétricos da sua empresa. A energia gerada e não consumida ao longo do dia é redirecionada para a rede de
									concessionária e transformada em créditos para abatimento da conta.
								</p>
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
