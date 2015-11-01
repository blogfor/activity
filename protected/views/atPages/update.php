<?php
/* @var $this AtPagesController */
/* @var $model AtPages */

$this->breadcrumbs=array(
	'At Pages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtPages', 'url'=>array('index')),
	array('label'=>'Create AtPages', 'url'=>array('create')),
	array('label'=>'View AtPages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtPages', 'url'=>array('admin')),
);
?>

<h1>Update AtPages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>