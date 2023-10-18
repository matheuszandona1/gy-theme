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
					<?php the_field('informacoes_assessoria'); ?>
				</p>
			</div>
			<div class="button--container center">
				<a href="#contato" class="button button--default">fale com a gy</a>
			</div>
		</div>
	</section>
	<?php if (have_rows('secao_vagas')) { ?>
		<?php while (have_rows('secao_vagas')) : the_row(); ?>
			<section class="vagas" style="background-image: url('<?php the_sub_field('background'); ?>')">
				<div class="vagas__container">
					<div class="vagas__content">
						<h2 class="default__title no-after smaller"><?php the_sub_field('titulo'); ?></h2>
						<p class="default__smaller"><?php the_sub_field('subtitulo'); ?></p>
						<div class="button--container center">
							<a href="<?php the_sub_field('link_cta'); ?>" target="_blank" class="button button--default"><?php the_sub_field('texto_cta'); ?></a>
						</div>
					</div>
				</div>
			</section>
			<?php endwhile; ?><?php  } ?>
</main>

<?php
get_footer();
