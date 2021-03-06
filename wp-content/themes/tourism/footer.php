<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tourism
 */

?>



<footer class="footer">
	<picture>
		<source srcset="images/footer-img.webp" type="image/webp"><img class="footer-bg-img" src="images/footer-img.jpg" alt="#">
	</picture>
	<div class="container">
		<div class="footer-flex-wrapper">
			<div class="footer__wrapper">
				<?php
				wp_nav_menu([
					'theme_location' => 'menu__footer',
					'menu' => '',
					'container' => 'ul',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'menu__footer-list',
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
			<div class="footer__wrapper">
				<ul class="footer__contact">
					<li class="footer__contact-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="14" viewBox="0 0 8 14">
							<image id="Icon" width="8" height="14" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAOCAYAAAASVl2WAAAA3ElEQVQYlXWQPUqDURBFj3+1gtiYIiBCduEa3IGQ3soF6AoUwU6CRVoXoY2dlSAE0igaFC0MKZUcuR/v4QfqhYE3M3fuzH2oiS11oD6oj+qFup1eml31zt+4z2AIx6U1U0/VE3VaamchjEpyUNYl9tW5Ol4E1oEv4IofXAOfwFoI78ASsNMi5L0CvC4Dt0APOAK6wBzoAwvATfbt/eEgyA27IXTUp39sruaGZ+Cytb9iCEyrrZ760ZqOYpSJQjACBq3p86LcfHWNTfVFnagbtR6bFRPgEBrVt6YIfANxcPfmEFO0HAAAAABJRU5ErkJggg==" />
						</svg>
						Адреса:<br>
						<?php echo get_field('Addresses', 'option'); ?>
					</li>
					<li class="footer__contact-item">
						<a href="skype:<?php echo get_field('skype', 'option'); ?>?chat">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="13" viewBox="0 0 14 13">
								<image id="Icon" width="14" height="13" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAYAAACZ3F9/AAABNUlEQVQokYWSuyvAURTHPxi8JkZlQ5gMHoPHbiHFbFUUA5uyWMhgMpJdyb/glVLIwKCUxySvgVLKR5fzq8vAt27de+73vL7nlKgAXcAM0A58ALvAGd+4BPaBW3KoveqLf+NJXVKrU6J0UsZtoDePBSTbKVAKdACd8bcDDAJPRLQCz2q/WqW2qy2RYVR9C87aV3vqSea4FcTZzDallqvX8X5XWxNpJiOdqzVqpTqirqiH6tUvBcaS48Qv4406qTYUQqhD6l3GmU7N32fCHACrwDJwAVwD48AmsJ7xapPjHvAahmNgDpiPdz3QHPeKzHGkKGUxSkjzHA5bU5x0HwjFCzwWm1MFbAD9ETFVcRQzbQP6fmxNmmcmQJJ8Xn34Z4te1b4iY446oAdoBEqix26gLDRYAPY/Ae8ujMGoURimAAAAAElFTkSuQmCC" />
							</svg>
							Skype:<br>
							<?php echo get_field('skype', 'option'); ?></a>
					</li>
					<li class="footer__contact-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 15 15">
							<image id="Icon" width="15" height="15" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAA00lEQVQokZWTMa7BQRjEByGicACFxDU0Ko1O/oWImjuolO8OiMp7IQrOwB24AqUeP/kSyVt/Gz6TzCa7ycy3M5vNAJKUl/QnKSspkRdAAVjwj6YZemjLjGfsgJxXfOYVHY/YMh5TCa+Sbp7UJt6mzn4krbziqfUWnFW+adu4DFJfgcRbmLEKnAIDK7HhFRtbj6mhQXiDHjAEyjGxsR95tgkwCvYHoBsTGwfAJWKSxsbaTmMsqS3p9KHrwrtCasAcuEWmroGS5wPUgSmwB47AL1AEdAfsKgNifbhplQAAAABJRU5ErkJggg==" />
						</svg>
						<?php
						$phone_numbers = get_field('phone_number', 'option');
						if ($phone_numbers) :
							foreach ($phone_numbers as $tel) : ?>
								<a href="tel:+38<?php echo phone_clean($tel['tel']); ?>"><?php echo phone($tel['tel']); ?></a><br>
						<?php
							endforeach;
						endif;
						?>
					</li>
					<li class="footer__contact-item director">
						<?php if (get_field('director_photo', 'option')) : ?>
							<img class="director-photo" src="<?php the_field('director_photo', 'option'); ?>" />
						<?php endif; ?>
						<p class="director-name">
							<span>Директор: </span><br><?php echo get_field('director_name', 'option'); ?>
						</p>
					</li>
				</ul>
			</div>
			<div class="footer__wrapper">
				<p class="footer__social-text">
					<span>Ми в соціальних мережах</span>
					Знаходьте нас у соціальних мережах
					та підписуйтесь на цікаві новини
				</p>
				<ul class="footer__social">
					<li class="footer__social-item">
						<a href="<?php echo get_field('OK', 'option'); ?>" target="_blank" rel="noopener noreferrer">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39" height="39" viewBox="0 0 39 39">
								<image id="Icon_Ok" data-name="Icon Ok" width="39" height="39" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAEdklEQVRYhe1YfUyVVRx+7gtcvuEC8nH5EKxQUUAg5FMpplHa0hFFqQ0HlKgrabOpW9FMNgdrgYUuNFAZo1lROPCDiaMxCgTkGzFIRfODzwsbcCntvu9p71n3LIKK973B7h8+29k9v3POPb9nzzm/8zvnBSFESQj5lBAyRowDY3/yUSoIIUcApMP4kC2S0wBwNEJyoyI5YgREZgVnhJwYHpOTC1NDJ7h77z4uXqrG5e9raF3cwh7u7lj37FpsfGE9fBZ7yZ7boICob2jCoaxPcPPW7Vn7vRd7ImP/XsSsiVxYcp3XurErfR+Ghkf+dZyjgwrHcrPxdPCqhSH328OHSHvnPaqcHs+vj6VLqeA41NTW4XxlFfRTBwX641T+Z7C2tpLkR9ae677eO41Y6vZt2L0jGbY2NtR+LvYZeHt54tiJk9Ru6+hCR9c1RIavluRHcrTygkAd6bHU90m8/ko8IybCysoSiQmb4b/Sj7W1tHeC5/n5JUcEASMaDbM91Go4L3KaMc7J0RGe7mpmj4xowPPC/JIT95TK3p7ZA4NDmJicnDFOO6WlfXrY29uB4xTzS86E4xDgv4LZ13t68U1ZOf4eV9+ePYfOrm5mBwcGwNRU2haXFRAr/ZYhJCgALW2d1D5eWIT+gUGEhYaAUyjQ0taB78ov0P0pYvkyXwStCpDsR/Y513i1Fbvf3YfxiQnWplSa0d9Hj35nbZYWFsjLyUJMdIRkH7Jza1hoMDI/PAAnRwfWJpL6KzGVyh4fZeyXRQxylZua+hUmJiYwN1ei7/YdFJV8hR/qG6AZHaP9DioVIsNCkZy0BU89sYQS1ul0sLS0gEIhISikvhrOXbxEXkzYSlJ2ppP6xqtEp9Oxvv6BQfKgf4AIgkBtHc+T5tZ2suPtvWRj/BZSWlYhyZdk5WI3xOP+g35atzA3R0L8S1gTGQ4PtRvs7GypMuPjE/QYqa27gtKzFVRpEa4uzqitqpizL8nRujYqAmdKy2hdzLElZ0ppcXFeRA9jkdzwiAaDQ8Mz/hsVESbJl2TltNopqsYXp4r/80aihxg0KUlbkfjyZnoYzxs5PXp6b6Cyqpou3a2+O1RFcdOLEA9bccl9vL0QHRmODXHrsGL5Usk+DLpsCoKASa2WqpmZnYPL1TW0PSpiNTIzDlCVrK2taVaRA4PeEBzHwc7Wlir4Y30ja29qbkNZ+QXYGEAM/4dyBadLkHs0f9brUFrqduzZ9SbMzMxkzW+QcoVFJcjN+5wRc3N1gZenB+sXc25efiHLsQtCTlTsxMli5OTlM8fuajd8fPggcrMzscTHm43NLziNI0ePs2CRBKkZgud5Un6+kviFRBPfwHBaYuI2kborjWxMa3sniduUyPrFUvzl19OyyVwg/SZMCH6+2ceUULu54vDB96e9D8QHTdahD6YpeO2nHsk3YcnKifjl7j2SnLaHvPpGKqlvaPrHcc2tHWRbyk7yWtJbpKf3Bsu5c8Xjr0xyYfTkRo2Ax2wYFckVGx8vigLj/ZpOiPIPZPdkYTYkXbwAAAAASUVORK5CYII=" />
							</svg>
						</a>
					</li>
					<li class="footer__social-item">
						<a href="<?php echo get_field('google', 'option'); ?>" target="_blank" rel="noopener noreferrer">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39" height="39" viewBox="0 0 39 39">
								<image id="Icon_G_" data-name="Icon G+" width="39" height="39" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAEZElEQVRYhe2Ye2xTVRzHv21HL4O1a7shjI29hJkFmAwUGcWJGhQXQsA4w+KDiO/EKdmSTY2SECJxTmGTKIkxIRGSTbe4wZDh0CWLggwJg0FE9ujeW6db165dH+vjmHNYbyy3t61lif1j3+Qk5/HruZ9zzu/3O2cDIUROCKkkhEyQyNDEDI9cQgipAPAOIk9lFG4cgCYC4QwUjkQAiF9JI5CJ1xxcuJqDC1cRDRcVzIBmmlNnfsTpxiboevowNjYOm93OxmJjlUhamoCsVSuxK38HMu/LmFW4gHluaESPjz45jPMXWnkgMSUmLMGu/J14oeBZLFgQPStwosfa2z+A4nf34afmlqBg3oXUNZyB0WSaFTCIHathwoh9B8pw5Wq7T79SoUBSYgISliyG0+lET98A9KN/sXp6WgoOlx1gY4Hk8XjgcrmZu8ybFwWpVNzt/cJ9W1uPi5cu+/TlajfgtT27sS47CzKZjPVNms2ob2hE/elGfFhaFJLP/dnRhdr6BlitVrz5yktISU4SN77zkTSiHyU5jz5FVmQ9xJfC4vfIpNks+p4yWywhv7Uam34mmWu1bN7W368EtBXs6a+/tWJs3MC3l6enobT4bShiYkQXGLNwYdAd80qtVkGpuD1XnEYd0FZwrHce587teSwS/63hET3ONbfA7Xb79RnqVxzHYdvWLSzddHbrMDg0DE7Ooa39Oqannczu/MVLGBoewbTTiVilAg+uyw4Mp+vt5+vzOQ4Zy+8VfLxL14uyQ0eYU0skEsE47ZfJpFiTtYrBVdfUMd+UyqQMzD4T/YeOHEWULIotJj4+Dk2nvgsMZzFb+Hp0dLRoznK5XH77vaK7SguV0+mC1WZjCyEeD7yp1WF3wCGZvl13OARzCOAokFd2h4MVwc54PH6B2MdnPsxxcnByOas/X/AMNudqET2fw+W2azj2TRUsU1MoKSpEemoKS0UKpSI4HA3tm7c6WN1ms6G/fxDYKLR5efdzvM/RYrFMoeb7k3DPwKlVKn7XqWt43YMOn6iqZXXthvXIWCF0G1G4B9auwdlzzXz75A9nsS3vSeawXqWmJKO0qNDndy2/XEB1bR3fpknZX4TT3EgLldE0KQoGf9fXI5s2+kx6tf0GKr/8ijmtmIxGE8orvvAZpZGn9HNUi+9ZhCce34zcTTnQaFQB4QQXP21+/NnnOHa8iu+TSaXYsT2PZfTkZYk+E3Tpeljk0p3zSqNW4WhlObLvXy34IA2kKasNHo+bXYfe2yYkOKoR/ShefasIHZ3dPv2L4uOwemUmkhKXMn8bGBzCzVud+Hts3Mfu9T0vYm/hG2xRdyPRJ1Pbteso+WA/+mhA/Adpc9bj04P7g2b/UBTwPdd+4w8cLK8QvE78ie7Sw9ocvF+yF6nJy+4aDMHgqEyTZpyormE+1a3rhdli8RmnKSMtNRlbtzyGgvynWX6bLc39xR+u5uDC1RxcuIp4OEMIdv+HDBTueITCfR25/00nRP4PBllgn5tcTCwAAAAASUVORK5CYII=" />
							</svg>
						</a>
					</li>
					<li class="footer__social-item">
						<a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank" rel="noopener noreferrer">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39" height="39" viewBox="0 0 39 39">
								<image id="Icon_F" data-name="Icon F" width="39" height="39" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAACNklEQVRYhe2YzWsTQRiHf5smE1JaI/moaGyx4qXYQulJEcGjIAhePBRUFBHBg39GKRVpBenBQguhFYpWRP8FrQQPgijiqVr8aMUkGyxkN9kZmaEN2VjUfWcPQ9nnOLO8++y8M+/MDoQQTAgxI4SoCDOobPswSwgxDeA2zGNSyv0EkDFQrizlhAEiuxIz0KlFJEclHlYgj3O8fFXC4yfP8ObtO9i1GixYSCYZstkMnj9aDBwzNLni0jKmpu+j0Wj42n9tbaFq10gxQ0nri9US7t6b/UNsh3i8ixRXW45zjuWVp6g7zl+eoVUr7bR+39jE2qd1X1t6Xy+uXhrH2OiIEot10cZAW65cqap51c7pUydx8/oVxGJ6iQklrdzzfG19+Zy2GMKQsyzA6hAJa0fUlkulUrCkYRsskdA3o865+eJDNddkgf3y9RuqVdvXv1p6jdkHC6g7dXCPI5/P4fL4xcDvIZ1KTpw5q+T+l+HjQ1hZmg8sR0qrTGUQjh0dpLyGJud1rM5/caAvT5IjzblcNqNWpCwXjuPAtmtq49+huzuF/em0+gj53JGBfpIcac6tfV6H67pqVb7/8BETd2awsfmj1X/h/DncunGttSAKhYPo7ekJLEcaufaRcN0GGGO+fjmyA/0FSmgf2nVObvi8LaWSZrOpLYbomK5BJEclkqOyt+XkBtO514ZV57T/IZKM4XDhkJJMbB8ys5lwLq2iWyYqxsuVDfDYjbKUK5rnpZgz9zZdCPYbw2L2bZxZT0wAAAAASUVORK5CYII=" />
							</svg>
						</a>
					</li>
					<li class="footer__social-item">
						<a href="<?php echo get_field('VK', 'option'); ?>" target="_blank" rel="noopener noreferrer">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39" height="39" viewBox="0 0 39 39">
								<image id="Icon_VK" data-name="Icon VK" width="39" height="39" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAD20lEQVRYhe2Ya0wUVxTH//uarWgBWdiqoKhVY1CkWG0NibEpSiVqTGrUSJU2GjCicYumAVrZElFEK0Z89IsaNYqSQEtTDDHG1tcXDcG3xviK7rJaHrsbIOxLdq+5o6wM9+6jGxP3w/4/Tc6ce+Y358w952ZACBEIIdWEECsJD1nf8ggyQsheADqEn3ZSODOAuDCEs1A4EgYgXMnDkMmrCFyoisCFqghcqIrAhSrl4HXGVhM6zRa8mRsEbrcbarUaE8aPQ1TUEK/fzdt3se/3QzCaTLDbHfB4PFAoFIiJjsaiBd9gTW4OlEppeLvDAYOhFX1uNz1woK+vDx4PgVwuQ7wmDkmJoyT+DJzup19w9/4D5l3XrvkehRvWQi5/k2wKbbPb8dzQKvFra+9AbV0DZmfMQsrkSV47hTlxqg67qw9CJpN5bf2aNPFTnKmvkcRiypqelsotQm19AwzGdyCfp6dhZ7keyWOSGF+aRZfLJbF1dJrFGP1QA8Eo7IhPtEwcBi43ZzmTXqqurm40NDZJbFptPBJHjWR8VSolVCqVxHb+wmW0ml6wbw1g4oTxKMhbHRiOZuK75Uu4QWpq/5CUURAE5ruiUiiUUA2wmy1WHDp6ghuTrv+xIB/TP2Mrxt2tSxYv5Jaru6cHx06e5j5EElQug1zxLvSR4zUwvXjJ9V21Yinmfj2HH4dnjI2NwercHO6CxqZzuHPvvnjtdDjhcr1ig8rkULzdOM0tN3C67k9urIxZM6EryOfe8wlHlT0vE9OmpjB2mr1dew6gq7tHbDkWi5Xxsdls6LXZxXJW/LYXvb02xkebEI/Sos2S9jRYfk/C5/+9hMLiUjidLubenNkZSNBo8HfTWSZ7dPdlZX6Fjs5OXL95h1k7dGgUtulLsGD+PJ9gCATncDqxtWI36v9q9Bvk/4qC76kshyCo/K70O74+UquxLu8HjE0e817hnhmMYlYDKeBsHZ2UCF1BHj4eNuy9wT189AQl+m34r63dr19Qgz87KxM5y771jp1g1T/qeLra3ILColKfLSZoOPoQ3fr8gB/wQNE2Ua4vlszXwWq5cQubivVo7+CXWFFWVlYWLCAd5marFY8ePxXnpy+p1QKKNm3EwuwsfDlzOq41X4fFyrYcKlra5wYjUqekIDYmWvrMoFMBiD1p+68/o2TzRowbm+zTL274cGgTNOI19ass38Kdwf365+IVVFZVM/aQDpsrVyzF/qoKcSenpU4R+9ZAjRyhRbxG47XQrFTt2IovZqT7jNnGKW3kd0SoisCFqghcqKJwljBls1A4/uH+w+tw+P5NJ0R4DQmVeNRw6MEbAAAAAElFTkSuQmCC" />
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="copyright">© <?php echo date('Y'); ?> OTITOUR, ТУРОПЕРАТОР</div>
	</div>
</footer>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>