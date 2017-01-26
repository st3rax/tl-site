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
	<div class="top-wrap"></div>
	<div class="menu-wrap">
		<div class="company-wrap">
			<div class="logo-wrap"></div>
			<div class="company-name"></div>
			<div class="magratea"></div>
		</div>
		<div class="menu-block">
			
		</div>
	</div>
</div>


<footer>
	
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>