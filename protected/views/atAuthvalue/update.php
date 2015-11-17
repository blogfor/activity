<?php
/* @var $this AtAuthvalueController */
/* @var $model AtAuthvalue */

$this->breadcrumbs=array(
	'At Authvalues'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtAuthvalue', 'url'=>array('index')),
	array('label'=>'Create AtAuthvalue', 'url'=>array('create')),
	array('label'=>'View AtAuthvalue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtAuthvalue', 'url'=>array('admin')),
);
?>

<h1>Update AtAuthvalue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>