<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="dist/css/style.css">
	<script src="dist/js/common.js"></script>
</head>
<body>
	<header>
		<div class="header__logo">
			<img src="dist/img/logo.svg" alt="">
		</div>
		<div class="pull-right">
			<img src="dist/img/icon-search.svg" alt="">
			<img src="dist/img/icon-language.svg" alt="">
			<img class="toggle" data-refers="header__menu" src="dist/img/icon-bars.svg" alt="">
		</div>
		<div class="header__menu display-none">
			<div class="btn"><img src="dist/img/icon-user.svg" alt="">Sign Up or Log in</div>
			<ul>
				<li><a>Plants and flowers</a></li>
				<li><a>Plant care</a></li>
				<li><a>News</a></li>
			</ul>
		</div>
	</header>

	<section class="recommendations">
		<h2>Recommended for you</h2>
		<div class="slider">
			<div class="slider__wrapper">
				<div class="slider__item">
					<div >
						<img src="dist/img/icon-slider-obi.svg" alt="">
					</div>
					<div>ОБИ</div>
				</div>
				<div class="slider__item">
					<div >
						<img src="dist/img/icon-slider-lerua.svg" alt="">
					</div>
					<div>Леруа<br>Мерлен</div>
				</div>
				<div class="slider__item">
					<div >
						<img src="dist/img/icon-slider-clumba.svg" alt="">
					</div>
					<div>Клумба</div>
				</div>
				<div class="slider__item">
					<div >
						<img src="dist/img/icon-slider-bar.svg" alt="">
					</div>
					<div>Букет Бар</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="description">
				<div>Rubber-bearing ficus <br>(elastic)</div>
				<p>Ficus elastica (Ficus elastica), or rubber-bearing ficus...</p>
			</div>
			<img src="dist/img/flower.svg" alt="">
		</div>
	</section>

	<section class="plantsAndFlowers">
		<h2>Plants and flowers</h2>
		<div class="seeAll">See all</div>
		<div class="list">
			<div class="item">
				<div class="item__img"></div>
				<div class="item__rating"><img src="dist/img/icon-star.svg" alt="">8.0</div>
				<div>
					<div class="title">Orchid</div>
					<div class="btn">Review</div>
				</div>
			</div>
			<div class="item">
				<div class="item__img"></div>
				<div class="item__rating"><img src="dist/img/icon-star.svg" alt="">9.0</div>
				<div>
					<div class="title">Pions</div>
					<div class="btn">Review</div>
				</div>
			</div>
			<div class="item">
				<div class="item__img"></div>
				<div class="item__rating"><img src="dist/img/icon-star.svg" alt="">5.6</div>
				<div>
					<div class="title">Aloe</div>
					<div class="btn">Review</div>
				</div>
			</div>
			<div class="item">
				<div class="item__img"></div>
				<div class="item__rating"><img src="dist/img/icon-star.svg" alt="">7.5</div>
				<div>
					<div class="title">Chrysanthemum</div>
					<div class="btn">Review</div>
				</div>
			</div>
		</div>
	</section>

	<section class="printCare">
		<h2>Plant care</h2>
		<div class="seeAll">See all</div>
		<div class="slider">
			<div class="slider__wrapper">
				<div class="slider__item br8">
					<img src="dist/img/print-care-1.png" alt="">
					<div class="title">Pots for plants</div>
					<div class="caption">Flower pot Ingreen ø13 h10. 4 cm v0. 7 L plastic marble</div>
					<div class="btn br8">Go over</div>
				</div>
				<div class="slider__item br8">
					<img src="dist/img/print-care-2.png" alt="">
					<div class="title">Soil source</div>
					<div class="caption">Geolia soil "For orchids" 2.5 L</div>
					<div class="btn br8">Go over</div>
				</div>
				<div class="slider__item br8">
					<img src="dist/img/print-care-3.png" alt="">
					<div class="title">Watering</div>
					<div class="caption">Stretchable hose with Geolia Compact gun</div>
					<div class="btn br8">Go over</div>
				</div>
			</div>
		</div>
	</section>

	<section class="news">
		<h2>News</h2>
		<div class="seeAll">See all</div>
		<div class="news__item">
			<img src="dist/img/new-1.png" alt="" class="br8">
			<h3>Indoor flowers and potted plants</h3>
			<div class="caption">
				<span>16.06.21</span>
				<img src="dist/img/icon-eye.svg" alt="">
				<span>16</span>
			</div>

		</div>
	</section>

	<footer>
		<img src="dist/img/18-years-old-plus.svg" alt="">
		<p>Our website is intended for informational purposes only and is not an advertisement. © 2018 - 2021</p>
	</footer>
</body>
</html>