<?php
/* @var $this AtActivityController */
/* @var $model AtActivity */

$this->breadcrumbs=array(
	'At Activities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtActivity', 'url'=>array('index')),
	array('label'=>'Create AtActivity', 'url'=>array('create')),
	array('label'=>'Update AtActivity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtActivity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtActivity', 'url'=>array('admin')),
);
?>

<h1>View AtActivity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'activity_name',
		'activity_description',
		'activity_image',
		'created',
		'modified',
	),
)); ?>
