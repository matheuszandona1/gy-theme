<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package greenyellow-blank
 */

get_header();
?>

<?php
while (have_posts()) :
	the_post(); ?>
	<main class="blog">
		<section class="topo__post">
			<div class="topo__post--container text-center">
				<div class="topo__post--category"><?php the_category(''); ?></div>
				<h1><?php the_title(); ?></h1>
				<div class="topo__post--date">GreenYellow • <?php echo get_the_date(); ?></div>
				<div class="topo__post--img">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="imagem <?php the_title(); ?>" width="100%">
				</div>
			</div>
		</section>
		<section class="post__container">
			<div class="col-8 post__container--content"><?php the_content(); ?></div>
			<div class="col-4"><?php get_sidebar(); ?></div>
		</section>
		<section class="blog__container--relacionados">
			<div class="titulo col-12">
				<h2>Posts relacionados</h2>
			</div>
			<?php
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				'orderby' => 'date',
				'order' => 'DESC',
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
				echo '<p>Nenhum case antigo, veja nossos últimos cases acima!</p>';
			}
			?>
		</section>
	</main>

<?php endwhile; // End of the loop.
?>

<?php
get_footer();
