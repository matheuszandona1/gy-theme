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
	<include src="./html/components/hero.html"></include>
	<section class="dynamic">
		<div class="dynamic__container">
			<div class="dynamic__img"></div>
			<div class="dynamic__content">
				<h3 class="default__title no-after smaller">Lorem ipsum</h3>
				<p class="dynamic__desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci. Etiam at ex rutrum, vehicula quam vitae, consequat ex. Mauris dictum interdum augue vitae dictum. Suspendisse potenti. Nulla venenatis massa non porttitor eleifend.
				</p>
			</div>
		</div>
	</section>
	<section class="dynamic">
		<div class="dynamic__container">
			<div class="dynamic__content">
				<h3 class="default__title no-after smaller">Lorem ipsum</h3>
				<p class="dynamic__desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci. Etiam at ex rutrum, vehicula quam vitae, consequat ex. Mauris dictum interdum augue vitae dictum. Suspendisse potenti. Nulla venenatis massa non porttitor eleifend.
				</p>
			</div>
			<div class="dynamic__img"></div>
		</div>
	</section>
	<section class="dynamic">
		<div class="dynamic__container">
			<div class="dynamic__img"></div>
			<div class="dynamic__content">
				<h3 class="default__title no-after smaller">Lorem ipsum</h3>
				<p class="default__smaller">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ipsum consequat, gravida quam nec, ornare orci. Etiam at ex rutrum, vehicula quam vitae, consequat ex. Mauris dictum interdum augue vitae dictum. Suspendisse potenti. Nulla venenatis massa non porttitor eleifend.
				</p>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
