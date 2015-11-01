<?php
/* @var $this AtPagesController */
/* @var $model AtPages */

$this->breadcrumbs=array(
	'At Pages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AtPages', 'url'=>array('index')),
	array('label'=>'Create AtPages', 'url'=>array('create')),
	array('label'=>'Update AtPages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtPages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtPages', 'url'=>array('admin')),
);
?>

<h1>View AtPages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'page_name',
		'page_description',
		'created',
		'modified',
	),
)); ?>
