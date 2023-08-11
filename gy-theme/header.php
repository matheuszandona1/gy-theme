<!doctype html>
<html <?php language_attributes(); ?>>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>-Title</title>

	<script type="module">
		document.documentElement.classList.remove("no-js")
		document.documentElement.classList.add("js")
	</script>
	<script src="http://localhost:35729/livereload.js?snipver=1"></script>


	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/css/styles.css" />

	<meta name="description" content="INGAGE-Description" />
	<meta property="og:title" content="INGAGE-Title" />
	<meta property="og:description" content="INGAGE-Description" />
	<!-- <meta property="og:image" content="./img/thumbnail.png"> -->
	<meta property="og:image:alt" content="Image description" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta property="og:url" content="#" />
	<link rel="canonical" href="#" />

	<!-- <link rel="icon" href="./img/favicon.ico">
	<link rel="icon" href="./img/favicon.svg" type="image/svg+xml"> -->
	<!-- <link rel="apple-touch-icon" href="./img/favicon.svg"> -->
	<?php
	wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="header__container">
			<a href="/" class="logo">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/logo.svg" alt="Logo Greenyellow" />
			</a>
			<?php
			$args = array(
				'menu' => 'principal',
				'theme_location' => 'menu-principal',
				'container' => false,
				'menu_class' => 'navbar',
				'add_li_class'  => 'nav-item'
			);
			wp_nav_menu($args);
			?>
		</div>
	</header>