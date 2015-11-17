<?php
/* @var $this AtPartnerActivityController */
/* @var $model AtPartnerActivity */

$this->breadcrumbs=array(
	'At Partner Activities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtPartnerActivity', 'url'=>array('index')),
	array('label'=>'Create AtPartnerActivity', 'url'=>array('create')),
	array('label'=>'View AtPartnerActivity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtPartnerActivity', 'url'=>array('admin')),
);
?>

<h1>Update AtPartnerActivity <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>