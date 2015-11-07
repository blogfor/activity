<?php
/* @var $this AtUsersController */
/* @var $model AtUsers */

$this->breadcrumbs=array(
	'At Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtUsers', 'url'=>array('index')),
	array('label'=>'Manage AtUsers', 'url'=>array('admin')),
);
?>

<h1>Create AtUsers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>