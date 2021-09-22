<?php

/* @var $this yii\web\View */

//$this->title = 'My-Yii-Application';

$sys_phone = Yii::$app->params['sys_phone'];

?>

<div class="site-index">
	<div class="title_img">
		<div class="content">
			<h1 class="title__name">Охотничий клуб «Трофей» – элитная охота в Татарстане</h1>
			<h2 class="title__discr">Отдых, который вы заслужили</h2>
		</div>
	</div>

	<div class="content">
		<div class="info-block">
			<div class="info-block-title">
				<h2>ОБ ОХОТНИЧЬЕМ КЛУБЕ</h2>
				<span>Охотничий клуб «Трофей» был создан группой энтузиастов. Мы организуем и проводим охоту и рыбалку по Республике Татарстан.</span>
			</div>

			<div class="blg">
				<div class="blg__img"></div>
				<div class="blg__text">
					<ul>Миссия клуба:
						<li>Обеспечение бережного отношения к фауне, следовательно, процветания фауны и флоры Республики Татарстан</li>
						<li>Защита зверей и дикой природы от браконьеров и хозяйственной деятельности человека</li>
					</ul>
				</div>
			</div>

			<div class="choose-our-club">
				<p><span>Если вы решили стать охотником и рыболовом</span>, но не знаете с чего начать или имеете дефицит времени, обратитесь к нам.</p>
				<ul>
					<li><span>Мы поможем</span> вступить в общество охотников и рыболовов, подготовить документы для приобретения любого вида оружия.
					</li>
					<li><span>Проконсультируем</span> и подберем оружие и экипировку, исходя из Ваших индивидуальных особенностей и пожеланий.
					</li>
					<li><span>Организуем</span> коммерческую охоту и рыбалку, изготовление Ваших трофеев у опытных таксидермистов.
					</li>
				</ul>
			</div>

			<div class="info-menu">
				<div class="info-menu-block">
					<button class="info-menu__btn1 button my-btn">ОБРАТНАЯ СВЯЗЬ</button>
					<a class="info-menu__btn2 button" href="info">ДОКУМЕНТЫ</a>
					<a class="info-menu__btn1 button" target="_blank" href="https://ojm.tatarstan.ru/kalendar-ohotnika-tatarstan-2020-sroki-ohoti-na.htm">КАЛЕНДАРЬ ОХОТНИКА ТАТАРСТАН 2021</a>
				</div>
			</div>
		</div>

		<article>
			<div class="blog">
				<div class="blog__img"><figure><img src="/images/scolopax.jpg" alt=""></figure></div>
				<div class="blog_txt">
					<h3>Информация</h3><h4>Вниманию охотников!</h4>
					<p>С 4 сентября по 5 января открыт сезон охоты на боровую дичь.</p>
					<p class="blog_phone">По вопросу приобретения путёвок звоните <span><a href="tel: <?= $sys_phone ?>"><?= $sys_phone; ?></a></span>.</p>
				</div>
			</div>

			<div class="blog">
				<div class="blog__img"><figure><img src="/images/anas.jpg" alt=""></figure></div>
				<div class="blog_txt">
					<h3>Информация</h3><h4>Вниманию охотников!</h4>
					<p>С 4 сентября по 5 декабря открывается сезон охоты на водоплавающую, болотно-луговую, степную и полевую дичь.</p>
					<p class="blog_phone">По вопросу приобретения путёвок звоните <span><a href="tel: <?= $sys_phone ?>"><?= $sys_phone; ?></a></span>.</p>
				</div>
			</div>

			<div class="blog">
				<div class="blog__img"><figure><img src="/images/ducks.jpg" alt=""></figure></div>
				<div class="blog_txt">
					<h3>Информация</h3><h4>Вниманию охотников!</h4>
					<p>С 17 по 26 апреля открывается весенний сезон охоты на пернатую дичь.</p>
					<p>Стоимость путёвки на весь сезон (селезень без подсадной утки, гусь и вальдшнеп) 2000 рублей. На селезня с подсадной уткой дополнительно взимается плата в размере 1000 рублей.</p>
					<p class="blog_phone">По вопросу приобретения путёвок звоните <span><a href="tel: <?= $sys_phone ?>"><?= $sys_phone; ?></a></span>.</p>
				</div>
			</div>

		</article>

		<div class="info-block">
			<div class="info-menu">
			<div class="info-menu-block">
				<a class="info-menu__btn1 button" href="news">Все новости</a>
			</div>
			</div>
		</div>
	</div>

	<div class="animals">
		<div class="content">
			<div class="animals-gallery__title">
				<h2 class="text-uppercase text-bold white">ЖИВОТНЫЙ МИР ТАТАРСТАНА</h2>
			</div>

			<div class="animals-gallery">
				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#boar">
						<img class="gallery-item__img" src="/images/fauna_rt/boar.png" alt="">
						<p class="gallery-item__description">Кабан</p>
					</a>
				</div>

				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#elk">
						<img class="gallery-item__img" src="/images/fauna_rt/elk.png" alt="">
						<p class="gallery-item__description">Лось</p>
					</a>
				</div>

				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#hare">
						<img class="gallery-item__img" src="/images/fauna_rt/hare.png" alt="">
						<p class="gallery-item__description">Заяц</p>
					</a>
				</div>

				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#goose">
						<img class="gallery-item__img" src="/images/fauna_rt/goose.png" alt="">
						<p class="gallery-item__description">Гусь</p>
					</a>
				</div>

				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#duck">
						<img class="gallery-item__img" src="/images/fauna_rt/duck.png" alt="">
						<p class="gallery-item__description">Утка</p>
					</a>
				</div>

				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#fox">
						<img class="gallery-item__img" src="/images/fauna_rt/fox.png" alt="">
						<p class="gallery-item__description">Лиса</p>
					</a>
				</div>

				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#beaver">
						<img class="gallery-item__img" src="/images/fauna_rt/beaver.png" alt="">
						<p class="gallery-item__description">Бобр</p>
					</a>
				</div>

				<div class="animals-gallery-item">
					<a class="gallery-item__img" href="hunt#gopher">
						<img class="gallery-item__img" src="/images/fauna_rt/gopher.png" alt="">
						<p class="gallery-item__description">Суслик</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
