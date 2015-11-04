<?php
/* @var $this AtUsersChildController */
/* @var $model AtUsersChild */

$this->breadcrumbs=array(
	'At Users Children'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtUsersChild', 'url'=>array('index')),
	array('label'=>'Manage AtUsersChild', 'url'=>array('admin')),
);
?>

<h1>Create AtUsersChild</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>