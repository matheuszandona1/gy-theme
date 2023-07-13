<?php

// Template Name: Segmentos

get_header();
?>

<div class="page--segmentos general">
	<?php get_template_part('components/hero', 'segmentos'); ?>
	<main class="manipulating">
		<section class="cases">
			<div class="cases__container">
				<h2 class="default__title no-after">Comece sua transição energética agora!</h2>
				<h3 class="default__title no-after smaller">Conheça nossa atuação:</h3>
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
		<section class="cases-cta">
			<div class="cases-cta__container">
				<h2 class="default__title no-after smaller">Transições Energéticas de sucesso</h2>
				<div class="button--container center"><a href="<?php echo site_url(); ?>/cases-de-sucesso" class="button button--default">conheça os nossos cases</a></div>
			</div>
		</section>
		<?php get_template_part('components/newsletter', 'b'); ?>
	</main>
</div>
<?php
get_footer();
