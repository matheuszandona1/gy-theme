<?php

// Template Name: Mídia

get_header();
?>

<div class="page--midia">
	<main class="midia">
		<?php get_template_part('components/topo', 'conteudos'); ?>
		<div class="midia__container">
			<div class="midia__container--destaque">
				<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 1,
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$wpb_all_query = new WP_Query($args); ?>
				<?php if ($wpb_all_query->have_posts()) {
					while ($wpb_all_query->have_posts()) {
						$wpb_all_query->the_post();
				?>
						<?php get_template_part('components/card', 'destaque'); ?>
				<?php
					}
					wp_reset_postdata();
				} else {
					echo '<p>Nenhuma mídia antigo, veja nossas últimas mídias acima!</p>';
				}
				?>

			</div>
			<div class="midia__container--postagens">
				<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 4,
					'orderby' => 'date',
					'order' => 'DESC',
					'offset' => 1,
				);
				$wpb_all_query = new WP_Query($args); ?>
				<?php if ($wpb_all_query->have_posts()) {
					while ($wpb_all_query->have_posts()) {
						$wpb_all_query->the_post();
				?>
						<?php get_template_part('components/card', 'conteudo'); ?>
				<?php
					}
					wp_reset_postdata();
				} else {
					echo '<p>Nenhuma mídia antigo, veja nossas últimas mídias acima!</p>';
				}
				?>
				<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 4,
					'orderby' => 'date',
					'order' => 'DESC',
					'offset' => 5,
				);
				$wpb_all_query = new WP_Query($args); ?>
				<?php if ($wpb_all_query->have_posts()) {
					while ($wpb_all_query->have_posts()) {
						$wpb_all_query->the_post();
				?>
						<?php get_template_part('components/card-blog', 'small'); ?>
				<?php
					}
					wp_reset_postdata();
				} else {
					echo '<p>Nenhuma mídia antigo, veja nossas últimas mídias acima!</p>';
				}
				?>
			</div>
		</div>
		<?php get_template_part('components/newsletter', 'post'); ?>
	</main>
</div>
<?php
get_footer();
