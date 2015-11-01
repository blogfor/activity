<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */

$this->breadcrumbs=array(
	'At Mail Contents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtMailContent', 'url'=>array('index')),
	array('label'=>'Manage AtMailContent', 'url'=>array('admin')),
);
?>

<h1>Create AtMailContent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>