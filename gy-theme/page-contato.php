<?php

// Template Name: Contato

get_header();
?>

<main class="page--contato">
	<?php get_template_part('components/hero'); ?>
	<div id="contato">
		<?php get_template_part('components/newsletter'); ?>
	</div>
	<section class="talk-gy">
		<div class="talk-gy__container">
			<h2 class="default__title no-after">Assessoria de imprensa</h2>
			<div class="box">
				<p class="default__smaller">
					_a4e Holofote <br>
					Marilia Pontes <br>
					mariliapontes@a4eholofote.com.br
				</p>
			</div>
			<div class="button--container center">
				<a href="#contato" class="button button--default">fale com a gy</a>
			</div>
		</div>
	</section>
	<section class="vagas" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/b7dcd6c95a5c32de695f17beb130b513.jpg')">
		<div class="vagas__container">
			<div class="vagas__content">
				<h2 class="default__title no-after smaller">Faça parte do nosso time</h2>
				<p class="default__smaller">Confira nossas vagas abertas</p>
				<div class="button--container center">
					<a href="#" target="_blank" class="button button--default">CONHEÇA TODAS NOSSAS VAGAS</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
