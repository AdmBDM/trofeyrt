<?php

/* @var $this yii\web\View */
/* @var $news News */

use common\models\News;

$news = News::find();

$this->title = 'Страница новостей';
?>
<div class="site-news">
	<div class="title_img">
		<div class="content">
			<h2 class="title__discr">Новости</h2>
		</div>
	</div>

	<div class="content">
		<?php foreach ($news as $k => $v) {
			echo '<div class="blog">';
			if (is_array($v[1])) {
				echo '<div class="blog__img"><figure><img src="/images/no-image.png" alt=""></figure></div>';
			} else {
				echo '<div class="blog__img"><figure><img src="/images/news/' . $v[1] . '" alt=""></figure></div>';
			}
			echo '<div class="blog_txt">';
			echo $v[2];
			echo '</div></div>';
		}?>

<!--		<div class="blog">-->
<!--			<div class="blog__img"><figure><img src="/images/news/newsXXX.jpg" alt=""></figure></div>-->
<!--			<div class="blog_txt">-->
<!--			</div>-->
<!--		</div>-->

	</div>
</div>
