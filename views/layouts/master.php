<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="header">
	<div class="top-wrap">
		<div class="container">
			<div class="user">
				Вы вошли как: <a href="#" class="username">Говорилкина Н.А.</a>
			</div>
		</div>
	</div>
	<div class="menu-wrap">
		<div class="container">
			<div class="company-wrap">
				<div class="logo-wrap">
					<img src="img/owl_logo.png" alt="">
				</div>
				<div class="about-company">
					<div class="company-name">
						Говорящие уроки
					</div>
					<div class="magratea">
						Интерактивная среда<br />для логопедической работы
					</div>
				</div>
			</div>
			<ul class="menu-block">
				<li class="menu-item"><a href="#">ГЛАВНАЯ</a></li>
				<li class="menu-item"><a href="#">О ПРОЕКТЕ</a></li>
				<li class="menu-item">
					<div class="dropdown">
						<a href="#">НАЧАТЬ РАБОТУ</a>
						<ul class="dropdown-menu">
							<li><a href="#">Обследование</a></li>
							<li><a href="#">Упражнения</a></li>
							<li><a href="#">Ученики</a></li>
						</ul>						
					</div>
				</li>
				<li class="menu-item"><a href="#">ФОРУМ</a></li>
				<li class="menu-item"><a href="#">О КОМПАНИИ</a></li>
			</ul>
		</div>
	</div>
</div>

<?= $content ?>

<footer>
	<div class="container">
		<div class="block">
			<div class="icon">
				<img src="img/phone.png" alt="">
			</div>
			<div class="block-caption">
				<div class="header">Звоните нам</div>
				Tел.: +7 (913) 534 21 74
			</div>
		</div>
		<div class="block">
			<div class="icon">
				<img src="img/email.png" alt="">
			</div>
			<div class="block-caption">
				<div class="header">Пишите нам</div>
				Tел.: +7 (913) 534 21 74
			</div>
		</div>
		<div class="block">
			<div class="icon">
				<img src="img/step.png" alt="">
			</div>
			<div class="block-caption">
				<div class="header">Мы в соц. сетях</div>
				Tел.: +7 (913) 534 21 74
			</div>
		</div>
		<div class="block">
			<div class="icon">
				<img src="img/copyright.png" alt="">
			</div>
			<div class="block-caption">
				<div class="header">&copy;Говорящие уроки</div><br />
				Tел.: +7 (913) 534 21 74
			</div>
		</div>
	</div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>