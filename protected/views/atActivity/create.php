<?php
/* @var $this AtActivityController */
/* @var $model AtActivity */

$this->breadcrumbs=array(
	'At Activities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtActivity', 'url'=>array('index')),
	array('label'=>'Manage AtActivity', 'url'=>array('admin')),
);
?>

<h1>Create AtActivity</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>