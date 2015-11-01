<?php
/* @var $this AtMailContentController */
/* @var $model AtMailContent */

$this->breadcrumbs=array(
	'At Mail Contents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtMailContent', 'url'=>array('index')),
	array('label'=>'Create AtMailContent', 'url'=>array('create')),
	array('label'=>'View AtMailContent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtMailContent', 'url'=>array('admin')),
);
?>

<h1>Update AtMailContent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>