<?php
/* @var $this AtUsersChildController */
/* @var $model AtUsersChild */

$this->breadcrumbs=array(
	'At Users Children'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtUsersChild', 'url'=>array('index')),
	array('label'=>'Create AtUsersChild', 'url'=>array('create')),
	array('label'=>'Update AtUsersChild', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtUsersChild', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtUsersChild', 'url'=>array('admin')),
);
?>

<h1>View AtUsersChild #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'child_name',
		'child_age',
		'added',
		'modified',
	),
)); ?>
