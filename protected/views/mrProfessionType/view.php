<?php
/* @var $this MrProfessionTypeController */
/* @var $model MrProfessionType */

$this->breadcrumbs=array(
	'Mr Profession Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MrProfessionType', 'url'=>array('index')),
	array('label'=>'Create MrProfessionType', 'url'=>array('create')),
	array('label'=>'Update MrProfessionType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MrProfessionType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MrProfessionType', 'url'=>array('admin')),
);
?>

<h1>View MrProfessionType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'profession_type',
	),
)); ?>
