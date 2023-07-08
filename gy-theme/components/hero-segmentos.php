<?php if (have_rows('informacoes_hero')) : while (have_rows('informacoes_hero')) : the_row(); ?>
		<section class="hero no-after">
			<div class="hero__container">
				<div class="hero__content col-6">
					<div class="hero__top">
						<div class="hero__icon">
							<img src="<?php the_sub_field('icone'); ?>" alt="ícone <?php the_sub_field('titulo'); ?>">
						</div>
						<h1 class="hero__title"><?php the_sub_field('titulo'); ?></h1>
					</div>
					<?php if (get_sub_field('subtitulo')) { ?><h2 class="default__title no-after smaller"><?php the_sub_field('subtitulo'); ?></h2><?php } ?>
					<div class="button--container">
						<a href="<?php the_sub_field('link_cta'); ?>" class="button button--default"><?php the_sub_field('texto_cta'); ?></a>
					</div>
				</div>
				<div class="hero__img">
					<img src="<?php the_sub_field('imagem'); ?>" alt="banner <?php the_sub_field('titulo'); ?>" />
				</div>
			</div>
		</section>
<?php endwhile;
endif; ?>