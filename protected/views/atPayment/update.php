<?php
/* @var $this AtPaymentController */
/* @var $model AtPayment */

$this->breadcrumbs=array(
	'At Payments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtPayment', 'url'=>array('index')),
	array('label'=>'Create AtPayment', 'url'=>array('create')),
	array('label'=>'View AtPayment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtPayment', 'url'=>array('admin')),
);
?>

<h1>Update AtPayment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>