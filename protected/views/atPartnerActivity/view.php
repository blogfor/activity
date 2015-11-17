<?php
/* @var $this AtPartnerActivityController */
/* @var $model AtPartnerActivity */

$this->breadcrumbs=array(
	'At Partner Activities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtPartnerActivity', 'url'=>array('index')),
	array('label'=>'Create AtPartnerActivity', 'url'=>array('create')),
	array('label'=>'Update AtPartnerActivity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtPartnerActivity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtPartnerActivity', 'url'=>array('admin')),
);
?>

<h1>View AtPartnerActivity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'activity_type_id',
		'age_range',
		'activity_date',
		'activity_time',
		'is_paid',
		'price',
		'address',
		'created',
		'createdby',
		'modifiedby',
	),
)); ?>
