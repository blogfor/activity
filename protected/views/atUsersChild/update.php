<?php
/* @var $this AtUsersChildController */
/* @var $model AtUsersChild */

$this->breadcrumbs=array(
	'At Users Children'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtUsersChild', 'url'=>array('index')),
	array('label'=>'Create AtUsersChild', 'url'=>array('create')),
	array('label'=>'View AtUsersChild', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtUsersChild', 'url'=>array('admin')),
);
?>

<h1>Update AtUsersChild <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>