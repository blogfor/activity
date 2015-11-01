<?php
/* @var $this AtBannerController */
/* @var $model AtBanner */

$this->breadcrumbs=array(
	'At Banners'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtBanner', 'url'=>array('index')),
	array('label'=>'Create AtBanner', 'url'=>array('create')),
	array('label'=>'View AtBanner', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtBanner', 'url'=>array('admin')),
);
?>

<h1>Update AtBanner <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>