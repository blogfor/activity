<?php
/* @var $this AtPartnerActivityController */
/* @var $model AtPartnerActivity */

$this->breadcrumbs=array(
	'At Partner Activities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtPartnerActivity', 'url'=>array('index')),
	array('label'=>'Manage AtPartnerActivity', 'url'=>array('admin')),
);
?>

<h1>Create AtPartnerActivity</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>