<?php

// Template Name: RI

get_header();
?>

<div class="page--ri">
	<main>
		<?php get_template_part('components/hero'); ?>
		<section class="relatorios">
			<div class="relatorios__container">
				<div class="relatorios__items">
					<div class="relatorios__item ativo">2021</div>
					<div class="relatorios__item">2022</div>
					<div class="relatorios__item">2023</div>
				</div>
				<h2 class="default__title no-after">2021</h2>
				<div class="relatorios__resultado">
					<div class="cards__category">ano</div>
					<div class="cards__info">
						<h3 class="cards__title">Relatório Anual</h3>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>

<?php
get_footer();
