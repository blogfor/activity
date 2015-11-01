<?php
/* @var $this AtBannerController */
/* @var $model AtBanner */

$this->breadcrumbs=array(
	'At Banners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtBanner', 'url'=>array('index')),
	array('label'=>'Manage AtBanner', 'url'=>array('admin')),
);
?>

<h1>Create AtBanner</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>