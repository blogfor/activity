<?php
/* @var $this AtAuthvalueChildController */
/* @var $model AtAuthvalueChild */

$this->breadcrumbs=array(
	'At Authvalue Children'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AtAuthvalueChild', 'url'=>array('index')),
	array('label'=>'Create AtAuthvalueChild', 'url'=>array('create')),
	array('label'=>'Update AtAuthvalueChild', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtAuthvalueChild', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtAuthvalueChild', 'url'=>array('admin')),
);
?>

<h1>View AtAuthvalueChild #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'value',
		'classes',
		'membership_desc',
		'number_of_reg',
		'is_active',
		'membership_duration',
	),
)); ?>
