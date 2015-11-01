<?php
/* @var $this AtActivityController */
/* @var $model AtActivity */

$this->breadcrumbs=array(
	'At Activities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtActivity', 'url'=>array('index')),
	array('label'=>'Create AtActivity', 'url'=>array('create')),
	array('label'=>'View AtActivity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtActivity', 'url'=>array('admin')),
);
?>

<h1>Update AtActivity <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>