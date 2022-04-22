<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tourism
 */

?>
<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tourism
 */

?>
<!DOCTYPE html>
<html lang="ua">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tourism</title>

	<!-- <link rel="stylesheet" href="css/style.min.css"> -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

	<?php wp_head(); ?>

</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-wrapper">
				<div class="logo">
					<picture>
						<source srcset="images/logo-img.svg" type="image/webp"><img class="logo__img" src="images/logo-img.svg" alt="logo">
					</picture>
				</div>
				<div class="menus">
					<nav class="menu__top">
						<?php
						wp_nav_menu([
							'theme_location' => 'menu__top',
							'menu' => '',
							'container' => 'ul',
							'container_class' => '',
							'container_id' => '',
							'menu_class' => 'menu__top-list',
							'menu_id' => '',
							'echo' => true,
							'fallback_cb' => 'wp_page_menu',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth' => 0,
							'walker' => '',
						]);
						?>
						<ul class="menu__top-contact">
							<li class="menu__contact-item">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="14" viewBox="0 0 8 14">
									<image id="Icon" width="8" height="14" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAOCAYAAAASVl2WAAAA3ElEQVQYlXWQPUqDURBFj3+1gtiYIiBCduEa3IGQ3soF6AoUwU6CRVoXoY2dlSAE0igaFC0MKZUcuR/v4QfqhYE3M3fuzH2oiS11oD6oj+qFup1eml31zt+4z2AIx6U1U0/VE3VaamchjEpyUNYl9tW5Ol4E1oEv4IofXAOfwFoI78ASsNMi5L0CvC4Dt0APOAK6wBzoAwvATfbt/eEgyA27IXTUp39sruaGZ+Cytb9iCEyrrZ760ZqOYpSJQjACBq3p86LcfHWNTfVFnagbtR6bFRPgEBrVt6YIfANxcPfmEFO0HAAAAABJRU5ErkJggg==" />
								</svg>
								Адреса:<br>
								м. Львів, вул. Кот лярська, 2
							</li>
							<li class="menu__contact-item">
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="13" viewBox="0 0 14 13">
										<image id="Icon" width="14" height="13" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAYAAACZ3F9/AAABNUlEQVQokYWSuyvAURTHPxi8JkZlQ5gMHoPHbiHFbFUUA5uyWMhgMpJdyb/glVLIwKCUxySvgVLKR5fzq8vAt27de+73vL7nlKgAXcAM0A58ALvAGd+4BPaBW3KoveqLf+NJXVKrU6J0UsZtoDePBSTbKVAKdACd8bcDDAJPRLQCz2q/WqW2qy2RYVR9C87aV3vqSea4FcTZzDallqvX8X5XWxNpJiOdqzVqpTqirqiH6tUvBcaS48Qv4406qTYUQqhD6l3GmU7N32fCHACrwDJwAVwD48AmsJ7xapPjHvAahmNgDpiPdz3QHPeKzHGkKGUxSkjzHA5bU5x0HwjFCzwWm1MFbAD9ETFVcRQzbQP6fmxNmmcmQJJ8Xn34Z4te1b4iY446oAdoBEqix26gLDRYAPY/Ae8ujMGoURimAAAAAElFTkSuQmCC" />
									</svg>
									Skype:<br>
									flora2115</a>
							</li>
							<li class="menu__contact-item">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 15 15">
									<image id="Icon" width="15" height="15" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAA00lEQVQokZWTMa7BQRjEByGicACFxDU0Ko1O/oWImjuolO8OiMp7IQrOwB24AqUeP/kSyVt/Gz6TzCa7ycy3M5vNAJKUl/QnKSspkRdAAVjwj6YZemjLjGfsgJxXfOYVHY/YMh5TCa+Sbp7UJt6mzn4krbziqfUWnFW+adu4DFJfgcRbmLEKnAIDK7HhFRtbj6mhQXiDHjAEyjGxsR95tgkwCvYHoBsTGwfAJWKSxsbaTmMsqS3p9KHrwrtCasAcuEWmroGS5wPUgSmwB47AL1AEdAfsKgNifbhplQAAAABJRU5ErkJggg==" />
								</svg>
								<a href="tel:+0322971645">(032) 297 16-45</a><br>
								<a href="tel:+0677565876">(067-756-58-76</a>
							</li>
						</ul>
					</nav>
					<div class="menu__bottom">
						<?php
						wp_nav_menu([
							'theme_location' => 'menu__bottom',
							'menu' => '',
							'container' => 'ul',
							'container_class' => '',
							'container_id' => '',
							'menu_class' => 'menu__bottom-list',
							'menu_id' => '',
							'echo' => true,
							'fallback_cb' => 'wp_page_menu',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth' => 0,
							'walker' => '',
						]);
						?>
					</div>
				</div>
			</div>
		</div>
	</header>