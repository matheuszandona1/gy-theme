<?php

// Template Name: Cases

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
			<div class="category">
				<?php
				// Get all terms of the custom taxonomy
				$terms = get_terms('categoria_case', array(
					'hide_empty' => false,
				));

				// Check if any term exists
				if (!empty($terms) && !is_wp_error($terms)) {
					foreach ($terms as $term) {
						// Arguments for WP_Query
						$args = array(
							'post_type' => 'case',
							'posts_per_page' => -1,  // Retrieve all posts
							'tax_query' => array(
								array(
									'taxonomy' => 'categoria_case',
									'field'    => 'slug',
									'terms'    => $term->slug,
								),
							),
						);

						$the_query = new WP_Query($args);

						// Check if any post exists
						if ($the_query->have_posts()) {
							echo '<h2>' . $term->name . '</h2>';  // Display the term name

							while ($the_query->have_posts()) {
								$the_query->the_post();

								// Display the post here
								get_template_part('components/card', 'conteudo');
							}

							// Reset post data
							wp_reset_postdata();
						}
					}
				}
				?>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
