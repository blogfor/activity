<?php
/* @var $this AtBannerController */
/* @var $model AtBanner */

$this->breadcrumbs=array(
	'At Banners'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtBanner', 'url'=>array('index')),
	array('label'=>'Create AtBanner', 'url'=>array('create')),
	array('label'=>'Update AtBanner', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtBanner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtBanner', 'url'=>array('admin')),
);
?>

<h1>View AtBanner #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'banner_title',
		'banner_description',
		'banner_link',
		'banner_order',
		'status',
		'added',
		'modified',
	),
)); ?>
