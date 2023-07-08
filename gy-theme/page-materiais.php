<?php

// Template Name: Materiais

get_header();
?>

<div class="page--materiais">
	<main class="materiais">
		<?php get_template_part('components/topo', 'conteudos'); ?>
		<div class="materiais__container">
			<div class="materiais__container--principais">
				<?php
				$args = array(
					'post_type' => 'material',
					'post_status' => 'publish',
					'posts_per_page' => 3,
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$wpb_all_query = new WP_Query($args); ?>
				<?php if ($wpb_all_query->have_posts()) {
					while ($wpb_all_query->have_posts()) {
						$wpb_all_query->the_post();
				?>
						<div class="cards cards__bigger col-4">
							<div class="cards__category">
								<?php
								// Get the custom taxonomy terms for the post
								$terms = get_the_terms(get_the_ID(), 'categoria_material');
								if (!empty($terms) && !is_wp_error($terms)) {
									foreach ($terms as $term) {
										echo $term->name;
									}
								} ?>
							</div>
							<div class="cards__info">
								<h3 class="cards__title"><?php the_title(); ?></h3>
							</div>
						</div>
				<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>
			<div class="materiais__container--destaque">
				<?php
				$args = array(
					'post_type' => 'material',
					'post_status' => 'publish',
					'posts_per_page' => 1,
					'orderby' => 'date',
					'order' => 'DESC',
					'offset' => 3,
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
				}
				?>
			</div>
			<div class="materiais__container--category">
				<?php
				// Get all terms of the custom taxonomy
				$terms = get_terms('categoria_material', array(
					'hide_empty' => false,
				));

				// Check if any term exists
				if (!empty($terms) && !is_wp_error($terms)) {
					foreach ($terms as $term) {
						// Arguments for WP_Query
						$args = array(
							'post_type' => 'material',
							'posts_per_page' => -1,  // Retrieve all posts
							'tax_query' => array(
								array(
									'taxonomy' => 'categoria_material',
									'field'    => 'slug',
									'terms'    => $term->slug,
								),
							),
						);

						$the_query = new WP_Query($args);

						// Check if any post exists
						if ($the_query->have_posts()) {
							echo '<h2 class="titulo col-12 text-center">' . $term->name . '</h2>';  // Display the term name

							while ($the_query->have_posts()) {
								$the_query->the_post(); ?>


								<div class="cards cards__bigger col-4" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
									<div class="cards__category"><?php echo $term->name ?></div>
									<div class="cards__info">
										<h3 class="cards__title">Código de Aquisição Responsável</h3>
									</div>
								</div>
				<?php }

							// Reset post data
							wp_reset_postdata();
						}
					}
				}
				?>
			</div>
		</div>
		<?php get_template_part('components/newsletter', 'post'); ?>
	</main>
</div>

<?php
get_footer();
