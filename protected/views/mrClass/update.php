<?php
/* @var $this MrClassController */
/* @var $model MrClass */

$this->breadcrumbs=array(
	'Mr Classes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MrClass', 'url'=>array('index')),
	array('label'=>'Create MrClass', 'url'=>array('create')),
	array('label'=>'View MrClass', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MrClass', 'url'=>array('admin')),
);
?>

<h1>Update MrClass <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>