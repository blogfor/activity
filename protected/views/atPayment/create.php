<?php
/* @var $this AtPaymentController */
/* @var $model AtPayment */

$this->breadcrumbs=array(
	'At Payments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtPayment', 'url'=>array('index')),
	array('label'=>'Manage AtPayment', 'url'=>array('admin')),
);
?>

<h1>Create AtPayment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>