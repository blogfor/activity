<?php
/* @var $this MrProfessionTypeController */
/* @var $model MrProfessionType */

$this->breadcrumbs=array(
	'Mr Profession Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MrProfessionType', 'url'=>array('index')),
	array('label'=>'Manage MrProfessionType', 'url'=>array('admin')),
);
?>

<h1>Create New Route of Entry</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>