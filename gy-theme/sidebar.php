<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */
?>

<aside class="sidebar">
	<?php
	$args = array(
		'post_type' => 'post',
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
			<div class="card card--border">
				<h3 class="card-title">
					<?php the_title(); ?>
				</h3>
				<a href="<?php the_permalink(); ?>" class="card-link">Ler o artigo <span>→</span></a>
			</div>
	<?php
		}
		wp_reset_postdata();
	} else {
		echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
	}
	?>
	<?php get_template_part('components/newsletter', 'sidebar'); ?>
</aside><!-- #secondary -->