<?php
/* @var $this AtPaymentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'At Payments',
);

$this->menu=array(
	array('label'=>'Create AtPayment', 'url'=>array('create')),
	array('label'=>'Manage AtPayment', 'url'=>array('admin')),
);
?>

<h1>At Payments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
