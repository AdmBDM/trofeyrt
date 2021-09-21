<?php
/** @var string $sys_phone */
/** @var string $sys_mail */

$sys_phone = Yii::$app->params['sys_phone'];
$sys_mail = Yii::$app->params['sys_mail'];
?>

<header>
	<div class="content">
		<div class="contacts">
			<div class="contacts-left">
				<a href="mailto: <?= $sys_mail; ?>"><?= $sys_mail; ?></a>
			</div>
			<div class="contacts-right">
				<a href="tel: <?= $sys_phone ?>"><?= $sys_phone; ?></a>
				<button id="my-btn" name="call-me" class="button" type="button">
					Обратная связь
				</button>
			</div>
		</div>

		<div class="header__logo">
			<img src="/images/logohead.png" alt="" class="logo col-2">
		</div>
	</div>
</header>

<nav>
	<div class="content">
		<div class="menu">
			<div class="menu menu-1">
				<a class="menu_item" href="/site/index">О КЛУБЕ</a>
				<a class="menu_item" href="/site/hunt">ОХОТА В ТАТАРСТАНЕ</a>
			</div>
			<div class="menu menu-2">
				<a class="menu_item" href="/site/info">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a>
				<a class="menu_item" href="/site/news">НОВОСТИ</a>
			</div>
		</div>
	</div>
</nav>

