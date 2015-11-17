<?php
/* @var $this AtAuthvalueController */
/* @var $model AtAuthvalue */

$this->breadcrumbs=array(
	'At Authvalues'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AtAuthvalue', 'url'=>array('index')),
	array('label'=>'Create AtAuthvalue', 'url'=>array('create')),
	array('label'=>'Update AtAuthvalue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtAuthvalue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtAuthvalue', 'url'=>array('admin')),
);
?>

<h1>View AtAuthvalue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'value',
		'membership_desc',
		'number_of_reg',
		'is_active',
		'membership_duration',
	),
)); ?>
