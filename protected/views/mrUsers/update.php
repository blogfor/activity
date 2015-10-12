<?php
/* @var $this MrUsersController */
/* @var $model MrUsers */

$this->breadcrumbs=array(
	'Mr Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MrUsers', 'url'=>array('index')),
	array('label'=>'Create MrUsers', 'url'=>array('create')),
	array('label'=>'View MrUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MrUsers', 'url'=>array('admin')),
);
?>

<h1>Update MrUsers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>