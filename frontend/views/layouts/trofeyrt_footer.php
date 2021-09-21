<?php
/** @var string $sys_phone */
/** @var string $sys_mail */

//use yii\bootstrap4\Html;

$sys_phone = Yii::$app->params['sys_phone'];
$sys_mail = Yii::$app->params['sys_mail'];
?>

<footer>
	<div class="content">
		<div class="footer-title">
			<h3>ОХОТНИЧИЙ КЛУБ «ТРОФЕЙ»</h3>
		</div>
		<div class="footer-info">
			<div class="footer-info__logo">
				<img src="/images/logofooter.png" alt="">
			</div>
			<div class="footer-info__contacts">
				<img src="/images/icon3.png" alt="">
				<a href="tel: <?= $sys_phone?>"><?= $sys_phone?></a>
			</div>
			<div class="footer-info__contacts">
				<img src="/images/icon4.png" alt="">
				<span>Казань, Вишневского 26</span>
			</div>
			<div class="footer-info__contacts">
				<img class="footer-info-contacts__img" src="/images/icon5.png" alt="">
				<a href="mailto: <?= $sys_mail?>"><?= $sys_mail?></a>
			</div>
		</div>
	</div>
</footer>
