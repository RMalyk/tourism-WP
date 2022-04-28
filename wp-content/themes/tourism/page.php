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
	<?php
	if (is_front_page()) : ?>
		<section class="main-slider">
			<div class="swiper main_slider">
				<?php
				$sliders = get_field('main_slider');
				if ($sliders) : ?>
					<div class="swiper-wrapper">
						<?php foreach ($sliders as $slider) : ?>
							<div class="swiper-slide">
								<img class="main_slider-img" src="<?php echo  $slider['slider_img']; ?>" alt="slider-img">
								<div class="main_slider-description">
									<h1 class="page__title"><?php echo  $slider['slider_title']; ?></h1>
									<p class="page__text"><?php echo  $slider['slider_text']; ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<div class="swiper-pagination"></div>
			</div>
		</section>
	<?php endif; ?>

	<section class="top__tours">
		<div class="container">
			<h2 class="section__title">Гарячі Тури</h2>
			<p class="setion__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

			<?php
			$tours = get_posts(
				array(
					'post_type'   => 'tours',
				)
			);
			?>
			<ul class="tours__list">
				<?php
				foreach ($tours as $tour) : ?>
					<li class="tours__item">
						<div class="tours__item-header">
							<div class="tours__item-stars">
								<?php
								$rating = get_field('rating', $tour);
								for ($i = 0; $i < $rating; $i++) : ?>
									<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="white">
										<path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
									</svg>
								<?php endfor; ?>
							</div>
							<div class="tours__item-people"></div>
							<div class="tours__item-likes"></div>
						</div>
						<?php
						$thumbnail = get_the_post_thumbnail($tour->ID);
						if (empty($thumbnail)) :
							echo '<img src=" ' . wp_get_attachment_image_src(80)[0] . ' " alt="">';
						else :
							echo $thumbnail;
						endif;
						?>
						<div class="tours__item-title">
							<div class="tours__item-title-wrapper">
								<h3><?php echo $tour->post_title ?></h3>
								<p>
									<?php
									$country = the_field('country', $tour);
									?>
								</p>
							</div>
							<div class="tours__item-price">
								<p>від<span>
										<?php
										echo get_field('price', $tour);
										?>
									</span>$</p>
							</div>
						</div>
						<div class="tours__item-footer">
							<div class="tours__item-footer-wrapper">
								<p>Особи - двоє дорослих</p>
								<p>від 15.03.2018 - 15.04.2018</p>
							</div>
							<a class="tours__item-btn" href="<?php echo $tour->guid ?>">забронювати</a>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<button class="show_more">Показати більше пропозицій</button>
		</div>
	</section>
</main>

<?php
// get_sidebar();
get_footer();
