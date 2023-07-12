<?php if (have_rows('informacoes_hero')) : while (have_rows('informacoes_hero')) : the_row(); ?>
		<section class="hero no-after">
			<div class="hero__container">
				<div class="hero__content col-7">
					<h1 class="hero__title"><?php the_sub_field('titulo'); ?></h1>
					<?php if (get_sub_field('subtitulo')) { ?><h2 class="hero__sub-title"><?php the_sub_field('subtitulo'); ?></h2><?php } ?>
					<?php if (get_sub_field('texto')) { ?><p class="hero__desc"><?php the_sub_field('texto'); ?></p><?php } ?>
					<?php if (get_sub_field('texto_cta')) { ?>
						<div class="button--container">
							<a href="<?php the_sub_field('link_cta'); ?>" class="button button--default"><?php the_sub_field('texto_cta'); ?></a>
						</div><?php } ?>
				</div>
				<div class="hero__img">
					<img src="<?php the_sub_field('imagem'); ?>" alt="banner <?php the_sub_field('titulo'); ?>" />
				</div>
			</div>
		</section>
<?php endwhile;
endif; ?>