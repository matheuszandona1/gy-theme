<?php

// Template Name: Mídia

get_header();
?>

<div class="page--cases">
	<main class="cases">
		<?php get_template_part('components/topo', 'conteudos'); ?>
		<div class="cases__container">
			<div class="cases__container--destaque">
				<?php
				$args = array(
					'post_type' => 'case',
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
					echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
				}
				?>

			</div>
			<?php
			$args = array(
				'post_type' => 'case',
				'post_status' => 'publish',
				'posts_per_page' => -1,
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
				echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
			}
			?>
		</div>
	</main>
</div>
<?php
get_footer();
