<?php
/* @var $this MrProfessionTypeController */
/* @var $model MrProfessionType */

$this->breadcrumbs=array(
	'Mr Profession Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MrProfessionType', 'url'=>array('index')),
	array('label'=>'Create MrProfessionType', 'url'=>array('create')),
	array('label'=>'View MrProfessionType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MrProfessionType', 'url'=>array('admin')),
);
?>

<h1>Update Route of Entry <?php //echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>