<?php
/* @var $this AtPagesController */
/* @var $model AtPages */

$this->breadcrumbs=array(
	'At Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtPages', 'url'=>array('index')),
	array('label'=>'Manage AtPages', 'url'=>array('admin')),
);
?>

<h1>Create AtPages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>