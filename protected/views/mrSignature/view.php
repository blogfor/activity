<?php
/* @var $this MrSignatureController */
/* @var $model MrSignature */

$this->breadcrumbs=array(
	'Mr Signatures'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MrSignature', 'url'=>array('index')),
	array('label'=>'Create MrSignature', 'url'=>array('create')),
	array('label'=>'Update MrSignature', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MrSignature', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MrSignature', 'url'=>array('admin')),
);
?>

<h1>View MrSignature #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'images_name',
		'signature_category',
		'created',
		'modified',
	),
)); ?>
