<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greenyellow-blank
 */

get_header();
?>

<main class="general-page">
	<?php get_template_part('components/hero'); ?>
	<?php if (have_rows('secoes')) { ?>
		<?php while (have_rows('secoes')) : the_row(); ?>
			<?php if (have_rows('conteudo_secao')) { ?>
				<?php while (have_rows('conteudo_secao')) : the_row(); ?>
					<section class="dynamic">
						<div class="dynamic__container">
							<div class="dynamic__img" style="background-image: url('<?php the_sub_field('imagem'); ?>');"></div>
							<div class="dynamic__content">
								<h3 class="default__title no-after smaller"><?php the_sub_field('titulo'); ?></h3>
								<p class="dynamic__desc">
									<?php the_sub_field('texto'); ?>
								</p>
							</div>
						</div>
					</section>
				<?php endwhile; ?>
	<?php  }
		endwhile;
	} ?>
</main>
<?php
get_footer();
