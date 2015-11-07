<?php
/* @var $this AtUsersController */
/* @var $model AtUsers */

$this->breadcrumbs=array(
	'At Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtUsers', 'url'=>array('index')),
	array('label'=>'Create AtUsers', 'url'=>array('create')),
	array('label'=>'View AtUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtUsers', 'url'=>array('admin')),
);
?>

<h1>Update AtUsers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>