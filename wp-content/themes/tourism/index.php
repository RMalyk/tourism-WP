<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tourism
 */

get_header();
?>

<main class="main">
	<section class="main-slider">
		<div class="swiper main_slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<picture>
						<source srcset="images/slider/img-1.webp" type="image/webp"><img class="main_slider-img" src="images/slider/img-1.jpg" alt="slider-img">
					</picture>
					<div class="main_slider-description">
						<h1 class="page__title">Нові горизонти Вашого відпочинку</h1>
						<p class="page__text">Ми поставили перед собою завдання зробити якісний відпочинок доступним для всіх
							українських сімей і розробили нову концепцію щасливого і безтурботного відпочинку з дітьми</p>
					</div>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="images/slider/img-1.webp" type="image/webp"><img class="main_slider-img" src="images/slider/img-1.jpg" alt="slider-img">
					</picture>
					<div class="main_slider-description">
						<h1 class="page__title">Нові горизонти Вашого відпочинку-2</h1>
						<p class="page__text">Ми поставили перед собою завдання зробити якісний відпочинок доступним для всіх
							українських сімей і розробили нову концепцію щасливого і безтурботного відпочинку з дітьми</p>
					</div>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="images/slider/slider-3.webp" type="image/webp"><img class="main_slider-img" src="images/slider/slider-3.png" alt="slider-img">
					</picture>
					<div class="main_slider-description">
						<h1 class="page__title">Нові горизонти Вашого відпочинк-3</h1>
						<p class="page__text">Ми поставили перед собою завдання зробити якісний відпочинок доступним для всіх
							українських сімей і розробили нову концепцію щасливого і безтурботного відпочинку з дітьми</p>
					</div>
				</div>
				<div class="swiper-slide">Slide 9</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>
	<section class="top__tours">
		<div class="container">
			<h2 class="section__title">Гарячі Тури</h2>
			<p class="setion__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
			<ul class="tours__list">
				<li class="tours__item">
					<div class="tours__item-header">
						<div class="tours__item-stars"></div>
						<div class="tours__item-people"></div>
						<div class="tours__item-likes"></div>
					</div>
					<picture>
						<source srcset="images/tours/img-1.webp" type="image/webp"><img class="img tours__item-img" src="images/tours/img-1.jpg" alt="tour-1">
					</picture>
					<div class="tours__item-title">
						<div class="tours__item-title-wrapper">
							<h3>Hotel lampa&PATAYA</h3>
							<p>Іспанія</p>
						</div>
						<div class="tours__item-price">
							<p>від 500 <span>$</span></p>
						</div>
					</div>
					<div class="tours__item-footer">
						<div class="tours__item-footer-wrapper">
							<p>Особи - двоє дорослих</p>
							<p>від 15.03.2018 - 15.04.2018</p>
						</div>
						<button class="tours__item-btn">забронювати</button>
					</div>
				</li>
				<li class="tours__item">
					<div class="tours__item-header">
						<div class="tours__item-stars"></div>
						<div class="tours__item-people"></div>
						<div class="tours__item-likes"></div>
					</div>
					<picture>
						<source srcset="images/tours/img-1.webp" type="image/webp"><img class="img tours__item-img" src="images/tours/img-1.jpg" alt="tour-1">
					</picture>
					<div class="tours__item-title">
						<div class="tours__item-title-wrapper">
							<h3>Hotel lampa&PATAYA</h3>
							<p>Іспанія</p>
						</div>
						<div class="tours__item-price">
							<p>від 500 <span>$</span></p>
						</div>
					</div>
					<div class="tours__item-footer">
						<div class="tours__item-footer-wrapper">
							<p>Особи - двоє дорослих</p>
							<p>від 15.03.2018 - 15.04.2018</p>
						</div>
						<button class="tours__item-btn">забронювати</button>
					</div>
				</li>
				<li class="tours__item">
					<div class="tours__item-header">
						<div class="tours__item-stars"></div>
						<div class="tours__item-people"></div>
						<div class="tours__item-likes"></div>
					</div>
					<picture>
						<source srcset="images/tours/img-1.webp" type="image/webp"><img class="img tours__item-img" src="images/tours/img-1.jpg" alt="tour-1">
					</picture>
					<div class="tours__item-title">
						<div class="tours__item-title-wrapper">
							<h3>Hotel lampa&PATAYA</h3>
							<p>Іспанія</p>
						</div>
						<div class="tours__item-price">
							<p>від 500 <span>$</span></p>
						</div>
					</div>
					<div class="tours__item-footer">
						<div class="tours__item-footer-wrapper">
							<p>Особи - двоє дорослих</p>
							<p>від 15.03.2018 - 15.04.2018</p>
						</div>
						<button class="tours__item-btn">забронювати</button>
					</div>
				</li>
				<li class="tours__item">
					<div class="tours__item-header">
						<div class="tours__item-stars"></div>
						<div class="tours__item-people"></div>
						<div class="tours__item-likes"></div>
					</div>
					<picture>
						<source srcset="images/tours/img-1.webp" type="image/webp"><img class="img tours__item-img" src="images/tours/img-1.jpg" alt="tour-1">
					</picture>
					<div class="tours__item-title">
						<div class="tours__item-title-wrapper">
							<h3>Hotel lampa&PATAYA</h3>
							<p>Іспанія</p>
						</div>
						<div class="tours__item-price">
							<p>від 500 <span>$</span></p>
						</div>
					</div>
					<div class="tours__item-footer">
						<div class="tours__item-footer-wrapper">
							<p>Особи - двоє дорослих</p>
							<p>від 15.03.2018 - 15.04.2018</p>
						</div>
						<button class="tours__item-btn">забронювати</button>
					</div>
				</li>
			</ul>
			<button class="show_more">Показати більше пропозицій</button>
		</div>
	</section>
</main>

<?php
// get_sidebar();
get_footer();
