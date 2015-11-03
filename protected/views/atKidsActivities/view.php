<?php
/* @var $this AtKidsActivitiesController */
/* @var $model AtKidsActivities */

$this->breadcrumbs=array(
	'At Kids Activities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtKidsActivities', 'url'=>array('index')),
	array('label'=>'Create AtKidsActivities', 'url'=>array('create')),
	array('label'=>'Update AtKidsActivities', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtKidsActivities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtKidsActivities', 'url'=>array('admin')),
);
?>

<h1>View AtKidsActivities #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kids_name',
		'kids_description',
		'kids_image',
		'created',
		'modified',
	),
)); ?>
